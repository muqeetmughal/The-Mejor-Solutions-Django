# Generated by Django 4.1.2 on 2022-11-02 17:10

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('web', '0009_jobapplication'),
    ]

    operations = [
        migrations.RenameField(
            model_name='jobapplication',
            old_name='message',
            new_name='about',
        ),
    ]
