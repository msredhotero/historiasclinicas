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
		<div class="h_title">Formulario generación de RIPS</div>
		<form action="" method="post">
            <div class="element">
				<label for="name">Entidad <span class="red">(Obligatorio)</span></label>
                <select id="entidad">
                <?php
                while($filas = mysql_fetch_array($result))
                {
                    echo "<option value='".$filas["codigo"]."'>".$filas["nombre"]."</option>";
                }
                
                ?>
				</select>
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
				<button type="submit" class="add" onclick="generarRIPS();return false;">Generar</button>
			</div>
		</form>
	</div>
</div>