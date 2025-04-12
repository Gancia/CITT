from django.contrib import admin
from django.utils.html import format_html
from .models import Proyecto, Categoria, Mentor, Integrante, Recurso, ArchivoRecurso, CarpetaRecurso

class ArchivoRecursoInline(admin.TabularInline):
    model = ArchivoRecurso
    extra = 1
    fields = ('nombre', 'tipo', 'archivo')  # Ensure correct fields are displayed

class RecursoInline(admin.TabularInline):
    model = Recurso
    extra = 1
    fields = ('nombre', 'modulo', 'proyecto', 'carpeta', 'activo', 'archivos')  # Copia los campos necesarios
    filter_horizontal = ('archivos',)  # Copia la configuración de filtros
    readonly_fields = ('proyecto',)  # Muestra el proyecto como solo lectura

@admin.register(Proyecto)
class ProyectoAdmin(admin.ModelAdmin):
    list_display = ('nombre', 'categoria', 'mentor', 'fecha_inicio', 'fecha_fin', 'activo')
    list_editable = ('activo',)
    list_filter = ('categoria', 'activo')
    search_fields = ('nombre', 'mentor__username')
    inlines = [RecursoInline]
    readonly_fields = ('vista_previa_imagen',)

    def imagen_proyecto(self, obj):
        if obj.imagen and obj.imagen.url:  # Cambiado '&&' por 'and'
            return format_html('<img src="{}" style="width: 50px; height: auto;" />', obj.imagen.url)
        return "No image"
    imagen_proyecto.short_description = "Imagen"

    def vista_previa_imagen(self, obj):
        if obj.imagen and obj.imagen.url:  # Cambiado '&&' por 'and'
            return format_html('<img src="{}" style="max-width: 300px; height: auto;" />', obj.imagen.url)
        return "No image"
    vista_previa_imagen.short_description = "Vista Previa de la Imagen"

    fields = ('nombre', 'descripcion', 'fecha_inicio', 'fecha_fin', 'categoria', 'activo', 'mentor', 'imagen', 'vista_previa_imagen')

    class Media:
        js = ('js/admin_proyecto.js',)  # Archivo JS para manejar actualizaciones dinámicas

@admin.register(Categoria)
class CategoriaAdmin(admin.ModelAdmin):
    list_display = ('nombre', 'descripcion')

@admin.register(Mentor)
class MentorAdmin(admin.ModelAdmin):
    list_display = ('usuario', 'especialidad', 'contacto')

@admin.register(Integrante)
class IntegranteAdmin(admin.ModelAdmin):
    list_display = ('usuario', 'proyecto', 'rol')

@admin.register(Recurso)
class RecursoAdmin(admin.ModelAdmin):
    list_display = ('nombre', 'modulo', 'proyecto', 'carpeta', 'activo')  # Incluye 'proyecto'
    list_editable = ('activo',)
    list_filter = ('activo', 'modulo', 'carpeta', 'proyecto')  # Agrega 'proyecto' al filtro
    search_fields = ('nombre', 'carpeta__nombre', 'proyecto__nombre')  # Permite buscar por 'proyecto'
    fields = ('nombre', 'modulo', 'proyecto', 'carpeta', 'activo', 'archivos')  # Incluye 'proyecto'
    filter_horizontal = ('archivos',)  # Habilita la interfaz para seleccionar múltiples archivos

    class Media:
        js = ('js/admin_recurso.js',)

@admin.register(ArchivoRecurso)
class ArchivoRecursoAdmin(admin.ModelAdmin):
    list_display = ('tipo', 'archivo', 'url', 'fecha_subida')  # Updated fields
    list_filter = ('tipo', 'fecha_subida')  # Filters for the list view
    search_fields = ('tipo', 'archivo', 'url')  # Updated searchable fields
    fields = ('tipo', 'archivo', 'url')  # Updated form fields

@admin.register(CarpetaRecurso)
class CarpetaRecursoAdmin(admin.ModelAdmin):
    list_display = ('nombre',)
    search_fields = ('nombre',)

