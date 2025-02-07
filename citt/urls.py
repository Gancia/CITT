"""
URL configuration for citt project.

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/4.2/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  path('', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  path('', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.urls import include, path
    2. Add a URL to urlpatterns:  path('blog/', include('blog.urls'))
"""
from django.contrib import admin
from django.urls import include, path
from webcitt import views

urlpatterns = [
    path('admin/', admin.site.urls),
    
    
    path('', views.home_view, name='home'),
    
    
    path('ott/', views.ott_view, name='ott'),
    path('ott/quienes-somos/', views.ott_quienes_somos_view, name='ott_quienes_somos'),
    path('ott/servicios/', views.ott_servicios_view, name='ott_servicios'),
    path('ott/innovacion-tecnologica/', views.ott_innovacion_tecnologica_view, name='ott_innovacion_tecnologica'),
    path('ott/capacitacion-consultoria/', views.ott_capacitacion_consultoria_view, name='ott_capacitacion_consultoria'),
    path('ott/colaboracion-industria/', views.ott_colaboracion_industria_view, name='ott_colaboracion_industria'),
    path('ott/impacto-resultados/', views.ott_impacto_resultados_view, name='ott_impacto_resultados'),
    path('ott/contacto/', views.ott_contacto_view, name='ott_contacto'),
    
    
    path('incubadora/', views.incubadora_view, name='incubadora'),
    path('incubadora/comunidad-innovadores/', views.incubadora_comunidad_innovadores_view, name='incubadora_comunidad_innovadores'),
    path('incubadora/espacios-trabajo/', views.incubadora_espacios_trabajo_view, name='incubadora_espacios_trabajo'),
    path('incubadora/foro-colaborativo/', views.incubadora_foro_colaborativo_view, name='incubadora_foro_colaborativo'),
    path('incubadora/herramientas/', views.incubadora_herramientas_tecnologicas_view, name='incubadora_herramientas_tecnologicas'),
    path('incubadora/proceso-incubacion/', views.incubadora_proceso_incubacion_view, name='incubadora_proceso_incubacion'),
    path('incubadora/recursos-emprendedores/', views.incubadora_recursos_emprendedores_view, name='incubadora_recursos_emprendedores'),
    path('incubadora/red-mentores/', views.incubadora_red_mentores_view, name='incubadora_red_mentores'),
    path('incubadora/registro-ideas/', views.incubadora_registro_ideas_view, name='incubadora_registro_ideas'),
    path('incubadora/servicios-mentoria/', views.incubadora_servicios_mentoria_view, name='incubadora_servicios_mentoria'),
    path('incubadora/talleres-cursos/', views.incubadora_talleres_cursos_view, name='incubadora_talleres_cursos'),
    path('incubadora/programas-aceleracion/', views.incubadora_programas_aceleracion_view, name='incubadora_programas_aceleracion'),
    path('incubadora/acceso-financiamiento/', views.incubadora_acceso_financiamiento_view, name='incubadora_acceso_financiamiento'),
    path('incubadora/emprendedores_destacados/', views.incubadora_emprendedores_destacados_view, name='incubadora_emprendedores_destacados'),
    path('incubadora/historias_impacto/', views.incubadora_historias_impacto_view, name='incubadora_historias_impacto'),
    path('incubadora/proyectos_incubados/', views.incubadora_proyectos_incubados_view, name='incubadora_proyectos_incubados'),
    
    
    path('uexperimentales/', views.uexperimentales_view, name='uexperimentales'),
    path('uexperimentales/centro-alonso/', views.uexperimentales_centro_alonso_view, name='uexperimentales_centro_alonso'),
    path('uexperimentales/centro-fransisco/', views.uexperimentales_centro_fransisco_view, name='uexperimentales_centro_fransisco'),
    path('uexperimentales/realidad-aumentada/', views.uexperimentales_realidad_aumentada_view, name='uexperimentales_realidad_aumentada'),
    path('uexperimentales/smartdatalab/', views.uexperimentales_smartdatalab_view, name='uexperimentales_smartdatalab'),
    
    
    path('hublab/', views.hublab_view, name='hublab'),
    path('hublab/planta-lacteos', views.hublab_planta_lacteos_view, name='hublab_planta_lacteos'),
    
    
    
    path('formacion/', views.formacion_view, name='formacion'),

    path('account/', include('django.contrib.auth.urls')),
    path('salir/', views.salir, name='salir')

    # path('account/signup/', views.signup_view, name='signup'),
    # path('account/signout/', views.signup_view, name='signup'),
    # path('account/profile/', views.profile_view, name='profile'),
    # path('account/profile/edit/', views.profile_edit_view, name='profile_edit'),
    # path('account/profile/password/', views.profile_password_view, name='profile_password'),
    # path('account/profile/delete/', views.profile_delete_view, name='profile_delete'),  
    # path('account/profile/confirm/', views.profile_confirm_view, name='profile_confirm'),
    # path('account/profile/confirm/delete/', views.profile_confirm_delete_view, name='profile_confirm_delete'),
    
    
]