from django.urls import path
from . import views

urlpatterns = [
    path('', views.home, name='vending_machine-home'),
    path('about/', views.about, name='vending_machine-about'),
]
