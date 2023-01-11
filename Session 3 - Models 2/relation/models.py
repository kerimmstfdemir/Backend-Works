from django.db import models
from django.contrib.auth.models import User

class Profile(models.Model):
    bio = models.TextField(blank=True)
    image = models.ImageField(upload_to="profile", blank=True, null=True)
    user = models.OneToOneField(User, on_delete=models.CASCADE)

class Address(models.Model):
    name = models.CharField(max_length=20)
    address = models.CharField(max_length=150)
    city = models.CharField(max_length=20)
    phone = models.PositiveIntegerField()
    user = models.ForeignKey(User, on_delete=models.CASCADE)