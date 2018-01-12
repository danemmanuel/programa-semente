from django.db import models
from django.db.models.signals import post_save
from django.dispatch import receiver
from django.contrib.auth.models import User
from escolas.models import Escola
from series.models import Serie
from classes.models import Classe


TIPO = (
    ('1', 'Administrador'),
    ('2', 'Diretor'),
    ('3', 'Gestor'),
    ('4', 'Professor'),
    ('5', 'Aluno')
)

DEGUSTACAO = (
    ('1', 'Não'),
    ('2', 'Sim')
)


class Profile(models.Model):
    user = models.OneToOneField(User, on_delete=models.CASCADE)
    tipo = models.CharField(max_length=1, choices=TIPO)
    nome_responsavel = models.CharField(max_length=200)
    nome = models.CharField(max_length=200)
    email = models.CharField(max_length=200)
    senha = models.CharField(max_length=200)
    escola = models.ForeignKey(Escola)
    serie = models.ForeignKey(Serie)
    classe = models.ForeignKey(Classe)
    degustacao = models.CharField(max_length=1, choices=DEGUSTACAO)


    @receiver(post_save, sender=User)
    def create_user_profile(sender, instance, created, **kwargs):
        if created:
            Profile.objects.create(user=instance)


    @receiver(post_save, sender=User)
    def save_user_profile(sender, instance, **kwargs):
        instance.profile.save()
