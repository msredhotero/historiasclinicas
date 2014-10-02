<?php
$bd=BD::getInstance();
$result=$bd->extraerDatos("SELECT * FROM eps WHERE idEps=".$id);
$filas = mysql_fetch_array($result);
?>
<div id="main">
	<div class="full_w">
		<div class="h_title">Eps - Modificar Eps</div>
		<form action="" method="post">
            <input id="idEps" name="idEps" class="text err" type="hidden" value="<?php echo $filas["idEps"];?>"/>
            <div class="element">
				<label for="name">Código <span class="red">(Obligatorio)</span></label>
				<input id="codigo" name="codigo" class="text err" value="<?php echo $filas["codigo"];?>"/>
			</div>
            <div class="element">
				<label for="name">Nombre <span class="red">(Obligatorio)</span></label>
				<input id="nombre" name="nombre" class="text err" value="<?php echo $filas["nombre"];?>"/>
			</div>
			<div class="entry">
				<button type="submit" class="add" onclick="modificareps();return false;">Modificar</button>
			</div>
		</form>
	</div>
</div>