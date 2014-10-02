<?php
$bd=BD::getInstance();
$result1=$bd->extraerDatos("SELECT * FROM consulta WHERE idConsulta=".$id);
$filas1 = mysql_fetch_array($result1);

$result2=$bd->extraerDatos("SELECT * FROM paciente WHERE idPaciente=".$filas1["paciente"]);
$filas2 = mysql_fetch_array($result2);

$result3=$bd->extraerDatos("SELECT * FROM usuario WHERE idUsuario=".$filas1["profesional"]);
$filas3 = mysql_fetch_array($result3);
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
            <input type="hidden" id="idConsulta" value="<?php echo $id;?>"/>
            <input id="paciente" type="hidden" name="paciente" class="text err" value="<?php echo $filas1["paciente"];?>" readonly=""/>
            <div class="element">
				<label for="name">Nombre del Paciente</label>
				<input id="" name="" class="text err" value="<?php echo $filas2["nombre1"]." ".$filas2["nombre2"]." ".$filas2["apellido1"]." ".$filas2["apellido2"];?>" readonly=""/>
			</div>
            <div class="element">
				<label for="name">Tipo de Consulta</label>
				<input id="" name="" class="text err" value="<?php 
                if($filas1["tipoConsulta"]==0){echo "Seleccionar una opción";}
                if($filas1["tipoConsulta"]==1){echo "Valoración Ocupacional";}
                if($filas1["tipoConsulta"]==2){echo "Valoración Fonoaudiología";}
                if($filas1["tipoConsulta"]==3){echo "Valoración Médica";}
                if($filas1["tipoConsulta"]==4){echo "Valoración Odontología";}
                if($filas1["tipoConsulta"]==5){echo "Valoración Fisioterapia";}
                if($filas1["tipoConsulta"]==6){echo "Valoración Nutricional";}
                if($filas1["tipoConsulta"]==7){echo "Valoración Trabajo Social";}
                if($filas1["tipoConsulta"]==8){echo "Valoración Psicología";}
                if($filas1["tipoConsulta"]==16){echo "Evolución Psicología";}
                ?>" readonly=""/>
                <input id="tipoConsulta" type="hidden" value="<?php echo $filas1["tipoConsulta"];?>"/>
			</div>
            <input id="profesional" name="profesional" type="hidden" class="text err" value="<?php echo $filas1["profesional"];?>" readonly=""/>
            <div class="element">
				<label for="name">Nombre del Profesional</label>
				<input id="" name="" class="text err" value="<?php echo $filas3["nombre1"]." ".$filas3["nombre2"]." ".$filas3["apellido1"]." ".$filas3["apellido2"];?>" readonly=""/>
			</div>
            <div class="element">
				<label for="name">Fecha</label>
				<input id="fecha" name="fecha" class="text err" value="<?php echo $filas1["fecha"];?>" readonly=""/>
			</div>
            <div class="element">
				<label for="name">Hora</label>
				<input id="hora" name="hora" class="text err" value="<?php echo $filas1["hora"];?>" readonly=""/>
			</div>
            <div class="element">
				<label for="name">Autorizacion </label>
				<input id="autorizacion" name="autorizacion" class="text err" value="<?php echo $filas1["autorizacion"];?>" readonly=""/>
			</div>
            <div class="element">
				<label for="name">Factura </label>
				<input id="factura" name="factura" class="text err" value="<?php echo $filas1["factura"];?>" readonly=""/>
			</div>
            <div class="element">
				<label for="name">Valor </label>
				<input id="valor" name="valor" class="text err" value="<?php echo $filas1["valor"];?>" readonly=""/>
			</div>
            <div class="element">
				<label for="name">Acompanante </label>
				<input id="acompanante" name="acompanante" class="text err" value="<?php echo $filas1["acompanante"];?>"/>
			</div>
            <div class="element">
				<label for="name">Parentesco </label>
				<input id="parentesco" name="parentesco" class="text err" value="<?php echo $filas1["parentesco"];?>" />
			</div>
            <div class="element">
				<label for="name">Telefono </label>
				<input id="telefono" name="telefono" class="text err" value="<?php echo $filas1["telefono"];?>"/>
			</div>
			<div class="entry">
				<button type="submit" class="add" onclick="modificarconsulta();return false;">Confirmar</button>
			</div>
		</form>
	</div>
</div>