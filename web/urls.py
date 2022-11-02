from django.urls import path
from . import views as web_views


urlpatterns = [
    path("", web_views.home),
    path("about-us", web_views.about),
    path("services", web_views.services),
    path("services/<slug>", web_views.service_detail),
    path("portfolio/<slug>", web_views.work_detail, name="work_detail"),
    path("portfolio", web_views.works),
    path("contact", web_views.contact),
    path("careers", web_views.careers),
    path("subscribe", web_views.subscribe),

]
