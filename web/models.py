from django.db import models
from django.contrib.auth import get_user_model
from django.utils.text import slugify
from ckeditor.fields import RichTextField
from django.urls import reverse
User = get_user_model()


class Profile(models.Model):
    user = models.OneToOneField(User, on_delete=models.CASCADE)
    image = models.ImageField(upload_to="profiles")
    about = models.TextField(null=True, blank=True)

    def __str__(self) -> str:
        return self.user.username


class Service(models.Model):
    name = models.CharField(max_length=100)
    slug = models.SlugField()
    content = RichTextField()

    def __str__(self) -> str:
        return self.name

    def save(self, *args, **kwargs):
        self.slug = slugify(self.name)
        super(Service, self).save(*args, **kwargs)


class Work(models.Model):
    name = models.CharField(max_length=100)
    slug = models.SlugField()

    client = models.CharField(max_length=50)
    thumbnail = models.ImageField(upload_to="works")
    completed_date = models.DateField()
    timeframe = models.CharField(max_length=100)
    services = models.ManyToManyField(Service)
    content = RichTextField()

    def __str__(self) -> str:
        return self.name

    def save(self, *args, **kwargs):
        self.slug = slugify(self.name)
        super(Work, self).save(*args, **kwargs)

    def get_absolute_url(self):
        return reverse("work_detail", kwargs={"slug": self.slug})


class Contact(models.Model):
    name = models.CharField(max_length=100)
    phone = models.CharField(max_length=13, null=True, blank=True)
    email = models.EmailField()
    subject = models.CharField(max_length=255)
    message = models.TextField()


class JobApplication(models.Model):
    name = models.CharField(max_length=100)
    phone = models.CharField(max_length=13, null=True, blank=True)
    email = models.EmailField(unique=True)
    subject = models.CharField(max_length=255)
    designation = models.CharField(max_length=100)
    resume = models.ImageField(upload_to="resume")
    about = models.TextField()


class NewsLetter(models.Model):
    email = models.EmailField(unique=True)

    def __str__(self) -> str:
        return self.email
