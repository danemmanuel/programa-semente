<?php
require "includes/head.php";

require "includes/menu.php";

?>
<section class="page-usuarios">
	<div class="title sake">Listagem Escola</div>

	<a href="./addescola.php">
		<div class="addusuario" style="margin-left:40px;">
			<i class="mdi mdi-account-circle"></i> Adicionar escola<!-- bell --> 
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
					<th>Email</th>
					<th>Cidade</th>
					<th>Código</th>
					<th>Ações</th>
				</tr>
				<tr>
					<td>Ana Bueno-Cambuí</td>
					<td>escola@escolaanabueno.com.br</td>
					<td>Rua Alípio Ramos, 50</td>
					<td>anabueno.aluno-ct1al</td>
					<td>
						<i class="mdi mdi-pencil"></i>
						<i class="mdi mdi-delete"></i>      	
					</td>
				</tr>
				<tr>
					<td>Ana Bueno-Cambuí</td>
					<td>escola@escolaanabueno.com.br</td>
					<td>Rua Alípio Ramos, 50</td>
					<td>anabueno.aluno-ct1al</td>
					<td>
						<i class="mdi mdi-pencil"></i>
						<i class="mdi mdi-delete"></i>      	
					</td>
				</tr>
				<tr>
					<td>Ana Bueno-Cambuí</td>
					<td>escola@escolaanabueno.com.br</td>
					<td>Rua Alípio Ramos, 50</td>
					<td>anabueno.aluno-ct1al</td>
					<td>
						<i class="mdi mdi-pencil"></i>
						<i class="mdi mdi-delete"></i>      	
					</td>
				</tr>
				<tr>
					<td>Ana Bueno-Cambuí</td>
					<td>escola@escolaanabueno.com.br</td>
					<td>Rua Alípio Ramos, 50</td>
					<td>anabueno.aluno-ct1al</td>
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