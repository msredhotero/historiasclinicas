<?php
include ('../bd/bd.php');
class cie10
{
	function cargarDiagnosticos($input,$nInput)
	{
		$bd=BD::getInstance();
		//echo "SELECT * FROM cie10 WHERE (nombre LIKE %".$input."% OR codigo LIKE %".$input."%)";
        $result=$bd->extraerDatos("SELECT * FROM cie10 WHERE (nombre LIKE '%".$input."%' OR codigo LIKE '%".$input."%')");
		
        echo "<select id='select".$nInput."'  onchange='colocarDiagnostico(this.value,\"".$nInput."\");'>";
        echo "<option value='0'>Seleccione un diagnóstico</option>";
        while($filas = mysql_fetch_array($result))
        {
            echo "<option value='".$filas["codigo"]."'>".$filas["nombre"]."</option>";
            echo $filas["nombre"]."<br>";
        }
		echo "</select>";
	}
}
?>