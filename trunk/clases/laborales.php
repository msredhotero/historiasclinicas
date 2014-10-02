<?php
include ('../bd/bd.php');
class laborales
{
	function insertarDatos($idLaborales,$consulta,$empresa,$cargo,$tiempo,$motRet)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("INSERT INTO laborales(consulta,empresa,cargo,tiempo,motRet) VALUES ('$consulta','$empresa','$cargo','$tiempo','$motRet')"))
		{
			echo "Registro de datos exitoso";
		}
		else
		{
			echo "No se pudo hacer el registro de datos";
		}
	}

	function consultarDatos($idLaborales)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("SELECT * FROM laborales WHERE idLaborales=$idLaborales"))
		{
			echo "Consulta de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la consulta de datos";
		}
	}

	function eliminarDatos($idLaborales)
	{
		$bd=BD::getInstance();
		$result2=$bd->extraerDatos("SELECT * FROM laborales WHERE idLaborales=".$idLaborales);
		$filas2 = mysql_fetch_array($result2);
		if($bd->extraerDatos("DELETE FROM laborales WHERE idLaborales=$idLaborales"))
		{
			echo $filas2["consulta"];
		}
		else
		{
			echo "No se pudo realizar la eliminación de datos";
		}
	}

	function actualizarDatos($idLaborales,$consulta,$empresa,$cargo,$tiempo,$motRet)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("UPDATE laborales SET consulta='$consulta',empresa='$empresa',cargo='$cargo',tiempo='$tiempo',motRet='$motRet' WHERE idLaborales=$idLaborales"))
		{
			echo "Modificación de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la modificación de datos";
		}
	}

	function getconsulta($idLaborales)
	{
		
		if($result=$bd->insertarDatos("SELECT consulta FROM laborales WHERE idLaborales=$idLaborales"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['consulta'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getempresa($idLaborales)
	{
		
		if($result=$bd->insertarDatos("SELECT empresa FROM laborales WHERE idLaborales=$idLaborales"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['empresa'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getcargo($idLaborales)
	{
		
		if($result=$bd->insertarDatos("SELECT cargo FROM laborales WHERE idLaborales=$idLaborales"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['cargo'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function gettiempo($idLaborales)
	{
		
		if($result=$bd->insertarDatos("SELECT tiempo FROM laborales WHERE idLaborales=$idLaborales"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['tiempo'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getmotRet($idLaborales)
	{
		
		if($result=$bd->insertarDatos("SELECT motRet FROM laborales WHERE idLaborales=$idLaborales"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['motRet'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function setconsulta($consulta,$idLaborales)
	{
		
		if($result=$bd->insertarDatos("UPDATE laborales SET consulta=$consulta WHERE idLaborales=$idLaborales"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setempresa($empresa,$idLaborales)
	{
		
		if($result=$bd->insertarDatos("UPDATE laborales SET empresa=$empresa WHERE idLaborales=$idLaborales"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setcargo($cargo,$idLaborales)
	{
		
		if($result=$bd->insertarDatos("UPDATE laborales SET cargo=$cargo WHERE idLaborales=$idLaborales"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function settiempo($tiempo,$idLaborales)
	{
		
		if($result=$bd->insertarDatos("UPDATE laborales SET tiempo=$tiempo WHERE idLaborales=$idLaborales"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setmotRet($motRet,$idLaborales)
	{
		
		if($result=$bd->insertarDatos("UPDATE laborales SET motRet=$motRet WHERE idLaborales=$idLaborales"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function dibujarFormularioIngresolaborales()
	{
		echo "<form role='form'>";

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>idLaborales</label>

                                <input type='email' class='form-control' id='idLaborales' placeholder='idLaborales'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>consulta</label>

                                <input type='email' class='form-control' id='consulta' placeholder='consulta'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>empresa</label>

                                <input type='email' class='form-control' id='empresa' placeholder='empresa'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>cargo</label>

                                <input type='email' class='form-control' id='cargo' placeholder='cargo'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>tiempo</label>

                                <input type='email' class='form-control' id='tiempo' placeholder='tiempo'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>motRet</label>

                                <input type='email' class='form-control' id='motRet' placeholder='motRet'>

                            </div>";

                

                echo "<button type='submit' class='btn btn-default' onclick='ingresarNuevolaborales();return false;'>Ingresar</button>";

           echo "</form>";
	}

	function consultarTodoslaborales($consulta)
	{
		$bd=BD::getInstance();
        //echo "SELECT * FROM laborales WHERE consulta=".$consulta;
		if($result=$bd->extraerDatos("SELECT * FROM laborales WHERE consulta=".$consulta))
		{
			echo "<table class='table'><thead><tr><th>empresa</th><th>cargo</th><th>tiempo</th><th>motRet</th><th>Accion</th></tr></thead><tbody>";

        
			while($filas = mysql_fetch_array($result))
			{
				echo "<tr>";

				echo "<td>".$filas['empresa']."</td>";
				echo "<td>".$filas['cargo']."</td>";
				echo "<td>".$filas['tiempo']."</td>";
				echo "<td>".$filas['motRet']."</td>";
				echo "<td><p>

        <a href='#' class='btn btn-primary' role='button' onclick='eliminarlaborales(".$filas['idLaborales'].");return false;'>Eliminar</a>

        </p></td></tr>";
			}
			echo "</tr></tbody></table>";
		}
		else
		{
			echo "No se pudo hacer la consulta de datos";
		}
	}

	function dibujarFormularioModificarlaborales($id)
	{
		$bd=BD::getInstance();
		$result=$bd->extraerDatos("SELECT * FROM laborales WHERE idLaborales=".$id);
		$filas = mysql_fetch_array($result);
		echo "<form role='form'>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>idLaborales</label>

                            <input class='form-control' type='hidden' id='idLaborales' value='".$filas["idLaborales"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>consulta</label>

                            <input type='email' class='form-control' id='consulta' value='".$filas["consulta"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>empresa</label>

                            <input type='email' class='form-control' id='empresa' value='".$filas["empresa"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>cargo</label>

                            <input type='email' class='form-control' id='cargo' value='".$filas["cargo"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>tiempo</label>

                            <input type='email' class='form-control' id='tiempo' value='".$filas["tiempo"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>motRet</label>

                            <input type='email' class='form-control' id='motRet' value='".$filas["motRet"]."'>

                        </div>";

                echo "<button type='submit' class='btn btn-default' type='submit' onclick='modificarlaborales($id);return false;'>Modificar</button></form>";

           
	}
}
?>