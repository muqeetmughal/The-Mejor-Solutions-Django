from django.urls import path
from . import views as web_views


urlpatterns = [
    path("", web_views.home, name="home"),
    path("about-us", web_views.about, name="about"),
    path("services", web_views.services, name="services"),
    path("services/<slug>", web_views.service_detail),
    path("portfolio/<slug>", web_views.work_detail, name="work_detail"),
    path("portfolio", web_views.works, name="work"),
    path("contact", web_views.contact, name="contact"),
    path("careers", web_views.careers, name="careers"),
    path("subscribe", web_views.subscribe),

]
