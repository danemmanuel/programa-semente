<?php
require "includes/head.php";

require "includes/menu.php";

?>
<section class="page-usuarios">
	<div class="title sake">Listagem Escola</div>

	<a href="./addano.php">
		<div class="addusuario" style="margin-left:40px;">
			<i class="mdi mdi-account-circle"></i> Adicionar Ano 
		</div>
	</a>

	<div class="painel-usuarios">
		<div class="row-flex ">
			<div class="l4">
				<div class="search">
					<input type="text" class="input" placeholder="Buscar">
				</div>
			</div>
		</div>
		<div class="row-flex">
			<table>
				<tr>
					<th>Nome</th>
					<th>Ações</th>
				</tr>
				<tr>
					<td>1º ano</td>
					<td>
						<i class="mdi mdi-pencil"></i>
						<i class="mdi mdi-delete"></i>      	
					</td>
				</tr>
				<tr>
					<td>2º ano</td>
					<td>
						<i class="mdi mdi-pencil"></i>
						<i class="mdi mdi-delete"></i>      	
					</td>
				</tr>
				<tr>
					<td>3º ano</td>
					<td>
						<i class="mdi mdi-pencil"></i>
						<i class="mdi mdi-delete"></i>      	
					</td>
				</tr>
				<tr>
					<td>4º ano</td>
					<td>
						<i class="mdi mdi-pencil"></i>
						<i class="mdi mdi-delete"></i>      	
					</td>
				</tr>

			</table>
		</div>
	</div>
</section>

<script>
	$(document).ready(function(){
		$(".usuarios").addClass('active');

		$("#aluno").click(function() {
			$("#cadastroprofessor").fadeOut();
			$("#cadastroaluno").delay("400").fadeIn();
			$(this).addClass('active');
			$("#professor").removeClass('active');
		});
		$("#professor").click(function() {
			$(this).addClass('active');
			$("#aluno").removeClass('active');
			$("#cadastroprofessor").delay("400").fadeIn();
			$("#cadastroaluno").fadeOut();
		});

	});
</script>

<?php
require "includes/footer.php";

?>