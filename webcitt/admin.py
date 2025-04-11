from django.contrib import admin
from .models import Proyecto, Categoria, EstadoProyecto, Mentor, Integrante, Documento, Imagen, Submodulo

class ImagenInline(admin.TabularInline):
    model = Imagen
    extra = 1
    fields = ('tipo', 'archivo', 'video_url', 'descripcion')

class SubmoduloInline(admin.TabularInline):
    model = Submodulo
    extra = 1
    fields = ('nombre', 'categoria_submodulo', 'imagenes_videos', 'archivo_pdf', 'archivo_html')

@admin.register(Proyecto)
class ProyectoAdmin(admin.ModelAdmin):
    list_display = ('nombre', 'categoria', 'estado', 'mentor', 'fecha_inicio', 'fecha_fin')
    search_fields = ('nombre',)
    list_filter = ('categoria', 'estado')
    inlines = [ImagenInline, SubmoduloInline]

@admin.register(Categoria)
class CategoriaAdmin(admin.ModelAdmin):
    list_display = ('nombre', 'descripcion')

@admin.register(EstadoProyecto)
class EstadoProyectoAdmin(admin.ModelAdmin):
    list_display = ('nombre', 'descripcion')

@admin.register(Mentor)
class MentorAdmin(admin.ModelAdmin):
    list_display = ('usuario', 'especialidad', 'contacto')

@admin.register(Integrante)
class IntegranteAdmin(admin.ModelAdmin):
    list_display = ('usuario', 'proyecto', 'rol')

@admin.register(Documento)
class DocumentoAdmin(admin.ModelAdmin):
    list_display = ('nombre', 'proyecto', 'fecha_subida')

