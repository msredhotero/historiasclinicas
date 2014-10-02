<?php
$bd=BD::getInstance();
?>
<div id="main">
	<div class="full_w">
		<div class="h_title">Usuario - Nuevo Usuario</div>
		<form action="" method="post">
			<div class="element">
				<label for="name">Identificación <span class="red">(Obligatorio)</span></label>
				<input id="idUsuario" name="idUsuario" class="text err" />
			</div>
            <div class="element">
				<label for="name">Primer Nombre <span class="red">(Obligatorio)</span></label>
				<input id="nombre1" name="nombre1" class="text err" />
			</div>
            <div class="element">
				<label for="name">Segundo Nombre <span class="red">(Obligatorio)</span></label>
				<input id="nombre2" name="nombre2" class="text err" />
			</div>
            <div class="element">
				<label for="name">Primer Apellido <span class="red">(Obligatorio)</span></label>
				<input id="apellido1" name="apellido1" class="text err" />
			</div>
            <div class="element">
				<label for="name">Segundo Apellido <span class="red">(Obligatorio)</span></label>
				<input id="apellido2" name="apellido2" class="text err" />
			</div>
            <div class="element">
				<label for="name">Rol <span class="red">(Obligatorio)</span></label>
				<select name="rol" class="err" id="rol">
                    <?php
                    $result=$bd->extraerDatos("SELECT * FROM rol");
                   	while($filas = mysql_fetch_array($result))
                    {
                        echo '<option value="'.$filas["idRol"].'">'.$filas["nombre"].'</option>';
                    }
                    
                    ?>
				</select>
			</div>
            <div class="element">
				<label for="name">Tarjeta Profesional</label>
				<input id="tarjeta" name="tarjeta" class="text err" />
			</div>
            <div class="element">
				<label for="name">Constraseña <span class="red">(Obligatorio)</span></label>
				<input id="contrasena" name="contrasena" type="password" class="text err" />
			</div>
			<div class="entry">
				<button type="submit" class="add" onclick="ingresarNuevousuario();return false;">Ingresar</button>
			</div>
		</form>
	</div>
</div>