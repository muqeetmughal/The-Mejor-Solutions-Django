from django.shortcuts import render
from rest_framework.decorators import api_view
from rest_framework.response import Response
from blog.models import Post, Category
from .serializers import ListCommentSerializer
from django.shortcuts import get_object_or_404
# Create your views here.


@api_view()
def list_comments(request):

    post_id = 1

    post = get_object_or_404(Post, pk=post_id)
    comments = post.comments.all()

    serializer = ListCommentSerializer(comments, many=True)

    return Response(serializer.data)
