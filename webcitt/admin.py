from django.contrib import admin
from django.utils.html import format_html
from .models import Proyecto, Categoria, EstadoProyecto, Mentor, Integrante, Documento, Recurso, ArchivoRecurso, CarpetaRecurso

class RecursoInline(admin.TabularInline):
    model = Recurso
    extra = 1
    fields = ('nombre', 'modulo', 'carpeta', 'activo')  # Removed 'archivo'

class ArchivoRecursoInline(admin.TabularInline):
    model = ArchivoRecurso
    extra = 1
    fields = ('nombre', 'tipo', 'archivo')

class ArchivoRecursoInline(admin.TabularInline):
    model = Recurso.archivos.through
    extra = 1

@admin.register(Proyecto)
class ProyectoAdmin(admin.ModelAdmin):
    list_display = ('nombre', 'categoria', 'mentor', 'fecha_inicio', 'fecha_fin', 'activo')
    list_editable = ('activo',)
    list_filter = ('categoria', 'activo')
    search_fields = ('nombre', 'mentor__username')
    inlines = [RecursoInline]
    readonly_fields = ('vista_previa_imagen',)

    def imagen_proyecto(self, obj):
        if obj.imagen and obj.imagen.url:
            return format_html('<img src="{}" style="width: 50px; height: auto;" />', obj.imagen.url)
        return "No image"
    imagen_proyecto.short_description = "Imagen"

    def vista_previa_imagen(self, obj):
        if obj.imagen and obj.imagen.url:
            return format_html('<img src="{}" style="max-width: 300px; height: auto;" />', obj.imagen.url)
        return "No image"
    vista_previa_imagen.short_description = "Vista Previa de la Imagen"

    fields = ('nombre', 'descripcion', 'fecha_inicio', 'fecha_fin', 'categoria', 'activo', 'mentor', 'imagen', 'vista_previa_imagen')

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

@admin.register(Recurso)
class RecursoAdmin(admin.ModelAdmin):
    list_display = ('nombre', 'modulo', 'carpeta', 'activo')
    list_editable = ('activo',)
    list_filter = ('activo', 'modulo', 'carpeta')
    search_fields = ('nombre', 'carpeta__nombre')
    fields = ('nombre', 'modulo', 'carpeta', 'activo')  # Removed 'archivo'
    filter_horizontal = ('archivos',)

    class Media:
        js = ('js/admin_recurso.js',)

@admin.register(ArchivoRecurso)
class ArchivoRecursoAdmin(admin.ModelAdmin):
    list_display = ('nombre', 'tipo', 'archivo', 'fecha_subida')
    list_filter = ('tipo', 'fecha_subida')
    search_fields = ('nombre',)

@admin.register(CarpetaRecurso)
class CarpetaRecursoAdmin(admin.ModelAdmin):
    list_display = ('nombre',)
    search_fields = ('nombre',)

