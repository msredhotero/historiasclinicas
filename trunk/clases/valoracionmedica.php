<?php
include ('../bd/bd.php');
class valoracionmedica
{
	function insertarDatos($idValoracionMedica,$consulta,$durEmb,$patDurEmb,$droMedIng,$nacimiento,$donde,$llanto,$cianosis,$apgar,$peso,$talla,$patPer,$patDurPriAnio,$recTraAct,$hospitalizaciones,$tiempo,$diagHosp,$lacMat,$tiempoLact,$lecCom,$iniDieCom,$intAli,$antQui,$antTra,$intAle,$exaInt,$inmunizaciones,$asma,$malformaciones,$alergias,$diabetes,$rsm,$epilepsia,$proLenguaje,$mentales,$otras,$fisPeso,$fistalla,$fisTA,$fisCef,$fisFC,$fisPulso,$fisForma,$fisFaciales,$fisOjos,$orlCavOral,$orlFaringe,$orlAuriculares,$orlOido,$orlNariz,$orlCuello,$toraxConf,$toraxCora,$toraxBronPul,$abdomen,$genExt,$colVer,$extremidades,$piel,$neuEsfMen,$neuEsfMot,$neuTonMus,$neuEqu,$neuMar,$neuSen,$neuParCra,$refPup,$refTen,$refAno,$observaciones,$diagnostico,$impDiag,$profesional)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("INSERT INTO valoracionmedica(idValoracionMedica,consulta,durEmb,patDurEmb,droMedIng,nacimiento,donde,llanto,cianosis,apgar,peso,talla,patPer,patDurPriAnio,recTraAct,hospitalizaciones,tiempo,diagHosp,lacMat,tiempoLact,lecCom,iniDieCom,intAli,antQui,antTra,intAle,exaInt,inmunizaciones,asma,malformaciones,alergias,diabetes,rsm,epilepsia,proLenguaje,mentales,otras,fisPeso,fistalla,fisTA,fisCef,fisFC,fisPulso,fisForma,fisFaciales,fisOjos,orlCavOral,orlFaringe,orlAuriculares,orlOido,orlNariz,orlCuello,toraxConf,toraxCora,toraxBronPul,abdomen,genExt,colVer,extremidades,piel,neuEsfMen,neuEsfMot,neuTonMus,neuEqu,neuMar,neuSen,neuParCra,refPup,refTen,refAno,observaciones,diagnostico,impDiag,profesional) VALUES ($idValoracionMedica,'$consulta','$durEmb','$patDurEmb','$droMedIng','$nacimiento','$donde','$llanto','$cianosis','$apgar','$peso','$talla','$patPer','$patDurPriAnio','$recTraAct','$hospitalizaciones','$tiempo','$diagHosp','$lacMat','$tiempoLact','$lecCom','$iniDieCom','$intAli','$antQui','$antTra','$intAle','$exaInt','$inmunizaciones','$asma','$malformaciones','$alergias','$diabetes','$rsm','$epilepsia','$proLenguaje','$mentales','$otras','$fisPeso','$fistalla','$fisTA','$fisCef','$fisFC','$fisPulso','$fisForma','$fisFaciales','$fisOjos','$orlCavOral','$orlFaringe','$orlAuriculares','$orlOido','$orlNariz','$orlCuello','$toraxConf','$toraxCora','$toraxBronPul','$abdomen','$genExt','$colVer','$extremidades','$piel','$neuEsfMen','$neuEsfMot','$neuTonMus','$neuEqu','$neuMar','$neuSen','$neuParCra','$refPup','$refTen','$refAno','$observaciones','$diagnostico','$impDiag','$profesional')"))
		{
			echo "Registro de datos exitoso";
		}
		else
		{
			echo "No se pudo hacer el registro de datos";
		}
	}

	function consultarDatos($idValoracionMedica)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("SELECT * FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo "Consulta de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la consulta de datos";
		}
	}

	function eliminarDatos($idValoracionMedica)
	{
		$bd=BD::getInstance();
		if($bd->extraerDatos("DELETE FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo "Eliminación exitosa";
		}
		else
		{
			echo "No se pudo realizar la eliminación de datos";
		}
	}

	function actualizarDatos($idValoracionMedica,$consulta,$durEmb,$patDurEmb,$droMedIng,$nacimiento,$donde,$llanto,$cianosis,$apgar,$peso,$talla,$patPer,$patDurPriAnio,$recTraAct,$hospitalizaciones,$tiempo,$diagHosp,$lacMat,$tiempoLact,$lecCom,$iniDieCom,$intAli,$antQui,$antTra,$intAle,$exaInt,$inmunizaciones,$asma,$malformaciones,$alergias,$diabetes,$rsm,$epilepsia,$proLenguaje,$mentales,$otras,$fisPeso,$fistalla,$fisTA,$fisCef,$fisFC,$fisPulso,$fisForma,$fisFaciales,$fisOjos,$orlCavOral,$orlFaringe,$orlAuriculares,$orlOido,$orlNariz,$orlCuello,$toraxConf,$toraxCora,$toraxBronPul,$abdomen,$genExt,$colVer,$extremidades,$piel,$neuEsfMen,$neuEsfMot,$neuTonMus,$neuEqu,$neuMar,$neuSen,$neuParCra,$refPup,$refTen,$refAno,$observaciones,$diagnostico,$impDiag,$profesional)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("UPDATE valoracionmedica SET consulta='$consulta',durEmb='$durEmb',patDurEmb='$patDurEmb',droMedIng='$droMedIng',nacimiento='$nacimiento',donde='$donde',llanto='$llanto',cianosis='$cianosis',apgar='$apgar',peso='$peso',talla='$talla',patPer='$patPer',patDurPriAnio='$patDurPriAnio',recTraAct='$recTraAct',hospitalizaciones='$hospitalizaciones',tiempo='$tiempo',diagHosp='$diagHosp',lacMat='$lacMat',tiempoLact='$tiempoLact',lecCom='$lecCom',iniDieCom='$iniDieCom',intAli='$intAli',antQui='$antQui',antTra='$antTra',intAle='$intAle',exaInt='$exaInt',inmunizaciones='$inmunizaciones',asma='$asma',malformaciones='$malformaciones',alergias='$alergias',diabetes='$diabetes',rsm='$rsm',epilepsia='$epilepsia',proLenguaje='$proLenguaje',mentales='$mentales',otras='$otras',fisPeso='$fisPeso',fistalla='$fistalla',fisTA='$fisTA',fisCef='$fisCef',fisFC='$fisFC',fisPulso='$fisPulso',fisForma='$fisForma',fisFaciales='$fisFaciales',fisOjos='$fisOjos',orlCavOral='$orlCavOral',orlFaringe='$orlFaringe',orlAuriculares='$orlAuriculares',orlOido='$orlOido',orlNariz='$orlNariz',orlCuello='$orlCuello',toraxConf='$toraxConf',toraxCora='$toraxCora',toraxBronPul='$toraxBronPul',abdomen='$abdomen',genExt='$genExt',colVer='$colVer',extremidades='$extremidades',piel='$piel',neuEsfMen='$neuEsfMen',neuEsfMot='$neuEsfMot',neuTonMus='$neuTonMus',neuEqu='$neuEqu',neuMar='$neuMar',neuSen='$neuSen',neuParCra='$neuParCra',refPup='$refPup',refTen='$refTen',refAno='$refAno',observaciones='$observaciones',diagnostico='$diagnostico',impDiag='$impDiag',profesional='$profesional' WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo "Modificación de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la modificación de datos";
		}
	}

	function getconsulta($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT consulta FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['consulta'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getdurEmb($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT durEmb FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['durEmb'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getpatDurEmb($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT patDurEmb FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['patDurEmb'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getdroMedIng($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT droMedIng FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['droMedIng'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getnacimiento($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT nacimiento FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['nacimiento'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getdonde($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT donde FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['donde'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getllanto($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT llanto FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['llanto'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getcianosis($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT cianosis FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['cianosis'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getapgar($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT apgar FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['apgar'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getpeso($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT peso FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['peso'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function gettalla($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT talla FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['talla'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getpatPer($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT patPer FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['patPer'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getpatDurPriAnio($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT patDurPriAnio FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['patDurPriAnio'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getrecTraAct($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT recTraAct FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['recTraAct'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function gethospitalizaciones($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT hospitalizaciones FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['hospitalizaciones'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function gettiempo($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT tiempo FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['tiempo'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getdiagHosp($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT diagHosp FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['diagHosp'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getlacMat($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT lacMat FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['lacMat'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function gettiempoLact($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT tiempoLact FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['tiempoLact'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getlecCom($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT lecCom FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['lecCom'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getiniDieCom($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT iniDieCom FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['iniDieCom'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getintAli($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT intAli FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['intAli'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getantQui($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT antQui FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['antQui'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getantTra($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT antTra FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['antTra'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getintAle($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT intAle FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['intAle'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getexaInt($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT exaInt FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['exaInt'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getinmunizaciones($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT inmunizaciones FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['inmunizaciones'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getasma($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT asma FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['asma'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getmalformaciones($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT malformaciones FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['malformaciones'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getalergias($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT alergias FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['alergias'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getdiabetes($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT diabetes FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['diabetes'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getrsm($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT rsm FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['rsm'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getepilepsia($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT epilepsia FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['epilepsia'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getproLenguaje($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT proLenguaje FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['proLenguaje'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getmentales($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT mentales FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['mentales'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getotras($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT otras FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['otras'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getfisPeso($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT fisPeso FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['fisPeso'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getfistalla($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT fistalla FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['fistalla'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getfisTA($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT fisTA FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['fisTA'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getfisCef($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT fisCef FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['fisCef'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getfisFC($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT fisFC FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['fisFC'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getfisPulso($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT fisPulso FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['fisPulso'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getfisForma($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT fisForma FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['fisForma'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getfisFaciales($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT fisFaciales FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['fisFaciales'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getfisOjos($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT fisOjos FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['fisOjos'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getorlCavOral($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT orlCavOral FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['orlCavOral'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getorlFaringe($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT orlFaringe FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['orlFaringe'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getorlAuriculares($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT orlAuriculares FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['orlAuriculares'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getorlOido($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT orlOido FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['orlOido'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getorlNariz($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT orlNariz FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['orlNariz'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getorlCuello($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT orlCuello FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['orlCuello'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function gettoraxConf($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT toraxConf FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['toraxConf'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function gettoraxCora($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT toraxCora FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['toraxCora'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function gettoraxBronPul($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT toraxBronPul FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['toraxBronPul'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getabdomen($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT abdomen FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['abdomen'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getgenExt($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT genExt FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['genExt'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getcolVer($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT colVer FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['colVer'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getextremidades($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT extremidades FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['extremidades'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getpiel($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT piel FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['piel'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getneuEsfMen($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT neuEsfMen FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['neuEsfMen'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getneuEsfMot($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT neuEsfMot FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['neuEsfMot'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getneuTonMus($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT neuTonMus FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['neuTonMus'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getneuEqu($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT neuEqu FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['neuEqu'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getneuMar($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT neuMar FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['neuMar'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getneuSen($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT neuSen FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['neuSen'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getneuParCra($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT neuParCra FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['neuParCra'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getrefPup($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT refPup FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['refPup'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getrefTen($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT refTen FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['refTen'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getrefAno($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT refAno FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['refAno'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getobservaciones($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT observaciones FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['observaciones'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getdiagnostico($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT diagnostico FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['diagnostico'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getimpDiag($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT impDiag FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['impDiag'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getprofesional($idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("SELECT profesional FROM valoracionmedica WHERE idValoracionMedica=$idValoracionMedica"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['profesional'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function setconsulta($consulta,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET consulta=$consulta WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setdurEmb($durEmb,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET durEmb=$durEmb WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setpatDurEmb($patDurEmb,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET patDurEmb=$patDurEmb WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setdroMedIng($droMedIng,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET droMedIng=$droMedIng WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setnacimiento($nacimiento,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET nacimiento=$nacimiento WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setdonde($donde,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET donde=$donde WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setllanto($llanto,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET llanto=$llanto WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setcianosis($cianosis,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET cianosis=$cianosis WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setapgar($apgar,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET apgar=$apgar WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setpeso($peso,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET peso=$peso WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function settalla($talla,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET talla=$talla WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setpatPer($patPer,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET patPer=$patPer WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setpatDurPriAnio($patDurPriAnio,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET patDurPriAnio=$patDurPriAnio WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setrecTraAct($recTraAct,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET recTraAct=$recTraAct WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function sethospitalizaciones($hospitalizaciones,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET hospitalizaciones=$hospitalizaciones WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function settiempo($tiempo,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET tiempo=$tiempo WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setdiagHosp($diagHosp,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET diagHosp=$diagHosp WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setlacMat($lacMat,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET lacMat=$lacMat WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function settiempoLact($tiempoLact,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET tiempoLact=$tiempoLact WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setlecCom($lecCom,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET lecCom=$lecCom WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setiniDieCom($iniDieCom,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET iniDieCom=$iniDieCom WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setintAli($intAli,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET intAli=$intAli WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setantQui($antQui,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET antQui=$antQui WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setantTra($antTra,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET antTra=$antTra WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setintAle($intAle,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET intAle=$intAle WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setexaInt($exaInt,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET exaInt=$exaInt WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setinmunizaciones($inmunizaciones,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET inmunizaciones=$inmunizaciones WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setasma($asma,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET asma=$asma WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setmalformaciones($malformaciones,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET malformaciones=$malformaciones WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setalergias($alergias,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET alergias=$alergias WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setdiabetes($diabetes,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET diabetes=$diabetes WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setrsm($rsm,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET rsm=$rsm WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setepilepsia($epilepsia,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET epilepsia=$epilepsia WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setproLenguaje($proLenguaje,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET proLenguaje=$proLenguaje WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setmentales($mentales,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET mentales=$mentales WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setotras($otras,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET otras=$otras WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setfisPeso($fisPeso,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET fisPeso=$fisPeso WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setfistalla($fistalla,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET fistalla=$fistalla WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setfisTA($fisTA,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET fisTA=$fisTA WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setfisCef($fisCef,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET fisCef=$fisCef WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setfisFC($fisFC,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET fisFC=$fisFC WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setfisPulso($fisPulso,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET fisPulso=$fisPulso WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setfisForma($fisForma,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET fisForma=$fisForma WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setfisFaciales($fisFaciales,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET fisFaciales=$fisFaciales WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setfisOjos($fisOjos,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET fisOjos=$fisOjos WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setorlCavOral($orlCavOral,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET orlCavOral=$orlCavOral WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setorlFaringe($orlFaringe,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET orlFaringe=$orlFaringe WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setorlAuriculares($orlAuriculares,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET orlAuriculares=$orlAuriculares WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setorlOido($orlOido,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET orlOido=$orlOido WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setorlNariz($orlNariz,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET orlNariz=$orlNariz WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setorlCuello($orlCuello,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET orlCuello=$orlCuello WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function settoraxConf($toraxConf,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET toraxConf=$toraxConf WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function settoraxCora($toraxCora,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET toraxCora=$toraxCora WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function settoraxBronPul($toraxBronPul,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET toraxBronPul=$toraxBronPul WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setabdomen($abdomen,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET abdomen=$abdomen WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setgenExt($genExt,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET genExt=$genExt WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setcolVer($colVer,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET colVer=$colVer WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setextremidades($extremidades,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET extremidades=$extremidades WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setpiel($piel,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET piel=$piel WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setneuEsfMen($neuEsfMen,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET neuEsfMen=$neuEsfMen WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setneuEsfMot($neuEsfMot,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET neuEsfMot=$neuEsfMot WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setneuTonMus($neuTonMus,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET neuTonMus=$neuTonMus WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setneuEqu($neuEqu,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET neuEqu=$neuEqu WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setneuMar($neuMar,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET neuMar=$neuMar WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setneuSen($neuSen,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET neuSen=$neuSen WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setneuParCra($neuParCra,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET neuParCra=$neuParCra WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setrefPup($refPup,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET refPup=$refPup WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setrefTen($refTen,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET refTen=$refTen WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setrefAno($refAno,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET refAno=$refAno WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setobservaciones($observaciones,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET observaciones=$observaciones WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setdiagnostico($diagnostico,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET diagnostico=$diagnostico WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setimpDiag($impDiag,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET impDiag=$impDiag WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setprofesional($profesional,$idValoracionMedica)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionmedica SET profesional=$profesional WHERE idValoracionMedica=$idValoracionMedica"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function dibujarFormularioIngresovaloracionmedica()
	{
		echo "<form role='form'>";

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>idValoracionMedica</label>

                                <input type='email' class='form-control' id='idValoracionMedica' placeholder='idValoracionMedica'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>consulta</label>

                                <input type='email' class='form-control' id='consulta' placeholder='consulta'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>durEmb</label>

                                <input type='email' class='form-control' id='durEmb' placeholder='durEmb'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>patDurEmb</label>

                                <input type='email' class='form-control' id='patDurEmb' placeholder='patDurEmb'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>droMedIng</label>

                                <input type='email' class='form-control' id='droMedIng' placeholder='droMedIng'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>nacimiento</label>

                                <input type='email' class='form-control' id='nacimiento' placeholder='nacimiento'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>donde</label>

                                <input type='email' class='form-control' id='donde' placeholder='donde'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>llanto</label>

                                <input type='email' class='form-control' id='llanto' placeholder='llanto'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>cianosis</label>

                                <input type='email' class='form-control' id='cianosis' placeholder='cianosis'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>apgar</label>

                                <input type='email' class='form-control' id='apgar' placeholder='apgar'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>peso</label>

                                <input type='email' class='form-control' id='peso' placeholder='peso'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>talla</label>

                                <input type='email' class='form-control' id='talla' placeholder='talla'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>patPer</label>

                                <input type='email' class='form-control' id='patPer' placeholder='patPer'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>patDurPriAnio</label>

                                <input type='email' class='form-control' id='patDurPriAnio' placeholder='patDurPriAnio'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>recTraAct</label>

                                <input type='email' class='form-control' id='recTraAct' placeholder='recTraAct'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>hospitalizaciones</label>

                                <input type='email' class='form-control' id='hospitalizaciones' placeholder='hospitalizaciones'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>tiempo</label>

                                <input type='email' class='form-control' id='tiempo' placeholder='tiempo'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>diagHosp</label>

                                <input type='email' class='form-control' id='diagHosp' placeholder='diagHosp'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>lacMat</label>

                                <input type='email' class='form-control' id='lacMat' placeholder='lacMat'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>tiempoLact</label>

                                <input type='email' class='form-control' id='tiempoLact' placeholder='tiempoLact'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>lecCom</label>

                                <input type='email' class='form-control' id='lecCom' placeholder='lecCom'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>iniDieCom</label>

                                <input type='email' class='form-control' id='iniDieCom' placeholder='iniDieCom'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>intAli</label>

                                <input type='email' class='form-control' id='intAli' placeholder='intAli'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>antQui</label>

                                <input type='email' class='form-control' id='antQui' placeholder='antQui'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>antTra</label>

                                <input type='email' class='form-control' id='antTra' placeholder='antTra'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>intAle</label>

                                <input type='email' class='form-control' id='intAle' placeholder='intAle'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>exaInt</label>

                                <input type='email' class='form-control' id='exaInt' placeholder='exaInt'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>inmunizaciones</label>

                                <input type='email' class='form-control' id='inmunizaciones' placeholder='inmunizaciones'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>asma</label>

                                <input type='email' class='form-control' id='asma' placeholder='asma'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>malformaciones</label>

                                <input type='email' class='form-control' id='malformaciones' placeholder='malformaciones'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>alergias</label>

                                <input type='email' class='form-control' id='alergias' placeholder='alergias'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>diabetes</label>

                                <input type='email' class='form-control' id='diabetes' placeholder='diabetes'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>rsm</label>

                                <input type='email' class='form-control' id='rsm' placeholder='rsm'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>epilepsia</label>

                                <input type='email' class='form-control' id='epilepsia' placeholder='epilepsia'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>proLenguaje</label>

                                <input type='email' class='form-control' id='proLenguaje' placeholder='proLenguaje'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>mentales</label>

                                <input type='email' class='form-control' id='mentales' placeholder='mentales'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>otras</label>

                                <input type='email' class='form-control' id='otras' placeholder='otras'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>fisPeso</label>

                                <input type='email' class='form-control' id='fisPeso' placeholder='fisPeso'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>fistalla</label>

                                <input type='email' class='form-control' id='fistalla' placeholder='fistalla'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>fisTA</label>

                                <input type='email' class='form-control' id='fisTA' placeholder='fisTA'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>fisCef</label>

                                <input type='email' class='form-control' id='fisCef' placeholder='fisCef'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>fisFC</label>

                                <input type='email' class='form-control' id='fisFC' placeholder='fisFC'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>fisPulso</label>

                                <input type='email' class='form-control' id='fisPulso' placeholder='fisPulso'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>fisForma</label>

                                <input type='email' class='form-control' id='fisForma' placeholder='fisForma'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>fisFaciales</label>

                                <input type='email' class='form-control' id='fisFaciales' placeholder='fisFaciales'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>fisOjos</label>

                                <input type='email' class='form-control' id='fisOjos' placeholder='fisOjos'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>orlCavOral</label>

                                <input type='email' class='form-control' id='orlCavOral' placeholder='orlCavOral'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>orlFaringe</label>

                                <input type='email' class='form-control' id='orlFaringe' placeholder='orlFaringe'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>orlAuriculares</label>

                                <input type='email' class='form-control' id='orlAuriculares' placeholder='orlAuriculares'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>orlOido</label>

                                <input type='email' class='form-control' id='orlOido' placeholder='orlOido'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>orlNariz</label>

                                <input type='email' class='form-control' id='orlNariz' placeholder='orlNariz'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>orlCuello</label>

                                <input type='email' class='form-control' id='orlCuello' placeholder='orlCuello'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>toraxConf</label>

                                <input type='email' class='form-control' id='toraxConf' placeholder='toraxConf'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>toraxCora</label>

                                <input type='email' class='form-control' id='toraxCora' placeholder='toraxCora'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>toraxBronPul</label>

                                <input type='email' class='form-control' id='toraxBronPul' placeholder='toraxBronPul'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>abdomen</label>

                                <input type='email' class='form-control' id='abdomen' placeholder='abdomen'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>genExt</label>

                                <input type='email' class='form-control' id='genExt' placeholder='genExt'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>colVer</label>

                                <input type='email' class='form-control' id='colVer' placeholder='colVer'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>extremidades</label>

                                <input type='email' class='form-control' id='extremidades' placeholder='extremidades'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>piel</label>

                                <input type='email' class='form-control' id='piel' placeholder='piel'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>neuEsfMen</label>

                                <input type='email' class='form-control' id='neuEsfMen' placeholder='neuEsfMen'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>neuEsfMot</label>

                                <input type='email' class='form-control' id='neuEsfMot' placeholder='neuEsfMot'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>neuTonMus</label>

                                <input type='email' class='form-control' id='neuTonMus' placeholder='neuTonMus'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>neuEqu</label>

                                <input type='email' class='form-control' id='neuEqu' placeholder='neuEqu'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>neuMar</label>

                                <input type='email' class='form-control' id='neuMar' placeholder='neuMar'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>neuSen</label>

                                <input type='email' class='form-control' id='neuSen' placeholder='neuSen'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>neuParCra</label>

                                <input type='email' class='form-control' id='neuParCra' placeholder='neuParCra'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>refPup</label>

                                <input type='email' class='form-control' id='refPup' placeholder='refPup'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>refTen</label>

                                <input type='email' class='form-control' id='refTen' placeholder='refTen'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>refAno</label>

                                <input type='email' class='form-control' id='refAno' placeholder='refAno'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>observaciones</label>

                                <input type='email' class='form-control' id='observaciones' placeholder='observaciones'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>diagnostico</label>

                                <input type='email' class='form-control' id='diagnostico' placeholder='diagnostico'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>impDiag</label>

                                <input type='email' class='form-control' id='impDiag' placeholder='impDiag'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>profesional</label>

                                <input type='email' class='form-control' id='profesional' placeholder='profesional'>

                            </div>";

                

                echo "<button type='submit' class='btn btn-default' onclick='ingresarNuevovaloracionmedica();return false;'>Ingresar</button>";

           echo "</form>";
	}

	function consultarTodosvaloracionmedica()
	{
		$bd=BD::getInstance();
		if($result=$bd->extraerDatos("SELECT * FROM valoracionmedica"))
		{
			echo "<div class='panel panel-default'><div class='panel-heading'>Nombre de la Tabla</div> <table class='table'><thead><tr><th>idValoracionMedica</th><th>consulta</th><th>durEmb</th><th>patDurEmb</th><th>droMedIng</th><th>nacimiento</th><th>donde</th><th>llanto</th><th>cianosis</th><th>apgar</th><th>peso</th><th>talla</th><th>patPer</th><th>patDurPriAnio</th><th>recTraAct</th><th>hospitalizaciones</th><th>tiempo</th><th>diagHosp</th><th>lacMat</th><th>tiempoLact</th><th>lecCom</th><th>iniDieCom</th><th>intAli</th><th>antQui</th><th>antTra</th><th>intAle</th><th>exaInt</th><th>inmunizaciones</th><th>asma</th><th>malformaciones</th><th>alergias</th><th>diabetes</th><th>rsm</th><th>epilepsia</th><th>proLenguaje</th><th>mentales</th><th>otras</th><th>fisPeso</th><th>fistalla</th><th>fisTA</th><th>fisCef</th><th>fisFC</th><th>fisPulso</th><th>fisForma</th><th>fisFaciales</th><th>fisOjos</th><th>orlCavOral</th><th>orlFaringe</th><th>orlAuriculares</th><th>orlOido</th><th>orlNariz</th><th>orlCuello</th><th>toraxConf</th><th>toraxCora</th><th>toraxBronPul</th><th>abdomen</th><th>genExt</th><th>colVer</th><th>extremidades</th><th>piel</th><th>neuEsfMen</th><th>neuEsfMot</th><th>neuTonMus</th><th>neuEqu</th><th>neuMar</th><th>neuSen</th><th>neuParCra</th><th>refPup</th><th>refTen</th><th>refAno</th><th>observaciones</th><th>diagnostico</th><th>impDiag</th><th>profesional</th><th>Accion</th></tr></thead><tbody>";

        
			while($filas = mysql_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>".$filas['idValoracionMedica']."</td>";
				echo "<td>".$filas['consulta']."</td>";
				echo "<td>".$filas['durEmb']."</td>";
				echo "<td>".$filas['patDurEmb']."</td>";
				echo "<td>".$filas['droMedIng']."</td>";
				echo "<td>".$filas['nacimiento']."</td>";
				echo "<td>".$filas['donde']."</td>";
				echo "<td>".$filas['llanto']."</td>";
				echo "<td>".$filas['cianosis']."</td>";
				echo "<td>".$filas['apgar']."</td>";
				echo "<td>".$filas['peso']."</td>";
				echo "<td>".$filas['talla']."</td>";
				echo "<td>".$filas['patPer']."</td>";
				echo "<td>".$filas['patDurPriAnio']."</td>";
				echo "<td>".$filas['recTraAct']."</td>";
				echo "<td>".$filas['hospitalizaciones']."</td>";
				echo "<td>".$filas['tiempo']."</td>";
				echo "<td>".$filas['diagHosp']."</td>";
				echo "<td>".$filas['lacMat']."</td>";
				echo "<td>".$filas['tiempoLact']."</td>";
				echo "<td>".$filas['lecCom']."</td>";
				echo "<td>".$filas['iniDieCom']."</td>";
				echo "<td>".$filas['intAli']."</td>";
				echo "<td>".$filas['antQui']."</td>";
				echo "<td>".$filas['antTra']."</td>";
				echo "<td>".$filas['intAle']."</td>";
				echo "<td>".$filas['exaInt']."</td>";
				echo "<td>".$filas['inmunizaciones']."</td>";
				echo "<td>".$filas['asma']."</td>";
				echo "<td>".$filas['malformaciones']."</td>";
				echo "<td>".$filas['alergias']."</td>";
				echo "<td>".$filas['diabetes']."</td>";
				echo "<td>".$filas['rsm']."</td>";
				echo "<td>".$filas['epilepsia']."</td>";
				echo "<td>".$filas['proLenguaje']."</td>";
				echo "<td>".$filas['mentales']."</td>";
				echo "<td>".$filas['otras']."</td>";
				echo "<td>".$filas['fisPeso']."</td>";
				echo "<td>".$filas['fistalla']."</td>";
				echo "<td>".$filas['fisTA']."</td>";
				echo "<td>".$filas['fisCef']."</td>";
				echo "<td>".$filas['fisFC']."</td>";
				echo "<td>".$filas['fisPulso']."</td>";
				echo "<td>".$filas['fisForma']."</td>";
				echo "<td>".$filas['fisFaciales']."</td>";
				echo "<td>".$filas['fisOjos']."</td>";
				echo "<td>".$filas['orlCavOral']."</td>";
				echo "<td>".$filas['orlFaringe']."</td>";
				echo "<td>".$filas['orlAuriculares']."</td>";
				echo "<td>".$filas['orlOido']."</td>";
				echo "<td>".$filas['orlNariz']."</td>";
				echo "<td>".$filas['orlCuello']."</td>";
				echo "<td>".$filas['toraxConf']."</td>";
				echo "<td>".$filas['toraxCora']."</td>";
				echo "<td>".$filas['toraxBronPul']."</td>";
				echo "<td>".$filas['abdomen']."</td>";
				echo "<td>".$filas['genExt']."</td>";
				echo "<td>".$filas['colVer']."</td>";
				echo "<td>".$filas['extremidades']."</td>";
				echo "<td>".$filas['piel']."</td>";
				echo "<td>".$filas['neuEsfMen']."</td>";
				echo "<td>".$filas['neuEsfMot']."</td>";
				echo "<td>".$filas['neuTonMus']."</td>";
				echo "<td>".$filas['neuEqu']."</td>";
				echo "<td>".$filas['neuMar']."</td>";
				echo "<td>".$filas['neuSen']."</td>";
				echo "<td>".$filas['neuParCra']."</td>";
				echo "<td>".$filas['refPup']."</td>";
				echo "<td>".$filas['refTen']."</td>";
				echo "<td>".$filas['refAno']."</td>";
				echo "<td>".$filas['observaciones']."</td>";
				echo "<td>".$filas['diagnostico']."</td>";
				echo "<td>".$filas['impDiag']."</td>";
				echo "<td>".$filas['profesional']."</td>";
				echo "<td><p>

        <a href='#' class='btn btn-primary' role='button' onclick='dibujarFormularioModificarvaloracionmedica(".$filas['idValoracionMedica'].");return false;'>Editar</a>

        <a href='#' class='btn btn-primary' role='button' onclick='eliminarvaloracionmedica(".$filas['idValoracionMedica'].");return false;'>Eliminar</a>

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

	function dibujarFormularioModificarvaloracionmedica($id)
	{
		$bd=BD::getInstance();
		$result=$bd->extraerDatos("SELECT * FROM valoracionmedica WHERE idValoracionMedica=".$id);
		$filas = mysql_fetch_array($result);
		echo "<form role='form'>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>idValoracionMedica</label>

                            <input class='form-control' type='hidden' id='idValoracionMedica' value='".$filas["idValoracionMedica"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>consulta</label>

                            <input type='email' class='form-control' id='consulta' value='".$filas["consulta"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>durEmb</label>

                            <input type='email' class='form-control' id='durEmb' value='".$filas["durEmb"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>patDurEmb</label>

                            <input type='email' class='form-control' id='patDurEmb' value='".$filas["patDurEmb"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>droMedIng</label>

                            <input type='email' class='form-control' id='droMedIng' value='".$filas["droMedIng"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>nacimiento</label>

                            <input type='email' class='form-control' id='nacimiento' value='".$filas["nacimiento"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>donde</label>

                            <input type='email' class='form-control' id='donde' value='".$filas["donde"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>llanto</label>

                            <input type='email' class='form-control' id='llanto' value='".$filas["llanto"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>cianosis</label>

                            <input type='email' class='form-control' id='cianosis' value='".$filas["cianosis"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>apgar</label>

                            <input type='email' class='form-control' id='apgar' value='".$filas["apgar"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>peso</label>

                            <input type='email' class='form-control' id='peso' value='".$filas["peso"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>talla</label>

                            <input type='email' class='form-control' id='talla' value='".$filas["talla"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>patPer</label>

                            <input type='email' class='form-control' id='patPer' value='".$filas["patPer"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>patDurPriAnio</label>

                            <input type='email' class='form-control' id='patDurPriAnio' value='".$filas["patDurPriAnio"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>recTraAct</label>

                            <input type='email' class='form-control' id='recTraAct' value='".$filas["recTraAct"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>hospitalizaciones</label>

                            <input type='email' class='form-control' id='hospitalizaciones' value='".$filas["hospitalizaciones"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>tiempo</label>

                            <input type='email' class='form-control' id='tiempo' value='".$filas["tiempo"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>diagHosp</label>

                            <input type='email' class='form-control' id='diagHosp' value='".$filas["diagHosp"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>lacMat</label>

                            <input type='email' class='form-control' id='lacMat' value='".$filas["lacMat"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>tiempoLact</label>

                            <input type='email' class='form-control' id='tiempoLact' value='".$filas["tiempoLact"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>lecCom</label>

                            <input type='email' class='form-control' id='lecCom' value='".$filas["lecCom"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>iniDieCom</label>

                            <input type='email' class='form-control' id='iniDieCom' value='".$filas["iniDieCom"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>intAli</label>

                            <input type='email' class='form-control' id='intAli' value='".$filas["intAli"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>antQui</label>

                            <input type='email' class='form-control' id='antQui' value='".$filas["antQui"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>antTra</label>

                            <input type='email' class='form-control' id='antTra' value='".$filas["antTra"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>intAle</label>

                            <input type='email' class='form-control' id='intAle' value='".$filas["intAle"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>exaInt</label>

                            <input type='email' class='form-control' id='exaInt' value='".$filas["exaInt"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>inmunizaciones</label>

                            <input type='email' class='form-control' id='inmunizaciones' value='".$filas["inmunizaciones"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>asma</label>

                            <input type='email' class='form-control' id='asma' value='".$filas["asma"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>malformaciones</label>

                            <input type='email' class='form-control' id='malformaciones' value='".$filas["malformaciones"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>alergias</label>

                            <input type='email' class='form-control' id='alergias' value='".$filas["alergias"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>diabetes</label>

                            <input type='email' class='form-control' id='diabetes' value='".$filas["diabetes"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>rsm</label>

                            <input type='email' class='form-control' id='rsm' value='".$filas["rsm"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>epilepsia</label>

                            <input type='email' class='form-control' id='epilepsia' value='".$filas["epilepsia"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>proLenguaje</label>

                            <input type='email' class='form-control' id='proLenguaje' value='".$filas["proLenguaje"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>mentales</label>

                            <input type='email' class='form-control' id='mentales' value='".$filas["mentales"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>otras</label>

                            <input type='email' class='form-control' id='otras' value='".$filas["otras"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>fisPeso</label>

                            <input type='email' class='form-control' id='fisPeso' value='".$filas["fisPeso"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>fistalla</label>

                            <input type='email' class='form-control' id='fistalla' value='".$filas["fistalla"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>fisTA</label>

                            <input type='email' class='form-control' id='fisTA' value='".$filas["fisTA"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>fisCef</label>

                            <input type='email' class='form-control' id='fisCef' value='".$filas["fisCef"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>fisFC</label>

                            <input type='email' class='form-control' id='fisFC' value='".$filas["fisFC"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>fisPulso</label>

                            <input type='email' class='form-control' id='fisPulso' value='".$filas["fisPulso"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>fisForma</label>

                            <input type='email' class='form-control' id='fisForma' value='".$filas["fisForma"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>fisFaciales</label>

                            <input type='email' class='form-control' id='fisFaciales' value='".$filas["fisFaciales"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>fisOjos</label>

                            <input type='email' class='form-control' id='fisOjos' value='".$filas["fisOjos"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>orlCavOral</label>

                            <input type='email' class='form-control' id='orlCavOral' value='".$filas["orlCavOral"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>orlFaringe</label>

                            <input type='email' class='form-control' id='orlFaringe' value='".$filas["orlFaringe"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>orlAuriculares</label>

                            <input type='email' class='form-control' id='orlAuriculares' value='".$filas["orlAuriculares"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>orlOido</label>

                            <input type='email' class='form-control' id='orlOido' value='".$filas["orlOido"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>orlNariz</label>

                            <input type='email' class='form-control' id='orlNariz' value='".$filas["orlNariz"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>orlCuello</label>

                            <input type='email' class='form-control' id='orlCuello' value='".$filas["orlCuello"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>toraxConf</label>

                            <input type='email' class='form-control' id='toraxConf' value='".$filas["toraxConf"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>toraxCora</label>

                            <input type='email' class='form-control' id='toraxCora' value='".$filas["toraxCora"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>toraxBronPul</label>

                            <input type='email' class='form-control' id='toraxBronPul' value='".$filas["toraxBronPul"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>abdomen</label>

                            <input type='email' class='form-control' id='abdomen' value='".$filas["abdomen"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>genExt</label>

                            <input type='email' class='form-control' id='genExt' value='".$filas["genExt"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>colVer</label>

                            <input type='email' class='form-control' id='colVer' value='".$filas["colVer"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>extremidades</label>

                            <input type='email' class='form-control' id='extremidades' value='".$filas["extremidades"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>piel</label>

                            <input type='email' class='form-control' id='piel' value='".$filas["piel"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>neuEsfMen</label>

                            <input type='email' class='form-control' id='neuEsfMen' value='".$filas["neuEsfMen"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>neuEsfMot</label>

                            <input type='email' class='form-control' id='neuEsfMot' value='".$filas["neuEsfMot"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>neuTonMus</label>

                            <input type='email' class='form-control' id='neuTonMus' value='".$filas["neuTonMus"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>neuEqu</label>

                            <input type='email' class='form-control' id='neuEqu' value='".$filas["neuEqu"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>neuMar</label>

                            <input type='email' class='form-control' id='neuMar' value='".$filas["neuMar"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>neuSen</label>

                            <input type='email' class='form-control' id='neuSen' value='".$filas["neuSen"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>neuParCra</label>

                            <input type='email' class='form-control' id='neuParCra' value='".$filas["neuParCra"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>refPup</label>

                            <input type='email' class='form-control' id='refPup' value='".$filas["refPup"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>refTen</label>

                            <input type='email' class='form-control' id='refTen' value='".$filas["refTen"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>refAno</label>

                            <input type='email' class='form-control' id='refAno' value='".$filas["refAno"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>observaciones</label>

                            <input type='email' class='form-control' id='observaciones' value='".$filas["observaciones"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>diagnostico</label>

                            <input type='email' class='form-control' id='diagnostico' value='".$filas["diagnostico"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>impDiag</label>

                            <input type='email' class='form-control' id='impDiag' value='".$filas["impDiag"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>profesional</label>

                            <input type='email' class='form-control' id='profesional' value='".$filas["profesional"]."'>

                        </div>";

                echo "<button type='submit' class='btn btn-default' type='submit' onclick='modificarvaloracionmedica($id);return false;'>Modificar</button></form>";

           
	}
}
?>