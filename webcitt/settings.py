from django.db import models
from django.core.validators import FileExtensionValidator
from django.contrib.auth.models import User
from django.core.exceptions import ValidationError
import zipfile

class Categoria(models.Model):
    nombre = models.CharField(max_length=100, unique=True)
    descripcion = models.TextField(blank=True, null=True)
    
    def __str__(self):
        return self.nombre

# Removed the EstadoProyecto model

class Mentor(models.Model):
    usuario = models.OneToOneField(User, on_delete=models.CASCADE)
    especialidad = models.CharField(max_length=200)
    contacto = models.EmailField()
    
    def __str__(self):
        return f"{self.usuario.first_name} {self.usuario.last_name}"  

class Proyecto(models.Model):
    DEPENDENCIA_CHOICES = [
        ('san_francisco', 'Centro Experimental - San Francisco'),
        ('alfonso_tadeo', 'Centro Experimental - Alfonso Tadeó'),
        ('realidad_virtual', 'Laboratorio de Realidad Virtual - Extendida (Logística)'),
        ('fablab', 'Laboratorio Fablab'),
        ('lacteos', 'Planta de Procesamiento de Productos Lácteos'),
        ('robotica', 'Laboratorio de Robótica y Electrónica Aplicada'),
        ('multimedia', 'Laboratorio de Formación Informativa de Multimedia'),
        ('diagnostico', 'Laboratorio Investigación de Diagnóstico Serológico Molecular'),
        ('turismo', 'Laboratorio de Turismo del Carchi'),
        ('sensorial', 'Laboratorio de Evaluación Sensorial de Alimentos'),
        ('asuntos_publicos', 'Laboratorio de Asuntos Públicos'),
    ]

    nombre = models.CharField(max_length=200)
    descripcion = models.TextField()
    fecha_inicio = models.DateField()
    laboratorio = models.CharField(max_length=200, blank=True, null=True)  # Campo para vincular a un laboratorio
    visitas = models.PositiveIntegerField(default=0)  # Contador de visitas
    ultima_actualizacion = models.DateTimeField(auto_now=True)  # Fecha de última actualización automática
    fecha_fin = models.DateField(blank=True, null=True)
    categoria = models.ForeignKey(Categoria, on_delete=models.SET_NULL, null=True)
    activo = models.BooleanField(default=True)  # Campo para indicar si el proyecto está activo o inactivo
    mentor = models.ForeignKey(User, on_delete=models.SET_NULL, null=True, blank=True)  # Relación directa con User
    imagen = models.ImageField(upload_to='proyectos_imagenes/', blank=True, null=True)  # Campo para una única imagen
    descripcion_corta = models.CharField(max_length=255, blank=True, null=True)  # Campo para una descripción breve
    recursos = None  # Removed ManyToManyField
    likes = models.PositiveIntegerField(default=0)  # Contador de "me gusta"
    slug = models.SlugField(max_length=100, unique=True, null=True)  # Campo slug para URL amigable
    dependencia = models.CharField(
        max_length=50,
        choices=DEPENDENCIA_CHOICES,
        blank=True,
        null=True,
        help_text="Seleccione la dependencia asociada al proyecto."
    )

    def __str__(self):
        return self.nombre

class CarpetaSubmodulo(models.Model):
    nombre = models.CharField(max_length=255, unique=True)
    descripcion = models.TextField(blank=True, null=True)

    def __str__(self):
        return self.nombre

class CarpetaRecurso(models.Model):  # Modelo para representar carpetas
    MODULO_CHOICES = [
        ('presentacion', 'Presentación'),
        ('recursosAprendizaje', 'Recursos de Aprendizaje y Práctica'),
        ('investigacion', 'Investigación, Innovación y Desarrollo'),
        ('servicios', 'Servicios y Soporte'),
        ('colaboracion', 'Colaboración y Networking')
    ]
    nombre = models.CharField(max_length=255)
    proyecto = models.ForeignKey(
        'Proyecto',
        on_delete=models.CASCADE,  # Asegura que las carpetas se eliminen solo con su proyecto
        related_name='carpetas',
        help_text="Proyecto al que pertenece esta carpeta."
    )
    modulo = models.CharField(max_length=50, choices=MODULO_CHOICES, default='presentacion')

    class Meta:
        unique_together = ('nombre', 'proyecto')  # Garantiza que no haya duplicados por proyecto

    def __str__(self):
        return self.nombre  # Muestra solo el nombre de la carpeta

class Archivo(models.Model):
    TIPO_ARCHIVO_CHOICES = [
        ('pdf', 'PDF'),
        ('html', 'HTML'),
        ('imagen', 'Imagen'),
        ('video', 'Video'),
        ('otro', 'Otro'),
    ]

    tipo = models.CharField(max_length=10, choices=TIPO_ARCHIVO_CHOICES)
    archivo = models.FileField(upload_to='archivos/', blank=True, null=True)
    url = models.URLField(blank=True, null=True)  # Nuevo campo para URL
    fecha_subida = models.DateTimeField(auto_now_add=True)

    def clean(self):
        # Validar que solo uno de los campos 'archivo' o 'url' esté presente
        if self.archivo and self.url:
            raise ValidationError("Solo puede proporcionar un archivo o una URL, no ambos.")
        if not self.archivo and not self.url:
            raise ValidationError("Debe proporcionar un archivo o una URL.")

    def __str__(self):
        return f"{self.tipo} - {self.archivo.name if self.archivo else self.url}"

class Recurso(models.Model):  # Renombrado de Submodulo a Recurso
    nombre = models.CharField(max_length=255)
    proyecto = models.ForeignKey(
        'Proyecto',  # Relación con el modelo Proyecto
        on_delete=models.CASCADE,
        related_name='recursos',  # Updated related_name
        help_text="Proyecto al que pertenece este recurso.",
        default=1  # Replace '1' with el ID de un proyecto existente
    )
    archivo = models.FileField(
        upload_to='recursos/archivos/',
        blank=True,
        null=True,
        help_text="Suba un archivo ZIP que contenga un archivo HTML."
    )
    activo = models.BooleanField(default=True)
    carpeta = models.ForeignKey(
        'CarpetaRecurso',
        on_delete=models.SET_NULL,  # Agregado el argumento obligatorio
        null=True,
        blank=True,
        related_name='recursos'
    )

    def __str__(self):
        return self.nombre

def validar_tipo_archivo(archivo, tipo):
    if tipo == 'pdf' and not archivo.name.endswith('.pdf'):
        raise ValidationError('El archivo debe ser un PDF.')
    elif tipo == 'html' and not archivo.name.endswith('.html'):
        raise ValidationError('El archivo debe ser un archivo HTML.')
    elif tipo == 'imagen' and not archivo.name.lower().endswith(('.png', '.jpg', '.jpeg', '.gif')):
        raise ValidationError('El archivo debe ser una imagen.')
    elif tipo == 'video' and not archivo.name.lower().endswith(('.mp4', '.avi', '.mov', '.mkv')):
        raise ValidationError('El archivo debe ser un video.')

class ArchivoRecurso(models.Model):  # Renombrado de ArchivoSubmodulo a ArchivoRecurso
    TIPO_ARCHIVO_CHOICES = [
        ('pdf', 'PDF'),
        ('html', 'HTML'),
        ('imagen', 'Imagen'),
        ('video', 'Video'),
        ('otro', 'Otro'),
    ]

    tipo = models.CharField(max_length=10, choices=TIPO_ARCHIVO_CHOICES)
    archivo = models.FileField(upload_to='recursos/archivos/', blank=True, null=True)
    url = models.URLField(blank=True, null=True)  # Nuevo campo para URL
    fecha_subida = models.DateTimeField(auto_now_add=True)

    def clean(self):
        # Validar que solo uno de los campos 'archivo' o 'url' esté presente
        if self.archivo and self.url:
            raise ValidationError("Solo puede proporcionar un archivo o una URL, no ambos.")
        if not self.archivo and not self.url:
            raise ValidationError("Debe proporcionar un archivo o una URL.")

    def __str__(self):
        return f"{self.tipo} - {self.archivo.name if self.archivo else self.url}"

class Integrante(models.Model):
    usuario = models.ForeignKey(User, on_delete=models.CASCADE)
    proyecto = models.ForeignKey(Proyecto, on_delete=models.CASCADE, related_name='integrantes')
    rol = models.CharField(max_length=100)
    
    def __str__(self):
        return f"{self.usuario.first_name} {self.usuario.last_name} - {self.proyecto.nombre}"

X_FRAME_OPTIONS = 'SAMEORIGIN'