# Generated by Django 4.1.5 on 2023-01-10 13:12

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ("fscohort", "0004_alter_student_options"),
    ]

    operations = [
        migrations.AddField(
            model_name="student",
            name="files",
            field=models.FileField(blank=True, null=True, upload_to="student_files"),
        ),
        migrations.AlterField(
            model_name="student",
            name="avatar",
            field=models.ImageField(blank=True, null=True, upload_to="student"),
        ),
    ]
