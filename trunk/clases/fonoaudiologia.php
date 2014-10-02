<?php
include ('../bd/bd.php');
class fonoaudiologia
{
	function insertarDatos($idFonoAudiologia,$consulta,$antPre,$antPeri,$antPers,$alMa,$alBla,$alSol,$alTet,$alInd,$tipAli,$evoBal,$evoPal,$evoFra,$evoPro,$evoGra,$evoLec,$evoPre,$obs,$sisFonCom,$falFon,$falFonCua,$falCom,$falComCua,$labAna,$labMov,$labTon,$labSen,$labFun,$lenAna,$lenMov,$lenTon,$lenSen,$lenFun,$mejAna,$mejMov,$mejTon,$mejSen,$mejFun,$velAna,$velMov,$velTon,$velSen,$velFun,$die,$pal,$praORF,$resMod,$resTip,$resCoo,$nivSemSem,$nivSemCua,$nivSemSec,$nivSemNom,$nivSemAgr,$nivSemAbsVis,$nivSemAbsAud,$nivSemAbsGes,$nivSemDif,$nivSemSemj,$nivSemAna,$nivSemReaDesc,$nivSemSin,$nivSemAut,$nivSemComOrdSim,$nivSemComOrdCom,$nivSemComOrdObj,$nivSemGraCatGra,$nivSemGraCatGraCua,$nivSemGraOra,$nivSemGraPal,$nivSemGraCoh,$nivSemGraCoe,$nivPraInt,$nivPraPre,$nivPraRes,$nivPraExc,$nivPraNeg,$nivPraAfi,$nivPraInf,$nivPraCon,$nivPraTur,$nivPraTop,$lectoFone,$lectoSila,$lectoLect,$lectoVoz,$lectoSile,$lectoComp,$lectoApoy,$lectoApoyCual,$lectoVelo,$lectoTexLei,$escAut,$escAutCom,$escCop,$escCopCom,$escDic,$escDicCom,$escEsp,$escEspCom,$escCoh,$escCoe,$escGra,$escSil,$escPal,$escFra,$apreCor,$apreMed,$apreLar,$apreAte,$apreMot,$apreTol,$apreAct,$impDiag,$diag1,$diag2,$diag3,$profesional)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("INSERT INTO fonoaudiologia(consulta,antPre,antPeri,antPers,alMa,alBla,alSol,alTet,alInd,tipAli,evoBal,evoPal,evoFra,evoPro,evoGra,evoLec,evoPre,obs,sisFonCom,falFon,falFonCua,falCom,falComCua,labAna,labMov,labTon,labSen,labFun,lenAna,lenMov,lenTon,lenSen,lenFun,mejAna,mejMov,mejTon,mejSen,mejFun,velAna,velMov,velTon,velSen,velFun,die,pal,praORF,resMod,resTip,resCoo,nivSemSem,nivSemCua,nivSemSec,nivSemNom,nivSemAgr,nivSemAbsVis,nivSemAbsAud,nivSemAbsGes,nivSemDif,nivSemSemj,nivSemAna,nivSemReaDesc,nivSemSin,nivSemAut,nivSemComOrdSim,nivSemComOrdCom,nivSemComOrdObj,nivSemGraCatGra,nivSemGraCatGraCua,nivSemGraOra,nivSemGraPal,nivSemGraCoh,nivSemGraCoe,nivPraInt,nivPraPre,nivPraRes,nivPraExc,nivPraNeg,nivPraAfi,nivPraInf,nivPraCon,nivPraTur,nivPraTop,lectoFone,lectoSila,lectoLect,lectoVoz,lectoSile,lectoComp,lectoApoy,lectoApoyCual,lectoVelo,lectoTexLei,escAut,escAutCom,escCop,escCopCom,escDic,escDicCom,escEsp,escEspCom,escCoh,escCoe,escGra,escSil,escPal,escFra,apreCor,apreMed,apreLar,apreAte,apreMot,apreTol,apreAct,impDiag,diag1,diag2,diag3,profesional) VALUES ('$consulta','$antPre','$antPeri','$antPers','$alMa','$alBla','$alSol','$alTet','$alInd','$tipAli','$evoBal','$evoPal','$evoFra','$evoPro','$evoGra','$evoLec','$evoPre','$obs','$sisFonCom','$falFon','$falFonCua','$falCom','$falComCua','$labAna','$labMov','$labTon','$labSen','$labFun','$lenAna','$lenMov','$lenTon','$lenSen','$lenFun','$mejAna','$mejMov','$mejTon','$mejSen','$mejFun','$velAna','$velMov','$velTon','$velSen','$velFun','$die','$pal','$praORF','$resMod','$resTip','$resCoo','$nivSemSem','$nivSemCua','$nivSemSec','$nivSemNom','$nivSemAgr','$nivSemAbsVis','$nivSemAbsAud','$nivSemAbsGes','$nivSemDif','$nivSemSemj','$nivSemAna','$nivSemReaDesc','$nivSemSin','$nivSemAut','$nivSemComOrdSim','$nivSemComOrdCom','$nivSemComOrdObj','$nivSemGraCatGra','$nivSemGraCatGraCua','$nivSemGraOra','$nivSemGraPal','$nivSemGraCoh','$nivSemGraCoe','$nivPraInt','$nivPraPre','$nivPraRes','$nivPraExc','$nivPraNeg','$nivPraAfi','$nivPraInf','$nivPraCon','$nivPraTur','$nivPraTop','$lectoFone','$lectoSila','$lectoLect','$lectoVoz','$lectoSile','$lectoComp','$lectoApoy','$lectoApoyCual','$lectoVelo','$lectoTexLei','$escAut','$escAutCom','$escCop','$escCopCom','$escDic','$escDicCom','$escEsp','$escEspCom','$escCoh','$escCoe','$escGra','$escSil','$escPal','$escFra','$apreCor','$apreMed','$apreLar','$apreAte','$apreMot','$apreTol','$apreAct','$impDiag','$diag1','$diag2','$diag3','$profesional')"))
		{
			echo "Registro de datos exitoso";
		}
		else
		{
			echo "No se pudo hacer el registro de datos";
		}
	}

	function consultarDatos($idFonoAudiologia)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("SELECT * FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo "Consulta de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la consulta de datos";
		}
	}

	function eliminarDatos($idFonoAudiologia)
	{
		$bd=BD::getInstance();
		if($bd->extraerDatos("DELETE FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo "Eliminación exitosa";
		}
		else
		{
			echo "No se pudo realizar la eliminación de datos";
		}
	}

	function actualizarDatos($idFonoAudiologia,$consulta,$antPre,$antPeri,$antPers,$alMa,$alBla,$alSol,$alTet,$alInd,$tipAli,$evoBal,$evoPal,$evoFra,$evoPro,$evoGra,$evoLec,$evoPre,$obs,$sisFonCom,$falFon,$falFonCua,$falCom,$falComCua,$labAna,$labMov,$labTon,$labSen,$labFun,$lenAna,$lenMov,$lenTon,$lenSen,$lenFun,$mejAna,$mejMov,$mejTon,$mejSen,$mejFun,$velAna,$velMov,$velTon,$velSen,$velFun,$die,$pal,$praORF,$resMod,$resTip,$resCoo,$nivSemSem,$nivSemCua,$nivSemSec,$nivSemNom,$nivSemAgr,$nivSemAbsVis,$nivSemAbsAud,$nivSemAbsGes,$nivSemDif,$nivSemSemj,$nivSemAna,$nivSemReaDesc,$nivSemSin,$nivSemAut,$nivSemComOrdSim,$nivSemComOrdCom,$nivSemComOrdObj,$nivSemGraCatGra,$nivSemGraCatGraCua,$nivSemGraOra,$nivSemGraPal,$nivSemGraCoh,$nivSemGraCoe,$nivPraInt,$nivPraPre,$nivPraRes,$nivPraExc,$nivPraNeg,$nivPraAfi,$nivPraInf,$nivPraCon,$nivPraTur,$nivPraTop,$lectoFone,$lectoSila,$lectoLect,$lectoVoz,$lectoSile,$lectoComp,$lectoApoy,$lectoApoyCual,$lectoVelo,$lectoTexLei,$escAut,$escAutCom,$escCop,$escCopCom,$escDic,$escDicCom,$escEsp,$escEspCom,$escCoh,$escCoe,$escGra,$escSil,$escPal,$escFra,$apreCor,$apreMed,$apreLar,$apreAte,$apreMot,$apreTol,$apreAct,$impDiag,$diag1,$diag2,$diag3,$profesional)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("UPDATE fonoaudiologia SET consulta='$consulta',antPre='$antPre',antPeri='$antPeri',antPers='$antPers',alMa='$alMa',alBla='$alBla',alSol='$alSol',alTet='$alTet',alInd='$alInd',tipAli='$tipAli',evoBal='$evoBal',evoPal='$evoPal',evoFra='$evoFra',evoPro='$evoPro',evoGra='$evoGra',evoLec='$evoLec',evoPre='$evoPre',obs='$obs',sisFonCom='$sisFonCom',falFon='$falFon',falFonCua='$falFonCua',falCom='$falCom',falComCua='$falComCua',labAna='$labAna',labMov='$labMov',labTon='$labTon',labSen='$labSen',labFun='$labFun',lenAna='$lenAna',lenMov='$lenMov',lenTon='$lenTon',lenSen='$lenSen',lenFun='$lenFun',mejAna='$mejAna',mejMov='$mejMov',mejTon='$mejTon',mejSen='$mejSen',mejFun='$mejFun',velAna='$velAna',velMov='$velMov',velTon='$velTon',velSen='$velSen',velFun='$velFun',die='$die',pal='$pal',praORF='$praORF',resMod='$resMod',resTip='$resTip',resCoo='$resCoo',nivSemSem='$nivSemSem',nivSemCua='$nivSemCua',nivSemSec='$nivSemSec',nivSemNom='$nivSemNom',nivSemAgr='$nivSemAgr',nivSemAbsVis='$nivSemAbsVis',nivSemAbsAud='$nivSemAbsAud',nivSemAbsGes='$nivSemAbsGes',nivSemDif='$nivSemDif',nivSemSemj='$nivSemSemj',nivSemAna='$nivSemAna',nivSemReaDesc='$nivSemReaDesc',nivSemSin='$nivSemSin',nivSemAut='$nivSemAut',nivSemComOrdSim='$nivSemComOrdSim',nivSemComOrdCom='$nivSemComOrdCom',nivSemComOrdObj='$nivSemComOrdObj',nivSemGraCatGra='$nivSemGraCatGra',nivSemGraCatGraCua='$nivSemGraCatGraCua',nivSemGraOra='$nivSemGraOra',nivSemGraPal='$nivSemGraPal',nivSemGraCoh='$nivSemGraCoh',nivSemGraCoe='$nivSemGraCoe',nivPraInt='$nivPraInt',nivPraPre='$nivPraPre',nivPraRes='$nivPraRes',nivPraExc='$nivPraExc',nivPraNeg='$nivPraNeg',nivPraAfi='$nivPraAfi',nivPraInf='$nivPraInf',nivPraCon='$nivPraCon',nivPraTur='$nivPraTur',nivPraTop='$nivPraTop',lectoFone='$lectoFone',lectoSila='$lectoSila',lectoLect='$lectoLect',lectoVoz='$lectoVoz',lectoSile='$lectoSile',lectoComp='$lectoComp',lectoApoy='$lectoApoy',lectoApoyCual='$lectoApoyCual',lectoVelo='$lectoVelo',lectoTexLei='$lectoTexLei',escAut='$escAut',escAutCom='$escAutCom',escCop='$escCop',escCopCom='$escCopCom',escDic='$escDic',escDicCom='$escDicCom',escEsp='$escEsp',escEspCom='$escEspCom',escCoh='$escCoh',escCoe='$escCoe',escGra='$escGra',escSil='$escSil',escPal='$escPal',escFra='$escFra',apreCor='$apreCor',apreMed='$apreMed',apreLar='$apreLar',apreAte='$apreAte',apreMot='$apreMot',apreTol='$apreTol',apreAct='$apreAct',impDiag='$impDiag',diag1='$diag1',diag2='$diag2',diag3='$diag3',profesional='$profesional' WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo "Modificación de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la modificación de datos";
		}
	}

	function getconsulta($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT consulta FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['consulta'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getantPre($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT antPre FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['antPre'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getantPeri($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT antPeri FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['antPeri'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getantPers($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT antPers FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['antPers'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getalMa($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT alMa FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['alMa'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getalBla($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT alBla FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['alBla'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getalSol($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT alSol FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['alSol'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getalTet($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT alTet FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['alTet'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getalInd($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT alInd FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['alInd'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function gettipAli($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT tipAli FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['tipAli'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getevoBal($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT evoBal FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['evoBal'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getevoPal($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT evoPal FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['evoPal'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getevoFra($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT evoFra FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['evoFra'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getevoPro($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT evoPro FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['evoPro'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getevoGra($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT evoGra FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['evoGra'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getevoLec($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT evoLec FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['evoLec'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getevoPre($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT evoPre FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['evoPre'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getobs($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT obs FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['obs'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getsisFonCom($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT sisFonCom FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['sisFonCom'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getfalFon($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT falFon FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['falFon'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getfalFonCua($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT falFonCua FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['falFonCua'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getfalCom($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT falCom FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['falCom'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getfalComCua($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT falComCua FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['falComCua'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getlabAna($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT labAna FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['labAna'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getlabMov($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT labMov FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['labMov'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getlabTon($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT labTon FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['labTon'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getlabSen($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT labSen FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['labSen'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getlabFun($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT labFun FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['labFun'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getlenAna($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT lenAna FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['lenAna'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getlenMov($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT lenMov FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['lenMov'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getlenTon($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT lenTon FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['lenTon'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getlenSen($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT lenSen FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['lenSen'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getlenFun($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT lenFun FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['lenFun'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getmejAna($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT mejAna FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['mejAna'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getmejMov($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT mejMov FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['mejMov'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getmejTon($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT mejTon FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['mejTon'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getmejSen($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT mejSen FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['mejSen'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getmejFun($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT mejFun FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['mejFun'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getvelAna($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT velAna FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['velAna'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getvelMov($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT velMov FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['velMov'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getvelTon($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT velTon FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['velTon'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getvelSen($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT velSen FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['velSen'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getvelFun($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT velFun FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['velFun'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getdie($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT die FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['die'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getpal($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT pal FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['pal'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getpraORF($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT praORF FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['praORF'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getresMod($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT resMod FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['resMod'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getresTip($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT resTip FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['resTip'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getresCoo($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT resCoo FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['resCoo'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getnivSemSem($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT nivSemSem FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['nivSemSem'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getnivSemCua($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT nivSemCua FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['nivSemCua'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getnivSemSec($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT nivSemSec FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['nivSemSec'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getnivSemNom($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT nivSemNom FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['nivSemNom'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getnivSemAgr($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT nivSemAgr FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['nivSemAgr'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getnivSemAbsVis($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT nivSemAbsVis FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['nivSemAbsVis'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getnivSemAbsAud($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT nivSemAbsAud FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['nivSemAbsAud'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getnivSemAbsGes($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT nivSemAbsGes FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['nivSemAbsGes'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getnivSemDif($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT nivSemDif FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['nivSemDif'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getnivSemSemj($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT nivSemSemj FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['nivSemSemj'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getnivSemAna($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT nivSemAna FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['nivSemAna'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getnivSemReaDesc($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT nivSemReaDesc FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['nivSemReaDesc'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getnivSemSin($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT nivSemSin FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['nivSemSin'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getnivSemAut($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT nivSemAut FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['nivSemAut'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getnivSemComOrdSim($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT nivSemComOrdSim FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['nivSemComOrdSim'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getnivSemComOrdCom($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT nivSemComOrdCom FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['nivSemComOrdCom'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getnivSemComOrdObj($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT nivSemComOrdObj FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['nivSemComOrdObj'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getnivSemGraCatGra($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT nivSemGraCatGra FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['nivSemGraCatGra'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getnivSemGraCatGraCua($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT nivSemGraCatGraCua FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['nivSemGraCatGraCua'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getnivSemGraOra($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT nivSemGraOra FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['nivSemGraOra'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getnivSemGraPal($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT nivSemGraPal FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['nivSemGraPal'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getnivSemGraCoh($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT nivSemGraCoh FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['nivSemGraCoh'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getnivSemGraCoe($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT nivSemGraCoe FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['nivSemGraCoe'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getnivPraInt($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT nivPraInt FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['nivPraInt'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getnivPraPre($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT nivPraPre FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['nivPraPre'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getnivPraRes($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT nivPraRes FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['nivPraRes'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getnivPraExc($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT nivPraExc FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['nivPraExc'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getnivPraNeg($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT nivPraNeg FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['nivPraNeg'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getnivPraAfi($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT nivPraAfi FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['nivPraAfi'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getnivPraInf($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT nivPraInf FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['nivPraInf'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getnivPraCon($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT nivPraCon FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['nivPraCon'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getnivPraTur($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT nivPraTur FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['nivPraTur'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getnivPraTop($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT nivPraTop FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['nivPraTop'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getlectoFone($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT lectoFone FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['lectoFone'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getlectoSila($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT lectoSila FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['lectoSila'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getlectoLect($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT lectoLect FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['lectoLect'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getlectoVoz($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT lectoVoz FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['lectoVoz'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getlectoSile($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT lectoSile FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['lectoSile'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getlectoComp($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT lectoComp FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['lectoComp'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getlectoApoy($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT lectoApoy FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['lectoApoy'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getlectoApoyCual($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT lectoApoyCual FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['lectoApoyCual'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getlectoVelo($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT lectoVelo FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['lectoVelo'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getlectoTexLei($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT lectoTexLei FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['lectoTexLei'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getescAut($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT escAut FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['escAut'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getescAutCom($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT escAutCom FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['escAutCom'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getescCop($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT escCop FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['escCop'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getescCopCom($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT escCopCom FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['escCopCom'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getescDic($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT escDic FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['escDic'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getescDicCom($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT escDicCom FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['escDicCom'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getescEsp($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT escEsp FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['escEsp'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getescEspCom($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT escEspCom FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['escEspCom'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getescCoh($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT escCoh FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['escCoh'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getescCoe($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT escCoe FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['escCoe'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getescGra($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT escGra FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['escGra'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getescSil($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT escSil FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['escSil'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getescPal($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT escPal FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['escPal'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getescFra($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT escFra FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['escFra'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getapreCor($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT apreCor FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['apreCor'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getapreMed($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT apreMed FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['apreMed'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getapreLar($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT apreLar FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['apreLar'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getapreAte($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT apreAte FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['apreAte'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getapreMot($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT apreMot FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['apreMot'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getapreTol($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT apreTol FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['apreTol'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getapreAct($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT apreAct FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['apreAct'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getimpDiag($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT impDiag FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['impDiag'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getdiag1($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT diag1 FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['diag1'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getdiag2($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT diag2 FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['diag2'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getdiag3($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT diag3 FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['diag3'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getprofesional($idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("SELECT profesional FROM fonoaudiologia WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['profesional'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function setconsulta($consulta,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET consulta=$consulta WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setantPre($antPre,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET antPre=$antPre WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setantPeri($antPeri,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET antPeri=$antPeri WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setantPers($antPers,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET antPers=$antPers WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setalMa($alMa,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET alMa=$alMa WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setalBla($alBla,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET alBla=$alBla WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setalSol($alSol,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET alSol=$alSol WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setalTet($alTet,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET alTet=$alTet WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setalInd($alInd,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET alInd=$alInd WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function settipAli($tipAli,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET tipAli=$tipAli WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setevoBal($evoBal,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET evoBal=$evoBal WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setevoPal($evoPal,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET evoPal=$evoPal WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setevoFra($evoFra,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET evoFra=$evoFra WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setevoPro($evoPro,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET evoPro=$evoPro WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setevoGra($evoGra,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET evoGra=$evoGra WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setevoLec($evoLec,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET evoLec=$evoLec WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setevoPre($evoPre,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET evoPre=$evoPre WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setobs($obs,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET obs=$obs WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setsisFonCom($sisFonCom,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET sisFonCom=$sisFonCom WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setfalFon($falFon,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET falFon=$falFon WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setfalFonCua($falFonCua,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET falFonCua=$falFonCua WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setfalCom($falCom,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET falCom=$falCom WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setfalComCua($falComCua,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET falComCua=$falComCua WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setlabAna($labAna,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET labAna=$labAna WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setlabMov($labMov,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET labMov=$labMov WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setlabTon($labTon,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET labTon=$labTon WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setlabSen($labSen,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET labSen=$labSen WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setlabFun($labFun,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET labFun=$labFun WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setlenAna($lenAna,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET lenAna=$lenAna WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setlenMov($lenMov,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET lenMov=$lenMov WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setlenTon($lenTon,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET lenTon=$lenTon WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setlenSen($lenSen,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET lenSen=$lenSen WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setlenFun($lenFun,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET lenFun=$lenFun WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setmejAna($mejAna,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET mejAna=$mejAna WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setmejMov($mejMov,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET mejMov=$mejMov WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setmejTon($mejTon,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET mejTon=$mejTon WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setmejSen($mejSen,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET mejSen=$mejSen WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setmejFun($mejFun,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET mejFun=$mejFun WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setvelAna($velAna,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET velAna=$velAna WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setvelMov($velMov,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET velMov=$velMov WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setvelTon($velTon,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET velTon=$velTon WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setvelSen($velSen,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET velSen=$velSen WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setvelFun($velFun,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET velFun=$velFun WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setdie($die,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET die=$die WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setpal($pal,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET pal=$pal WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setpraORF($praORF,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET praORF=$praORF WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setresMod($resMod,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET resMod=$resMod WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setresTip($resTip,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET resTip=$resTip WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setresCoo($resCoo,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET resCoo=$resCoo WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setnivSemSem($nivSemSem,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET nivSemSem=$nivSemSem WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setnivSemCua($nivSemCua,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET nivSemCua=$nivSemCua WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setnivSemSec($nivSemSec,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET nivSemSec=$nivSemSec WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setnivSemNom($nivSemNom,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET nivSemNom=$nivSemNom WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setnivSemAgr($nivSemAgr,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET nivSemAgr=$nivSemAgr WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setnivSemAbsVis($nivSemAbsVis,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET nivSemAbsVis=$nivSemAbsVis WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setnivSemAbsAud($nivSemAbsAud,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET nivSemAbsAud=$nivSemAbsAud WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setnivSemAbsGes($nivSemAbsGes,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET nivSemAbsGes=$nivSemAbsGes WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setnivSemDif($nivSemDif,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET nivSemDif=$nivSemDif WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setnivSemSemj($nivSemSemj,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET nivSemSemj=$nivSemSemj WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setnivSemAna($nivSemAna,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET nivSemAna=$nivSemAna WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setnivSemReaDesc($nivSemReaDesc,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET nivSemReaDesc=$nivSemReaDesc WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setnivSemSin($nivSemSin,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET nivSemSin=$nivSemSin WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setnivSemAut($nivSemAut,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET nivSemAut=$nivSemAut WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setnivSemComOrdSim($nivSemComOrdSim,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET nivSemComOrdSim=$nivSemComOrdSim WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setnivSemComOrdCom($nivSemComOrdCom,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET nivSemComOrdCom=$nivSemComOrdCom WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setnivSemComOrdObj($nivSemComOrdObj,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET nivSemComOrdObj=$nivSemComOrdObj WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setnivSemGraCatGra($nivSemGraCatGra,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET nivSemGraCatGra=$nivSemGraCatGra WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setnivSemGraCatGraCua($nivSemGraCatGraCua,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET nivSemGraCatGraCua=$nivSemGraCatGraCua WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setnivSemGraOra($nivSemGraOra,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET nivSemGraOra=$nivSemGraOra WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setnivSemGraPal($nivSemGraPal,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET nivSemGraPal=$nivSemGraPal WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setnivSemGraCoh($nivSemGraCoh,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET nivSemGraCoh=$nivSemGraCoh WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setnivSemGraCoe($nivSemGraCoe,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET nivSemGraCoe=$nivSemGraCoe WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setnivPraInt($nivPraInt,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET nivPraInt=$nivPraInt WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setnivPraPre($nivPraPre,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET nivPraPre=$nivPraPre WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setnivPraRes($nivPraRes,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET nivPraRes=$nivPraRes WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setnivPraExc($nivPraExc,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET nivPraExc=$nivPraExc WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setnivPraNeg($nivPraNeg,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET nivPraNeg=$nivPraNeg WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setnivPraAfi($nivPraAfi,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET nivPraAfi=$nivPraAfi WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setnivPraInf($nivPraInf,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET nivPraInf=$nivPraInf WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setnivPraCon($nivPraCon,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET nivPraCon=$nivPraCon WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setnivPraTur($nivPraTur,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET nivPraTur=$nivPraTur WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setnivPraTop($nivPraTop,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET nivPraTop=$nivPraTop WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setlectoFone($lectoFone,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET lectoFone=$lectoFone WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setlectoSila($lectoSila,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET lectoSila=$lectoSila WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setlectoLect($lectoLect,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET lectoLect=$lectoLect WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setlectoVoz($lectoVoz,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET lectoVoz=$lectoVoz WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setlectoSile($lectoSile,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET lectoSile=$lectoSile WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setlectoComp($lectoComp,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET lectoComp=$lectoComp WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setlectoApoy($lectoApoy,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET lectoApoy=$lectoApoy WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setlectoApoyCual($lectoApoyCual,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET lectoApoyCual=$lectoApoyCual WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setlectoVelo($lectoVelo,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET lectoVelo=$lectoVelo WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setlectoTexLei($lectoTexLei,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET lectoTexLei=$lectoTexLei WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setescAut($escAut,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET escAut=$escAut WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setescAutCom($escAutCom,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET escAutCom=$escAutCom WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setescCop($escCop,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET escCop=$escCop WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setescCopCom($escCopCom,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET escCopCom=$escCopCom WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setescDic($escDic,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET escDic=$escDic WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setescDicCom($escDicCom,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET escDicCom=$escDicCom WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setescEsp($escEsp,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET escEsp=$escEsp WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setescEspCom($escEspCom,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET escEspCom=$escEspCom WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setescCoh($escCoh,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET escCoh=$escCoh WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setescCoe($escCoe,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET escCoe=$escCoe WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setescGra($escGra,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET escGra=$escGra WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setescSil($escSil,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET escSil=$escSil WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setescPal($escPal,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET escPal=$escPal WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setescFra($escFra,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET escFra=$escFra WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setapreCor($apreCor,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET apreCor=$apreCor WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setapreMed($apreMed,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET apreMed=$apreMed WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setapreLar($apreLar,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET apreLar=$apreLar WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setapreAte($apreAte,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET apreAte=$apreAte WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setapreMot($apreMot,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET apreMot=$apreMot WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setapreTol($apreTol,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET apreTol=$apreTol WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setapreAct($apreAct,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET apreAct=$apreAct WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setimpDiag($impDiag,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET impDiag=$impDiag WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setdiag1($diag1,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET diag1=$diag1 WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setdiag2($diag2,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET diag2=$diag2 WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setdiag3($diag3,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET diag3=$diag3 WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setprofesional($profesional,$idFonoAudiologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE fonoaudiologia SET profesional=$profesional WHERE idFonoAudiologia=$idFonoAudiologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function dibujarFormularioIngresofonoaudiologia()
	{
		echo "<form role='form'>";

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>idFonoAudiologia</label>

                                <input type='email' class='form-control' id='idFonoAudiologia' placeholder='idFonoAudiologia'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>consulta</label>

                                <input type='email' class='form-control' id='consulta' placeholder='consulta'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>antPre</label>

                                <input type='email' class='form-control' id='antPre' placeholder='antPre'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>antPeri</label>

                                <input type='email' class='form-control' id='antPeri' placeholder='antPeri'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>antPers</label>

                                <input type='email' class='form-control' id='antPers' placeholder='antPers'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>alMa</label>

                                <input type='email' class='form-control' id='alMa' placeholder='alMa'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>alBla</label>

                                <input type='email' class='form-control' id='alBla' placeholder='alBla'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>alSol</label>

                                <input type='email' class='form-control' id='alSol' placeholder='alSol'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>alTet</label>

                                <input type='email' class='form-control' id='alTet' placeholder='alTet'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>alInd</label>

                                <input type='email' class='form-control' id='alInd' placeholder='alInd'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>tipAli</label>

                                <input type='email' class='form-control' id='tipAli' placeholder='tipAli'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>evoBal</label>

                                <input type='email' class='form-control' id='evoBal' placeholder='evoBal'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>evoPal</label>

                                <input type='email' class='form-control' id='evoPal' placeholder='evoPal'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>evoFra</label>

                                <input type='email' class='form-control' id='evoFra' placeholder='evoFra'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>evoPro</label>

                                <input type='email' class='form-control' id='evoPro' placeholder='evoPro'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>evoGra</label>

                                <input type='email' class='form-control' id='evoGra' placeholder='evoGra'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>evoLec</label>

                                <input type='email' class='form-control' id='evoLec' placeholder='evoLec'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>evoPre</label>

                                <input type='email' class='form-control' id='evoPre' placeholder='evoPre'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>obs</label>

                                <input type='email' class='form-control' id='obs' placeholder='obs'>

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

                                <label for='ejemplo_email_1'>falFonCua</label>

                                <input type='email' class='form-control' id='falFonCua' placeholder='falFonCua'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>falCom</label>

                                <input type='email' class='form-control' id='falCom' placeholder='falCom'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>falComCua</label>

                                <input type='email' class='form-control' id='falComCua' placeholder='falComCua'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>labAna</label>

                                <input type='email' class='form-control' id='labAna' placeholder='labAna'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>labMov</label>

                                <input type='email' class='form-control' id='labMov' placeholder='labMov'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>labTon</label>

                                <input type='email' class='form-control' id='labTon' placeholder='labTon'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>labSen</label>

                                <input type='email' class='form-control' id='labSen' placeholder='labSen'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>labFun</label>

                                <input type='email' class='form-control' id='labFun' placeholder='labFun'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>lenAna</label>

                                <input type='email' class='form-control' id='lenAna' placeholder='lenAna'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>lenMov</label>

                                <input type='email' class='form-control' id='lenMov' placeholder='lenMov'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>lenTon</label>

                                <input type='email' class='form-control' id='lenTon' placeholder='lenTon'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>lenSen</label>

                                <input type='email' class='form-control' id='lenSen' placeholder='lenSen'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>lenFun</label>

                                <input type='email' class='form-control' id='lenFun' placeholder='lenFun'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>mejAna</label>

                                <input type='email' class='form-control' id='mejAna' placeholder='mejAna'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>mejMov</label>

                                <input type='email' class='form-control' id='mejMov' placeholder='mejMov'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>mejTon</label>

                                <input type='email' class='form-control' id='mejTon' placeholder='mejTon'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>mejSen</label>

                                <input type='email' class='form-control' id='mejSen' placeholder='mejSen'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>mejFun</label>

                                <input type='email' class='form-control' id='mejFun' placeholder='mejFun'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>velAna</label>

                                <input type='email' class='form-control' id='velAna' placeholder='velAna'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>velMov</label>

                                <input type='email' class='form-control' id='velMov' placeholder='velMov'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>velTon</label>

                                <input type='email' class='form-control' id='velTon' placeholder='velTon'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>velSen</label>

                                <input type='email' class='form-control' id='velSen' placeholder='velSen'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>velFun</label>

                                <input type='email' class='form-control' id='velFun' placeholder='velFun'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>die</label>

                                <input type='email' class='form-control' id='die' placeholder='die'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>pal</label>

                                <input type='email' class='form-control' id='pal' placeholder='pal'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>praORF</label>

                                <input type='email' class='form-control' id='praORF' placeholder='praORF'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>resMod</label>

                                <input type='email' class='form-control' id='resMod' placeholder='resMod'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>resTip</label>

                                <input type='email' class='form-control' id='resTip' placeholder='resTip'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>resCoo</label>

                                <input type='email' class='form-control' id='resCoo' placeholder='resCoo'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>nivSemSem</label>

                                <input type='email' class='form-control' id='nivSemSem' placeholder='nivSemSem'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>nivSemCua</label>

                                <input type='email' class='form-control' id='nivSemCua' placeholder='nivSemCua'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>nivSemSec</label>

                                <input type='email' class='form-control' id='nivSemSec' placeholder='nivSemSec'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>nivSemNom</label>

                                <input type='email' class='form-control' id='nivSemNom' placeholder='nivSemNom'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>nivSemAgr</label>

                                <input type='email' class='form-control' id='nivSemAgr' placeholder='nivSemAgr'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>nivSemAbsVis</label>

                                <input type='email' class='form-control' id='nivSemAbsVis' placeholder='nivSemAbsVis'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>nivSemAbsAud</label>

                                <input type='email' class='form-control' id='nivSemAbsAud' placeholder='nivSemAbsAud'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>nivSemAbsGes</label>

                                <input type='email' class='form-control' id='nivSemAbsGes' placeholder='nivSemAbsGes'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>nivSemDif</label>

                                <input type='email' class='form-control' id='nivSemDif' placeholder='nivSemDif'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>nivSemSemj</label>

                                <input type='email' class='form-control' id='nivSemSemj' placeholder='nivSemSemj'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>nivSemAna</label>

                                <input type='email' class='form-control' id='nivSemAna' placeholder='nivSemAna'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>nivSemReaDesc</label>

                                <input type='email' class='form-control' id='nivSemReaDesc' placeholder='nivSemReaDesc'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>nivSemSin</label>

                                <input type='email' class='form-control' id='nivSemSin' placeholder='nivSemSin'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>nivSemAut</label>

                                <input type='email' class='form-control' id='nivSemAut' placeholder='nivSemAut'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>nivSemComOrdSim</label>

                                <input type='email' class='form-control' id='nivSemComOrdSim' placeholder='nivSemComOrdSim'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>nivSemComOrdCom</label>

                                <input type='email' class='form-control' id='nivSemComOrdCom' placeholder='nivSemComOrdCom'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>nivSemComOrdObj</label>

                                <input type='email' class='form-control' id='nivSemComOrdObj' placeholder='nivSemComOrdObj'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>nivSemGraCatGra</label>

                                <input type='email' class='form-control' id='nivSemGraCatGra' placeholder='nivSemGraCatGra'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>nivSemGraCatGraCua</label>

                                <input type='email' class='form-control' id='nivSemGraCatGraCua' placeholder='nivSemGraCatGraCua'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>nivSemGraOra</label>

                                <input type='email' class='form-control' id='nivSemGraOra' placeholder='nivSemGraOra'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>nivSemGraPal</label>

                                <input type='email' class='form-control' id='nivSemGraPal' placeholder='nivSemGraPal'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>nivSemGraCoh</label>

                                <input type='email' class='form-control' id='nivSemGraCoh' placeholder='nivSemGraCoh'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>nivSemGraCoe</label>

                                <input type='email' class='form-control' id='nivSemGraCoe' placeholder='nivSemGraCoe'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>nivPraInt</label>

                                <input type='email' class='form-control' id='nivPraInt' placeholder='nivPraInt'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>nivPraPre</label>

                                <input type='email' class='form-control' id='nivPraPre' placeholder='nivPraPre'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>nivPraRes</label>

                                <input type='email' class='form-control' id='nivPraRes' placeholder='nivPraRes'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>nivPraExc</label>

                                <input type='email' class='form-control' id='nivPraExc' placeholder='nivPraExc'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>nivPraNeg</label>

                                <input type='email' class='form-control' id='nivPraNeg' placeholder='nivPraNeg'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>nivPraAfi</label>

                                <input type='email' class='form-control' id='nivPraAfi' placeholder='nivPraAfi'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>nivPraInf</label>

                                <input type='email' class='form-control' id='nivPraInf' placeholder='nivPraInf'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>nivPraCon</label>

                                <input type='email' class='form-control' id='nivPraCon' placeholder='nivPraCon'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>nivPraTur</label>

                                <input type='email' class='form-control' id='nivPraTur' placeholder='nivPraTur'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>nivPraTop</label>

                                <input type='email' class='form-control' id='nivPraTop' placeholder='nivPraTop'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>lectoFone</label>

                                <input type='email' class='form-control' id='lectoFone' placeholder='lectoFone'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>lectoSila</label>

                                <input type='email' class='form-control' id='lectoSila' placeholder='lectoSila'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>lectoLect</label>

                                <input type='email' class='form-control' id='lectoLect' placeholder='lectoLect'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>lectoVoz</label>

                                <input type='email' class='form-control' id='lectoVoz' placeholder='lectoVoz'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>lectoSile</label>

                                <input type='email' class='form-control' id='lectoSile' placeholder='lectoSile'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>lectoComp</label>

                                <input type='email' class='form-control' id='lectoComp' placeholder='lectoComp'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>lectoApoy</label>

                                <input type='email' class='form-control' id='lectoApoy' placeholder='lectoApoy'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>lectoApoyCual</label>

                                <input type='email' class='form-control' id='lectoApoyCual' placeholder='lectoApoyCual'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>lectoVelo</label>

                                <input type='email' class='form-control' id='lectoVelo' placeholder='lectoVelo'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>lectoTexLei</label>

                                <input type='email' class='form-control' id='lectoTexLei' placeholder='lectoTexLei'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>escAut</label>

                                <input type='email' class='form-control' id='escAut' placeholder='escAut'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>escAutCom</label>

                                <input type='email' class='form-control' id='escAutCom' placeholder='escAutCom'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>escCop</label>

                                <input type='email' class='form-control' id='escCop' placeholder='escCop'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>escCopCom</label>

                                <input type='email' class='form-control' id='escCopCom' placeholder='escCopCom'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>escDic</label>

                                <input type='email' class='form-control' id='escDic' placeholder='escDic'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>escDicCom</label>

                                <input type='email' class='form-control' id='escDicCom' placeholder='escDicCom'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>escEsp</label>

                                <input type='email' class='form-control' id='escEsp' placeholder='escEsp'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>escEspCom</label>

                                <input type='email' class='form-control' id='escEspCom' placeholder='escEspCom'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>escCoh</label>

                                <input type='email' class='form-control' id='escCoh' placeholder='escCoh'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>escCoe</label>

                                <input type='email' class='form-control' id='escCoe' placeholder='escCoe'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>escGra</label>

                                <input type='email' class='form-control' id='escGra' placeholder='escGra'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>escSil</label>

                                <input type='email' class='form-control' id='escSil' placeholder='escSil'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>escPal</label>

                                <input type='email' class='form-control' id='escPal' placeholder='escPal'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>escFra</label>

                                <input type='email' class='form-control' id='escFra' placeholder='escFra'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>apreCor</label>

                                <input type='email' class='form-control' id='apreCor' placeholder='apreCor'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>apreMed</label>

                                <input type='email' class='form-control' id='apreMed' placeholder='apreMed'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>apreLar</label>

                                <input type='email' class='form-control' id='apreLar' placeholder='apreLar'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>apreAte</label>

                                <input type='email' class='form-control' id='apreAte' placeholder='apreAte'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>apreMot</label>

                                <input type='email' class='form-control' id='apreMot' placeholder='apreMot'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>apreTol</label>

                                <input type='email' class='form-control' id='apreTol' placeholder='apreTol'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>apreAct</label>

                                <input type='email' class='form-control' id='apreAct' placeholder='apreAct'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>impDiag</label>

                                <input type='email' class='form-control' id='impDiag' placeholder='impDiag'>

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

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>profesional</label>

                                <input type='email' class='form-control' id='profesional' placeholder='profesional'>

                            </div>";

                

                echo "<button type='submit' class='btn btn-default' onclick='ingresarNuevofonoaudiologia();return false;'>Ingresar</button>";

           echo "</form>";
	}

	function consultarTodosfonoaudiologia()
	{
		$bd=BD::getInstance();
		if($result=$bd->extraerDatos("SELECT * FROM fonoaudiologia"))
		{
			echo "<div class='panel panel-default'><div class='panel-heading'>Nombre de la Tabla</div> <table class='table'><thead><tr><th>idFonoAudiologia</th><th>consulta</th><th>antPre</th><th>antPeri</th><th>antPers</th><th>alMa</th><th>alBla</th><th>alSol</th><th>alTet</th><th>alInd</th><th>tipAli</th><th>evoBal</th><th>evoPal</th><th>evoFra</th><th>evoPro</th><th>evoGra</th><th>evoLec</th><th>evoPre</th><th>obs</th><th>sisFonCom</th><th>falFon</th><th>falFonCua</th><th>falCom</th><th>falComCua</th><th>labAna</th><th>labMov</th><th>labTon</th><th>labSen</th><th>labFun</th><th>lenAna</th><th>lenMov</th><th>lenTon</th><th>lenSen</th><th>lenFun</th><th>mejAna</th><th>mejMov</th><th>mejTon</th><th>mejSen</th><th>mejFun</th><th>velAna</th><th>velMov</th><th>velTon</th><th>velSen</th><th>velFun</th><th>die</th><th>pal</th><th>praORF</th><th>resMod</th><th>resTip</th><th>resCoo</th><th>nivSemSem</th><th>nivSemCua</th><th>nivSemSec</th><th>nivSemNom</th><th>nivSemAgr</th><th>nivSemAbsVis</th><th>nivSemAbsAud</th><th>nivSemAbsGes</th><th>nivSemDif</th><th>nivSemSemj</th><th>nivSemAna</th><th>nivSemReaDesc</th><th>nivSemSin</th><th>nivSemAut</th><th>nivSemComOrdSim</th><th>nivSemComOrdCom</th><th>nivSemComOrdObj</th><th>nivSemGraCatGra</th><th>nivSemGraCatGraCua</th><th>nivSemGraOra</th><th>nivSemGraPal</th><th>nivSemGraCoh</th><th>nivSemGraCoe</th><th>nivPraInt</th><th>nivPraPre</th><th>nivPraRes</th><th>nivPraExc</th><th>nivPraNeg</th><th>nivPraAfi</th><th>nivPraInf</th><th>nivPraCon</th><th>nivPraTur</th><th>nivPraTop</th><th>lectoFone</th><th>lectoSila</th><th>lectoLect</th><th>lectoVoz</th><th>lectoSile</th><th>lectoComp</th><th>lectoApoy</th><th>lectoApoyCual</th><th>lectoVelo</th><th>lectoTexLei</th><th>escAut</th><th>escAutCom</th><th>escCop</th><th>escCopCom</th><th>escDic</th><th>escDicCom</th><th>escEsp</th><th>escEspCom</th><th>escCoh</th><th>escCoe</th><th>escGra</th><th>escSil</th><th>escPal</th><th>escFra</th><th>apreCor</th><th>apreMed</th><th>apreLar</th><th>apreAte</th><th>apreMot</th><th>apreTol</th><th>apreAct</th><th>impDiag</th><th>diag1</th><th>diag2</th><th>diag3</th><th>profesional</th><th>Accion</th></tr></thead><tbody>";

        
			while($filas = mysql_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>".$filas['idFonoAudiologia']."</td>";
				echo "<td>".$filas['consulta']."</td>";
				echo "<td>".$filas['antPre']."</td>";
				echo "<td>".$filas['antPeri']."</td>";
				echo "<td>".$filas['antPers']."</td>";
				echo "<td>".$filas['alMa']."</td>";
				echo "<td>".$filas['alBla']."</td>";
				echo "<td>".$filas['alSol']."</td>";
				echo "<td>".$filas['alTet']."</td>";
				echo "<td>".$filas['alInd']."</td>";
				echo "<td>".$filas['tipAli']."</td>";
				echo "<td>".$filas['evoBal']."</td>";
				echo "<td>".$filas['evoPal']."</td>";
				echo "<td>".$filas['evoFra']."</td>";
				echo "<td>".$filas['evoPro']."</td>";
				echo "<td>".$filas['evoGra']."</td>";
				echo "<td>".$filas['evoLec']."</td>";
				echo "<td>".$filas['evoPre']."</td>";
				echo "<td>".$filas['obs']."</td>";
				echo "<td>".$filas['sisFonCom']."</td>";
				echo "<td>".$filas['falFon']."</td>";
				echo "<td>".$filas['falFonCua']."</td>";
				echo "<td>".$filas['falCom']."</td>";
				echo "<td>".$filas['falComCua']."</td>";
				echo "<td>".$filas['labAna']."</td>";
				echo "<td>".$filas['labMov']."</td>";
				echo "<td>".$filas['labTon']."</td>";
				echo "<td>".$filas['labSen']."</td>";
				echo "<td>".$filas['labFun']."</td>";
				echo "<td>".$filas['lenAna']."</td>";
				echo "<td>".$filas['lenMov']."</td>";
				echo "<td>".$filas['lenTon']."</td>";
				echo "<td>".$filas['lenSen']."</td>";
				echo "<td>".$filas['lenFun']."</td>";
				echo "<td>".$filas['mejAna']."</td>";
				echo "<td>".$filas['mejMov']."</td>";
				echo "<td>".$filas['mejTon']."</td>";
				echo "<td>".$filas['mejSen']."</td>";
				echo "<td>".$filas['mejFun']."</td>";
				echo "<td>".$filas['velAna']."</td>";
				echo "<td>".$filas['velMov']."</td>";
				echo "<td>".$filas['velTon']."</td>";
				echo "<td>".$filas['velSen']."</td>";
				echo "<td>".$filas['velFun']."</td>";
				echo "<td>".$filas['die']."</td>";
				echo "<td>".$filas['pal']."</td>";
				echo "<td>".$filas['praORF']."</td>";
				echo "<td>".$filas['resMod']."</td>";
				echo "<td>".$filas['resTip']."</td>";
				echo "<td>".$filas['resCoo']."</td>";
				echo "<td>".$filas['nivSemSem']."</td>";
				echo "<td>".$filas['nivSemCua']."</td>";
				echo "<td>".$filas['nivSemSec']."</td>";
				echo "<td>".$filas['nivSemNom']."</td>";
				echo "<td>".$filas['nivSemAgr']."</td>";
				echo "<td>".$filas['nivSemAbsVis']."</td>";
				echo "<td>".$filas['nivSemAbsAud']."</td>";
				echo "<td>".$filas['nivSemAbsGes']."</td>";
				echo "<td>".$filas['nivSemDif']."</td>";
				echo "<td>".$filas['nivSemSemj']."</td>";
				echo "<td>".$filas['nivSemAna']."</td>";
				echo "<td>".$filas['nivSemReaDesc']."</td>";
				echo "<td>".$filas['nivSemSin']."</td>";
				echo "<td>".$filas['nivSemAut']."</td>";
				echo "<td>".$filas['nivSemComOrdSim']."</td>";
				echo "<td>".$filas['nivSemComOrdCom']."</td>";
				echo "<td>".$filas['nivSemComOrdObj']."</td>";
				echo "<td>".$filas['nivSemGraCatGra']."</td>";
				echo "<td>".$filas['nivSemGraCatGraCua']."</td>";
				echo "<td>".$filas['nivSemGraOra']."</td>";
				echo "<td>".$filas['nivSemGraPal']."</td>";
				echo "<td>".$filas['nivSemGraCoh']."</td>";
				echo "<td>".$filas['nivSemGraCoe']."</td>";
				echo "<td>".$filas['nivPraInt']."</td>";
				echo "<td>".$filas['nivPraPre']."</td>";
				echo "<td>".$filas['nivPraRes']."</td>";
				echo "<td>".$filas['nivPraExc']."</td>";
				echo "<td>".$filas['nivPraNeg']."</td>";
				echo "<td>".$filas['nivPraAfi']."</td>";
				echo "<td>".$filas['nivPraInf']."</td>";
				echo "<td>".$filas['nivPraCon']."</td>";
				echo "<td>".$filas['nivPraTur']."</td>";
				echo "<td>".$filas['nivPraTop']."</td>";
				echo "<td>".$filas['lectoFone']."</td>";
				echo "<td>".$filas['lectoSila']."</td>";
				echo "<td>".$filas['lectoLect']."</td>";
				echo "<td>".$filas['lectoVoz']."</td>";
				echo "<td>".$filas['lectoSile']."</td>";
				echo "<td>".$filas['lectoComp']."</td>";
				echo "<td>".$filas['lectoApoy']."</td>";
				echo "<td>".$filas['lectoApoyCual']."</td>";
				echo "<td>".$filas['lectoVelo']."</td>";
				echo "<td>".$filas['lectoTexLei']."</td>";
				echo "<td>".$filas['escAut']."</td>";
				echo "<td>".$filas['escAutCom']."</td>";
				echo "<td>".$filas['escCop']."</td>";
				echo "<td>".$filas['escCopCom']."</td>";
				echo "<td>".$filas['escDic']."</td>";
				echo "<td>".$filas['escDicCom']."</td>";
				echo "<td>".$filas['escEsp']."</td>";
				echo "<td>".$filas['escEspCom']."</td>";
				echo "<td>".$filas['escCoh']."</td>";
				echo "<td>".$filas['escCoe']."</td>";
				echo "<td>".$filas['escGra']."</td>";
				echo "<td>".$filas['escSil']."</td>";
				echo "<td>".$filas['escPal']."</td>";
				echo "<td>".$filas['escFra']."</td>";
				echo "<td>".$filas['apreCor']."</td>";
				echo "<td>".$filas['apreMed']."</td>";
				echo "<td>".$filas['apreLar']."</td>";
				echo "<td>".$filas['apreAte']."</td>";
				echo "<td>".$filas['apreMot']."</td>";
				echo "<td>".$filas['apreTol']."</td>";
				echo "<td>".$filas['apreAct']."</td>";
				echo "<td>".$filas['impDiag']."</td>";
				echo "<td>".$filas['diag1']."</td>";
				echo "<td>".$filas['diag2']."</td>";
				echo "<td>".$filas['diag3']."</td>";
				echo "<td>".$filas['profesional']."</td>";
				echo "<td><p>

        <a href='#' class='btn btn-primary' role='button' onclick='dibujarFormularioModificarfonoaudiologia(".$filas['idFonoAudiologia'].");return false;'>Editar</a>

        <a href='#' class='btn btn-primary' role='button' onclick='eliminarfonoaudiologia(".$filas['idFonoAudiologia'].");return false;'>Eliminar</a>

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

	function dibujarFormularioModificarfonoaudiologia($id)
	{
		$bd=BD::getInstance();
		$result=$bd->extraerDatos("SELECT * FROM fonoaudiologia WHERE idFonoAudiologia=".$id);
		$filas = mysql_fetch_array($result);
		echo "<form role='form'>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>idFonoAudiologia</label>

                            <input class='form-control' type='hidden' id='idFonoAudiologia' value='".$filas["idFonoAudiologia"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>consulta</label>

                            <input type='email' class='form-control' id='consulta' value='".$filas["consulta"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>antPre</label>

                            <input type='email' class='form-control' id='antPre' value='".$filas["antPre"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>antPeri</label>

                            <input type='email' class='form-control' id='antPeri' value='".$filas["antPeri"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>antPers</label>

                            <input type='email' class='form-control' id='antPers' value='".$filas["antPers"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>alMa</label>

                            <input type='email' class='form-control' id='alMa' value='".$filas["alMa"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>alBla</label>

                            <input type='email' class='form-control' id='alBla' value='".$filas["alBla"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>alSol</label>

                            <input type='email' class='form-control' id='alSol' value='".$filas["alSol"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>alTet</label>

                            <input type='email' class='form-control' id='alTet' value='".$filas["alTet"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>alInd</label>

                            <input type='email' class='form-control' id='alInd' value='".$filas["alInd"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>tipAli</label>

                            <input type='email' class='form-control' id='tipAli' value='".$filas["tipAli"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>evoBal</label>

                            <input type='email' class='form-control' id='evoBal' value='".$filas["evoBal"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>evoPal</label>

                            <input type='email' class='form-control' id='evoPal' value='".$filas["evoPal"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>evoFra</label>

                            <input type='email' class='form-control' id='evoFra' value='".$filas["evoFra"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>evoPro</label>

                            <input type='email' class='form-control' id='evoPro' value='".$filas["evoPro"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>evoGra</label>

                            <input type='email' class='form-control' id='evoGra' value='".$filas["evoGra"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>evoLec</label>

                            <input type='email' class='form-control' id='evoLec' value='".$filas["evoLec"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>evoPre</label>

                            <input type='email' class='form-control' id='evoPre' value='".$filas["evoPre"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>obs</label>

                            <input type='email' class='form-control' id='obs' value='".$filas["obs"]."'>

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

                            <label for='ejemplo_email_1'>falFonCua</label>

                            <input type='email' class='form-control' id='falFonCua' value='".$filas["falFonCua"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>falCom</label>

                            <input type='email' class='form-control' id='falCom' value='".$filas["falCom"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>falComCua</label>

                            <input type='email' class='form-control' id='falComCua' value='".$filas["falComCua"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>labAna</label>

                            <input type='email' class='form-control' id='labAna' value='".$filas["labAna"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>labMov</label>

                            <input type='email' class='form-control' id='labMov' value='".$filas["labMov"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>labTon</label>

                            <input type='email' class='form-control' id='labTon' value='".$filas["labTon"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>labSen</label>

                            <input type='email' class='form-control' id='labSen' value='".$filas["labSen"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>labFun</label>

                            <input type='email' class='form-control' id='labFun' value='".$filas["labFun"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>lenAna</label>

                            <input type='email' class='form-control' id='lenAna' value='".$filas["lenAna"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>lenMov</label>

                            <input type='email' class='form-control' id='lenMov' value='".$filas["lenMov"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>lenTon</label>

                            <input type='email' class='form-control' id='lenTon' value='".$filas["lenTon"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>lenSen</label>

                            <input type='email' class='form-control' id='lenSen' value='".$filas["lenSen"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>lenFun</label>

                            <input type='email' class='form-control' id='lenFun' value='".$filas["lenFun"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>mejAna</label>

                            <input type='email' class='form-control' id='mejAna' value='".$filas["mejAna"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>mejMov</label>

                            <input type='email' class='form-control' id='mejMov' value='".$filas["mejMov"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>mejTon</label>

                            <input type='email' class='form-control' id='mejTon' value='".$filas["mejTon"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>mejSen</label>

                            <input type='email' class='form-control' id='mejSen' value='".$filas["mejSen"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>mejFun</label>

                            <input type='email' class='form-control' id='mejFun' value='".$filas["mejFun"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>velAna</label>

                            <input type='email' class='form-control' id='velAna' value='".$filas["velAna"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>velMov</label>

                            <input type='email' class='form-control' id='velMov' value='".$filas["velMov"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>velTon</label>

                            <input type='email' class='form-control' id='velTon' value='".$filas["velTon"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>velSen</label>

                            <input type='email' class='form-control' id='velSen' value='".$filas["velSen"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>velFun</label>

                            <input type='email' class='form-control' id='velFun' value='".$filas["velFun"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>die</label>

                            <input type='email' class='form-control' id='die' value='".$filas["die"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>pal</label>

                            <input type='email' class='form-control' id='pal' value='".$filas["pal"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>praORF</label>

                            <input type='email' class='form-control' id='praORF' value='".$filas["praORF"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>resMod</label>

                            <input type='email' class='form-control' id='resMod' value='".$filas["resMod"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>resTip</label>

                            <input type='email' class='form-control' id='resTip' value='".$filas["resTip"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>resCoo</label>

                            <input type='email' class='form-control' id='resCoo' value='".$filas["resCoo"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>nivSemSem</label>

                            <input type='email' class='form-control' id='nivSemSem' value='".$filas["nivSemSem"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>nivSemCua</label>

                            <input type='email' class='form-control' id='nivSemCua' value='".$filas["nivSemCua"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>nivSemSec</label>

                            <input type='email' class='form-control' id='nivSemSec' value='".$filas["nivSemSec"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>nivSemNom</label>

                            <input type='email' class='form-control' id='nivSemNom' value='".$filas["nivSemNom"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>nivSemAgr</label>

                            <input type='email' class='form-control' id='nivSemAgr' value='".$filas["nivSemAgr"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>nivSemAbsVis</label>

                            <input type='email' class='form-control' id='nivSemAbsVis' value='".$filas["nivSemAbsVis"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>nivSemAbsAud</label>

                            <input type='email' class='form-control' id='nivSemAbsAud' value='".$filas["nivSemAbsAud"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>nivSemAbsGes</label>

                            <input type='email' class='form-control' id='nivSemAbsGes' value='".$filas["nivSemAbsGes"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>nivSemDif</label>

                            <input type='email' class='form-control' id='nivSemDif' value='".$filas["nivSemDif"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>nivSemSemj</label>

                            <input type='email' class='form-control' id='nivSemSemj' value='".$filas["nivSemSemj"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>nivSemAna</label>

                            <input type='email' class='form-control' id='nivSemAna' value='".$filas["nivSemAna"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>nivSemReaDesc</label>

                            <input type='email' class='form-control' id='nivSemReaDesc' value='".$filas["nivSemReaDesc"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>nivSemSin</label>

                            <input type='email' class='form-control' id='nivSemSin' value='".$filas["nivSemSin"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>nivSemAut</label>

                            <input type='email' class='form-control' id='nivSemAut' value='".$filas["nivSemAut"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>nivSemComOrdSim</label>

                            <input type='email' class='form-control' id='nivSemComOrdSim' value='".$filas["nivSemComOrdSim"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>nivSemComOrdCom</label>

                            <input type='email' class='form-control' id='nivSemComOrdCom' value='".$filas["nivSemComOrdCom"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>nivSemComOrdObj</label>

                            <input type='email' class='form-control' id='nivSemComOrdObj' value='".$filas["nivSemComOrdObj"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>nivSemGraCatGra</label>

                            <input type='email' class='form-control' id='nivSemGraCatGra' value='".$filas["nivSemGraCatGra"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>nivSemGraCatGraCua</label>

                            <input type='email' class='form-control' id='nivSemGraCatGraCua' value='".$filas["nivSemGraCatGraCua"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>nivSemGraOra</label>

                            <input type='email' class='form-control' id='nivSemGraOra' value='".$filas["nivSemGraOra"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>nivSemGraPal</label>

                            <input type='email' class='form-control' id='nivSemGraPal' value='".$filas["nivSemGraPal"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>nivSemGraCoh</label>

                            <input type='email' class='form-control' id='nivSemGraCoh' value='".$filas["nivSemGraCoh"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>nivSemGraCoe</label>

                            <input type='email' class='form-control' id='nivSemGraCoe' value='".$filas["nivSemGraCoe"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>nivPraInt</label>

                            <input type='email' class='form-control' id='nivPraInt' value='".$filas["nivPraInt"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>nivPraPre</label>

                            <input type='email' class='form-control' id='nivPraPre' value='".$filas["nivPraPre"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>nivPraRes</label>

                            <input type='email' class='form-control' id='nivPraRes' value='".$filas["nivPraRes"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>nivPraExc</label>

                            <input type='email' class='form-control' id='nivPraExc' value='".$filas["nivPraExc"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>nivPraNeg</label>

                            <input type='email' class='form-control' id='nivPraNeg' value='".$filas["nivPraNeg"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>nivPraAfi</label>

                            <input type='email' class='form-control' id='nivPraAfi' value='".$filas["nivPraAfi"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>nivPraInf</label>

                            <input type='email' class='form-control' id='nivPraInf' value='".$filas["nivPraInf"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>nivPraCon</label>

                            <input type='email' class='form-control' id='nivPraCon' value='".$filas["nivPraCon"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>nivPraTur</label>

                            <input type='email' class='form-control' id='nivPraTur' value='".$filas["nivPraTur"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>nivPraTop</label>

                            <input type='email' class='form-control' id='nivPraTop' value='".$filas["nivPraTop"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>lectoFone</label>

                            <input type='email' class='form-control' id='lectoFone' value='".$filas["lectoFone"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>lectoSila</label>

                            <input type='email' class='form-control' id='lectoSila' value='".$filas["lectoSila"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>lectoLect</label>

                            <input type='email' class='form-control' id='lectoLect' value='".$filas["lectoLect"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>lectoVoz</label>

                            <input type='email' class='form-control' id='lectoVoz' value='".$filas["lectoVoz"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>lectoSile</label>

                            <input type='email' class='form-control' id='lectoSile' value='".$filas["lectoSile"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>lectoComp</label>

                            <input type='email' class='form-control' id='lectoComp' value='".$filas["lectoComp"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>lectoApoy</label>

                            <input type='email' class='form-control' id='lectoApoy' value='".$filas["lectoApoy"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>lectoApoyCual</label>

                            <input type='email' class='form-control' id='lectoApoyCual' value='".$filas["lectoApoyCual"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>lectoVelo</label>

                            <input type='email' class='form-control' id='lectoVelo' value='".$filas["lectoVelo"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>lectoTexLei</label>

                            <input type='email' class='form-control' id='lectoTexLei' value='".$filas["lectoTexLei"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>escAut</label>

                            <input type='email' class='form-control' id='escAut' value='".$filas["escAut"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>escAutCom</label>

                            <input type='email' class='form-control' id='escAutCom' value='".$filas["escAutCom"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>escCop</label>

                            <input type='email' class='form-control' id='escCop' value='".$filas["escCop"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>escCopCom</label>

                            <input type='email' class='form-control' id='escCopCom' value='".$filas["escCopCom"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>escDic</label>

                            <input type='email' class='form-control' id='escDic' value='".$filas["escDic"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>escDicCom</label>

                            <input type='email' class='form-control' id='escDicCom' value='".$filas["escDicCom"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>escEsp</label>

                            <input type='email' class='form-control' id='escEsp' value='".$filas["escEsp"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>escEspCom</label>

                            <input type='email' class='form-control' id='escEspCom' value='".$filas["escEspCom"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>escCoh</label>

                            <input type='email' class='form-control' id='escCoh' value='".$filas["escCoh"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>escCoe</label>

                            <input type='email' class='form-control' id='escCoe' value='".$filas["escCoe"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>escGra</label>

                            <input type='email' class='form-control' id='escGra' value='".$filas["escGra"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>escSil</label>

                            <input type='email' class='form-control' id='escSil' value='".$filas["escSil"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>escPal</label>

                            <input type='email' class='form-control' id='escPal' value='".$filas["escPal"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>escFra</label>

                            <input type='email' class='form-control' id='escFra' value='".$filas["escFra"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>apreCor</label>

                            <input type='email' class='form-control' id='apreCor' value='".$filas["apreCor"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>apreMed</label>

                            <input type='email' class='form-control' id='apreMed' value='".$filas["apreMed"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>apreLar</label>

                            <input type='email' class='form-control' id='apreLar' value='".$filas["apreLar"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>apreAte</label>

                            <input type='email' class='form-control' id='apreAte' value='".$filas["apreAte"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>apreMot</label>

                            <input type='email' class='form-control' id='apreMot' value='".$filas["apreMot"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>apreTol</label>

                            <input type='email' class='form-control' id='apreTol' value='".$filas["apreTol"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>apreAct</label>

                            <input type='email' class='form-control' id='apreAct' value='".$filas["apreAct"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>impDiag</label>

                            <input type='email' class='form-control' id='impDiag' value='".$filas["impDiag"]."'>

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

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>profesional</label>

                            <input type='email' class='form-control' id='profesional' value='".$filas["profesional"]."'>

                        </div>";

                echo "<button type='submit' class='btn btn-default' type='submit' onclick='modificarfonoaudiologia($id);return false;'>Modificar</button></form>";

           
	}
}
?>