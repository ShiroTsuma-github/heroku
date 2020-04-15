from django import forms
from django.contrib.auth.models import User
from django.contrib.auth.forms import UserCreationForm
from .models import Profile


class UserRegisterForm(UserCreationForm):
    email = forms.EmailField()
    github=forms.URLField(required=False,help_text='Wprowadź adres URL do Githuba.')
    Identyfikator=forms.CharField(max_length=8,help_text='Wprowadź numer klasy,typ i twój numer ( np:: 5A-11 )')
    heroku=forms.URLField(required=False,help_text='Wprowadź adres URL do twojej strony heroku.')
    class Meta:
        model = User
        fields = ['username','Identyfikator', 'email', 'password1', 'password2','github','heroku']

class UserUpdateForm(forms.ModelForm):
    email = forms.EmailField()
    github=forms.URLField()
    heroku=forms.URLField()
    Identyfikator=forms.CharField(max_length=8)

    class Meta:
        model = User
        fields = ['username','Identyfikator', 'email','github','heroku']


class ProfileUpdateForm(forms.ModelForm):
    class Meta:
        model = Profile
        fields = ['image']
