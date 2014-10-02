<?php
$bd=BD::getInstance();
?>
<div id="main">
	<div class="full_w">
		<div class="h_title">Eps - Nueva Eps</div>
		<form action="" method="post">
            <input id="idEps" name="idEps" class="text err" type="hidden"/>
            <div class="element">
				<label for="name">Código <span class="red">(Obligatorio)</span></label>
				<input id="codigo" name="codigo" class="text err" />
			</div>
            <div class="element">
				<label for="name">Nombre <span class="red">(Obligatorio)</span></label>
				<input id="nombre" name="nombre" class="text err" />
			</div>
			<div class="entry">
				<button type="submit" class="add" onclick="ingresarNuevoeps();return false;">Ingresar</button>
			</div>
		</form>
	</div>
</div>