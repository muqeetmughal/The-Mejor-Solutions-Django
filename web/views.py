from django.shortcuts import render, HttpResponse, redirect

from web.models import Service, Work, Contact, JobApplication, NewsLetter, Testimonial
from django.shortcuts import get_object_or_404
from django.views.decorators.csrf import csrf_exempt
from blog.models import Post
from django.contrib import messages


def home(request):
    services = Service.objects.all()
    works = Work.objects.all()
    insights = Post.objects.all().order_by('-id')[:3]
    testimonials = Testimonial.objects.all()
    context = {
        "services": services,
        "works": works,
        "insights": insights,
        "testimonials": testimonials
    }
    return render(request, "web/home.html", context=context)


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


@csrf_exempt
def contact(request):
    if request.method == "POST":
        name = request.POST.get("name")
        phone = request.POST.get("phone")
        email = request.POST.get("email")
        subject = request.POST.get("subject")
        message = request.POST.get("message")

        Contact.objects.create(name=name, phone=phone,
                               email=email, subject=subject, message=message)

        messages.success(
            request, 'Thanks for contacting us we will contact you back soon')

        print("Form Submission")
        return redirect("/")
    return render(request, "web/contact.html")


@csrf_exempt
def careers(request):
    if request.method == "POST" and request.FILES['resume']:
        name = request.POST.get("name")
        phone = request.POST.get("phone")
        email = request.POST.get("email")
        subject = request.POST.get("subject")
        designation = request.POST.get("designation")

        about = request.POST.get("about")

        resume = request.FILES['resume']

        JobApplication.objects.create(name=name, phone=phone,
                                      email=email, subject=subject, about=about, designation=designation, resume=resume)

        # print("Form Submission", request.POST)

        messages.success(
            request, 'Your Application has bee submitted')

        return redirect("/")
    return render(request, "web/careers.html")


@csrf_exempt
def subscribe(request):
    if request.method == "POST":
        email = request.POST.get("newsletterEmail")

        try:

            NewsLetter.objects.create(email=email)

        except Exception as e:
            return HttpResponse("Already subscribed")

        # JobApplication.objects.create(name=name, phone=phone,
        #                               email=email, subject=subject, about=about, designation=designation, resume=resume)

        print("Form Submission", request.POST)

        messages.success(
            request, 'Thanks for subscribing The Mejor Solutions')

        return redirect("/")
    else:
        return HttpResponse("Not Allowed")
