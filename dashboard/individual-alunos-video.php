<?php
require "includes/head.php";

require "includes/menu.php";

?>
<section class="page-usuarios">
	<div class="title sake">Aline Furlan Carvalho</div>
	<div class="row-flex" style="margin-top:30px;">
		<div class="l6">
			<div class="change">
				<div class="imaluno">
					<button class="btn active" id="todos">
						Todos
					</button>
				</div>
				<div class="improfessor">
					<button class="btn" id="assistiu">
						Assistiu
					</button>
				</div>
				<div class="improfessor">
					<button class="btn" id="nao-assistiu">
						Não assistiu
					</button>
				</div>
			</div>

		</div>
	</div>
</div>

<div class="filtros">

	<div class="row-flex" style="align-items:flex-end;">
		<div class="l3">
			<div class="textvideo">
				<input type="text" class="inputvideo" placeholder="Buscar Aluno">
			</div>
		</div>
		<div class="l2 marg">
			<label for="tipo" class="filterlabel">Filtros</label>
			<select name="" id="tipo" class="inputvideo">
				<option value="" disabled selected="">Ano</option>
				<option value="">2015</option>
				<option value="">2016</option>
				<option value="">2017</option>
				<option value="">2018</option>
			</select>
		</div>
		<div class="l2 marg">
			<label for="ate" class="filterlabel">Períodos</label>
			<input type="text" id="ate" class="input" autocomplete="off" placeholder="00/00/0000" style="margin:0 !important">
		</div>
		<div class="l1">
			<div class="ate">
				Até
			</div>
		</div>
		<div class="l2 marg">

			<input type="text" id="ate" class="input" autocomplete="off" placeholder="00/00/0000" style="margin:0 !important">
		</div>

	</div>
</div>


<div class="painel-usuarios painel-videos align-between" id="painel-assistiu">
	

	<div class="video">
		<div class="vd" style="background-image:url(../public/img/itemmarketing6.jpg)">
			<div class="overlay">
				<div class="icon-false">
					<img src="../public/img/true.png" alt="">
				</div>
				<div class="status">Assistiu</div>
			</div>
		</div>
		
		<div class="escolaridade">Aluno 6º Ano C</div>
		<div class="data">Unidade 1 - Aula 01</div>
	</div>
<div class="video">
		<div class="vd" style="background-image:url(../public/img/itemmarketing6.jpg)">
			<div class="overlay">
				<div class="icon-false">
					<img src="../public/img/true.png" alt="">
				</div>
				<div class="status">Assistiu</div>
			</div>
		</div>
		
		<div class="escolaridade">Aluno 6º Ano C</div>
		<div class="data">Unidade 1 - Aula 01</div>
	</div>
	<div class="video">
		<div class="vd" style="background-image:url(../public/img/itemmarketing6.jpg)">
			<div class="overlay">
				<div class="icon-false">
					<img src="../public/img/true.png" alt="">
				</div>
				<div class="status">Assistiu</div>
			</div>
		</div>
		
		<div class="escolaridade">Aluno 6º Ano C</div>
		<div class="data">Unidade 1 - Aula 01</div>
	</div>

	<div class="video">
		<div class="vd" style="background-image:url(../public/img/itemmarketing6.jpg)">
			<div class="overlay">
				<div class="icon-false">
					<img src="../public/img/true.png" alt="">
				</div>
				<div class="status">Assistiu</div>
			</div>
		</div>
		
		<div class="escolaridade">Aluno 6º Ano C</div>
		<div class="data">Unidade 1 - Aula 01</div>
	</div>
</div>

<div class="painel-videos align-between" id="painel-nao-assistiu">
	<div class="video">
		<div class="vd" style="background-image:url(../public/img/itemmarketing6.jpg)">
			<div class="overlay">
				<div class="icon-false">
					<img src="../public/img/false.png" alt="">
				</div>
				<div class="status">Não assistiu</div>
				<div class="bar">
					<div class="stat" style="width:80%"></div>
				</div>
				
				<div class="number">80%</div>
			</div>
		</div>
		
		<div class="escolaridade">Aluno 6º Ano C</div>
		<div class="data">Unidade 1 - Aula 01</div>
	</div>

	

	<div class="video">
		<div class="vd" style="background-image:url(../public/img/itemmarketing6.jpg)">
			<div class="overlay">
				<div class="icon-false">
					<img src="../public/img/false.png" alt="">
				</div>
				<div class="status">Não assistiu</div>
				<div class="bar">
					<div class="stat" style="width:30%"></div>
				</div>
				
				<div class="number">30%</div>
			</div>
		</div>
		
		<div class="escolaridade">Aluno 6º Ano C</div>
		<div class="data">Unidade 1 - Aula 01</div>
	</div>

	<div class="video">
		<div class="vd" style="background-image:url(../public/img/itemmarketing6.jpg)">
			<div class="overlay">
				<div class="icon-false">
					<img src="../public/img/false.png" alt="">
				</div>
				<div class="status">Não assistiu</div>
				<div class="bar">
					<div class="stat" style="width:80%"></div>
				</div>
				
				<div class="number">80%</div>
			</div>
		</div>
		
		<div class="escolaridade">Aluno 6º Ano C</div>
		<div class="data">Unidade 1 - Aula 01</div>
	</div>
	<div class="video">
		<div class="vd" style="background-image:url(../public/img/itemmarketing6.jpg)">
			<div class="overlay">
				<div class="icon-false">
					<img src="../public/img/false.png" alt="">
				</div>
				<div class="status">Não assistiu</div>
				<div class="bar">
					<div class="stat" style="width:80%"></div>
				</div>
				
				<div class="number">80%</div>
			</div>
		</div>
		
		<div class="escolaridade">Aluno 6º Ano C</div>
		<div class="data">Unidade 1 - Aula 01</div>
	</div>


	
</div>

</section>

<script>
	$(document).ready(function(){
		$("#todos").addClass('active');
		$("#painel-assistiu").delay("400").fadeIn();
		$("#painel-nao-assistiu").delay("400").fadeIn();

		$("#todos").click(function() {
			$("#painel-assistiu").fadeIn();
			$("#painel-nao-assistiu").fadeIn();
			$(this).addClass('active');
			$("#nao-assistiu").removeClass('active');
			$("#assistiu").removeClass('active');
		});
		$("#assistiu").click(function() {
			$(this).addClass('active');
			$("#todos").removeClass('active');
			$("#nao-assistiu").removeClass('active');
			$("#painel-assistiu").delay("400").fadeIn();
			$("#painel-nao-assistiu").fadeOut();
		});

		$("#nao-assistiu").click(function() {
			$(this).addClass('active');
			$("#todos").removeClass('active');
			$("#assistiu").removeClass('active');
			$("#painel-nao-assistiu").delay("400").fadeIn();
			$("#painel-assistiu").fadeOut();
		});

	});
</script>

<?php
require "includes/footer.php";

?>