<?php
$bd=BD::getInstance();
$result=$bd->extraerDatos("SELECT * FROM usuario WHERE idUsuario=".$id);
$filas = mysql_fetch_array($result);
?>
<div id="main">
	<div class="full_w">
		<div class="h_title">Usuario - Nuevo Usuario</div>
		<form action="" method="post">
			<div class="element">
				<label for="name">Identificación <span class="red">(Obligatorio)</span></label>
				<input id="idUsuario" name="idUsuario" class="text err" value="<?php echo $filas["idUsuario"];?>" readonly=""/>
			</div>
            <div class="element">
				<label for="name">Primer Nombre <span class="red">(Obligatorio)</span></label>
				<input id="nombre1" name="nombre1" class="text err" value="<?php echo $filas["nombre1"];?>" />
			</div>
            <div class="element">
				<label for="name">Segundo Nombre <span class="red">(Obligatorio)</span></label>
				<input id="nombre2" name="nombre2" class="text err" value="<?php echo $filas["nombre2"];?>" />
			</div>
            <div class="element">
				<label for="name">Primer Apellido <span class="red">(Obligatorio)</span></label>
				<input id="apellido1" name="apellido1" class="text err" value="<?php echo $filas["apellido1"];?>" />
			</div>
            <div class="element">
				<label for="name">Segundo Apellido <span class="red">(Obligatorio)</span></label>
				<input id="apellido2" name="apellido2" class="text err" value="<?php echo $filas["apellido2"];?>" />
			</div>
            <div class="element">
				<label for="name">Rol <span class="red">(Obligatorio)</span></label>
				<select name="rol" class="err" id="rol">
                    <?php
                    $result2=$bd->extraerDatos("SELECT * FROM rol");
                   	while($filas2 = mysql_fetch_array($result2))
                    {
                        if($filas["rol"]==$filas2["idRol"])
                        {
                            echo '<option value="'.$filas2["idRol"].'" selected>'.$filas2["nombre"].'</option>';
                        }
                        else
                        {
                            echo '<option value="'.$filas2["idRol"].'">'.$filas2["nombre"].'</option>';
                        }
                    }
                    
                    ?>
				</select>
			</div>
            <div class="element">
				<label for="name">Tarjeta Profesional</label>
				<input id="tarjeta" name="tarjeta" class="text err" value="<?php echo $filas["tarjeta"];?>" />
			</div>
            <div class="element">
				<label for="name">Constraseña <span class="red">(Obligatorio)</span></label>
				<input id="contrasena" name="contrasena" type="password" class="text err" value="<?php echo $filas["contrasena"];?>" />
			</div>
			<div class="entry">
				<button type="submit" class="add" onclick="modificarusuario(<?php echo $id;?>);return false;">Modificar</button>
			</div>
		</form>
	</div>
</div>