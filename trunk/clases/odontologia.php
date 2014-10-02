<?php
include ('../bd/bd.php');
class odontologia
{
	function insertarDatos($idOdontologia,$consulta,$motCon,$enfermedad,$pulso,$preArt,$freRes,$freCar,$ttoMedAct,$tomMed,$alergia,$cardiopatia,$altP/A,$diabetes,$hepatitis,$disSan,$enfRen,$inmuno,$traEnd,$patResp,$traGas,$epilepsia,$cirugias,$protesis,$observaciones,$labSup,$labInf,$comisuras,$mucOral,$paladar,$lengua,$pisBoca,$rebAlv,$frenillos,$glaSal,$dolMus,$dolArt,$ruiArt,$alteracion,$despalzamiento,$observaciones2,$forma,$tamano,$numero,$movTejDen,$inflamacion,$bolsa,$recesiones,$movExaPul,$perExaPul,$senExaPul,$fisExaPul,$dieTraExaPul,$habOra,$observaciones3,$diagOral,$plaTra,$profesional2,$oASI8,$oASI7,$oASI6,$oASI5,$oASI4,$oASI3,$oASI2,$oASI1,$oAII8,$oAII7,$oAII6,$oAII5,$oAII4,$oAII3,$oAII2,$oAII1,$oADS8,$oADS7,$oADS6,$oADS5,$oADS4,$oADS3,$oADS2,$oADS1,$oADI8,$oADI7,$oADI6,$oADI5,$oADI4,$oADI3,$oADI2,$oADI1,$oIIS8,$oIIS7,$oIIS6,$oIIS5,$oIIS4,$oIIS3,$oIIS2,$oIIS1,$oIII8,$oIII7,$oIII6,$oIII5,$oIII4,$oIII3,$oIII2,$oIII1,$oIDS8,$oIDS7,$oIDS6,$oIDS5,$oIDS4,$oIDS3,$oIDS2,$oIDS1,$oIDI8,$oIDI7,$oIDI6,$oIDI5,$oIDI4,$oIDI3,$oIDI2,$oIDI1,$profesional)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("INSERT INTO odontologia(idOdontologia,consulta,motCon,enfermedad,pulso,preArt,freRes,freCar,ttoMedAct,tomMed,alergia,cardiopatia,altP/A,diabetes,hepatitis,disSan,enfRen,inmuno,traEnd,patResp,traGas,epilepsia,cirugias,protesis,observaciones,labSup,labInf,comisuras,mucOral,paladar,lengua,pisBoca,rebAlv,frenillos,glaSal,dolMus,dolArt,ruiArt,alteracion,despalzamiento,observaciones2,forma,tamano,numero,movTejDen,inflamacion,bolsa,recesiones,movExaPul,perExaPul,senExaPul,fisExaPul,dieTraExaPul,habOra,observaciones3,diagOral,plaTra,profesional2,oASI8,oASI7,oASI6,oASI5,oASI4,oASI3,oASI2,oASI1,oAII8,oAII7,oAII6,oAII5,oAII4,oAII3,oAII2,oAII1,oADS8,oADS7,oADS6,oADS5,oADS4,oADS3,oADS2,oADS1,oADI8,oADI7,oADI6,oADI5,oADI4,oADI3,oADI2,oADI1,oIIS8,oIIS7,oIIS6,oIIS5,oIIS4,oIIS3,oIIS2,oIIS1,oIII8,oIII7,oIII6,oIII5,oIII4,oIII3,oIII2,oIII1,oIDS8,oIDS7,oIDS6,oIDS5,oIDS4,oIDS3,oIDS2,oIDS1,oIDI8,oIDI7,oIDI6,oIDI5,oIDI4,oIDI3,oIDI2,oIDI1,profesional) VALUES ($idOdontologia,'$consulta','$motCon','$enfermedad','$pulso','$preArt','$freRes','$freCar','$ttoMedAct','$tomMed','$alergia','$cardiopatia','$altP/A','$diabetes','$hepatitis','$disSan','$enfRen','$inmuno','$traEnd','$patResp','$traGas','$epilepsia','$cirugias','$protesis','$observaciones','$labSup','$labInf','$comisuras','$mucOral','$paladar','$lengua','$pisBoca','$rebAlv','$frenillos','$glaSal','$dolMus','$dolArt','$ruiArt','$alteracion','$despalzamiento','$observaciones2','$forma','$tamano','$numero','$movTejDen','$inflamacion','$bolsa','$recesiones','$movExaPul','$perExaPul','$senExaPul','$fisExaPul','$dieTraExaPul','$habOra','$observaciones3','$diagOral','$plaTra','$profesional2','$oASI8','$oASI7','$oASI6','$oASI5','$oASI4','$oASI3','$oASI2','$oASI1','$oAII8','$oAII7','$oAII6','$oAII5','$oAII4','$oAII3','$oAII2','$oAII1','$oADS8','$oADS7','$oADS6','$oADS5','$oADS4','$oADS3','$oADS2','$oADS1','$oADI8','$oADI7','$oADI6','$oADI5','$oADI4','$oADI3','$oADI2','$oADI1','$oIIS8','$oIIS7','$oIIS6','$oIIS5','$oIIS4','$oIIS3','$oIIS2','$oIIS1','$oIII8','$oIII7','$oIII6','$oIII5','$oIII4','$oIII3','$oIII2','$oIII1','$oIDS8','$oIDS7','$oIDS6','$oIDS5','$oIDS4','$oIDS3','$oIDS2','$oIDS1','$oIDI8','$oIDI7','$oIDI6','$oIDI5','$oIDI4','$oIDI3','$oIDI2','$oIDI1','$profesional')"))
		{
			echo "Registro de datos exitoso";
		}
		else
		{
			echo "No se pudo hacer el registro de datos";
		}
	}

	function consultarDatos($idOdontologia)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("SELECT * FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			echo "Consulta de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la consulta de datos";
		}
	}

	function eliminarDatos($idOdontologia)
	{
		$bd=BD::getInstance();
		if($bd->extraerDatos("DELETE FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			echo "Eliminación exitosa";
		}
		else
		{
			echo "No se pudo realizar la eliminación de datos";
		}
	}

	function actualizarDatos($idOdontologia,$consulta,$motCon,$enfermedad,$pulso,$preArt,$freRes,$freCar,$ttoMedAct,$tomMed,$alergia,$cardiopatia,$altP/A,$diabetes,$hepatitis,$disSan,$enfRen,$inmuno,$traEnd,$patResp,$traGas,$epilepsia,$cirugias,$protesis,$observaciones,$labSup,$labInf,$comisuras,$mucOral,$paladar,$lengua,$pisBoca,$rebAlv,$frenillos,$glaSal,$dolMus,$dolArt,$ruiArt,$alteracion,$despalzamiento,$observaciones2,$forma,$tamano,$numero,$movTejDen,$inflamacion,$bolsa,$recesiones,$movExaPul,$perExaPul,$senExaPul,$fisExaPul,$dieTraExaPul,$habOra,$observaciones3,$diagOral,$plaTra,$profesional2,$oASI8,$oASI7,$oASI6,$oASI5,$oASI4,$oASI3,$oASI2,$oASI1,$oAII8,$oAII7,$oAII6,$oAII5,$oAII4,$oAII3,$oAII2,$oAII1,$oADS8,$oADS7,$oADS6,$oADS5,$oADS4,$oADS3,$oADS2,$oADS1,$oADI8,$oADI7,$oADI6,$oADI5,$oADI4,$oADI3,$oADI2,$oADI1,$oIIS8,$oIIS7,$oIIS6,$oIIS5,$oIIS4,$oIIS3,$oIIS2,$oIIS1,$oIII8,$oIII7,$oIII6,$oIII5,$oIII4,$oIII3,$oIII2,$oIII1,$oIDS8,$oIDS7,$oIDS6,$oIDS5,$oIDS4,$oIDS3,$oIDS2,$oIDS1,$oIDI8,$oIDI7,$oIDI6,$oIDI5,$oIDI4,$oIDI3,$oIDI2,$oIDI1,$profesional)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("UPDATE odontologia SET consulta='$consulta',motCon='$motCon',enfermedad='$enfermedad',pulso='$pulso',preArt='$preArt',freRes='$freRes',freCar='$freCar',ttoMedAct='$ttoMedAct',tomMed='$tomMed',alergia='$alergia',cardiopatia='$cardiopatia',altP/A='$altP/A',diabetes='$diabetes',hepatitis='$hepatitis',disSan='$disSan',enfRen='$enfRen',inmuno='$inmuno',traEnd='$traEnd',patResp='$patResp',traGas='$traGas',epilepsia='$epilepsia',cirugias='$cirugias',protesis='$protesis',observaciones='$observaciones',labSup='$labSup',labInf='$labInf',comisuras='$comisuras',mucOral='$mucOral',paladar='$paladar',lengua='$lengua',pisBoca='$pisBoca',rebAlv='$rebAlv',frenillos='$frenillos',glaSal='$glaSal',dolMus='$dolMus',dolArt='$dolArt',ruiArt='$ruiArt',alteracion='$alteracion',despalzamiento='$despalzamiento',observaciones2='$observaciones2',forma='$forma',tamano='$tamano',numero='$numero',movTejDen='$movTejDen',inflamacion='$inflamacion',bolsa='$bolsa',recesiones='$recesiones',movExaPul='$movExaPul',perExaPul='$perExaPul',senExaPul='$senExaPul',fisExaPul='$fisExaPul',dieTraExaPul='$dieTraExaPul',habOra='$habOra',observaciones3='$observaciones3',diagOral='$diagOral',plaTra='$plaTra',profesional2='$profesional2',oASI8='$oASI8',oASI7='$oASI7',oASI6='$oASI6',oASI5='$oASI5',oASI4='$oASI4',oASI3='$oASI3',oASI2='$oASI2',oASI1='$oASI1',oAII8='$oAII8',oAII7='$oAII7',oAII6='$oAII6',oAII5='$oAII5',oAII4='$oAII4',oAII3='$oAII3',oAII2='$oAII2',oAII1='$oAII1',oADS8='$oADS8',oADS7='$oADS7',oADS6='$oADS6',oADS5='$oADS5',oADS4='$oADS4',oADS3='$oADS3',oADS2='$oADS2',oADS1='$oADS1',oADI8='$oADI8',oADI7='$oADI7',oADI6='$oADI6',oADI5='$oADI5',oADI4='$oADI4',oADI3='$oADI3',oADI2='$oADI2',oADI1='$oADI1',oIIS8='$oIIS8',oIIS7='$oIIS7',oIIS6='$oIIS6',oIIS5='$oIIS5',oIIS4='$oIIS4',oIIS3='$oIIS3',oIIS2='$oIIS2',oIIS1='$oIIS1',oIII8='$oIII8',oIII7='$oIII7',oIII6='$oIII6',oIII5='$oIII5',oIII4='$oIII4',oIII3='$oIII3',oIII2='$oIII2',oIII1='$oIII1',oIDS8='$oIDS8',oIDS7='$oIDS7',oIDS6='$oIDS6',oIDS5='$oIDS5',oIDS4='$oIDS4',oIDS3='$oIDS3',oIDS2='$oIDS2',oIDS1='$oIDS1',oIDI8='$oIDI8',oIDI7='$oIDI7',oIDI6='$oIDI6',oIDI5='$oIDI5',oIDI4='$oIDI4',oIDI3='$oIDI3',oIDI2='$oIDI2',oIDI1='$oIDI1',profesional='$profesional' WHERE idOdontologia=$idOdontologia"))
		{
			echo "Modificación de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la modificación de datos";
		}
	}

	function getconsulta($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT consulta FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['consulta'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getmotCon($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT motCon FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['motCon'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getenfermedad($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT enfermedad FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['enfermedad'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getpulso($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT pulso FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['pulso'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getpreArt($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT preArt FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['preArt'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getfreRes($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT freRes FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['freRes'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getfreCar($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT freCar FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['freCar'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getttoMedAct($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT ttoMedAct FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['ttoMedAct'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function gettomMed($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT tomMed FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['tomMed'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getalergia($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT alergia FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['alergia'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getcardiopatia($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT cardiopatia FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['cardiopatia'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getaltP/A($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT altP/A FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['altP/A'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getdiabetes($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT diabetes FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['diabetes'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function gethepatitis($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT hepatitis FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['hepatitis'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getdisSan($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT disSan FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['disSan'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getenfRen($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT enfRen FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['enfRen'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getinmuno($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT inmuno FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['inmuno'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function gettraEnd($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT traEnd FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['traEnd'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getpatResp($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT patResp FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['patResp'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function gettraGas($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT traGas FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['traGas'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getepilepsia($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT epilepsia FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['epilepsia'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getcirugias($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT cirugias FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['cirugias'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getprotesis($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT protesis FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['protesis'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getobservaciones($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT observaciones FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['observaciones'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getlabSup($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT labSup FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['labSup'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getlabInf($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT labInf FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['labInf'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getcomisuras($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT comisuras FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['comisuras'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getmucOral($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT mucOral FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['mucOral'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getpaladar($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT paladar FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['paladar'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getlengua($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT lengua FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['lengua'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getpisBoca($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT pisBoca FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['pisBoca'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getrebAlv($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT rebAlv FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['rebAlv'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getfrenillos($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT frenillos FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['frenillos'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getglaSal($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT glaSal FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['glaSal'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getdolMus($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT dolMus FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['dolMus'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getdolArt($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT dolArt FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['dolArt'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getruiArt($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT ruiArt FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['ruiArt'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getalteracion($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT alteracion FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['alteracion'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getdespalzamiento($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT despalzamiento FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['despalzamiento'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getobservaciones2($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT observaciones2 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['observaciones2'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getforma($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT forma FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['forma'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function gettamano($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT tamano FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['tamano'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getnumero($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT numero FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['numero'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getmovTejDen($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT movTejDen FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['movTejDen'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getinflamacion($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT inflamacion FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['inflamacion'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getbolsa($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT bolsa FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['bolsa'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getrecesiones($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT recesiones FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['recesiones'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getmovExaPul($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT movExaPul FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['movExaPul'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getperExaPul($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT perExaPul FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['perExaPul'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getsenExaPul($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT senExaPul FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['senExaPul'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getfisExaPul($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT fisExaPul FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['fisExaPul'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getdieTraExaPul($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT dieTraExaPul FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['dieTraExaPul'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function gethabOra($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT habOra FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['habOra'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getobservaciones3($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT observaciones3 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['observaciones3'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getdiagOral($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT diagOral FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['diagOral'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getplaTra($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT plaTra FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['plaTra'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getprofesional2($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT profesional2 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['profesional2'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoASI8($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oASI8 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oASI8'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoASI7($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oASI7 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oASI7'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoASI6($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oASI6 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oASI6'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoASI5($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oASI5 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oASI5'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoASI4($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oASI4 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oASI4'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoASI3($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oASI3 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oASI3'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoASI2($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oASI2 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oASI2'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoASI1($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oASI1 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oASI1'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoAII8($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oAII8 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oAII8'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoAII7($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oAII7 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oAII7'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoAII6($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oAII6 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oAII6'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoAII5($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oAII5 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oAII5'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoAII4($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oAII4 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oAII4'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoAII3($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oAII3 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oAII3'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoAII2($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oAII2 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oAII2'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoAII1($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oAII1 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oAII1'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoADS8($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oADS8 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oADS8'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoADS7($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oADS7 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oADS7'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoADS6($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oADS6 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oADS6'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoADS5($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oADS5 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oADS5'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoADS4($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oADS4 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oADS4'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoADS3($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oADS3 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oADS3'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoADS2($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oADS2 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oADS2'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoADS1($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oADS1 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oADS1'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoADI8($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oADI8 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oADI8'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoADI7($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oADI7 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oADI7'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoADI6($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oADI6 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oADI6'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoADI5($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oADI5 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oADI5'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoADI4($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oADI4 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oADI4'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoADI3($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oADI3 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oADI3'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoADI2($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oADI2 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oADI2'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoADI1($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oADI1 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oADI1'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoIIS8($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oIIS8 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oIIS8'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoIIS7($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oIIS7 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oIIS7'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoIIS6($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oIIS6 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oIIS6'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoIIS5($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oIIS5 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oIIS5'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoIIS4($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oIIS4 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oIIS4'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoIIS3($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oIIS3 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oIIS3'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoIIS2($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oIIS2 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oIIS2'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoIIS1($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oIIS1 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oIIS1'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoIII8($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oIII8 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oIII8'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoIII7($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oIII7 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oIII7'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoIII6($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oIII6 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oIII6'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoIII5($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oIII5 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oIII5'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoIII4($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oIII4 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oIII4'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoIII3($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oIII3 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oIII3'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoIII2($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oIII2 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oIII2'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoIII1($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oIII1 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oIII1'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoIDS8($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oIDS8 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oIDS8'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoIDS7($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oIDS7 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oIDS7'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoIDS6($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oIDS6 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oIDS6'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoIDS5($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oIDS5 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oIDS5'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoIDS4($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oIDS4 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oIDS4'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoIDS3($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oIDS3 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oIDS3'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoIDS2($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oIDS2 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oIDS2'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoIDS1($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oIDS1 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oIDS1'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoIDI8($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oIDI8 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oIDI8'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoIDI7($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oIDI7 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oIDI7'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoIDI6($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oIDI6 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oIDI6'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoIDI5($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oIDI5 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oIDI5'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoIDI4($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oIDI4 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oIDI4'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoIDI3($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oIDI3 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oIDI3'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoIDI2($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oIDI2 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oIDI2'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getoIDI1($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT oIDI1 FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['oIDI1'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getprofesional($idOdontologia)
	{
		
		if($result=$bd->insertarDatos("SELECT profesional FROM odontologia WHERE idOdontologia=$idOdontologia"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['profesional'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function setconsulta($consulta,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET consulta=$consulta WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setmotCon($motCon,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET motCon=$motCon WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setenfermedad($enfermedad,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET enfermedad=$enfermedad WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setpulso($pulso,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET pulso=$pulso WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setpreArt($preArt,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET preArt=$preArt WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setfreRes($freRes,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET freRes=$freRes WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setfreCar($freCar,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET freCar=$freCar WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setttoMedAct($ttoMedAct,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET ttoMedAct=$ttoMedAct WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function settomMed($tomMed,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET tomMed=$tomMed WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setalergia($alergia,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET alergia=$alergia WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setcardiopatia($cardiopatia,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET cardiopatia=$cardiopatia WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setaltP/A($altP/A,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET altP/A=$altP/A WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setdiabetes($diabetes,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET diabetes=$diabetes WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function sethepatitis($hepatitis,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET hepatitis=$hepatitis WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setdisSan($disSan,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET disSan=$disSan WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setenfRen($enfRen,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET enfRen=$enfRen WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setinmuno($inmuno,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET inmuno=$inmuno WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function settraEnd($traEnd,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET traEnd=$traEnd WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setpatResp($patResp,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET patResp=$patResp WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function settraGas($traGas,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET traGas=$traGas WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setepilepsia($epilepsia,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET epilepsia=$epilepsia WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setcirugias($cirugias,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET cirugias=$cirugias WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setprotesis($protesis,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET protesis=$protesis WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setobservaciones($observaciones,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET observaciones=$observaciones WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setlabSup($labSup,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET labSup=$labSup WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setlabInf($labInf,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET labInf=$labInf WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setcomisuras($comisuras,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET comisuras=$comisuras WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setmucOral($mucOral,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET mucOral=$mucOral WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setpaladar($paladar,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET paladar=$paladar WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setlengua($lengua,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET lengua=$lengua WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setpisBoca($pisBoca,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET pisBoca=$pisBoca WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setrebAlv($rebAlv,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET rebAlv=$rebAlv WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setfrenillos($frenillos,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET frenillos=$frenillos WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setglaSal($glaSal,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET glaSal=$glaSal WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setdolMus($dolMus,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET dolMus=$dolMus WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setdolArt($dolArt,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET dolArt=$dolArt WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setruiArt($ruiArt,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET ruiArt=$ruiArt WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setalteracion($alteracion,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET alteracion=$alteracion WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setdespalzamiento($despalzamiento,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET despalzamiento=$despalzamiento WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setobservaciones2($observaciones2,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET observaciones2=$observaciones2 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setforma($forma,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET forma=$forma WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function settamano($tamano,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET tamano=$tamano WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setnumero($numero,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET numero=$numero WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setmovTejDen($movTejDen,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET movTejDen=$movTejDen WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setinflamacion($inflamacion,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET inflamacion=$inflamacion WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setbolsa($bolsa,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET bolsa=$bolsa WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setrecesiones($recesiones,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET recesiones=$recesiones WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setmovExaPul($movExaPul,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET movExaPul=$movExaPul WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setperExaPul($perExaPul,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET perExaPul=$perExaPul WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setsenExaPul($senExaPul,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET senExaPul=$senExaPul WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setfisExaPul($fisExaPul,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET fisExaPul=$fisExaPul WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setdieTraExaPul($dieTraExaPul,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET dieTraExaPul=$dieTraExaPul WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function sethabOra($habOra,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET habOra=$habOra WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setobservaciones3($observaciones3,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET observaciones3=$observaciones3 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setdiagOral($diagOral,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET diagOral=$diagOral WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setplaTra($plaTra,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET plaTra=$plaTra WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setprofesional2($profesional2,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET profesional2=$profesional2 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoASI8($oASI8,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oASI8=$oASI8 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoASI7($oASI7,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oASI7=$oASI7 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoASI6($oASI6,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oASI6=$oASI6 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoASI5($oASI5,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oASI5=$oASI5 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoASI4($oASI4,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oASI4=$oASI4 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoASI3($oASI3,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oASI3=$oASI3 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoASI2($oASI2,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oASI2=$oASI2 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoASI1($oASI1,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oASI1=$oASI1 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoAII8($oAII8,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oAII8=$oAII8 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoAII7($oAII7,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oAII7=$oAII7 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoAII6($oAII6,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oAII6=$oAII6 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoAII5($oAII5,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oAII5=$oAII5 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoAII4($oAII4,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oAII4=$oAII4 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoAII3($oAII3,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oAII3=$oAII3 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoAII2($oAII2,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oAII2=$oAII2 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoAII1($oAII1,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oAII1=$oAII1 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoADS8($oADS8,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oADS8=$oADS8 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoADS7($oADS7,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oADS7=$oADS7 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoADS6($oADS6,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oADS6=$oADS6 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoADS5($oADS5,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oADS5=$oADS5 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoADS4($oADS4,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oADS4=$oADS4 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoADS3($oADS3,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oADS3=$oADS3 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoADS2($oADS2,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oADS2=$oADS2 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoADS1($oADS1,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oADS1=$oADS1 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoADI8($oADI8,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oADI8=$oADI8 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoADI7($oADI7,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oADI7=$oADI7 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoADI6($oADI6,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oADI6=$oADI6 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoADI5($oADI5,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oADI5=$oADI5 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoADI4($oADI4,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oADI4=$oADI4 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoADI3($oADI3,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oADI3=$oADI3 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoADI2($oADI2,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oADI2=$oADI2 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoADI1($oADI1,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oADI1=$oADI1 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoIIS8($oIIS8,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oIIS8=$oIIS8 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoIIS7($oIIS7,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oIIS7=$oIIS7 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoIIS6($oIIS6,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oIIS6=$oIIS6 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoIIS5($oIIS5,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oIIS5=$oIIS5 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoIIS4($oIIS4,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oIIS4=$oIIS4 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoIIS3($oIIS3,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oIIS3=$oIIS3 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoIIS2($oIIS2,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oIIS2=$oIIS2 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoIIS1($oIIS1,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oIIS1=$oIIS1 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoIII8($oIII8,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oIII8=$oIII8 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoIII7($oIII7,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oIII7=$oIII7 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoIII6($oIII6,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oIII6=$oIII6 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoIII5($oIII5,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oIII5=$oIII5 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoIII4($oIII4,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oIII4=$oIII4 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoIII3($oIII3,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oIII3=$oIII3 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoIII2($oIII2,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oIII2=$oIII2 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoIII1($oIII1,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oIII1=$oIII1 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoIDS8($oIDS8,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oIDS8=$oIDS8 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoIDS7($oIDS7,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oIDS7=$oIDS7 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoIDS6($oIDS6,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oIDS6=$oIDS6 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoIDS5($oIDS5,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oIDS5=$oIDS5 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoIDS4($oIDS4,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oIDS4=$oIDS4 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoIDS3($oIDS3,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oIDS3=$oIDS3 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoIDS2($oIDS2,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oIDS2=$oIDS2 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoIDS1($oIDS1,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oIDS1=$oIDS1 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoIDI8($oIDI8,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oIDI8=$oIDI8 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoIDI7($oIDI7,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oIDI7=$oIDI7 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoIDI6($oIDI6,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oIDI6=$oIDI6 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoIDI5($oIDI5,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oIDI5=$oIDI5 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoIDI4($oIDI4,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oIDI4=$oIDI4 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoIDI3($oIDI3,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oIDI3=$oIDI3 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoIDI2($oIDI2,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oIDI2=$oIDI2 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setoIDI1($oIDI1,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET oIDI1=$oIDI1 WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setprofesional($profesional,$idOdontologia)
	{
		
		if($result=$bd->insertarDatos("UPDATE odontologia SET profesional=$profesional WHERE idOdontologia=$idOdontologia"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function dibujarFormularioIngresoodontologia()
	{
		echo "<form role='form'>";

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>idOdontologia</label>

                                <input type='email' class='form-control' id='idOdontologia' placeholder='idOdontologia'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>consulta</label>

                                <input type='email' class='form-control' id='consulta' placeholder='consulta'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>motCon</label>

                                <input type='email' class='form-control' id='motCon' placeholder='motCon'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>enfermedad</label>

                                <input type='email' class='form-control' id='enfermedad' placeholder='enfermedad'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>pulso</label>

                                <input type='email' class='form-control' id='pulso' placeholder='pulso'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>preArt</label>

                                <input type='email' class='form-control' id='preArt' placeholder='preArt'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>freRes</label>

                                <input type='email' class='form-control' id='freRes' placeholder='freRes'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>freCar</label>

                                <input type='email' class='form-control' id='freCar' placeholder='freCar'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>ttoMedAct</label>

                                <input type='email' class='form-control' id='ttoMedAct' placeholder='ttoMedAct'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>tomMed</label>

                                <input type='email' class='form-control' id='tomMed' placeholder='tomMed'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>alergia</label>

                                <input type='email' class='form-control' id='alergia' placeholder='alergia'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>cardiopatia</label>

                                <input type='email' class='form-control' id='cardiopatia' placeholder='cardiopatia'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>altP/A</label>

                                <input type='email' class='form-control' id='altP/A' placeholder='altP/A'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>diabetes</label>

                                <input type='email' class='form-control' id='diabetes' placeholder='diabetes'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>hepatitis</label>

                                <input type='email' class='form-control' id='hepatitis' placeholder='hepatitis'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>disSan</label>

                                <input type='email' class='form-control' id='disSan' placeholder='disSan'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>enfRen</label>

                                <input type='email' class='form-control' id='enfRen' placeholder='enfRen'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>inmuno</label>

                                <input type='email' class='form-control' id='inmuno' placeholder='inmuno'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>traEnd</label>

                                <input type='email' class='form-control' id='traEnd' placeholder='traEnd'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>patResp</label>

                                <input type='email' class='form-control' id='patResp' placeholder='patResp'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>traGas</label>

                                <input type='email' class='form-control' id='traGas' placeholder='traGas'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>epilepsia</label>

                                <input type='email' class='form-control' id='epilepsia' placeholder='epilepsia'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>cirugias</label>

                                <input type='email' class='form-control' id='cirugias' placeholder='cirugias'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>protesis</label>

                                <input type='email' class='form-control' id='protesis' placeholder='protesis'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>observaciones</label>

                                <input type='email' class='form-control' id='observaciones' placeholder='observaciones'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>labSup</label>

                                <input type='email' class='form-control' id='labSup' placeholder='labSup'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>labInf</label>

                                <input type='email' class='form-control' id='labInf' placeholder='labInf'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>comisuras</label>

                                <input type='email' class='form-control' id='comisuras' placeholder='comisuras'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>mucOral</label>

                                <input type='email' class='form-control' id='mucOral' placeholder='mucOral'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>paladar</label>

                                <input type='email' class='form-control' id='paladar' placeholder='paladar'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>lengua</label>

                                <input type='email' class='form-control' id='lengua' placeholder='lengua'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>pisBoca</label>

                                <input type='email' class='form-control' id='pisBoca' placeholder='pisBoca'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>rebAlv</label>

                                <input type='email' class='form-control' id='rebAlv' placeholder='rebAlv'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>frenillos</label>

                                <input type='email' class='form-control' id='frenillos' placeholder='frenillos'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>glaSal</label>

                                <input type='email' class='form-control' id='glaSal' placeholder='glaSal'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>dolMus</label>

                                <input type='email' class='form-control' id='dolMus' placeholder='dolMus'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>dolArt</label>

                                <input type='email' class='form-control' id='dolArt' placeholder='dolArt'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>ruiArt</label>

                                <input type='email' class='form-control' id='ruiArt' placeholder='ruiArt'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>alteracion</label>

                                <input type='email' class='form-control' id='alteracion' placeholder='alteracion'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>despalzamiento</label>

                                <input type='email' class='form-control' id='despalzamiento' placeholder='despalzamiento'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>observaciones2</label>

                                <input type='email' class='form-control' id='observaciones2' placeholder='observaciones2'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>forma</label>

                                <input type='email' class='form-control' id='forma' placeholder='forma'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>tamano</label>

                                <input type='email' class='form-control' id='tamano' placeholder='tamano'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>numero</label>

                                <input type='email' class='form-control' id='numero' placeholder='numero'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>movTejDen</label>

                                <input type='email' class='form-control' id='movTejDen' placeholder='movTejDen'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>inflamacion</label>

                                <input type='email' class='form-control' id='inflamacion' placeholder='inflamacion'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>bolsa</label>

                                <input type='email' class='form-control' id='bolsa' placeholder='bolsa'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>recesiones</label>

                                <input type='email' class='form-control' id='recesiones' placeholder='recesiones'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>movExaPul</label>

                                <input type='email' class='form-control' id='movExaPul' placeholder='movExaPul'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>perExaPul</label>

                                <input type='email' class='form-control' id='perExaPul' placeholder='perExaPul'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>senExaPul</label>

                                <input type='email' class='form-control' id='senExaPul' placeholder='senExaPul'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>fisExaPul</label>

                                <input type='email' class='form-control' id='fisExaPul' placeholder='fisExaPul'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>dieTraExaPul</label>

                                <input type='email' class='form-control' id='dieTraExaPul' placeholder='dieTraExaPul'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>habOra</label>

                                <input type='email' class='form-control' id='habOra' placeholder='habOra'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>observaciones3</label>

                                <input type='email' class='form-control' id='observaciones3' placeholder='observaciones3'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>diagOral</label>

                                <input type='email' class='form-control' id='diagOral' placeholder='diagOral'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>plaTra</label>

                                <input type='email' class='form-control' id='plaTra' placeholder='plaTra'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>profesional2</label>

                                <input type='email' class='form-control' id='profesional2' placeholder='profesional2'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oASI8</label>

                                <input type='email' class='form-control' id='oASI8' placeholder='oASI8'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oASI7</label>

                                <input type='email' class='form-control' id='oASI7' placeholder='oASI7'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oASI6</label>

                                <input type='email' class='form-control' id='oASI6' placeholder='oASI6'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oASI5</label>

                                <input type='email' class='form-control' id='oASI5' placeholder='oASI5'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oASI4</label>

                                <input type='email' class='form-control' id='oASI4' placeholder='oASI4'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oASI3</label>

                                <input type='email' class='form-control' id='oASI3' placeholder='oASI3'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oASI2</label>

                                <input type='email' class='form-control' id='oASI2' placeholder='oASI2'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oASI1</label>

                                <input type='email' class='form-control' id='oASI1' placeholder='oASI1'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oAII8</label>

                                <input type='email' class='form-control' id='oAII8' placeholder='oAII8'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oAII7</label>

                                <input type='email' class='form-control' id='oAII7' placeholder='oAII7'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oAII6</label>

                                <input type='email' class='form-control' id='oAII6' placeholder='oAII6'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oAII5</label>

                                <input type='email' class='form-control' id='oAII5' placeholder='oAII5'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oAII4</label>

                                <input type='email' class='form-control' id='oAII4' placeholder='oAII4'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oAII3</label>

                                <input type='email' class='form-control' id='oAII3' placeholder='oAII3'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oAII2</label>

                                <input type='email' class='form-control' id='oAII2' placeholder='oAII2'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oAII1</label>

                                <input type='email' class='form-control' id='oAII1' placeholder='oAII1'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oADS8</label>

                                <input type='email' class='form-control' id='oADS8' placeholder='oADS8'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oADS7</label>

                                <input type='email' class='form-control' id='oADS7' placeholder='oADS7'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oADS6</label>

                                <input type='email' class='form-control' id='oADS6' placeholder='oADS6'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oADS5</label>

                                <input type='email' class='form-control' id='oADS5' placeholder='oADS5'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oADS4</label>

                                <input type='email' class='form-control' id='oADS4' placeholder='oADS4'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oADS3</label>

                                <input type='email' class='form-control' id='oADS3' placeholder='oADS3'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oADS2</label>

                                <input type='email' class='form-control' id='oADS2' placeholder='oADS2'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oADS1</label>

                                <input type='email' class='form-control' id='oADS1' placeholder='oADS1'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oADI8</label>

                                <input type='email' class='form-control' id='oADI8' placeholder='oADI8'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oADI7</label>

                                <input type='email' class='form-control' id='oADI7' placeholder='oADI7'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oADI6</label>

                                <input type='email' class='form-control' id='oADI6' placeholder='oADI6'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oADI5</label>

                                <input type='email' class='form-control' id='oADI5' placeholder='oADI5'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oADI4</label>

                                <input type='email' class='form-control' id='oADI4' placeholder='oADI4'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oADI3</label>

                                <input type='email' class='form-control' id='oADI3' placeholder='oADI3'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oADI2</label>

                                <input type='email' class='form-control' id='oADI2' placeholder='oADI2'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oADI1</label>

                                <input type='email' class='form-control' id='oADI1' placeholder='oADI1'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oIIS8</label>

                                <input type='email' class='form-control' id='oIIS8' placeholder='oIIS8'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oIIS7</label>

                                <input type='email' class='form-control' id='oIIS7' placeholder='oIIS7'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oIIS6</label>

                                <input type='email' class='form-control' id='oIIS6' placeholder='oIIS6'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oIIS5</label>

                                <input type='email' class='form-control' id='oIIS5' placeholder='oIIS5'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oIIS4</label>

                                <input type='email' class='form-control' id='oIIS4' placeholder='oIIS4'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oIIS3</label>

                                <input type='email' class='form-control' id='oIIS3' placeholder='oIIS3'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oIIS2</label>

                                <input type='email' class='form-control' id='oIIS2' placeholder='oIIS2'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oIIS1</label>

                                <input type='email' class='form-control' id='oIIS1' placeholder='oIIS1'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oIII8</label>

                                <input type='email' class='form-control' id='oIII8' placeholder='oIII8'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oIII7</label>

                                <input type='email' class='form-control' id='oIII7' placeholder='oIII7'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oIII6</label>

                                <input type='email' class='form-control' id='oIII6' placeholder='oIII6'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oIII5</label>

                                <input type='email' class='form-control' id='oIII5' placeholder='oIII5'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oIII4</label>

                                <input type='email' class='form-control' id='oIII4' placeholder='oIII4'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oIII3</label>

                                <input type='email' class='form-control' id='oIII3' placeholder='oIII3'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oIII2</label>

                                <input type='email' class='form-control' id='oIII2' placeholder='oIII2'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oIII1</label>

                                <input type='email' class='form-control' id='oIII1' placeholder='oIII1'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oIDS8</label>

                                <input type='email' class='form-control' id='oIDS8' placeholder='oIDS8'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oIDS7</label>

                                <input type='email' class='form-control' id='oIDS7' placeholder='oIDS7'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oIDS6</label>

                                <input type='email' class='form-control' id='oIDS6' placeholder='oIDS6'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oIDS5</label>

                                <input type='email' class='form-control' id='oIDS5' placeholder='oIDS5'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oIDS4</label>

                                <input type='email' class='form-control' id='oIDS4' placeholder='oIDS4'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oIDS3</label>

                                <input type='email' class='form-control' id='oIDS3' placeholder='oIDS3'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oIDS2</label>

                                <input type='email' class='form-control' id='oIDS2' placeholder='oIDS2'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oIDS1</label>

                                <input type='email' class='form-control' id='oIDS1' placeholder='oIDS1'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oIDI8</label>

                                <input type='email' class='form-control' id='oIDI8' placeholder='oIDI8'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oIDI7</label>

                                <input type='email' class='form-control' id='oIDI7' placeholder='oIDI7'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oIDI6</label>

                                <input type='email' class='form-control' id='oIDI6' placeholder='oIDI6'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oIDI5</label>

                                <input type='email' class='form-control' id='oIDI5' placeholder='oIDI5'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oIDI4</label>

                                <input type='email' class='form-control' id='oIDI4' placeholder='oIDI4'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oIDI3</label>

                                <input type='email' class='form-control' id='oIDI3' placeholder='oIDI3'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oIDI2</label>

                                <input type='email' class='form-control' id='oIDI2' placeholder='oIDI2'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>oIDI1</label>

                                <input type='email' class='form-control' id='oIDI1' placeholder='oIDI1'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>profesional</label>

                                <input type='email' class='form-control' id='profesional' placeholder='profesional'>

                            </div>";

                

                echo "<button type='submit' class='btn btn-default' onclick='ingresarNuevoodontologia();return false;'>Ingresar</button>";

           echo "</form>";
	}

	function consultarTodosodontologia()
	{
		$bd=BD::getInstance();
		if($result=$bd->extraerDatos("SELECT * FROM odontologia"))
		{
			echo "<div class='panel panel-default'><div class='panel-heading'>Nombre de la Tabla</div> <table class='table'><thead><tr><th>idOdontologia</th><th>consulta</th><th>motCon</th><th>enfermedad</th><th>pulso</th><th>preArt</th><th>freRes</th><th>freCar</th><th>ttoMedAct</th><th>tomMed</th><th>alergia</th><th>cardiopatia</th><th>altP/A</th><th>diabetes</th><th>hepatitis</th><th>disSan</th><th>enfRen</th><th>inmuno</th><th>traEnd</th><th>patResp</th><th>traGas</th><th>epilepsia</th><th>cirugias</th><th>protesis</th><th>observaciones</th><th>labSup</th><th>labInf</th><th>comisuras</th><th>mucOral</th><th>paladar</th><th>lengua</th><th>pisBoca</th><th>rebAlv</th><th>frenillos</th><th>glaSal</th><th>dolMus</th><th>dolArt</th><th>ruiArt</th><th>alteracion</th><th>despalzamiento</th><th>observaciones2</th><th>forma</th><th>tamano</th><th>numero</th><th>movTejDen</th><th>inflamacion</th><th>bolsa</th><th>recesiones</th><th>movExaPul</th><th>perExaPul</th><th>senExaPul</th><th>fisExaPul</th><th>dieTraExaPul</th><th>habOra</th><th>observaciones3</th><th>diagOral</th><th>plaTra</th><th>profesional2</th><th>oASI8</th><th>oASI7</th><th>oASI6</th><th>oASI5</th><th>oASI4</th><th>oASI3</th><th>oASI2</th><th>oASI1</th><th>oAII8</th><th>oAII7</th><th>oAII6</th><th>oAII5</th><th>oAII4</th><th>oAII3</th><th>oAII2</th><th>oAII1</th><th>oADS8</th><th>oADS7</th><th>oADS6</th><th>oADS5</th><th>oADS4</th><th>oADS3</th><th>oADS2</th><th>oADS1</th><th>oADI8</th><th>oADI7</th><th>oADI6</th><th>oADI5</th><th>oADI4</th><th>oADI3</th><th>oADI2</th><th>oADI1</th><th>oIIS8</th><th>oIIS7</th><th>oIIS6</th><th>oIIS5</th><th>oIIS4</th><th>oIIS3</th><th>oIIS2</th><th>oIIS1</th><th>oIII8</th><th>oIII7</th><th>oIII6</th><th>oIII5</th><th>oIII4</th><th>oIII3</th><th>oIII2</th><th>oIII1</th><th>oIDS8</th><th>oIDS7</th><th>oIDS6</th><th>oIDS5</th><th>oIDS4</th><th>oIDS3</th><th>oIDS2</th><th>oIDS1</th><th>oIDI8</th><th>oIDI7</th><th>oIDI6</th><th>oIDI5</th><th>oIDI4</th><th>oIDI3</th><th>oIDI2</th><th>oIDI1</th><th>profesional</th><th>Accion</th></tr></thead><tbody>";

        
			while($filas = mysql_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>".$filas['idOdontologia']."</td>";
				echo "<td>".$filas['consulta']."</td>";
				echo "<td>".$filas['motCon']."</td>";
				echo "<td>".$filas['enfermedad']."</td>";
				echo "<td>".$filas['pulso']."</td>";
				echo "<td>".$filas['preArt']."</td>";
				echo "<td>".$filas['freRes']."</td>";
				echo "<td>".$filas['freCar']."</td>";
				echo "<td>".$filas['ttoMedAct']."</td>";
				echo "<td>".$filas['tomMed']."</td>";
				echo "<td>".$filas['alergia']."</td>";
				echo "<td>".$filas['cardiopatia']."</td>";
				echo "<td>".$filas['altP/A']."</td>";
				echo "<td>".$filas['diabetes']."</td>";
				echo "<td>".$filas['hepatitis']."</td>";
				echo "<td>".$filas['disSan']."</td>";
				echo "<td>".$filas['enfRen']."</td>";
				echo "<td>".$filas['inmuno']."</td>";
				echo "<td>".$filas['traEnd']."</td>";
				echo "<td>".$filas['patResp']."</td>";
				echo "<td>".$filas['traGas']."</td>";
				echo "<td>".$filas['epilepsia']."</td>";
				echo "<td>".$filas['cirugias']."</td>";
				echo "<td>".$filas['protesis']."</td>";
				echo "<td>".$filas['observaciones']."</td>";
				echo "<td>".$filas['labSup']."</td>";
				echo "<td>".$filas['labInf']."</td>";
				echo "<td>".$filas['comisuras']."</td>";
				echo "<td>".$filas['mucOral']."</td>";
				echo "<td>".$filas['paladar']."</td>";
				echo "<td>".$filas['lengua']."</td>";
				echo "<td>".$filas['pisBoca']."</td>";
				echo "<td>".$filas['rebAlv']."</td>";
				echo "<td>".$filas['frenillos']."</td>";
				echo "<td>".$filas['glaSal']."</td>";
				echo "<td>".$filas['dolMus']."</td>";
				echo "<td>".$filas['dolArt']."</td>";
				echo "<td>".$filas['ruiArt']."</td>";
				echo "<td>".$filas['alteracion']."</td>";
				echo "<td>".$filas['despalzamiento']."</td>";
				echo "<td>".$filas['observaciones2']."</td>";
				echo "<td>".$filas['forma']."</td>";
				echo "<td>".$filas['tamano']."</td>";
				echo "<td>".$filas['numero']."</td>";
				echo "<td>".$filas['movTejDen']."</td>";
				echo "<td>".$filas['inflamacion']."</td>";
				echo "<td>".$filas['bolsa']."</td>";
				echo "<td>".$filas['recesiones']."</td>";
				echo "<td>".$filas['movExaPul']."</td>";
				echo "<td>".$filas['perExaPul']."</td>";
				echo "<td>".$filas['senExaPul']."</td>";
				echo "<td>".$filas['fisExaPul']."</td>";
				echo "<td>".$filas['dieTraExaPul']."</td>";
				echo "<td>".$filas['habOra']."</td>";
				echo "<td>".$filas['observaciones3']."</td>";
				echo "<td>".$filas['diagOral']."</td>";
				echo "<td>".$filas['plaTra']."</td>";
				echo "<td>".$filas['profesional2']."</td>";
				echo "<td>".$filas['oASI8']."</td>";
				echo "<td>".$filas['oASI7']."</td>";
				echo "<td>".$filas['oASI6']."</td>";
				echo "<td>".$filas['oASI5']."</td>";
				echo "<td>".$filas['oASI4']."</td>";
				echo "<td>".$filas['oASI3']."</td>";
				echo "<td>".$filas['oASI2']."</td>";
				echo "<td>".$filas['oASI1']."</td>";
				echo "<td>".$filas['oAII8']."</td>";
				echo "<td>".$filas['oAII7']."</td>";
				echo "<td>".$filas['oAII6']."</td>";
				echo "<td>".$filas['oAII5']."</td>";
				echo "<td>".$filas['oAII4']."</td>";
				echo "<td>".$filas['oAII3']."</td>";
				echo "<td>".$filas['oAII2']."</td>";
				echo "<td>".$filas['oAII1']."</td>";
				echo "<td>".$filas['oADS8']."</td>";
				echo "<td>".$filas['oADS7']."</td>";
				echo "<td>".$filas['oADS6']."</td>";
				echo "<td>".$filas['oADS5']."</td>";
				echo "<td>".$filas['oADS4']."</td>";
				echo "<td>".$filas['oADS3']."</td>";
				echo "<td>".$filas['oADS2']."</td>";
				echo "<td>".$filas['oADS1']."</td>";
				echo "<td>".$filas['oADI8']."</td>";
				echo "<td>".$filas['oADI7']."</td>";
				echo "<td>".$filas['oADI6']."</td>";
				echo "<td>".$filas['oADI5']."</td>";
				echo "<td>".$filas['oADI4']."</td>";
				echo "<td>".$filas['oADI3']."</td>";
				echo "<td>".$filas['oADI2']."</td>";
				echo "<td>".$filas['oADI1']."</td>";
				echo "<td>".$filas['oIIS8']."</td>";
				echo "<td>".$filas['oIIS7']."</td>";
				echo "<td>".$filas['oIIS6']."</td>";
				echo "<td>".$filas['oIIS5']."</td>";
				echo "<td>".$filas['oIIS4']."</td>";
				echo "<td>".$filas['oIIS3']."</td>";
				echo "<td>".$filas['oIIS2']."</td>";
				echo "<td>".$filas['oIIS1']."</td>";
				echo "<td>".$filas['oIII8']."</td>";
				echo "<td>".$filas['oIII7']."</td>";
				echo "<td>".$filas['oIII6']."</td>";
				echo "<td>".$filas['oIII5']."</td>";
				echo "<td>".$filas['oIII4']."</td>";
				echo "<td>".$filas['oIII3']."</td>";
				echo "<td>".$filas['oIII2']."</td>";
				echo "<td>".$filas['oIII1']."</td>";
				echo "<td>".$filas['oIDS8']."</td>";
				echo "<td>".$filas['oIDS7']."</td>";
				echo "<td>".$filas['oIDS6']."</td>";
				echo "<td>".$filas['oIDS5']."</td>";
				echo "<td>".$filas['oIDS4']."</td>";
				echo "<td>".$filas['oIDS3']."</td>";
				echo "<td>".$filas['oIDS2']."</td>";
				echo "<td>".$filas['oIDS1']."</td>";
				echo "<td>".$filas['oIDI8']."</td>";
				echo "<td>".$filas['oIDI7']."</td>";
				echo "<td>".$filas['oIDI6']."</td>";
				echo "<td>".$filas['oIDI5']."</td>";
				echo "<td>".$filas['oIDI4']."</td>";
				echo "<td>".$filas['oIDI3']."</td>";
				echo "<td>".$filas['oIDI2']."</td>";
				echo "<td>".$filas['oIDI1']."</td>";
				echo "<td>".$filas['profesional']."</td>";
				echo "<td><p>

        <a href='#' class='btn btn-primary' role='button' onclick='dibujarFormularioModificarodontologia(".$filas['idOdontologia'].");return false;'>Editar</a>

        <a href='#' class='btn btn-primary' role='button' onclick='eliminarodontologia(".$filas['idOdontologia'].");return false;'>Eliminar</a>

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

	function dibujarFormularioModificarodontologia($id)
	{
		$bd=BD::getInstance();
		$result=$bd->extraerDatos("SELECT * FROM odontologia WHERE idOdontologia=".$id);
		$filas = mysql_fetch_array($result);
		echo "<form role='form'>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>idOdontologia</label>

                            <input class='form-control' type='hidden' id='idOdontologia' value='".$filas["idOdontologia"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>consulta</label>

                            <input type='email' class='form-control' id='consulta' value='".$filas["consulta"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>motCon</label>

                            <input type='email' class='form-control' id='motCon' value='".$filas["motCon"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>enfermedad</label>

                            <input type='email' class='form-control' id='enfermedad' value='".$filas["enfermedad"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>pulso</label>

                            <input type='email' class='form-control' id='pulso' value='".$filas["pulso"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>preArt</label>

                            <input type='email' class='form-control' id='preArt' value='".$filas["preArt"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>freRes</label>

                            <input type='email' class='form-control' id='freRes' value='".$filas["freRes"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>freCar</label>

                            <input type='email' class='form-control' id='freCar' value='".$filas["freCar"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>ttoMedAct</label>

                            <input type='email' class='form-control' id='ttoMedAct' value='".$filas["ttoMedAct"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>tomMed</label>

                            <input type='email' class='form-control' id='tomMed' value='".$filas["tomMed"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>alergia</label>

                            <input type='email' class='form-control' id='alergia' value='".$filas["alergia"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>cardiopatia</label>

                            <input type='email' class='form-control' id='cardiopatia' value='".$filas["cardiopatia"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>altP/A</label>

                            <input type='email' class='form-control' id='altP/A' value='".$filas["altP/A"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>diabetes</label>

                            <input type='email' class='form-control' id='diabetes' value='".$filas["diabetes"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>hepatitis</label>

                            <input type='email' class='form-control' id='hepatitis' value='".$filas["hepatitis"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>disSan</label>

                            <input type='email' class='form-control' id='disSan' value='".$filas["disSan"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>enfRen</label>

                            <input type='email' class='form-control' id='enfRen' value='".$filas["enfRen"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>inmuno</label>

                            <input type='email' class='form-control' id='inmuno' value='".$filas["inmuno"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>traEnd</label>

                            <input type='email' class='form-control' id='traEnd' value='".$filas["traEnd"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>patResp</label>

                            <input type='email' class='form-control' id='patResp' value='".$filas["patResp"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>traGas</label>

                            <input type='email' class='form-control' id='traGas' value='".$filas["traGas"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>epilepsia</label>

                            <input type='email' class='form-control' id='epilepsia' value='".$filas["epilepsia"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>cirugias</label>

                            <input type='email' class='form-control' id='cirugias' value='".$filas["cirugias"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>protesis</label>

                            <input type='email' class='form-control' id='protesis' value='".$filas["protesis"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>observaciones</label>

                            <input type='email' class='form-control' id='observaciones' value='".$filas["observaciones"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>labSup</label>

                            <input type='email' class='form-control' id='labSup' value='".$filas["labSup"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>labInf</label>

                            <input type='email' class='form-control' id='labInf' value='".$filas["labInf"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>comisuras</label>

                            <input type='email' class='form-control' id='comisuras' value='".$filas["comisuras"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>mucOral</label>

                            <input type='email' class='form-control' id='mucOral' value='".$filas["mucOral"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>paladar</label>

                            <input type='email' class='form-control' id='paladar' value='".$filas["paladar"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>lengua</label>

                            <input type='email' class='form-control' id='lengua' value='".$filas["lengua"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>pisBoca</label>

                            <input type='email' class='form-control' id='pisBoca' value='".$filas["pisBoca"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>rebAlv</label>

                            <input type='email' class='form-control' id='rebAlv' value='".$filas["rebAlv"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>frenillos</label>

                            <input type='email' class='form-control' id='frenillos' value='".$filas["frenillos"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>glaSal</label>

                            <input type='email' class='form-control' id='glaSal' value='".$filas["glaSal"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>dolMus</label>

                            <input type='email' class='form-control' id='dolMus' value='".$filas["dolMus"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>dolArt</label>

                            <input type='email' class='form-control' id='dolArt' value='".$filas["dolArt"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>ruiArt</label>

                            <input type='email' class='form-control' id='ruiArt' value='".$filas["ruiArt"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>alteracion</label>

                            <input type='email' class='form-control' id='alteracion' value='".$filas["alteracion"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>despalzamiento</label>

                            <input type='email' class='form-control' id='despalzamiento' value='".$filas["despalzamiento"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>observaciones2</label>

                            <input type='email' class='form-control' id='observaciones2' value='".$filas["observaciones2"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>forma</label>

                            <input type='email' class='form-control' id='forma' value='".$filas["forma"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>tamano</label>

                            <input type='email' class='form-control' id='tamano' value='".$filas["tamano"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>numero</label>

                            <input type='email' class='form-control' id='numero' value='".$filas["numero"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>movTejDen</label>

                            <input type='email' class='form-control' id='movTejDen' value='".$filas["movTejDen"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>inflamacion</label>

                            <input type='email' class='form-control' id='inflamacion' value='".$filas["inflamacion"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>bolsa</label>

                            <input type='email' class='form-control' id='bolsa' value='".$filas["bolsa"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>recesiones</label>

                            <input type='email' class='form-control' id='recesiones' value='".$filas["recesiones"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>movExaPul</label>

                            <input type='email' class='form-control' id='movExaPul' value='".$filas["movExaPul"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>perExaPul</label>

                            <input type='email' class='form-control' id='perExaPul' value='".$filas["perExaPul"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>senExaPul</label>

                            <input type='email' class='form-control' id='senExaPul' value='".$filas["senExaPul"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>fisExaPul</label>

                            <input type='email' class='form-control' id='fisExaPul' value='".$filas["fisExaPul"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>dieTraExaPul</label>

                            <input type='email' class='form-control' id='dieTraExaPul' value='".$filas["dieTraExaPul"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>habOra</label>

                            <input type='email' class='form-control' id='habOra' value='".$filas["habOra"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>observaciones3</label>

                            <input type='email' class='form-control' id='observaciones3' value='".$filas["observaciones3"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>diagOral</label>

                            <input type='email' class='form-control' id='diagOral' value='".$filas["diagOral"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>plaTra</label>

                            <input type='email' class='form-control' id='plaTra' value='".$filas["plaTra"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>profesional2</label>

                            <input type='email' class='form-control' id='profesional2' value='".$filas["profesional2"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oASI8</label>

                            <input type='email' class='form-control' id='oASI8' value='".$filas["oASI8"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oASI7</label>

                            <input type='email' class='form-control' id='oASI7' value='".$filas["oASI7"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oASI6</label>

                            <input type='email' class='form-control' id='oASI6' value='".$filas["oASI6"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oASI5</label>

                            <input type='email' class='form-control' id='oASI5' value='".$filas["oASI5"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oASI4</label>

                            <input type='email' class='form-control' id='oASI4' value='".$filas["oASI4"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oASI3</label>

                            <input type='email' class='form-control' id='oASI3' value='".$filas["oASI3"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oASI2</label>

                            <input type='email' class='form-control' id='oASI2' value='".$filas["oASI2"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oASI1</label>

                            <input type='email' class='form-control' id='oASI1' value='".$filas["oASI1"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oAII8</label>

                            <input type='email' class='form-control' id='oAII8' value='".$filas["oAII8"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oAII7</label>

                            <input type='email' class='form-control' id='oAII7' value='".$filas["oAII7"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oAII6</label>

                            <input type='email' class='form-control' id='oAII6' value='".$filas["oAII6"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oAII5</label>

                            <input type='email' class='form-control' id='oAII5' value='".$filas["oAII5"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oAII4</label>

                            <input type='email' class='form-control' id='oAII4' value='".$filas["oAII4"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oAII3</label>

                            <input type='email' class='form-control' id='oAII3' value='".$filas["oAII3"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oAII2</label>

                            <input type='email' class='form-control' id='oAII2' value='".$filas["oAII2"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oAII1</label>

                            <input type='email' class='form-control' id='oAII1' value='".$filas["oAII1"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oADS8</label>

                            <input type='email' class='form-control' id='oADS8' value='".$filas["oADS8"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oADS7</label>

                            <input type='email' class='form-control' id='oADS7' value='".$filas["oADS7"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oADS6</label>

                            <input type='email' class='form-control' id='oADS6' value='".$filas["oADS6"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oADS5</label>

                            <input type='email' class='form-control' id='oADS5' value='".$filas["oADS5"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oADS4</label>

                            <input type='email' class='form-control' id='oADS4' value='".$filas["oADS4"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oADS3</label>

                            <input type='email' class='form-control' id='oADS3' value='".$filas["oADS3"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oADS2</label>

                            <input type='email' class='form-control' id='oADS2' value='".$filas["oADS2"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oADS1</label>

                            <input type='email' class='form-control' id='oADS1' value='".$filas["oADS1"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oADI8</label>

                            <input type='email' class='form-control' id='oADI8' value='".$filas["oADI8"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oADI7</label>

                            <input type='email' class='form-control' id='oADI7' value='".$filas["oADI7"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oADI6</label>

                            <input type='email' class='form-control' id='oADI6' value='".$filas["oADI6"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oADI5</label>

                            <input type='email' class='form-control' id='oADI5' value='".$filas["oADI5"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oADI4</label>

                            <input type='email' class='form-control' id='oADI4' value='".$filas["oADI4"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oADI3</label>

                            <input type='email' class='form-control' id='oADI3' value='".$filas["oADI3"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oADI2</label>

                            <input type='email' class='form-control' id='oADI2' value='".$filas["oADI2"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oADI1</label>

                            <input type='email' class='form-control' id='oADI1' value='".$filas["oADI1"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oIIS8</label>

                            <input type='email' class='form-control' id='oIIS8' value='".$filas["oIIS8"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oIIS7</label>

                            <input type='email' class='form-control' id='oIIS7' value='".$filas["oIIS7"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oIIS6</label>

                            <input type='email' class='form-control' id='oIIS6' value='".$filas["oIIS6"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oIIS5</label>

                            <input type='email' class='form-control' id='oIIS5' value='".$filas["oIIS5"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oIIS4</label>

                            <input type='email' class='form-control' id='oIIS4' value='".$filas["oIIS4"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oIIS3</label>

                            <input type='email' class='form-control' id='oIIS3' value='".$filas["oIIS3"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oIIS2</label>

                            <input type='email' class='form-control' id='oIIS2' value='".$filas["oIIS2"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oIIS1</label>

                            <input type='email' class='form-control' id='oIIS1' value='".$filas["oIIS1"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oIII8</label>

                            <input type='email' class='form-control' id='oIII8' value='".$filas["oIII8"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oIII7</label>

                            <input type='email' class='form-control' id='oIII7' value='".$filas["oIII7"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oIII6</label>

                            <input type='email' class='form-control' id='oIII6' value='".$filas["oIII6"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oIII5</label>

                            <input type='email' class='form-control' id='oIII5' value='".$filas["oIII5"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oIII4</label>

                            <input type='email' class='form-control' id='oIII4' value='".$filas["oIII4"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oIII3</label>

                            <input type='email' class='form-control' id='oIII3' value='".$filas["oIII3"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oIII2</label>

                            <input type='email' class='form-control' id='oIII2' value='".$filas["oIII2"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oIII1</label>

                            <input type='email' class='form-control' id='oIII1' value='".$filas["oIII1"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oIDS8</label>

                            <input type='email' class='form-control' id='oIDS8' value='".$filas["oIDS8"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oIDS7</label>

                            <input type='email' class='form-control' id='oIDS7' value='".$filas["oIDS7"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oIDS6</label>

                            <input type='email' class='form-control' id='oIDS6' value='".$filas["oIDS6"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oIDS5</label>

                            <input type='email' class='form-control' id='oIDS5' value='".$filas["oIDS5"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oIDS4</label>

                            <input type='email' class='form-control' id='oIDS4' value='".$filas["oIDS4"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oIDS3</label>

                            <input type='email' class='form-control' id='oIDS3' value='".$filas["oIDS3"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oIDS2</label>

                            <input type='email' class='form-control' id='oIDS2' value='".$filas["oIDS2"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oIDS1</label>

                            <input type='email' class='form-control' id='oIDS1' value='".$filas["oIDS1"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oIDI8</label>

                            <input type='email' class='form-control' id='oIDI8' value='".$filas["oIDI8"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oIDI7</label>

                            <input type='email' class='form-control' id='oIDI7' value='".$filas["oIDI7"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oIDI6</label>

                            <input type='email' class='form-control' id='oIDI6' value='".$filas["oIDI6"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oIDI5</label>

                            <input type='email' class='form-control' id='oIDI5' value='".$filas["oIDI5"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oIDI4</label>

                            <input type='email' class='form-control' id='oIDI4' value='".$filas["oIDI4"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oIDI3</label>

                            <input type='email' class='form-control' id='oIDI3' value='".$filas["oIDI3"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oIDI2</label>

                            <input type='email' class='form-control' id='oIDI2' value='".$filas["oIDI2"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>oIDI1</label>

                            <input type='email' class='form-control' id='oIDI1' value='".$filas["oIDI1"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>profesional</label>

                            <input type='email' class='form-control' id='profesional' value='".$filas["profesional"]."'>

                        </div>";

                echo "<button type='submit' class='btn btn-default' type='submit' onclick='modificarodontologia($id);return false;'>Modificar</button></form>";

           
	}
}
?>