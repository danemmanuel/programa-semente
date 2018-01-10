from django.db import models
from escolas.models import Escola
from series.models import Serie


class Classe(models.Model):
    nome = models.CharField(max_length=255)
    numero_estudantes = models.IntegerField()
    escola = models.ForeignKey(Escola)
    serie = models.ForeignKey(Serie)


    def __str__(self):
        return self.nome
