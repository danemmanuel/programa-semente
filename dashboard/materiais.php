<?php
require "includes/head.php";

require "includes/menu.php";

?>
<section class="page-usuarios">
	<div class="title sake">Pedido de Materiais</div>
	<div class="painel-materiais">
		<div class="status">
			<div class="row-flex">
				<div class="l4">
					<div class="item active">
						<div class="icon">
							1
						</div>
						<div class="text">Número de Alunos</div>
					</div>
				</div>
				<div class="l4">
					<div class="item">
						<div class="icon">
							2
						</div>
						<div class="text">Pedido e Retirada de Materiais</div>
					</div>
				</div>
				<div class="l4">
					<div class="item">
						<div class="icon">
							3
						</div>
						<div class="text">Preço e pagamento</div>
					</div>
				</div>
			</div>
		</div>

		<div class="preencha">
			Preencha o <span class="bold">número de alunos</span> nos campos abaixo:
		</div>

		<div class="form1">
			<div class="tit">
				Ensino Fundamental I
			</div>
			<div class="row-flex" style="margin-top:40px">
				<div class="l2 minmarg">
					<label for="ate" class="filterlabel">1º Ano</label>
					<input type="number" class="input" autocomplete="off" placeholder="Número" style="margin:0 !important">
				</div>
				<div class="l2 minmarg">
					<label for="ate" class="filterlabel">2º Ano</label>
					<input type="number" class="input" autocomplete="off" placeholder="Número" style="margin:0 !important">
				</div>
				<div class="l2 minmarg">
					<label for="ate" class="filterlabel">3º Ano</label>
					<input type="number" class="input" autocomplete="off" placeholder="Número" style="margin:0 !important">
				</div>
				<div class="l2 minmarg">
					<label for="ate" class="filterlabel">4º Ano</label>
					<input type="number" class="input" autocomplete="off" placeholder="Número" style="margin:0 !important">
				</div>
				<div class="l2 minmarg">
					<label for="ate" class="filterlabel">5º Ano</label>
					<input type="number" class="input" autocomplete="off" placeholder="Número" style="margin:0 !important">
				</div>
			</div>
		</div>


		<div class="form1" style="margin-top:30px;">
			<div class="tit">
				Ensino Fundamental II
			</div>
			<div class="row-flex" style="margin-top:40px">
				<div class="l2 minmarg">
					<label for="ate" class="filterlabel">6º Ano</label>
					<input type="number" class="input" autocomplete="off" placeholder="Número" style="margin:0 !important">
				</div>
				<div class="l2 minmarg">
					<label for="ate" class="filterlabel">7º Ano</label>
					<input type="number" class="input" autocomplete="off" placeholder="Número" style="margin:0 !important">
				</div>
				<div class="l2 minmarg">
					<label for="ate" class="filterlabel">8º Ano</label>
					<input type="number" class="input" autocomplete="off" placeholder="Número" style="margin:0 !important">
				</div>
				<div class="l2 minmarg">
					<label for="ate" class="filterlabel">9º Ano</label>
					<input type="number" class="input" autocomplete="off" placeholder="Número" style="margin:0 !important">
				</div>
				
			</div>
		</div>

		<div class="form1" style="margin-top:30px;">
			<div class="tit">
				Ensino Médio
			</div>
			<div class="row-flex" style="margin-top:40px">
				<div class="l2 minmarg">
					<label for="ate" class="filterlabel">1º Ano</label>
					<input type="number" class="input" autocomplete="off" placeholder="Número" style="margin:0 !important">
				</div>
				<div class="l2 minmarg">
					<label for="ate" class="filterlabel">2º Ano</label>
					<input type="number" class="input" autocomplete="off" placeholder="Número" style="margin:0 !important">
				</div>
				<div class="l2 minmarg">
					<label for="ate" class="filterlabel">3º Ano</label>
					<input type="number" class="input" autocomplete="off" placeholder="Número" style="margin:0 !important">
				</div>
				
				<div class="vejamais">
				<div class="bt">
					Avançar
				</div>
			</div>
			</div>
		</div>
	</div>
</section>

<script>
	$(document).ready(function(){
		$(".materiais").addClass('active');

	});
</script>

<?php
require "includes/footer.php";

?>