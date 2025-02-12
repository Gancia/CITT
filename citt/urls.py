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
    path('', include('webcitt.urls')),
    
  
    
 

    

    
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