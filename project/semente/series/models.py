from django.db import models


class Serie(models.Model):
    nome = models.CharField(max_length=200)

    def __str__(self.nome):
        return self.nome
