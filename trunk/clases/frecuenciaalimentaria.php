<?php
include ('../bd/bd.php');
class frecuenciaalimentaria
{
	function insertarDatos($idFrecuenciaAlimentaria,$consulta,$alimento,$diario,$semanal,$quincenal,$ocasional,$peso,$tall,$p/t,$t/e,$diaNut,$eduNut,$objetivos,$estrategias,$metas,$profesional)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("INSERT INTO frecuenciaalimentaria(idFrecuenciaAlimentaria,consulta,alimento,diario,semanal,quincenal,ocasional,peso,tall,p/t,t/e,diaNut,eduNut,objetivos,estrategias,metas,profesional) VALUES ($idFrecuenciaAlimentaria,'$consulta','$alimento','$diario','$semanal','$quincenal','$ocasional','$peso','$tall','$p/t','$t/e','$diaNut','$eduNut','$objetivos','$estrategias','$metas','$profesional')"))
		{
			echo "Registro de datos exitoso";
		}
		else
		{
			echo "No se pudo hacer el registro de datos";
		}
	}

	function consultarDatos($idFrecuenciaAlimentaria)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("SELECT * FROM frecuenciaalimentaria WHERE idFrecuenciaAlimentaria=$idFrecuenciaAlimentaria"))
		{
			echo "Consulta de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la consulta de datos";
		}
	}

	function eliminarDatos($idFrecuenciaAlimentaria)
	{
		$bd=BD::getInstance();
		if($bd->extraerDatos("DELETE FROM frecuenciaalimentaria WHERE idFrecuenciaAlimentaria=$idFrecuenciaAlimentaria"))
		{
			echo "Eliminación exitosa";
		}
		else
		{
			echo "No se pudo realizar la eliminación de datos";
		}
	}

	function actualizarDatos($idFrecuenciaAlimentaria,$consulta,$alimento,$diario,$semanal,$quincenal,$ocasional,$peso,$tall,$p/t,$t/e,$diaNut,$eduNut,$objetivos,$estrategias,$metas,$profesional)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("UPDATE frecuenciaalimentaria SET consulta='$consulta',alimento='$alimento',diario='$diario',semanal='$semanal',quincenal='$quincenal',ocasional='$ocasional',peso='$peso',tall='$tall',p/t='$p/t',t/e='$t/e',diaNut='$diaNut',eduNut='$eduNut',objetivos='$objetivos',estrategias='$estrategias',metas='$metas',profesional='$profesional' WHERE idFrecuenciaAlimentaria=$idFrecuenciaAlimentaria"))
		{
			echo "Modificación de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la modificación de datos";
		}
	}

	function getconsulta($idFrecuenciaAlimentaria)
	{
		
		if($result=$bd->insertarDatos("SELECT consulta FROM frecuenciaalimentaria WHERE idFrecuenciaAlimentaria=$idFrecuenciaAlimentaria"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['consulta'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getalimento($idFrecuenciaAlimentaria)
	{
		
		if($result=$bd->insertarDatos("SELECT alimento FROM frecuenciaalimentaria WHERE idFrecuenciaAlimentaria=$idFrecuenciaAlimentaria"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['alimento'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getdiario($idFrecuenciaAlimentaria)
	{
		
		if($result=$bd->insertarDatos("SELECT diario FROM frecuenciaalimentaria WHERE idFrecuenciaAlimentaria=$idFrecuenciaAlimentaria"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['diario'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getsemanal($idFrecuenciaAlimentaria)
	{
		
		if($result=$bd->insertarDatos("SELECT semanal FROM frecuenciaalimentaria WHERE idFrecuenciaAlimentaria=$idFrecuenciaAlimentaria"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['semanal'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getquincenal($idFrecuenciaAlimentaria)
	{
		
		if($result=$bd->insertarDatos("SELECT quincenal FROM frecuenciaalimentaria WHERE idFrecuenciaAlimentaria=$idFrecuenciaAlimentaria"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['quincenal'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getocasional($idFrecuenciaAlimentaria)
	{
		
		if($result=$bd->insertarDatos("SELECT ocasional FROM frecuenciaalimentaria WHERE idFrecuenciaAlimentaria=$idFrecuenciaAlimentaria"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['ocasional'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getpeso($idFrecuenciaAlimentaria)
	{
		
		if($result=$bd->insertarDatos("SELECT peso FROM frecuenciaalimentaria WHERE idFrecuenciaAlimentaria=$idFrecuenciaAlimentaria"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['peso'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function gettall($idFrecuenciaAlimentaria)
	{
		
		if($result=$bd->insertarDatos("SELECT tall FROM frecuenciaalimentaria WHERE idFrecuenciaAlimentaria=$idFrecuenciaAlimentaria"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['tall'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getp/t($idFrecuenciaAlimentaria)
	{
		
		if($result=$bd->insertarDatos("SELECT p/t FROM frecuenciaalimentaria WHERE idFrecuenciaAlimentaria=$idFrecuenciaAlimentaria"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['p/t'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function gett/e($idFrecuenciaAlimentaria)
	{
		
		if($result=$bd->insertarDatos("SELECT t/e FROM frecuenciaalimentaria WHERE idFrecuenciaAlimentaria=$idFrecuenciaAlimentaria"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['t/e'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getdiaNut($idFrecuenciaAlimentaria)
	{
		
		if($result=$bd->insertarDatos("SELECT diaNut FROM frecuenciaalimentaria WHERE idFrecuenciaAlimentaria=$idFrecuenciaAlimentaria"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['diaNut'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function geteduNut($idFrecuenciaAlimentaria)
	{
		
		if($result=$bd->insertarDatos("SELECT eduNut FROM frecuenciaalimentaria WHERE idFrecuenciaAlimentaria=$idFrecuenciaAlimentaria"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['eduNut'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getobjetivos($idFrecuenciaAlimentaria)
	{
		
		if($result=$bd->insertarDatos("SELECT objetivos FROM frecuenciaalimentaria WHERE idFrecuenciaAlimentaria=$idFrecuenciaAlimentaria"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['objetivos'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getestrategias($idFrecuenciaAlimentaria)
	{
		
		if($result=$bd->insertarDatos("SELECT estrategias FROM frecuenciaalimentaria WHERE idFrecuenciaAlimentaria=$idFrecuenciaAlimentaria"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['estrategias'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getmetas($idFrecuenciaAlimentaria)
	{
		
		if($result=$bd->insertarDatos("SELECT metas FROM frecuenciaalimentaria WHERE idFrecuenciaAlimentaria=$idFrecuenciaAlimentaria"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['metas'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getprofesional($idFrecuenciaAlimentaria)
	{
		
		if($result=$bd->insertarDatos("SELECT profesional FROM frecuenciaalimentaria WHERE idFrecuenciaAlimentaria=$idFrecuenciaAlimentaria"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['profesional'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function setconsulta($consulta,$idFrecuenciaAlimentaria)
	{
		
		if($result=$bd->insertarDatos("UPDATE frecuenciaalimentaria SET consulta=$consulta WHERE idFrecuenciaAlimentaria=$idFrecuenciaAlimentaria"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setalimento($alimento,$idFrecuenciaAlimentaria)
	{
		
		if($result=$bd->insertarDatos("UPDATE frecuenciaalimentaria SET alimento=$alimento WHERE idFrecuenciaAlimentaria=$idFrecuenciaAlimentaria"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setdiario($diario,$idFrecuenciaAlimentaria)
	{
		
		if($result=$bd->insertarDatos("UPDATE frecuenciaalimentaria SET diario=$diario WHERE idFrecuenciaAlimentaria=$idFrecuenciaAlimentaria"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setsemanal($semanal,$idFrecuenciaAlimentaria)
	{
		
		if($result=$bd->insertarDatos("UPDATE frecuenciaalimentaria SET semanal=$semanal WHERE idFrecuenciaAlimentaria=$idFrecuenciaAlimentaria"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setquincenal($quincenal,$idFrecuenciaAlimentaria)
	{
		
		if($result=$bd->insertarDatos("UPDATE frecuenciaalimentaria SET quincenal=$quincenal WHERE idFrecuenciaAlimentaria=$idFrecuenciaAlimentaria"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setocasional($ocasional,$idFrecuenciaAlimentaria)
	{
		
		if($result=$bd->insertarDatos("UPDATE frecuenciaalimentaria SET ocasional=$ocasional WHERE idFrecuenciaAlimentaria=$idFrecuenciaAlimentaria"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setpeso($peso,$idFrecuenciaAlimentaria)
	{
		
		if($result=$bd->insertarDatos("UPDATE frecuenciaalimentaria SET peso=$peso WHERE idFrecuenciaAlimentaria=$idFrecuenciaAlimentaria"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function settall($tall,$idFrecuenciaAlimentaria)
	{
		
		if($result=$bd->insertarDatos("UPDATE frecuenciaalimentaria SET tall=$tall WHERE idFrecuenciaAlimentaria=$idFrecuenciaAlimentaria"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setp/t($p/t,$idFrecuenciaAlimentaria)
	{
		
		if($result=$bd->insertarDatos("UPDATE frecuenciaalimentaria SET p/t=$p/t WHERE idFrecuenciaAlimentaria=$idFrecuenciaAlimentaria"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function sett/e($t/e,$idFrecuenciaAlimentaria)
	{
		
		if($result=$bd->insertarDatos("UPDATE frecuenciaalimentaria SET t/e=$t/e WHERE idFrecuenciaAlimentaria=$idFrecuenciaAlimentaria"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setdiaNut($diaNut,$idFrecuenciaAlimentaria)
	{
		
		if($result=$bd->insertarDatos("UPDATE frecuenciaalimentaria SET diaNut=$diaNut WHERE idFrecuenciaAlimentaria=$idFrecuenciaAlimentaria"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function seteduNut($eduNut,$idFrecuenciaAlimentaria)
	{
		
		if($result=$bd->insertarDatos("UPDATE frecuenciaalimentaria SET eduNut=$eduNut WHERE idFrecuenciaAlimentaria=$idFrecuenciaAlimentaria"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setobjetivos($objetivos,$idFrecuenciaAlimentaria)
	{
		
		if($result=$bd->insertarDatos("UPDATE frecuenciaalimentaria SET objetivos=$objetivos WHERE idFrecuenciaAlimentaria=$idFrecuenciaAlimentaria"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setestrategias($estrategias,$idFrecuenciaAlimentaria)
	{
		
		if($result=$bd->insertarDatos("UPDATE frecuenciaalimentaria SET estrategias=$estrategias WHERE idFrecuenciaAlimentaria=$idFrecuenciaAlimentaria"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setmetas($metas,$idFrecuenciaAlimentaria)
	{
		
		if($result=$bd->insertarDatos("UPDATE frecuenciaalimentaria SET metas=$metas WHERE idFrecuenciaAlimentaria=$idFrecuenciaAlimentaria"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setprofesional($profesional,$idFrecuenciaAlimentaria)
	{
		
		if($result=$bd->insertarDatos("UPDATE frecuenciaalimentaria SET profesional=$profesional WHERE idFrecuenciaAlimentaria=$idFrecuenciaAlimentaria"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function dibujarFormularioIngresofrecuenciaalimentaria()
	{
		echo "<form role='form'>";

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>idFrecuenciaAlimentaria</label>

                                <input type='email' class='form-control' id='idFrecuenciaAlimentaria' placeholder='idFrecuenciaAlimentaria'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>consulta</label>

                                <input type='email' class='form-control' id='consulta' placeholder='consulta'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>alimento</label>

                                <input type='email' class='form-control' id='alimento' placeholder='alimento'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>diario</label>

                                <input type='email' class='form-control' id='diario' placeholder='diario'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>semanal</label>

                                <input type='email' class='form-control' id='semanal' placeholder='semanal'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>quincenal</label>

                                <input type='email' class='form-control' id='quincenal' placeholder='quincenal'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>ocasional</label>

                                <input type='email' class='form-control' id='ocasional' placeholder='ocasional'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>peso</label>

                                <input type='email' class='form-control' id='peso' placeholder='peso'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>tall</label>

                                <input type='email' class='form-control' id='tall' placeholder='tall'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>p/t</label>

                                <input type='email' class='form-control' id='p/t' placeholder='p/t'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>t/e</label>

                                <input type='email' class='form-control' id='t/e' placeholder='t/e'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>diaNut</label>

                                <input type='email' class='form-control' id='diaNut' placeholder='diaNut'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>eduNut</label>

                                <input type='email' class='form-control' id='eduNut' placeholder='eduNut'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>objetivos</label>

                                <input type='email' class='form-control' id='objetivos' placeholder='objetivos'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>estrategias</label>

                                <input type='email' class='form-control' id='estrategias' placeholder='estrategias'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>metas</label>

                                <input type='email' class='form-control' id='metas' placeholder='metas'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>profesional</label>

                                <input type='email' class='form-control' id='profesional' placeholder='profesional'>

                            </div>";

                

                echo "<button type='submit' class='btn btn-default' onclick='ingresarNuevofrecuenciaalimentaria();return false;'>Ingresar</button>";

           echo "</form>";
	}

	function consultarTodosfrecuenciaalimentaria()
	{
		$bd=BD::getInstance();
		if($result=$bd->extraerDatos("SELECT * FROM frecuenciaalimentaria"))
		{
			echo "<div class='panel panel-default'><div class='panel-heading'>Nombre de la Tabla</div> <table class='table'><thead><tr><th>idFrecuenciaAlimentaria</th><th>consulta</th><th>alimento</th><th>diario</th><th>semanal</th><th>quincenal</th><th>ocasional</th><th>peso</th><th>tall</th><th>p/t</th><th>t/e</th><th>diaNut</th><th>eduNut</th><th>objetivos</th><th>estrategias</th><th>metas</th><th>profesional</th><th>Accion</th></tr></thead><tbody>";

        
			while($filas = mysql_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>".$filas['idFrecuenciaAlimentaria']."</td>";
				echo "<td>".$filas['consulta']."</td>";
				echo "<td>".$filas['alimento']."</td>";
				echo "<td>".$filas['diario']."</td>";
				echo "<td>".$filas['semanal']."</td>";
				echo "<td>".$filas['quincenal']."</td>";
				echo "<td>".$filas['ocasional']."</td>";
				echo "<td>".$filas['peso']."</td>";
				echo "<td>".$filas['tall']."</td>";
				echo "<td>".$filas['p/t']."</td>";
				echo "<td>".$filas['t/e']."</td>";
				echo "<td>".$filas['diaNut']."</td>";
				echo "<td>".$filas['eduNut']."</td>";
				echo "<td>".$filas['objetivos']."</td>";
				echo "<td>".$filas['estrategias']."</td>";
				echo "<td>".$filas['metas']."</td>";
				echo "<td>".$filas['profesional']."</td>";
				echo "<td><p>

        <a href='#' class='btn btn-primary' role='button' onclick='dibujarFormularioModificarfrecuenciaalimentaria(".$filas['idFrecuenciaAlimentaria'].");return false;'>Editar</a>

        <a href='#' class='btn btn-primary' role='button' onclick='eliminarfrecuenciaalimentaria(".$filas['idFrecuenciaAlimentaria'].");return false;'>Eliminar</a>

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

	function dibujarFormularioModificarfrecuenciaalimentaria($id)
	{
		$bd=BD::getInstance();
		$result=$bd->extraerDatos("SELECT * FROM frecuenciaalimentaria WHERE idFrecuenciaAlimentaria=".$id);
		$filas = mysql_fetch_array($result);
		echo "<form role='form'>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>idFrecuenciaAlimentaria</label>

                            <input class='form-control' type='hidden' id='idFrecuenciaAlimentaria' value='".$filas["idFrecuenciaAlimentaria"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>consulta</label>

                            <input type='email' class='form-control' id='consulta' value='".$filas["consulta"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>alimento</label>

                            <input type='email' class='form-control' id='alimento' value='".$filas["alimento"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>diario</label>

                            <input type='email' class='form-control' id='diario' value='".$filas["diario"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>semanal</label>

                            <input type='email' class='form-control' id='semanal' value='".$filas["semanal"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>quincenal</label>

                            <input type='email' class='form-control' id='quincenal' value='".$filas["quincenal"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>ocasional</label>

                            <input type='email' class='form-control' id='ocasional' value='".$filas["ocasional"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>peso</label>

                            <input type='email' class='form-control' id='peso' value='".$filas["peso"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>tall</label>

                            <input type='email' class='form-control' id='tall' value='".$filas["tall"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>p/t</label>

                            <input type='email' class='form-control' id='p/t' value='".$filas["p/t"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>t/e</label>

                            <input type='email' class='form-control' id='t/e' value='".$filas["t/e"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>diaNut</label>

                            <input type='email' class='form-control' id='diaNut' value='".$filas["diaNut"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>eduNut</label>

                            <input type='email' class='form-control' id='eduNut' value='".$filas["eduNut"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>objetivos</label>

                            <input type='email' class='form-control' id='objetivos' value='".$filas["objetivos"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>estrategias</label>

                            <input type='email' class='form-control' id='estrategias' value='".$filas["estrategias"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>metas</label>

                            <input type='email' class='form-control' id='metas' value='".$filas["metas"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>profesional</label>

                            <input type='email' class='form-control' id='profesional' value='".$filas["profesional"]."'>

                        </div>";

                echo "<button type='submit' class='btn btn-default' type='submit' onclick='modificarfrecuenciaalimentaria($id);return false;'>Modificar</button></form>";

           
	}
}
?>