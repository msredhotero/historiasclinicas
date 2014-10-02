<?php
$bd=BD::getInstance();
$result=$bd->extraerDatos("SELECT * FROM paciente WHERE idPaciente=".$id);
$filas = mysql_fetch_array($result);
?>
<script>
$(function() {
$( "#fechaNacimiento" ).datepicker({dateFormat: 'yy-mm-dd'});
});
</script>
<div id="main">
	<div class="full_w">
		<div class="h_title">Usuario - Nuevo Usuario</div>
		<form action="" method="post">
            <div class="element">
				<label for="name">Identificación <span class="red">(Obligatorio)</span></label>
				<input id="idPaciente" name="idPaciente" type="" class="text err" value="<?php echo $filas["idPaciente"];?>" readonly=""/>
			</div>
            <div class="element">
				<label for="name">Tipo de Identificación <span class="red">(Obligatorio)</span></label>
				<select id="tipoIden" name="tipoIden" >
                    <?php 
                    if($filas["tipoIden"]=="0"){echo "<option value='0' selected>Seleccionar una opción</option>";}
                    if($filas["tipoIden"]=="CC"){echo "<option value='CC' selected>Cédula ciudadanía</option>";}
                    if($filas["tipoIden"]=="CE"){echo "<option value='CE' selected>Cédula de extranjería</option>";}
                    if($filas["tipoIden"]=="PA"){echo "<option value='PA' selected>Pasaporte</option>";}
                    if($filas["tipoIden"]=="RC"){echo "<option value='RC' selected>Registro civil</option>";}
                    if($filas["tipoIden"]=="TI"){echo "<option value='TI' selected>Tarjeta de  identidad</option>";}
                    if($filas["tipoIden"]=="AS"){echo "<option value='AS' selected>Adulto sin identificación</option>";}
                    if($filas["tipoIden"]=="MS"){echo "<option value='MS' selected>Menor sin identificación</option>";}
                    if($filas["tipoIden"]=="NU"){echo "<option value='NU' selected>Número único de identificación</option>";}
                    ?>
                </select>
			</div>
            <div class="element">
				<label for="name">Primer Nombre <span class="red">(Obligatorio)</span></label>
				<input id="nombre1" name="nombre1" type="" class="text err"  value="<?php echo $filas["nombre1"];?>"/>
			</div>
            <div class="element">
				<label for="name">Segundo Nombre <span class="red">(Obligatorio)</span></label>
				<input id="nombre2" name="nombre2" type="" class="text err"  value="<?php echo $filas["nombre2"];?>"/>
			</div>
            <div class="element">
				<label for="name">Primer Apellido <span class="red">(Obligatorio)</span></label>
				<input id="apellido1" name="apellido1" type="" class="text err"  value="<?php echo $filas["apellido1"];?>"/>
			</div>
            <div class="element">
				<label for="name">Segundo Apellido <span class="red">(Obligatorio)</span></label>
				<input id="apellido2" name="apellido2" type="" class="text err"  value="<?php echo $filas["apellido2"];?>"/>
			</div>
            <div class="element">
				<label for="name">Fecha de Nacimiento <span class="red">(Obligatorio)</span></label>
				<input id="fechaNacimiento" name="fechaNacimiento" type="" class="text err"  value="<?php echo $filas["fechaNacimiento"];?>"/>
			</div>
            <div class="element">
				<label for="name">Departamento de Nacimiento <span class="red">(Obligatorio)</span></label>
                <select id="departamento" onchange='cargarCiudades(this.value); return false'>
                    <option value="0">Seleccionar una opción</option>
                    <?php
                    if($result2=$bd->extraerDatos("SELECT * FROM departamento"))
                    {
                    	while($filas2 = mysql_fetch_array($result2))
                    	{
                            if($filas["departamento"]==$filas2["codigo"])
                            {
                                echo "<option value='".$filas2["codigo"]."' selected>".$filas2["nombre"]."</option>";    
                            }
                            else
                            {
                                echo "<option value='".$filas2["codigo"]."'>".$filas2["nombre"]."</option>";
                            }
                        }
                    }
                    
                    ?>
                </select>
			</div>
            <div class="element">
				<label for="name">Ciudad de Nacimiento <span class="red">(Obligatorio)</span></label>
                <div id="ciudades">
                    <input id="" type="text" value="<?php 
                    //echo "SELECT * FROM ciudad WHERE codigo=".$filas["ciudadNacimiento"]." AND departamento=".$filas["departamento"];
                    if($result2=$bd->extraerDatos("SELECT * FROM ciudad WHERE codigo=".$filas["ciudadNacimiento"]." AND departamento=".$filas["departamento"]))
                    {
                    	$filas2 = mysql_fetch_array($result2);
                        echo $filas2["nombre"];
                    }
                    
                    ?>"/>
                    <input id="ciudadNacimiento" type="hidden" value="<?php echo $filas["ciudadNacimiento"];?>"/>
                </div>
			</div>
            <div class="element">
				<label for="name">Género <span class="red">(Obligatorio)</span></label>
                <select id="genero" name="genero" >
                <?php 
                if($filas["genero"]=="M")
                {
                    echo <<<EOT
                    <option value="0">Seleccionar una opción</option>
                    <option value="M" selected>Masculino</option>
                    <option value="F">Femenino</option>
EOT;
                }
                if($filas["genero"]=="F")
                {
                    echo <<<EOT
                    <option value="0">Seleccionar una opción</option>
                    <option value="M">Masculino</option>
                    <option value="F" selected>Femenino</option>
EOT;
                }
                if($filas["genero"]=="0")
                {
                    echo <<<EOT
                    <option value="0" selected>Seleccionar una opción</option>
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
EOT;
                }
                ?>
                </select>
			</div>
            <div class="element">
				<label for="name">Escolaridad <span class="red">(Obligatorio)</span></label>
				<input id="escolaridad" name="escolaridad" type="" class="text err" value="<?php echo $filas["escolaridad"];?>"/>
			</div>
            <div class="element">
				<label for="name">Ultimo Año Aprobado </label>
				<input id="ultAnioApr" name="ultAnioApr" type="" class="text err"  value="<?php echo $filas["ultAnioApr"];?>"/>
			</div>
            <div class="element">
				<label for="name">Tipo de Sangre <span class="red">(Obligatorio)</span></label>
				<input id="tipoSangre" name="tipoSangre" type="" class="text err"  value="<?php echo $filas["tipoSangre"];?>"/>
			</div>
            <div class="element">
				<label for="name">Tipo de Vinculación <span class="red">(Obligatorio)</span></label>
				<input id="tipoVinculacion" name="tipoVinculacion" type="" class="text err"  value="<?php echo $filas["tipoVinculacion"];?>"/>
			</div>
            <div class="element">
				<label for="name">Numero <span class="red">(Obligatorio)</span></label>
				<input id="numero" name="numero" type="" class="text err"  value="<?php echo $filas["numero"];?>"/>
			</div>
            <div class="element">
				<label for="name">Dirección <span class="red">(Obligatorio)</span></label>
				<input id="direccion" name="direccion" type="" class="text err"  value="<?php echo $filas["direccion"];?>"/>
			</div>
            <div class="element">
				<label for="name">Nombre de la Madre <span class="red">(Obligatorio)</span></label>
				<input id="nombreMadre" name="nombreMadre" type="" class="text err"  value="<?php echo $filas["nombreMadre"];?>"/>
			</div>
            <div class="element">
				<label for="name">Ocupacion <span class="red">(Obligatorio)</span></label>
				<input id="ocuMad" name="ocuMad" type="" class="text err"  value="<?php echo $filas["ocuMad"];?>"/>
			</div>
            <div class="element">
				<label for="name">Nombre del Padre</label>
				<input id="nombrePad" name="nombrePad" type="" class="text err"  value="<?php echo $filas["nombrePad"];?>"/>
			</div>
            <div class="element">
				<label for="name">Ocupación del Padre</label>
				<input id="ocuPad" name="ocuPad" type="" class="text err"  value="<?php echo $filas["ocuPad"];?>"/>
			</div>
			<div class="entry">
				<button type="submit" class="add" onclick="modificarpaciente();return false;">Modificar</button>
			</div>
		</form>
	</div>
</div>