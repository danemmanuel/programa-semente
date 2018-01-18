<?php
require "includes/head.php";

require "includes/menu.php";

?>
<section class="page-usuarios">
	<div class="title sake">Professores - Acessos</div>
	<div class="row-flex" style="margin-top:30px;">
		<div class="l4">
			<div class="change">
				<div class="imaluno">
					<button class="btn active" id="aluno">
						Vídeos Totais
					</button>
				</div>
				<div class="improfessor">
					<button class="btn" id="professor">
						Vídeos Detalhes
					</button>
				</div>
			</div>
		</div>
	</div>

	<div class="filtros">

		<div class="row-flex" style="align-items:flex-end;">
			<div class="l3">
				<div class="textvideo">
					<input type="text" class="inputvideo" placeholder="Buscar Aluno">
				</div>
			</div>
			<div class="l2 marg">
				<label for="tipo" class="filterlabel">Filtros</label>
				<select name="" id="tipo" class="inputvideo">
					<option value="" disabled selected="">Ano</option>
					<option value="">2015</option>
					<option value="">2016</option>
					<option value="">2017</option>
					<option value="">2018</option>
				</select>
			</div>
			<div class="l2 marg">
				<label for="ate" class="filterlabel">Períodos</label>
				<input type="text" id="ate" class="input" autocomplete="off" placeholder="00/00/0000" style="margin:0 !important">
			</div>
			<div class="l1">
				<div class="ate">
					Até
				</div>
			</div>
			<div class="l2 marg">
				
				<input type="text" id="ate" class="input" autocomplete="off" placeholder="00/00/0000" style="margin:0 !important">
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
					<div class="acessos">
						Assistidos: 20
						<br>
						80% (11/20)
					</div>
					<div class="nome" style="margin-top: 25px;">Alice Furlan Carvalho</div>
					<div class="desc">Aluna na Escola Estadual Peixoto</div>
					<div class="email">Responsável: Sérgio Luiz Carvalho</div>
				</div>
			</div>
			<div class="l4">
				<div class="item">
					<div class="imagem">
						<img src="../public/img/avatar2.png" alt="">
					</div>
					<div class="acessos">
						Assistidos: 23
						<br>
						80% (11/20)
					</div>
					<div class="nome" style="margin-top: 25px;">Juliano Limas</div>
					<div class="desc">Aluno na Escola Maria Luísa</div>
					<div class="email">Responsável: Sérgio Luiz Carvalho</div>
				</div>
			</div>
			<div class="l4">
				<div class="item">
					<div class="imagem">
						<img src="../public/img/avatar.png" alt="">
					</div>
					<div class="acessos">
						Assistidos: 40
						<br>
						80% (11/20)
					</div>
					<div class="nome" style="margin-top: 25px;">Alice Furlan Carvalho</div>
					<div class="desc">Aluna na Escola Estadual Peixoto</div>
					<div class="email">Responsável: Sérgio Luiz Carvalho</div>
				</div>

			</div>
			<div class="l4">
				<div class="item">
					<div class="imagem">
						<img src="../public/img/avatar2.png" alt="">
					</div>
					<div class="acessos">
						Assistidos: 12
						<br>
						80% (11/20)
					</div>
					<div class="nome" style="margin-top: 25px;">Juliano Limas</div>
					<div class="desc">Aluno na Escola Maria Luísa</div>
					<div class="email">Responsável: Sérgio Luiz Carvalho</div>
				</div>
			</div>
			<div class="l4">
				<div class="item">
					<div class="imagem">
						<img src="../public/img/avatar.png" alt="">
					</div>
					<div class="acessos">
						Assistidos: 10
						<br>
						80% (11/20)
					</div>
					<div class="nome" style="margin-top: 25px;">Alice Furlan Carvalho</div>
					<div class="desc">Aluna na Escola Estadual Peixoto</div>
					<div class="email">Responsável: Sérgio Luiz Carvalho</div>
				</div>
			</div><div class="l4">
				<div class="item">
					<div class="imagem">
						<img src="../public/img/avatar2.png" alt="">
					</div>
					<div class="acessos">
						Assistidos: 05
						<br>
						80% (11/20)
					</div>
					<div class="nome" style="margin-top: 25px;">Juliano Limas</div>
					<div class="desc">Aluno na Escola Maria Luísa</div>
					<div class="email">Responsável: Sérgio Luiz Carvalho</div>
				</div>
			</div>
			<div class="l4">
				<div class="item">
					<div class="imagem">
						<img src="../public/img/avatar.png" alt="">
					</div>
					<div class="acessos">
						Assistidos: 20
						<br>
						80% (11/20)
					</div>
					<div class="nome" style="margin-top: 25px;">Alice Furlan Carvalho</div>
					<div class="desc">Aluna na Escola Estadual Peixoto</div>
					<div class="email">Responsável: Sérgio Luiz Carvalho</div>
				</div>
			</div>
			<div class="l4">
				<div class="item">
					<div class="imagem">
						<img src="../public/img/avatar2.png" alt="">
					</div>
					<div class="acessos">
						Assistidos: 27
						<br>
						80% (11/20)
					</div>
					<div class="nome" style="margin-top: 25px;">Juliano Limas</div>
					<div class="desc">Aluno na Escola Maria Luísa</div>
					<div class="email">Responsável: Sérgio Luiz Carvalho</div>
				</div>
			</div>
			<div class="l4">
				<div class="item">
					<div class="imagem">
						<img src="../public/img/avatar.png" alt="">
					</div>
					<div class="acessos">
						Assistidos: 20
						<br>
						80% (11/20)
					</div>
					<div class="nome" style="margin-top: 25px;">Alice Furlan Carvalho</div>
					<div class="desc">Aluna na Escola Estadual Peixoto</div>
					<div class="email">Responsável: Sérgio Luiz Carvalho</div>
				</div>
			</div>
			<div class="vejamais">
				<div class="bt">
					Veja mais
				</div>
			</div>
		</div>
	</div>

	<div class="painel-geral">
		<div class="stats">
			<div class="graphic">
				<h3>80%</h3>
				<p><strong>Acessos:</strong> 7/10</p>
				<p><strong>Externato Rio Branco 6º ano C</strong></p>
			</div>
		</div>
	</div>

</section>

<script>
	$(document).ready(function(){
		$(".relatorios").addClass('active');
		$(".painel-usuarios").fadeOut();
		$(".painel-geral").delay("400").fadeIn();
		$("#aluno").click(function() {
			$(".painel-usuarios").fadeOut();
			$(".painel-geral").delay("400").fadeIn();
			$(this).addClass('active');
			$("#professor").removeClass('active');
		});
		$("#professor").click(function() {
			$(this).addClass('active');
			$("#aluno").removeClass('active');
			$(".painel-usuarios").delay("400").fadeIn();
			$(".painel-geral").fadeOut();
		});

	});
</script>

<?php
require "includes/footer.php";

?>