from django.db import models


class Aviso(models.Model):
    titulo = models.CharField(max_length=255)
    subtitulo = models.CharField(max_length=255, blank=True)
    texto = models.TextField()

    def __str__(self):
        return self.titulo
