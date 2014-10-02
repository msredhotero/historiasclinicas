<?php
$bd=BD::getInstance();
?>
<div id="main">
	<div class="full_w">
		<div class="h_title">Cita Médica - Nueva Cita</div>
		<form action="" method="post">
			<div class="element">
				<label for="name">Paciente <span class="red">(Obligatorio)</span></label>
				<input id="paciente" name="paciente" class="text err"/>
			</div>
            <div class="element">
				<label for="category">Regimen <span class="red">(Obligatorio)</span></label>
				<select name="regimen" class="err" id="regimen">
					<option value="0">Seleccionar una opción</option>
					<option value="1">Contributivo</option>
					<option value="2">Subsidiado</option>
					<option value="3">Vinculado</option>
                    <option value="4">Particular</option>
                    <option value="5">Otro</option>
                    <option value="6">Desplazado</option>
				</select>
			</div>
            <div class="element">
				<label for="name">EPS <span class="red">(Obligatorio)</span></label>
                <?php
                if($result=$bd->extraerDatos("SELECT * FROM eps"))
                {
                    echo "<select id='eps' class='err'>
                                <option value='0'>Seleccionar una opción</option>";
                    while($filas = mysql_fetch_array($result))
                    {
                        echo "<option id='".$filas["codigo"]."'>".$filas["nombre"]."</option>";
                    }
                    echo "</select>";
                }
                ?>
			</div>
            <div class="element">
				<label for="name">Tipo de Consulta <span class="red">(Obligatorio)</span></label>
                <select name="tipoConsulta" class="err" id="tipoConsulta">
					<option value="0">Seleccionar una opción</option>
					<option value="1">Valoración Ocupacional</option>
					<option value="2">Valoración Fonoaudiología</option>
					<option value="3">Valoración Médica</option>
                    <option value="4">Valoración Odontología</option>
                    <option value="5">Valoración Fisioterapia</option>
                    <option value="6">Valoración Nutricional</option>
                    <option value="7">Valoración Trabajo Social</option>
                    <option value="8">Valoración Psicología</option>
				</select>
			</div>
            <div class="element">
				<label for="name">Profesional <span class="red">(Obligatorio)</span></label>
                <?php
                if($result=$bd->extraerDatos("SELECT * FROM usuario WHERE rol=2"))
                {
                    echo "<select id='profesional' class='err'>
                                <option value='0'>Seleccionar una opción</option>";
                    while($filas = mysql_fetch_array($result))
                    {
                        echo "<option id='".$filas["idUsuario"]."'>".$filas["idUsuario"]." - ".$filas["nombre1"]." ".$filas["nombre2"]." ".$filas["apellido1"]." ".$filas["apellido2"]."</option>";
                    }
                    echo "</select>";
                }
                ?>
			</div>
            <div class="element">
				<label for="name">Fecha <span class="red">(Obligatorio)</span></label>
				<input id="fecha" name="fecha" class="text err" />
			</div>
            <div class="element">
				<label for="name">Hora <span class="red">(Obligatorio)</span></label>
                <select name="hora" class="err" id="hora">
					<option value="0">Seleccionar una opción</option>
                    <option value="0">08:00AM</option>
                    <option value="0">08:15AM</option>
                    <option value="0">08:30AM</option>
                    <option value="0">08:45AM</option>
                    <option value="0">09:00AM</option>
                    <option value="0">09:15AM</option>
                    <option value="0">09:30AM</option>
                    <option value="0">09:45AM</option>
                    <option value="0">10:00AM</option>
                    <option value="0">10:15AM</option>
                    <option value="0">10:30AM</option>
                    <option value="0">10:45AM</option>
                    <option value="0">11:00AM</option>
                    <option value="0">11:15AM</option>
                    <option value="0">11:30AM</option>
                    <option value="0">11:45AM</option>
                    <option value="0">12:00M</option>
                    <option value="0">12:15PM</option>
                    <option value="0">12:30PM</option>
                    <option value="0">12:45PM</option>
                    <option value="0">01:00PM</option>
                    <option value="0">01:15PM</option>
                    <option value="0">01:30PM</option>
                    <option value="0">01:45PM</option>
                    <option value="0">02:00PM</option>
                    <option value="0">02:15PM</option>
                    <option value="0">02:30PM</option>
                    <option value="0">02:45PM</option>
                    <option value="0">03:00PM</option>
                    <option value="0">03:15PM</option>
                    <option value="0">03:30PM</option>
                    <option value="0">03:45PM</option>
                    <option value="0">04:00PM</option>
                    <option value="0">04:15PM</option>
                    <option value="0">04:30PM</option>
                    <option value="0">04:45PM</option>
                    <option value="0">05:00PM</option>
                    <option value="0">05:15PM</option>
                    <option value="0">05:30PM</option>
                    <option value="0">05:45PM</option>
                </select>
			</div>
            <div class="element">
				<label for="name">Autorizacion </label>
				<input id="autorizacion" name="autorizacion" class="text err" />
			</div>
            <div class="element">
				<label for="name">Factura </label>
				<input id="factura" name="factura" class="text err" />
			</div>
            <div class="element">
				<label for="name">Valor </label>
				<input id="valor" name="valor" class="text err" />
			</div>
            <div class="element">
				<label for="name">Acompanante </label>
				<input id="acompanante" name="acompanante" class="text err" />
			</div>
            <div class="element">
				<label for="name">Parentesco </label>
				<input id="parentesco" name="parentesco" class="text err" />
			</div>
            <div class="element">
				<label for="name">Telefono </label>
				<input id="telefono" name="telefono" class="text err" />
			</div>
			<div class="entry">
				<button type="submit" class="add" onclick="ingresarNuevoconsulta();return false;">Ingresar</button>
			</div>
		</form>
	</div>
</div>