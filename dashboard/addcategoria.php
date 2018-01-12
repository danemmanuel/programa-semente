<?php
require "includes/head.php";

require "includes/menu.php";

?>
<section class="page-arquivos">
	<div class="title sake">Marketing</div>

	<div class="painel">
		<div class="content">
			Seja bem-vindo a <span class="bold">Área de Marketing</span> do Programa Semente onde você terá acesso ao material de comunicação necessário para suas campanhas.
		</div>
	</div>

	<div class="second">
		<div class="row-flex align-between">
			<div class="l3">
				<div class="novacategoria">Nova Categoria</div>
			</div>
			<div class="l8">
				<div class="textvideo">
					<input type="text" class="inputvideo" placeholder="O que voce está procurando?">
				</div>
			</div>
		</div>

		<div class="row-flex align-between">
			<div class="l3">
				<div class="subpainel">
					<div class="title">Categorias</div>
					<div class="item" id="mkt">
						Ações de Marketing
						<div class="subitem">
							Editar Categoria
						</div>
					</div>
					<div class="item">
						Camp. de Matrículas
					</div>
					<div class="item">
						Eventos na Escola
					</div>
				</div>
			</div>
			<div class="l8">
				<div class="itemsmarketing">
					<div class="row-flex">
						<div class="l4">
							<div class="item" >
								<div class="img" style="background-image:url(../public/img/itemmarketing.jpg)">

								</div>
								<div class="title">
									Dia dos professores
								</div>
							</div>
						</div>
						<div class="l4">
							<div class="item" >
								<div class="img" style="background-image:url(../public/img/itemmarketing2.jpg)">

								</div>
								<div class="title">
									Volta às aulas
								</div>
							</div>
						</div>
						<div class="l4">
							<div class="item" >
								<div class="img" style="background-image:url(../public/img/itemmarketing3.jpg)">

								</div>
								<div class="title">
									Dia das mulheres
								</div>
							</div>
						</div>
						<div class="l4">
							<div class="item" >
								<div class="img" style="background-image:url(../public/img/itemmarketing4.jpg)">

								</div>
								<div class="title">
									Dia dos pais
								</div>
							</div>
						</div>
						<div class="l4">
							<div class="item" >
								<div class="img" style="background-image:url(../public/img/itemmarketing5.jpg)">

								</div>
								<div class="title">
									Dia do meio ambiente
								</div>
							</div>
						</div>
						<div class="l4">
							<div class="item" >
								<div class="img" style="background-image:url(../public/img/itemmarketing6.jpg)">

								</div>
								<div class="title">
									Festa Junina
								</div>
							</div>
						</div>
						<div class="l4">
							<div class="item" >
								<div class="img" style="background-image:url(../public/img/itemmarketing.jpg)">

								</div>
								<div class="title">
									Dia dos professores
								</div>
							</div>
						</div>
						<div class="l4">
							<div class="item" >
								<div class="img" style="background-image:url(../public/img/itemmarketing2.jpg)">

								</div>
								<div class="title">
									Volta às aulas
								</div>
							</div>
						</div>
						<div class="l4">
							<div class="item" >
								<div class="img" style="background-image:url(../public/img/itemmarketing3.jpg)">

								</div>
								<div class="title">
									Dia das mulheres
								</div>
							</div>
						</div>
						<div class="l4">
							<div class="item" >
								<div class="img" style="background-image:url(../public/img/itemmarketing4.jpg)">

								</div>
								<div class="title">
									Dia dos pais
								</div>
							</div>
						</div>
						<div class="l4">
							<div class="item" >
								<div class="img" style="background-image:url(../public/img/itemmarketing5.jpg)">

								</div>
								<div class="title">
									Dia do meio ambiente
								</div>
							</div>
						</div>
						<div class="l4">
							<div class="item" >
								<div class="img" style="background-image:url(../public/img/itemmarketing6.jpg)">

								</div>
								<div class="title">
									Festa Junina
								</div>
							</div>
						</div>
					</div>
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