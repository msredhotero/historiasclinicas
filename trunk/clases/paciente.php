<?php
include ('../bd/bd.php');
class paciente
{
	function insertarDatos($idPaciente,$tipoIden,$nombre1,$nombre2,$apellido1,$apellido2,$fechaNacimiento,$ciudadNacimiento,$genero,$escolaridad,$ultAnioApr,$tipoSangre,$tipoVinculacion,$numero,$direccion,$telefono,$nombreMadre,$ocuMad,$nombrePad,$ocuPad,$selectDep,$zonares)
	{
		$bd=BD::getInstance();
        
		if($bd->insertarDatos("INSERT INTO paciente(idPaciente,tipoIden,nombre1,nombre2,apellido1,apellido2,fechaNacimiento,ciudadNacimiento,genero,escolaridad,ultAnioApr,tipoSangre,tipoVinculacion,numero,direccion,telefono,nombreMadre,ocuMad,nombrePad,ocuPad,departamento,zonares) VALUES ($idPaciente,'$tipoIden','$nombre1','$nombre2','$apellido1','$apellido2','$fechaNacimiento','$ciudadNacimiento','$genero','$escolaridad','$ultAnioApr','$tipoSangre','$tipoVinculacion','$numero','$direccion','$telefono','$nombreMadre','$ocuMad','$nombrePad','$ocuPad', '$selectDep','$zonares')"))
		{
			echo "Registro de datos exitoso";
		}
		else
		{
			echo "No se pudo hacer el registro de datos";
		}
	}

	function consultarDatos($idPaciente)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("SELECT * FROM paciente WHERE idPaciente=$idPaciente"))
		{
			echo "Consulta de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la consulta de datos";
		}
	}

	function eliminarDatos($idPaciente)
	{
		$bd=BD::getInstance();
		if($bd->extraerDatos("DELETE FROM paciente WHERE idPaciente=$idPaciente"))
		{
			echo "Eliminación exitosa";
		}
		else
		{
			echo "No se pudo realizar la eliminación de datos";
		}
	}

	function actualizarDatos($idPaciente,$tipoIden,$nombre1,$nombre2,$apellido1,$apellido2,$fechaNacimiento,$ciudadNacimiento,$genero,$escolaridad,$ultAnioApr,$tipoSangre,$tipoVinculacion,$numero,$direccion,$telefono,$nombreMadre,$ocuMad,$nombrePad,$ocuPad,$municipio)
	{
		$bd=BD::getInstance();
        
		if($bd->insertarDatos("UPDATE paciente SET tipoIden='$tipoIden',nombre1='$nombre1',nombre2='$nombre2',apellido1='$apellido1',apellido2='$apellido2',fechaNacimiento='$fechaNacimiento',ciudadNacimiento='$ciudadNacimiento',genero='$genero',escolaridad='$escolaridad',ultAnioApr='$ultAnioApr',tipoSangre='$tipoSangre',tipoVinculacion='$tipoVinculacion',numero='$numero',direccion='$direccion',telefono='$telefono',nombreMadre='$nombreMadre',ocuMad='$ocuMad',nombrePad='$nombrePad',ocuPad='$ocuPad', departamento='$municipio' WHERE idPaciente=$idPaciente"))
		{
			echo "Modificación de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la modificación de datos";
		}
	}

	function gettipoIden($idPaciente)
	{
		
		if($result=$bd->insertarDatos("SELECT tipoIden FROM paciente WHERE idPaciente=$idPaciente"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['tipoIden'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getnombre1($idPaciente)
	{
		
		if($result=$bd->insertarDatos("SELECT nombre1 FROM paciente WHERE idPaciente=$idPaciente"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['nombre1'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getnombre2($idPaciente)
	{
		
		if($result=$bd->insertarDatos("SELECT nombre2 FROM paciente WHERE idPaciente=$idPaciente"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['nombre2'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getapellido1($idPaciente)
	{
		
		if($result=$bd->insertarDatos("SELECT apellido1 FROM paciente WHERE idPaciente=$idPaciente"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['apellido1'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getapellido2($idPaciente)
	{
		
		if($result=$bd->insertarDatos("SELECT apellido2 FROM paciente WHERE idPaciente=$idPaciente"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['apellido2'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getfechaNacimiento($idPaciente)
	{
		
		if($result=$bd->insertarDatos("SELECT fechaNacimiento FROM paciente WHERE idPaciente=$idPaciente"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['fechaNacimiento'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getciudadNacimiento($idPaciente)
	{
		
		if($result=$bd->insertarDatos("SELECT ciudadNacimiento FROM paciente WHERE idPaciente=$idPaciente"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['ciudadNacimiento'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getgenero($idPaciente)
	{
		
		if($result=$bd->insertarDatos("SELECT genero FROM paciente WHERE idPaciente=$idPaciente"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['genero'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getescolaridad($idPaciente)
	{
		
		if($result=$bd->insertarDatos("SELECT escolaridad FROM paciente WHERE idPaciente=$idPaciente"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['escolaridad'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getultAnioApr($idPaciente)
	{
		
		if($result=$bd->insertarDatos("SELECT ultAnioApr FROM paciente WHERE idPaciente=$idPaciente"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['ultAnioApr'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function gettipoSangre($idPaciente)
	{
		
		if($result=$bd->insertarDatos("SELECT tipoSangre FROM paciente WHERE idPaciente=$idPaciente"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['tipoSangre'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function gettipoVinculacion($idPaciente)
	{
		
		if($result=$bd->insertarDatos("SELECT tipoVinculacion FROM paciente WHERE idPaciente=$idPaciente"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['tipoVinculacion'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getnumero($idPaciente)
	{
		
		if($result=$bd->insertarDatos("SELECT numero FROM paciente WHERE idPaciente=$idPaciente"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['numero'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getdireccion($idPaciente)
	{
		
		if($result=$bd->insertarDatos("SELECT direccion FROM paciente WHERE idPaciente=$idPaciente"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['direccion'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function gettelefono($idPaciente)
	{
		
		if($result=$bd->insertarDatos("SELECT telefono FROM paciente WHERE idPaciente=$idPaciente"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['telefono'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getnombreMadre($idPaciente)
	{
		
		if($result=$bd->insertarDatos("SELECT nombreMadre FROM paciente WHERE idPaciente=$idPaciente"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['nombreMadre'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getocuMad($idPaciente)
	{
		
		if($result=$bd->insertarDatos("SELECT ocuMad FROM paciente WHERE idPaciente=$idPaciente"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['ocuMad'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getnombrePad($idPaciente)
	{
		
		if($result=$bd->insertarDatos("SELECT nombrePad FROM paciente WHERE idPaciente=$idPaciente"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['nombrePad'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getocuPad($idPaciente)
	{
		
		if($result=$bd->insertarDatos("SELECT ocuPad FROM paciente WHERE idPaciente=$idPaciente"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['ocuPad'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function settipoIden($tipoIden,$idPaciente)
	{
		
		if($result=$bd->insertarDatos("UPDATE paciente SET tipoIden=$tipoIden WHERE idPaciente=$idPaciente"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setnombre1($nombre1,$idPaciente)
	{
		
		if($result=$bd->insertarDatos("UPDATE paciente SET nombre1=$nombre1 WHERE idPaciente=$idPaciente"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setnombre2($nombre2,$idPaciente)
	{
		
		if($result=$bd->insertarDatos("UPDATE paciente SET nombre2=$nombre2 WHERE idPaciente=$idPaciente"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setapellido1($apellido1,$idPaciente)
	{
		
		if($result=$bd->insertarDatos("UPDATE paciente SET apellido1=$apellido1 WHERE idPaciente=$idPaciente"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setapellido2($apellido2,$idPaciente)
	{
		
		if($result=$bd->insertarDatos("UPDATE paciente SET apellido2=$apellido2 WHERE idPaciente=$idPaciente"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setfechaNacimiento($fechaNacimiento,$idPaciente)
	{
		
		if($result=$bd->insertarDatos("UPDATE paciente SET fechaNacimiento=$fechaNacimiento WHERE idPaciente=$idPaciente"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setciudadNacimiento($ciudadNacimiento,$idPaciente)
	{
		
		if($result=$bd->insertarDatos("UPDATE paciente SET ciudadNacimiento=$ciudadNacimiento WHERE idPaciente=$idPaciente"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setgenero($genero,$idPaciente)
	{
		
		if($result=$bd->insertarDatos("UPDATE paciente SET genero=$genero WHERE idPaciente=$idPaciente"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setescolaridad($escolaridad,$idPaciente)
	{
		
		if($result=$bd->insertarDatos("UPDATE paciente SET escolaridad=$escolaridad WHERE idPaciente=$idPaciente"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setultAnioApr($ultAnioApr,$idPaciente)
	{
		
		if($result=$bd->insertarDatos("UPDATE paciente SET ultAnioApr=$ultAnioApr WHERE idPaciente=$idPaciente"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function settipoSangre($tipoSangre,$idPaciente)
	{
		
		if($result=$bd->insertarDatos("UPDATE paciente SET tipoSangre=$tipoSangre WHERE idPaciente=$idPaciente"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function settipoVinculacion($tipoVinculacion,$idPaciente)
	{
		
		if($result=$bd->insertarDatos("UPDATE paciente SET tipoVinculacion=$tipoVinculacion WHERE idPaciente=$idPaciente"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setnumero($numero,$idPaciente)
	{
		
		if($result=$bd->insertarDatos("UPDATE paciente SET numero=$numero WHERE idPaciente=$idPaciente"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setdireccion($direccion,$idPaciente)
	{
		
		if($result=$bd->insertarDatos("UPDATE paciente SET direccion=$direccion WHERE idPaciente=$idPaciente"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function settelefono($telefono,$idPaciente)
	{
		
		if($result=$bd->insertarDatos("UPDATE paciente SET telefono=$telefono WHERE idPaciente=$idPaciente"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setnombreMadre($nombreMadre,$idPaciente)
	{
		
		if($result=$bd->insertarDatos("UPDATE paciente SET nombreMadre=$nombreMadre WHERE idPaciente=$idPaciente"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setocuMad($ocuMad,$idPaciente)
	{
		
		if($result=$bd->insertarDatos("UPDATE paciente SET ocuMad=$ocuMad WHERE idPaciente=$idPaciente"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setnombrePad($nombrePad,$idPaciente)
	{
		
		if($result=$bd->insertarDatos("UPDATE paciente SET nombrePad=$nombrePad WHERE idPaciente=$idPaciente"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setocuPad($ocuPad,$idPaciente)
	{
		
		if($result=$bd->insertarDatos("UPDATE paciente SET ocuPad=$ocuPad WHERE idPaciente=$idPaciente"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function dibujarFormularioIngresopaciente()
	{
		include "../pages/paciente/ingresarPaciente.php";
	}

	function consultarTodospaciente()
	{
        include "../pages/paciente/listarPacientes.php";
	}

	function dibujarFormularioModificarpaciente($id)
	{
        include "../pages/paciente/modificarPaciente.php";    
	}
}
?>