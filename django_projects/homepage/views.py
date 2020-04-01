from django.shortcuts import render
from .models import Post


def home(request):
    context={
        'posts': Post.objects.all()
    }
    return render(request, 'homepage/home.html',context)

def about(request):
    return render(request,'homepage/about.html',{'title': 'Informacje'})
def projects(request):
    return render(request,'homepage/projects.html',{'title': 'Projekty'})
