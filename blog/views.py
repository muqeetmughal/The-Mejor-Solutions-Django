
from django.shortcuts import render

from blog.models import Category, Post
from django.shortcuts import get_object_or_404

# Create your views here.


def index(request):
    posts = Post.objects.all()

    return render(request, "blog/index.html", context={"posts": posts})


def blog_detail(request, slug):

    post = get_object_or_404(Post, slug=slug)

    recent_posts = Post.objects.filter().order_by('-id')[:5]

    categories = Category.objects.all()

    return render(request, "blog/detail.html", context={"post": post, "recent_posts": recent_posts, "categories": categories})


