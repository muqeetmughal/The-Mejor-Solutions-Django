from django.shortcuts import render

# Create your views here.
def home(request):
    return render(request, "web/home.html")

def about(request):
    return render(request, "web/about.html")
def services(request):
    return render(request, "web/services.html")

def work(request):
    return render(request, "web/work.html")

def contact(request):
    return render(request, "web/contact.html")

def careers(request):
    return render(request, "web/careers.html")