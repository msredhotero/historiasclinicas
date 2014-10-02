<?php
include ('../bd/bd.php');
class usuario
{
	function insertarDatos($idUsuario,$nombre1,$nombre2,$apellido1,$apellido2,$rol,$tarjeta,$contrasena)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("INSERT INTO usuario(idUsuario,nombre1,nombre2,apellido1,apellido2,rol,tarjeta,contrasena) VALUES ($idUsuario,'$nombre1','$nombre2','$apellido1','$apellido2','$rol','$tarjeta','$contrasena')"))
		{
			echo "Registro de datos exitoso";
		}
		else
		{
			echo "No se pudo hacer el registro de datos";
		}
	}

	function consultarDatos($idUsuario)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("SELECT * FROM usuario WHERE idUsuario=$idUsuario"))
		{
			echo "Consulta de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la consulta de datos";
		}
	}

	function eliminarDatos($idUsuario)
	{
		$bd=BD::getInstance();
		if($bd->extraerDatos("DELETE FROM usuario WHERE idUsuario=$idUsuario"))
		{
			echo "Eliminación exitosa";
		}
		else
		{
			echo "No se pudo realizar la eliminación de datos";
		}
	}

	function actualizarDatos($idUsuario,$nombre1,$nombre2,$apellido1,$apellido2,$rol,$tarjeta,$contrasena)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("UPDATE usuario SET nombre1='$nombre1',nombre2='$nombre2',apellido1='$apellido1',apellido2='$apellido2',rol='$rol',tarjeta='$tarjeta',contrasena='$contrasena' WHERE idUsuario=$idUsuario"))
		{
			echo "Modificación de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la modificación de datos";
		}
	}

	function getnombre1($idUsuario)
	{
		
		if($result=$bd->insertarDatos("SELECT nombre1 FROM usuario WHERE idUsuario=$idUsuario"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['nombre1'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getnombre2($idUsuario)
	{
		
		if($result=$bd->insertarDatos("SELECT nombre2 FROM usuario WHERE idUsuario=$idUsuario"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['nombre2'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getapellido1($idUsuario)
	{
		
		if($result=$bd->insertarDatos("SELECT apellido1 FROM usuario WHERE idUsuario=$idUsuario"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['apellido1'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getapellido2($idUsuario)
	{
		
		if($result=$bd->insertarDatos("SELECT apellido2 FROM usuario WHERE idUsuario=$idUsuario"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['apellido2'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getrol($idUsuario)
	{
		
		if($result=$bd->insertarDatos("SELECT rol FROM usuario WHERE idUsuario=$idUsuario"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['rol'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function gettarjeta($idUsuario)
	{
		
		if($result=$bd->insertarDatos("SELECT tarjeta FROM usuario WHERE idUsuario=$idUsuario"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['tarjeta'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getcontrasena($idUsuario)
	{
		
		if($result=$bd->insertarDatos("SELECT contrasena FROM usuario WHERE idUsuario=$idUsuario"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['contrasena'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function setnombre1($nombre1,$idUsuario)
	{
		
		if($result=$bd->insertarDatos("UPDATE usuario SET nombre1=$nombre1 WHERE idUsuario=$idUsuario"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setnombre2($nombre2,$idUsuario)
	{
		
		if($result=$bd->insertarDatos("UPDATE usuario SET nombre2=$nombre2 WHERE idUsuario=$idUsuario"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setapellido1($apellido1,$idUsuario)
	{
		
		if($result=$bd->insertarDatos("UPDATE usuario SET apellido1=$apellido1 WHERE idUsuario=$idUsuario"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setapellido2($apellido2,$idUsuario)
	{
		
		if($result=$bd->insertarDatos("UPDATE usuario SET apellido2=$apellido2 WHERE idUsuario=$idUsuario"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setrol($rol,$idUsuario)
	{
		
		if($result=$bd->insertarDatos("UPDATE usuario SET rol=$rol WHERE idUsuario=$idUsuario"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function settarjeta($tarjeta,$idUsuario)
	{
		
		if($result=$bd->insertarDatos("UPDATE usuario SET tarjeta=$tarjeta WHERE idUsuario=$idUsuario"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setcontrasena($contrasena,$idUsuario)
	{
		
		if($result=$bd->insertarDatos("UPDATE usuario SET contrasena=$contrasena WHERE idUsuario=$idUsuario"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function dibujarFormularioIngresousuario()
	{
        include "../pages/usuarios/ingresarUsuario.php";
	}

	function consultarTodosusuario()
	{
		include "../pages/usuarios/listarUsuarios.php";
	}

	function dibujarFormularioModificarusuario($id)
	{
        include "../pages/usuarios/modificarUsuario.php";   
	}
    
    function ingresar($identificacion,$contrasena)
	{
		$bd=BD::getInstance();
        $encontro = "false";
        
		if($result=$bd->extraerDatos("SELECT * FROM usuario WHERE (idUsuario=$identificacion )"))
		{
            while($usuario = mysql_fetch_array($result))
			{
			 //echo $usuario["contrasena"]."==".$contrasena;
                if($usuario["contrasena"]==$contrasena)
                {
                    session_start();
                    $_SESSION["usuario"]= $identificacion;
                    $_SESSION["nombre"] = $usuario["nombre1"]." ".$usuario["nombre2"]." ".$usuario["apellido1"]." ".$usuario["apellido2"];
                    $_SESSION["rol"]= $usuario["rol"];

                    $encontro = "true";
                }
			}
		}
		else
		{
			echo "No se pudo hacer la consulta de datos";
		}
        echo $encontro;
	}
    
    function salir()
    {
        session_start();
        $_SESSION["usuario"]= "0";
        $_SESSION["nombre"] = "0";
        $_SESSION["rol"]= "0";
        session_destroy();
    }
    
    function existePaciente($identificacion)
	{
		$bd=BD::getInstance();
        $encontro = "false";
        //echo "SELECT * FROM paciente WHERE (idPaciente=$identificacion )";
		if($result=$bd->extraerDatos("SELECT * FROM paciente WHERE (idPaciente=$identificacion )"))
		{
            while($usuario = mysql_fetch_array($result))
			{
                $encontro = "true";
			}
		}
		else
		{
			echo "No se pudo hacer la consulta de datos";
		}
        echo $encontro;
	}
}

?>