from django.urls import path
from . import views


urlpatterns = [
    path('', views.hello, name='home'),  # Página inicial
    path('about/', views.about, name='about'),  # Página "Acerca de"
    path('quienes-somos/', views.quienes_somos, name='quienes_somos'),  # Página de Quienes Somos
    path('laboratorios/', views.laboratorios, name='laboratorios'),  # Página de Laboratorios
    path('investigaciones/', views.investigaciones, name='investigaciones'),  # Página de Investigaciones
    # Agrega más rutas según necesites
]