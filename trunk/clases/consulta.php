<?php
include ('../bd/bd.php');
class consulta
{
	function insertarDatos($idConsulta,$paciente,$regimen,$eps,$tipoConsulta,$profesional,$fecha,$hora,$confirmada,$cancelada,$motivo,$factura,$autorizacion,$valor,$acompanante,$parentesco,$telefono)
	{
		$bd=BD::getInstance();
        
        $prof = explode("-",$profesional);
        
        
        $result=$bd->extraerDatos("SELECT count(*)as cantidad FROM consulta WHERE profesional=".$prof[0]." AND fecha='".$fecha."' AND hora='".$hora."' AND confirmada=1");
        $filas = mysql_fetch_array($result);

        if($filas["cantidad"]==0)
        {
            if($bd->insertarDatos("INSERT INTO consulta(paciente,regimen,eps,tipoConsulta,profesional,fecha,hora,confirmada,cancelada,motivo,factura,autorizacion,valor,acompanante,parentesco,telefono) VALUES ('$paciente','$regimen','$eps','$tipoConsulta','$profesional','$fecha','$hora','$confirmada','$cancelada','$motivo','$factura','$autorizacion','$valor','$acompanante','$parentesco','$telefono')"))
    		{
    			echo "Registro de datos exitoso";
    		}
    		else
    		{
    			echo "No se pudo hacer el registro de datos";
    		}
        }
        else
        {
            echo "La fecha y la hora no están libres";
        }
	}

	function consultarDatos($idConsulta)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("SELECT * FROM consulta WHERE idConsulta=$idConsulta"))
		{
			echo "Consulta de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la consulta de datos";
		}
	}

	function eliminarDatos($idConsulta)
	{
		$bd=BD::getInstance();
		if($bd->extraerDatos("DELETE FROM consulta WHERE idConsulta=$idConsulta"))
		{
			echo "Eliminación exitosa";
		}
		else
		{
			echo "No se pudo realizar la eliminación de datos";
		}
	}

	function actualizarDatos($idConsulta,$paciente,$regimen,$eps,$tipoConsulta,$profesional,$fecha,$hora,$confirmada,$cancelada,$motivo,$factura,$autorizacion,$valor,$acompanante,$parentesco,$telefono)
	{
		$bd=BD::getInstance();
        //echo "UPDATE consulta SET paciente='$paciente',regimen='$regimen',eps='$eps',tipoConsulta='$tipoConsulta',profesional='$profesional',fecha='$fecha',hora='$hora',confirmada='$confirmada',cancelada='$cancelada',motivo='$motivo',factura='$factura',autorizacion='$autorizacion',valor='$valor',acompanante='$acompanante',parentesco='$parentesco',telefono='$telefono' WHERE idConsulta=$idConsulta";
		
        if($paciente!="" && $paciente!="undefined"){$bd->insertarDatos("UPDATE consulta SET paciente='$paciente' WHERE idConsulta=$idConsulta");}
        if($regimen!="" && $regimen!="undefined"){$bd->insertarDatos("UPDATE consulta SET regimen='$regimen' WHERE idConsulta=$idConsulta");}
        if($eps!="" && $eps!="undefined"){$bd->insertarDatos("UPDATE consulta SET eps='$eps' WHERE idConsulta=$idConsulta");}
        if($tipoConsulta!="" && $tipoConsulta!="undefined"){$bd->insertarDatos("UPDATE consulta SET tipoConsulta='$tipoConsulta' WHERE idConsulta=$idConsulta");}
        if($profesional!="" && $profesional!="undefined"){$bd->insertarDatos("UPDATE consulta SET profesional='$profesional' WHERE idConsulta=$idConsulta");}
        if($fecha!="" && $fecha!="undefined"){$bd->insertarDatos("UPDATE consulta SET fecha='$fecha' WHERE idConsulta=$idConsulta");}
        if($hora!="" && $hora!="undefined"){$bd->insertarDatos("UPDATE consulta SET hora='$hora' WHERE idConsulta=$idConsulta");}
        if($motivo!="" && $motivo!="undefined"){$bd->insertarDatos("UPDATE consulta SET motivo='$motivo' WHERE idConsulta=$idConsulta");}
        if($factura!="" && $factura!="undefined"){$bd->insertarDatos("UPDATE consulta SET factura='$factura' WHERE idConsulta=$idConsulta");}
        if($autorizacion!="" && $autorizacion!="undefined"){$bd->insertarDatos("UPDATE consulta SET autorizacion='$autorizacion' WHERE idConsulta=$idConsulta");}
        if($valor!="" && $valor!="undefined"){$bd->insertarDatos("UPDATE consulta SET valor='$valor' WHERE idConsulta=$idConsulta");}
        if($acompanante!="" && $acompanante!="undefined"){$bd->insertarDatos("UPDATE consulta SET acompanante='$acompanante' WHERE idConsulta=$idConsulta");}
        if($parentesco!="" && $parentesco!="undefined"){$bd->insertarDatos("UPDATE consulta SET parentesco='$parentesco' WHERE idConsulta=$idConsulta");}
        if($telefono!="" && $telefono!="undefined"){$bd->insertarDatos("UPDATE consulta SET telefono='$telefono' WHERE idConsulta=$idConsulta");}
        $bd->insertarDatos("UPDATE consulta SET confirmada='1' WHERE idConsulta=$idConsulta");
        echo "Confirmación Terminada";
	}

	function getpaciente($idConsulta)
	{
		
		if($result=$bd->insertarDatos("SELECT paciente FROM consulta WHERE idConsulta=$idConsulta"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['paciente'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getregimen($idConsulta)
	{
		
		if($result=$bd->insertarDatos("SELECT regimen FROM consulta WHERE idConsulta=$idConsulta"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['regimen'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function geteps($idConsulta)
	{
		
		if($result=$bd->insertarDatos("SELECT eps FROM consulta WHERE idConsulta=$idConsulta"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['eps'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function gettipoConsulta($idConsulta)
	{
		
		if($result=$bd->insertarDatos("SELECT tipoConsulta FROM consulta WHERE idConsulta=$idConsulta"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['tipoConsulta'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getprofesional($idConsulta)
	{
		
		if($result=$bd->insertarDatos("SELECT profesional FROM consulta WHERE idConsulta=$idConsulta"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['profesional'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getfecha($idConsulta)
	{
		
		if($result=$bd->insertarDatos("SELECT fecha FROM consulta WHERE idConsulta=$idConsulta"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['fecha'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function gethora($idConsulta)
	{
		
		if($result=$bd->insertarDatos("SELECT hora FROM consulta WHERE idConsulta=$idConsulta"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['hora'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getconfirmada($idConsulta)
	{
		
		if($result=$bd->insertarDatos("SELECT confirmada FROM consulta WHERE idConsulta=$idConsulta"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['confirmada'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getcancelada($idConsulta)
	{
		
		if($result=$bd->insertarDatos("SELECT cancelada FROM consulta WHERE idConsulta=$idConsulta"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['cancelada'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getmotivo($idConsulta)
	{
		
		if($result=$bd->insertarDatos("SELECT motivo FROM consulta WHERE idConsulta=$idConsulta"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['motivo'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getfactura($idConsulta)
	{
		
		if($result=$bd->insertarDatos("SELECT factura FROM consulta WHERE idConsulta=$idConsulta"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['factura'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getautorizacion($idConsulta)
	{
		
		if($result=$bd->insertarDatos("SELECT autorizacion FROM consulta WHERE idConsulta=$idConsulta"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['autorizacion'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getvalor($idConsulta)
	{
		
		if($result=$bd->insertarDatos("SELECT valor FROM consulta WHERE idConsulta=$idConsulta"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['valor'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getacompanante($idConsulta)
	{
		
		if($result=$bd->insertarDatos("SELECT acompanante FROM consulta WHERE idConsulta=$idConsulta"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['acompanante'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getparentesco($idConsulta)
	{
		
		if($result=$bd->insertarDatos("SELECT parentesco FROM consulta WHERE idConsulta=$idConsulta"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['parentesco'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function gettelefono($idConsulta)
	{
		
		if($result=$bd->insertarDatos("SELECT telefono FROM consulta WHERE idConsulta=$idConsulta"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['telefono'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function setpaciente($paciente,$idConsulta)
	{
		
		if($result=$bd->insertarDatos("UPDATE consulta SET paciente=$paciente WHERE idConsulta=$idConsulta"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setregimen($regimen,$idConsulta)
	{
		
		if($result=$bd->insertarDatos("UPDATE consulta SET regimen=$regimen WHERE idConsulta=$idConsulta"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function seteps($eps,$idConsulta)
	{
		
		if($result=$bd->insertarDatos("UPDATE consulta SET eps=$eps WHERE idConsulta=$idConsulta"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function settipoConsulta($tipoConsulta,$idConsulta)
	{
		
		if($result=$bd->insertarDatos("UPDATE consulta SET tipoConsulta=$tipoConsulta WHERE idConsulta=$idConsulta"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setprofesional($profesional,$idConsulta)
	{
		
		if($result=$bd->insertarDatos("UPDATE consulta SET profesional=$profesional WHERE idConsulta=$idConsulta"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setfecha($fecha,$idConsulta)
	{
		
		if($result=$bd->insertarDatos("UPDATE consulta SET fecha=$fecha WHERE idConsulta=$idConsulta"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function sethora($hora,$idConsulta)
	{
		
		if($result=$bd->insertarDatos("UPDATE consulta SET hora=$hora WHERE idConsulta=$idConsulta"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setconfirmada($confirmada,$idConsulta)
	{
		
		if($result=$bd->insertarDatos("UPDATE consulta SET confirmada=$confirmada WHERE idConsulta=$idConsulta"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setcancelada($cancelada,$idConsulta)
	{
		
		if($result=$bd->insertarDatos("UPDATE consulta SET cancelada=$cancelada WHERE idConsulta=$idConsulta"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setmotivo($motivo,$idConsulta)
	{
		
		if($result=$bd->insertarDatos("UPDATE consulta SET motivo=$motivo WHERE idConsulta=$idConsulta"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setfactura($factura,$idConsulta)
	{
		
		if($result=$bd->insertarDatos("UPDATE consulta SET factura=$factura WHERE idConsulta=$idConsulta"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setautorizacion($autorizacion,$idConsulta)
	{
		
		if($result=$bd->insertarDatos("UPDATE consulta SET autorizacion=$autorizacion WHERE idConsulta=$idConsulta"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setvalor($valor,$idConsulta)
	{
		
		if($result=$bd->insertarDatos("UPDATE consulta SET valor=$valor WHERE idConsulta=$idConsulta"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setacompanante($acompanante,$idConsulta)
	{
		
		if($result=$bd->insertarDatos("UPDATE consulta SET acompanante=$acompanante WHERE idConsulta=$idConsulta"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setparentesco($parentesco,$idConsulta)
	{
		
		if($result=$bd->insertarDatos("UPDATE consulta SET parentesco=$parentesco WHERE idConsulta=$idConsulta"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function settelefono($telefono,$idConsulta)
	{
		
		if($result=$bd->insertarDatos("UPDATE consulta SET telefono=$telefono WHERE idConsulta=$idConsulta"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function dibujarFormularioIngresoconsulta()
	{
        include "../pages/cita/solicitarCita.php";
	}

	function consultarTodosconsulta()
	{
        include "../pages/cita/listarCita.php";
	}

	function dibujarFormularioModificarconsulta($id)
	{
		include "../pages/cita/confirmarCita.php";
	}
    
    function consultarCitasDia()
	{
		include "../pages/cita/consultasDia.php";
	}
    
    function abrirFormato($id,$consulta)
	{
        /*if($id==1){include "../pages/formatos/formato_valoracion_ocupacional.php";}
        if($id==3){include "../pages/formatos/formato_valoracion_fonoaudiologia.php";}
        if($id==4){include "../pages/formatos/formato_valoracion_trabajosocial.php";}
        if($id==5){include "../pages/formatos/valoracion_medica_2.php";}
        if($id==6){include "../pages/formatos/valoracion_odontologica.php";}*/
        if($id==8){include "../pages/formatos/formato_psicologia.php";}
        if($id==16){include "../pages/formatos/formato_evolucion.php";}
		
	}
    
    function verDisponibilidad($profesional,$fecha,$hora)
    {
        $bd=BD::getInstance();
        //echo "SELECT * FROM consulta WHERE profesional=".$profesional." AND fecha='".$fecha."' AND hora='".$hora."'";
        $hora=null;
        $hora[0][0]="08:00AM";$hora[0][1]="0";
        $hora[1][0]="08:15AM";$hora[1][1]="0";
        $hora[2][0]="08:30AM";$hora[2][]="0";
        $hora[3][0]="08:45AM";$hora[3][1]="0";
        $hora[4][0]="09:00AM";$hora[4][1]="0";
        $hora[5][0]="09:15AM";$hora[5][1]="0";
        $hora[6][0]="09:30AM";$hora[6][1]="0";
        $hora[7][0]="09:45AM";$hora[7][1]="0";
        $hora[8][0]="10:00AM";$hora[8][1]="0";
        $hora[9][0]="10:15AM";$hora[9][1]="0";
        $hora[10][0]="10:30AM";$hora[10][1]="0";
        $hora[11][0]="10:45AM";$hora[11][1]="0";
        $hora[12][0]="11:00AM";$hora[12][1]="0";
        $hora[13][0]="11:15AM";$hora[13][1]="0";
        $hora[14][0]="11:30AM";$hora[14][1]="0";
        $hora[15][0]="11:45AM";$hora[15][1]="0";
        $hora[16][0]="12:00AM";$hora[16][1]="0";
        $hora[17][0]="12:15AM";$hora[17][1]="0";
        $hora[18][0]="12:30AM";$hora[18][1]="0";
        $hora[19][0]="12:45AM";$hora[19][1]="0";
        $hora[20][0]="01:00PM";$hora[20][1]="0";
        $hora[21][0]="01:15PM";$hora[21][1]="0";
        $hora[22][0]="01:30PM";$hora[22][1]="0";
        $hora[23][0]="01:45PM";$hora[23][1]="0";
        $hora[24][0]="02:00PM";$hora[24][1]="0";
        $hora[25][0]="02:15PM";$hora[25][1]="0";
        $hora[26][0]="02:30PM";$hora[26][1]="0";
        $hora[27][0]="02:45PM";$hora[27][1]="0";
        $hora[28][0]="03:00PM";$hora[28][1]="0";
        $hora[29][0]="03:15PM";$hora[29][1]="0";
        $hora[30][0]="03:30PM";$hora[30][1]="0";
        $hora[31][0]="03:45PM";$hora[31][1]="0";
        $hora[32][0]="04:00PM";$hora[32][1]="0";
        $hora[33][0]="04:15PM";$hora[33][1]="0";
        $hora[34][0]="04:30PM";$hora[34][1]="0";
        $hora[35][0]="04:45PM";$hora[35][1]="0";
        $hora[36][0]="05:00PM";$hora[36][1]="0";
        $hora[37][0]="05:15PM";$hora[37][1]="0";
        $hora[38][0]="05:30PM";$hora[38][1]="0";
        $hora[39][0]="05:45PM";$hora[39][1]="0";
        
        echo "<table>";
        
        for($i=0; $i<40; $i++)
        {
            $result=$bd->extraerDatos("SELECT count(*)as cantidad FROM consulta WHERE profesional=".$profesional." AND fecha='".$fecha."' AND hora='".$hora[$i][0]."'");
            $filas = mysql_fetch_array($result);
            if($filas["cantidad"]!=0)
            {
                $hora[$i][1]=1;
            }
        }
        
        for($i=0; $i<40; $i++)
        {
            if($hora[$i][1]==1)
            {
                echo "<tr><td bgcolor='F27272'><a>".$hora[$i][0]."</a></td><td>".$hora[$i][1]."</td></tr>";
            }
            else
            {
                echo "<tr><td><a href='#' onclick='asignarHCM(\"".($i+1)."\");'>".$hora[$i][0]."</a></td><td>".$hora[$i][1]."</td></tr>";
            }
        }
        
        
        echo "</table>";  
    }
    
    function mostrarFormularioReporteMensual()
    {
        include "../pages/facturacion/formulario_reporte_mensual.php";
    }
    
    function generarReporteMensual()
    {
        $bd=BD::getInstance();
        $result=$bd->extraerDatos("SELECT *, SUM(valor)as total FROM consulta GROUP BY eps;");
        
        include "../libreriaexcel/PHPExcel.php";
        
        
        $objPHPExcel = new PHPExcel();
    
       //Informacion del excel
       $objPHPExcel->
        getProperties()
        ->setCreator("mavik-soft.com gatolocostudios.com")
        ->setLastModifiedBy("mavik-soft.com gatolocostudios.com")
        ->setTitle("Reporte mensual")
        ->setSubject("Reporte")
        ->setDescription("Documento generado con un reporte mensual por eps")
        ->setKeywords("reporte excel mensual eps")
        ->setCategory("Reportes");   
        
        echo <<<EOT
        <div id="main">
            <div class="full_w">
                <div class="h_title">Valores totales facturados a las entidades</div>   
                    <form>
                        VP= Valoración Psicología<br>
                        EP= Evolución Psicología    
                    </form>
                    <table style="font-size=6px;">
            			<thead>
            				<tr>
            					<th scope="col">Entidad</th>
            					<th scope="col">Concepto</th>
            					<th scope="col">Valor unitario</th>
                                <th scope="col">Valor total</th>
            				</tr>
            			</thead>
            				
            			<tbody>
        
        
EOT;
        $i=1;
        while($filas = mysql_fetch_array($result))
		{
            $result2=$bd->extraerDatos("SELECT * FROM eps WHERE codigo='".$filas["eps"]."'");
            $filas2 = mysql_fetch_array($result2);
            
            echo "<tr>";
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$i, "Entidad");
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$i, "Concepto");
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$i, "Valor unitario");
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$i, "Valor Total");
            echo "</tr>";
            
            $i++;
			echo "<tr>";
                echo "<td>".$filas2["nombre"]."</td>";
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$i, $filas2["nombre"]);
                echo "<td></td>";
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$i, "");
                echo "<td></td>";
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$i, "");
                echo "<td></td>";
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$i, "");
            echo "</tr>";
            $i++;
            $result3=$bd->extraerDatos("SELECT * FROM consulta WHERE eps='".$filas["eps"]."'");
            while($filas3 =$filas3 = mysql_fetch_array($result3))
            {
                echo "<tr>";
                    echo "<td></td>";
                    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$i, "");
                    if($filas3["tipoConsulta"]==8){echo "<td align='center'>VP</td>";$objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$i, "VP");}
                    if($filas3["tipoConsulta"]==16){echo "<td align='center'>EP</td>";$objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$i, "EP");}
                    echo "<td align='center'>$".$filas3["valor"]."</td>";
                    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$i, $filas3["valor"]);
                    echo "<td></td>";
                    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$i, "");
                echo "</tr>";
                
                $i++;
            }
            
            echo "<tr>";
                echo "<td></td>";
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$i, "");
                echo "<td></td>";
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$i, "");
                echo "<td></td>";
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$i, "");
                echo "<td align='center'><b>$".$filas["total"]."</b></td>";
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$i, $filas["total"]);
            echo "</tr>";
            $i++;
		}
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="ejemplo1.xls"');
        header('Cache-Control: max-age=0');
         
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel2007');
        $objWriter->save('../reportemensual.xls');
        
        
                
        echo <<<EOT
                        </tbody>
                    </table>
EOT;
        echo "  <form>
                    <a target='_blank' href='reportemensual.xls'>Reporte Mensual Excel </a>
                </form>";
        echo <<<EOT
                
EOT;
                exit;                
        echo <<<EOT
                </div>
            </div>
        </div>    
        
EOT;
    }
    
    function mostrarFormularioGrafica()
    {
        include "../pages/reporte/paginaGrafica.php";
    }
}
?>