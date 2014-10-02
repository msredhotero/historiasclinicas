<?php
include ('../bd/bd.php');
class apoyo
{
	function insertarDatos($idApoyo,$consulta,$nombres,$relacion,$telefono,$direccion)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("INSERT INTO apoyo(consulta,nombres,relacion,telefono,direccion) VALUES ('$consulta','$nombres','$relacion','$telefono','$direccion')"))
		{
			echo "Registro de datos exitoso";
		}
		else
		{
			echo "No se pudo hacer el registro de datos";
		}
	}

	function consultarDatos($idApoyo)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("SELECT * FROM apoyo WHERE idApoyo=$idApoyo"))
		{
			echo "Consulta de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la consulta de datos";
		}
	}

	function eliminarDatos($idApoyo)
	{
		$bd=BD::getInstance();
		if($bd->extraerDatos("DELETE FROM apoyo WHERE idApoyo=$idApoyo"))
		{
			echo "Eliminación exitosa";
		}
		else
		{
			echo "No se pudo realizar la eliminación de datos";
		}
	}

	function actualizarDatos($idApoyo,$consulta,$nombres,$relacion,$telefono,$direccion)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("UPDATE apoyo SET consulta='$consulta',nombres='$nombres',relacion='$relacion',telefono='$telefono',direccion='$direccion' WHERE idApoyo=$idApoyo"))
		{
			echo "Modificación de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la modificación de datos";
		}
	}

	function getconsulta($idApoyo)
	{
		
		if($result=$bd->insertarDatos("SELECT consulta FROM apoyo WHERE idApoyo=$idApoyo"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['consulta'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getnombres($idApoyo)
	{
		
		if($result=$bd->insertarDatos("SELECT nombres FROM apoyo WHERE idApoyo=$idApoyo"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['nombres'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getrelacion($idApoyo)
	{
		
		if($result=$bd->insertarDatos("SELECT relacion FROM apoyo WHERE idApoyo=$idApoyo"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['relacion'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function gettelefono($idApoyo)
	{
		
		if($result=$bd->insertarDatos("SELECT telefono FROM apoyo WHERE idApoyo=$idApoyo"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['telefono'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getdireccion($idApoyo)
	{
		
		if($result=$bd->insertarDatos("SELECT direccion FROM apoyo WHERE idApoyo=$idApoyo"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['direccion'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function setconsulta($consulta,$idApoyo)
	{
		
		if($result=$bd->insertarDatos("UPDATE apoyo SET consulta=$consulta WHERE idApoyo=$idApoyo"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setnombres($nombres,$idApoyo)
	{
		
		if($result=$bd->insertarDatos("UPDATE apoyo SET nombres=$nombres WHERE idApoyo=$idApoyo"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setrelacion($relacion,$idApoyo)
	{
		
		if($result=$bd->insertarDatos("UPDATE apoyo SET relacion=$relacion WHERE idApoyo=$idApoyo"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function settelefono($telefono,$idApoyo)
	{
		
		if($result=$bd->insertarDatos("UPDATE apoyo SET telefono=$telefono WHERE idApoyo=$idApoyo"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setdireccion($direccion,$idApoyo)
	{
		
		if($result=$bd->insertarDatos("UPDATE apoyo SET direccion=$direccion WHERE idApoyo=$idApoyo"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function dibujarFormularioIngresoapoyo()
	{
		echo "<form role='form'>";

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>idApoyo</label>

                                <input type='email' class='form-control' id='idApoyo' placeholder='idApoyo'>

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

                                <label for='ejemplo_email_1'>relacion</label>

                                <input type='email' class='form-control' id='relacion' placeholder='relacion'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>telefono</label>

                                <input type='email' class='form-control' id='telefono' placeholder='telefono'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>direccion</label>

                                <input type='email' class='form-control' id='direccion' placeholder='direccion'>

                            </div>";

                

                echo "<button type='submit' class='btn btn-default' onclick='ingresarNuevoapoyo();return false;'>Ingresar</button>";

           echo "</form>";
	}

	function consultarTodosapoyo($consulta)
	{
		$bd=BD::getInstance();
		if($result=$bd->extraerDatos("SELECT * FROM apoyo WHERE consulta=".$consulta))
		{
			echo "<table class='table'><thead><tr><th>nombres</th><th>relacion</th><th>telefono</th><th>direccion</th><th>Accion</th></tr></thead><tbody>";

        
			while($filas = mysql_fetch_array($result))
			{
				echo "<tr>";
    
				echo "<td>".$filas['nombres']."</td>";
				echo "<td>".$filas['relacion']."</td>";
				echo "<td>".$filas['telefono']."</td>";
				echo "<td>".$filas['direccion']."</td>";
				echo "<td><p>

        <a href='#' class='btn btn-primary' role='button' onclick='eliminarapoyo(".$consulta.",".$filas['idApoyo'].");return false;'>Eliminar</a>

        </p></td></tr>";
			}
			echo "</tr></tbody></table>";
			//echo "Consulta de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la consulta de datos";
		}
	}

	function dibujarFormularioModificarapoyo($id)
	{
		$bd=BD::getInstance();
		$result=$bd->extraerDatos("SELECT * FROM apoyo WHERE idApoyo=".$id);
		$filas = mysql_fetch_array($result);
		echo "<form role='form'>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>idApoyo</label>

                            <input class='form-control' type='hidden' id='idApoyo' value='".$filas["idApoyo"]."'>

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

                            <label for='ejemplo_email_1'>relacion</label>

                            <input type='email' class='form-control' id='relacion' value='".$filas["relacion"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>telefono</label>

                            <input type='email' class='form-control' id='telefono' value='".$filas["telefono"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>direccion</label>

                            <input type='email' class='form-control' id='direccion' value='".$filas["direccion"]."'>

                        </div>";

                echo "<button type='submit' class='btn btn-default' type='submit' onclick='modificarapoyo($id);return false;'>Modificar</button></form>";

           
	}
}
?>