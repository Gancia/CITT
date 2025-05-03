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
    fields = ('nombre', 'modulo', 'proyecto', 'carpeta', 'activo', 'archivos')
    filter_horizontal = ('archivos',)
    readonly_fields = ('proyecto',)

@admin.register(Proyecto)
class ProyectoAdmin(admin.ModelAdmin):
    list_display = ('nombre', 'dependencia','categoria', 'mentor', 'fecha_inicio', 'fecha_fin', 'activo')
    list_editable = ('activo',)
    list_filter = ('dependencia', 'categoria', 'activo')
    search_fields = ('nombre', 'mentor__username')
    inlines = [RecursoInline]
    readonly_fields = ('vista_previa_imagen',)

    def vista_previa_imagen(self, obj):
        if obj.imagen and obj.imagen.url:
            return format_html('<img src="{}" style="max-width: 300px; height: auto;" />', obj.imagen.url)
        return "No image"
    vista_previa_imagen.short_description = "Vista Previa de la Imagen"

    fields = ('nombre', 'descripcion', 'fecha_inicio', 'fecha_fin', 'categoria','dependencia', 'activo', 'mentor', 'imagen', 'vista_previa_imagen')

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
    list_display = ('nombre', 'modulo', 'proyecto', 'carpeta', 'activo')
    list_editable = ('activo',)
    list_filter = ('activo', 'modulo', 'carpeta', 'proyecto')
    search_fields = ('nombre', 'carpeta__nombre', 'proyecto__nombre')
    fields = ('nombre', 'modulo', 'proyecto', 'carpeta', 'activo', 'archivos')
    filter_horizontal = ('archivos',)

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
    list_display = ('nombre',)
    search_fields = ('nombre',)

class CustomAdminSite(admin.AdminSite):
    site_header = "Gestión de Proyectos"
    site_title = "Panel de Administración"
    index_title = "Bienvenido al Panel de Administración"

    def get_urls(self):
        urls = super().get_urls()
        custom_urls = [
            path('custom-view/', self.admin_view(self.custom_view))
        ]
        return custom_urls + urls

    def custom_view(self, request):
        # HTML content for the custom view
        html_content = """
        <html>
        <head>
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
            <style>
                .btn-large {
                    font-size: 18px; /* Original font size */
                    padding: 15px 30px; /* Original padding */
                    margin: 10px; /* Original margin */
                    background-color: #007bff;
                    color: white;
                    border: none;
                    border-radius: 5px;
                    cursor: pointer;
                    display: inline-flex;
                    align-items: center;
                    text-decoration: none;
                }
                .btn-large i {
                    margin-right: 10px;
                }
                .btn-small {
                    font-size: 12px;
                    padding: 8px 15px;
                    margin: 5px;
                    background-color: #6c757d;
                    color: white;
                    border: none;
                    border-radius: 5px;
                    cursor: pointer;
                    display: inline-flex;
                    align-items: center;
                    text-decoration: none;
                }
                .btn-small i {
                    margin-right: 5px;
                }
                body {
                    font-family: Arial, sans-serif;
                    padding: 20px;
                }
                h1 {
                    margin-bottom: 20px;
                }
            </style>
        </head>
        <body>
            <h1>Gestión de Proyectos</h1>
            <a href="/admin/webcitt/proyecto/" class="btn-large">
                <i class="fas fa-folder"></i> Proyectos
            </a>
            <a href="/admin/webcitt/categoria/" class="btn-small">
                <i class="fas fa-tags"></i> Categorías
            </a>
            <a href="/admin/webcitt/mentor/" class="btn-small">
                <i class="fas fa-user-tie"></i> Mentores
            </a>
            <a href="/admin/webcitt/recurso/" class="btn-small">
                <i class="fas fa-file-alt"></i> Recursos
            </a>
        </body>
        </html>
        """
        return HttpResponse(html_content)

admin_site = CustomAdminSite(name='custom_admin')

