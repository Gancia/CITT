from django.urls import path
from . import views
from django.conf import settings
from django.conf.urls.static import static






urlpatterns = [
    path('', views.hello, name='home'),  # Página inicial
    path('about/', views.about, name='about'),  # Página "Laboratorios proyectos"
    path('quienes-somos/', views.quienes_somos, name='quienes_somos'),  # Página "Quiénes Somos"
    path('laboratorios/', views.laboratorios_proyectos, name='laboratorios_proyectos'),  # Página "Laboratorios Proyectos"
    path('laboratorios/sobre/', views.laboratorios_sobre, name='laboratorios_sobre'),  # Página "Laboratorios Sobre"
    path('laboratorios/practicas/', views.laboratorios_practicas, name='laboratorios_practicas'),  # Página "Laboratorios Prácticas"
    path('investigaciones/', views.investigaciones, name='investigaciones'),  # Página "Investigaciones"
    path('incubadora/', views.incubadora, name='incubadora'),  # Página "Incubadora"
    path('ott/', views.ott, name='ott'),  # Página "OTT"
    path('auth/forgot-password/', views.auth_forgot_password, name='auth_forgot_password'),  # Página "Forgot Password"
    path('auth/login/', views.auth_login, name='auth_login'),  # Página "Login"
    path('auth/register/', views.auth_register, name='auth_register'),  # Página "Register"
    path('', views.dynamic_page, name='dynamic_page'),  # Ruta que maneja las páginas dinámicas
    path('css/<path:path>', views.serve_static_file, name='serve_static_file'),
    path('js/<path:path>', views.serve_static_file, name='serve_static_file'),
    path('img/<path:path>', views.serve_static_file, name='serve_static_file')

]
if settings.DEBUG:
    urlpatterns += static(settings.STATIC_URL, document_root=settings.STATIC_ROOT)