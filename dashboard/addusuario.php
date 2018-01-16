<?php 
require("includes/head.php");

require("includes/menu.php");

?>
<script>
	$(document).ready(function() { $("#e1").select2(); });
</script>
<section class="page-addvideo">
	<div class="title sake">Adicionar Usuário</div>
	<div class="painel-usuario">
		<div class="row-flex">
			<div class="l4">
				<div class="change">
					<div class="imaluno">
						<button class="btn active" id="aluno">
							Professor
						</button>
					</div>
					<div class="improfessor">
						<button class="btn" id="professor">
							Aluno
						</button>
					</div>
				</div>
			</div>
		</div>
		<div class="row-flex align-between formaddusuario">
			<div class="itemi">
				<label for="" class="filterlabel">Nome</label>
				<input type="text" class="input">
			</div>
			<div class="itemi">
				<label for="" class="filterlabel">E-mail</label>
				<input type="text" class="input">
			</div>
			<div class="itemi">
				<input type="text" placeholder="Senha" class="input">
			</div>
			<div class="itemi">
				<input type="text" placeholder="Confirmar Senha" class="input">
			</div>
			<div class="itemi marg-y">

				<select id="e1" class="inputvideo">
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
				<label for="test2">Acesso de degustação</label>
			</div>
			<div class="row-flex align-center">

				<div class="l3 inputed" style="margin:0  20px;">
					<input type="submit" class="input-login bg-gray" value="Voltar">
				</div>
				<div class="l3 inputed" style="margin:0  20px;">
					<input type="submit" class="input-login" value="Salvar">
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
</script>

<?php 
require("includes/footer.php");

?>