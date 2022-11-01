from django.urls import path
from .views import list_comments

urlpatterns = [
    path("listcomments", list_comments, name="list_comments")
]
