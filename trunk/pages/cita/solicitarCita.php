<?php
$bd=BD::getInstance();
?>
<script>
$(function() {
$( "#fecha" ).datepicker({dateFormat: 'yy-mm-dd'});
});
</script>
<div id="main">
	<div class="full_w">
		<div class="h_title">Cita Médica - Nueva Cita</div>
		<form action="" method="post">
            <div id="horariosdisp" style="overflow-x:hidden; overflow-y:scroll; position: absolute; width: 200px; height: 710px; background-color: white; left: 810px;">horarios</div>
            <label id="existe_paciente"></label>
            <div class="element">
				<label for="name">Paciente <span class="red">(Obligatorio)</span></label>
				<input id="paciente" name="paciente" class="text err" onkeyup="existePaciente();"/>
			</div>
            <div class="element">
				<label for="category">Regimen <span class="red">(Obligatorio)</span></label>
				<select name="regimen" class="err" id="regimen" disabled>
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
                    echo "<select id='eps' class='err' disabled>
                                <option value='0'>Seleccionar una opción</option>";
                    while($filas = mysql_fetch_array($result))
                    {
                        echo "<option value='".$filas["codigo"]."'>".$filas["nombre"]."</option>";
                    }
                    echo "</select>";
                }
                ?>
			</div>
            <div class="element">
				<label for="name">Tipo de Consulta <span class="red">(Obligatorio)</span></label>
                <select name="tipoConsulta" class="err" id="tipoConsulta" disabled>
					<!--
                    <option value="0">Seleccionar una opción</option>
					<option value="1">Valoración Ocupacional</option>
					<option value="2">Valoración Fonoaudiología</option>
					<option value="3">Valoración Médica</option>
                    <option value="4">Valoración Odontología</option>
                    <option value="5">Valoración Fisioterapia</option>
                    <option value="6">Valoración Nutricional</option>
                    <option value="7">Valoración Trabajo Social</option>
-->
                    
                    <option value="8">Valoración Psicología</option>
                    <option value="16">Evolución Psicología</option>
				</select>
			</div>
            <div class="element">
				<label for="name">Profesional <span class="red">(Obligatorio)</span></label>
                <?php
                if($result=$bd->extraerDatos("SELECT * FROM usuario WHERE rol=2"))
                {
                    echo "<select id='profesional' class='err' disabled>
                                <option value='0'>Seleccionar una opción</option>";
                    while($filas = mysql_fetch_array($result))
                    {
                        echo "<option value='".$filas["idUsuario"]."'>".$filas["idUsuario"]." - ".$filas["nombre1"]." ".$filas["nombre2"]." ".$filas["apellido1"]." ".$filas["apellido2"]."</option>";
                    }
                    echo "</select>";
                }
                ?>
			</div>
            <div class="element">
				<label for="name">Fecha <span class="red">(Obligatorio)</span></label>
				<input id="fecha" name="fecha" class="text err" disabled/>
			</div>
            <div class="element">
				<label for="name">Hora <span class="red">(Obligatorio)</span></label>
                <select name="hora" class="err" id="hora" disabled>
					<option value="0">Seleccionar una opción</option>
                    <option value="08:00AM">08:00AM</option>
                    <option value="08:15AM">08:15AM</option>
                    <option value="08:30AM">08:30AM</option>
                    <option value="08:45AM">08:45AM</option>
                    <option value="09:00AM">09:00AM</option>
                    <option value="09:15AM">09:15AM</option>
                    <option value="09:30AM">09:30AM</option>
                    <option value="09:45AM">09:45AM</option>
                    <option value="10:00AM">10:00AM</option>
                    <option value="10:15AM">10:15AM</option>
                    <option value="10:30AM">10:30AM</option>
                    <option value="10:45AM">10:45AM</option>
                    <option value="11:00AM">11:00AM</option>
                    <option value="11:15AM">11:15AM</option>
                    <option value="11:30AM">11:30AM</option>
                    <option value="11:45AM">11:45AM</option>
                    <option value="12:00AM">12:00AM</option>
                    <option value="12:15AM">12:15AM</option>
                    <option value="12:30AM">12:30AM</option>
                    <option value="12:45AM">12:45AM</option>
                    <option value="01:00PM">01:00PM</option>
                    <option value="01:15PM">01:15PM</option>
                    <option value="01:30PM">01:30PM</option>
                    <option value="01:45PM">01:45PM</option>
                    <option value="02:00PM">02:00PM</option>
                    <option value="02:15PM">02:15PM</option>
                    <option value="02:30PM">02:30PM</option>
                    <option value="02:45PM">02:45PM</option>
                    <option value="03:00PM">03:00PM</option>
                    <option value="03:15PM">03:15PM</option>
                    <option value="03:30PM">03:30PM</option>
                    <option value="03:45PM">03:45PM</option>
                    <option value="04:00PM">04:00PM</option>
                    <option value="04:15PM">04:15PM</option>
                    <option value="04:30PM">04:30PM</option>
                    <option value="04:45PM">04:45PM</option>
                    <option value="05:00PM">05:00PM</option>
                    <option value="05:15PM">05:15PM</option>
                    <option value="05:30PM">05:30PM</option>
                    <option value="05:45PM">05:45PM</option>
                </select>
			</div>
            <div class="element">
				<label for="name"><a onclick="verDisponibilidad(); return false;">Ver disponibilidad</a></label>
			</div>
            <div class="element">
				<label for="name">Autorizacion </label>
				<input id="autorizacion" name="autorizacion" class="text err" disabled/>
			</div>
            <div class="element">
				<label for="name">Factura </label>
				<input id="factura" name="factura" class="text err" disabled/>
			</div>
            <div class="element">
				<label for="name">Valor </label>
				<input id="valor" name="valor" class="text err" disabled/>
			</div>
            <input id="acompanante" name="acompanante" class="text err" type="hidden" />
            <input id="parentesco" name="parentesco" class="text err" type="hidden"/>
            <input id="telefono" name="telefono" class="text err" type="hidden"/>
			<div class="entry">
				<button type="submit" class="add" onclick="ingresarNuevoconsulta();return false;">Ingresar</button>
			</div>
		</form>
	</div>
</div>