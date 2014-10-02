<?php
include ('../bd/bd.php');
class nutricional
{
	function insertarDatos($idNutricional,$consulta,$antPerSal,$aleAli,$traDigEst,$traDigGas,$traDigRGE,$traDigDia,$praDep,$cualDep,$frecuencia,$antFamSal,$conRegComPrin,$masNor,$conComNut,$conAguaDia,$apetito)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("INSERT INTO nutricional(consulta,antPerSal,aleAli,traDigEst,traDigGas,traDigRGE,traDigDia,praDep,cualDep,frecuencia,antFamSal,conRegComPrin,masNor,conComNut,conAguaDia,apetito) VALUES ('$consulta','$antPerSal','$aleAli','$traDigEst','$traDigGas','$traDigRGE','$traDigDia','$praDep','$cualDep','$frecuencia','$antFamSal','$conRegComPrin','$masNor','$conComNut','$conAguaDia','$apetito')"))
		{
			echo "Registro de datos exitoso";
		}
		else
		{
			echo "No se pudo hacer el registro de datos";
		}
	}

	function consultarDatos($idNutricional)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("SELECT * FROM nutricional WHERE idNutricional=$idNutricional"))
		{
			echo "Consulta de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la consulta de datos";
		}
	}

	function eliminarDatos($idNutricional)
	{
		$bd=BD::getInstance();
		if($bd->extraerDatos("DELETE FROM nutricional WHERE idNutricional=$idNutricional"))
		{
			echo "Eliminación exitosa";
		}
		else
		{
			echo "No se pudo realizar la eliminación de datos";
		}
	}

	function actualizarDatos($idNutricional,$consulta,$antPerSal,$aleAli,$traDigEst,$traDigGas,$traDigRGE,$traDigDia,$praDep,$cualDep,$frecuencia,$antFamSal,$conRegComPrin,$masNor,$conComNut,$conAguaDia,$apetito)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("UPDATE nutricional SET consulta='$consulta',antPerSal='$antPerSal',aleAli='$aleAli',traDigEst='$traDigEst',traDigGas='$traDigGas',traDigRGE='$traDigRGE',traDigDia='$traDigDia',praDep='$praDep',cualDep='$cualDep',frecuencia='$frecuencia',antFamSal='$antFamSal',conRegComPrin='$conRegComPrin',masNor='$masNor',conComNut='$conComNut',conAguaDia='$conAguaDia',apetito='$apetito' WHERE idNutricional=$idNutricional"))
		{
			echo "Modificación de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la modificación de datos";
		}
	}

	function getconsulta($idNutricional)
	{
		
		if($result=$bd->insertarDatos("SELECT consulta FROM nutricional WHERE idNutricional=$idNutricional"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['consulta'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getantPerSal($idNutricional)
	{
		
		if($result=$bd->insertarDatos("SELECT antPerSal FROM nutricional WHERE idNutricional=$idNutricional"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['antPerSal'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getaleAli($idNutricional)
	{
		
		if($result=$bd->insertarDatos("SELECT aleAli FROM nutricional WHERE idNutricional=$idNutricional"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['aleAli'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function gettraDigEst($idNutricional)
	{
		
		if($result=$bd->insertarDatos("SELECT traDigEst FROM nutricional WHERE idNutricional=$idNutricional"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['traDigEst'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function gettraDigGas($idNutricional)
	{
		
		if($result=$bd->insertarDatos("SELECT traDigGas FROM nutricional WHERE idNutricional=$idNutricional"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['traDigGas'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function gettraDigRGE($idNutricional)
	{
		
		if($result=$bd->insertarDatos("SELECT traDigRGE FROM nutricional WHERE idNutricional=$idNutricional"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['traDigRGE'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function gettraDigDia($idNutricional)
	{
		
		if($result=$bd->insertarDatos("SELECT traDigDia FROM nutricional WHERE idNutricional=$idNutricional"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['traDigDia'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getpraDep($idNutricional)
	{
		
		if($result=$bd->insertarDatos("SELECT praDep FROM nutricional WHERE idNutricional=$idNutricional"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['praDep'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getcualDep($idNutricional)
	{
		
		if($result=$bd->insertarDatos("SELECT cualDep FROM nutricional WHERE idNutricional=$idNutricional"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['cualDep'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getfrecuencia($idNutricional)
	{
		
		if($result=$bd->insertarDatos("SELECT frecuencia FROM nutricional WHERE idNutricional=$idNutricional"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['frecuencia'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getantFamSal($idNutricional)
	{
		
		if($result=$bd->insertarDatos("SELECT antFamSal FROM nutricional WHERE idNutricional=$idNutricional"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['antFamSal'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getconRegComPrin($idNutricional)
	{
		
		if($result=$bd->insertarDatos("SELECT conRegComPrin FROM nutricional WHERE idNutricional=$idNutricional"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['conRegComPrin'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getmasNor($idNutricional)
	{
		
		if($result=$bd->insertarDatos("SELECT masNor FROM nutricional WHERE idNutricional=$idNutricional"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['masNor'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getconComNut($idNutricional)
	{
		
		if($result=$bd->insertarDatos("SELECT conComNut FROM nutricional WHERE idNutricional=$idNutricional"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['conComNut'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getconAguaDia($idNutricional)
	{
		
		if($result=$bd->insertarDatos("SELECT conAguaDia FROM nutricional WHERE idNutricional=$idNutricional"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['conAguaDia'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getapetito($idNutricional)
	{
		
		if($result=$bd->insertarDatos("SELECT apetito FROM nutricional WHERE idNutricional=$idNutricional"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['apetito'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function setconsulta($consulta,$idNutricional)
	{
		
		if($result=$bd->insertarDatos("UPDATE nutricional SET consulta=$consulta WHERE idNutricional=$idNutricional"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setantPerSal($antPerSal,$idNutricional)
	{
		
		if($result=$bd->insertarDatos("UPDATE nutricional SET antPerSal=$antPerSal WHERE idNutricional=$idNutricional"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setaleAli($aleAli,$idNutricional)
	{
		
		if($result=$bd->insertarDatos("UPDATE nutricional SET aleAli=$aleAli WHERE idNutricional=$idNutricional"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function settraDigEst($traDigEst,$idNutricional)
	{
		
		if($result=$bd->insertarDatos("UPDATE nutricional SET traDigEst=$traDigEst WHERE idNutricional=$idNutricional"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function settraDigGas($traDigGas,$idNutricional)
	{
		
		if($result=$bd->insertarDatos("UPDATE nutricional SET traDigGas=$traDigGas WHERE idNutricional=$idNutricional"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function settraDigRGE($traDigRGE,$idNutricional)
	{
		
		if($result=$bd->insertarDatos("UPDATE nutricional SET traDigRGE=$traDigRGE WHERE idNutricional=$idNutricional"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function settraDigDia($traDigDia,$idNutricional)
	{
		
		if($result=$bd->insertarDatos("UPDATE nutricional SET traDigDia=$traDigDia WHERE idNutricional=$idNutricional"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setpraDep($praDep,$idNutricional)
	{
		
		if($result=$bd->insertarDatos("UPDATE nutricional SET praDep=$praDep WHERE idNutricional=$idNutricional"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setcualDep($cualDep,$idNutricional)
	{
		
		if($result=$bd->insertarDatos("UPDATE nutricional SET cualDep=$cualDep WHERE idNutricional=$idNutricional"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setfrecuencia($frecuencia,$idNutricional)
	{
		
		if($result=$bd->insertarDatos("UPDATE nutricional SET frecuencia=$frecuencia WHERE idNutricional=$idNutricional"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setantFamSal($antFamSal,$idNutricional)
	{
		
		if($result=$bd->insertarDatos("UPDATE nutricional SET antFamSal=$antFamSal WHERE idNutricional=$idNutricional"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setconRegComPrin($conRegComPrin,$idNutricional)
	{
		
		if($result=$bd->insertarDatos("UPDATE nutricional SET conRegComPrin=$conRegComPrin WHERE idNutricional=$idNutricional"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setmasNor($masNor,$idNutricional)
	{
		
		if($result=$bd->insertarDatos("UPDATE nutricional SET masNor=$masNor WHERE idNutricional=$idNutricional"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setconComNut($conComNut,$idNutricional)
	{
		
		if($result=$bd->insertarDatos("UPDATE nutricional SET conComNut=$conComNut WHERE idNutricional=$idNutricional"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setconAguaDia($conAguaDia,$idNutricional)
	{
		
		if($result=$bd->insertarDatos("UPDATE nutricional SET conAguaDia=$conAguaDia WHERE idNutricional=$idNutricional"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setapetito($apetito,$idNutricional)
	{
		
		if($result=$bd->insertarDatos("UPDATE nutricional SET apetito=$apetito WHERE idNutricional=$idNutricional"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function dibujarFormularioIngresonutricional()
	{
		echo "<form role='form'>";

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>idNutricional</label>

                                <input type='email' class='form-control' id='idNutricional' placeholder='idNutricional'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>consulta</label>

                                <input type='email' class='form-control' id='consulta' placeholder='consulta'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>antPerSal</label>

                                <input type='email' class='form-control' id='antPerSal' placeholder='antPerSal'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>aleAli</label>

                                <input type='email' class='form-control' id='aleAli' placeholder='aleAli'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>traDigEst</label>

                                <input type='email' class='form-control' id='traDigEst' placeholder='traDigEst'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>traDigGas</label>

                                <input type='email' class='form-control' id='traDigGas' placeholder='traDigGas'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>traDigRGE</label>

                                <input type='email' class='form-control' id='traDigRGE' placeholder='traDigRGE'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>traDigDia</label>

                                <input type='email' class='form-control' id='traDigDia' placeholder='traDigDia'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>praDep</label>

                                <input type='email' class='form-control' id='praDep' placeholder='praDep'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>cualDep</label>

                                <input type='email' class='form-control' id='cualDep' placeholder='cualDep'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>frecuencia</label>

                                <input type='email' class='form-control' id='frecuencia' placeholder='frecuencia'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>antFamSal</label>

                                <input type='email' class='form-control' id='antFamSal' placeholder='antFamSal'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>conRegComPrin</label>

                                <input type='email' class='form-control' id='conRegComPrin' placeholder='conRegComPrin'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>masNor</label>

                                <input type='email' class='form-control' id='masNor' placeholder='masNor'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>conComNut</label>

                                <input type='email' class='form-control' id='conComNut' placeholder='conComNut'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>conAguaDia</label>

                                <input type='email' class='form-control' id='conAguaDia' placeholder='conAguaDia'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>apetito</label>

                                <input type='email' class='form-control' id='apetito' placeholder='apetito'>

                            </div>";

                

                echo "<button type='submit' class='btn btn-default' onclick='ingresarNuevonutricional();return false;'>Ingresar</button>";

           echo "</form>";
	}

	function consultarTodosnutricional()
	{
		$bd=BD::getInstance();
		if($result=$bd->extraerDatos("SELECT * FROM nutricional"))
		{
			echo "<div class='panel panel-default'><div class='panel-heading'>Nombre de la Tabla</div> <table class='table'><thead><tr><th>idNutricional</th><th>consulta</th><th>antPerSal</th><th>aleAli</th><th>traDigEst</th><th>traDigGas</th><th>traDigRGE</th><th>traDigDia</th><th>praDep</th><th>cualDep</th><th>frecuencia</th><th>antFamSal</th><th>conRegComPrin</th><th>masNor</th><th>conComNut</th><th>conAguaDia</th><th>apetito</th><th>Accion</th></tr></thead><tbody>";

        
			while($filas = mysql_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>".$filas['idNutricional']."</td>";
				echo "<td>".$filas['consulta']."</td>";
				echo "<td>".$filas['antPerSal']."</td>";
				echo "<td>".$filas['aleAli']."</td>";
				echo "<td>".$filas['traDigEst']."</td>";
				echo "<td>".$filas['traDigGas']."</td>";
				echo "<td>".$filas['traDigRGE']."</td>";
				echo "<td>".$filas['traDigDia']."</td>";
				echo "<td>".$filas['praDep']."</td>";
				echo "<td>".$filas['cualDep']."</td>";
				echo "<td>".$filas['frecuencia']."</td>";
				echo "<td>".$filas['antFamSal']."</td>";
				echo "<td>".$filas['conRegComPrin']."</td>";
				echo "<td>".$filas['masNor']."</td>";
				echo "<td>".$filas['conComNut']."</td>";
				echo "<td>".$filas['conAguaDia']."</td>";
				echo "<td>".$filas['apetito']."</td>";
				echo "<td><p>

        <a href='#' class='btn btn-primary' role='button' onclick='dibujarFormularioModificarnutricional(".$filas['idNutricional'].");return false;'>Editar</a>

        <a href='#' class='btn btn-primary' role='button' onclick='eliminarnutricional(".$filas['idNutricional'].");return false;'>Eliminar</a>

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

	function dibujarFormularioModificarnutricional($id)
	{
		$bd=BD::getInstance();
		$result=$bd->extraerDatos("SELECT * FROM nutricional WHERE idNutricional=".$id);
		$filas = mysql_fetch_array($result);
		echo "<form role='form'>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>idNutricional</label>

                            <input class='form-control' type='hidden' id='idNutricional' value='".$filas["idNutricional"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>consulta</label>

                            <input type='email' class='form-control' id='consulta' value='".$filas["consulta"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>antPerSal</label>

                            <input type='email' class='form-control' id='antPerSal' value='".$filas["antPerSal"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>aleAli</label>

                            <input type='email' class='form-control' id='aleAli' value='".$filas["aleAli"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>traDigEst</label>

                            <input type='email' class='form-control' id='traDigEst' value='".$filas["traDigEst"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>traDigGas</label>

                            <input type='email' class='form-control' id='traDigGas' value='".$filas["traDigGas"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>traDigRGE</label>

                            <input type='email' class='form-control' id='traDigRGE' value='".$filas["traDigRGE"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>traDigDia</label>

                            <input type='email' class='form-control' id='traDigDia' value='".$filas["traDigDia"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>praDep</label>

                            <input type='email' class='form-control' id='praDep' value='".$filas["praDep"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>cualDep</label>

                            <input type='email' class='form-control' id='cualDep' value='".$filas["cualDep"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>frecuencia</label>

                            <input type='email' class='form-control' id='frecuencia' value='".$filas["frecuencia"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>antFamSal</label>

                            <input type='email' class='form-control' id='antFamSal' value='".$filas["antFamSal"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>conRegComPrin</label>

                            <input type='email' class='form-control' id='conRegComPrin' value='".$filas["conRegComPrin"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>masNor</label>

                            <input type='email' class='form-control' id='masNor' value='".$filas["masNor"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>conComNut</label>

                            <input type='email' class='form-control' id='conComNut' value='".$filas["conComNut"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>conAguaDia</label>

                            <input type='email' class='form-control' id='conAguaDia' value='".$filas["conAguaDia"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>apetito</label>

                            <input type='email' class='form-control' id='apetito' value='".$filas["apetito"]."'>

                        </div>";

                echo "<button type='submit' class='btn btn-default' type='submit' onclick='modificarnutricional($id);return false;'>Modificar</button></form>";

           
	}
}
?>