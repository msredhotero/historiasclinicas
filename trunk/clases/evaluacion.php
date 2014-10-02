<?php
include ('../bd/bd.php');
class evaluacion
{
	function insertarDatos($idEvaluacion,$consulta,$sisFonCom,$falFon,$falCom,$modo,$tipo,$cooFon,$conCatSem,$cuales,$reaSec,$reaNom,$reaAgr,$ideAbs,$dif,$sem,$ana,$reaDesObj,$sin,$ant,$comOrd,$manCatGra,$cuales2,$forOra,$orgPalDes,$cohGra,$intCom,$reaPre,$reaRes,$reaExc,$reaNeg,$reaAfi,$reaInf,$funIns,$funReg,$funPer,$funMat,$funIma,$funInf,$funHeu,$funTex,$funCom,$manConVis,$resTurCom,$iniManFinTop,$cuales3,$recFon,$recSil,$reaLecPal,$reaLecSil,$comportamiento,$utiApo,$velocidadLectura,$comTex,$reaEscAut,$como1,$reaExcCop,$como2,$reaEscDic,$como3,$reaEscEsp,$como4,$coherencia,$cohecion,$tieDisOmiGra,$tieDisOmiSil,$tieDisOmiPal,$tieDisOmiFra,$memCor,$memMed,$memLar,$preAteAct,$motAntAct,$tolAct,$nivAct,$diagnostico,$impDiag)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("INSERT INTO evaluacion(idEvaluacion,consulta,sisFonCom,falFon,falCom,modo,tipo,cooFon,conCatSem,cuales,reaSec,reaNom,reaAgr,ideAbs,dif,sem,ana,reaDesObj,sin,ant,comOrd,manCatGra,cuales2,forOra,orgPalDes,cohGra,intCom,reaPre,reaRes,reaExc,reaNeg,reaAfi,reaInf,funIns,funReg,funPer,funMat,funIma,funInf,funHeu,funTex,funCom,manConVis,resTurCom,iniManFinTop,cuales3,recFon,recSil,reaLecPal,reaLecSil,comportamiento,utiApo,velocidadLectura,comTex,reaEscAut,como1,reaExcCop,como2,reaEscDic,como3,reaEscEsp,como4,coherencia,cohecion,tieDisOmiGra,tieDisOmiSil,tieDisOmiPal,tieDisOmiFra,memCor,memMed,memLar,preAteAct,motAntAct,tolAct,nivAct,diagnostico,impDiag) VALUES ($idEvaluacion,'$consulta','$sisFonCom','$falFon','$falCom','$modo','$tipo','$cooFon','$conCatSem','$cuales','$reaSec','$reaNom','$reaAgr','$ideAbs','$dif','$sem','$ana','$reaDesObj','$sin','$ant','$comOrd','$manCatGra','$cuales2','$forOra','$orgPalDes','$cohGra','$intCom','$reaPre','$reaRes','$reaExc','$reaNeg','$reaAfi','$reaInf','$funIns','$funReg','$funPer','$funMat','$funIma','$funInf','$funHeu','$funTex','$funCom','$manConVis','$resTurCom','$iniManFinTop','$cuales3','$recFon','$recSil','$reaLecPal','$reaLecSil','$comportamiento','$utiApo','$velocidadLectura','$comTex','$reaEscAut','$como1','$reaExcCop','$como2','$reaEscDic','$como3','$reaEscEsp','$como4','$coherencia','$cohecion','$tieDisOmiGra','$tieDisOmiSil','$tieDisOmiPal','$tieDisOmiFra','$memCor','$memMed','$memLar','$preAteAct','$motAntAct','$tolAct','$nivAct','$diagnostico','$impDiag')"))
		{
			echo "Registro de datos exitoso";
		}
		else
		{
			echo "No se pudo hacer el registro de datos";
		}
	}

	function consultarDatos($idEvaluacion)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("SELECT * FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			echo "Consulta de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la consulta de datos";
		}
	}

	function eliminarDatos($idEvaluacion)
	{
		$bd=BD::getInstance();
		if($bd->extraerDatos("DELETE FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			echo "Eliminación exitosa";
		}
		else
		{
			echo "No se pudo realizar la eliminación de datos";
		}
	}

	function actualizarDatos($idEvaluacion,$consulta,$sisFonCom,$falFon,$falCom,$modo,$tipo,$cooFon,$conCatSem,$cuales,$reaSec,$reaNom,$reaAgr,$ideAbs,$dif,$sem,$ana,$reaDesObj,$sin,$ant,$comOrd,$manCatGra,$cuales2,$forOra,$orgPalDes,$cohGra,$intCom,$reaPre,$reaRes,$reaExc,$reaNeg,$reaAfi,$reaInf,$funIns,$funReg,$funPer,$funMat,$funIma,$funInf,$funHeu,$funTex,$funCom,$manConVis,$resTurCom,$iniManFinTop,$cuales3,$recFon,$recSil,$reaLecPal,$reaLecSil,$comportamiento,$utiApo,$velocidadLectura,$comTex,$reaEscAut,$como1,$reaExcCop,$como2,$reaEscDic,$como3,$reaEscEsp,$como4,$coherencia,$cohecion,$tieDisOmiGra,$tieDisOmiSil,$tieDisOmiPal,$tieDisOmiFra,$memCor,$memMed,$memLar,$preAteAct,$motAntAct,$tolAct,$nivAct,$diagnostico,$impDiag)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("UPDATE evaluacion SET consulta='$consulta',sisFonCom='$sisFonCom',falFon='$falFon',falCom='$falCom',modo='$modo',tipo='$tipo',cooFon='$cooFon',conCatSem='$conCatSem',cuales='$cuales',reaSec='$reaSec',reaNom='$reaNom',reaAgr='$reaAgr',ideAbs='$ideAbs',dif='$dif',sem='$sem',ana='$ana',reaDesObj='$reaDesObj',sin='$sin',ant='$ant',comOrd='$comOrd',manCatGra='$manCatGra',cuales2='$cuales2',forOra='$forOra',orgPalDes='$orgPalDes',cohGra='$cohGra',intCom='$intCom',reaPre='$reaPre',reaRes='$reaRes',reaExc='$reaExc',reaNeg='$reaNeg',reaAfi='$reaAfi',reaInf='$reaInf',funIns='$funIns',funReg='$funReg',funPer='$funPer',funMat='$funMat',funIma='$funIma',funInf='$funInf',funHeu='$funHeu',funTex='$funTex',funCom='$funCom',manConVis='$manConVis',resTurCom='$resTurCom',iniManFinTop='$iniManFinTop',cuales3='$cuales3',recFon='$recFon',recSil='$recSil',reaLecPal='$reaLecPal',reaLecSil='$reaLecSil',comportamiento='$comportamiento',utiApo='$utiApo',velocidadLectura='$velocidadLectura',comTex='$comTex',reaEscAut='$reaEscAut',como1='$como1',reaExcCop='$reaExcCop',como2='$como2',reaEscDic='$reaEscDic',como3='$como3',reaEscEsp='$reaEscEsp',como4='$como4',coherencia='$coherencia',cohecion='$cohecion',tieDisOmiGra='$tieDisOmiGra',tieDisOmiSil='$tieDisOmiSil',tieDisOmiPal='$tieDisOmiPal',tieDisOmiFra='$tieDisOmiFra',memCor='$memCor',memMed='$memMed',memLar='$memLar',preAteAct='$preAteAct',motAntAct='$motAntAct',tolAct='$tolAct',nivAct='$nivAct',diagnostico='$diagnostico',impDiag='$impDiag' WHERE idEvaluacion=$idEvaluacion"))
		{
			echo "Modificación de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la modificación de datos";
		}
	}

	function getconsulta($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT consulta FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['consulta'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getsisFonCom($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT sisFonCom FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['sisFonCom'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getfalFon($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT falFon FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['falFon'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getfalCom($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT falCom FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['falCom'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getmodo($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT modo FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['modo'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function gettipo($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT tipo FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['tipo'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getcooFon($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT cooFon FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['cooFon'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getconCatSem($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT conCatSem FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['conCatSem'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getcuales($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT cuales FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['cuales'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getreaSec($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT reaSec FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['reaSec'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getreaNom($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT reaNom FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['reaNom'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getreaAgr($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT reaAgr FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['reaAgr'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getideAbs($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT ideAbs FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['ideAbs'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getdif($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT dif FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['dif'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getsem($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT sem FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['sem'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getana($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT ana FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['ana'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getreaDesObj($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT reaDesObj FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['reaDesObj'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getsin($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT sin FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['sin'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getant($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT ant FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['ant'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getcomOrd($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT comOrd FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['comOrd'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getmanCatGra($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT manCatGra FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['manCatGra'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getcuales2($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT cuales2 FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['cuales2'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getforOra($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT forOra FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['forOra'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getorgPalDes($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT orgPalDes FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['orgPalDes'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getcohGra($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT cohGra FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['cohGra'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getintCom($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT intCom FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['intCom'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getreaPre($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT reaPre FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['reaPre'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getreaRes($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT reaRes FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['reaRes'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getreaExc($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT reaExc FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['reaExc'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getreaNeg($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT reaNeg FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['reaNeg'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getreaAfi($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT reaAfi FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['reaAfi'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getreaInf($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT reaInf FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['reaInf'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getfunIns($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT funIns FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['funIns'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getfunReg($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT funReg FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['funReg'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getfunPer($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT funPer FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['funPer'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getfunMat($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT funMat FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['funMat'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getfunIma($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT funIma FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['funIma'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getfunInf($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT funInf FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['funInf'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getfunHeu($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT funHeu FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['funHeu'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getfunTex($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT funTex FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['funTex'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getfunCom($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT funCom FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['funCom'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getmanConVis($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT manConVis FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['manConVis'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getresTurCom($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT resTurCom FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['resTurCom'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getiniManFinTop($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT iniManFinTop FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['iniManFinTop'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getcuales3($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT cuales3 FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['cuales3'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getrecFon($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT recFon FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['recFon'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getrecSil($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT recSil FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['recSil'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getreaLecPal($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT reaLecPal FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['reaLecPal'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getreaLecSil($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT reaLecSil FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['reaLecSil'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getcomportamiento($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT comportamiento FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['comportamiento'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getutiApo($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT utiApo FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['utiApo'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getvelocidadLectura($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT velocidadLectura FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['velocidadLectura'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getcomTex($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT comTex FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['comTex'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getreaEscAut($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT reaEscAut FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['reaEscAut'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getcomo1($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT como1 FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['como1'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getreaExcCop($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT reaExcCop FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['reaExcCop'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getcomo2($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT como2 FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['como2'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getreaEscDic($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT reaEscDic FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['reaEscDic'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getcomo3($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT como3 FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['como3'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getreaEscEsp($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT reaEscEsp FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['reaEscEsp'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getcomo4($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT como4 FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['como4'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getcoherencia($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT coherencia FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['coherencia'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getcohecion($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT cohecion FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['cohecion'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function gettieDisOmiGra($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT tieDisOmiGra FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['tieDisOmiGra'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function gettieDisOmiSil($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT tieDisOmiSil FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['tieDisOmiSil'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function gettieDisOmiPal($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT tieDisOmiPal FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['tieDisOmiPal'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function gettieDisOmiFra($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT tieDisOmiFra FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['tieDisOmiFra'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getmemCor($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT memCor FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['memCor'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getmemMed($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT memMed FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['memMed'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getmemLar($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT memLar FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['memLar'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getpreAteAct($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT preAteAct FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['preAteAct'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getmotAntAct($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT motAntAct FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['motAntAct'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function gettolAct($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT tolAct FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['tolAct'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getnivAct($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT nivAct FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['nivAct'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getdiagnostico($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT diagnostico FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['diagnostico'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getimpDiag($idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("SELECT impDiag FROM evaluacion WHERE idEvaluacion=$idEvaluacion"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['impDiag'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function setconsulta($consulta,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET consulta=$consulta WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setsisFonCom($sisFonCom,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET sisFonCom=$sisFonCom WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setfalFon($falFon,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET falFon=$falFon WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setfalCom($falCom,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET falCom=$falCom WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setmodo($modo,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET modo=$modo WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function settipo($tipo,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET tipo=$tipo WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setcooFon($cooFon,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET cooFon=$cooFon WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setconCatSem($conCatSem,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET conCatSem=$conCatSem WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setcuales($cuales,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET cuales=$cuales WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setreaSec($reaSec,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET reaSec=$reaSec WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setreaNom($reaNom,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET reaNom=$reaNom WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setreaAgr($reaAgr,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET reaAgr=$reaAgr WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setideAbs($ideAbs,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET ideAbs=$ideAbs WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setdif($dif,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET dif=$dif WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setsem($sem,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET sem=$sem WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setana($ana,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET ana=$ana WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setreaDesObj($reaDesObj,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET reaDesObj=$reaDesObj WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setsin($sin,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET sin=$sin WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setant($ant,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET ant=$ant WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setcomOrd($comOrd,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET comOrd=$comOrd WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setmanCatGra($manCatGra,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET manCatGra=$manCatGra WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setcuales2($cuales2,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET cuales2=$cuales2 WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setforOra($forOra,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET forOra=$forOra WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setorgPalDes($orgPalDes,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET orgPalDes=$orgPalDes WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setcohGra($cohGra,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET cohGra=$cohGra WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setintCom($intCom,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET intCom=$intCom WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setreaPre($reaPre,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET reaPre=$reaPre WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setreaRes($reaRes,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET reaRes=$reaRes WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setreaExc($reaExc,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET reaExc=$reaExc WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setreaNeg($reaNeg,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET reaNeg=$reaNeg WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setreaAfi($reaAfi,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET reaAfi=$reaAfi WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setreaInf($reaInf,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET reaInf=$reaInf WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setfunIns($funIns,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET funIns=$funIns WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setfunReg($funReg,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET funReg=$funReg WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setfunPer($funPer,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET funPer=$funPer WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setfunMat($funMat,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET funMat=$funMat WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setfunIma($funIma,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET funIma=$funIma WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setfunInf($funInf,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET funInf=$funInf WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setfunHeu($funHeu,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET funHeu=$funHeu WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setfunTex($funTex,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET funTex=$funTex WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setfunCom($funCom,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET funCom=$funCom WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setmanConVis($manConVis,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET manConVis=$manConVis WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setresTurCom($resTurCom,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET resTurCom=$resTurCom WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setiniManFinTop($iniManFinTop,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET iniManFinTop=$iniManFinTop WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setcuales3($cuales3,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET cuales3=$cuales3 WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setrecFon($recFon,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET recFon=$recFon WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setrecSil($recSil,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET recSil=$recSil WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setreaLecPal($reaLecPal,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET reaLecPal=$reaLecPal WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setreaLecSil($reaLecSil,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET reaLecSil=$reaLecSil WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setcomportamiento($comportamiento,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET comportamiento=$comportamiento WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setutiApo($utiApo,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET utiApo=$utiApo WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setvelocidadLectura($velocidadLectura,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET velocidadLectura=$velocidadLectura WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setcomTex($comTex,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET comTex=$comTex WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setreaEscAut($reaEscAut,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET reaEscAut=$reaEscAut WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setcomo1($como1,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET como1=$como1 WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setreaExcCop($reaExcCop,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET reaExcCop=$reaExcCop WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setcomo2($como2,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET como2=$como2 WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setreaEscDic($reaEscDic,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET reaEscDic=$reaEscDic WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setcomo3($como3,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET como3=$como3 WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setreaEscEsp($reaEscEsp,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET reaEscEsp=$reaEscEsp WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setcomo4($como4,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET como4=$como4 WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setcoherencia($coherencia,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET coherencia=$coherencia WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setcohecion($cohecion,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET cohecion=$cohecion WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function settieDisOmiGra($tieDisOmiGra,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET tieDisOmiGra=$tieDisOmiGra WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function settieDisOmiSil($tieDisOmiSil,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET tieDisOmiSil=$tieDisOmiSil WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function settieDisOmiPal($tieDisOmiPal,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET tieDisOmiPal=$tieDisOmiPal WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function settieDisOmiFra($tieDisOmiFra,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET tieDisOmiFra=$tieDisOmiFra WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setmemCor($memCor,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET memCor=$memCor WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setmemMed($memMed,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET memMed=$memMed WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setmemLar($memLar,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET memLar=$memLar WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setpreAteAct($preAteAct,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET preAteAct=$preAteAct WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setmotAntAct($motAntAct,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET motAntAct=$motAntAct WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function settolAct($tolAct,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET tolAct=$tolAct WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setnivAct($nivAct,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET nivAct=$nivAct WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setdiagnostico($diagnostico,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET diagnostico=$diagnostico WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setimpDiag($impDiag,$idEvaluacion)
	{
		
		if($result=$bd->insertarDatos("UPDATE evaluacion SET impDiag=$impDiag WHERE idEvaluacion=$idEvaluacion"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function dibujarFormularioIngresoevaluacion()
	{
		echo "<form role='form'>";

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>idEvaluacion</label>

                                <input type='email' class='form-control' id='idEvaluacion' placeholder='idEvaluacion'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>consulta</label>

                                <input type='email' class='form-control' id='consulta' placeholder='consulta'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>sisFonCom</label>

                                <input type='email' class='form-control' id='sisFonCom' placeholder='sisFonCom'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>falFon</label>

                                <input type='email' class='form-control' id='falFon' placeholder='falFon'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>falCom</label>

                                <input type='email' class='form-control' id='falCom' placeholder='falCom'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>modo</label>

                                <input type='email' class='form-control' id='modo' placeholder='modo'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>tipo</label>

                                <input type='email' class='form-control' id='tipo' placeholder='tipo'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>cooFon</label>

                                <input type='email' class='form-control' id='cooFon' placeholder='cooFon'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>conCatSem</label>

                                <input type='email' class='form-control' id='conCatSem' placeholder='conCatSem'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>cuales</label>

                                <input type='email' class='form-control' id='cuales' placeholder='cuales'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>reaSec</label>

                                <input type='email' class='form-control' id='reaSec' placeholder='reaSec'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>reaNom</label>

                                <input type='email' class='form-control' id='reaNom' placeholder='reaNom'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>reaAgr</label>

                                <input type='email' class='form-control' id='reaAgr' placeholder='reaAgr'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>ideAbs</label>

                                <input type='email' class='form-control' id='ideAbs' placeholder='ideAbs'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>dif</label>

                                <input type='email' class='form-control' id='dif' placeholder='dif'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>sem</label>

                                <input type='email' class='form-control' id='sem' placeholder='sem'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>ana</label>

                                <input type='email' class='form-control' id='ana' placeholder='ana'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>reaDesObj</label>

                                <input type='email' class='form-control' id='reaDesObj' placeholder='reaDesObj'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>sin</label>

                                <input type='email' class='form-control' id='sin' placeholder='sin'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>ant</label>

                                <input type='email' class='form-control' id='ant' placeholder='ant'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>comOrd</label>

                                <input type='email' class='form-control' id='comOrd' placeholder='comOrd'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>manCatGra</label>

                                <input type='email' class='form-control' id='manCatGra' placeholder='manCatGra'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>cuales2</label>

                                <input type='email' class='form-control' id='cuales2' placeholder='cuales2'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>forOra</label>

                                <input type='email' class='form-control' id='forOra' placeholder='forOra'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>orgPalDes</label>

                                <input type='email' class='form-control' id='orgPalDes' placeholder='orgPalDes'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>cohGra</label>

                                <input type='email' class='form-control' id='cohGra' placeholder='cohGra'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>intCom</label>

                                <input type='email' class='form-control' id='intCom' placeholder='intCom'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>reaPre</label>

                                <input type='email' class='form-control' id='reaPre' placeholder='reaPre'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>reaRes</label>

                                <input type='email' class='form-control' id='reaRes' placeholder='reaRes'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>reaExc</label>

                                <input type='email' class='form-control' id='reaExc' placeholder='reaExc'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>reaNeg</label>

                                <input type='email' class='form-control' id='reaNeg' placeholder='reaNeg'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>reaAfi</label>

                                <input type='email' class='form-control' id='reaAfi' placeholder='reaAfi'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>reaInf</label>

                                <input type='email' class='form-control' id='reaInf' placeholder='reaInf'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>funIns</label>

                                <input type='email' class='form-control' id='funIns' placeholder='funIns'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>funReg</label>

                                <input type='email' class='form-control' id='funReg' placeholder='funReg'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>funPer</label>

                                <input type='email' class='form-control' id='funPer' placeholder='funPer'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>funMat</label>

                                <input type='email' class='form-control' id='funMat' placeholder='funMat'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>funIma</label>

                                <input type='email' class='form-control' id='funIma' placeholder='funIma'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>funInf</label>

                                <input type='email' class='form-control' id='funInf' placeholder='funInf'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>funHeu</label>

                                <input type='email' class='form-control' id='funHeu' placeholder='funHeu'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>funTex</label>

                                <input type='email' class='form-control' id='funTex' placeholder='funTex'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>funCom</label>

                                <input type='email' class='form-control' id='funCom' placeholder='funCom'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>manConVis</label>

                                <input type='email' class='form-control' id='manConVis' placeholder='manConVis'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>resTurCom</label>

                                <input type='email' class='form-control' id='resTurCom' placeholder='resTurCom'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>iniManFinTop</label>

                                <input type='email' class='form-control' id='iniManFinTop' placeholder='iniManFinTop'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>cuales3</label>

                                <input type='email' class='form-control' id='cuales3' placeholder='cuales3'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>recFon</label>

                                <input type='email' class='form-control' id='recFon' placeholder='recFon'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>recSil</label>

                                <input type='email' class='form-control' id='recSil' placeholder='recSil'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>reaLecPal</label>

                                <input type='email' class='form-control' id='reaLecPal' placeholder='reaLecPal'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>reaLecSil</label>

                                <input type='email' class='form-control' id='reaLecSil' placeholder='reaLecSil'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>comportamiento</label>

                                <input type='email' class='form-control' id='comportamiento' placeholder='comportamiento'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>utiApo</label>

                                <input type='email' class='form-control' id='utiApo' placeholder='utiApo'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>velocidadLectura</label>

                                <input type='email' class='form-control' id='velocidadLectura' placeholder='velocidadLectura'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>comTex</label>

                                <input type='email' class='form-control' id='comTex' placeholder='comTex'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>reaEscAut</label>

                                <input type='email' class='form-control' id='reaEscAut' placeholder='reaEscAut'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>como1</label>

                                <input type='email' class='form-control' id='como1' placeholder='como1'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>reaExcCop</label>

                                <input type='email' class='form-control' id='reaExcCop' placeholder='reaExcCop'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>como2</label>

                                <input type='email' class='form-control' id='como2' placeholder='como2'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>reaEscDic</label>

                                <input type='email' class='form-control' id='reaEscDic' placeholder='reaEscDic'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>como3</label>

                                <input type='email' class='form-control' id='como3' placeholder='como3'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>reaEscEsp</label>

                                <input type='email' class='form-control' id='reaEscEsp' placeholder='reaEscEsp'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>como4</label>

                                <input type='email' class='form-control' id='como4' placeholder='como4'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>coherencia</label>

                                <input type='email' class='form-control' id='coherencia' placeholder='coherencia'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>cohecion</label>

                                <input type='email' class='form-control' id='cohecion' placeholder='cohecion'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>tieDisOmiGra</label>

                                <input type='email' class='form-control' id='tieDisOmiGra' placeholder='tieDisOmiGra'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>tieDisOmiSil</label>

                                <input type='email' class='form-control' id='tieDisOmiSil' placeholder='tieDisOmiSil'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>tieDisOmiPal</label>

                                <input type='email' class='form-control' id='tieDisOmiPal' placeholder='tieDisOmiPal'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>tieDisOmiFra</label>

                                <input type='email' class='form-control' id='tieDisOmiFra' placeholder='tieDisOmiFra'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>memCor</label>

                                <input type='email' class='form-control' id='memCor' placeholder='memCor'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>memMed</label>

                                <input type='email' class='form-control' id='memMed' placeholder='memMed'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>memLar</label>

                                <input type='email' class='form-control' id='memLar' placeholder='memLar'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>preAteAct</label>

                                <input type='email' class='form-control' id='preAteAct' placeholder='preAteAct'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>motAntAct</label>

                                <input type='email' class='form-control' id='motAntAct' placeholder='motAntAct'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>tolAct</label>

                                <input type='email' class='form-control' id='tolAct' placeholder='tolAct'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>nivAct</label>

                                <input type='email' class='form-control' id='nivAct' placeholder='nivAct'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>diagnostico</label>

                                <input type='email' class='form-control' id='diagnostico' placeholder='diagnostico'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>impDiag</label>

                                <input type='email' class='form-control' id='impDiag' placeholder='impDiag'>

                            </div>";

                

                echo "<button type='submit' class='btn btn-default' onclick='ingresarNuevoevaluacion();return false;'>Ingresar</button>";

           echo "</form>";
	}

	function consultarTodosevaluacion()
	{
		$bd=BD::getInstance();
		if($result=$bd->extraerDatos("SELECT * FROM evaluacion"))
		{
			echo "<div class='panel panel-default'><div class='panel-heading'>Nombre de la Tabla</div> <table class='table'><thead><tr><th>idEvaluacion</th><th>consulta</th><th>sisFonCom</th><th>falFon</th><th>falCom</th><th>modo</th><th>tipo</th><th>cooFon</th><th>conCatSem</th><th>cuales</th><th>reaSec</th><th>reaNom</th><th>reaAgr</th><th>ideAbs</th><th>dif</th><th>sem</th><th>ana</th><th>reaDesObj</th><th>sin</th><th>ant</th><th>comOrd</th><th>manCatGra</th><th>cuales2</th><th>forOra</th><th>orgPalDes</th><th>cohGra</th><th>intCom</th><th>reaPre</th><th>reaRes</th><th>reaExc</th><th>reaNeg</th><th>reaAfi</th><th>reaInf</th><th>funIns</th><th>funReg</th><th>funPer</th><th>funMat</th><th>funIma</th><th>funInf</th><th>funHeu</th><th>funTex</th><th>funCom</th><th>manConVis</th><th>resTurCom</th><th>iniManFinTop</th><th>cuales3</th><th>recFon</th><th>recSil</th><th>reaLecPal</th><th>reaLecSil</th><th>comportamiento</th><th>utiApo</th><th>velocidadLectura</th><th>comTex</th><th>reaEscAut</th><th>como1</th><th>reaExcCop</th><th>como2</th><th>reaEscDic</th><th>como3</th><th>reaEscEsp</th><th>como4</th><th>coherencia</th><th>cohecion</th><th>tieDisOmiGra</th><th>tieDisOmiSil</th><th>tieDisOmiPal</th><th>tieDisOmiFra</th><th>memCor</th><th>memMed</th><th>memLar</th><th>preAteAct</th><th>motAntAct</th><th>tolAct</th><th>nivAct</th><th>diagnostico</th><th>impDiag</th><th>Accion</th></tr></thead><tbody>";

        
			while($filas = mysql_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>".$filas['idEvaluacion']."</td>";
				echo "<td>".$filas['consulta']."</td>";
				echo "<td>".$filas['sisFonCom']."</td>";
				echo "<td>".$filas['falFon']."</td>";
				echo "<td>".$filas['falCom']."</td>";
				echo "<td>".$filas['modo']."</td>";
				echo "<td>".$filas['tipo']."</td>";
				echo "<td>".$filas['cooFon']."</td>";
				echo "<td>".$filas['conCatSem']."</td>";
				echo "<td>".$filas['cuales']."</td>";
				echo "<td>".$filas['reaSec']."</td>";
				echo "<td>".$filas['reaNom']."</td>";
				echo "<td>".$filas['reaAgr']."</td>";
				echo "<td>".$filas['ideAbs']."</td>";
				echo "<td>".$filas['dif']."</td>";
				echo "<td>".$filas['sem']."</td>";
				echo "<td>".$filas['ana']."</td>";
				echo "<td>".$filas['reaDesObj']."</td>";
				echo "<td>".$filas['sin']."</td>";
				echo "<td>".$filas['ant']."</td>";
				echo "<td>".$filas['comOrd']."</td>";
				echo "<td>".$filas['manCatGra']."</td>";
				echo "<td>".$filas['cuales2']."</td>";
				echo "<td>".$filas['forOra']."</td>";
				echo "<td>".$filas['orgPalDes']."</td>";
				echo "<td>".$filas['cohGra']."</td>";
				echo "<td>".$filas['intCom']."</td>";
				echo "<td>".$filas['reaPre']."</td>";
				echo "<td>".$filas['reaRes']."</td>";
				echo "<td>".$filas['reaExc']."</td>";
				echo "<td>".$filas['reaNeg']."</td>";
				echo "<td>".$filas['reaAfi']."</td>";
				echo "<td>".$filas['reaInf']."</td>";
				echo "<td>".$filas['funIns']."</td>";
				echo "<td>".$filas['funReg']."</td>";
				echo "<td>".$filas['funPer']."</td>";
				echo "<td>".$filas['funMat']."</td>";
				echo "<td>".$filas['funIma']."</td>";
				echo "<td>".$filas['funInf']."</td>";
				echo "<td>".$filas['funHeu']."</td>";
				echo "<td>".$filas['funTex']."</td>";
				echo "<td>".$filas['funCom']."</td>";
				echo "<td>".$filas['manConVis']."</td>";
				echo "<td>".$filas['resTurCom']."</td>";
				echo "<td>".$filas['iniManFinTop']."</td>";
				echo "<td>".$filas['cuales3']."</td>";
				echo "<td>".$filas['recFon']."</td>";
				echo "<td>".$filas['recSil']."</td>";
				echo "<td>".$filas['reaLecPal']."</td>";
				echo "<td>".$filas['reaLecSil']."</td>";
				echo "<td>".$filas['comportamiento']."</td>";
				echo "<td>".$filas['utiApo']."</td>";
				echo "<td>".$filas['velocidadLectura']."</td>";
				echo "<td>".$filas['comTex']."</td>";
				echo "<td>".$filas['reaEscAut']."</td>";
				echo "<td>".$filas['como1']."</td>";
				echo "<td>".$filas['reaExcCop']."</td>";
				echo "<td>".$filas['como2']."</td>";
				echo "<td>".$filas['reaEscDic']."</td>";
				echo "<td>".$filas['como3']."</td>";
				echo "<td>".$filas['reaEscEsp']."</td>";
				echo "<td>".$filas['como4']."</td>";
				echo "<td>".$filas['coherencia']."</td>";
				echo "<td>".$filas['cohecion']."</td>";
				echo "<td>".$filas['tieDisOmiGra']."</td>";
				echo "<td>".$filas['tieDisOmiSil']."</td>";
				echo "<td>".$filas['tieDisOmiPal']."</td>";
				echo "<td>".$filas['tieDisOmiFra']."</td>";
				echo "<td>".$filas['memCor']."</td>";
				echo "<td>".$filas['memMed']."</td>";
				echo "<td>".$filas['memLar']."</td>";
				echo "<td>".$filas['preAteAct']."</td>";
				echo "<td>".$filas['motAntAct']."</td>";
				echo "<td>".$filas['tolAct']."</td>";
				echo "<td>".$filas['nivAct']."</td>";
				echo "<td>".$filas['diagnostico']."</td>";
				echo "<td>".$filas['impDiag']."</td>";
				echo "<td><p>

        <a href='#' class='btn btn-primary' role='button' onclick='dibujarFormularioModificarevaluacion(".$filas['idEvaluacion'].");return false;'>Editar</a>

        <a href='#' class='btn btn-primary' role='button' onclick='eliminarevaluacion(".$filas['idEvaluacion'].");return false;'>Eliminar</a>

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

	function dibujarFormularioModificarevaluacion($id)
	{
		$bd=BD::getInstance();
		$result=$bd->extraerDatos("SELECT * FROM evaluacion WHERE idEvaluacion=".$id);
		$filas = mysql_fetch_array($result);
		echo "<form role='form'>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>idEvaluacion</label>

                            <input class='form-control' type='hidden' id='idEvaluacion' value='".$filas["idEvaluacion"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>consulta</label>

                            <input type='email' class='form-control' id='consulta' value='".$filas["consulta"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>sisFonCom</label>

                            <input type='email' class='form-control' id='sisFonCom' value='".$filas["sisFonCom"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>falFon</label>

                            <input type='email' class='form-control' id='falFon' value='".$filas["falFon"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>falCom</label>

                            <input type='email' class='form-control' id='falCom' value='".$filas["falCom"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>modo</label>

                            <input type='email' class='form-control' id='modo' value='".$filas["modo"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>tipo</label>

                            <input type='email' class='form-control' id='tipo' value='".$filas["tipo"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>cooFon</label>

                            <input type='email' class='form-control' id='cooFon' value='".$filas["cooFon"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>conCatSem</label>

                            <input type='email' class='form-control' id='conCatSem' value='".$filas["conCatSem"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>cuales</label>

                            <input type='email' class='form-control' id='cuales' value='".$filas["cuales"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>reaSec</label>

                            <input type='email' class='form-control' id='reaSec' value='".$filas["reaSec"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>reaNom</label>

                            <input type='email' class='form-control' id='reaNom' value='".$filas["reaNom"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>reaAgr</label>

                            <input type='email' class='form-control' id='reaAgr' value='".$filas["reaAgr"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>ideAbs</label>

                            <input type='email' class='form-control' id='ideAbs' value='".$filas["ideAbs"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>dif</label>

                            <input type='email' class='form-control' id='dif' value='".$filas["dif"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>sem</label>

                            <input type='email' class='form-control' id='sem' value='".$filas["sem"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>ana</label>

                            <input type='email' class='form-control' id='ana' value='".$filas["ana"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>reaDesObj</label>

                            <input type='email' class='form-control' id='reaDesObj' value='".$filas["reaDesObj"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>sin</label>

                            <input type='email' class='form-control' id='sin' value='".$filas["sin"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>ant</label>

                            <input type='email' class='form-control' id='ant' value='".$filas["ant"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>comOrd</label>

                            <input type='email' class='form-control' id='comOrd' value='".$filas["comOrd"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>manCatGra</label>

                            <input type='email' class='form-control' id='manCatGra' value='".$filas["manCatGra"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>cuales2</label>

                            <input type='email' class='form-control' id='cuales2' value='".$filas["cuales2"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>forOra</label>

                            <input type='email' class='form-control' id='forOra' value='".$filas["forOra"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>orgPalDes</label>

                            <input type='email' class='form-control' id='orgPalDes' value='".$filas["orgPalDes"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>cohGra</label>

                            <input type='email' class='form-control' id='cohGra' value='".$filas["cohGra"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>intCom</label>

                            <input type='email' class='form-control' id='intCom' value='".$filas["intCom"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>reaPre</label>

                            <input type='email' class='form-control' id='reaPre' value='".$filas["reaPre"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>reaRes</label>

                            <input type='email' class='form-control' id='reaRes' value='".$filas["reaRes"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>reaExc</label>

                            <input type='email' class='form-control' id='reaExc' value='".$filas["reaExc"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>reaNeg</label>

                            <input type='email' class='form-control' id='reaNeg' value='".$filas["reaNeg"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>reaAfi</label>

                            <input type='email' class='form-control' id='reaAfi' value='".$filas["reaAfi"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>reaInf</label>

                            <input type='email' class='form-control' id='reaInf' value='".$filas["reaInf"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>funIns</label>

                            <input type='email' class='form-control' id='funIns' value='".$filas["funIns"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>funReg</label>

                            <input type='email' class='form-control' id='funReg' value='".$filas["funReg"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>funPer</label>

                            <input type='email' class='form-control' id='funPer' value='".$filas["funPer"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>funMat</label>

                            <input type='email' class='form-control' id='funMat' value='".$filas["funMat"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>funIma</label>

                            <input type='email' class='form-control' id='funIma' value='".$filas["funIma"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>funInf</label>

                            <input type='email' class='form-control' id='funInf' value='".$filas["funInf"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>funHeu</label>

                            <input type='email' class='form-control' id='funHeu' value='".$filas["funHeu"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>funTex</label>

                            <input type='email' class='form-control' id='funTex' value='".$filas["funTex"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>funCom</label>

                            <input type='email' class='form-control' id='funCom' value='".$filas["funCom"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>manConVis</label>

                            <input type='email' class='form-control' id='manConVis' value='".$filas["manConVis"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>resTurCom</label>

                            <input type='email' class='form-control' id='resTurCom' value='".$filas["resTurCom"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>iniManFinTop</label>

                            <input type='email' class='form-control' id='iniManFinTop' value='".$filas["iniManFinTop"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>cuales3</label>

                            <input type='email' class='form-control' id='cuales3' value='".$filas["cuales3"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>recFon</label>

                            <input type='email' class='form-control' id='recFon' value='".$filas["recFon"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>recSil</label>

                            <input type='email' class='form-control' id='recSil' value='".$filas["recSil"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>reaLecPal</label>

                            <input type='email' class='form-control' id='reaLecPal' value='".$filas["reaLecPal"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>reaLecSil</label>

                            <input type='email' class='form-control' id='reaLecSil' value='".$filas["reaLecSil"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>comportamiento</label>

                            <input type='email' class='form-control' id='comportamiento' value='".$filas["comportamiento"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>utiApo</label>

                            <input type='email' class='form-control' id='utiApo' value='".$filas["utiApo"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>velocidadLectura</label>

                            <input type='email' class='form-control' id='velocidadLectura' value='".$filas["velocidadLectura"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>comTex</label>

                            <input type='email' class='form-control' id='comTex' value='".$filas["comTex"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>reaEscAut</label>

                            <input type='email' class='form-control' id='reaEscAut' value='".$filas["reaEscAut"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>como1</label>

                            <input type='email' class='form-control' id='como1' value='".$filas["como1"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>reaExcCop</label>

                            <input type='email' class='form-control' id='reaExcCop' value='".$filas["reaExcCop"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>como2</label>

                            <input type='email' class='form-control' id='como2' value='".$filas["como2"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>reaEscDic</label>

                            <input type='email' class='form-control' id='reaEscDic' value='".$filas["reaEscDic"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>como3</label>

                            <input type='email' class='form-control' id='como3' value='".$filas["como3"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>reaEscEsp</label>

                            <input type='email' class='form-control' id='reaEscEsp' value='".$filas["reaEscEsp"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>como4</label>

                            <input type='email' class='form-control' id='como4' value='".$filas["como4"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>coherencia</label>

                            <input type='email' class='form-control' id='coherencia' value='".$filas["coherencia"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>cohecion</label>

                            <input type='email' class='form-control' id='cohecion' value='".$filas["cohecion"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>tieDisOmiGra</label>

                            <input type='email' class='form-control' id='tieDisOmiGra' value='".$filas["tieDisOmiGra"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>tieDisOmiSil</label>

                            <input type='email' class='form-control' id='tieDisOmiSil' value='".$filas["tieDisOmiSil"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>tieDisOmiPal</label>

                            <input type='email' class='form-control' id='tieDisOmiPal' value='".$filas["tieDisOmiPal"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>tieDisOmiFra</label>

                            <input type='email' class='form-control' id='tieDisOmiFra' value='".$filas["tieDisOmiFra"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>memCor</label>

                            <input type='email' class='form-control' id='memCor' value='".$filas["memCor"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>memMed</label>

                            <input type='email' class='form-control' id='memMed' value='".$filas["memMed"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>memLar</label>

                            <input type='email' class='form-control' id='memLar' value='".$filas["memLar"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>preAteAct</label>

                            <input type='email' class='form-control' id='preAteAct' value='".$filas["preAteAct"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>motAntAct</label>

                            <input type='email' class='form-control' id='motAntAct' value='".$filas["motAntAct"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>tolAct</label>

                            <input type='email' class='form-control' id='tolAct' value='".$filas["tolAct"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>nivAct</label>

                            <input type='email' class='form-control' id='nivAct' value='".$filas["nivAct"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>diagnostico</label>

                            <input type='email' class='form-control' id='diagnostico' value='".$filas["diagnostico"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>impDiag</label>

                            <input type='email' class='form-control' id='impDiag' value='".$filas["impDiag"]."'>

                        </div>";

                echo "<button type='submit' class='btn btn-default' type='submit' onclick='modificarevaluacion($id);return false;'>Modificar</button></form>";

           
	}
}
?>