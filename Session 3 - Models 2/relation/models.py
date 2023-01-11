from django.db import models
from django.contrib.auth.models import User

#! One-To-One
class Profile(models.Model):
    bio = models.TextField(blank=True)
    image = models.ImageField(upload_to="profile", blank=True, null=True)
    user = models.OneToOneField(User, on_delete=models.CASCADE)

    def __str__(self):
        return self.user

#! One-To-Many
class Address(models.Model):
    name = models.CharField(max_length=20)
    address = models.CharField(max_length=150)
    city = models.CharField(max_length=20)
    phone = models.PositiveIntegerField()
    user = models.ForeignKey(User, on_delete=models.CASCADE)

    def __str__(self):
        return self.name

#! Many-To-Many
class Product(models.Model):
    name = models.CharField(max_length=100)
    user = models.ManyToManyField(User)

    def __str__(self):
        return self.name