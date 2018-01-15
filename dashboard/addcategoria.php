<?php
require "includes/head.php";

require "includes/menu.php";

?>
<section class="page-arquivos">
	<div class="title sake">Nova Categoria</div>
	<div class="painel">
		<div class="row-flex">
			<div class="l5">
				<label for="ate" class="filterlabel">Nome da categoria</label>
				<input type="text" class="input">
			</div>	
		</div>
		<div class="painelgray">
			<div class="row-flex">
				<div class="l5">
					<label for="ate" class="filterlabel">Material 1</label>
					<input type="text" class="input" placeholder="Nome do Material">
				</div>	
			</div>
			<div class="row-flex align-between">
				<div class="l6">
					<input type="text" class="input" placeholder="Título do Arquivo">
				</div>
				<div class="l5">
					<input type="text" class="input" placeholder="Subir arquivo de ate 20mb">
				</div>	
			</div>
		</div>
	</div>
	</section>

	<script>
		$(document).ready(function(){
			$(".marketing").addClass('active');
			$("#mkt").click(function(event) {
				$(this).toggleClass('active');
			});
		});
	</script>

	<?php
	require "includes/footer.php";

	?>