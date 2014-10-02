<?php
include ('../bd/bd.php');
class oficio
{
	function insertarDatos($idOficio,$consulta,$nombre,$descripcion)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("INSERT INTO oficio(consulta,nombre,descripcion) VALUES ('$consulta','$nombre','$descripcion')"))
		{
			echo "Registro de datos exitoso";
		}
		else
		{
			echo "No se pudo hacer el registro de datos";
		}
	}

	function consultarDatos($idOficio)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("SELECT * FROM oficio WHERE idOficio=$idOficio"))
		{
			echo "Consulta de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la consulta de datos";
		}
	}

	function eliminarDatos($idOficio)
	{
		$bd=BD::getInstance();
        $result2=$bd->extraerDatos("SELECT * FROM oficio WHERE idOficio=".$idOficio);
		$filas2 = mysql_fetch_array($result2);
		if($bd->extraerDatos("DELETE FROM oficio WHERE idOficio=$idOficio"))
		{
			echo $filas2["consulta"];
		}
		else
		{
			echo "No se pudo realizar la eliminación de datos";
		}
	}

	function actualizarDatos($idOficio,$consulta,$nombre,$descripcion)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("UPDATE oficio SET consulta='$consulta',nombre='$nombre',descripcion='$descripcion' WHERE idOficio=$idOficio"))
		{
			echo "Modificación de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la modificación de datos";
		}
	}

	function getconsulta($idOficio)
	{
		
		if($result=$bd->insertarDatos("SELECT consulta FROM oficio WHERE idOficio=$idOficio"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['consulta'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getnombre($idOficio)
	{
		
		if($result=$bd->insertarDatos("SELECT nombre FROM oficio WHERE idOficio=$idOficio"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['nombre'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getdescripcion($idOficio)
	{
		
		if($result=$bd->insertarDatos("SELECT descripcion FROM oficio WHERE idOficio=$idOficio"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['descripcion'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function setconsulta($consulta,$idOficio)
	{
		
		if($result=$bd->insertarDatos("UPDATE oficio SET consulta=$consulta WHERE idOficio=$idOficio"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setnombre($nombre,$idOficio)
	{
		
		if($result=$bd->insertarDatos("UPDATE oficio SET nombre=$nombre WHERE idOficio=$idOficio"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setdescripcion($descripcion,$idOficio)
	{
		
		if($result=$bd->insertarDatos("UPDATE oficio SET descripcion=$descripcion WHERE idOficio=$idOficio"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function dibujarFormularioIngresooficio()
	{
		echo "<form role='form'>";

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>idOficio</label>

                                <input type='email' class='form-control' id='idOficio' placeholder='idOficio'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>consulta</label>

                                <input type='email' class='form-control' id='consulta' placeholder='consulta'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>nombre</label>

                                <input type='email' class='form-control' id='nombre' placeholder='nombre'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>descripcion</label>

                                <input type='email' class='form-control' id='descripcion' placeholder='descripcion'>

                            </div>";

                

                echo "<button type='submit' class='btn btn-default' onclick='ingresarNuevooficio();return false;'>Ingresar</button>";

           echo "</form>";
	}

	function consultarTodosoficio($consulta)
	{
		$bd=BD::getInstance();
        //echo "SELECT * FROM oficio WHERE idOficio=".$consulta;
		if($result=$bd->extraerDatos("SELECT * FROM oficio WHERE consulta=".$consulta))
		{
			echo "<div class='panel panel-default'><table class='table'><thead><th>nombre</th><th>descripcion</th><th>Accion</th></tr></thead><tbody>";

        
			while($filas = mysql_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>".$filas['nombre']."</td>";
				echo "<td>".$filas['descripcion']."</td>";
				echo "<td><p>

        <a href='#' class='btn btn-primary' role='button' onclick='eliminaroficio(".$filas['idOficio'].");return false;'>Eliminar</a>

        </p></td></tr>";
			}
			echo "</tr></tbody></table></div>";
		}
		else
		{
			echo "No se pudo hacer la consulta de datos";
		}
	}

	function dibujarFormularioModificaroficio($id)
	{
		$bd=BD::getInstance();
		$result=$bd->extraerDatos("SELECT * FROM oficio WHERE idOficio=".$id);
		$filas = mysql_fetch_array($result);
		echo "<form role='form'>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>idOficio</label>

                            <input class='form-control' type='hidden' id='idOficio' value='".$filas["idOficio"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>consulta</label>

                            <input type='email' class='form-control' id='consulta' value='".$filas["consulta"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>nombre</label>

                            <input type='email' class='form-control' id='nombre' value='".$filas["nombre"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>descripcion</label>

                            <input type='email' class='form-control' id='descripcion' value='".$filas["descripcion"]."'>

                        </div>";

                echo "<button type='submit' class='btn btn-default' type='submit' onclick='modificaroficio($id);return false;'>Modificar</button></form>";

           
	}
}
?>