<?php 
require("includes/head.php");

require("includes/menu.php");

?>
<section class="page-arquivos">
	<div class="title sake">Arquivos</div>
	<div class="filtros">
			
			<div class="row-flex">
				<div class="l5">
					<div class="textvideo">
						<input type="text" class="inputvideo" placeholder="Buscar um arquivo">
					</div>
				</div>

				<div class="l2 marg">
					<label for="tipo" class="filterlabel">Filtros</label>
					<select name="" id="tipo" class="inputvideo">
						<option value="" disabled selected="">Segmento</option>
						<option value="">Autocontrole</option>
						<option value="">Autoconhecimento</option>
						<option value="">Empatia</option>
						<option value="">Decisões Responsáveis</option>
						<option value="">Habilidades Sociais</option>
					</select>
				</div>
				<div class="l2">
					<select name="" id="" class="inputvideo">
						<option value="" disabled selected="">Ano</option>
						<option value="">2015</option>
						<option value="">2016</option>
						<option value="">2017</option>
						<option value="">2018</option>
					</select>
				</div>
			</div>
		</div>

		<div class="itensvideo">
			<div class="row-flex">
				<div class="l3">
					<div class="imagem" style="background-image:url(../public/img/arquivo1.jpg)"></div>
					<div class="item">
						<div class="tipo">Manunal do professor</div>
						<div class="escolaridade">6º Ano - Livro 1</div>
						<div class="data">26 de janeiro de 2017</div>
					</div>
				</div>
				<div class="l3">
					<div class="imagem" style="background-image:url(../public/img/arquivo2.jpg)"></div>
					<div class="item">
						<div class="tipo">Manunal do professor</div>
						<div class="escolaridade">6º Ano - Livro 1</div>
						<div class="data">26 de janeiro de 2017</div>
					</div>
				</div>
				<div class="l3">
					<div class="imagem" style="background-image:url(../public/img/arquivo3.jpg)"></div>
					<div class="item">
						<div class="tipo">Manunal do professor</div>
						<div class="escolaridade">6º Ano - Livro 1</div>
						<div class="data">26 de janeiro de 2017</div>
					</div>
				</div>
				<div class="l3">
					<div class="imagem" style="background-image:url(../public/img/arquivo1.jpg)"></div>
					<div class="item">
						<div class="tipo">Manunal do professor</div>
						<div class="escolaridade">6º Ano - Livro 1</div>
						<div class="data">26 de janeiro de 2017</div>
					</div>
				</div>
				<div class="l3">
					<div class="imagem" style="background-image:url(../public/img/arquivo2.jpg)"></div>
					<div class="item">
						<div class="tipo">Manunal do professor</div>
						<div class="escolaridade">6º Ano - Livro 1</div>
						<div class="data">26 de janeiro de 2017</div>
					</div>
				</div>
				<div class="l3">
					<div class="imagem" style="background-image:url(../public/img/arquivo3.jpg)"></div>
					<div class="item">
						<div class="tipo">Manunal do professor</div>
						<div class="escolaridade">6º Ano - Livro 1</div>
						<div class="data">26 de janeiro de 2017</div>
					</div>
				</div>
				<div class="l3">
					<div class="imagem" style="background-image:url(../public/img/arquivo1.jpg)"></div>
					<div class="item">
						<div class="tipo">Manunal do professor</div>
						<div class="escolaridade">6º Ano - Livro 1</div>
						<div class="data">26 de janeiro de 2017</div>
					</div>
				</div>
				<div class="l3">
					<div class="imagem" style="background-image:url(../public/img/arquivo2.jpg)"></div>
					<div class="item">
						<div class="tipo">Manunal do professor</div>
						<div class="escolaridade">6º Ano - Livro 1</div>
						<div class="data">26 de janeiro de 2017</div>
					</div>
				</div>
			</div>
		</div>
</section>

<script>
	$(document).ready(function(){
		$(".arquivos").addClass('active');

	});
	
</script>

<?php 
require("includes/footer.php");

?>