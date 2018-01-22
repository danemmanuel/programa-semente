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
				<i class="mdi mdi-view-dashboard"></i> Home
			</div>
		</a>
		<a href="#">
			<div class="item escolas">
				<i class="mdi mdi-home"></i> Escolas
			</div>
		</a>
		<a href="#">
			<div class="item anos">
				<i class="mdi mdi-timetable"></i> Anos
			</div>
		</a>
		<a href="#">
			<div class="item classes">
				<i class="mdi mdi-account-multiple"></i> Classes
			</div>
		</a>
		<a href="#">
			<div class="item videos">
				<i class="mdi mdi-youtube-play"></i> Vídeos
			</div>
		</a>
		<a href="./arquivos.php">
			<div class="item arquivos ">
				<i class="mdi mdi-file-document"></i> Arquivos
			</div>
		</a>
		<a href="#">
			<div class="item avisos">
				<i class="mdi mdi-bell"></i> Avisos
			</div>
		</a>
		<a href="./marketing.php">
			<div class="item marketing ">
				<i class="mdi mdi-lead-pencil"></i> Marketing
			</div>
		</a>
		<a href="./usuarios.php">
			<div class="item usuarios ">
				<i class="mdi mdi-account"></i> Usuários
			</div>
		</a>
		<a href="">
			<div class="item relatorios">
				<i class="mdi mdi-chart-pie"></i> Relatórios
				<div class="subitens">
					<a href="./relatorios.php"><div class="item sub-item">Alunos</div></a>
					<a href="./relatorios.php"><div class="item sub-item">Professores</div></a>
				</div>
			</div>
		</a>
		<a href="./materiais.php">
			<div class="item materiais">
				<i class="mdi mdi-archive"></i> Pedidos de materiais
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
		<a class='dropdown-button' href='#' data-activates='dropdown1'>
			<div class="avatar">
				<img src="../public/img/profile.jpg" alt="">
			</div>
			<div class="name">Olá, Aline!</div>
		</a>
		<ul id='dropdown1' class='dropdown-content'>
			<li><a href="#!"><i class="mdi mdi-account"></i> Editar Perfil</a></li>
			<li><a href="#!"><i class="mdi mdi-logout"></i> Sair</a></li>
		</ul>
	</div>
</div>

<script>
	
	
	$('.dropdown-button').dropdown({
		inDuration: 300,
		outDuration: 225,
      constrainWidth: false, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: false, // Displays dropdown below the button
      alignment: 'left', // Displays dropdown with edge aligned to the left of button
      stopPropagation: false // Stops event propagation
  }
  );


</script>