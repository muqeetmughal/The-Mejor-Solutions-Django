from django.urls import path
from . import views as blog_views
urlpatterns = [
    path("", blog_views.index, name="blog_home"),
    path("<slug>", blog_views.blog_detail, name="blog_detail"),

    

]
