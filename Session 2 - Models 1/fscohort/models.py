from django.db import models

# Create your models here.
class Student(models.Model):
    #? CharField'ta max_legth zorunludur.
    first_name = models.CharField(max_length=50)  
    last_name = models.CharField(max_length=50)
    number = models.IntegerField(default=1111)
    about = models.TextField(blank=True, null=True)
    #? DateTimeField hem tarihi hem de saati alır.
    #? auto_now_add: take the creation date and time
    register = models.DateTimeField(auto_now_add=True)
    #? auto_now take: the update date and time
    last_updated_date = models.DateTimeField(auto_now=True)
    is_active = models.BooleanField()

    def __str__(self):
        return f"{self.number} {self.first_name}"

    class Meta:
        ordering = ["number"]
        verbose_name_plural = "Student_list"

    def student_year_status(self):
        "Returns the student's year status"
        import datetime
        if self.register < datetime.date(2019, 1, 1):
            return "Senior"
        if self.register < datetime.date(2020, 1, 1):
            return "Junior"
        else:
            return "Freshman"


#* ORM commands
#! Student.objects.all()
#! Student.objects.get(...)
#! Student.objects.filter(...)