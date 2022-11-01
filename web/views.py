from django.shortcuts import render

from web.models import Service, Work
from django.shortcuts import get_object_or_404

# Create your views here.


def home(request):
    return render(request, "web/home.html")


def about(request):
    return render(request, "web/about.html")


def services(request):
    return render(request, "web/services.html")


def service_detail(request, slug):
    service = get_object_or_404(Service, slug=slug)
    context = {
        "service_detail": service
    }
    return render(request, "web/service-detail.html", context=context)


def work_detail(request, slug):
    work = get_object_or_404(Work, slug=slug)
    context = {
        "work_detail": work
    }
    return render(request, "web/work-detail.html", context=context)


def works(request):
    works = Work.objects.all()
    context = {
        "works": works
    }
    return render(request, "web/works.html", context=context)


def contact(request):
    return render(request, "web/contact.html")


def careers(request):
    return render(request, "web/careers.html")
