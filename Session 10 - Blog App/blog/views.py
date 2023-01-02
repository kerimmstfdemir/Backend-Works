from rest_framework.viewsets import ModelViewSet

from .models import Category, Blog
from .serializers import CategorySerializer, BlogSerializer


class CategoryView(ModelViewSet):  # crud
    queryset = Category.objects.all()
    serializer_class = CategorySerializer
    filterset_fields = ['name']


class BlogView(ModelViewSet):
    queryset = Blog.objects.all()
    serializer_class = BlogSerializer
    # filterset_fields = ['category__name'] # CATEGORY NAME İNE GÖRE FİLTRELEME YAPMAK İÇİN
    filterset_fields = ['category']
    search_fields = ['title', 'content']
