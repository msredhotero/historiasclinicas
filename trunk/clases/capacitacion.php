<?php
include ('../bd/bd.php');
class capacitacion
{
	function insertarDatos($idCapacitacion,$consulta,$oficio,$institucion,$tiempo)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("INSERT INTO capacitacion(consulta,oficio,institucion,tiempo) VALUES ('$consulta','$oficio','$institucion','$tiempo')"))
		{
			echo "Registro de datos exitoso";
		}
		else
		{
			echo "No se pudo hacer el registro de datos";
		}
	}

	function consultarDatos($idCapacitacion)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("SELECT * FROM capacitacion WHERE idCapacitacion=$idCapacitacion"))
		{
			echo "Consulta de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la consulta de datos";
		}
	}

	function eliminarDatos($idCapacitacion)
	{
        $bd=BD::getInstance();
		$result2=$bd->extraerDatos("SELECT * FROM capacitacion WHERE idCapacitacion=".$idCapacitacion);
		$filas2 = mysql_fetch_array($result2);
		if($bd->extraerDatos("DELETE FROM capacitacion WHERE idCapacitacion=$idCapacitacion"))
		{
			echo $filas2["consulta"];
		}
		else
		{
			echo "No se pudo realizar la eliminación de datos";
		}
	}

	function actualizarDatos($idCapacitacion,$consulta,$oficio,$institucion,$tiempo)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("UPDATE capacitacion SET consulta='$consulta',oficio='$oficio',institucion='$institucion',tiempo='$tiempo' WHERE idCapacitacion=$idCapacitacion"))
		{
			echo "Modificación de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la modificación de datos";
		}
	}

	function getconsulta($idCapacitacion)
	{
		
		if($result=$bd->insertarDatos("SELECT consulta FROM capacitacion WHERE idCapacitacion=$idCapacitacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['consulta'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoficio($idCapacitacion)
	{
		
		if($result=$bd->insertarDatos("SELECT oficio FROM capacitacion WHERE idCapacitacion=$idCapacitacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oficio'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getinstitucion($idCapacitacion)
	{
		
		if($result=$bd->insertarDatos("SELECT institucion FROM capacitacion WHERE idCapacitacion=$idCapacitacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['institucion'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function gettiempo($idCapacitacion)
	{
		
		if($result=$bd->insertarDatos("SELECT tiempo FROM capacitacion WHERE idCapacitacion=$idCapacitacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['tiempo'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function setconsulta($consulta,$idCapacitacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE capacitacion SET consulta=$consulta WHERE idCapacitacion=$idCapacitacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoficio($oficio,$idCapacitacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE capacitacion SET oficio=$oficio WHERE idCapacitacion=$idCapacitacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setinstitucion($institucion,$idCapacitacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE capacitacion SET institucion=$institucion WHERE idCapacitacion=$idCapacitacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function settiempo($tiempo,$idCapacitacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE capacitacion SET tiempo=$tiempo WHERE idCapacitacion=$idCapacitacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function dibujarFormularioIngresocapacitacion()
	{
		echo "<form role='form'>";

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>idCapacitacion</label>

                                <input type='email' class='form-control' id='idCapacitacion' placeholder='idCapacitacion'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>consulta</label>

                                <input type='email' class='form-control' id='consulta' placeholder='consulta'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oficio</label>

                                <input type='email' class='form-control' id='oficio' placeholder='oficio'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>institucion</label>

                                <input type='email' class='form-control' id='institucion' placeholder='institucion'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>tiempo</label>

                                <input type='email' class='form-control' id='tiempo' placeholder='tiempo'>

                            </div>";

                

                echo "<button type='submit' class='btn btn-default' onclick='ingresarNuevocapacitacion();return false;'>Ingresar</button>";

           echo "</form>";
	}

	function consultarTodoscapacitacion($id)
	{
		$bd=BD::getInstance();
		if($result=$bd->extraerDatos("SELECT * FROM capacitacion WHERE consulta=".$id))
		{
			echo "<table class='table'><thead><tr><th>oficio</th><th>institucion</th><th>tiempo</th><th>Accion</th></tr></thead><tbody>";

        
			while($filas = mysql_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>".$filas['oficio']."</td>";
				echo "<td>".$filas['institucion']."</td>";
				echo "<td>".$filas['tiempo']."</td>";
				echo "<td><p>

        
        <a href='#' class='btn btn-primary' role='button' onclick='eliminarcapacitacion(".$filas['idCapacitacion'].");return false;'>Eliminar</a>

        </p></td></tr>";
			}
			echo "</tr></tbody></table>";
		}
		else
		{
			echo "No se pudo hacer la consulta de datos";
		}
	}

	function dibujarFormularioModificarcapacitacion($id)
	{
		$bd=BD::getInstance();
		$result=$bd->extraerDatos("SELECT * FROM capacitacion WHERE idCapacitacion=".$id);
		$filas = mysql_fetch_array($result);
		echo "<form role='form'>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>idCapacitacion</label>

                            <input class='form-control' type='hidden' id='idCapacitacion' value='".$filas["idCapacitacion"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>consulta</label>

                            <input type='email' class='form-control' id='consulta' value='".$filas["consulta"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oficio</label>

                            <input type='email' class='form-control' id='oficio' value='".$filas["oficio"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>institucion</label>

                            <input type='email' class='form-control' id='institucion' value='".$filas["institucion"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>tiempo</label>

                            <input type='email' class='form-control' id='tiempo' value='".$filas["tiempo"]."'>

                        </div>";

                echo "<button type='submit' class='btn btn-default' type='submit' onclick='modificarcapacitacion($id);return false;'>Modificar</button></form>";

           
	}
}
?>