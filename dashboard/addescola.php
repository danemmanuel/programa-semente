<?php 
require("includes/head.php");

require("includes/menu.php");

?>
<section class="page-addvideo">
	<div class="title sake">Adicionar Escola</div>
	<div class="painel-usuario">

		<div class="row-flex align-between formaddusuario">
			<div class="itemi-nome">
				<label for="" class="filterlabel">Nome</label>
				<input type="text" class="input">
			</div>
			<div class="itemi-estado">
				<label for="" class="filterlabel">Estado</label>
				<select name="" id="tipo" class="inputvideo marg-y">
					<option value="">Acre</option>
					<option value="">Alagoas</option>
					<option value="">Amazonas</option>
					<option value="">Amapé</option>
					<option value="">Bahia</option>
				</select>
			</div>
			<div class="itemi-cidade">
				<label for="" class="filterlabel">Cidade</label>
				<input type="text" class="input">
			</div>

			<div class="itemi-nome">
				<label for="" class="filterlabel">Endereço</label>
				<input type="text" class="input">
			</div>
			<div class="itemi-nome">
				<label for="" class="filterlabel">Email</label>
				<input type="email" class="input">
			</div>

			<div class="itemi-telefone">
				<label for="" class="filterlabel">Telefone</label>
				<input type="text" class="input">
			</div>

			<div class="itemi-telefone">
				<label for="" class="filterlabel">Data de vigência</label>
				<input type="text" class="input">
			</div>

			<div class="itemi-nome">
				<label for="" class="filterlabel">Contato responsável na escola</label>
				<input type="text" class="input">
			</div>

			<div class="itemi-nome">
				<label for="" class="filterlabel">Logo da escola (opcional)</label>
				<input type="file" name="arquivo" id="arquivo" class="arquivo marg-y">
				<input type="text" name="file" id="file" class="file" placeholder="Nenhum arquivo selecionado" readonly="readonly">
				<input type="button" class="btn" value="Escolha uma foto">
			</div>

			<div class="itemi-codigo">
				<label for="" class="filterlabel">Código para Alunos</label>
				<input type="text" class="input">
			</div>

			<div class="itemi-codigo">
				<label for="" class="filterlabel">Código para Professores</label>
				<input type="text" class="input">
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