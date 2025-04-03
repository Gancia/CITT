from django.db import models

# Create your models here.

from django.db import models
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

class Proyecto(models.Model):
    nombre = models.CharField(max_length=200)
    descripcion = models.TextField()
    fecha_inicio = models.DateField()
    fecha_fin = models.DateField(blank=True, null=True)
    categoria = models.ForeignKey(Categoria, on_delete=models.SET_NULL, null=True)
    estado = models.ForeignKey(EstadoProyecto, on_delete=models.SET_NULL, null=True)
    mentor = models.ForeignKey(Mentor, on_delete=models.SET_NULL, null=True, blank=True)
    
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
