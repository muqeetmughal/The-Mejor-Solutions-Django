from django.urls import path
from . import views as web_views


urlpatterns = [
    path("", web_views.home),
    path("about-us", web_views.about),
    path("services", web_views.services),
    path("portfolio", web_views.work),
    path("contact", web_views.contact),

]
