<?php
include ('../bd/bd.php');
class psicologia
{
	function insertarDatos($idPsicologia,$consulta,$desPsi,$traRec,$antEmb,$antPar,$antDesPsi,$antDesPsi2,$factNos,$priInf,$segInf,$pub,$ado,$fam,$relHer,$actAcu,$conAcu,$expFam,$diaFam,$observaciones,$conPsiObt,$entSem,$pruDesMad,$otrPru2,$concepto,$profesional,$diag1,$diag2,$diag3)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("INSERT INTO psicologia(consulta,desPsi,traRec,antEmb,antPar,antDesPsi,antDesPsi2,factNos,priInf,segInf,pub,ado,fam,relHer,actAcu,conAcu,expFam,diaFam,observaciones,conPsiObt,entSem,pruDesMad,otrPru2,concepto,profesional,diag1,diag2,diag3) VALUES ('$consulta','$desPsi','$traRec','$antEmb','$antPar','$antDesPsi','$antDesPsi2','$factNos','$priInf','$segInf','$pub','$ado','$fam','$relHer','$actAcu','$conAcu','$expFam','$diaFam','$observaciones','$conPsiObt','$entSem','$pruDesMad','$otrPru2','$concepto','$profesional','$diag1','$diag2','$diag3')"))
		{
            
            $bd->insertarDatos("UPDATE consulta SET confirmada=2 WHERE idConsulta=".$consulta);
			echo "Registro de datos exitoso";
		}
		else
		{
			echo "No se pudo hacer el registro de datos";
		}
	}

	function consultarDatos($idPsicologia)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("SELECT * FROM psicologia WHERE idPsicologia=$idPsicologia"))
		{
			echo "Consulta de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la consulta de datos";
		}
	}

	function eliminarDatos($idPsicologia)
	{
		$bd=BD::getInstance();
		if($bd->extraerDatos("DELETE FROM psicologia WHERE idPsicologia=$idPsicologia"))
		{
			echo "Eliminación exitosa";
		}
		else
		{
			echo "No se pudo realizar la eliminación de datos";
		}
	}

	function actualizarDatos($idPsicologia,$consulta,$desPsi,$traRec,$antEmb,$antPar,$antDesPsi,$antDesPsi2,$factNos,$priInf,$segInf,$pub,$ado,$fam,$relHer,$actAcu,$conAcu,$expFam,$diaFam,$observaciones,$conPsiObt,$entSem,$pruDesMad,$otrPru2,$concepto,$profesional,$diag1,$diag2,$diag3)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("UPDATE psicologia SET consulta='$consulta',desPsi='$desPsi',traRec='$traRec',antEmb='$antEmb',antPar='$antPar',antDesPsi='$antDesPsi',antDesPsi2='$antDesPsi2',factNos='$factNos',priInf='$priInf',segInf='$segInf',pub='$pub',ado='$ado',fam='$fam',relHer='$relHer',actAcu='$actAcu',conAcu='$conAcu',expFam='$expFam',diaFam='$diaFam',observaciones='$observaciones',conPsiObt='$conPsiObt',entSem='$entSem',pruDesMad='$pruDesMad',otrPru2='$otrPru2',concepto='$concepto',profesional='$profesional',diag1='$diag1',diag2='$diag2',diag3='$diag3' WHERE idPsicologia=$idPsicologia"))
		{
			echo "Modificación de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la modificación de datos";
		}
	}

	function getconsulta($idPsicologia)
	{
		
		if($result=$bd->insertarDatos("SELECT consulta FROM psicologia WHERE idPsicologia=$idPsicologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['consulta'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getdesPsi($idPsicologia)
	{
		
		if($result=$bd->insertarDatos("SELECT desPsi FROM psicologia WHERE idPsicologia=$idPsicologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['desPsi'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function gettraRec($idPsicologia)
	{
		
		if($result=$bd->insertarDatos("SELECT traRec FROM psicologia WHERE idPsicologia=$idPsicologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['traRec'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getantEmb($idPsicologia)
	{
		
		if($result=$bd->insertarDatos("SELECT antEmb FROM psicologia WHERE idPsicologia=$idPsicologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['antEmb'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getantPar($idPsicologia)
	{
		
		if($result=$bd->insertarDatos("SELECT antPar FROM psicologia WHERE idPsicologia=$idPsicologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['antPar'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getantDesPsi($idPsicologia)
	{
		
		if($result=$bd->insertarDatos("SELECT antDesPsi FROM psicologia WHERE idPsicologia=$idPsicologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['antDesPsi'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getantDesPsi2($idPsicologia)
	{
		
		if($result=$bd->insertarDatos("SELECT antDesPsi2 FROM psicologia WHERE idPsicologia=$idPsicologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['antDesPsi2'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getfactNos($idPsicologia)
	{
		
		if($result=$bd->insertarDatos("SELECT factNos FROM psicologia WHERE idPsicologia=$idPsicologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['factNos'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getpriInf($idPsicologia)
	{
		
		if($result=$bd->insertarDatos("SELECT priInf FROM psicologia WHERE idPsicologia=$idPsicologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['priInf'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getsegInf($idPsicologia)
	{
		
		if($result=$bd->insertarDatos("SELECT segInf FROM psicologia WHERE idPsicologia=$idPsicologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['segInf'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getpub($idPsicologia)
	{
		
		if($result=$bd->insertarDatos("SELECT pub FROM psicologia WHERE idPsicologia=$idPsicologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['pub'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getado($idPsicologia)
	{
		
		if($result=$bd->insertarDatos("SELECT ado FROM psicologia WHERE idPsicologia=$idPsicologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['ado'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getfam($idPsicologia)
	{
		
		if($result=$bd->insertarDatos("SELECT fam FROM psicologia WHERE idPsicologia=$idPsicologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['fam'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getrelHer($idPsicologia)
	{
		
		if($result=$bd->insertarDatos("SELECT relHer FROM psicologia WHERE idPsicologia=$idPsicologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['relHer'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getactAcu($idPsicologia)
	{
		
		if($result=$bd->insertarDatos("SELECT actAcu FROM psicologia WHERE idPsicologia=$idPsicologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['actAcu'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getconAcu($idPsicologia)
	{
		
		if($result=$bd->insertarDatos("SELECT conAcu FROM psicologia WHERE idPsicologia=$idPsicologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['conAcu'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getexpFam($idPsicologia)
	{
		
		if($result=$bd->insertarDatos("SELECT expFam FROM psicologia WHERE idPsicologia=$idPsicologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['expFam'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getdiaFam($idPsicologia)
	{
		
		if($result=$bd->insertarDatos("SELECT diaFam FROM psicologia WHERE idPsicologia=$idPsicologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['diaFam'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getobservaciones($idPsicologia)
	{
		
		if($result=$bd->insertarDatos("SELECT observaciones FROM psicologia WHERE idPsicologia=$idPsicologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['observaciones'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getconPsiObt($idPsicologia)
	{
		
		if($result=$bd->insertarDatos("SELECT conPsiObt FROM psicologia WHERE idPsicologia=$idPsicologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['conPsiObt'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getentSem($idPsicologia)
	{
		
		if($result=$bd->insertarDatos("SELECT entSem FROM psicologia WHERE idPsicologia=$idPsicologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['entSem'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getpruDesMad($idPsicologia)
	{
		
		if($result=$bd->insertarDatos("SELECT pruDesMad FROM psicologia WHERE idPsicologia=$idPsicologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['pruDesMad'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getotrPru2($idPsicologia)
	{
		
		if($result=$bd->insertarDatos("SELECT otrPru2 FROM psicologia WHERE idPsicologia=$idPsicologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['otrPru2'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getconcepto($idPsicologia)
	{
		
		if($result=$bd->insertarDatos("SELECT concepto FROM psicologia WHERE idPsicologia=$idPsicologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['concepto'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getprofesional($idPsicologia)
	{
		
		if($result=$bd->insertarDatos("SELECT profesional FROM psicologia WHERE idPsicologia=$idPsicologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['profesional'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getdiag1($idPsicologia)
	{
		
		if($result=$bd->insertarDatos("SELECT diag1 FROM psicologia WHERE idPsicologia=$idPsicologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['diag1'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getdiag2($idPsicologia)
	{
		
		if($result=$bd->insertarDatos("SELECT diag2 FROM psicologia WHERE idPsicologia=$idPsicologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['diag2'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getdiag3($idPsicologia)
	{
		
		if($result=$bd->insertarDatos("SELECT diag3 FROM psicologia WHERE idPsicologia=$idPsicologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['diag3'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function setconsulta($consulta,$idPsicologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE psicologia SET consulta=$consulta WHERE idPsicologia=$idPsicologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setdesPsi($desPsi,$idPsicologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE psicologia SET desPsi=$desPsi WHERE idPsicologia=$idPsicologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function settraRec($traRec,$idPsicologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE psicologia SET traRec=$traRec WHERE idPsicologia=$idPsicologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setantEmb($antEmb,$idPsicologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE psicologia SET antEmb=$antEmb WHERE idPsicologia=$idPsicologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setantPar($antPar,$idPsicologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE psicologia SET antPar=$antPar WHERE idPsicologia=$idPsicologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setantDesPsi($antDesPsi,$idPsicologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE psicologia SET antDesPsi=$antDesPsi WHERE idPsicologia=$idPsicologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setantDesPsi2($antDesPsi2,$idPsicologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE psicologia SET antDesPsi2=$antDesPsi2 WHERE idPsicologia=$idPsicologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setfactNos($factNos,$idPsicologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE psicologia SET factNos=$factNos WHERE idPsicologia=$idPsicologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setpriInf($priInf,$idPsicologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE psicologia SET priInf=$priInf WHERE idPsicologia=$idPsicologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setsegInf($segInf,$idPsicologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE psicologia SET segInf=$segInf WHERE idPsicologia=$idPsicologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setpub($pub,$idPsicologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE psicologia SET pub=$pub WHERE idPsicologia=$idPsicologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setado($ado,$idPsicologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE psicologia SET ado=$ado WHERE idPsicologia=$idPsicologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setfam($fam,$idPsicologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE psicologia SET fam=$fam WHERE idPsicologia=$idPsicologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setrelHer($relHer,$idPsicologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE psicologia SET relHer=$relHer WHERE idPsicologia=$idPsicologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setactAcu($actAcu,$idPsicologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE psicologia SET actAcu=$actAcu WHERE idPsicologia=$idPsicologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setconAcu($conAcu,$idPsicologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE psicologia SET conAcu=$conAcu WHERE idPsicologia=$idPsicologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setexpFam($expFam,$idPsicologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE psicologia SET expFam=$expFam WHERE idPsicologia=$idPsicologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setdiaFam($diaFam,$idPsicologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE psicologia SET diaFam=$diaFam WHERE idPsicologia=$idPsicologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setobservaciones($observaciones,$idPsicologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE psicologia SET observaciones=$observaciones WHERE idPsicologia=$idPsicologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setconPsiObt($conPsiObt,$idPsicologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE psicologia SET conPsiObt=$conPsiObt WHERE idPsicologia=$idPsicologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setentSem($entSem,$idPsicologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE psicologia SET entSem=$entSem WHERE idPsicologia=$idPsicologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setpruDesMad($pruDesMad,$idPsicologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE psicologia SET pruDesMad=$pruDesMad WHERE idPsicologia=$idPsicologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setotrPru2($otrPru2,$idPsicologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE psicologia SET otrPru2=$otrPru2 WHERE idPsicologia=$idPsicologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setconcepto($concepto,$idPsicologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE psicologia SET concepto=$concepto WHERE idPsicologia=$idPsicologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setprofesional($profesional,$idPsicologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE psicologia SET profesional=$profesional WHERE idPsicologia=$idPsicologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setdiag1($diag1,$idPsicologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE psicologia SET diag1=$diag1 WHERE idPsicologia=$idPsicologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setdiag2($diag2,$idPsicologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE psicologia SET diag2=$diag2 WHERE idPsicologia=$idPsicologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setdiag3($diag3,$idPsicologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE psicologia SET diag3=$diag3 WHERE idPsicologia=$idPsicologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function dibujarFormularioIngresopsicologia()
	{
		echo "<form role='form'>";

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>idPsicologia</label>

                                <input type='email' class='form-control' id='idPsicologia' placeholder='idPsicologia'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>consulta</label>

                                <input type='email' class='form-control' id='consulta' placeholder='consulta'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>desPsi</label>

                                <input type='email' class='form-control' id='desPsi' placeholder='desPsi'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>traRec</label>

                                <input type='email' class='form-control' id='traRec' placeholder='traRec'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>antEmb</label>

                                <input type='email' class='form-control' id='antEmb' placeholder='antEmb'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>antPar</label>

                                <input type='email' class='form-control' id='antPar' placeholder='antPar'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>antDesPsi</label>

                                <input type='email' class='form-control' id='antDesPsi' placeholder='antDesPsi'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>antDesPsi2</label>

                                <input type='email' class='form-control' id='antDesPsi2' placeholder='antDesPsi2'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>factNos</label>

                                <input type='email' class='form-control' id='factNos' placeholder='factNos'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>priInf</label>

                                <input type='email' class='form-control' id='priInf' placeholder='priInf'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>segInf</label>

                                <input type='email' class='form-control' id='segInf' placeholder='segInf'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>pub</label>

                                <input type='email' class='form-control' id='pub' placeholder='pub'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>ado</label>

                                <input type='email' class='form-control' id='ado' placeholder='ado'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>fam</label>

                                <input type='email' class='form-control' id='fam' placeholder='fam'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>relHer</label>

                                <input type='email' class='form-control' id='relHer' placeholder='relHer'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>actAcu</label>

                                <input type='email' class='form-control' id='actAcu' placeholder='actAcu'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>conAcu</label>

                                <input type='email' class='form-control' id='conAcu' placeholder='conAcu'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>expFam</label>

                                <input type='email' class='form-control' id='expFam' placeholder='expFam'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>diaFam</label>

                                <input type='email' class='form-control' id='diaFam' placeholder='diaFam'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>observaciones</label>

                                <input type='email' class='form-control' id='observaciones' placeholder='observaciones'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>conPsiObt</label>

                                <input type='email' class='form-control' id='conPsiObt' placeholder='conPsiObt'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>entSem</label>

                                <input type='email' class='form-control' id='entSem' placeholder='entSem'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>pruDesMad</label>

                                <input type='email' class='form-control' id='pruDesMad' placeholder='pruDesMad'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>otrPru2</label>

                                <input type='email' class='form-control' id='otrPru2' placeholder='otrPru2'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>concepto</label>

                                <input type='email' class='form-control' id='concepto' placeholder='concepto'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>profesional</label>

                                <input type='email' class='form-control' id='profesional' placeholder='profesional'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>diag1</label>

                                <input type='email' class='form-control' id='diag1' placeholder='diag1'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>diag2</label>

                                <input type='email' class='form-control' id='diag2' placeholder='diag2'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>diag3</label>

                                <input type='email' class='form-control' id='diag3' placeholder='diag3'>

                            </div>";

                

                echo "<button type='submit' class='btn btn-default' onclick='ingresarNuevopsicologia();return false;'>Ingresar</button>";

           echo "</form>";
	}

	function consultarTodospsicologia()
	{
		$bd=BD::getInstance();
		if($result=$bd->extraerDatos("SELECT * FROM psicologia"))
		{
			echo "<div class='panel panel-default'><div class='panel-heading'>Nombre de la Tabla</div> <table class='table'><thead><tr><th>idPsicologia</th><th>consulta</th><th>desPsi</th><th>traRec</th><th>antEmb</th><th>antPar</th><th>antDesPsi</th><th>antDesPsi2</th><th>factNos</th><th>priInf</th><th>segInf</th><th>pub</th><th>ado</th><th>fam</th><th>relHer</th><th>actAcu</th><th>conAcu</th><th>expFam</th><th>diaFam</th><th>observaciones</th><th>conPsiObt</th><th>entSem</th><th>pruDesMad</th><th>otrPru2</th><th>concepto</th><th>profesional</th><th>diag1</th><th>diag2</th><th>diag3</th><th>Accion</th></tr></thead><tbody>";

        
			while($filas = mysql_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>".$filas['idPsicologia']."</td>";
				echo "<td>".$filas['consulta']."</td>";
				echo "<td>".$filas['desPsi']."</td>";
				echo "<td>".$filas['traRec']."</td>";
				echo "<td>".$filas['antEmb']."</td>";
				echo "<td>".$filas['antPar']."</td>";
				echo "<td>".$filas['antDesPsi']."</td>";
				echo "<td>".$filas['antDesPsi2']."</td>";
				echo "<td>".$filas['factNos']."</td>";
				echo "<td>".$filas['priInf']."</td>";
				echo "<td>".$filas['segInf']."</td>";
				echo "<td>".$filas['pub']."</td>";
				echo "<td>".$filas['ado']."</td>";
				echo "<td>".$filas['fam']."</td>";
				echo "<td>".$filas['relHer']."</td>";
				echo "<td>".$filas['actAcu']."</td>";
				echo "<td>".$filas['conAcu']."</td>";
				echo "<td>".$filas['expFam']."</td>";
				echo "<td>".$filas['diaFam']."</td>";
				echo "<td>".$filas['observaciones']."</td>";
				echo "<td>".$filas['conPsiObt']."</td>";
				echo "<td>".$filas['entSem']."</td>";
				echo "<td>".$filas['pruDesMad']."</td>";
				echo "<td>".$filas['otrPru2']."</td>";
				echo "<td>".$filas['concepto']."</td>";
				echo "<td>".$filas['profesional']."</td>";
				echo "<td>".$filas['diag1']."</td>";
				echo "<td>".$filas['diag2']."</td>";
				echo "<td>".$filas['diag3']."</td>";
				echo "<td><p>

        <a href='#' class='btn btn-primary' role='button' onclick='dibujarFormularioModificarpsicologia(".$filas['idPsicologia'].");return false;'>Editar</a>

        <a href='#' class='btn btn-primary' role='button' onclick='eliminarpsicologia(".$filas['idPsicologia'].");return false;'>Eliminar</a>

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

	function dibujarFormularioModificarpsicologia($id)
	{
		$bd=BD::getInstance();
		$result=$bd->extraerDatos("SELECT * FROM psicologia WHERE idPsicologia=".$id);
		$filas = mysql_fetch_array($result);
		echo "<form role='form'>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>idPsicologia</label>

                            <input class='form-control' type='hidden' id='idPsicologia' value='".$filas["idPsicologia"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>consulta</label>

                            <input type='email' class='form-control' id='consulta' value='".$filas["consulta"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>desPsi</label>

                            <input type='email' class='form-control' id='desPsi' value='".$filas["desPsi"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>traRec</label>

                            <input type='email' class='form-control' id='traRec' value='".$filas["traRec"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>antEmb</label>

                            <input type='email' class='form-control' id='antEmb' value='".$filas["antEmb"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>antPar</label>

                            <input type='email' class='form-control' id='antPar' value='".$filas["antPar"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>antDesPsi</label>

                            <input type='email' class='form-control' id='antDesPsi' value='".$filas["antDesPsi"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>antDesPsi2</label>

                            <input type='email' class='form-control' id='antDesPsi2' value='".$filas["antDesPsi2"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>factNos</label>

                            <input type='email' class='form-control' id='factNos' value='".$filas["factNos"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>priInf</label>

                            <input type='email' class='form-control' id='priInf' value='".$filas["priInf"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>segInf</label>

                            <input type='email' class='form-control' id='segInf' value='".$filas["segInf"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>pub</label>

                            <input type='email' class='form-control' id='pub' value='".$filas["pub"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>ado</label>

                            <input type='email' class='form-control' id='ado' value='".$filas["ado"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>fam</label>

                            <input type='email' class='form-control' id='fam' value='".$filas["fam"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>relHer</label>

                            <input type='email' class='form-control' id='relHer' value='".$filas["relHer"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>actAcu</label>

                            <input type='email' class='form-control' id='actAcu' value='".$filas["actAcu"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>conAcu</label>

                            <input type='email' class='form-control' id='conAcu' value='".$filas["conAcu"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>expFam</label>

                            <input type='email' class='form-control' id='expFam' value='".$filas["expFam"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>diaFam</label>

                            <input type='email' class='form-control' id='diaFam' value='".$filas["diaFam"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>observaciones</label>

                            <input type='email' class='form-control' id='observaciones' value='".$filas["observaciones"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>conPsiObt</label>

                            <input type='email' class='form-control' id='conPsiObt' value='".$filas["conPsiObt"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>entSem</label>

                            <input type='email' class='form-control' id='entSem' value='".$filas["entSem"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>pruDesMad</label>

                            <input type='email' class='form-control' id='pruDesMad' value='".$filas["pruDesMad"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>otrPru2</label>

                            <input type='email' class='form-control' id='otrPru2' value='".$filas["otrPru2"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>concepto</label>

                            <input type='email' class='form-control' id='concepto' value='".$filas["concepto"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>profesional</label>

                            <input type='email' class='form-control' id='profesional' value='".$filas["profesional"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>diag1</label>

                            <input type='email' class='form-control' id='diag1' value='".$filas["diag1"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>diag2</label>

                            <input type='email' class='form-control' id='diag2' value='".$filas["diag2"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>diag3</label>

                            <input type='email' class='form-control' id='diag3' value='".$filas["diag3"]."'>

                        </div>";

                echo "<button type='submit' class='btn btn-default' type='submit' onclick='modificarpsicologia($id);return false;'>Modificar</button></form>";

           
	}
}
?>