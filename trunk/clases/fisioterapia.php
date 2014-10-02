<?php
include ('../bd/bd.php');
class fisioterapia
{
	function insertarDatos($idFisioterapia,$consulta,$evaluacion,$concepto,$diagnostico,$profesional)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("INSERT INTO fisioterapia(idFisioterapia,consulta,evaluacion,concepto,diagnostico,profesional) VALUES ($idFisioterapia,'$consulta','$evaluacion','$concepto','$diagnostico','$profesional')"))
		{
			echo "Registro de datos exitoso";
		}
		else
		{
			echo "No se pudo hacer el registro de datos";
		}
	}

	function consultarDatos($idFisioterapia)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("SELECT * FROM fisioterapia WHERE idFisioterapia=$idFisioterapia"))
		{
			echo "Consulta de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la consulta de datos";
		}
	}

	function eliminarDatos($idFisioterapia)
	{
		$bd=BD::getInstance();
		if($bd->extraerDatos("DELETE FROM fisioterapia WHERE idFisioterapia=$idFisioterapia"))
		{
			echo "Eliminación exitosa";
		}
		else
		{
			echo "No se pudo realizar la eliminación de datos";
		}
	}

	function actualizarDatos($idFisioterapia,$consulta,$evaluacion,$concepto,$diagnostico,$profesional)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("UPDATE fisioterapia SET consulta='$consulta',evaluacion='$evaluacion',concepto='$concepto',diagnostico='$diagnostico',profesional='$profesional' WHERE idFisioterapia=$idFisioterapia"))
		{
			echo "Modificación de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la modificación de datos";
		}
	}

	function getconsulta($idFisioterapia)
	{
		
		if($result=$bd->insertarDatos("SELECT consulta FROM fisioterapia WHERE idFisioterapia=$idFisioterapia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['consulta'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getevaluacion($idFisioterapia)
	{
		
		if($result=$bd->insertarDatos("SELECT evaluacion FROM fisioterapia WHERE idFisioterapia=$idFisioterapia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['evaluacion'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getconcepto($idFisioterapia)
	{
		
		if($result=$bd->insertarDatos("SELECT concepto FROM fisioterapia WHERE idFisioterapia=$idFisioterapia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['concepto'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getdiagnostico($idFisioterapia)
	{
		
		if($result=$bd->insertarDatos("SELECT diagnostico FROM fisioterapia WHERE idFisioterapia=$idFisioterapia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['diagnostico'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getprofesional($idFisioterapia)
	{
		
		if($result=$bd->insertarDatos("SELECT profesional FROM fisioterapia WHERE idFisioterapia=$idFisioterapia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['profesional'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function setconsulta($consulta,$idFisioterapia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fisioterapia SET consulta=$consulta WHERE idFisioterapia=$idFisioterapia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setevaluacion($evaluacion,$idFisioterapia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fisioterapia SET evaluacion=$evaluacion WHERE idFisioterapia=$idFisioterapia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setconcepto($concepto,$idFisioterapia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fisioterapia SET concepto=$concepto WHERE idFisioterapia=$idFisioterapia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setdiagnostico($diagnostico,$idFisioterapia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fisioterapia SET diagnostico=$diagnostico WHERE idFisioterapia=$idFisioterapia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setprofesional($profesional,$idFisioterapia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fisioterapia SET profesional=$profesional WHERE idFisioterapia=$idFisioterapia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function dibujarFormularioIngresofisioterapia()
	{
		echo "<form role='form'>";

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>idFisioterapia</label>

                                <input type='email' class='form-control' id='idFisioterapia' placeholder='idFisioterapia'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>consulta</label>

                                <input type='email' class='form-control' id='consulta' placeholder='consulta'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>evaluacion</label>

                                <input type='email' class='form-control' id='evaluacion' placeholder='evaluacion'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>concepto</label>

                                <input type='email' class='form-control' id='concepto' placeholder='concepto'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>diagnostico</label>

                                <input type='email' class='form-control' id='diagnostico' placeholder='diagnostico'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>profesional</label>

                                <input type='email' class='form-control' id='profesional' placeholder='profesional'>

                            </div>";

                

                echo "<button type='submit' class='btn btn-default' onclick='ingresarNuevofisioterapia();return false;'>Ingresar</button>";

           echo "</form>";
	}

	function consultarTodosfisioterapia()
	{
		$bd=BD::getInstance();
		if($result=$bd->extraerDatos("SELECT * FROM fisioterapia"))
		{
			echo "<div class='panel panel-default'><div class='panel-heading'>Nombre de la Tabla</div> <table class='table'><thead><tr><th>idFisioterapia</th><th>consulta</th><th>evaluacion</th><th>concepto</th><th>diagnostico</th><th>profesional</th><th>Accion</th></tr></thead><tbody>";

        
			while($filas = mysql_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>".$filas['idFisioterapia']."</td>";
				echo "<td>".$filas['consulta']."</td>";
				echo "<td>".$filas['evaluacion']."</td>";
				echo "<td>".$filas['concepto']."</td>";
				echo "<td>".$filas['diagnostico']."</td>";
				echo "<td>".$filas['profesional']."</td>";
				echo "<td><p>

        <a href='#' class='btn btn-primary' role='button' onclick='dibujarFormularioModificarfisioterapia(".$filas['idFisioterapia'].");return false;'>Editar</a>

        <a href='#' class='btn btn-primary' role='button' onclick='eliminarfisioterapia(".$filas['idFisioterapia'].");return false;'>Eliminar</a>

        </p></td></tr>";
			}
			echo "</tr></tbody></table></div>";
			echo "Consulta de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la consulta de datos";
		}
	}

	function dibujarFormularioModificarfisioterapia($id)
	{
		$bd=BD::getInstance();
		$result=$bd->extraerDatos("SELECT * FROM fisioterapia WHERE idFisioterapia=".$id);
		$filas = mysql_fetch_array($result);
		echo "<form role='form'>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>idFisioterapia</label>

                            <input class='form-control' type='hidden' id='idFisioterapia' value='".$filas["idFisioterapia"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>consulta</label>

                            <input type='email' class='form-control' id='consulta' value='".$filas["consulta"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>evaluacion</label>

                            <input type='email' class='form-control' id='evaluacion' value='".$filas["evaluacion"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>concepto</label>

                            <input type='email' class='form-control' id='concepto' value='".$filas["concepto"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>diagnostico</label>

                            <input type='email' class='form-control' id='diagnostico' value='".$filas["diagnostico"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>profesional</label>

                            <input type='email' class='form-control' id='profesional' value='".$filas["profesional"]."'>

                        </div>";

                echo "<button type='submit' class='btn btn-default' type='submit' onclick='modificarfisioterapia($id);return false;'>Modificar</button></form>";

           
	}
}
?>