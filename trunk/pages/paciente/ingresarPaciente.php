<?php
$bd=BD::getInstance();
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
				<input id="idPaciente" name="idPaciente" type="" class="text err" />
			</div>
            <div class="element">
				<label for="name">Tipo de Identificación <span class="red">(Obligatorio)</span></label>
				<select id="tipoIden" name="tipoIden" >
                    <option value="0">Seleccionar una opción</option>
                    <option value="CC">Cédula ciudadanía</option>
                    <option value="CE">Cédula de extranjería</option>
                    <option value="PA">Pasaporte</option>
                    <option value="RC">Registro civil</option>
                    <option value="TI">Tarjeta de  identidad</option>
                    <option value="AS">Adulto sin identificación</option>
                    <option value="MS">Menor sin identificación</option>
                    <option value="NU">Número único de identificación</option>
                </select>
			</div>
            <div class="element">
				<label for="name">Primer Nombre <span class="red">(Obligatorio)</span></label>
				<input id="nombre1" name="nombre1" type="" class="text err" />
			</div>
            <div class="element">
				<label for="name">Segundo Nombre <span class="red">(Obligatorio)</span></label>
				<input id="nombre2" name="nombre2" type="" class="text err" />
			</div>
            <div class="element">
				<label for="name">Primer Apellido <span class="red">(Obligatorio)</span></label>
				<input id="apellido1" name="apellido1" type="" class="text err" />
			</div>
            <div class="element">
				<label for="name">Segundo Apellido <span class="red">(Obligatorio)</span></label>
				<input id="apellido2" name="apellido2" type="" class="text err" />
			</div>
            <div class="element">
				<label for="name">Fecha de Nacimiento <span class="red">(Obligatorio)</span></label>
				<input id="fechaNacimiento" name="fechaNacimiento" type="" class="text err" />
			</div>
            <div class="element">
				<label for="name">Departamento de Nacimiento <span class="red">(Obligatorio)</span></label>
                <select id="selectDep" onchange='cargarCiudades(this.value); return false'>
                    <option value="0">Seleccionar una opción</option>
                    <?php
                    if($result=$bd->extraerDatos("SELECT * FROM departamento"))
                    {
                    	while($filas = mysql_fetch_array($result))
                    	{
                            echo "<option value='".$filas["codigo"]."'>".$filas["nombre"]."</option>";
                        }
                    }
                    
                    ?>
                </select>
			</div>
            <div class="element">
				<label for="name">Ciudad de Nacimiento <span class="red">(Obligatorio)</span></label>
                <div id="ciudades">
                    <input id=""  type="text"/>
                </div>
			</div>
            <div class="element">
				<label for="name">Género <span class="red">(Obligatorio)</span></label>
				<select id="genero" name="genero" >
                    <option value="0">Seleccionar una opción</option>
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
                </select>
			</div>
            <div class="element">
				<label for="name">Escolaridad <span class="red">(Obligatorio)</span></label>
				<input id="escolaridad" name="escolaridad" type="" class="text err" />
			</div>
            <div class="element">
				<label for="name">Ultimo Año Aprobado </label>
				<input id="ultAnioApr" name="ultAnioApr" type="" class="text err" />
			</div>
            <div class="element">
				<label for="name">Tipo de Sangre <span class="red">(Obligatorio)</span></label>
				<input id="tipoSangre" name="tipoSangre" type="" class="text err" />
			</div>
            <div class="element">
				<label for="name">Tipo de Vinculación <span class="red">(Obligatorio)</span></label>
				<input id="tipoVinculacion" name="tipoVinculacion" type="" class="text err" />
			</div>
            <div class="element">
				<label for="name">Numero <span class="red">(Obligatorio)</span></label>
				<input id="numero" name="numero" type="" class="text err" />
			</div>
            <div class="element">
				<label for="name">Dirección <span class="red">(Obligatorio)</span></label>
				<input id="direccion" name="direccion" type="" class="text err" />
			</div>
            <div class="element">
				<label for="name">Zona <span class="red">(Obligatorio)</span></label>
				<select id="zonares" name="zonares" >
                    <option value="U">Urbana</option>
                    <option value="R">Rural</option>
                </select>
			</div>
            <div class="element">
				<label for="name">Nombre de la Madre <span class="red">(Obligatorio)</span></label>
				<input id="nombreMadre" name="nombreMadre" type="" class="text err" />
			</div>
            <div class="element">
				<label for="name">Ocupacion <span class="red">(Obligatorio)</span></label>
				<input id="ocuMad" name="ocuMad" type="" class="text err" />
			</div>
            <div class="element">
				<label for="name">Nombre del Padre</label>
				<input id="nombrePad" name="nombrePad" type="" class="text err" />
			</div>
            <div class="element">
				<label for="name">Ocupación del Padre</label>
				<input id="ocuPad" name="ocuPad" type="" class="text err" />
			</div>
			<div class="entry">
				<button type="submit" class="add" onclick="ingresarNuevopaciente();return false;">Ingresar</button>
			</div>
		</form>
	</div>
</div>