<?php
$bd=BD::getInstance();
?>
<div id="main">
	<div class="full_w">
		<div class="h_title">Cita Médica - Confirmar Cita</div>
		<table>
			<thead>
				<tr>
					<th scope="col">Cita</th>
					<th scope="col">Identificación</th>
					<th scope="col">Nombre</th>
					<th scope="col">Tipo Cita</th>
					<th scope="col">Profesional</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Hora</th>
					<th scope="col" style="width: 65px;">Modify</th>
				</tr>
			</thead>
				
			<tbody>
            <?php
            $bd=BD::getInstance();
    		if($result=$bd->extraerDatos("SELECT * FROM consulta WHERE fecha='".date("Y-m-d")."'"))
    		{
    			while($filas = mysql_fetch_array($result))
    			{
    				echo "<tr>";
    				echo "<td class='align-center'>".$filas['idConsulta']."</td>";
    				echo "<td class='align-center'>".$filas['paciente']."</td>";
    				echo "<td class='align-center'>".$filas['regimen']."</td>";
    				echo "<td class='align-center'>".$filas['eps']."</td>";
                    echo "<td class='align-center'>".$filas['eps']."</td>";
    				echo "<td class='align-center'>".$filas['fecha']."</td>";
    				echo "<td class='align-center'>".$filas['hora']."</td>";
                    echo <<<EOT
                    <td>
                        <a href="#" onclick='dibujarFormularioModificarconsulta({$filas['idConsulta']});return false;' class="table-icon edit" title="Aplazar"></a>
                        <a href="#" onclick='eliminarconsulta({$filas['idConsulta']});return false;' class="table-icon delete" title="Cancelar"></a>
					</td>                
EOT;
    			}
    		}
    		else
    		{
    			echo "No se pudo hacer la consulta de datos";
    		}
            ?>
            
				<tr>
					<td class="align-center">2</td>
					<td>Home</td>
					<td>Paweł B.</td>
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
					<td>Paweł B.</td>
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
					<td>Paweł B.</td>
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
			</tbody>
		</table>
	</div>
</div>