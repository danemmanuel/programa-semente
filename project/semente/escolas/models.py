from django.db import models


ESTADOS = (
    ('Acre', 'Acre'),
    ('Alagoas', 'Alagoas'),
    ('Amapá', 'Amapá'),
    ('Amazonas', 'Amazonas'),
    ('Bahia', 'Bahia'),
    ('Ceará', 'Ceará'),
    ('Distrito Federal', 'Distrito Federal'),
    ('Espiríto Santo', 'Espiríto Santo'),
    ('Goiás', 'Goiás'),
    ('Maranhão', 'Maranhão'),
    ('Mato Grosso', 'Mato Grosso'),
    ('Mato Grosso do Sul', 'Mato Grosso do Sul'),
    ('Minas Gerais', 'Minas Gerais'),
    ('Pará', 'Pará'),
    ('Paraíba', 'Paraíba'),
    ('Paraná', 'Paraná'),
    ('Pernambuco', 'Pernambuco'),
    ('Piauí', 'Piauí'),
    ('Rio de Janeiro', 'Rio de Janeiro'),
    ('Rio Grande do Norte', 'Rio Grande do Norte'),
    ('Rio Grande do Sul', 'Rio Grande do Sul'),
    ('Rondônia', 'Rondônia'),
    ('Roraima', 'Roraima'),
    ('Santa Catarina', 'Santa Catarina'),
    ('São Paulo', 'São Paulo'),
    ('Sergipe', 'Sergipe'),
    ('Tocantins', 'Tocantins')
)

class Escola(models.Model):
    nome = models.CharField(max_length=255)
    endereco = models.CharField(max_length=255)
    ano_validade = models.IntegerField()
    codigo_alunos = models.CharField(max_length=50, unique=True)
    codigo_professor = models.CharField(max_length=50, unique=True)
    telefone = models.CharField(max_length=50)
    contato = models.CharField(max_length=100)
    email = models.CharField(max_length=100)
    estado = models.CharField(max_length=100, choices=ESTADOS)
    cidade = models.CharField(max_length=200)
    logo = models.FileField()

    def __str__(self):
        return self.nome
