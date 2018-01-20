<?php 
require("includes/head.php");

require("includes/menu.php");

?>
<section class="page-addvideo">
	<div class="title sake">Arquivo</div>
	<div class="row-flex">
		<div class="l12 iframe">
			<iframe src="http://plataforma.programasemente.com.br/download/arquive/22" width="100%" height="767" frameborder="0"></iframe>
		</div>
	</div>
</section>

<script>
	$(document).ready(function() {
		$('select').material_select();
	});
</script>
<?php 
require("includes/footer.php");

?>