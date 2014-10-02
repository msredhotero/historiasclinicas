<?php
$bd=BD::getInstance();
?>
<div id="main">
	<div class="full_w">
		<div class="h_title">Eps - Lista de Eps</div>
		<table>
			<thead>
				<tr>
					<th scope="col">Identificación</th>
					<th scope="col">Código</th>
					<th scope="col">Nombre</th>
					<th scope="col" style="width: 65px;">Acción</th>
				</tr>
			</thead>
				
			<tbody>
            <?php
            $bd=BD::getInstance();
    		if($result=$bd->extraerDatos("SELECT * FROM eps"))
    		{
    			while($filas = mysql_fetch_array($result))
    			{
    				echo "<tr>";
                    echo "<td class='align-center'>".$filas['idEps']."</td>";
                    echo "<td class='align-center'>".$filas["codigo"]."</td>";
    				echo "<td class='align-center'>".$filas['nombre']."</td>";
                    echo <<<EOT
                    <td class='align-center'>
                        <a href="#" onclick='dibujarFormularioModificareps({$filas['idEps']});return false;' class="table-icon edit" title="Aplazar"></a>
                        <a href="#" onclick='eliminareps({$filas['idEps']});return false;' class="table-icon delete" title="Cancelar"></a>
					</td>                
EOT;
    			}
    		}
    		else
    		{
    			echo "No se pudo hacer la consulta de datos";
    		}
            ?>
			</tbody>
		</table>
	</div>
</div>