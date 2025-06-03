from django.db import models
from django.core.validators import FileExtensionValidator
from django.contrib.auth.models import User
from django.core.exceptions import ValidationError
import zipfile
import os
from django.conf import settings

class Categoria(models.Model):
    nombre = models.CharField(max_length=100, unique=True)
    descripcion = models.TextField(blank=True, null=True)
    
    def __str__(self):
        return self.nombre

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
    laboratorio = models.CharField(max_length=200, blank=True, null=True)
    visitas = models.PositiveIntegerField(default=0)
    ultima_actualizacion = models.DateTimeField(auto_now=True)
    fecha_fin = models.DateField(blank=True, null=True)
    categoria = models.ForeignKey(Categoria, on_delete=models.SET_NULL, null=True)
    activo = models.BooleanField(default=True)
    mentor = models.ForeignKey(User, on_delete=models.SET_NULL, null=True, blank=True)
    imagen = models.ImageField(upload_to='proyectos_imagenes/', blank=True, null=True)
    descripcion_corta = models.CharField(max_length=255, blank=True, null=True)
    likes = models.PositiveIntegerField(default=0)
    slug = models.SlugField(max_length=100, unique=True, null=True)
    dependencia = models.CharField(
        max_length=50,
        choices=DEPENDENCIA_CHOICES,
        blank=True,
        null=True,
        help_text="Seleccione la dependencia asociada al proyecto."
    )

    def __str__(self):
        return self.nombre

class CarpetaRecurso(models.Model):
    MODULO_CHOICES = [
        ('inicio', 'Inicio'),
        ('recursosAprendizaje', 'Recursos de Aprendizaje y Práctica'),
        ('investigacion', 'Investigación, Innovación y Desarrollo'),
        ('servicios', 'Servicios y Soporte'),
        ('colaboracion', 'Colaboración y Networking')
    ]
    nombre = models.CharField(max_length=255)
    proyecto = models.ForeignKey(
        'Proyecto',
        on_delete=models.CASCADE,
        related_name='carpetas',
        help_text="Proyecto al que pertenece esta carpeta.",
        default=1  # Reemplaza '1' con el ID de un proyecto existente
    )
    modulo = models.CharField(max_length=50, choices=MODULO_CHOICES, default='inicio')

    class Meta:
        unique_together = ('nombre', 'proyecto')

    def __str__(self):
        return self.nombre

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
    url = models.URLField(blank=True, null=True)
    fecha_subida = models.DateTimeField(auto_now_add=True)

    def clean(self):
        if self.archivo and self.url:
            raise ValidationError("Solo puede proporcionar un archivo o una URL, no ambos.")
        if not self.archivo and not self.url:
            raise ValidationError("Debe proporcionar un archivo o una URL.")

    def __str__(self):
        return f"{self.tipo} - {self.archivo.name if self.archivo else self.url}"

class Recurso(models.Model):
    nombre = models.CharField(max_length=255)
    proyecto = models.ForeignKey(
        'Proyecto',
        on_delete=models.CASCADE,
        related_name='recursos',
        help_text="Proyecto al que pertenece este recurso."
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
        on_delete=models.SET_NULL,
        null=True,
        blank=True,
        related_name='recursos'
    )

    def __str__(self):
        return self.nombre

    def save(self, *args, **kwargs):
        super().save(*args, **kwargs)
        if self.archivo and self.archivo.name.endswith('.zip'):
            folder_name = os.path.splitext(os.path.basename(self.archivo.name))[0]
            destino = os.path.join(settings.MEDIA_ROOT, 'recursos/archivos', folder_name)
            os.makedirs(destino, exist_ok=True)
            archivo_zip_path = self.archivo.path
            with zipfile.ZipFile(archivo_zip_path, 'r') as zip_ref:
                zip_ref.extractall(destino)

class ArchivoRecurso(models.Model):
    TIPO_ARCHIVO_CHOICES = [
        ('pdf', 'PDF'),
        ('html', 'HTML'),
        ('imagen', 'Imagen'),
        ('video', 'Video'),
        ('otro', 'Otro'),
    ]

    tipo = models.CharField(max_length=10, choices=TIPO_ARCHIVO_CHOICES)
    archivo = models.FileField(upload_to='recursos/archivos/', blank=True, null=True)
    url = models.URLField(blank=True, null=True)
    fecha_subida = models.DateTimeField(auto_now_add=True)

    def clean(self):
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

class CarpetaSubmodulo(models.Model):
    nombre = models.CharField(max_length=255, unique=True)
    descripcion = models.TextField(blank=True, null=True)
    proyecto = models.ForeignKey(
        'Proyecto',
        on_delete=models.CASCADE,
        related_name='carpetas_submodulo',
        help_text="Proyecto al que pertenece esta carpeta de submódulo."
    )

    def __str__(self):
        return self.nombre
