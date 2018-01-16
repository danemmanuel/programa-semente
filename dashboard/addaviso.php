<?php 
require("includes/head.php");

require("includes/menu.php");

?>
<section class="page-addvideo">
	<div class="title sake">Adicionar Aviso</div>
	<div class="painel-usuario">

		<div class="row-flex align-between formaddusuario">
			<div class="itemi-nome-full">
				<label for="" class="filterlabel">Título</label>
				<input type="text" class="input">
			</div>
			<div class="itemi-nome-full">
				<label for="" class="filterlabel">Subtítulo</label>
				<input type="text" class="input">
			</div>
			<div class="itemi-nome-full">
				<label for="" class="filterlabel">Aviso</label>
				<textarea name="" id="" cols="30" rows="10"></textarea>
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