<?php
include ('../bd/bd.php');
class trabajosocial
{
	function insertarDatos($idTrabajoSocial,$consulta,$relFamDecTom,$relFamExpAfe,$relFamExpAfePadHij,$relFamMotCon,$relFamExpCon,$relFamComFal,$relFamSan,$relFamActTieLib,$genograma,$obsGen,$eveVivFamUltAni1,$eveVivFamUltAni2,$eveVivFamUltAni3,$eveVivFamUltAni4,$eveVivFamUltAni5,$eveVivFamUltAni6,$eveVivFamUltAni7,$eveVivFamUltAni8,$eveVivFamUltAni9,$eveVivFamUltAni10,$eveVivFamUltAni11,$eveVivFamUltAni12,$eveVivFamUltAni13,$eveVivFamUltAni14,$eveVivFamUltAni15,$eveVivFamUltAni16,$eveVivFamUltAni17,$eveVivFamUltAni18,$eveVivFamUltAni19,$eveVivFamUltAni20,$eveVivFamUltAni21,$eveVivFamUltAni22,$eveVivFamUltAni23,$eveVivFamUltAni24,$dinRelFamA,$dinRelFamB,$crit1,$crit2,$crit3,$crit4,$crit5,$crit6,$crit7,$crit8,$crit9,$crit10,$crit11,$crit12,$crit13,$crit14,$crit15,$crit16,$crit17,$factGen,$factVul,$aspHabTipBar,$aspHabSerTra,$aspHabEst,$aspHabTipViv,$aspHabDes,$aspHabTen,$aspHabSer,$aspHabLim,$conEcoResObl,$conEcoIngMen,$concepto,$plaTraObj,$plaTraAct,$plaTraMet,$plaTraObj2,$plaTraAct2,$plaTraMet2,$profesional,$diag1,$diag2,$diag3)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("INSERT INTO trabajosocial(consulta,relFamDecTom,relFamExpAfe,relFamExpAfePadHij,relFamMotCon,relFamExpCon,relFamComFal,relFamSan,relFamActTieLib,genograma,obsGen,eveVivFamUltAni1,eveVivFamUltAni2,eveVivFamUltAni3,eveVivFamUltAni4,eveVivFamUltAni5,eveVivFamUltAni6,eveVivFamUltAni7,eveVivFamUltAni8,eveVivFamUltAni9,eveVivFamUltAni10,eveVivFamUltAni11,eveVivFamUltAni12,eveVivFamUltAni13,eveVivFamUltAni14,eveVivFamUltAni15,eveVivFamUltAni16,eveVivFamUltAni17,eveVivFamUltAni18,eveVivFamUltAni19,eveVivFamUltAni20,eveVivFamUltAni21,eveVivFamUltAni22,eveVivFamUltAni23,eveVivFamUltAni24,dinRelFamA,dinRelFamB,crit1,crit2,crit3,crit4,crit5,crit6,crit7,crit8,crit9,crit10,crit11,crit12,crit13,crit14,crit15,crit16,crit17,factGen,factVul,aspHabTipBar,aspHabSerTra,aspHabEst,aspHabTipViv,aspHabDes,aspHabTen,aspHabSer,aspHabLim,conEcoResObl,conEcoIngMen,concepto,plaTraObj,plaTraAct,plaTraMet,plaTraObj2,plaTraAct2,plaTraMet2,profesional,diag1,diag2,diag3) VALUES ('$consulta','$relFamDecTom','$relFamExpAfe','$relFamExpAfePadHij','$relFamMotCon','$relFamExpCon','$relFamComFal','$relFamSan','$relFamActTieLib','$genograma','$obsGen','$eveVivFamUltAni1','$eveVivFamUltAni2','$eveVivFamUltAni3','$eveVivFamUltAni4','$eveVivFamUltAni5','$eveVivFamUltAni6','$eveVivFamUltAni7','$eveVivFamUltAni8','$eveVivFamUltAni9','$eveVivFamUltAni10','$eveVivFamUltAni11','$eveVivFamUltAni12','$eveVivFamUltAni13','$eveVivFamUltAni14','$eveVivFamUltAni15','$eveVivFamUltAni16','$eveVivFamUltAni17','$eveVivFamUltAni18','$eveVivFamUltAni19','$eveVivFamUltAni20','$eveVivFamUltAni21','$eveVivFamUltAni22','$eveVivFamUltAni23','$eveVivFamUltAni24','$dinRelFamA','$dinRelFamB','$crit1','$crit2','$crit3','$crit4','$crit5','$crit6','$crit7','$crit8','$crit9','$crit10','$crit11','$crit12','$crit13','$crit14','$crit15','$crit16','$crit17','$factGen','$factVul','$aspHabTipBar','$aspHabSerTra','$aspHabEst','$aspHabTipViv','$aspHabDes','$aspHabTen','$aspHabSer','$aspHabLim','$conEcoResObl','$conEcoIngMen','$concepto','$plaTraObj','$plaTraAct','$plaTraMet','$plaTraObj2','$plaTraAct2','$plaTraMet2','$profesional','$diag1','$diag2','$diag3')"))
		{
			echo "Registro de datos exitoso";
		}
		else
		{
			echo "No se pudo hacer el registro de datos";
		}
	}

	function consultarDatos($idTrabajoSocial)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("SELECT * FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo "Consulta de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la consulta de datos";
		}
	}

	function eliminarDatos($idTrabajoSocial)
	{
		$bd=BD::getInstance();
		if($bd->extraerDatos("DELETE FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo "Eliminación exitosa";
		}
		else
		{
			echo "No se pudo realizar la eliminación de datos";
		}
	}

	function actualizarDatos($idTrabajoSocial,$consulta,$relFamDecTom,$relFamExpAfe,$relFamExpAfePadHij,$relFamMotCon,$relFamExpCon,$relFamComFal,$relFamSan,$relFamActTieLib,$genograma,$obsGen,$eveVivFamUltAni1,$eveVivFamUltAni2,$eveVivFamUltAni3,$eveVivFamUltAni4,$eveVivFamUltAni5,$eveVivFamUltAni6,$eveVivFamUltAni7,$eveVivFamUltAni8,$eveVivFamUltAni9,$eveVivFamUltAni10,$eveVivFamUltAni11,$eveVivFamUltAni12,$eveVivFamUltAni13,$eveVivFamUltAni14,$eveVivFamUltAni15,$eveVivFamUltAni16,$eveVivFamUltAni17,$eveVivFamUltAni18,$eveVivFamUltAni19,$eveVivFamUltAni20,$eveVivFamUltAni21,$eveVivFamUltAni22,$eveVivFamUltAni23,$eveVivFamUltAni24,$dinRelFamA,$dinRelFamB,$crit1,$crit2,$crit3,$crit4,$crit5,$crit6,$crit7,$crit8,$crit9,$crit10,$crit11,$crit12,$crit13,$crit14,$crit15,$crit16,$crit17,$factGen,$factVul,$aspHabTipBar,$aspHabSerTra,$aspHabEst,$aspHabTipViv,$aspHabDes,$aspHabTen,$aspHabSer,$aspHabLim,$conEcoResObl,$conEcoIngMen,$concepto,$plaTraObj,$plaTraAct,$plaTraMet,$plaTraObj2,$plaTraAct2,$plaTraMet2,$profesional,$diag1,$diag2,$diag3)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("UPDATE trabajosocial SET consulta='$consulta',relFamDecTom='$relFamDecTom',relFamExpAfe='$relFamExpAfe',relFamExpAfePadHij='$relFamExpAfePadHij',relFamMotCon='$relFamMotCon',relFamExpCon='$relFamExpCon',relFamComFal='$relFamComFal',relFamSan='$relFamSan',relFamActTieLib='$relFamActTieLib',genograma='$genograma',obsGen='$obsGen',eveVivFamUltAni1='$eveVivFamUltAni1',eveVivFamUltAni2='$eveVivFamUltAni2',eveVivFamUltAni3='$eveVivFamUltAni3',eveVivFamUltAni4='$eveVivFamUltAni4',eveVivFamUltAni5='$eveVivFamUltAni5',eveVivFamUltAni6='$eveVivFamUltAni6',eveVivFamUltAni7='$eveVivFamUltAni7',eveVivFamUltAni8='$eveVivFamUltAni8',eveVivFamUltAni9='$eveVivFamUltAni9',eveVivFamUltAni10='$eveVivFamUltAni10',eveVivFamUltAni11='$eveVivFamUltAni11',eveVivFamUltAni12='$eveVivFamUltAni12',eveVivFamUltAni13='$eveVivFamUltAni13',eveVivFamUltAni14='$eveVivFamUltAni14',eveVivFamUltAni15='$eveVivFamUltAni15',eveVivFamUltAni16='$eveVivFamUltAni16',eveVivFamUltAni17='$eveVivFamUltAni17',eveVivFamUltAni18='$eveVivFamUltAni18',eveVivFamUltAni19='$eveVivFamUltAni19',eveVivFamUltAni20='$eveVivFamUltAni20',eveVivFamUltAni21='$eveVivFamUltAni21',eveVivFamUltAni22='$eveVivFamUltAni22',eveVivFamUltAni23='$eveVivFamUltAni23',eveVivFamUltAni24='$eveVivFamUltAni24',dinRelFamA='$dinRelFamA',dinRelFamB='$dinRelFamB',crit1='$crit1',crit2='$crit2',crit3='$crit3',crit4='$crit4',crit5='$crit5',crit6='$crit6',crit7='$crit7',crit8='$crit8',crit9='$crit9',crit10='$crit10',crit11='$crit11',crit12='$crit12',crit13='$crit13',crit14='$crit14',crit15='$crit15',crit16='$crit16',crit17='$crit17',factGen='$factGen',factVul='$factVul',aspHabTipBar='$aspHabTipBar',aspHabSerTra='$aspHabSerTra',aspHabEst='$aspHabEst',aspHabTipViv='$aspHabTipViv',aspHabDes='$aspHabDes',aspHabTen='$aspHabTen',aspHabSer='$aspHabSer',aspHabLim='$aspHabLim',conEcoResObl='$conEcoResObl',conEcoIngMen='$conEcoIngMen',concepto='$concepto',plaTraObj='$plaTraObj',plaTraAct='$plaTraAct',plaTraMet='$plaTraMet',plaTraObj2='$plaTraObj2',plaTraAct2='$plaTraAct2',plaTraMet2='$plaTraMet2',profesional='$profesional',diag1='$diag1',diag2='$diag2',diag3='$diag3' WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo "Modificación de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la modificación de datos";
		}
	}

	function getconsulta($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT consulta FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['consulta'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getrelFamDecTom($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT relFamDecTom FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['relFamDecTom'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getrelFamExpAfe($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT relFamExpAfe FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['relFamExpAfe'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getrelFamExpAfePadHij($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT relFamExpAfePadHij FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['relFamExpAfePadHij'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getrelFamMotCon($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT relFamMotCon FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['relFamMotCon'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getrelFamExpCon($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT relFamExpCon FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['relFamExpCon'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getrelFamComFal($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT relFamComFal FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['relFamComFal'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getrelFamSan($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT relFamSan FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['relFamSan'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getrelFamActTieLib($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT relFamActTieLib FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['relFamActTieLib'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getgenograma($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT genograma FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['genograma'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getobsGen($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT obsGen FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['obsGen'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function geteveVivFamUltAni1($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT eveVivFamUltAni1 FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['eveVivFamUltAni1'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function geteveVivFamUltAni2($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT eveVivFamUltAni2 FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['eveVivFamUltAni2'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function geteveVivFamUltAni3($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT eveVivFamUltAni3 FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['eveVivFamUltAni3'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function geteveVivFamUltAni4($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT eveVivFamUltAni4 FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['eveVivFamUltAni4'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function geteveVivFamUltAni5($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT eveVivFamUltAni5 FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['eveVivFamUltAni5'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function geteveVivFamUltAni6($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT eveVivFamUltAni6 FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['eveVivFamUltAni6'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function geteveVivFamUltAni7($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT eveVivFamUltAni7 FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['eveVivFamUltAni7'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function geteveVivFamUltAni8($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT eveVivFamUltAni8 FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['eveVivFamUltAni8'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function geteveVivFamUltAni9($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT eveVivFamUltAni9 FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['eveVivFamUltAni9'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function geteveVivFamUltAni10($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT eveVivFamUltAni10 FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['eveVivFamUltAni10'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function geteveVivFamUltAni11($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT eveVivFamUltAni11 FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['eveVivFamUltAni11'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function geteveVivFamUltAni12($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT eveVivFamUltAni12 FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['eveVivFamUltAni12'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function geteveVivFamUltAni13($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT eveVivFamUltAni13 FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['eveVivFamUltAni13'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function geteveVivFamUltAni14($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT eveVivFamUltAni14 FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['eveVivFamUltAni14'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function geteveVivFamUltAni15($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT eveVivFamUltAni15 FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['eveVivFamUltAni15'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function geteveVivFamUltAni16($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT eveVivFamUltAni16 FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['eveVivFamUltAni16'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function geteveVivFamUltAni17($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT eveVivFamUltAni17 FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['eveVivFamUltAni17'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function geteveVivFamUltAni18($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT eveVivFamUltAni18 FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['eveVivFamUltAni18'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function geteveVivFamUltAni19($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT eveVivFamUltAni19 FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['eveVivFamUltAni19'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function geteveVivFamUltAni20($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT eveVivFamUltAni20 FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['eveVivFamUltAni20'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function geteveVivFamUltAni21($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT eveVivFamUltAni21 FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['eveVivFamUltAni21'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function geteveVivFamUltAni22($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT eveVivFamUltAni22 FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['eveVivFamUltAni22'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function geteveVivFamUltAni23($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT eveVivFamUltAni23 FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['eveVivFamUltAni23'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function geteveVivFamUltAni24($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT eveVivFamUltAni24 FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['eveVivFamUltAni24'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getdinRelFamA($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT dinRelFamA FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['dinRelFamA'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getdinRelFamB($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT dinRelFamB FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['dinRelFamB'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getcrit1($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT crit1 FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['crit1'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getcrit2($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT crit2 FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['crit2'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getcrit3($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT crit3 FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['crit3'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getcrit4($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT crit4 FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['crit4'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getcrit5($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT crit5 FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['crit5'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getcrit6($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT crit6 FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['crit6'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getcrit7($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT crit7 FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['crit7'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getcrit8($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT crit8 FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['crit8'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getcrit9($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT crit9 FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['crit9'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getcrit10($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT crit10 FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['crit10'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getcrit11($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT crit11 FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['crit11'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getcrit12($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT crit12 FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['crit12'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getcrit13($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT crit13 FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['crit13'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getcrit14($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT crit14 FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['crit14'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getcrit15($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT crit15 FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['crit15'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getcrit16($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT crit16 FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['crit16'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getcrit17($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT crit17 FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['crit17'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getfactGen($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT factGen FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['factGen'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getfactVul($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT factVul FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['factVul'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getaspHabTipBar($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT aspHabTipBar FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['aspHabTipBar'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getaspHabSerTra($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT aspHabSerTra FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['aspHabSerTra'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getaspHabEst($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT aspHabEst FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['aspHabEst'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getaspHabTipViv($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT aspHabTipViv FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['aspHabTipViv'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getaspHabDes($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT aspHabDes FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['aspHabDes'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getaspHabTen($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT aspHabTen FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['aspHabTen'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getaspHabSer($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT aspHabSer FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['aspHabSer'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getaspHabLim($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT aspHabLim FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['aspHabLim'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getconEcoResObl($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT conEcoResObl FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['conEcoResObl'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getconEcoIngMen($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT conEcoIngMen FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['conEcoIngMen'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getconcepto($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT concepto FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['concepto'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getplaTraObj($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT plaTraObj FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['plaTraObj'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getplaTraAct($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT plaTraAct FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['plaTraAct'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getplaTraMet($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT plaTraMet FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['plaTraMet'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getplaTraObj2($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT plaTraObj2 FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['plaTraObj2'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getplaTraAct2($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT plaTraAct2 FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['plaTraAct2'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getplaTraMet2($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT plaTraMet2 FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['plaTraMet2'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getprofesional($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT profesional FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['profesional'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getdiag1($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT diag1 FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['diag1'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getdiag2($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT diag2 FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['diag2'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getdiag3($idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("SELECT diag3 FROM trabajosocial WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['diag3'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function setconsulta($consulta,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET consulta=$consulta WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setrelFamDecTom($relFamDecTom,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET relFamDecTom=$relFamDecTom WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setrelFamExpAfe($relFamExpAfe,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET relFamExpAfe=$relFamExpAfe WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setrelFamExpAfePadHij($relFamExpAfePadHij,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET relFamExpAfePadHij=$relFamExpAfePadHij WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setrelFamMotCon($relFamMotCon,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET relFamMotCon=$relFamMotCon WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setrelFamExpCon($relFamExpCon,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET relFamExpCon=$relFamExpCon WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setrelFamComFal($relFamComFal,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET relFamComFal=$relFamComFal WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setrelFamSan($relFamSan,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET relFamSan=$relFamSan WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setrelFamActTieLib($relFamActTieLib,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET relFamActTieLib=$relFamActTieLib WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setgenograma($genograma,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET genograma=$genograma WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setobsGen($obsGen,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET obsGen=$obsGen WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function seteveVivFamUltAni1($eveVivFamUltAni1,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET eveVivFamUltAni1=$eveVivFamUltAni1 WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function seteveVivFamUltAni2($eveVivFamUltAni2,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET eveVivFamUltAni2=$eveVivFamUltAni2 WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function seteveVivFamUltAni3($eveVivFamUltAni3,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET eveVivFamUltAni3=$eveVivFamUltAni3 WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function seteveVivFamUltAni4($eveVivFamUltAni4,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET eveVivFamUltAni4=$eveVivFamUltAni4 WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function seteveVivFamUltAni5($eveVivFamUltAni5,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET eveVivFamUltAni5=$eveVivFamUltAni5 WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function seteveVivFamUltAni6($eveVivFamUltAni6,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET eveVivFamUltAni6=$eveVivFamUltAni6 WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function seteveVivFamUltAni7($eveVivFamUltAni7,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET eveVivFamUltAni7=$eveVivFamUltAni7 WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function seteveVivFamUltAni8($eveVivFamUltAni8,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET eveVivFamUltAni8=$eveVivFamUltAni8 WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function seteveVivFamUltAni9($eveVivFamUltAni9,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET eveVivFamUltAni9=$eveVivFamUltAni9 WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function seteveVivFamUltAni10($eveVivFamUltAni10,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET eveVivFamUltAni10=$eveVivFamUltAni10 WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function seteveVivFamUltAni11($eveVivFamUltAni11,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET eveVivFamUltAni11=$eveVivFamUltAni11 WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function seteveVivFamUltAni12($eveVivFamUltAni12,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET eveVivFamUltAni12=$eveVivFamUltAni12 WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function seteveVivFamUltAni13($eveVivFamUltAni13,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET eveVivFamUltAni13=$eveVivFamUltAni13 WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function seteveVivFamUltAni14($eveVivFamUltAni14,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET eveVivFamUltAni14=$eveVivFamUltAni14 WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function seteveVivFamUltAni15($eveVivFamUltAni15,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET eveVivFamUltAni15=$eveVivFamUltAni15 WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function seteveVivFamUltAni16($eveVivFamUltAni16,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET eveVivFamUltAni16=$eveVivFamUltAni16 WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function seteveVivFamUltAni17($eveVivFamUltAni17,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET eveVivFamUltAni17=$eveVivFamUltAni17 WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function seteveVivFamUltAni18($eveVivFamUltAni18,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET eveVivFamUltAni18=$eveVivFamUltAni18 WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function seteveVivFamUltAni19($eveVivFamUltAni19,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET eveVivFamUltAni19=$eveVivFamUltAni19 WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function seteveVivFamUltAni20($eveVivFamUltAni20,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET eveVivFamUltAni20=$eveVivFamUltAni20 WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function seteveVivFamUltAni21($eveVivFamUltAni21,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET eveVivFamUltAni21=$eveVivFamUltAni21 WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function seteveVivFamUltAni22($eveVivFamUltAni22,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET eveVivFamUltAni22=$eveVivFamUltAni22 WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function seteveVivFamUltAni23($eveVivFamUltAni23,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET eveVivFamUltAni23=$eveVivFamUltAni23 WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function seteveVivFamUltAni24($eveVivFamUltAni24,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET eveVivFamUltAni24=$eveVivFamUltAni24 WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setdinRelFamA($dinRelFamA,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET dinRelFamA=$dinRelFamA WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setdinRelFamB($dinRelFamB,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET dinRelFamB=$dinRelFamB WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setcrit1($crit1,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET crit1=$crit1 WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setcrit2($crit2,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET crit2=$crit2 WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setcrit3($crit3,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET crit3=$crit3 WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setcrit4($crit4,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET crit4=$crit4 WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setcrit5($crit5,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET crit5=$crit5 WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setcrit6($crit6,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET crit6=$crit6 WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setcrit7($crit7,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET crit7=$crit7 WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setcrit8($crit8,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET crit8=$crit8 WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setcrit9($crit9,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET crit9=$crit9 WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setcrit10($crit10,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET crit10=$crit10 WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setcrit11($crit11,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET crit11=$crit11 WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setcrit12($crit12,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET crit12=$crit12 WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setcrit13($crit13,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET crit13=$crit13 WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setcrit14($crit14,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET crit14=$crit14 WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setcrit15($crit15,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET crit15=$crit15 WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setcrit16($crit16,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET crit16=$crit16 WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setcrit17($crit17,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET crit17=$crit17 WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setfactGen($factGen,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET factGen=$factGen WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setfactVul($factVul,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET factVul=$factVul WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setaspHabTipBar($aspHabTipBar,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET aspHabTipBar=$aspHabTipBar WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setaspHabSerTra($aspHabSerTra,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET aspHabSerTra=$aspHabSerTra WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setaspHabEst($aspHabEst,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET aspHabEst=$aspHabEst WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setaspHabTipViv($aspHabTipViv,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET aspHabTipViv=$aspHabTipViv WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setaspHabDes($aspHabDes,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET aspHabDes=$aspHabDes WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setaspHabTen($aspHabTen,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET aspHabTen=$aspHabTen WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setaspHabSer($aspHabSer,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET aspHabSer=$aspHabSer WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setaspHabLim($aspHabLim,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET aspHabLim=$aspHabLim WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setconEcoResObl($conEcoResObl,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET conEcoResObl=$conEcoResObl WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setconEcoIngMen($conEcoIngMen,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET conEcoIngMen=$conEcoIngMen WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setconcepto($concepto,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET concepto=$concepto WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setplaTraObj($plaTraObj,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET plaTraObj=$plaTraObj WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setplaTraAct($plaTraAct,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET plaTraAct=$plaTraAct WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setplaTraMet($plaTraMet,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET plaTraMet=$plaTraMet WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setplaTraObj2($plaTraObj2,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET plaTraObj2=$plaTraObj2 WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setplaTraAct2($plaTraAct2,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET plaTraAct2=$plaTraAct2 WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setplaTraMet2($plaTraMet2,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET plaTraMet2=$plaTraMet2 WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setprofesional($profesional,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET profesional=$profesional WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setdiag1($diag1,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET diag1=$diag1 WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setdiag2($diag2,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET diag2=$diag2 WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setdiag3($diag3,$idTrabajoSocial)
	{
		
		if($result=$bd->insertarDatos("UPDATE trabajosocial SET diag3=$diag3 WHERE idTrabajoSocial=$idTrabajoSocial"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function dibujarFormularioIngresotrabajosocial()
	{
		echo "<form role='form'>";

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>idTrabajoSocial</label>

                                <input type='email' class='form-control' id='idTrabajoSocial' placeholder='idTrabajoSocial'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>consulta</label>

                                <input type='email' class='form-control' id='consulta' placeholder='consulta'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>relFamDecTom</label>

                                <input type='email' class='form-control' id='relFamDecTom' placeholder='relFamDecTom'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>relFamExpAfe</label>

                                <input type='email' class='form-control' id='relFamExpAfe' placeholder='relFamExpAfe'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>relFamExpAfePadHij</label>

                                <input type='email' class='form-control' id='relFamExpAfePadHij' placeholder='relFamExpAfePadHij'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>relFamMotCon</label>

                                <input type='email' class='form-control' id='relFamMotCon' placeholder='relFamMotCon'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>relFamExpCon</label>

                                <input type='email' class='form-control' id='relFamExpCon' placeholder='relFamExpCon'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>relFamComFal</label>

                                <input type='email' class='form-control' id='relFamComFal' placeholder='relFamComFal'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>relFamSan</label>

                                <input type='email' class='form-control' id='relFamSan' placeholder='relFamSan'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>relFamActTieLib</label>

                                <input type='email' class='form-control' id='relFamActTieLib' placeholder='relFamActTieLib'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>genograma</label>

                                <input type='email' class='form-control' id='genograma' placeholder='genograma'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>obsGen</label>

                                <input type='email' class='form-control' id='obsGen' placeholder='obsGen'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>eveVivFamUltAni1</label>

                                <input type='email' class='form-control' id='eveVivFamUltAni1' placeholder='eveVivFamUltAni1'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>eveVivFamUltAni2</label>

                                <input type='email' class='form-control' id='eveVivFamUltAni2' placeholder='eveVivFamUltAni2'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>eveVivFamUltAni3</label>

                                <input type='email' class='form-control' id='eveVivFamUltAni3' placeholder='eveVivFamUltAni3'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>eveVivFamUltAni4</label>

                                <input type='email' class='form-control' id='eveVivFamUltAni4' placeholder='eveVivFamUltAni4'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>eveVivFamUltAni5</label>

                                <input type='email' class='form-control' id='eveVivFamUltAni5' placeholder='eveVivFamUltAni5'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>eveVivFamUltAni6</label>

                                <input type='email' class='form-control' id='eveVivFamUltAni6' placeholder='eveVivFamUltAni6'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>eveVivFamUltAni7</label>

                                <input type='email' class='form-control' id='eveVivFamUltAni7' placeholder='eveVivFamUltAni7'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>eveVivFamUltAni8</label>

                                <input type='email' class='form-control' id='eveVivFamUltAni8' placeholder='eveVivFamUltAni8'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>eveVivFamUltAni9</label>

                                <input type='email' class='form-control' id='eveVivFamUltAni9' placeholder='eveVivFamUltAni9'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>eveVivFamUltAni10</label>

                                <input type='email' class='form-control' id='eveVivFamUltAni10' placeholder='eveVivFamUltAni10'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>eveVivFamUltAni11</label>

                                <input type='email' class='form-control' id='eveVivFamUltAni11' placeholder='eveVivFamUltAni11'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>eveVivFamUltAni12</label>

                                <input type='email' class='form-control' id='eveVivFamUltAni12' placeholder='eveVivFamUltAni12'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>eveVivFamUltAni13</label>

                                <input type='email' class='form-control' id='eveVivFamUltAni13' placeholder='eveVivFamUltAni13'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>eveVivFamUltAni14</label>

                                <input type='email' class='form-control' id='eveVivFamUltAni14' placeholder='eveVivFamUltAni14'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>eveVivFamUltAni15</label>

                                <input type='email' class='form-control' id='eveVivFamUltAni15' placeholder='eveVivFamUltAni15'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>eveVivFamUltAni16</label>

                                <input type='email' class='form-control' id='eveVivFamUltAni16' placeholder='eveVivFamUltAni16'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>eveVivFamUltAni17</label>

                                <input type='email' class='form-control' id='eveVivFamUltAni17' placeholder='eveVivFamUltAni17'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>eveVivFamUltAni18</label>

                                <input type='email' class='form-control' id='eveVivFamUltAni18' placeholder='eveVivFamUltAni18'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>eveVivFamUltAni19</label>

                                <input type='email' class='form-control' id='eveVivFamUltAni19' placeholder='eveVivFamUltAni19'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>eveVivFamUltAni20</label>

                                <input type='email' class='form-control' id='eveVivFamUltAni20' placeholder='eveVivFamUltAni20'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>eveVivFamUltAni21</label>

                                <input type='email' class='form-control' id='eveVivFamUltAni21' placeholder='eveVivFamUltAni21'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>eveVivFamUltAni22</label>

                                <input type='email' class='form-control' id='eveVivFamUltAni22' placeholder='eveVivFamUltAni22'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>eveVivFamUltAni23</label>

                                <input type='email' class='form-control' id='eveVivFamUltAni23' placeholder='eveVivFamUltAni23'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>eveVivFamUltAni24</label>

                                <input type='email' class='form-control' id='eveVivFamUltAni24' placeholder='eveVivFamUltAni24'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>dinRelFamA</label>

                                <input type='email' class='form-control' id='dinRelFamA' placeholder='dinRelFamA'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>dinRelFamB</label>

                                <input type='email' class='form-control' id='dinRelFamB' placeholder='dinRelFamB'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>crit1</label>

                                <input type='email' class='form-control' id='crit1' placeholder='crit1'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>crit2</label>

                                <input type='email' class='form-control' id='crit2' placeholder='crit2'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>crit3</label>

                                <input type='email' class='form-control' id='crit3' placeholder='crit3'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>crit4</label>

                                <input type='email' class='form-control' id='crit4' placeholder='crit4'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>crit5</label>

                                <input type='email' class='form-control' id='crit5' placeholder='crit5'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>crit6</label>

                                <input type='email' class='form-control' id='crit6' placeholder='crit6'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>crit7</label>

                                <input type='email' class='form-control' id='crit7' placeholder='crit7'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>crit8</label>

                                <input type='email' class='form-control' id='crit8' placeholder='crit8'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>crit9</label>

                                <input type='email' class='form-control' id='crit9' placeholder='crit9'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>crit10</label>

                                <input type='email' class='form-control' id='crit10' placeholder='crit10'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>crit11</label>

                                <input type='email' class='form-control' id='crit11' placeholder='crit11'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>crit12</label>

                                <input type='email' class='form-control' id='crit12' placeholder='crit12'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>crit13</label>

                                <input type='email' class='form-control' id='crit13' placeholder='crit13'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>crit14</label>

                                <input type='email' class='form-control' id='crit14' placeholder='crit14'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>crit15</label>

                                <input type='email' class='form-control' id='crit15' placeholder='crit15'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>crit16</label>

                                <input type='email' class='form-control' id='crit16' placeholder='crit16'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>crit17</label>

                                <input type='email' class='form-control' id='crit17' placeholder='crit17'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>factGen</label>

                                <input type='email' class='form-control' id='factGen' placeholder='factGen'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>factVul</label>

                                <input type='email' class='form-control' id='factVul' placeholder='factVul'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>aspHabTipBar</label>

                                <input type='email' class='form-control' id='aspHabTipBar' placeholder='aspHabTipBar'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>aspHabSerTra</label>

                                <input type='email' class='form-control' id='aspHabSerTra' placeholder='aspHabSerTra'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>aspHabEst</label>

                                <input type='email' class='form-control' id='aspHabEst' placeholder='aspHabEst'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>aspHabTipViv</label>

                                <input type='email' class='form-control' id='aspHabTipViv' placeholder='aspHabTipViv'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>aspHabDes</label>

                                <input type='email' class='form-control' id='aspHabDes' placeholder='aspHabDes'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>aspHabTen</label>

                                <input type='email' class='form-control' id='aspHabTen' placeholder='aspHabTen'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>aspHabSer</label>

                                <input type='email' class='form-control' id='aspHabSer' placeholder='aspHabSer'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>aspHabLim</label>

                                <input type='email' class='form-control' id='aspHabLim' placeholder='aspHabLim'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>conEcoResObl</label>

                                <input type='email' class='form-control' id='conEcoResObl' placeholder='conEcoResObl'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>conEcoIngMen</label>

                                <input type='email' class='form-control' id='conEcoIngMen' placeholder='conEcoIngMen'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>concepto</label>

                                <input type='email' class='form-control' id='concepto' placeholder='concepto'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>plaTraObj</label>

                                <input type='email' class='form-control' id='plaTraObj' placeholder='plaTraObj'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>plaTraAct</label>

                                <input type='email' class='form-control' id='plaTraAct' placeholder='plaTraAct'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>plaTraMet</label>

                                <input type='email' class='form-control' id='plaTraMet' placeholder='plaTraMet'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>plaTraObj2</label>

                                <input type='email' class='form-control' id='plaTraObj2' placeholder='plaTraObj2'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>plaTraAct2</label>

                                <input type='email' class='form-control' id='plaTraAct2' placeholder='plaTraAct2'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>plaTraMet2</label>

                                <input type='email' class='form-control' id='plaTraMet2' placeholder='plaTraMet2'>

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

                

                echo "<button type='submit' class='btn btn-default' onclick='ingresarNuevotrabajosocial();return false;'>Ingresar</button>";

           echo "</form>";
	}

	function consultarTodostrabajosocial()
	{
		$bd=BD::getInstance();
		if($result=$bd->extraerDatos("SELECT * FROM trabajosocial"))
		{
			echo "<div class='panel panel-default'><div class='panel-heading'>Nombre de la Tabla</div> <table class='table'><thead><tr><th>idTrabajoSocial</th><th>consulta</th><th>relFamDecTom</th><th>relFamExpAfe</th><th>relFamExpAfePadHij</th><th>relFamMotCon</th><th>relFamExpCon</th><th>relFamComFal</th><th>relFamSan</th><th>relFamActTieLib</th><th>genograma</th><th>obsGen</th><th>eveVivFamUltAni1</th><th>eveVivFamUltAni2</th><th>eveVivFamUltAni3</th><th>eveVivFamUltAni4</th><th>eveVivFamUltAni5</th><th>eveVivFamUltAni6</th><th>eveVivFamUltAni7</th><th>eveVivFamUltAni8</th><th>eveVivFamUltAni9</th><th>eveVivFamUltAni10</th><th>eveVivFamUltAni11</th><th>eveVivFamUltAni12</th><th>eveVivFamUltAni13</th><th>eveVivFamUltAni14</th><th>eveVivFamUltAni15</th><th>eveVivFamUltAni16</th><th>eveVivFamUltAni17</th><th>eveVivFamUltAni18</th><th>eveVivFamUltAni19</th><th>eveVivFamUltAni20</th><th>eveVivFamUltAni21</th><th>eveVivFamUltAni22</th><th>eveVivFamUltAni23</th><th>eveVivFamUltAni24</th><th>dinRelFamA</th><th>dinRelFamB</th><th>crit1</th><th>crit2</th><th>crit3</th><th>crit4</th><th>crit5</th><th>crit6</th><th>crit7</th><th>crit8</th><th>crit9</th><th>crit10</th><th>crit11</th><th>crit12</th><th>crit13</th><th>crit14</th><th>crit15</th><th>crit16</th><th>crit17</th><th>factGen</th><th>factVul</th><th>aspHabTipBar</th><th>aspHabSerTra</th><th>aspHabEst</th><th>aspHabTipViv</th><th>aspHabDes</th><th>aspHabTen</th><th>aspHabSer</th><th>aspHabLim</th><th>conEcoResObl</th><th>conEcoIngMen</th><th>concepto</th><th>plaTraObj</th><th>plaTraAct</th><th>plaTraMet</th><th>plaTraObj2</th><th>plaTraAct2</th><th>plaTraMet2</th><th>profesional</th><th>diag1</th><th>diag2</th><th>diag3</th><th>Accion</th></tr></thead><tbody>";

        
			while($filas = mysql_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>".$filas['idTrabajoSocial']."</td>";
				echo "<td>".$filas['consulta']."</td>";
				echo "<td>".$filas['relFamDecTom']."</td>";
				echo "<td>".$filas['relFamExpAfe']."</td>";
				echo "<td>".$filas['relFamExpAfePadHij']."</td>";
				echo "<td>".$filas['relFamMotCon']."</td>";
				echo "<td>".$filas['relFamExpCon']."</td>";
				echo "<td>".$filas['relFamComFal']."</td>";
				echo "<td>".$filas['relFamSan']."</td>";
				echo "<td>".$filas['relFamActTieLib']."</td>";
				echo "<td>".$filas['genograma']."</td>";
				echo "<td>".$filas['obsGen']."</td>";
				echo "<td>".$filas['eveVivFamUltAni1']."</td>";
				echo "<td>".$filas['eveVivFamUltAni2']."</td>";
				echo "<td>".$filas['eveVivFamUltAni3']."</td>";
				echo "<td>".$filas['eveVivFamUltAni4']."</td>";
				echo "<td>".$filas['eveVivFamUltAni5']."</td>";
				echo "<td>".$filas['eveVivFamUltAni6']."</td>";
				echo "<td>".$filas['eveVivFamUltAni7']."</td>";
				echo "<td>".$filas['eveVivFamUltAni8']."</td>";
				echo "<td>".$filas['eveVivFamUltAni9']."</td>";
				echo "<td>".$filas['eveVivFamUltAni10']."</td>";
				echo "<td>".$filas['eveVivFamUltAni11']."</td>";
				echo "<td>".$filas['eveVivFamUltAni12']."</td>";
				echo "<td>".$filas['eveVivFamUltAni13']."</td>";
				echo "<td>".$filas['eveVivFamUltAni14']."</td>";
				echo "<td>".$filas['eveVivFamUltAni15']."</td>";
				echo "<td>".$filas['eveVivFamUltAni16']."</td>";
				echo "<td>".$filas['eveVivFamUltAni17']."</td>";
				echo "<td>".$filas['eveVivFamUltAni18']."</td>";
				echo "<td>".$filas['eveVivFamUltAni19']."</td>";
				echo "<td>".$filas['eveVivFamUltAni20']."</td>";
				echo "<td>".$filas['eveVivFamUltAni21']."</td>";
				echo "<td>".$filas['eveVivFamUltAni22']."</td>";
				echo "<td>".$filas['eveVivFamUltAni23']."</td>";
				echo "<td>".$filas['eveVivFamUltAni24']."</td>";
				echo "<td>".$filas['dinRelFamA']."</td>";
				echo "<td>".$filas['dinRelFamB']."</td>";
				echo "<td>".$filas['crit1']."</td>";
				echo "<td>".$filas['crit2']."</td>";
				echo "<td>".$filas['crit3']."</td>";
				echo "<td>".$filas['crit4']."</td>";
				echo "<td>".$filas['crit5']."</td>";
				echo "<td>".$filas['crit6']."</td>";
				echo "<td>".$filas['crit7']."</td>";
				echo "<td>".$filas['crit8']."</td>";
				echo "<td>".$filas['crit9']."</td>";
				echo "<td>".$filas['crit10']."</td>";
				echo "<td>".$filas['crit11']."</td>";
				echo "<td>".$filas['crit12']."</td>";
				echo "<td>".$filas['crit13']."</td>";
				echo "<td>".$filas['crit14']."</td>";
				echo "<td>".$filas['crit15']."</td>";
				echo "<td>".$filas['crit16']."</td>";
				echo "<td>".$filas['crit17']."</td>";
				echo "<td>".$filas['factGen']."</td>";
				echo "<td>".$filas['factVul']."</td>";
				echo "<td>".$filas['aspHabTipBar']."</td>";
				echo "<td>".$filas['aspHabSerTra']."</td>";
				echo "<td>".$filas['aspHabEst']."</td>";
				echo "<td>".$filas['aspHabTipViv']."</td>";
				echo "<td>".$filas['aspHabDes']."</td>";
				echo "<td>".$filas['aspHabTen']."</td>";
				echo "<td>".$filas['aspHabSer']."</td>";
				echo "<td>".$filas['aspHabLim']."</td>";
				echo "<td>".$filas['conEcoResObl']."</td>";
				echo "<td>".$filas['conEcoIngMen']."</td>";
				echo "<td>".$filas['concepto']."</td>";
				echo "<td>".$filas['plaTraObj']."</td>";
				echo "<td>".$filas['plaTraAct']."</td>";
				echo "<td>".$filas['plaTraMet']."</td>";
				echo "<td>".$filas['plaTraObj2']."</td>";
				echo "<td>".$filas['plaTraAct2']."</td>";
				echo "<td>".$filas['plaTraMet2']."</td>";
				echo "<td>".$filas['profesional']."</td>";
				echo "<td>".$filas['diag1']."</td>";
				echo "<td>".$filas['diag2']."</td>";
				echo "<td>".$filas['diag3']."</td>";
				echo "<td><p>

        <a href='#' class='btn btn-primary' role='button' onclick='dibujarFormularioModificartrabajosocial(".$filas['idTrabajoSocial'].");return false;'>Editar</a>

        <a href='#' class='btn btn-primary' role='button' onclick='eliminartrabajosocial(".$filas['idTrabajoSocial'].");return false;'>Eliminar</a>

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

	function dibujarFormularioModificartrabajosocial($id)
	{
		$bd=BD::getInstance();
		$result=$bd->extraerDatos("SELECT * FROM trabajosocial WHERE idTrabajoSocial=".$id);
		$filas = mysql_fetch_array($result);
		echo "<form role='form'>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>idTrabajoSocial</label>

                            <input class='form-control' type='hidden' id='idTrabajoSocial' value='".$filas["idTrabajoSocial"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>consulta</label>

                            <input type='email' class='form-control' id='consulta' value='".$filas["consulta"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>relFamDecTom</label>

                            <input type='email' class='form-control' id='relFamDecTom' value='".$filas["relFamDecTom"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>relFamExpAfe</label>

                            <input type='email' class='form-control' id='relFamExpAfe' value='".$filas["relFamExpAfe"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>relFamExpAfePadHij</label>

                            <input type='email' class='form-control' id='relFamExpAfePadHij' value='".$filas["relFamExpAfePadHij"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>relFamMotCon</label>

                            <input type='email' class='form-control' id='relFamMotCon' value='".$filas["relFamMotCon"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>relFamExpCon</label>

                            <input type='email' class='form-control' id='relFamExpCon' value='".$filas["relFamExpCon"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>relFamComFal</label>

                            <input type='email' class='form-control' id='relFamComFal' value='".$filas["relFamComFal"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>relFamSan</label>

                            <input type='email' class='form-control' id='relFamSan' value='".$filas["relFamSan"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>relFamActTieLib</label>

                            <input type='email' class='form-control' id='relFamActTieLib' value='".$filas["relFamActTieLib"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>genograma</label>

                            <input type='email' class='form-control' id='genograma' value='".$filas["genograma"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>obsGen</label>

                            <input type='email' class='form-control' id='obsGen' value='".$filas["obsGen"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>eveVivFamUltAni1</label>

                            <input type='email' class='form-control' id='eveVivFamUltAni1' value='".$filas["eveVivFamUltAni1"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>eveVivFamUltAni2</label>

                            <input type='email' class='form-control' id='eveVivFamUltAni2' value='".$filas["eveVivFamUltAni2"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>eveVivFamUltAni3</label>

                            <input type='email' class='form-control' id='eveVivFamUltAni3' value='".$filas["eveVivFamUltAni3"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>eveVivFamUltAni4</label>

                            <input type='email' class='form-control' id='eveVivFamUltAni4' value='".$filas["eveVivFamUltAni4"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>eveVivFamUltAni5</label>

                            <input type='email' class='form-control' id='eveVivFamUltAni5' value='".$filas["eveVivFamUltAni5"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>eveVivFamUltAni6</label>

                            <input type='email' class='form-control' id='eveVivFamUltAni6' value='".$filas["eveVivFamUltAni6"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>eveVivFamUltAni7</label>

                            <input type='email' class='form-control' id='eveVivFamUltAni7' value='".$filas["eveVivFamUltAni7"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>eveVivFamUltAni8</label>

                            <input type='email' class='form-control' id='eveVivFamUltAni8' value='".$filas["eveVivFamUltAni8"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>eveVivFamUltAni9</label>

                            <input type='email' class='form-control' id='eveVivFamUltAni9' value='".$filas["eveVivFamUltAni9"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>eveVivFamUltAni10</label>

                            <input type='email' class='form-control' id='eveVivFamUltAni10' value='".$filas["eveVivFamUltAni10"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>eveVivFamUltAni11</label>

                            <input type='email' class='form-control' id='eveVivFamUltAni11' value='".$filas["eveVivFamUltAni11"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>eveVivFamUltAni12</label>

                            <input type='email' class='form-control' id='eveVivFamUltAni12' value='".$filas["eveVivFamUltAni12"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>eveVivFamUltAni13</label>

                            <input type='email' class='form-control' id='eveVivFamUltAni13' value='".$filas["eveVivFamUltAni13"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>eveVivFamUltAni14</label>

                            <input type='email' class='form-control' id='eveVivFamUltAni14' value='".$filas["eveVivFamUltAni14"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>eveVivFamUltAni15</label>

                            <input type='email' class='form-control' id='eveVivFamUltAni15' value='".$filas["eveVivFamUltAni15"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>eveVivFamUltAni16</label>

                            <input type='email' class='form-control' id='eveVivFamUltAni16' value='".$filas["eveVivFamUltAni16"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>eveVivFamUltAni17</label>

                            <input type='email' class='form-control' id='eveVivFamUltAni17' value='".$filas["eveVivFamUltAni17"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>eveVivFamUltAni18</label>

                            <input type='email' class='form-control' id='eveVivFamUltAni18' value='".$filas["eveVivFamUltAni18"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>eveVivFamUltAni19</label>

                            <input type='email' class='form-control' id='eveVivFamUltAni19' value='".$filas["eveVivFamUltAni19"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>eveVivFamUltAni20</label>

                            <input type='email' class='form-control' id='eveVivFamUltAni20' value='".$filas["eveVivFamUltAni20"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>eveVivFamUltAni21</label>

                            <input type='email' class='form-control' id='eveVivFamUltAni21' value='".$filas["eveVivFamUltAni21"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>eveVivFamUltAni22</label>

                            <input type='email' class='form-control' id='eveVivFamUltAni22' value='".$filas["eveVivFamUltAni22"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>eveVivFamUltAni23</label>

                            <input type='email' class='form-control' id='eveVivFamUltAni23' value='".$filas["eveVivFamUltAni23"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>eveVivFamUltAni24</label>

                            <input type='email' class='form-control' id='eveVivFamUltAni24' value='".$filas["eveVivFamUltAni24"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>dinRelFamA</label>

                            <input type='email' class='form-control' id='dinRelFamA' value='".$filas["dinRelFamA"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>dinRelFamB</label>

                            <input type='email' class='form-control' id='dinRelFamB' value='".$filas["dinRelFamB"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>crit1</label>

                            <input type='email' class='form-control' id='crit1' value='".$filas["crit1"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>crit2</label>

                            <input type='email' class='form-control' id='crit2' value='".$filas["crit2"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>crit3</label>

                            <input type='email' class='form-control' id='crit3' value='".$filas["crit3"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>crit4</label>

                            <input type='email' class='form-control' id='crit4' value='".$filas["crit4"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>crit5</label>

                            <input type='email' class='form-control' id='crit5' value='".$filas["crit5"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>crit6</label>

                            <input type='email' class='form-control' id='crit6' value='".$filas["crit6"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>crit7</label>

                            <input type='email' class='form-control' id='crit7' value='".$filas["crit7"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>crit8</label>

                            <input type='email' class='form-control' id='crit8' value='".$filas["crit8"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>crit9</label>

                            <input type='email' class='form-control' id='crit9' value='".$filas["crit9"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>crit10</label>

                            <input type='email' class='form-control' id='crit10' value='".$filas["crit10"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>crit11</label>

                            <input type='email' class='form-control' id='crit11' value='".$filas["crit11"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>crit12</label>

                            <input type='email' class='form-control' id='crit12' value='".$filas["crit12"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>crit13</label>

                            <input type='email' class='form-control' id='crit13' value='".$filas["crit13"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>crit14</label>

                            <input type='email' class='form-control' id='crit14' value='".$filas["crit14"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>crit15</label>

                            <input type='email' class='form-control' id='crit15' value='".$filas["crit15"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>crit16</label>

                            <input type='email' class='form-control' id='crit16' value='".$filas["crit16"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>crit17</label>

                            <input type='email' class='form-control' id='crit17' value='".$filas["crit17"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>factGen</label>

                            <input type='email' class='form-control' id='factGen' value='".$filas["factGen"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>factVul</label>

                            <input type='email' class='form-control' id='factVul' value='".$filas["factVul"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>aspHabTipBar</label>

                            <input type='email' class='form-control' id='aspHabTipBar' value='".$filas["aspHabTipBar"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>aspHabSerTra</label>

                            <input type='email' class='form-control' id='aspHabSerTra' value='".$filas["aspHabSerTra"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>aspHabEst</label>

                            <input type='email' class='form-control' id='aspHabEst' value='".$filas["aspHabEst"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>aspHabTipViv</label>

                            <input type='email' class='form-control' id='aspHabTipViv' value='".$filas["aspHabTipViv"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>aspHabDes</label>

                            <input type='email' class='form-control' id='aspHabDes' value='".$filas["aspHabDes"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>aspHabTen</label>

                            <input type='email' class='form-control' id='aspHabTen' value='".$filas["aspHabTen"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>aspHabSer</label>

                            <input type='email' class='form-control' id='aspHabSer' value='".$filas["aspHabSer"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>aspHabLim</label>

                            <input type='email' class='form-control' id='aspHabLim' value='".$filas["aspHabLim"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>conEcoResObl</label>

                            <input type='email' class='form-control' id='conEcoResObl' value='".$filas["conEcoResObl"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>conEcoIngMen</label>

                            <input type='email' class='form-control' id='conEcoIngMen' value='".$filas["conEcoIngMen"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>concepto</label>

                            <input type='email' class='form-control' id='concepto' value='".$filas["concepto"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>plaTraObj</label>

                            <input type='email' class='form-control' id='plaTraObj' value='".$filas["plaTraObj"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>plaTraAct</label>

                            <input type='email' class='form-control' id='plaTraAct' value='".$filas["plaTraAct"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>plaTraMet</label>

                            <input type='email' class='form-control' id='plaTraMet' value='".$filas["plaTraMet"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>plaTraObj2</label>

                            <input type='email' class='form-control' id='plaTraObj2' value='".$filas["plaTraObj2"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>plaTraAct2</label>

                            <input type='email' class='form-control' id='plaTraAct2' value='".$filas["plaTraAct2"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>plaTraMet2</label>

                            <input type='email' class='form-control' id='plaTraMet2' value='".$filas["plaTraMet2"]."'>

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

                echo "<button type='submit' class='btn btn-default' type='submit' onclick='modificartrabajosocial($id);return false;'>Modificar</button></form>";

           
	}
}
?>