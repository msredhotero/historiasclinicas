<?php
include ('../bd/bd.php');
class municipio
{
	function insertarDatos($idMunicipio,$codigo,$nombre,$departamento)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("INSERT INTO municipio(idMunicipio,codigo,nombre,departamento) VALUES ($idMunicipio,'$codigo','$nombre','$departamento')"))
		{
			echo "Registro de datos exitoso";
		}
		else
		{
			echo "No se pudo hacer el registro de datos";
		}
	}

	function consultarDatos($idMunicipio)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("SELECT * FROM municipio WHERE idMunicipio=$idMunicipio"))
		{
			echo "Consulta de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la consulta de datos";
		}
	}

	function eliminarDatos($idMunicipio)
	{
		$bd=BD::getInstance();
		if($bd->extraerDatos("DELETE FROM municipio WHERE idMunicipio=$idMunicipio"))
		{
			echo "Eliminación exitosa";
		}
		else
		{
			echo "No se pudo realizar la eliminación de datos";
		}
	}

	function actualizarDatos($idMunicipio,$codigo,$nombre,$departamento)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("UPDATE municipio SET codigo='$codigo',nombre='$nombre',departamento='$departamento' WHERE idMunicipio=$idMunicipio"))
		{
			echo "Modificación de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la modificación de datos";
		}
	}

	function getcodigo($idMunicipio)
	{
		
		if($result=$bd->insertarDatos("SELECT codigo FROM municipio WHERE idMunicipio=$idMunicipio"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['codigo'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getnombre($idMunicipio)
	{
		
		if($result=$bd->insertarDatos("SELECT nombre FROM municipio WHERE idMunicipio=$idMunicipio"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['nombre'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getdepartamento($idMunicipio)
	{
		
		if($result=$bd->insertarDatos("SELECT departamento FROM municipio WHERE idMunicipio=$idMunicipio"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['departamento'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function setcodigo($codigo,$idMunicipio)
	{
		
		if($result=$bd->insertarDatos("UPDATE municipio SET codigo=$codigo WHERE idMunicipio=$idMunicipio"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setnombre($nombre,$idMunicipio)
	{
		
		if($result=$bd->insertarDatos("UPDATE municipio SET nombre=$nombre WHERE idMunicipio=$idMunicipio"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setdepartamento($departamento,$idMunicipio)
	{
		
		if($result=$bd->insertarDatos("UPDATE municipio SET departamento=$departamento WHERE idMunicipio=$idMunicipio"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function dibujarFormularioIngresomunicipio()
	{
		echo "<form role='form'>";

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>idMunicipio</label>

                                <input type='email' class='form-control' id='idMunicipio' placeholder='idMunicipio'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>codigo</label>

                                <input type='email' class='form-control' id='codigo' placeholder='codigo'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>nombre</label>

                                <input type='email' class='form-control' id='nombre' placeholder='nombre'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>departamento</label>

                                <input type='email' class='form-control' id='departamento' placeholder='departamento'>

                            </div>";

                

                echo "<button type='submit' class='btn btn-default' onclick='ingresarNuevomunicipio();return false;'>Ingresar</button>";

           echo "</form>";
	}

	function consultarTodosmunicipio()
	{
		$bd=BD::getInstance();
		if($result=$bd->extraerDatos("SELECT * FROM municipio"))
		{
			echo "<div class='panel panel-default'><div class='panel-heading'>Nombre de la Tabla</div> <table class='table'><thead><tr><th>idMunicipio</th><th>codigo</th><th>nombre</th><th>departamento</th><th>Accion</th></tr></thead><tbody>";

        
			while($filas = mysql_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>".$filas['idMunicipio']."</td>";
				echo "<td>".$filas['codigo']."</td>";
				echo "<td>".$filas['nombre']."</td>";
				echo "<td>".$filas['departamento']."</td>";
				echo "<td><p>

        <a href='#' class='btn btn-primary' role='button' onclick='dibujarFormularioModificarmunicipio(".$filas['idMunicipio'].");return false;'>Editar</a>

        <a href='#' class='btn btn-primary' role='button' onclick='eliminarmunicipio(".$filas['idMunicipio'].");return false;'>Eliminar</a>

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

	function dibujarFormularioModificarmunicipio($id)
	{
		$bd=BD::getInstance();
		$result=$bd->extraerDatos("SELECT * FROM municipio WHERE idMunicipio=".$id);
		$filas = mysql_fetch_array($result);
		echo "<form role='form'>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>idMunicipio</label>

                            <input class='form-control' type='hidden' id='idMunicipio' value='".$filas["idMunicipio"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>codigo</label>

                            <input type='email' class='form-control' id='codigo' value='".$filas["codigo"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>nombre</label>

                            <input type='email' class='form-control' id='nombre' value='".$filas["nombre"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>departamento</label>

                            <input type='email' class='form-control' id='departamento' value='".$filas["departamento"]."'>

                        </div>";

                echo "<button type='submit' class='btn btn-default' type='submit' onclick='modificarmunicipio($id);return false;'>Modificar</button></form>";

           
	}
    
    function cargarCiudades($id)
	{
		$bd=BD::getInstance();
        //echo "SELECT * FROM municipio WHERE departamento=".$id;
		if($result=$bd->extraerDatos("SELECT * FROM municipio WHERE departamento=".$id))
		{
            echo "<select id='ciudadNacimiento'>";
			while($filas = mysql_fetch_array($result))
			{
				echo "<option value='".$filas["codigo"]."'>".$filas["nombre"]."</option>";
			}
            echo '</select>';
		}
		else
		{
			echo "No se pudo hacer la consulta de datos";
		}
	}
}
?>