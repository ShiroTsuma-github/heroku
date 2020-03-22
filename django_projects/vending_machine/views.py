from django.shortcuts import render
from django.http import HttpResponse


def home(request):
    return HttpResponse('<h1>Vending Machine</h1>')

def about(request):
    return HttpResponse('<h1>First Project for School</h1>')