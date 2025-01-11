from django.shortcuts import render
from django.http import HttpResponse
import os
from django.conf import settings


# Create your views here.

def hello(request):
    return render(request, 'index.html')  # Página inicial

def about(request):
    return render(request, '2_Laboratorios_proyectos.html')  # Página "Laboratorios Proyectos"

def quienes_somos(request):
    return render(request, '1_Quienes_Somos_Orígenes.html')  # Página "Quiénes Somos"

def laboratorios_proyectos(request):
    return render(request, '2_Laboratorios_proyectos.html')  # Página "Laboratorios Proyectos"

def laboratorios_sobre(request):
    return render(request, '2_Laboratorios_sobre.html')  # Página "Laboratorios Sobre"

def laboratorios_practicas(request):
    return render(request, '2.6_Laboratorios_prácticas.html')  # Página "Laboratorios Prácticas"

def investigaciones(request):
    return render(request, '3_Investigaciones.html')  # Página "Investigaciones"

def incubadora(request):
    return render(request, 'Incubadora.html')  # Página "Incubadora"

def ott(request):
    return render(request, 'OTT.html')  # Página "OTT"

def auth_forgot_password(request):
    return render(request, 'Pages.Auth.ForgotPassword.html')  # Página "Forgot Password"

def auth_login(request):
    return render(request, 'Pages.Auth.Login.html')  # Página "Login"

def auth_register(request):
    return render(request, 'Pages.Auth.Register.html')  # Página "Register"



def dynamic_page(request):
    # Obtener el parámetro `page` de la URL. Si no existe, usar 'home' como valor predeterminado.
    page = request.GET.get('page', 'home')

    # Verificar si la plantilla correspondiente existe
    try:
        # Ahora renderizamos la página extendiendo la plantilla base
        return render(request, f"{page}.html", {'base_template': 'base.html'})
    except Exception:
        return render(request, "404.html")
    

def serve_static_file(request, path):
    file_path = os.path.join(settings.STATIC_ROOT, path)
    if os.path.exists(file_path):
        with open(file_path, 'rb') as file:
            response = HttpResponse(file.read(), content_type='text/css')
            response['Content-Disposition'] = f'inline; filename="{os.path.basename(file_path)}"'
            return response
    else:
        return HttpResponse(status=404)
