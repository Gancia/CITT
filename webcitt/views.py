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

def incubadora_comunidad_innovadores_view(request):
    return render(request, 'incubadora/comunidad_innovadores.html', {
        'seccion_activa': 'incubadora'
    })

def incubadora_espacios_trabajo_view(request):
    return render(request, 'incubadora/espacios_trabajo.html', {
        'seccion_activa': 'incubadora'
    })

def incubadora_foro_colaborativo_view(request):
    return render(request, 'incubadora/foro_colaborativo.html', {
        'seccion_activa': 'incubadora'
    })

def incubadora_herramientas_tecnologicas_view(request):
    return render(request, 'incubadora/herramientas_tecnologicas.html', {
        'seccion_activa': 'incubadora'
    })

def incubadora_proceso_incubacion_view(request):
    return render(request, 'incubadora/proceso_incubacion.html', {
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

def incubadora_emprendedores_destacados_view(request):
    return render(request, 'incubadora/emprendedores_destacados.html', {
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



# Unidades Experimentales
def uexperimentales_view(request):
    return render(request, 'uexperimentales/uexperimentales.html', {
        'seccion_activa': 'uexperimentales'
    })

def uexperimentales_centro_alonso_view(request):
    return render(request, 'uexperimentales/centro_alonso.html', {
        'seccion_activa': 'uexperimentales'
    })

def uexperimentales_centro_fransisco_view(request):
    return render(request, 'uexperimentales/centro_fransisco.html', {
        'seccion_activa': 'uexperimentales'
    })

def uexperimentales_realidad_aumentada_view(request):
    return render(request, 'uexperimentales/realidad_aumentada.html', {
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
