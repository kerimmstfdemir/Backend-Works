from django.urls import path
from .views import homedj

urlpatterns = [
   path("", homedj),
]