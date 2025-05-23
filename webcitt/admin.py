from django.contrib import admin
from django.utils.html import format_html
from django.http import HttpResponse
from django.urls import path
from .models import Proyecto, Categoria, Mentor, Integrante, Recurso, ArchivoRecurso, CarpetaRecurso

class ArchivoRecursoInline(admin.TabularInline):
    model = ArchivoRecurso
    extra = 1
    fields = ('tipo', 'archivo', 'url')  # Updated fields

class RecursoInline(admin.TabularInline):
    model = Recurso
    extra = 1
    fields = ('nombre', 'proyecto', 'carpeta', 'archivo', 'activo')  # Cambiado 'archivos' por 'archivo'
    readonly_fields = ('proyecto',)

    def formfield_for_foreignkey(self, db_field, request, **kwargs):
        if db_field.name == "carpeta":
            if request.resolver_match.kwargs.get('object_id'):
                proyecto_id = request.resolver_match.kwargs['object_id']
                kwargs["queryset"] = CarpetaRecurso.objects.filter(proyecto_id=proyecto_id)
        return super().formfield_for_foreignkey(db_field, request, **kwargs)

class CarpetaRecursoInline(admin.TabularInline):
    model = CarpetaRecurso
    extra = 1
    fields = ('nombre', 'modulo')
    verbose_name = "Carpeta"
    verbose_name_plural = "Carpetas"

    def get_queryset(self, request):
        # Filtra las carpetas para que solo se muestren las del proyecto actual
        qs = super().get_queryset(request)
        if request.resolver_match.kwargs.get('object_id'):
            proyecto_id = request.resolver_match.kwargs['object_id']
            return qs.filter(proyecto_id=proyecto_id)
        return qs.none()

@admin.register(Proyecto)
class ProyectoAdmin(admin.ModelAdmin):
    list_display = ('nombre','slug', 'dependencia','categoria', 'mentor', 'fecha_inicio', 'fecha_fin', 'activo')
    list_editable = ('activo',)
    list_filter = ('dependencia', 'categoria', 'activo')
    search_fields = ('nombre', 'mentor__username','slug')
    inlines = [CarpetaRecursoInline, RecursoInline]  # Incluye las carpetas como inline
    readonly_fields = ('vista_previa_imagen',)

    def vista_previa_imagen(self, obj):
        if obj.imagen and obj.imagen.url:
            return format_html('<img src="{}" style="max-width: 300px; height: auto;" />', obj.imagen.url)
        return "No image"
    vista_previa_imagen.short_description = "Vista Previa de la Imagen"

    fields = ('nombre', 'slug','descripcion', 'fecha_inicio', 'fecha_fin', 'categoria','dependencia', 'activo', 'mentor', 'imagen', 'vista_previa_imagen')

    class Media:
        css = {
            'all': ('css/custom_admin.css',)
        }
        js = ('js/custom_admin.js',)

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
    list_display = ('nombre', 'proyecto', 'carpeta', 'archivo', 'activo')  # Cambiado 'archivos' por 'archivo'
    list_editable = ('activo',)
    list_filter = ('activo', 'carpeta', 'proyecto')
    search_fields = ('nombre', 'carpeta__nombre', 'proyecto__nombre')
    fields = ('nombre', 'proyecto', 'carpeta', 'archivo', 'activo')  # Cambiado 'archivos' por 'archivo'

    class Media:
        js = ('js/admin_recurso.js',)

@admin.register(ArchivoRecurso)
class ArchivoRecursoAdmin(admin.ModelAdmin):
    list_display = ('tipo', 'archivo', 'url', 'fecha_subida')
    list_filter = ('tipo', 'fecha_subida')
    search_fields = ('tipo', 'archivo', 'url')
    fields = ('tipo', 'archivo', 'url')

@admin.register(CarpetaRecurso)
class CarpetaRecursoAdmin(admin.ModelAdmin):
    list_display = ('nombre', 'proyecto', 'modulo')
    list_filter = ('proyecto', 'modulo')
    search_fields = ('nombre', 'proyecto__nombre')
    fields = ('nombre', 'proyecto', 'modulo')

class CustomAdminSite(admin.AdminSite):
    site_header = "Administración de WebCITT"
    site_title = "WebCITT Admin"
    index_title = "Bienvenido al Panel de Administración"

    def each_context(self, request):
        context = super().each_context(request)
        context['css_files'] = [
            'css/admin_custom.css',  # Ruta del archivo CSS
        ]
        return context

    def get_urls(self):
        urls = super().get_urls()
        custom_urls = [
            path('custom-view/', self.admin_view(self.custom_view))
        ]
        return custom_urls + urls

admin_site = CustomAdminSite(name='custom_admin')

