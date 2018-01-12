from django.db import models
from series.models import Serie
from django.contrib.auth.models import User


TIPO_VIDEO = (
    ('1', 'Vídeo para alunos'),
    ('2', 'Vídeo para professores')
)


class Video(models.Model):
    nome = models.CharField(max_length=200)
    url = models.CharField(max_length=200)
    tipo = models.CharField(max_length=1, choices=TIPO_VIDEO)
    serie = models.ForeignKey(Serie)


    def __str__(self):
        return self.nome


class VideoDegustacao(models.Model):
    usuario = models.ForeignKey(User)
    video = models.ForeignKey(Video)
