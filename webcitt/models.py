from django.db import models
from django.core.validators import FileExtensionValidator
from django.contrib.auth.models import User
from django.core.exceptions import ValidationError

class Categoria(models.Model):
    nombre = models.CharField(max_length=100, unique=True)
    descripcion = models.TextField(blank=True, null=True)
    
    def __str__(self):
        return self.nombre

class EstadoProyecto(models.Model):
    nombre = models.CharField(max_length=50, unique=True)
    descripcion = models.TextField(blank=True, null=True)
    activo = models.BooleanField(default=True)  # Campo para indicar si el estado está activo o inactivo

    def __str__(self):
        return self.nombre

class Mentor(models.Model):
    usuario = models.OneToOneField(User, on_delete=models.CASCADE)
    especialidad = models.CharField(max_length=200)
    contacto = models.EmailField()
    
    def __str__(self):
        return f"{self.usuario.first_name} {self.usuario.last_name}"  

class Imagen(models.Model):
    TIPO_CHOICES = [
        ('imagen', 'Imagen'),
        ('video', 'Video'),
        ('youtube', 'YouTube'),
    ]

    proyecto = models.ForeignKey(
        'Proyecto',
        on_delete=models.CASCADE,
        related_name='imagenes_set'  # Updated related_name to avoid conflict
    )
    tipo = models.CharField(max_length=10, choices=TIPO_CHOICES, default='imagen')  # Field to specify type
    archivo = models.FileField(upload_to='proyectos_imagenes/', blank=True, null=True)  # For images or uploaded videos
    video_url = models.URLField(blank=True, null=True)  # For YouTube links
    descripcion = models.CharField(max_length=255, blank=True, null=True)

    def __str__(self):
        return self.descripcion or f"{self.tipo.capitalize()} {self.id}"

class Proyecto(models.Model):
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
    submodulos = models.ManyToManyField('Submodulo', blank=True, related_name='proyectos')
    descripcion_corta = models.CharField(max_length=255, blank=True, null=True)  # Campo para una descripción breve

    def __str__(self):
        return self.nombre

class Submodulo(models.Model):
    CATEGORIA_SUBMODULO_CHOICES = [
        ('presentacion', 'Presentación'),
        ('recursosAprendizaje', 'Recursos de Aprendizaje y Práctica'),
    ]

    nombre = models.CharField(max_length=255)
    proyecto = models.ForeignKey(
        Proyecto,
        on_delete=models.CASCADE,
        related_name='submodulos_set',
        null=True,  # Permite valores nulos
        blank=True  # Permite que el campo sea opcional en formularios
    )
    categoria_submodulo = models.CharField(max_length=50, choices=CATEGORIA_SUBMODULO_CHOICES)
    imagenes_videos = models.ManyToManyField(Imagen, blank=True)  # For Presentación
    archivo_pdf = models.FileField(
        upload_to='submodulos/pdf/',
        blank=True,
        null=True,
        validators=[FileExtensionValidator(allowed_extensions=['pdf'])]
    )  # For Recursos de Aprendizaje
    archivo_html = models.FileField(
        upload_to='submodulos/html/',
        blank=True,
        null=True,
        validators=[FileExtensionValidator(allowed_extensions=['html'])]
    )  # For Recursos de Aprendizaje
    activo = models.BooleanField(default=True)  # Campo para indicar si el submódulo está activo o inactivo
    archivos = models.ManyToManyField('ArchivoSubmodulo', blank=True, related_name='submodulos')

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

class ArchivoSubmodulo(models.Model):
    TIPO_ARCHIVO_CHOICES = [
        ('pdf', 'PDF'),
        ('html', 'HTML'),
        ('imagen', 'Imagen'),
        ('video', 'Video'),
    ]

    submodulo = models.ForeignKey(
        'Submodulo',
        on_delete=models.CASCADE,
        related_name='archivos_submodulo'  # Cambia el related_name para evitar conflictos
    )
    nombre = models.CharField(max_length=255)
    tipo = models.CharField(max_length=10, choices=TIPO_ARCHIVO_CHOICES)
    archivo = models.FileField(upload_to='submodulos/archivos/')

    def clean(self):
        validar_tipo_archivo(self.archivo, self.tipo)

    def __str__(self):
        return f"{self.nombre} ({self.tipo})"

class Integrante(models.Model):
    usuario = models.ForeignKey(User, on_delete=models.CASCADE)
    proyecto = models.ForeignKey(Proyecto, on_delete=models.CASCADE, related_name='integrantes')
    rol = models.CharField(max_length=100)
    
    def __str__(self):
        return f"{self.usuario.first_name} {self.usuario.last_name} - {self.proyecto.nombre}"  

class Documento(models.Model):
    proyecto = models.ForeignKey(Proyecto, on_delete=models.CASCADE, related_name='documentos')
    nombre = models.CharField(max_length=255)
    archivo = models.FileField(upload_to='documentos_proyectos/')
    fecha_subida = models.DateTimeField(auto_now_add=True)
    
    def __str__(self):
        return self.nombre
