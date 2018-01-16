<?php 
require("includes/head.php");

require("includes/menu.php");

?>
<section class="page-addvideo">
	<div class="title sake">Adicionar Classe</div>
	<div class="painel-usuario">

		<div class="row-flex align-between formaddusuario">
			<div class="itemi-nome">
				<label for="" class="filterlabel">Nome</label>
				<input type="text" class="input">
			</div>
			<div class="itemi-nome">
				<label for="" class="filterlabel">Número de estudantes</label>
				<input type="number" class="input">
			</div>

			<div class="itemi-nome">
				<label for="" class="filterlabel">Escola</label>
				<select name="" id="tipo" class="inputvideo marg-y">
					<option value="">Colégio Fundamentum</option>
					<option value="">Colégio Sete de Setembro</option>
					<option value="">Anglo Taquaral</option>
					<option value="">Anglo São José dos Campos</option>
				</select>
			</div>

			<div class="itemi-nome">
				<label for="" class="filterlabel">Ano</label>
				<select name="" id="tipo" class="inputvideo marg-y">
					<option value="">6º ano</option>
					<option value="">7º ano</option>
					<option value="">8º ano</option>
					<option value="">9º ano</option>
					<option value="">Médio 1º ano</option>
					<option value="">Médio 2º ano</option>
					<option value="">Médio 3º ano</option>
				</select>
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