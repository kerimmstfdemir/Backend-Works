from rest_framework.viewsets import ModelViewSet

from .models import Category, Blog
from .serializers import CategorySerializer, BlogSerializer

class CategoryView(ModelViewSet):  # CRUD
    queryset = Category.objects.all()
    serializer_class = CategorySerializer

class BlogView(ModelViewSet):
    queryset = Blog.objects.all()
    serializer_class = BlogSerializer