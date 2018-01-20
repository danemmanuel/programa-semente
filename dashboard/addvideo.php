<?php 
require("includes/head.php");

require("includes/menu.php");

?>
<section class="page-addvideo">
	<div class="title sake">Adicionar Vídeo</div>
	<div class="formaddvideo">
		<form action="">
			<div class="row-flex align-center">
				<div class="l5 inputed">
					<label for="nome" class="filterlabel">Nome</label>
					<input type="text" id="nome" class="input">
				</div>
				<div class="l5 inputed">
					<label for="nome" class="filterlabel">URL do video</label>
					<input type="text" id="nome" class="input">
				</div>
				<div class="l5 inputed">
					
					<select name="" id="tipo">
						<option value="" disabled selected="">Tipo do vídeo</option>
						<option value="">Vídeo para alunos</option>
						<option value="">Vídeo para professores</option>
					</select>
				</div>
				<div class="l5 inputed">
				
					<select name="" id="tipo">
						<option value="" disabled selected="">Ano</option>
						<option value="">6º ano</option>
						<option value="">7º ano</option>
						<option value="">8º ano</option>
						<option value="">7º ano</option>
						<option value="">8º ano</option>
						<option value="">9º ano</option>
						<option value="">1º ano</option>
						<option value="">2º ano</option>
						<option value="">3º ano</option>
						<option value="">4º ano</option>
						<option value="">5º ano</option>
						<option value="">Médio 1º ano</option>
						<option value="">Médio 2º ano</option>
						<option value="">Médio 3º ano</option>
					</select>
				</div>
				<div class="l10 inputed">
				
					<select name="" id="tipo">
						<option value="" disabled selected="">Categoria</option>
						<option value="">Categoria 1</option>
						<option value="">Categoria 2</option>
						<option value="">Categoria 3</option>
						<option value="">Categoria 4</option>
						<option value="">Categoria 5</option>
					</select>
				</div>
				<div class="l3 inputed">
					<input type="submit" class="input-login" value="Cadastrar">
				</div>
				<div class="l3 inputed">
					<input type="submit" class="input-login bg-gray" value="Cancelar">
				</div>
			</div>
		</form>
	</div>
</section>

<script>
	$(document).ready(function() {
		$('select').material_select();
	});
</script>
<?php 
require("includes/footer.php");

?>