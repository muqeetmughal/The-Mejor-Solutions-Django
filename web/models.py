from django.db import models
from django.contrib.auth import get_user_model
# Create your models here.

User = get_user_model()


class Profile(models.Model):
    user = models.OneToOneField(User, on_delete=models.CASCADE)
    image = models.ImageField(upload_to="profiles")
    about = models.TextField(null=True, blank=True)

    def __str__(self) -> str:
        return self.user.username
