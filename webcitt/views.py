from django.shortcuts import render

# Create your views here.
def home_view(request):
    return render(request, "inicio.html",
                  {"active_section": "home"})

def ott_view(request):
    return render(request, 'ott.html', {
        'seccion_activa': 'ott'
    })

# Vista para el apartado Incubadora
def incubadora_view(request):
    return render(request, 'incubadora.html', {
        'seccion_activa': 'incubadora'
    })

# Vista para el apartado Unidades Experimentales
def unidadesexperimentales_view(request):
    return render(request, 'uexperimentales.html', {
        'seccion_activa': 'uexperimentales'
    })

# Vista para el apartado HubLab
def hublab_view(request):
    return render(request, 'hublab.html', {
        'seccion_activa': 'hublab'
    })

# Vista para el apartado Formación
def formacion_view(request):
    return render(request, 'formacion.html', {
        'seccion_activa': 'formacion'
    })