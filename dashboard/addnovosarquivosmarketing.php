<?php 
require("includes/head.php");

require("includes/menu.php");

?>
<section class="page-addvideo">
	<div class="title sake">Novos Arquivos</div>
	<div class="formaddvideo">
		<div class="painel-usuario">
			<div class="title-voltaasaulas">Novos Arquivos</div>
		<form action="">
			<div class="row-flex align-center" id="inputss">
				<div class="l5 inputed">
					<label for="nome" class="filterlabel">Título do arquivo</label>
					<input type="text" id="nome" class="input">
				</div>
				<div class="l5 inputed" style="position:relative">
					<label for="" class="filterlabel">Subir arquivo te até 20MB</label>
					<input type="file" name="arquivo" id="arquivo" class="arquivo marg-y" style="margin-top:10px;display: none;">

					<input type="button" class="btn" value="Clique para selecionar" style="background-color:#fff;border:2px solid #7aad37; color:#7aad37;position:absolute;left:0;top:30px;width:100%;">
				</div>

				
			</div>
			<div class="add_field_button">Adicionar outro arquivo</div>
			<div class="row-flex align-center">

				
				<div class="l3 inputed">
					<input type="submit" class="input-login" value="Cadastrar">
				</div>
				<div class="l3 inputed">
					<input type="submit" class="input-login bg-gray" value="Cancelar">
				</div>
			</div>
		</form>
		</div>
	</div>
</section>

<script>
	$(document).ready(function() {
		var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $("#inputss"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID

      var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
    	e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="l5 inputed"><label for="nome" class="filterlabel">Título do arquivo</label><input type="text" id="nome" class="input"></div><div class="l5 inputed" style="position:relative"><label for="" class="filterlabel">Subir arquivo te até 20MB</label><input type="file" name="arquivo" id="arquivo" class="arquivo marg-y" style="margin-top:10px;display: none;"><input type="button" class="btn" value="Clique para selecionar" style="background-color:#fff;border:2px solid #7aad37; color:#7aad37;position:absolute;left:0;top:30px;width:100%;"></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
    	e.preventDefault(); $(this).parent('div').remove(); x--;
    })


    $('select').material_select();
    $('.btn').on('click', function() {
    	$('.arquivo').trigger('click');
    });

    $('.arquivo').on('change', function() {
    	var fileName = $(this)[0].files[0].name;
    	$('#file').val(fileName);
    });
});

</script>
<?php 
require("includes/footer.php");

?>