from django.shortcuts import render
from django.http import HttpResponse
# Create your views here.


from django.shortcuts import render

def hello(request):
    return render(request, 'index.html')  # Página inicial

def about(request):
    return render(request, '2_Laboratorios_proyectos.html')  # Ejemplo de otra página

def quienes_somos(request):
    return render(request, '1_Quienes_Somos_Orígenes.html')

def laboratorios(request):
    return render(request, '2_Laboratorios.html')

def investigaciones(request):
    return render(request, '3_Investigaciones.html')
