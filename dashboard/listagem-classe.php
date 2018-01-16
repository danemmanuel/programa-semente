<?php
require "includes/head.php";

require "includes/menu.php";

?>
<section class="page-usuarios">
	<div class="title sake">Listagem Classes</div>

	<a href="./addclasse.php">
		<div class="addusuario" style="margin-left:40px;">
			<i class="mdi mdi-account-circle"></i> Adicionar classe<!-- bell --> 
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
					<th>Escola</th>
					<th>Ano</th>
					<th>Classe</th>
					<th>Nº alunos</th>
					<th>Ações</th>
				</tr>
				<tr>
					<td>Ana Bueno-Cambuí</td>
					<td>5º ano</td>
					<td>5º ano</td>
					<td>30</td>
					<td>
						<i class="mdi mdi-pencil"></i>
						<i class="mdi mdi-delete"></i>      	
					</td>
				</tr>
				<tr>
					<td>Ana Bueno-Cambuí</td>
					<td>6º ano</td>
					<td>6º ano</td>
					<td>33</td>
					<td>
						<i class="mdi mdi-pencil"></i>
						<i class="mdi mdi-delete"></i>      	
					</td>
				</tr>
				<tr>
					<td>Ana Bueno-Cambuí</td>
					<td>7º ano</td>
					<td>7º ano</td>
					<td>40</td>
					<td>
						<i class="mdi mdi-pencil"></i>
						<i class="mdi mdi-delete"></i>      	
					</td>
				</tr>
				<tr>
					<td>Ana Bueno-Cambuí</td>
					<td>8º ano</td>
					<td>8º ano</td>
					<td>32</td>
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