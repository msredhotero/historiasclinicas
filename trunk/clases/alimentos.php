<?php
include ('../bd/bd.php');
class alimentos
{
	function insertarDatos($idAlimentos,$consulta,$alimento,$preferencia,$rechazo,$intolerados)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("INSERT INTO alimentos(idAlimentos,consulta,alimento,preferencia,rechazo,intolerados) VALUES ($idAlimentos,'$consulta','$alimento','$preferencia','$rechazo','$intolerados')"))
		{
			echo "Registro de datos exitoso";
		}
		else
		{
			echo "No se pudo hacer el registro de datos";
		}
	}

	function consultarDatos($idAlimentos)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("SELECT * FROM alimentos WHERE idAlimentos=$idAlimentos"))
		{
			echo "Consulta de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la consulta de datos";
		}
	}

	function eliminarDatos($idAlimentos)
	{
		$bd=BD::getInstance();
		if($bd->extraerDatos("DELETE FROM alimentos WHERE idAlimentos=$idAlimentos"))
		{
			echo "Eliminación exitosa";
		}
		else
		{
			echo "No se pudo realizar la eliminación de datos";
		}
	}

	function actualizarDatos($idAlimentos,$consulta,$alimento,$preferencia,$rechazo,$intolerados)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("UPDATE alimentos SET consulta='$consulta',alimento='$alimento',preferencia='$preferencia',rechazo='$rechazo',intolerados='$intolerados' WHERE idAlimentos=$idAlimentos"))
		{
			echo "Modificación de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la modificación de datos";
		}
	}

	function getconsulta($idAlimentos)
	{
		
		if($result=$bd->insertarDatos("SELECT consulta FROM alimentos WHERE idAlimentos=$idAlimentos"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['consulta'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getalimento($idAlimentos)
	{
		
		if($result=$bd->insertarDatos("SELECT alimento FROM alimentos WHERE idAlimentos=$idAlimentos"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['alimento'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getpreferencia($idAlimentos)
	{
		
		if($result=$bd->insertarDatos("SELECT preferencia FROM alimentos WHERE idAlimentos=$idAlimentos"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['preferencia'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getrechazo($idAlimentos)
	{
		
		if($result=$bd->insertarDatos("SELECT rechazo FROM alimentos WHERE idAlimentos=$idAlimentos"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['rechazo'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getintolerados($idAlimentos)
	{
		
		if($result=$bd->insertarDatos("SELECT intolerados FROM alimentos WHERE idAlimentos=$idAlimentos"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['intolerados'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function setconsulta($consulta,$idAlimentos)
	{
		
		if($result=$bd->insertarDatos("UPDATE alimentos SET consulta=$consulta WHERE idAlimentos=$idAlimentos"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setalimento($alimento,$idAlimentos)
	{
		
		if($result=$bd->insertarDatos("UPDATE alimentos SET alimento=$alimento WHERE idAlimentos=$idAlimentos"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setpreferencia($preferencia,$idAlimentos)
	{
		
		if($result=$bd->insertarDatos("UPDATE alimentos SET preferencia=$preferencia WHERE idAlimentos=$idAlimentos"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setrechazo($rechazo,$idAlimentos)
	{
		
		if($result=$bd->insertarDatos("UPDATE alimentos SET rechazo=$rechazo WHERE idAlimentos=$idAlimentos"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setintolerados($intolerados,$idAlimentos)
	{
		
		if($result=$bd->insertarDatos("UPDATE alimentos SET intolerados=$intolerados WHERE idAlimentos=$idAlimentos"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function dibujarFormularioIngresoalimentos()
	{
		echo "<form role='form'>";

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>idAlimentos</label>

                                <input type='email' class='form-control' id='idAlimentos' placeholder='idAlimentos'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>consulta</label>

                                <input type='email' class='form-control' id='consulta' placeholder='consulta'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>alimento</label>

                                <input type='email' class='form-control' id='alimento' placeholder='alimento'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>preferencia</label>

                                <input type='email' class='form-control' id='preferencia' placeholder='preferencia'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>rechazo</label>

                                <input type='email' class='form-control' id='rechazo' placeholder='rechazo'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>intolerados</label>

                                <input type='email' class='form-control' id='intolerados' placeholder='intolerados'>

                            </div>";

                

                echo "<button type='submit' class='btn btn-default' onclick='ingresarNuevoalimentos();return false;'>Ingresar</button>";

           echo "</form>";
	}

	function consultarTodosalimentos()
	{
		$bd=BD::getInstance();
		if($result=$bd->extraerDatos("SELECT * FROM alimentos"))
		{
			echo "<div class='panel panel-default'><div class='panel-heading'>Nombre de la Tabla</div> <table class='table'><thead><tr><th>idAlimentos</th><th>consulta</th><th>alimento</th><th>preferencia</th><th>rechazo</th><th>intolerados</th><th>Accion</th></tr></thead><tbody>";

        
			while($filas = mysql_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>".$filas['idAlimentos']."</td>";
				echo "<td>".$filas['consulta']."</td>";
				echo "<td>".$filas['alimento']."</td>";
				echo "<td>".$filas['preferencia']."</td>";
				echo "<td>".$filas['rechazo']."</td>";
				echo "<td>".$filas['intolerados']."</td>";
				echo "<td><p>

        <a href='#' class='btn btn-primary' role='button' onclick='dibujarFormularioModificaralimentos(".$filas['idAlimentos'].");return false;'>Editar</a>

        <a href='#' class='btn btn-primary' role='button' onclick='eliminaralimentos(".$filas['idAlimentos'].");return false;'>Eliminar</a>

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

	function dibujarFormularioModificaralimentos($id)
	{
		$bd=BD::getInstance();
		$result=$bd->extraerDatos("SELECT * FROM alimentos WHERE idAlimentos=".$id);
		$filas = mysql_fetch_array($result);
		echo "<form role='form'>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>idAlimentos</label>

                            <input class='form-control' type='hidden' id='idAlimentos' value='".$filas["idAlimentos"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>consulta</label>

                            <input type='email' class='form-control' id='consulta' value='".$filas["consulta"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>alimento</label>

                            <input type='email' class='form-control' id='alimento' value='".$filas["alimento"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>preferencia</label>

                            <input type='email' class='form-control' id='preferencia' value='".$filas["preferencia"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>rechazo</label>

                            <input type='email' class='form-control' id='rechazo' value='".$filas["rechazo"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>intolerados</label>

                            <input type='email' class='form-control' id='intolerados' value='".$filas["intolerados"]."'>

                        </div>";

                echo "<button type='submit' class='btn btn-default' type='submit' onclick='modificaralimentos($id);return false;'>Modificar</button></form>";

           
	}
}
?>