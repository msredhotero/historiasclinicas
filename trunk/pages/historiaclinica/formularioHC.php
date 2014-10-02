<?php
$bd=BD::getInstance();
?>
<script>
$(function() {
$( "#fechaI" ).datepicker({dateFormat: 'yy-mm-dd'});
$( "#fechaF" ).datepicker({dateFormat: 'yy-mm-dd'});
});
</script>
<div id="main">
	<div class="full_w">
		<div class="h_title">Formulario Busqueda de Historia Clínica</div>
		<form action="" method="post">
            <div class="element">
				<label for="name">Usuario <span class="red">(Obligatorio)</span></label>
				<input id="usuario" name="usuario" class="text err" />
			</div>
            <div class="element">
				<label for="name">Fecha Inicial <span class="red">(Obligatorio)</span></label>
				<input id="fechaI" name="fechaI" class="text err" />
			</div>
            <div class="element">
				<label for="name">Fecha Final<span class="red">(Obligatorio)</span></label>
				<input id="fechaF" name="fechaF" class="text err" />
			</div>
			<div class="entry">
				<button type="submit" class="add" onclick="ingresarGenHC();return false;">Ingresar</button>
			</div>
		</form>
	</div>
</div>