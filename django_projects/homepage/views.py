from django.shortcuts import render

posts=[
    {
        'author': 'CoreyMS',
        'title': "Tytuł",
        'content':"tekst",
        'date_posted':"data"
    },
    {
    'author': 'CoreyMS2',
    'title': "Tytuł2",
    'content':"tekst2",
    'date_posted':"data2"
    },
]

def home(request):
    context={
        'posts': posts
    }
    return render(request, 'homepage/home.html',context)

def about(request):
    return render(request,'homepage/about.html',{'title': 'About'})
