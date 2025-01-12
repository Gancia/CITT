from django.shortcuts import render

# Create your views here.
def home_view(request):
    return render(request, "inicio.html")

def ott_view(request):
    return render(request, 'ott.html')

# Vista para el apartado Incubadora
def incubadora_view(request):
    return render(request, 'incubadora.html')

# Vista para el apartado Unidades Experimentales
def unidadesexperimentales_view(request):
    return render(request, 'uexperimentales.html')

# Vista para el apartado HubLab
def hublab_view(request):
    return render(request, 'hublab.html')

# Vista para el apartado Formación
def formacion_view(request):
    return render(request, 'formacion.html')