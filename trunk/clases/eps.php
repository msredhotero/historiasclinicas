<?php
include ('../bd/bd.php');
class eps
{
	function insertarDatos($idEps,$codigo,$nombre)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("INSERT INTO eps(codigo,nombre) VALUES ('$codigo','$nombre')"))
		{
			echo "Registro de datos exitoso";
		}
		else
		{
			echo "No se pudo hacer el registro de datos";
		}
	}

	function consultarDatos($idEps)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("SELECT * FROM eps WHERE idEps=$idEps"))
		{
			echo "Consulta de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la consulta de datos";
		}
	}

	function eliminarDatos($idEps)
	{
		$bd=BD::getInstance();
		if($bd->extraerDatos("DELETE FROM eps WHERE idEps=$idEps"))
		{
			echo "Eliminación exitosa";
		}
		else
		{
			echo "No se pudo realizar la eliminación de datos";
		}
	}

	function actualizarDatos($idEps,$codigo,$nombre)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("UPDATE eps SET codigo='$codigo',nombre='$nombre' WHERE idEps=$idEps"))
		{
			echo "Modificación de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la modificación de datos";
		}
	}

	function getcodigo($idEps)
	{
		
		if($result=$bd->insertarDatos("SELECT codigo FROM eps WHERE idEps=$idEps"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['codigo'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getnombre($idEps)
	{
		
		if($result=$bd->insertarDatos("SELECT nombre FROM eps WHERE idEps=$idEps"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['nombre'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function setcodigo($codigo,$idEps)
	{
		
		if($result=$bd->insertarDatos("UPDATE eps SET codigo=$codigo WHERE idEps=$idEps"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setnombre($nombre,$idEps)
	{
		
		if($result=$bd->insertarDatos("UPDATE eps SET nombre=$nombre WHERE idEps=$idEps"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function dibujarFormularioIngresoeps()
	{
        include "../pages/eps/ingresarEps.php";
	}

	function consultarTodoseps()
	{
        include "../pages/eps/listarEps.php";
	}

	function dibujarFormularioModificareps($id)
	{
		$bd=BD::getInstance();
		$result=$bd->extraerDatos("SELECT * FROM eps WHERE idEps=".$id);
		$filas = mysql_fetch_array($result);
        include "../pages/eps/modificarEps.php";
	}
}
?>