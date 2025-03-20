from django.shortcuts import render, redirect
from django.contrib.auth import login, logout, authenticate
from django.contrib.auth.decorators import login_required
from django.contrib.auth.forms import AuthenticationForm, UserCreationForm

# Create your views here.
def home_view(request):
    return render(request, "inicio.html",
                  {"active_section": "home"})

# OTT
def ott_view(request):
    return render(request, 'ott/ott.html', {
        'seccion_activa': 'ott'
    })
    
def ott_quienes_somos_view(request):
    return render(request, 'ott/ott.html', {
        'seccion_activa': 'ott'
    })

def ott_servicios_view(request):
    return render(request, 'ott/servicios.html', {
        'seccion_activa': 'ott'
    })

def ott_innovacion_tecnologica_view(request):
    return render(request, 'ott/innovacion_tecnologica.html', {
        'seccion_activa': 'ott'
    })

def ott_capacitacion_consultoria_view(request):
    return render(request, 'ott/capacitacion_consultoria.html', {
        'seccion_activa': 'ott'
    })

def ott_colaboracion_industria_view(request):
    return render(request, 'ott/colaboracion_industria.html', {
        'seccion_activa': 'ott'
    })

def ott_impacto_resultados_view(request):
    return render(request, 'ott/impacto_resultados.html', {
        'seccion_activa': 'ott'
    })

def ott_contacto_view(request):
    return render(request, 'ott/contacto.html', {
        'seccion_activa': 'ott'
    })


# Incubadora
def incubadora_view(request):
    return render(request, 'incubadora/incubadora.html', {
        'seccion_activa': 'incubadora'
    })

def incubadora_comunidad_emprendedores_view(request):
    return render(request, 'incubadora/comunidad_emprendedores.html', {
        'seccion_activa': 'incubadora'
    })

def incubadora_espacios_coworking_view(request):
    return render(request, 'incubadora/espacios_coworking.html', {
        'seccion_activa': 'incubadora'
    })

def incubadora_foro_emprendedores_view(request):
    return render(request, 'incubadora/foro_emprendedores.html', {
        'seccion_activa': 'incubadora'
    })

def incubadora_herramientas_innovacion_view(request):
    return render(request, 'incubadora/herramientas_innovacion.html', {
        'seccion_activa': 'incubadora'
    })

def incubadora_proceso_incubacion_view(request):
    return render(request, 'incubadora/proceso_incubacion.html', {
        'seccion_activa': 'incubadora'
    })
def incubadora_incubacion_view(request):
    return render(request, 'incubadora/incubacion.html', {
        'seccion_activa': 'incubadora'
    })

def incubadora_recursos_emprendedores_view(request):
    return render(request, 'incubadora/recursos_emprendedores.html', {
        'seccion_activa': 'incubadora'
    })

def incubadora_red_mentores_view(request):
    return render(request, 'incubadora/red_mentores.html', {
        'seccion_activa': 'incubadora'
    })

def incubadora_registro_ideas_view(request):
    return render(request, 'incubadora/registro_ideas.html', {
        'seccion_activa': 'incubadora'
    })

def incubadora_servicios_mentoria_view(request):
    return render(request, 'incubadora/servicios_mentoria.html', {
        'seccion_activa': 'incubadora'
    })

def incubadora_talleres_cursos_view(request):
    return render(request, 'incubadora/talleres_cursos.html', {
        'seccion_activa': 'incubadora'
    })

def incubadora_programas_aceleracion_view(request):
    return render(request, 'incubadora/programas_aceleracion.html', {
        'seccion_activa': 'incubadora'
    })

def incubadora_acceso_financiamiento_view(request):
    return render(request, 'incubadora/acceso_financiamiento.html', {
        'seccion_activa': 'incubadora'
    })

def incubadora_historias_exito_view(request):
    return render(request, 'incubadora/historias_exito.html', {
        'seccion_activa': 'incubadora'
    })

def incubadora_historias_impacto_view(request):
    return render(request, 'incubadora/historias_impacto.html', {
        'seccion_activa': 'incubadora'
    })

def incubadora_proyectos_incubados_view(request):
    return render(request, 'incubadora/proyectos_incubados.html', {
        'seccion_activa': 'incubadora'
    })

def incubadora_quienes_somos_view(request):
    return render(request, 'incubadora/quienes_somos.html', {
        'seccion_activa': 'incubadora'
    })



# Unidades Experimentales
def uexperimentales_view(request):
    return render(request, 'uexperimentales/uexperimentales.html', {
        'seccion_activa': 'uexperimentales'
    })

# Unidades Experimentales_San Francisco
def uexperimentales_sanfrancisco_sobre_view(request):
    return render(request, 'uexperimentales/sanfrancisco/sobre.html', {
        'seccion_activa': 'uexperimentales'
    })
def uexperimentales_sanfrancisco_areas_especializacion_view(request):
    return render(request, 'uexperimentales/sanfrancisco/areas_especializacion.html', {
        'seccion_activa': 'uexperimentales'
    })
def uexperimentales_sanfrancisco_recursos_view(request):
    return render(request, 'uexperimentales/sanfrancisco/recursos.html', {
        'seccion_activa': 'uexperimentales'
    })
def uexperimentales_sanfrancisco_servicios_view(request):
    return render(request, 'uexperimentales/sanfrancisco/servicios.html', {
        'seccion_activa': 'uexperimentales'
    })
def uexperimentales_sanfrancisco_resultados_view(request):
    return render(request, 'uexperimentales/sanfrancisco/resultados.html', {
        'seccion_activa': 'uexperimentales'
    })
def uexperimentales_sanfrancisco_contacto_view(request):
    return render(request, 'uexperimentales/sanfrancisco/contacto.html', {
        'seccion_activa': 'uexperimentales'
    })

# Unidades Experimentales_Alonzo Tadeo
def uexperimentales_tadeo_sobre_view(request):
    return render(request, 'uexperimentales/tadeo/sobre.html', {
        'seccion_activa': 'uexperimentales'
    })
def uexperimentales_tadeo_areas_especializacion_view(request):
    return render(request, 'uexperimentales/tadeo/areas_especializacion.html', {
        'seccion_activa': 'uexperimentales'
    })
def uexperimentales_tadeo_recursos_view(request):
    return render(request, 'uexperimentales/tadeo/recursos.html', {
        'seccion_activa': 'uexperimentales'
    })
def uexperimentales_tadeo_servicios_view(request):
    return render(request, 'uexperimentales/tadeo/servicios.html', {
        'seccion_activa': 'uexperimentales'
    })
def uexperimentales_tadeo_resultados_view(request):
    return render(request, 'uexperimentales/tadeo/resultados.html', {
        'seccion_activa': 'uexperimentales'
    })
def uexperimentales_tadeo_contacto_view(request):
    return render(request, 'uexperimentales/tadeo/contacto.html', {
        'seccion_activa': 'uexperimentales'
    })



# Unidades Experimentales Smart Lab
def uexperimentales_smartlab_sobre_view(request):
    return render(request, 'uexperimentales/smartlab/sobre.html', {
        'seccion_activa': 'uexperimentales'
    })
def uexperimentales_smartlab_areas_especializacion_view(request):
    return render(request, 'uexperimentales/smartlab/areas_especializacion.html', {
        'seccion_activa': 'uexperimentales'
    })
def uexperimentales_smartlab_recursos_view(request):
    return render(request, 'uexperimentales/smartlab/recursos.html', {
        'seccion_activa': 'uexperimentales'
    })
def uexperimentales_smartlab_servicios_view(request):
    return render(request, 'uexperimentales/smartlab/servicios.html', {
        'seccion_activa': 'uexperimentales'
    })
def uexperimentales_smartlab_resultados_view(request):
    return render(request, 'uexperimentales/smartlab/resultados.html', {
        'seccion_activa': 'uexperimentales'
    })
def uexperimentales_smartlab_contacto_view(request):
    return render(request, 'uexperimentales/smartlab/contacto.html', {
        'seccion_activa': 'uexperimentales'
    })






def uexperimentales_smartdatalab_view(request):
    return render(request, 'uexperimentales/smartdatalab.html', {
        'seccion_activa': 'uexperimentales'
    })



# HubLab

def hublab_view(request):
    return render(request, 'hublab/hublab.html', {
        'seccion_activa': 'hublab'
    })

def hublab_planta_lacteos_view(request):
    return render(request, 'hublab/planta_lacteos.html', {
        'seccion_activa': 'hublab'
    })
def hublab_planta_lacteos1_view(request):
    return render(request, 'hublab/planta_lacteos1.html', {
        'seccion_activa': 'hublab'
    })

def hublab_planta_lacteos2_view(request):
    return render(request, 'hublab/planta_lacteos2.html', {
        'seccion_activa': 'hublab'
    })
def hublab_planta_lacteos3_view(request):
    return render(request, 'hublab/planta_lacteos3.html', {
        'seccion_activa': 'hublab'
    })
def hublab_planta_lacteos4_view(request):
    return render(request, 'hublab/planta_lacteos4.html', {
        'seccion_activa': 'hublab'
    })

# Formación
def formacion_view(request):
    return render(request, 'formacion/formacion.html', {
        'seccion_activa': 'formacion'
    })

# Login


# Vista de inicio de sesión
def login_view(request):
    if request.method == 'POST':
        form = AuthenticationForm(request, data=request.POST)
        if form.is_valid():
            user = form.get_user()
            login(request, user)
            return redirect('home')
    else:
        form = AuthenticationForm()
    return render(request, 'registration/login.html', {'form': form})

# Vista de registro
def register_view(request):
    if request.method == 'POST':
        form = UserCreationForm(request.POST)
        if form.is_valid():
            user = form.save()
            login(request, user)
            return redirect('home')
    else:
        form = UserCreationForm()
    return render(request, 'registration/register.html', {'form': form})

# Vista de cierre de sesión
def salir(request):
    logout(request)
    return redirect('home')
