from email.policy import default
from django.db import models
from ckeditor.fields import RichTextField
from django.utils.text import slugify
from django.contrib.auth import get_user_model
from django.urls import reverse
from django.utils.translation import gettext_lazy as _


User = get_user_model()
# Create your models here.


class Post(models.Model):
    title = models.CharField(max_length=255, null=False, blank=False)
    slug = models.SlugField(null=False, blank=True)
    thumbnail = models.ImageField(upload_to="blogs")
    excerpt = models.TextField()
    content = RichTextField()
    author = models.ForeignKey(
        User, on_delete=models.CASCADE, null=True, blank=True)

    created_at = models.DateTimeField(auto_now_add=True)
    updated_at = models.DateTimeField(auto_now=True)

    seo = models.OneToOneField("Seo", on_delete=models.CASCADE, default=None)

    def save(self, *args, **kwargs):
        self.slug = slugify(self.title)
        super(Post, self).save(*args, **kwargs)

    def __str__(self) -> str:
        return self.title

    def get_absolute_url(self):
        return reverse("blog_detail", kwargs={"slug": self.slug})


class Comment(models.Model):
    name = models.CharField(max_length=50)
    email = models.EmailField()
    comment = models.TextField()
    post = models.ForeignKey(
        Post, on_delete=models.CASCADE, related_name="comments")

    created_at = models.DateTimeField(auto_now_add=True)

    def save(self, *args, **kwargs):
        self.slug = slugify(self.name)
        super(Comment, self).save(*args, **kwargs)


class Category(models.Model):
    name = models.CharField(max_length=50)
    slug = models.SlugField(null=False, blank=True)
    parent = models.ForeignKey(
        "self", on_delete=models.PROTECT, null=True, blank=True, related_name='children')

    def __str__(self) -> str:
        return self.name

    def get_all_children(self, include_self=True):
        r = []
        if include_self:
            r.append(self)
        for c in Category.objects.filter(parent=self):
            _r = c.get_all_children(include_self=True)
            if 0 < len(_r):
                r.extend(_r)
        return r


class Seo(models.Model):
    seo_tag = models.ManyToManyField('SeoProperty', default=None)


class SeoProperty(models.Model):
    class TYPE_CHOICES(models.TextChoices):
        NAME = 'name', _('Name')
        PROPERTY = 'property', _('Property')

    key_type = models.CharField(
        max_length=20, choices=TYPE_CHOICES.choices, default=TYPE_CHOICES.NAME)
    key_value = models.CharField(max_length=50, null=False, blank=False)
    content = models.TextField(null=False, blank=False)

    def __str__(self) -> str:
        return f"<meta {self.key_type}='{self.key_value}' content='{self.content}'/>"
