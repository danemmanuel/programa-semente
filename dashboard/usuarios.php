<?php
require "includes/head.php";

require "includes/menu.php";

?>
<section class="page-usuarios">
	<div class="title sake">Usuários</div>

	<a href="">
		<div class="addusuario">
			<i class="mdi mdi-account-circle"></i>  <!-- bell --> Adicionar usuário
		</div>
	</a>
	<div class="filtros">

		<div class="row-flex">
			<div class="l4">
				<div class="textvideo">
					<input type="text" class="inputvideo" placeholder="Buscar um arquivo">
				</div>
			</div>
			<div class="l5">
				<div class="change">
					<div class="cr">Carregar CSV</div>
					<div class="imaluno new">

						<button class="btn active" id="aluno">
							Sou aluno
						</button>
					</div>
					<div class="improfessor new">
						<button class="btn" id="professor">
							Sou professor
						</button>
					</div>
				</div>
			</div>
			<div class="l2 marg">
				<label for="tipo" class="filterlabel">Filtros</label>
				<select name="" id="tipo" class="inputvideo">
					<option value="" disabled selected="">Perfil</option>
					<option value="">Autocontrole</option>
					<option value="">Autoconhecimento</option>
					<option value="">Empatia</option>
					<option value="">Decisões Responsáveis</option>
					<option value="">Habilidades Sociais</option>
				</select>
			</div>

		</div>
	</div>

	<div class="painel-usuarios">
		<div class="row-flex ">
			<div class="l4">
				<div class="item">
					<div class="imagem">
						<img src="../public/img/avatar.png" alt="">
					</div>
					<div class="nome">Alice Furlan Carvalho</div>
					<div class="desc">Aluna na Escola Estadual Peixoto</div>
					<div class="email">aline@escolapeixoto.com.br</div>
				</div>
			</div>
			<div class="l4">
				<div class="item">
					<div class="imagem">
						<img src="../public/img/avatar2.png" alt="">
					</div>
					<div class="nome">Juliano Limas</div>
					<div class="desc">Aluno na Escola Maria Luísa</div>
					<div class="email">juliano@escolamaria.com.br</div>
				</div>
			</div>
			<div class="l4">
				<div class="item">
					<div class="imagem">
						<img src="../public/img/avatar.png" alt="">
					</div>
					<div class="nome">Alice Furlan Carvalho</div>
					<div class="desc">Aluna na Escola Estadual Peixoto</div>
					<div class="email">aline@escolapeixoto.com.br</div>
				</div>
			</div>
			<div class="l4">
				<div class="item">
					<div class="imagem">
						<img src="../public/img/avatar2.png" alt="">
					</div>
					<div class="nome">Juliano Limas</div>
					<div class="desc">Aluno na Escola Maria Luísa</div>
					<div class="email">juliano@escolamaria.com.br</div>
				</div>
			</div>
			<div class="l4">
				<div class="item">
					<div class="imagem">
						<img src="../public/img/avatar.png" alt="">
					</div>
					<div class="nome">Alice Furlan Carvalho</div>
					<div class="desc">Aluna na Escola Estadual Peixoto</div>
					<div class="email">aline@escolapeixoto.com.br</div>
				</div>
			</div><div class="l4">
				<div class="item">
					<div class="imagem">
						<img src="../public/img/avatar2.png" alt="">
					</div>
					<div class="nome">Juliano Limas</div>
					<div class="desc">Aluno na Escola Maria Luísa</div>
					<div class="email">juliano@escolamaria.com.br</div>
				</div>
			</div>
			<div class="l4">
				<div class="item">
					<div class="imagem">
						<img src="../public/img/avatar.png" alt="">
					</div>
					<div class="nome">Alice Furlan Carvalho</div>
					<div class="desc">Aluna na Escola Estadual Peixoto</div>
					<div class="email">aline@escolapeixoto.com.br</div>
				</div>
			</div>
			<div class="l4">
				<div class="item">
					<div class="imagem">
						<img src="../public/img/avatar2.png" alt="">
					</div>
					<div class="nome">Juliano Limas</div>
					<div class="desc">Aluno na Escola Maria Luísa</div>
					<div class="email">juliano@escolamaria.com.br</div>
				</div>
			</div>
			<div class="l4">
				<div class="item">
					<div class="imagem">
						<img src="../public/img/avatar.png" alt="">
					</div>
					<div class="nome">Alice Furlan Carvalho</div>
					<div class="desc">Aluna na Escola Estadual Peixoto</div>
					<div class="email">aline@escolapeixoto.com.br</div>
				</div>
			</div>
			<div class="vejamais">
				<div class="bt">
					Veja mais
				</div>
			</div>
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