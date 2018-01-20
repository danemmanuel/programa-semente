<?php 
require("includes/head.php");

require("includes/menu.php");

?>
<script>
	$(document).ready(function() { $("#e1").select2(); });
</script>
<section class="page-addvideo">
	<div class="title sake">Adicionar Arquivo</div>
	<div class="painel-usuario">

		<div class="row-flex align-between formaddusuario">
			<div class="itemi-nome-full">
				<label for="" class="filterlabel">Nome</label>
				<input type="text" class="input">
			</div>
			<div class="itemi-nome">
				<label for="" class="filterlabel">Tipo</label>
				<select class="inputvideo marg-y">
					<option value="">Global</option>
					<option value="">Escola Específica</option>
				</select>
			</div>
			<div class="itemi-nome">
				<label for="" class="filterlabel">Escola</label>
				<select class="inputvideo marg-y">
					<option value="" disabled selected="">Selecione uma escola</option>
					<option value="">Colégio Fundamentum</option>
					<option value="">Colégio Sete de Setembro</option>
					<option value="">Anglo Taquaral</option>
					<option value="">Anglo São José dos Campos</option>
					<option value="">Colégio Assunção</option>
				</select>
			</div>
			

			<div class="itemi marg-y">
				<input type="checkbox" id="test2" checked="checked" />
				<label for="test2">Material Complementar?</label>
			</div>

			<div class="itemi-nome-full marg-y">
				<input type="file" name="arquivo" id="arquivo" class="arquivo marg-y">
				<input type="text" name="file" id="file" class="file" style="width:80%" placeholder="Escolha um arquivo" readonly="readonly">
				<input type="button" class="btn" value="Escolha uma foto">
			</div>

			

			<div class="row-flex align-center">

				<div class="l3 inputed" style="margin:0  20px;">
					<input type="submit" class="input-login bg-gray" value="Cancelar">
				</div>
				<div class="l3 inputed" style="margin:0  20px;">
					<input type="submit" class="input-login" value="Cadastrar">
				</div>
			</div>
		</div>
		


	</div>

</section>

<script>
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
	$('.btn').on('click', function() {
		$('.arquivo').trigger('click');
	});

	$('.arquivo').on('change', function() {
		var fileName = $(this)[0].files[0].name;
		$('#file').val(fileName);
	});
</script>

<?php 
require("includes/footer.php");

?>