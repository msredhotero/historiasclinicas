<?php
include ('../bd/bd.php');
class rol
{
	function insertarDatos($idRol,$nombre)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("INSERT INTO rol(idRol,nombre) VALUES ($idRol,'$nombre')"))
		{
			echo "Registro de datos exitoso";
		}
		else
		{
			echo "No se pudo hacer el registro de datos";
		}
	}

	function consultarDatos($idRol)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("SELECT * FROM rol WHERE idRol=$idRol"))
		{
			echo "Consulta de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la consulta de datos";
		}
	}

	function eliminarDatos($idRol)
	{
		$bd=BD::getInstance();
		if($bd->extraerDatos("DELETE FROM rol WHERE idRol=$idRol"))
		{
			echo "Eliminación exitosa";
		}
		else
		{
			echo "No se pudo realizar la eliminación de datos";
		}
	}

	function actualizarDatos($idRol,$nombre)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("UPDATE rol SET nombre='$nombre' WHERE idRol=$idRol"))
		{
			echo "Modificación de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la modificación de datos";
		}
	}

	function getnombre($idRol)
	{
		
		if($result=$bd->insertarDatos("SELECT nombre FROM rol WHERE idRol=$idRol"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['nombre'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function setnombre($nombre,$idRol)
	{
		
		if($result=$bd->insertarDatos("UPDATE rol SET nombre=$nombre WHERE idRol=$idRol"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function dibujarFormularioIngresorol()
	{
		echo "<form role='form'>";

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>idRol</label>

                                <input type='email' class='form-control' id='idRol' placeholder='idRol'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>nombre</label>

                                <input type='email' class='form-control' id='nombre' placeholder='nombre'>

                            </div>";

                

                echo "<button type='submit' class='btn btn-default' onclick='ingresarNuevorol();return false;'>Ingresar</button>";

           echo "</form>";
	}

	function consultarTodosrol()
	{
		$bd=BD::getInstance();
		if($result=$bd->extraerDatos("SELECT * FROM rol"))
		{
			echo "<div class='panel panel-default'><div class='panel-heading'>Nombre de la Tabla</div> <table class='table'><thead><tr><th>idRol</th><th>nombre</th><th>Accion</th></tr></thead><tbody>";

        
			while($filas = mysql_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>".$filas['idRol']."</td>";
				echo "<td>".$filas['nombre']."</td>";
				echo "<td><p>

        <a href='#' class='btn btn-primary' role='button' onclick='dibujarFormularioModificarrol(".$filas['idRol'].");return false;'>Editar</a>

        <a href='#' class='btn btn-primary' role='button' onclick='eliminarrol(".$filas['idRol'].");return false;'>Eliminar</a>

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

	function dibujarFormularioModificarrol($id)
	{
		$bd=BD::getInstance();
		$result=$bd->extraerDatos("SELECT * FROM rol WHERE idRol=".$id);
		$filas = mysql_fetch_array($result);
		echo "<form role='form'>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>idRol</label>

                            <input class='form-control' type='hidden' id='idRol' value='".$filas["idRol"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>nombre</label>

                            <input type='email' class='form-control' id='nombre' value='".$filas["nombre"]."'>

                        </div>";

                echo "<button type='submit' class='btn btn-default' type='submit' onclick='modificarrol($id);return false;'>Modificar</button></form>";

           
	}
}
?>