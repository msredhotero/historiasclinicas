<?php
include ('../bd/bd.php');
class valoracionocupacional
{
	function insertarDatos($idValoracionOcupacional,$consulta,$antPsi,$obsNeu,$tonMus,$intRef,$segVis,$patFunMov,$patIntMov,$cooMotGru,$cooMotFin,$desOcuRutDia,$desOcuAutCuid,$desOcuParMan,$desOcuDilMan,$desOcuUsoTieLib,$desOcuApoNegFam,$diaOcu,$diagnostico,$diagnostico2,$diagnostico3,$proOcupacional,$observaciones,$profesional)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("INSERT INTO valoracionocupacional(consulta,antPsi,obsNeu,tonMus,intRef,segVis,patFunMov,patIntMov,cooMotGru,cooMotFin,desOcuRutDia,desOcuAutCuid,desOcuParMan,desOcuDilMan,desOcuUsoTieLib,desOcuApoNegFam,diaOcu,diagnostico,diag2,diag3,proOcupacional,observaciones,profesional) VALUES (   '$consulta','$antPsi','$obsNeu','$tonMus','$intRef','$segVis','$patFunMov','$patIntMov','$cooMotGru','$cooMotFin','$desOcuRutDia','$desOcuAutCuid','$desOcuParMan','$desOcuDilMan','$desOcuUsoTieLib','$desOcuApoNegFam','$diaOcu','$diagnostico','$diagnostico2','$diagnostico3','$proOcupacional','$observaciones','$profesional')"))
		{
			echo "Registro de datos exitoso";
		}
		else
		{
			echo "No se pudo hacer el registro de datos";
		}
	}

	function consultarDatos($idValoracionOcupacional)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("SELECT * FROM valoracionocupacional WHERE idValoracionOcupacional=$idValoracionOcupacional"))
		{
			echo "Consulta de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la consulta de datos";
		}
	}

	function eliminarDatos($idValoracionOcupacional)
	{
		$bd=BD::getInstance();
		if($bd->extraerDatos("DELETE FROM valoracionocupacional WHERE idValoracionOcupacional=$idValoracionOcupacional"))
		{
			echo "Eliminación exitosa";
		}
		else
		{
			echo "No se pudo realizar la eliminación de datos";
		}
	}

	function actualizarDatos($idValoracionOcupacional,$consulta,$antPsi,$obsNeu,$tonMus,$intRef,$segVis,$patFunMov,$patIntMov,$cooMotGru,$cooMotFin,$desOcuRutDia,$desOcuAutCuid,$desOcuParMan,$desOcuDilMan,$desOcuUsoTieLib,$desOcuApoNegFam,$diaOcu,$diagnostico,$proOcupacional,$observaciones,$profesional)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("UPDATE valoracionocupacional SET consulta='$consulta',antPsi='$antPsi',obsNeu='$obsNeu',tonMus='$tonMus',intRef='$intRef',segVis='$segVis',patFunMov='$patFunMov',patIntMov='$patIntMov',cooMotGru='$cooMotGru',cooMotFin='$cooMotFin',desOcuRutDia='$desOcuRutDia',desOcuAutCuid='$desOcuAutCuid',desOcuParMan='$desOcuParMan',desOcuDilMan='$desOcuDilMan',desOcuUsoTieLib='$desOcuUsoTieLib',desOcuApoNegFam='$desOcuApoNegFam',diaOcu='$diaOcu',diagnostico='$diagnostico',proOcupacional='$proOcupacional',observaciones='$observaciones',profesional='$profesional' WHERE idValoracionOcupacional=$idValoracionOcupacional"))
		{
			echo "Modificación de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la modificación de datos";
		}
	}

	function getconsulta($idValoracionOcupacional)
	{
		
		if($result=$bd->insertarDatos("SELECT consulta FROM valoracionocupacional WHERE idValoracionOcupacional=$idValoracionOcupacional"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['consulta'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getantPsi($idValoracionOcupacional)
	{
		
		if($result=$bd->insertarDatos("SELECT antPsi FROM valoracionocupacional WHERE idValoracionOcupacional=$idValoracionOcupacional"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['antPsi'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getobsNeu($idValoracionOcupacional)
	{
		
		if($result=$bd->insertarDatos("SELECT obsNeu FROM valoracionocupacional WHERE idValoracionOcupacional=$idValoracionOcupacional"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['obsNeu'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function gettonMus($idValoracionOcupacional)
	{
		
		if($result=$bd->insertarDatos("SELECT tonMus FROM valoracionocupacional WHERE idValoracionOcupacional=$idValoracionOcupacional"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['tonMus'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getintRef($idValoracionOcupacional)
	{
		
		if($result=$bd->insertarDatos("SELECT intRef FROM valoracionocupacional WHERE idValoracionOcupacional=$idValoracionOcupacional"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['intRef'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getsegVis($idValoracionOcupacional)
	{
		
		if($result=$bd->insertarDatos("SELECT segVis FROM valoracionocupacional WHERE idValoracionOcupacional=$idValoracionOcupacional"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['segVis'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getpatFunMov($idValoracionOcupacional)
	{
		
		if($result=$bd->insertarDatos("SELECT patFunMov FROM valoracionocupacional WHERE idValoracionOcupacional=$idValoracionOcupacional"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['patFunMov'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getpatIntMov($idValoracionOcupacional)
	{
		
		if($result=$bd->insertarDatos("SELECT patIntMov FROM valoracionocupacional WHERE idValoracionOcupacional=$idValoracionOcupacional"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['patIntMov'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getcooMotGru($idValoracionOcupacional)
	{
		
		if($result=$bd->insertarDatos("SELECT cooMotGru FROM valoracionocupacional WHERE idValoracionOcupacional=$idValoracionOcupacional"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['cooMotGru'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getcooMotFin($idValoracionOcupacional)
	{
		
		if($result=$bd->insertarDatos("SELECT cooMotFin FROM valoracionocupacional WHERE idValoracionOcupacional=$idValoracionOcupacional"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['cooMotFin'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getdesOcuRutDia($idValoracionOcupacional)
	{
		
		if($result=$bd->insertarDatos("SELECT desOcuRutDia FROM valoracionocupacional WHERE idValoracionOcupacional=$idValoracionOcupacional"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['desOcuRutDia'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getdesOcuAutCuid($idValoracionOcupacional)
	{
		
		if($result=$bd->insertarDatos("SELECT desOcuAutCuid FROM valoracionocupacional WHERE idValoracionOcupacional=$idValoracionOcupacional"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['desOcuAutCuid'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getdesOcuParMan($idValoracionOcupacional)
	{
		
		if($result=$bd->insertarDatos("SELECT desOcuParMan FROM valoracionocupacional WHERE idValoracionOcupacional=$idValoracionOcupacional"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['desOcuParMan'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getdesOcuDilMan($idValoracionOcupacional)
	{
		
		if($result=$bd->insertarDatos("SELECT desOcuDilMan FROM valoracionocupacional WHERE idValoracionOcupacional=$idValoracionOcupacional"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['desOcuDilMan'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getdesOcuUsoTieLib($idValoracionOcupacional)
	{
		
		if($result=$bd->insertarDatos("SELECT desOcuUsoTieLib FROM valoracionocupacional WHERE idValoracionOcupacional=$idValoracionOcupacional"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['desOcuUsoTieLib'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getdesOcuApoNegFam($idValoracionOcupacional)
	{
		
		if($result=$bd->insertarDatos("SELECT desOcuApoNegFam FROM valoracionocupacional WHERE idValoracionOcupacional=$idValoracionOcupacional"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['desOcuApoNegFam'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getdiaOcu($idValoracionOcupacional)
	{
		
		if($result=$bd->insertarDatos("SELECT diaOcu FROM valoracionocupacional WHERE idValoracionOcupacional=$idValoracionOcupacional"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['diaOcu'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getdiagnostico($idValoracionOcupacional)
	{
		
		if($result=$bd->insertarDatos("SELECT diagnostico FROM valoracionocupacional WHERE idValoracionOcupacional=$idValoracionOcupacional"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['diagnostico'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getproOcupacional($idValoracionOcupacional)
	{
		
		if($result=$bd->insertarDatos("SELECT proOcupacional FROM valoracionocupacional WHERE idValoracionOcupacional=$idValoracionOcupacional"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['proOcupacional'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getobservaciones($idValoracionOcupacional)
	{
		
		if($result=$bd->insertarDatos("SELECT observaciones FROM valoracionocupacional WHERE idValoracionOcupacional=$idValoracionOcupacional"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['observaciones'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getprofesional($idValoracionOcupacional)
	{
		
		if($result=$bd->insertarDatos("SELECT profesional FROM valoracionocupacional WHERE idValoracionOcupacional=$idValoracionOcupacional"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['profesional'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function setconsulta($consulta,$idValoracionOcupacional)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionocupacional SET consulta=$consulta WHERE idValoracionOcupacional=$idValoracionOcupacional"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setantPsi($antPsi,$idValoracionOcupacional)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionocupacional SET antPsi=$antPsi WHERE idValoracionOcupacional=$idValoracionOcupacional"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setobsNeu($obsNeu,$idValoracionOcupacional)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionocupacional SET obsNeu=$obsNeu WHERE idValoracionOcupacional=$idValoracionOcupacional"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function settonMus($tonMus,$idValoracionOcupacional)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionocupacional SET tonMus=$tonMus WHERE idValoracionOcupacional=$idValoracionOcupacional"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setintRef($intRef,$idValoracionOcupacional)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionocupacional SET intRef=$intRef WHERE idValoracionOcupacional=$idValoracionOcupacional"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setsegVis($segVis,$idValoracionOcupacional)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionocupacional SET segVis=$segVis WHERE idValoracionOcupacional=$idValoracionOcupacional"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setpatFunMov($patFunMov,$idValoracionOcupacional)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionocupacional SET patFunMov=$patFunMov WHERE idValoracionOcupacional=$idValoracionOcupacional"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setpatIntMov($patIntMov,$idValoracionOcupacional)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionocupacional SET patIntMov=$patIntMov WHERE idValoracionOcupacional=$idValoracionOcupacional"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setcooMotGru($cooMotGru,$idValoracionOcupacional)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionocupacional SET cooMotGru=$cooMotGru WHERE idValoracionOcupacional=$idValoracionOcupacional"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setcooMotFin($cooMotFin,$idValoracionOcupacional)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionocupacional SET cooMotFin=$cooMotFin WHERE idValoracionOcupacional=$idValoracionOcupacional"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setdesOcuRutDia($desOcuRutDia,$idValoracionOcupacional)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionocupacional SET desOcuRutDia=$desOcuRutDia WHERE idValoracionOcupacional=$idValoracionOcupacional"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setdesOcuAutCuid($desOcuAutCuid,$idValoracionOcupacional)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionocupacional SET desOcuAutCuid=$desOcuAutCuid WHERE idValoracionOcupacional=$idValoracionOcupacional"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setdesOcuParMan($desOcuParMan,$idValoracionOcupacional)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionocupacional SET desOcuParMan=$desOcuParMan WHERE idValoracionOcupacional=$idValoracionOcupacional"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setdesOcuDilMan($desOcuDilMan,$idValoracionOcupacional)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionocupacional SET desOcuDilMan=$desOcuDilMan WHERE idValoracionOcupacional=$idValoracionOcupacional"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setdesOcuUsoTieLib($desOcuUsoTieLib,$idValoracionOcupacional)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionocupacional SET desOcuUsoTieLib=$desOcuUsoTieLib WHERE idValoracionOcupacional=$idValoracionOcupacional"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setdesOcuApoNegFam($desOcuApoNegFam,$idValoracionOcupacional)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionocupacional SET desOcuApoNegFam=$desOcuApoNegFam WHERE idValoracionOcupacional=$idValoracionOcupacional"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setdiaOcu($diaOcu,$idValoracionOcupacional)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionocupacional SET diaOcu=$diaOcu WHERE idValoracionOcupacional=$idValoracionOcupacional"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setdiagnostico($diagnostico,$idValoracionOcupacional)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionocupacional SET diagnostico=$diagnostico WHERE idValoracionOcupacional=$idValoracionOcupacional"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setproOcupacional($proOcupacional,$idValoracionOcupacional)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionocupacional SET proOcupacional=$proOcupacional WHERE idValoracionOcupacional=$idValoracionOcupacional"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setobservaciones($observaciones,$idValoracionOcupacional)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionocupacional SET observaciones=$observaciones WHERE idValoracionOcupacional=$idValoracionOcupacional"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setprofesional($profesional,$idValoracionOcupacional)
	{
		
		if($result=$bd->insertarDatos("UPDATE valoracionocupacional SET profesional=$profesional WHERE idValoracionOcupacional=$idValoracionOcupacional"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function dibujarFormularioIngresovaloracionocupacional()
	{
		echo "<form role='form'>";

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>idValoracionOcupacional</label>

                                <input type='email' class='form-control' id='idValoracionOcupacional' placeholder='idValoracionOcupacional'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>consulta</label>

                                <input type='email' class='form-control' id='consulta' placeholder='consulta'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>antPsi</label>

                                <input type='email' class='form-control' id='antPsi' placeholder='antPsi'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>obsNeu</label>

                                <input type='email' class='form-control' id='obsNeu' placeholder='obsNeu'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>tonMus</label>

                                <input type='email' class='form-control' id='tonMus' placeholder='tonMus'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>intRef</label>

                                <input type='email' class='form-control' id='intRef' placeholder='intRef'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>segVis</label>

                                <input type='email' class='form-control' id='segVis' placeholder='segVis'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>patFunMov</label>

                                <input type='email' class='form-control' id='patFunMov' placeholder='patFunMov'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>patIntMov</label>

                                <input type='email' class='form-control' id='patIntMov' placeholder='patIntMov'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>cooMotGru</label>

                                <input type='email' class='form-control' id='cooMotGru' placeholder='cooMotGru'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>cooMotFin</label>

                                <input type='email' class='form-control' id='cooMotFin' placeholder='cooMotFin'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>desOcuRutDia</label>

                                <input type='email' class='form-control' id='desOcuRutDia' placeholder='desOcuRutDia'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>desOcuAutCuid</label>

                                <input type='email' class='form-control' id='desOcuAutCuid' placeholder='desOcuAutCuid'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>desOcuParMan</label>

                                <input type='email' class='form-control' id='desOcuParMan' placeholder='desOcuParMan'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>desOcuDilMan</label>

                                <input type='email' class='form-control' id='desOcuDilMan' placeholder='desOcuDilMan'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>desOcuUsoTieLib</label>

                                <input type='email' class='form-control' id='desOcuUsoTieLib' placeholder='desOcuUsoTieLib'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>desOcuApoNegFam</label>

                                <input type='email' class='form-control' id='desOcuApoNegFam' placeholder='desOcuApoNegFam'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>diaOcu</label>

                                <input type='email' class='form-control' id='diaOcu' placeholder='diaOcu'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>diagnostico</label>

                                <input type='email' class='form-control' id='diagnostico' placeholder='diagnostico'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>proOcupacional</label>

                                <input type='email' class='form-control' id='proOcupacional' placeholder='proOcupacional'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>observaciones</label>

                                <input type='email' class='form-control' id='observaciones' placeholder='observaciones'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>profesional</label>

                                <input type='email' class='form-control' id='profesional' placeholder='profesional'>

                            </div>";

                

                echo "<button type='submit' class='btn btn-default' onclick='ingresarNuevovaloracionocupacional();return false;'>Ingresar</button>";

           echo "</form>";
	}

	function consultarTodosvaloracionocupacional()
	{
		$bd=BD::getInstance();
		if($result=$bd->extraerDatos("SELECT * FROM valoracionocupacional"))
		{
			echo "<div class='panel panel-default'><div class='panel-heading'>Nombre de la Tabla</div> <table class='table'><thead><tr><th>idValoracionOcupacional</th><th>consulta</th><th>antPsi</th><th>obsNeu</th><th>tonMus</th><th>intRef</th><th>segVis</th><th>patFunMov</th><th>patIntMov</th><th>cooMotGru</th><th>cooMotFin</th><th>desOcuRutDia</th><th>desOcuAutCuid</th><th>desOcuParMan</th><th>desOcuDilMan</th><th>desOcuUsoTieLib</th><th>desOcuApoNegFam</th><th>diaOcu</th><th>diagnostico</th><th>proOcupacional</th><th>observaciones</th><th>profesional</th><th>Accion</th></tr></thead><tbody>";

        
			while($filas = mysql_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>".$filas['idValoracionOcupacional']."</td>";
				echo "<td>".$filas['consulta']."</td>";
				echo "<td>".$filas['antPsi']."</td>";
				echo "<td>".$filas['obsNeu']."</td>";
				echo "<td>".$filas['tonMus']."</td>";
				echo "<td>".$filas['intRef']."</td>";
				echo "<td>".$filas['segVis']."</td>";
				echo "<td>".$filas['patFunMov']."</td>";
				echo "<td>".$filas['patIntMov']."</td>";
				echo "<td>".$filas['cooMotGru']."</td>";
				echo "<td>".$filas['cooMotFin']."</td>";
				echo "<td>".$filas['desOcuRutDia']."</td>";
				echo "<td>".$filas['desOcuAutCuid']."</td>";
				echo "<td>".$filas['desOcuParMan']."</td>";
				echo "<td>".$filas['desOcuDilMan']."</td>";
				echo "<td>".$filas['desOcuUsoTieLib']."</td>";
				echo "<td>".$filas['desOcuApoNegFam']."</td>";
				echo "<td>".$filas['diaOcu']."</td>";
				echo "<td>".$filas['diagnostico']."</td>";
				echo "<td>".$filas['proOcupacional']."</td>";
				echo "<td>".$filas['observaciones']."</td>";
				echo "<td>".$filas['profesional']."</td>";
				echo "<td><p>

        <a href='#' class='btn btn-primary' role='button' onclick='dibujarFormularioModificarvaloracionocupacional(".$filas['idValoracionOcupacional'].");return false;'>Editar</a>

        <a href='#' class='btn btn-primary' role='button' onclick='eliminarvaloracionocupacional(".$filas['idValoracionOcupacional'].");return false;'>Eliminar</a>

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

	function dibujarFormularioModificarvaloracionocupacional($id)
	{
		$bd=BD::getInstance();
		$result=$bd->extraerDatos("SELECT * FROM valoracionocupacional WHERE idValoracionOcupacional=".$id);
		$filas = mysql_fetch_array($result);
		echo "<form role='form'>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>idValoracionOcupacional</label>

                            <input class='form-control' type='hidden' id='idValoracionOcupacional' value='".$filas["idValoracionOcupacional"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>consulta</label>

                            <input type='email' class='form-control' id='consulta' value='".$filas["consulta"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>antPsi</label>

                            <input type='email' class='form-control' id='antPsi' value='".$filas["antPsi"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>obsNeu</label>

                            <input type='email' class='form-control' id='obsNeu' value='".$filas["obsNeu"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>tonMus</label>

                            <input type='email' class='form-control' id='tonMus' value='".$filas["tonMus"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>intRef</label>

                            <input type='email' class='form-control' id='intRef' value='".$filas["intRef"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>segVis</label>

                            <input type='email' class='form-control' id='segVis' value='".$filas["segVis"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>patFunMov</label>

                            <input type='email' class='form-control' id='patFunMov' value='".$filas["patFunMov"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>patIntMov</label>

                            <input type='email' class='form-control' id='patIntMov' value='".$filas["patIntMov"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>cooMotGru</label>

                            <input type='email' class='form-control' id='cooMotGru' value='".$filas["cooMotGru"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>cooMotFin</label>

                            <input type='email' class='form-control' id='cooMotFin' value='".$filas["cooMotFin"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>desOcuRutDia</label>

                            <input type='email' class='form-control' id='desOcuRutDia' value='".$filas["desOcuRutDia"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>desOcuAutCuid</label>

                            <input type='email' class='form-control' id='desOcuAutCuid' value='".$filas["desOcuAutCuid"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>desOcuParMan</label>

                            <input type='email' class='form-control' id='desOcuParMan' value='".$filas["desOcuParMan"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>desOcuDilMan</label>

                            <input type='email' class='form-control' id='desOcuDilMan' value='".$filas["desOcuDilMan"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>desOcuUsoTieLib</label>

                            <input type='email' class='form-control' id='desOcuUsoTieLib' value='".$filas["desOcuUsoTieLib"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>desOcuApoNegFam</label>

                            <input type='email' class='form-control' id='desOcuApoNegFam' value='".$filas["desOcuApoNegFam"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>diaOcu</label>

                            <input type='email' class='form-control' id='diaOcu' value='".$filas["diaOcu"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>diagnostico</label>

                            <input type='email' class='form-control' id='diagnostico' value='".$filas["diagnostico"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>proOcupacional</label>

                            <input type='email' class='form-control' id='proOcupacional' value='".$filas["proOcupacional"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>observaciones</label>

                            <input type='email' class='form-control' id='observaciones' value='".$filas["observaciones"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>profesional</label>

                            <input type='email' class='form-control' id='profesional' value='".$filas["profesional"]."'>

                        </div>";

                echo "<button type='submit' class='btn btn-default' type='submit' onclick='modificarvaloracionocupacional($id);return false;'>Modificar</button></form>";

           
	}
}
?>