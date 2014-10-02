<?php
$bd=BD::getInstance();
?>
<div id="main">
	<div class="full_w">
		<div class="h_title">Usuario - Lista de Usuarios</div>
		<table>
			<thead>
				<tr>
					<th scope="col">Identificación</th>
					<th scope="col">Nombre</th>
					<th scope="col">Rol</th>
                    <th scope="col">Tarjeta Prof.</th>
					<th scope="col" style="width: 65px;">Acción</th>
				</tr>
			</thead>
				
			<tbody>
            <?php
            $bd=BD::getInstance();
    		if($result=$bd->extraerDatos("SELECT * FROM usuario"))
    		{
    			while($filas = mysql_fetch_array($result))
    			{
                    $result2=$bd->extraerDatos("SELECT * FROM rol WHERE idRol=".$filas['rol']);
                    $filas2 = mysql_fetch_array($result2);
                 
    				echo "<tr>";

                    echo "<td class='align-center'>".$filas['idUsuario']."</td>";
    				echo "<td class='align-center'>".$filas["nombre1"]." ".$filas["nombre2"]." ".$filas["apellido1"]." ".$filas["apellido2"]."</td>";
                    echo "<td class='align-center'>".$filas2["nombre"]."</td>";
    				echo "<td class='align-center'>".$filas['tarjeta']."</td>";
                    echo <<<EOT
                    <td class='align-center'>
                        <a href="#" onclick='dibujarFormularioModificarusuario({$filas['idUsuario']});return false;' class="table-icon edit" title="Aplazar"></a>
                        <a href="#" onclick='eliminarusuario({$filas['idUsuario']});return false;' class="table-icon delete" title="Cancelar"></a>
					</td>                
EOT;
    			}
    		}
    		else
    		{
    			echo "No se pudo hacer la consulta de datos";
    		}
            ?>
            <!--

				<tr>
					<td class="align-center">2</td>
					<td>Home</td>
					<td>Pawel B.</td>
					<td>22-03-2012</td>
					<td>-</td>
					<td>
						<a href="#" class="table-icon edit" title="Edit"></a>
						<a href="#" class="table-icon archive" title="Archive"></a>
						<a href="#" class="table-icon delete" title="Delete"></a>
					</td>
				</tr>
				<tr>
					<td class="align-center">3</td>
					<td>Our offer</td>
					<td>Pawel B.</td>
					<td>22-03-2012</td>
					<td>-</td>
					<td>
						<a href="#" class="table-icon edit" title="Edit"></a>
						<a href="#" class="table-icon archive" title="Archive"></a>
						<a href="#" class="table-icon delete" title="Delete"></a>
					</td>
				</tr>
					
				<tr>
					<td class="align-center">5</td>
					<td>About</td>
					<td>Admin</td>
					<td>23-03-2012</td>
					<td>-</td>
					<td>
						<a href="#" class="table-icon edit" title="Edit"></a>
						<a href="#" class="table-icon archive" title="Archive"></a>
						<a href="#" class="table-icon delete" title="Delete"></a>
					</td>
				</tr>
					
				<tr>
					<td class="align-center">12</td>
					<td>Contact</td>
					<td>Admin</td>
					<td>25-03-2012</td>
					<td>-</td>
					<td>
						<a href="#" class="table-icon edit" title="Edit"></a>
						<a href="#" class="table-icon archive" title="Archive"></a>
						<a href="#" class="table-icon delete" title="Delete"></a>
					</td>
				</tr>						
				<tr>
					<td class="align-center">114</td>
					<td>Portfolio</td>
					<td>Pawel B.</td>
					<td>22-03-2012</td>
					<td>-</td>
					<td>
						<a href="#" class="table-icon edit" title="Edit"></a>
						<a href="#" class="table-icon archive" title="Archive"></a>
						<a href="#" class="table-icon delete" title="Delete"></a>
					</td>
				</tr>
					
				<tr>
					<td class="align-center">116</td>
					<td>Clients</td>
					<td>Admin</td>
					<td>23-03-2012</td>
					<td>-</td>
					<td>
						<a href="#" class="table-icon edit" title="Edit"></a>
						<a href="#" class="table-icon archive" title="Archive"></a>
						<a href="#" class="table-icon delete" title="Delete"></a>
					</td>
				</tr>
					
				<tr>
					<td class="align-center">131</td>
					<td>Customer reviews</td>
					<td>Admin</td>
					<td>25-03-2012</td>
					<td>-</td>
					<td>
						<a href="#" class="table-icon edit" title="Edit"></a>
						<a href="#" class="table-icon archive" title="Archive"></a>
						<a href="#" class="table-icon delete" title="Delete"></a>
					</td>
				</tr>
-->
			</tbody>
		</table>
	</div>
</div>