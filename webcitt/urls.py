from django.urls import path, include
from . import views


#Ulrs de la aplicacion webcitt

urlpatterns = [
  path('ott/', views.ott_view, name='ott'),
  path('grappelli/', include('grappelli.urls')),
    path('ott/quienes-somos/', views.ott_quienes_somos_view, name='ott_quienes_somos'),
    path('ott/servicios/', views.ott_servicios_view, name='ott_servicios'),
    path('ott/innovacion-tecnologica/', views.ott_innovacion_tecnologica_view, name='ott_innovacion_tecnologica'),
    path('ott/capacitacion-consultoria/', views.ott_capacitacion_consultoria_view, name='ott_capacitacion_consultoria'),
    path('ott/colaboracion-industria/', views.ott_colaboracion_industria_view, name='ott_colaboracion_industria'),
    path('ott/impacto-resultados/', views.ott_impacto_resultados_view, name='ott_impacto_resultados'),
    path('ott/contacto/', views.ott_contacto_view, name='ott_contacto'),
    
    path('incubadora/', views.incubadora_view, name='incubadora'),
    path('incubadora/presentacion/', views.incubadora_presentacion_view, name='incubadora_presentacion'),
    path('incubadora/proceso/', views.incubadora_proceso_view, name='incubadora_proceso'),
    path('incubadora/servicios/', views.incubadora_servicios_view, name='incubadora_servicios'),
    path('incubadora/casos-exito/', views.incubadora_casos_exito_view, name='incubadora_casos_exito'),
    path('incubadora/contacto/', views.incubadora_contacto_view, name='incubadora_contacto'),
    
    
# Unidades Experimentales   
    path('uexperimentales/', views.uexperimentales_view, name='uexperimentales'),
# Unidades Experimentales_San Francisco
    path('uexperimentales/sanfrancisco/sobre/', views.uexperimentales_sanfrancisco_sobre_view, name='uexperimentales_sanfrancisco_sobre'),
    path('uexperimentales/sanfrancisco/areas_especialiazacion/', views.uexperimentales_sanfrancisco_areas_especializacion_view, name='uexperimentales_sanfrancisco_areas_especializacion'),
    path('uexperimentales/sanfrancisco/recursos/', views.uexperimentales_sanfrancisco_recursos_view, name='uexperimentales_sanfrancisco_recursos'),
    path('uexperimentales/sanfrancisco/servicios/', views.uexperimentales_sanfrancisco_servicios_view, name='uexperimentales_sanfrancisco_servicios'),
    path('uexperimentales/sanfrancisco/resultados/', views.uexperimentales_sanfrancisco_resultados_view, name='uexperimentales_sanfrancisco_resultados'),
    path('uexperimentales/sanfrancisco/contacto/', views.uexperimentales_sanfrancisco_contacto_view, name='uexperimentales_sanfrancisco_contacto'),
# Unidades Experimentales_Alonso Tadeo
    path('uexperimentales/tadeo/sobre/', views.uexperimentales_tadeo_sobre_view, name='uexperimentales_tadeo_sobre'),
    path('uexperimentales/tadeo/areas_especialiazacion/', views.uexperimentales_tadeo_areas_especializacion_view, name='uexperimentales_tadeo_areas_especializacion'),
    path('uexperimentales/tadeo/recursos/', views.uexperimentales_tadeo_recursos_view, name='uexperimentales_tadeo_recursos'),
    path('uexperimentales/tadeo/servicios/', views.uexperimentales_tadeo_servicios_view, name='uexperimentales_tadeo_servicios'),
    path('uexperimentales/tadeo/resultados/', views.uexperimentales_tadeo_resultados_view, name='uexperimentales_tadeo_resultados'),
    path('uexperimentales/tadeo/contacto/', views.uexperimentales_tadeo_contacto_view, name='uexperimentales_tadeo_contacto'),


# Unidades Experimentales Smartlab
    path('uexperimentales/smartlab/sobre', views.uexperimentales_smartlab_sobre_view, name='uexperimentales_smartlab_sobre'),
    path('uexperimentales/smartlab/areas_especializacion', views.uexperimentales_smartlab_areas_especializacion_view, name='uexperimentales_smartlab_areas_especializacion'),
    path('uexperimentales/smartlab/recursos', views.uexperimentales_smartlab_recursos_view, name='uexperimentales_smartlab_recursos'),
    path('uexperimentales/smartlab/servicios', views.uexperimentales_smartlab_servicios_view, name='uexperimentales_smartlab_servicios'),
    path('uexperimentales/smartlab/resultados', views.uexperimentales_smartlab_resultados_view, name='uexperimentales_smartlab_resultados'),
    path('uexperimentales/smartlab/contacto', views.uexperimentales_smartlab_contacto_view, name='uexperimentales_smartlab_contacto'),

    path('uexperimentales/smartdatalab/', views.uexperimentales_smartdatalab_view, name='uexperimentales_smartdatalab'),
    
    
    path('hublab/', views.hublab_view, name='hublab'),
    path('hublab/planta-lacteos', views.hublab_planta_lacteos_view, name='hublab_planta_lacteos'),
    path('hublab/planta-lacteos1', views.hublab_planta_lacteos1_view, name='hublab_planta_lacteos1'),
    path('hublab/planta-lacteos2', views.hublab_planta_lacteos2_view, name='hublab_planta_lacteos2'),
    path('hublab/planta-lacteos3', views.hublab_planta_lacteos3_view, name='hublab_planta_lacteos3'),
    path('hublab/planta-lacteos4', views.hublab_planta_lacteos4_view, name='hublab_planta_lacteos4'),
]
