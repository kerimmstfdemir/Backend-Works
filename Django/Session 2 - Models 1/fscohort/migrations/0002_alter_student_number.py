# Generated by Django 4.1.5 on 2023-01-09 18:56

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ("fscohort", "0001_initial"),
    ]

    operations = [
        migrations.AlterField(
            model_name="student",
            name="number",
            field=models.IntegerField(default=1111),
        ),
    ]
