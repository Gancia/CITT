from django.db import models
from django.core.validators import FileExtensionValidator
from django.contrib.auth.models import User

class Categoria(models.Model):
    nombre = models.CharField(max_length=100, unique=True)
    descripcion = models.TextField(blank=True, null=True)
    
    def __str__(self):
        return self.nombre

class EstadoProyecto(models.Model):
    nombre = models.CharField(max_length=50, unique=True)
    descripcion = models.TextField(blank=True, null=True)
    
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
    fecha_fin = models.DateField(blank=True, null=True)
    categoria = models.ForeignKey(Categoria, on_delete=models.SET_NULL, null=True)
    estado = models.ForeignKey(EstadoProyecto, on_delete=models.SET_NULL, null=True)
    mentor = models.ForeignKey(Mentor, on_delete=models.SET_NULL, null=True, blank=True)
    imagenes = models.ManyToManyField(Imagen, blank=True, related_name='proyectos')
    submodulos = models.ManyToManyField('Submodulo', blank=True, related_name='proyectos')

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
        related_name='submodulos_set'  # Updated related_name to avoid conflict
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

    def __str__(self):
        return self.nombre

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
