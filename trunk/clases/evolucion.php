<?php
include ('../bd/bd.php');
class evolucion
{
	function insertarDatos($idEvolucion,$consulta,$evolucion,$diag1,$diag2,$diag3,$sesion)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("INSERT INTO evolucion(consulta,evolucion,diag1,diag2,diag3,sesion) VALUES ($consulta,'$evolucion','$diag1','$diag2','$diag3','$sesion')"))
		{
            $bd->insertarDatos("UPDATE consulta SET confirmada=2 WHERE idConsulta=".$consulta);
			echo "Registro de datos exitoso";
		}
		else
		{
			echo "No se pudo hacer el registro de datos";
		}
	}

	function consultarDatos($idEvolucion)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("SELECT * FROM evolucion WHERE idEvolucion=$idEvolucion"))
		{
			echo "Consulta de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la consulta de datos";
		}
	}

	function eliminarDatos($idEvolucion)
	{
		$bd=BD::getInstance();
		if($bd->extraerDatos("DELETE FROM evolucion WHERE idEvolucion=$idEvolucion"))
		{
			echo "Eliminación exitosa";
		}
		else
		{
			echo "No se pudo realizar la eliminación de datos";
		}
	}

	function actualizarDatos($idEvolucion,$consulta,$evolucion,$diag1,$diag2,$diag3,$sesion)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("UPDATE evolucion SET consulta='$consulta',evolucion='$evolucion',diag1='$diag1',diag2='$diag2',diag3='$diag3',sesion='$sesion' WHERE idEvolucion=$idEvolucion"))
		{
			echo "Modificación de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la modificación de datos";
		}
	}

	function getconsulta($idEvolucion)
	{
		
		if($result=$bd->insertarDatos("SELECT consulta FROM evolucion WHERE idEvolucion=$idEvolucion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['consulta'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getevolucion($idEvolucion)
	{
		
		if($result=$bd->insertarDatos("SELECT evolucion FROM evolucion WHERE idEvolucion=$idEvolucion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['evolucion'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getdiag1($idEvolucion)
	{
		
		if($result=$bd->insertarDatos("SELECT diag1 FROM evolucion WHERE idEvolucion=$idEvolucion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['diag1'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getdiag2($idEvolucion)
	{
		
		if($result=$bd->insertarDatos("SELECT diag2 FROM evolucion WHERE idEvolucion=$idEvolucion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['diag2'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getdiag3($idEvolucion)
	{
		
		if($result=$bd->insertarDatos("SELECT diag3 FROM evolucion WHERE idEvolucion=$idEvolucion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['diag3'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getsesion($idEvolucion)
	{
		
		if($result=$bd->insertarDatos("SELECT sesion FROM evolucion WHERE idEvolucion=$idEvolucion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['sesion'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function setconsulta($consulta,$idEvolucion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evolucion SET consulta=$consulta WHERE idEvolucion=$idEvolucion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setevolucion($evolucion,$idEvolucion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evolucion SET evolucion=$evolucion WHERE idEvolucion=$idEvolucion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setdiag1($diag1,$idEvolucion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evolucion SET diag1=$diag1 WHERE idEvolucion=$idEvolucion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setdiag2($diag2,$idEvolucion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evolucion SET diag2=$diag2 WHERE idEvolucion=$idEvolucion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setdiag3($diag3,$idEvolucion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evolucion SET diag3=$diag3 WHERE idEvolucion=$idEvolucion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setsesion($sesion,$idEvolucion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evolucion SET sesion=$sesion WHERE idEvolucion=$idEvolucion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function dibujarFormularioIngresoevolucion()
	{
		echo "<form role='form'>";
                    echo "<div class='form-group'>
                                <label for='ejemplo_email_1'>idEvolucion</label>
                                <input type='email' class='form-control' id='idEvolucion' placeholder='idEvolucion'>
                            </div>";
                
                    echo "<div class='form-group'>
                                <label for='ejemplo_email_1'>consulta</label>
                                <input type='email' class='form-control' id='consulta' placeholder='consulta'>
                            </div>";
                
                    echo "<div class='form-group'>
                                <label for='ejemplo_email_1'>evolucion</label>
                                <input type='email' class='form-control' id='evolucion' placeholder='evolucion'>
                            </div>";
                
                    echo "<div class='form-group'>
                                <label for='ejemplo_email_1'>diag1</label>
                                <input type='email' class='form-control' id='diag1' placeholder='diag1'>
                            </div>";
                
                    echo "<div class='form-group'>
                                <label for='ejemplo_email_1'>diag2</label>
                                <input type='email' class='form-control' id='diag2' placeholder='diag2'>
                            </div>";
                
                    echo "<div class='form-group'>
                                <label for='ejemplo_email_1'>diag3</label>
                                <input type='email' class='form-control' id='diag3' placeholder='diag3'>
                            </div>";
                
                    echo "<div class='form-group'>
                                <label for='ejemplo_email_1'>sesion</label>
                                <input type='email' class='form-control' id='sesion' placeholder='sesion'>
                            </div>";
                
                echo "<button type='submit' class='btn btn-default' onclick='ingresarNuevoevolucion();return false;'>Ingresar</button>";
           echo "</form>";
	}

	function consultarTodosevolucion()
	{
		$bd=BD::getInstance();
		if($result=$bd->extraerDatos("SELECT * FROM evolucion"))
		{
			echo "<div class='panel panel-default'><div class='panel-heading'>Nombre de la Tabla</div> <table class='table'><thead><tr><th>idEvolucion</th><th>consulta</th><th>evolucion</th><th>diag1</th><th>diag2</th><th>diag3</th><th>sesion</th><th>Accion</th></tr></thead><tbody>";
        
			while($filas = mysql_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>".$filas['idEvolucion']."</td>";
				echo "<td>".$filas['consulta']."</td>";
				echo "<td>".$filas['evolucion']."</td>";
				echo "<td>".$filas['diag1']."</td>";
				echo "<td>".$filas['diag2']."</td>";
				echo "<td>".$filas['diag3']."</td>";
				echo "<td>".$filas['sesion']."</td>";
				echo "<td><p>
        <a href='#' class='btn btn-primary' role='button' onclick='dibujarFormularioModificarevolucion(".$filas['idEvolucion'].");return false;'>Editar</a>
        <a href='#' class='btn btn-primary' role='button' onclick='eliminarevolucion(".$filas['idEvolucion'].");return false;'>Eliminar</a>
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

	function dibujarFormularioModificarevolucion($id)
	{
		$bd=BD::getInstance();
		$result=$bd->extraerDatos("SELECT * FROM evolucion WHERE idEvolucion=".$id);
		$filas = mysql_fetch_array($result);
		echo "<form role='form'>";echo "
                        <div class='form-group'>
                            <label for='ejemplo_email_1'>idEvolucion</label>
                            <input class='form-control' type='hidden' id='idEvolucion' value='".$filas["idEvolucion"]."'>
                        </div>";echo "
                        <div class='form-group'>
                            <label for='ejemplo_email_1'>consulta</label>
                            <input type='email' class='form-control' id='consulta' value='".$filas["consulta"]."'>
                        </div>";echo "
                        <div class='form-group'>
                            <label for='ejemplo_email_1'>evolucion</label>
                            <input type='email' class='form-control' id='evolucion' value='".$filas["evolucion"]."'>
                        </div>";echo "
                        <div class='form-group'>
                            <label for='ejemplo_email_1'>diag1</label>
                            <input type='email' class='form-control' id='diag1' value='".$filas["diag1"]."'>
                        </div>";echo "
                        <div class='form-group'>
                            <label for='ejemplo_email_1'>diag2</label>
                            <input type='email' class='form-control' id='diag2' value='".$filas["diag2"]."'>
                        </div>";echo "
                        <div class='form-group'>
                            <label for='ejemplo_email_1'>diag3</label>
                            <input type='email' class='form-control' id='diag3' value='".$filas["diag3"]."'>
                        </div>";echo "
                        <div class='form-group'>
                            <label for='ejemplo_email_1'>sesion</label>
                            <input type='email' class='form-control' id='sesion' value='".$filas["sesion"]."'>
                        </div>";
                echo "<button type='submit' class='btn btn-default' type='submit' onclick='modificarevolucion($id);return false;'>Modificar</button></form>";
           
	}
}
?>