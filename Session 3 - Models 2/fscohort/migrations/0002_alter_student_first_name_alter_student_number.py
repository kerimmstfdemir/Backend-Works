# Generated by Django 4.1.5 on 2023-01-10 12:22

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ("fscohort", "0001_initial"),
    ]

    operations = [
        migrations.AlterField(
            model_name="student",
            name="first_name",
            field=models.CharField(max_length=30),
        ),
        migrations.AlterField(
            model_name="student",
            name="number",
            field=models.PositiveSmallIntegerField(blank=True, null=True),
        ),
    ]