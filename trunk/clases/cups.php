<?php
include ('../bd/bd.php');
class cups
{
	function insertarDatos($codigo,$nombre)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("INSERT INTO cups(idCups,codigo,nombre) VALUES ('','$codigo','$nombre')"))
		{
			echo "Registro de datos exitoso";
		}
		else
		{
			echo "No se pudo hacer el registro de datos";
		}
	}
	
	function consultarDatos($idCups)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("SELECT * FROM cups WHERE idCups=$idCups"))
		{
			echo "Consulta de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la consulta de datos";
		}
	}
	
	function eliminarDatos($idCups)
	{
		$bd=BD::getInstance();
		if($bd->extraerDatos("DELETE FROM cups WHERE idCups=$idCups"))
		{
			echo "Eliminación exitosa";
		}
		else
		{
			echo "No se pudo realizar la eliminación de datos";
		}
	}
	
	
	function actualizarDatos($idCups,$codigo,$nombre)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("UPDATE cups SET codigo='$codigo',nombre='$nombre' WHERE idCups=$idCups"))
		{
			echo "Modificación de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la modificación de datos";
		}
	}
	
	
	function getcodigo($idCups)
	{
		
		if($result=$bd->insertarDatos("SELECT codigo FROM cups WHERE idCups=$idCups"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['codigo'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getnombre($idCups)
	{
		
		if($result=$bd->insertarDatos("SELECT nombre FROM cups WHERE idCups=$idCups"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['nombre'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}
	
	
	function setcodigo($codigo,$idCups)
	{
		
		if($result=$bd->insertarDatos("UPDATE cups SET codigo=$codigo WHERE idCups=$idCups"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setnombre($nombre,$idCups)
	{
		
		if($result=$bd->insertarDatos("UPDATE cups SET nombre=$nombre WHERE idCups=$idCups"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}
	
	function listarCups()
	{

		$bd=BD::getInstance();

		echo '<div id="main">
			<div class="full_w">
				<div class="h_title">Cups - Lista de Cups</div>
				<table>
					<thead>
						<tr>
							<th scope="col">Codigo</th>
							<th scope="col">Nombre</th>
							<th scope="col" style="width: 65px;">Acción</th>
						</tr>
					</thead>
						
					<tbody>';
					
					
					if($result=$bd->extraerDatos("SELECT * FROM cups"))
					{
						while($filas = mysql_fetch_array($result))
						{
						 
							echo "<tr>";
		
							echo "<td class='align-center'>".$filas["codigo"]."</td>";
							echo "<td class='align-center'>".$filas["nombre"]."</td>";

							echo "<td class='align-center'>
                        <a href='#' onclick='dibujarFormularioModificarCups(".$filas['idCUPS'].");return false;' class='table-icon edit' title='Aplazar'></a>
                        <a href='#' onclick='eliminarCups(".$filas['idCUPS'].");return false;' class='table-icon delete' title='Cancelar'></a>
					</td>";
						}
					}
					else
					{
						echo "No se pudo hacer la consulta de datos";
					}
					
				echo '			</tbody>
							</table>
						</div>
					</div>';
		
	}
	
	function dibujarFormularioModificarCups($id)
	{

		$bd=BD::getInstance();
		$result=$bd->extraerDatos("SELECT * FROM cups WHERE idCups=".$id);
		$filas = mysql_fetch_array($result);

		echo '<div id="main">
			<div class="full_w">
				<div class="h_title">Cups - Modificar Cups</div>
				<form action="" method="post">

					<div class="element">
						<label for="name">Codigo<span class="red">(Obligatorio)</span></label>
						<input id="codigo" name="codigo" class="text err" value="'.$filas["codigo"].'" />
					</div>
					<div class="element">
						<label for="name">Nombre <span class="red">(Obligatorio)</span></label>
						<input id="nombre" name="nombre" class="text err" value="'.$filas["nombre"].'" />
					</div>';
				
					
					echo '<div class="entry">
						<input type="hidden" name="idCups" id="idCups" value="'.$id.'" />
						<button type="submit" class="add" onclick="modificarcups('.$id.');return false;">Modificar</button>
					</div>
				</form>
			</div>
		</div>';
	}
	
	
	function dibujarFormularioCups()
	{
            
            echo '<div id="main">
                    <div class="full_w">
                        <div class="h_title">Cups - Nuevo Cups</div>';
            
		echo "<form action='' method='post'>";

                                   

                    echo "<div class='element'>

                                <label for='codigo'>Codigo<span class='red'>(Obligatorio)</span></label>

                                <input type='text' class='text err' id='codigo' placeholder='codigo'>

                            </div>";

                

                    echo "<div class='element'>

                                <label for='nombre'>Nombre<span class='red'>(Obligatorio)</span></label>

                                <input type='text' class='text err' id='nombre' placeholder='nombre'>

                            </div>";

                

                echo "<button type='submit' class='btn btn-default' onclick='ingresarNuevoCups();return false;'>Ingresar</button>";

           echo "</form>";
           echo "</div></div></div>";
	}
}
?>