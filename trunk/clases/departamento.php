<?php
include ('../bd/bd.php');
class departamento
{
	function insertarDatos($idDepartamento,$codigo,$nombre)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("INSERT INTO departamento(idDepartamento,codigo,nombre) VALUES ($idDepartamento,'$codigo','$nombre')"))
		{
			echo "Registro de datos exitoso";
		}
		else
		{
			echo "No se pudo hacer el registro de datos";
		}
	}

	function consultarDatos($idDepartamento)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("SELECT * FROM departamento WHERE idDepartamento=$idDepartamento"))
		{
			echo "Consulta de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la consulta de datos";
		}
	}

	function eliminarDatos($idDepartamento)
	{
		$bd=BD::getInstance();
		if($bd->extraerDatos("DELETE FROM departamento WHERE idDepartamento=$idDepartamento"))
		{
			echo "Eliminación exitosa";
		}
		else
		{
			echo "No se pudo realizar la eliminación de datos";
		}
	}

	function actualizarDatos($idDepartamento,$codigo,$nombre)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("UPDATE departamento SET codigo='$codigo',nombre='$nombre' WHERE idDepartamento=$idDepartamento"))
		{
			echo "Modificación de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la modificación de datos";
		}
	}

	function getcodigo($idDepartamento)
	{
		
		if($result=$bd->insertarDatos("SELECT codigo FROM departamento WHERE idDepartamento=$idDepartamento"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['codigo'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getnombre($idDepartamento)
	{
		
		if($result=$bd->insertarDatos("SELECT nombre FROM departamento WHERE idDepartamento=$idDepartamento"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['nombre'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function setcodigo($codigo,$idDepartamento)
	{
		
		if($result=$bd->insertarDatos("UPDATE departamento SET codigo=$codigo WHERE idDepartamento=$idDepartamento"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setnombre($nombre,$idDepartamento)
	{
		
		if($result=$bd->insertarDatos("UPDATE departamento SET nombre=$nombre WHERE idDepartamento=$idDepartamento"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function dibujarFormularioIngresodepartamento()
	{
		echo "<form role='form'>";

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>idDepartamento</label>

                                <input type='email' class='form-control' id='idDepartamento' placeholder='idDepartamento'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>codigo</label>

                                <input type='email' class='form-control' id='codigo' placeholder='codigo'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>nombre</label>

                                <input type='email' class='form-control' id='nombre' placeholder='nombre'>

                            </div>";

                

                echo "<button type='submit' class='btn btn-default' onclick='ingresarNuevodepartamento();return false;'>Ingresar</button>";

           echo "</form>";
	}

	function consultarTodosdepartamento()
	{
		$bd=BD::getInstance();
		if($result=$bd->extraerDatos("SELECT * FROM departamento"))
		{
			echo "<div class='panel panel-default'><div class='panel-heading'>Nombre de la Tabla</div> <table class='table'><thead><tr><th>idDepartamento</th><th>codigo</th><th>nombre</th><th>Accion</th></tr></thead><tbody>";

        
			while($filas = mysql_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>".$filas['idDepartamento']."</td>";
				echo "<td>".$filas['codigo']."</td>";
				echo "<td>".$filas['nombre']."</td>";
				echo "<td><p>

        <a href='#' class='btn btn-primary' role='button' onclick='dibujarFormularioModificardepartamento(".$filas['idDepartamento'].");return false;'>Editar</a>

        <a href='#' class='btn btn-primary' role='button' onclick='eliminardepartamento(".$filas['idDepartamento'].");return false;'>Eliminar</a>

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

	function dibujarFormularioModificardepartamento($id)
	{
		$bd=BD::getInstance();
		$result=$bd->extraerDatos("SELECT * FROM departamento WHERE idDepartamento=".$id);
		$filas = mysql_fetch_array($result);
		echo "<form role='form'>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>idDepartamento</label>

                            <input class='form-control' type='hidden' id='idDepartamento' value='".$filas["idDepartamento"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>codigo</label>

                            <input type='email' class='form-control' id='codigo' value='".$filas["codigo"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>nombre</label>

                            <input type='email' class='form-control' id='nombre' value='".$filas["nombre"]."'>

                        </div>";

                echo "<button type='submit' class='btn btn-default' type='submit' onclick='modificardepartamento($id);return false;'>Modificar</button></form>";

           
	}
}
?>