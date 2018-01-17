<?php 
require("includes/head.php");

require("includes/menu.php");

?>
<section class="page-arquivos">
	<div class="title sake">Aluno 6º ano | Unidade 1 - Aulo 01</div>


	<div class="itensvideo">
		<div class="row-flex">

			<iframe src="https://player.vimeo.com/video/242621505" width="100%" height="600" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
		</div>
		<div class="row-flex">
			<textarea name="" id="" cols="30" rows="10" placeholder="Deixe um comentário para nós"></textarea>
		</div>
		<div class="row-flex align-end">
			<div class="l2">
				<input type="submit" class="input-login" value="Enviar">
			</div>
		</div>
	</div>
	<div class="videos">
		<div class="title sake">Vídeos</div>
		<div class="filtros">
			
			<div class="row-flex align-between">
				<div class="l5">
					<div class="textvideo">
						<input type="text" class="inputvideo" placeholder="Buscar um vídeo">
					</div>
				</div>
				<div class="l2">
					<label for="tipo" class="filterlabel">Filtros</label>
					<select name="" id="tipo" class="inputvideo">
						<option value="" disabled selected="">Tipo de Vídeo</option>
						<option value="">Educacional</option>
						<option value="">Recreativo</option>
						<option value="">Reflexivo</option>
					</select>
				</div>
				<div class="l2">
					<select name="" id="" class="inputvideo">
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

		<div class="segmentos">
			<div class="item active">Autoconhecimento</div>
			<div class="item">Autocontrole</div>
			<div class="item">Empatia</div>
			<div class="item">Decisões Responsáveis</div>
			<div class="item">Habilidades Sociais</div>
		</div>

		<div class="itensvideo">
			<div class="row-flex">
				<div class="l4">
					<div class="video">
						<iframe src="https://player.vimeo.com/video/242621505" width="100%" height="178" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

					</div>
					<div class="item">
						
						<div class="tipo">Aluno</div>
						<div class="escolaridade">6º Ano - Unidade 1 - Aula 01</div>
						<div class="data">26 de janeiro de 2017</div>
					</div>
				</div>
				<div class="l4">
					<div class="video">
						<iframe src="https://player.vimeo.com/video/242621505" width="100%" height="178" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

					</div>
					<div class="item">

						<div class="tipo">Aluno</div>
						<div class="escolaridade">6º Ano - Unidade 1 - Aula 01</div>
						<div class="data">26 de janeiro de 2017</div>
					</div>
				</div>
				<div class="l4">
					<div class="video">
						<iframe src="https://player.vimeo.com/video/242621505" width="100%" height="178" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

					</div>
					<div class="item">
						
						<div class="tipo">Aluno</div>
						<div class="escolaridade">6º Ano - Unidade 1 - Aula 01</div>
						<div class="data">26 de janeiro de 2017</div>
					</div>
				</div>
				<div class="l4">
					<div class="video">
						<iframe src="https://player.vimeo.com/video/242621505" width="100%" height="178" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

					</div>
					<div class="item">

						<div class="tipo">Aluno</div>
						<div class="escolaridade">6º Ano - Unidade 1 - Aula 01</div>
						<div class="data">26 de janeiro de 2017</div>
					</div>
				</div>
				<div class="l4">
					<div class="video">
						<iframe src="https://player.vimeo.com/video/242621505" width="100%" height="178" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

					</div>
					<div class="item">
						
						<div class="tipo">Aluno</div>
						<div class="escolaridade">6º Ano - Unidade 1 - Aula 01</div>
						<div class="data">26 de janeiro de 2017</div>
					</div>
				</div>
				<div class="l4">
					<div class="video">
						<iframe src="https://player.vimeo.com/video/242621505" width="100%" height="178" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

					</div>
					<div class="item">
						
						<div class="tipo">Aluno</div>
						<div class="escolaridade">6º Ano - Unidade 1 - Aula 01</div>
						<div class="data">26 de janeiro de 2017</div>
					</div>
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