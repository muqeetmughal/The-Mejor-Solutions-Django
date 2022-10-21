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
    content = RichTextField()
    author = models.ForeignKey(
        User, on_delete=models.CASCADE, null=True, blank=True)

    created_at = models.DateTimeField(auto_now_add=True)
    updated_at = models.DateTimeField(auto_now=True)

    seo = models.OneToOneField("Seo", on_delete=models.CASCADE)

    def save(self, *args, **kwargs):
        self.slug = slugify(self.title)
        super(Post, self).save(*args, **kwargs)

    def __str__(self) -> str:
        return self.title

    def get_absolute_url(self):
        return reverse("blog_detail", kwargs={"slug": self.slug})


class Seo(models.Model):
    seo_tag = models.ManyToManyField('SeoProperty')


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
