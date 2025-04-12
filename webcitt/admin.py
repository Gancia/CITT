from django.contrib import admin
from django.utils.html import format_html
from .models import Proyecto, Categoria, EstadoProyecto, Mentor, Integrante, Documento, Imagen, Submodulo, ArchivoSubmodulo

class ImagenInline(admin.TabularInline):
    model = Imagen
    extra = 1
    fields = ('tipo', 'archivo', 'video_url', 'descripcion')

class SubmoduloInline(admin.TabularInline):
    model = Submodulo
    extra = 1
    fields = ('nombre', 'categoria_submodulo', 'imagenes_videos', 'archivo_pdf', 'archivo_html', 'activo')

class ArchivoSubmoduloInline(admin.TabularInline):
    model = ArchivoSubmodulo
    extra = 1
    fields = ('nombre', 'tipo', 'archivo')

@admin.register(Proyecto)
class ProyectoAdmin(admin.ModelAdmin):
    list_display = ('nombre', 'categoria', 'mentor', 'fecha_inicio', 'fecha_fin', 'activo', 'imagen_proyecto')  # Muestra el usuario como mentor
    list_editable = ('activo',)
    list_filter = ('categoria', 'activo')
    search_fields = ('nombre', 'mentor__username')  # Permite buscar por el nombre de usuario del mentor
    inlines = [ImagenInline, SubmoduloInline]
    readonly_fields = ('vista_previa_imagen',)  # Campo de solo lectura para mostrar la imagen

    def imagen_proyecto(self, obj):
        if (obj.imagen and obj.imagen.url):
            return format_html('<img src="{}" style="width: 50px; height: auto;" />', obj.imagen.url)
        return "No image"
    imagen_proyecto.short_description = "Imagen"

    def vista_previa_imagen(self, obj):
        if obj.imagen and obj.imagen.url:
            return format_html('<img src="{}" style="max-width: 300px; height: auto;" />', obj.imagen.url)
        return "No image"
    vista_previa_imagen.short_description = "Vista Previa de la Imagen"

    fields = ('nombre', 'descripcion', 'fecha_inicio', 'fecha_fin', 'categoria', 'activo', 'mentor', 'imagen', 'vista_previa_imagen')  # Incluye el campo de vista previa

@admin.register(Categoria)
class CategoriaAdmin(admin.ModelAdmin):
    list_display = ('nombre', 'descripcion')

@admin.register(EstadoProyecto)
class EstadoProyectoAdmin(admin.ModelAdmin):
    list_display = ('nombre', 'descripcion', 'activo')
    list_editable = ('activo',)
    list_filter = ('activo',)
    search_fields = ('nombre',)
    fields = ('nombre', 'descripcion', 'activo')

@admin.register(Mentor)
class MentorAdmin(admin.ModelAdmin):
    list_display = ('usuario', 'especialidad', 'contacto')

@admin.register(Integrante)
class IntegranteAdmin(admin.ModelAdmin):
    list_display = ('usuario', 'proyecto', 'rol')

@admin.register(Documento)
class DocumentoAdmin(admin.ModelAdmin):
    list_display = ('nombre', 'proyecto', 'fecha_subida')

@admin.register(Submodulo)
class SubmoduloAdmin(admin.ModelAdmin):
    list_display = ('nombre', 'categoria_submodulo', 'activo')
    list_editable = ('activo',)
    list_filter = ('activo', 'categoria_submodulo')
    search_fields = ('nombre',)
    fields = ('nombre', 'categoria_submodulo', 'imagenes_videos', 'archivo_pdf', 'archivo_html', 'activo')
    inlines = [ArchivoSubmoduloInline]

