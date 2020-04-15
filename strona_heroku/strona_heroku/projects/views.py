from django.shortcuts import render
from .forms import UserRegisterForm

def projects(request):
    return render(request,'projects/projects.html')

def register(request):
    if request.method == 'POST':
        form = UserRegisterForm(request.POST)  
    else:
        form = UserRegisterForm()
    return render(request, 'projects/test_start.html', {'form': form})

def start(request):
    return render(request,'projects/start.html')
