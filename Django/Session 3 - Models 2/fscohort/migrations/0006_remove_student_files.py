# Generated by Django 4.1.5 on 2023-01-10 13:15

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ("fscohort", "0005_student_files_alter_student_avatar"),
    ]

    operations = [
        migrations.RemoveField(
            model_name="student",
            name="files",
        ),
    ]