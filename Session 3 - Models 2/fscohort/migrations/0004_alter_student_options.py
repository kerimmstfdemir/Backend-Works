# Generated by Django 4.1.5 on 2023-01-10 13:05

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        (
            "fscohort",
            "0003_alter_student_options_student_about_student_avatar_and_more",
        ),
    ]

    operations = [
        migrations.AlterModelOptions(
            name="student",
            options={
                "ordering": ("-number",),
                "verbose_name": "Öğrenci",
                "verbose_name_plural": "Öğrenciler",
            },
        ),
    ]