<?php 
require("includes/head.php");

require("includes/menu.php");

?>
<script>
	$(document).ready(function() { $("#e1").select2(); });
	$(".js-example-basic-multiple-limit").select2({
		maximumSelectionLength: 2
	});
</script>
<section class="page-addvideo">
	<div class="title sake">Adicionar Usuário</div>
	<div class="painel-usuario">
		<div class="row-flex">
			<div class="l12">
				<div class="change">
					<div class="imaluno">
						<button class="btn active" id="professor">
							Professor
						</button>
					</div>
					<div class="improfessor">
						<button class="btn" id="aluno">
							Aluno
						</button>
					</div>
					<div class="improfessor">
						<button class="btn" id="gestor">
							Gestor
						</button>
					</div>
					<div class="improfessor">
						<button class="btn" id="diretor">
							Diretor
						</button>
					</div>
					<div class="improfessor">
						<button class="btn" id="adm">
							Administrador
						</button>
					</div>
				</div>
			</div>
		</div>
		<div class="row-flex align-between formaddusuario" id="formprofessor">
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


		<div class="row-flex align-between formaddusuario" id="formgestor">
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


		<div class="row-flex align-between formaddusuario" id="formdiretor">
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

				<select id="js-example-basic-multiple-limit" class="inputvideo">
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


		<div class="row-flex align-between formaddusuario" id="formadm">
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
			
			<div class="row-flex align-center">

				<div class="l3 inputed" style="margin:0  20px;">
					<input type="submit" class="input-login bg-gray" value="Voltar">
				</div>
				<div class="l3 inputed" style="margin:0  20px;">
					<input type="submit" class="input-login" value="Salvar">
				</div>
			</div>
		</div>


		<div class="row-flex align-between formaddusuario" id="formaluno">
			<div class="itemi">
				<label for="" class="filterlabel">Nome</label>
				<input type="text" class="input">
			</div>
			<div class="itemi">
				<label for="" class="filterlabel">Nome do responsável</label>
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
			<div class="itemi">
				<label for="" class="filterlabel">Ano</label>
				<input type="text" class="input">
			</div>
			<div class="itemi">
				<label for="" class="filterlabel">Classe</label>
				<input type="text" class="input">
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

	$("#formprofessor").addClass('view');
	$("#aluno").click(function() {
		$(this).addClass('active');
		$("#professor").removeClass('active');
		$("#gestor").removeClass('active');
		$("#diretor").removeClass('active');
		$("#adm").removeClass('active');


		$("#formaluno").addClass('view');
		$("#formprofessor").removeClass('view');
		$("#formgestor").removeClass('view');
		$("#formdiretor").removeClass('view');
		$("#formadm").removeClass('view');
	});
	$("#gestor").click(function() {
		$(this).addClass('active');
		$("#professor").removeClass('active');
		$("#aluno").removeClass('active');
		$("#diretor").removeClass('active');
		$("#adm").removeClass('active');


		$("#formgestor").addClass('view');
		$("#formprofessor").removeClass('view');
		$("#formaluno").removeClass('view');
		$("#formdiretor").removeClass('view');
		$("#formadm").removeClass('view');
	});
	$("#professor").click(function() {
		$(this).addClass('active');
		$("#aluno").removeClass('active');
		$("#gestor").removeClass('active');
		$("#diretor").removeClass('active');
		$("#adm").removeClass('active');

		$("#formprofessor").addClass('view');
		$("#formaluno").removeClass('view');
		$("#formgestor").removeClass('view');
		$("#formadm").removeClass('view');
		$("#formdiretor").removeClass('view');
	});
	$("#diretor").click(function() {
		$(this).addClass('active');
		$("#professor").removeClass('active');
		$("#gestor").removeClass('active');
		$("#aluno").removeClass('active');
		$("#adm").removeClass('active');

		$("#formprofessor").removeClass('view');
		$("#formaluno").removeClass('view');
		$("#formgestor").removeClass('view');
		$("#formadm").removeClass('view');
		$("#formdiretor").addClass('view');
	});
	$("#adm").click(function() {
		$(this).addClass('active');
		$("#professor").removeClass('active');
		$("#gestor").removeClass('active');
		$("#diretor").removeClass('active');
		$("#aluno").removeClass('active');


		$("#formprofessor").removeClass('view');
		$("#formaluno").removeClass('view');
		$("#formgestor").removeClass('view');
		$("#formdiretor").removeClass('view');
		$("#formadm").addClass('view');
	});
</script>

<?php 
require("includes/footer.php");

?>