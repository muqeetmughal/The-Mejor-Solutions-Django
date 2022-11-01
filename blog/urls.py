from django.urls import path
from . import views as blog_views
urlpatterns = [
    path("", blog_views.index),
    path("<slug>", blog_views.blog_detail, name="blog_detail"),

    

]
