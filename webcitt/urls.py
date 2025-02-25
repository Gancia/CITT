from django.urls import path, include
from . import views


#Ulrs de la aplicacion webcitt

urlpatterns = [
  path('ott/', views.ott_view, name='ott'),
    path('ott/quienes-somos/', views.ott_quienes_somos_view, name='ott_quienes_somos'),
    path('ott/servicios/', views.ott_servicios_view, name='ott_servicios'),
    path('ott/innovacion-tecnologica/', views.ott_innovacion_tecnologica_view, name='ott_innovacion_tecnologica'),
    path('ott/capacitacion-consultoria/', views.ott_capacitacion_consultoria_view, name='ott_capacitacion_consultoria'),
    path('ott/colaboracion-industria/', views.ott_colaboracion_industria_view, name='ott_colaboracion_industria'),
    path('ott/impacto-resultados/', views.ott_impacto_resultados_view, name='ott_impacto_resultados'),
    path('ott/contacto/', views.ott_contacto_view, name='ott_contacto'),
    
    
    
    path('incubadora/', views.incubadora_view, name='incubadora'),
    path('incubadora/comunidad-innovadores/', views.incubadora_comunidad_emprendedores_view, name='incubadora_comunidad_emprendedores'),
    path('incubadora/espacios-trabajo/', views.incubadora_espacios_coworking_view, name='incubadora_espacios_coworking'),
    path('incubadora/foro-colaborativo/', views.incubadora_foro_emprendedores_view, name='incubadora_foro_emprendedores'),
    path('incubadora/herramientas/', views.incubadora_herramientas_innovacion_view, name='incubadora_herramientas_innovacion'),
    path('incubadora/proceso-incubacion/', views.incubadora_proceso_incubacion_view, name='incubadora_proceso_incubacion'),
    path('incubadora/recursos-emprendedores/', views.incubadora_recursos_emprendedores_view, name='incubadora_recursos_emprendedores'),
    path('incubadora/red-mentores/', views.incubadora_red_mentores_view, name='incubadora_red_mentores'),
    path('incubadora/registro-ideas/', views.incubadora_registro_ideas_view, name='incubadora_registro_ideas'),
    path('incubadora/servicios-mentoria/', views.incubadora_servicios_mentoria_view, name='incubadora_servicios_mentoria'),
    path('incubadora/talleres-cursos/', views.incubadora_talleres_cursos_view, name='incubadora_talleres_cursos'),
    path('incubadora/programas-aceleracion/', views.incubadora_programas_aceleracion_view, name='incubadora_programas_aceleracion'),
    path('incubadora/acceso-financiamiento/', views.incubadora_acceso_financiamiento_view, name='incubadora_acceso_financiamiento'),
    path('incubadora/historias_exito/', views.incubadora_historias_exito_view, name='incubadora_historias_exito'),
    path('incubadora/historias_impacto/', views.incubadora_historias_impacto_view, name='incubadora_historias_impacto'),
    path('incubadora/proyectos_incubados/', views.incubadora_proyectos_incubados_view, name='incubadora_proyectos_incubados'),
    path('incubadora/quienes_somos/', views.incubadora_quienes_somos_view, name='incubadora_quienes_somos'),
    
    
# Unidades Experimentales   
    path('uexperimentales/', views.uexperimentales_view, name='uexperimentales'),
# Unidades Experimentales_San Francisco
    path('uexperimentales/sanfrancisco/sobre/', views.uexperimentales_sanfrancisco_sobre_view, name='uexperimentales_sanfrancisco_sobre'),
    path('uexperimentales/sanfrancisco/areas_especialiazacion/', views.uexperimentales_sanfrancisco_areas_especializacion_view, name='uexperimentales_sanfrancisco_areas_especializacion'),
    path('uexperimentales/sanfrancisco/recursos/', views.uexperimentales_sanfrancisco_recursos_view, name='uexperimentales_sanfrancisco_recursos'),
    path('uexperimentales/sanfrancisco/servicios/', views.uexperimentales_sanfrancisco_servicios_view, name='uexperimentales_sanfrancisco_servicios'),
    path('uexperimentales/sanfrancisco/resultados/', views.uexperimentales_sanfrancisco_resultados_view, name='uexperimentales_sanfrancisco_resultados'),
     path('uexperimentales/sanfrancisco/contacto/', views.uexperimentales_sanfrancisco_contacto_view, name='uexperimentales_sanfrancisco_contacto'),

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
    
    
]
