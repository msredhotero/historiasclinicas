<?php
include ('../bd/bd.php');
class familia
{
	function insertarDatos($idFamilia,$consulta,$nombres,$parentesco,$edad,$esc,$ocupacion)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("INSERT INTO familia(consulta,nombres,parentesco,edad,esc,ocupacion) VALUES ('$consulta','$nombres','$parentesco','$edad','$esc','$ocupacion')"))
		{
			echo "Registro de datos exitoso";
		}
		else
		{
			echo "No se pudo hacer el registro de datos";
		}
	}

	function consultarDatos($idFamilia)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("SELECT * FROM familia WHERE idFamilia=$idFamilia"))
		{
			echo "Consulta de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la consulta de datos";
		}
	}

	function eliminarDatos($idFamilia)
	{
		$bd=BD::getInstance();
		if($bd->extraerDatos("DELETE FROM familia WHERE idFamilia=$idFamilia"))
		{
			echo "Eliminación exitosa";
		}
		else
		{
			echo "No se pudo realizar la eliminación de datos";
		}
	}

	function actualizarDatos($idFamilia,$consulta,$nombres,$parentesco,$edad,$esc,$ocupacion)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("UPDATE familia SET consulta='$consulta',nombres='$nombres',parentesco='$parentesco',edad='$edad',esc='$esc',ocupacion='$ocupacion' WHERE idFamilia=$idFamilia"))
		{
			echo "Modificación de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la modificación de datos";
		}
	}

	function getconsulta($idFamilia)
	{
		
		if($result=$bd->insertarDatos("SELECT consulta FROM familia WHERE idFamilia=$idFamilia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['consulta'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getnombres($idFamilia)
	{
		
		if($result=$bd->insertarDatos("SELECT nombres FROM familia WHERE idFamilia=$idFamilia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['nombres'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getparentesco($idFamilia)
	{
		
		if($result=$bd->insertarDatos("SELECT parentesco FROM familia WHERE idFamilia=$idFamilia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['parentesco'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getedad($idFamilia)
	{
		
		if($result=$bd->insertarDatos("SELECT edad FROM familia WHERE idFamilia=$idFamilia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['edad'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getesc($idFamilia)
	{
		
		if($result=$bd->insertarDatos("SELECT esc FROM familia WHERE idFamilia=$idFamilia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['esc'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getocupacion($idFamilia)
	{
		
		if($result=$bd->insertarDatos("SELECT ocupacion FROM familia WHERE idFamilia=$idFamilia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['ocupacion'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function setconsulta($consulta,$idFamilia)
	{
		
		if($result=$bd->insertarDatos("UPDATE familia SET consulta=$consulta WHERE idFamilia=$idFamilia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setnombres($nombres,$idFamilia)
	{
		
		if($result=$bd->insertarDatos("UPDATE familia SET nombres=$nombres WHERE idFamilia=$idFamilia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setparentesco($parentesco,$idFamilia)
	{
		
		if($result=$bd->insertarDatos("UPDATE familia SET parentesco=$parentesco WHERE idFamilia=$idFamilia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setedad($edad,$idFamilia)
	{
		
		if($result=$bd->insertarDatos("UPDATE familia SET edad=$edad WHERE idFamilia=$idFamilia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setesc($esc,$idFamilia)
	{
		
		if($result=$bd->insertarDatos("UPDATE familia SET esc=$esc WHERE idFamilia=$idFamilia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setocupacion($ocupacion,$idFamilia)
	{
		
		if($result=$bd->insertarDatos("UPDATE familia SET ocupacion=$ocupacion WHERE idFamilia=$idFamilia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function dibujarFormularioIngresofamilia()
	{
		echo "<form role='form'>";

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>idFamilia</label>

                                <input type='email' class='form-control' id='idFamilia' placeholder='idFamilia'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>consulta</label>

                                <input type='email' class='form-control' id='consulta' placeholder='consulta'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>nombres</label>

                                <input type='email' class='form-control' id='nombres' placeholder='nombres'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>parentesco</label>

                                <input type='email' class='form-control' id='parentesco' placeholder='parentesco'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>edad</label>

                                <input type='email' class='form-control' id='edad' placeholder='edad'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>esc</label>

                                <input type='email' class='form-control' id='esc' placeholder='esc'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>ocupacion</label>

                                <input type='email' class='form-control' id='ocupacion' placeholder='ocupacion'>

                            </div>";

                

                echo "<button type='submit' class='btn btn-default' onclick='ingresarNuevofamilia();return false;'>Ingresar</button>";

           echo "</form>";
	}

	function consultarTodosfamilia($consulta)
	{
		$bd=BD::getInstance();
		if($result=$bd->extraerDatos("SELECT * FROM familia WHERE consulta=".$consulta))
		{
			echo "<div class='panel panel-default'><table class='table'><thead><tr><th>nombres</th><th>parentesco</th><th>edad</th><th>esc</th><th>ocupacion</th><th>Accion</th></tr></thead><tbody>";

        
			while($filas = mysql_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>".$filas['nombres']."</td>";
				echo "<td>".$filas['parentesco']."</td>";
				echo "<td>".$filas['edad']."</td>";
				echo "<td>".$filas['esc']."</td>";
				echo "<td>".$filas['ocupacion']."</td>";
				echo "<td><p>

        

        <a href='#' class='btn btn-primary' role='button' onclick='eliminarfamilia(".$consulta.",".$filas['idFamilia'].");return false;'>Eliminar</a>

        </p></td></tr>";
			}
			echo "</tr></tbody></table></div>";
		}
		else
		{
			echo "No se pudo hacer la consulta de datos";
		}
	}

	function dibujarFormularioModificarfamilia($id)
	{
		$bd=BD::getInstance();
		$result=$bd->extraerDatos("SELECT * FROM familia WHERE idFamilia=".$id);
		$filas = mysql_fetch_array($result);
		echo "<form role='form'>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>idFamilia</label>

                            <input class='form-control' type='hidden' id='idFamilia' value='".$filas["idFamilia"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>consulta</label>

                            <input type='email' class='form-control' id='consulta' value='".$filas["consulta"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>nombres</label>

                            <input type='email' class='form-control' id='nombres' value='".$filas["nombres"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>parentesco</label>

                            <input type='email' class='form-control' id='parentesco' value='".$filas["parentesco"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>edad</label>

                            <input type='email' class='form-control' id='edad' value='".$filas["edad"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>esc</label>

                            <input type='email' class='form-control' id='esc' value='".$filas["esc"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>ocupacion</label>

                            <input type='email' class='form-control' id='ocupacion' value='".$filas["ocupacion"]."'>

                        </div>";

                echo "<button type='submit' class='btn btn-default' type='submit' onclick='modificarfamilia($id);return false;'>Modificar</button></form>";

           
	}
}
?>