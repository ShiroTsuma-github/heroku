from django import forms
from django.contrib.auth.models import User
from django.contrib.auth.forms import UserCreationForm
from crispy_forms.helper import FormHelper
from crispy_forms.layout import Layout,Field

class UserRegisterForm(UserCreationForm):
    def __init__(self, *args, **kwargs):
        super(UserCreationForm, self).__init__(*args, **kwargs)
        self.fields.pop('password2')
        self.fields['password1'].required=False
        self.fields['password1'].help_text = None
        self.fields['age'].label='Przedział wiekowy'
        self.helper=FormHelper()
        self.helper.layout=Layout(
            Field(
                'regulamin_accept',css_class='test'
            )
        )
    username=forms.CharField(max_length=50,required=False,label="Login")
    password1=forms.PasswordInput(attrs=None,)
    wiek=[('1','18-25'),('2','26-35'),('3','36-45')]
    age=forms.ChoiceField(required=False,choices=wiek,)
    regulamin_accept=forms.BooleanField(required=False,label='Przeczytałem regulamin',)
    przetwarzanie_accept=forms.BooleanField(required=False,label='Wyrażam zgodę na przetwarzanie moich danych')
    
    
    class Meta:
        model = User
        fields = ['username','password1','age','regulamin_accept','przetwarzanie_accept']
