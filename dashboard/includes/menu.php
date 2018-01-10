<div class="menu">
	<div class="iconmenu">
		<div id="nav-icon3">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<div class="logo">
		<img src="../public/img/logo.svg" alt="">
	</div>

	<div class="menuitens">
		<a href="./index.php">
			<div class="item home ">
				Home
			</div>
		</a>
		<a href="./arquivos.php">
			<div class="item arquivos ">
				Arquivos
			</div>
		</a>
		<a href="./marketing.php">
			<div class="item marketing ">
				Marketing
			</div>
		</a>
		<a href="./usuarios.php">
			<div class="item usuarios ">
				Usuários
			</div>
		</a>
		<a href="">
			<div class="item relatorios">
				Relatórios
				<div class="subitens">
					<a href="./relatorios.php"><div class="item">Alunos</div></a>
					<div class="item">Acesso</div>
					<div class="item">Vídeos</div>
				</div>
			</div>
		</a>
		<a href="">
			<div class="item materiais">
				Pedidos de materiais
			</div>
		</a>
	</div>
</div>
<div class="navheader">
	<div class="search">
		<form class="searchform">
			<input type="text" placeholder="Pesquisar...">
		</form>
	</div>
	<div class="user">
		<div class="avatar">
		<img src="../public/img/profile.jpg" alt="">
		</div>
		<div class="name">Olá, Aline!</div>
	</div>
</div>

<script>
	$('#nav-icon3').click(function(){
		$(this).toggleClass('open');
	});

</script>