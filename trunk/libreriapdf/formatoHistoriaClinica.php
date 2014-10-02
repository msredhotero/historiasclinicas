<?php
//============================================================+
// File name   : example_006.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 006 for TCPDF class
//               WriteHTML and RTL support
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: WriteHTML and RTL support
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('Historia Clinica');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' ', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('dejavusans', '', 10);

// add a page
$pdf->AddPage();
// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('dejavusans', '', 10, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.

// create some HTML content
//echo "SELECT * FROM consulta WHERE paciente=".$usuario." AND (fecha>='$fechaI' AND fecha<='$fechaF') ORDER BY fecha DESC";
if($result=$bd->extraerDatos("SELECT * FROM consulta WHERE paciente=".$usuario." AND (fecha>='$fechaI' AND fecha<='$fechaF') ORDER BY fecha DESC"))
{
    $html='<table border="1" cellspacing="3" cellpadding="0">';
	
    //Nombre del paciente
    $result2=$bd->extraerDatos("SELECT * FROM paciente WHERE idPaciente=".$usuario);
    $filas2 = mysql_fetch_array($result2);
    
    //ciudad y departamento de nacimiento
    $result3=$bd->extraerDatos("SELECT  c.nombre as c, departamento.nombre as d  FROM (SELECT * FROM ciudad WHERE codigo=".$filas2["ciudadNacimiento"]." AND departamento=".$filas2["departamento"].")as c JOIN departamento ON c.departamento = departamento.codigo");
    $filas3 = mysql_fetch_array($result3);

    //edad
    list($Y,$m,$d) = explode("-",$filas2["fechaNacimiento"]);
    $edad =date("md") < $m.$d ? date("Y")-$Y-1 : date("Y")-$Y ;
    
    while($filas = mysql_fetch_array($result))
    {
        if($filas["tipoConsulta"]==8)
        {
            //Buscar la consulta en psicologia
            $result4=$bd->extraerDatos("SELECT * FROM psicologia WHERE consulta=".$filas["idConsulta"]);
            $filas4 = mysql_fetch_array($result4);
            
            $result5=$bd->extraerDatos("SELECT * FROM usuario WHERE idUsuario=".$filas["profesional"]);
            $filas5 = mysql_fetch_array($result5);
            
            $html = $html.<<<EOT
            <tr>
                <td colspan="4" align="center"><b>Evaluación Inicial Psicología</b></td>
            </tr>
            <tr>
                <th align="left"><b>Fecha de Evaluación</b></th>
                <th align="left" color="red">{$filas["fecha"]}</th>
                <th align="left"><b>Fecha de Ingreso</b></th>
                <th align="left" color="red">{$filas["fecha"]}</th>
            </tr>
            <tr>
                <th align="left"><b>Informante</b></th>
                <th align="left" color="red">{$filas["acompanante"]}</th>
                <th align="left"><b>Parentesco</b></th>
                <th align="left" color="red">{$filas["parentesco"]}</th>
            </tr>
            <tr>
                <th align="left"><b>Nombre del niño</b></th>
                <th align="left" color="red">{$filas2["nombre1"]} {$filas2["nombre2"]} {$filas2["apellido1"]} {$filas2["apellido2"]}</th>
                <th align="left"><b>Lugar y fecha de nacimiento</b></th>
                <th align="left" color="red">{$filas3["c"]} {$filas3["d"]} {$filas2["fechaNacimiento"]} </th>
            </tr>
            <tr>
                <th align="left"><b>Edad</b></th>
                <th align="left" color="red">{$edad}</th>
                <th align="left"></th>
                <th align="left"></th>
            </tr>
            <tr>
                <th align="left"><b>Descripción del Problema</b></th>
                <th align="left" color="red">{$filas4["desPsi"]}</th>
                <th align="left"><b>Tratamientos recibidos</b></th>
                <th align="left" color="red">{$filas4["traRec"]}</th>
            </tr>
            <tr>
                <th align="left"><b>Ant. Embarazo</b></th>
                <th align="left" color="red">{$filas4["antEmb"]}</th>
                <th align="left"><b>Ant. Parto</b></th>
                <th align="left" color="red">{$filas4["antPar"]}</th>
            </tr>
            <tr>
                <th align="left"><b>Ant. Des. Psicomotor</b></th>
                <th align="left" color="red">{$filas4["antDesPsi"]}</th>
                <th align="left"><b>Factores nosológicos</b></th>
                <th align="left" color="red">{$filas4["factNos"]}</th>
            </tr>
            <tr>
                <th align="left"><b>Primera infancia</b></th>
                <th align="left" color="red">{$filas4["priInf"]}</th>
                <th align="left"><b>Segunda infancia</b></th>
                <th align="left" color="red">{$filas4["segInf"]}</th>
            </tr>
            <tr>
                <th align="left"><b>Pubertad</b></th>
                <th align="left" color="red">{$filas4["pub"]}</th>
                <th align="left"><b>Adolescencia</b></th>
                <th align="left" color="red">{$filas4["ado"]}</th>
            </tr>
            <tr>
                <th align="left"><b>Familia</b></th>
                <th align="left" color="red">{$filas4["fam"]}</th>
                <th align="left"><b>Rel. entre hermanos</b></th>
                <th align="left" color="red">{$filas4["relHer"]}</th>
            </tr>
            <tr>
                <th align="left"><b>Actitud Acud. frente niño</b></th>
                <th align="left" color="red">{$filas4["actAcu"]}</th>
                <th align="left"><b>Conceptos del Acu.</b></th>
                <th align="left" color="red">{$filas4["conAcu"]}</th>
            </tr>
            <tr>
                <th align="left"><b>Exp. de la familia</b></th>
                <th align="left" color="red">{$filas4["expFam"]}</th>
                <th align="left"><b>Diag. Familiar</b></th>
                <th align="left" color="red">{$filas4["diaFam"]}</th>
            </tr>
            <tr>
                <th align="left"><b>Observaciones</b></th>
                <th align="left" color="red">{$filas4["observaciones"]}</th>
                <th align="left"><b>Concepto Psi.</b></th>
                <th align="left" color="red">{$filas4["conPsiObt"]}</th>
            </tr>
            <tr>
                <th align="left"><b>Entrevista Sem.</b></th>
                <th align="left" color="red">{$filas4["entSem"]}</th>
                <th align="left"><b>Preubas desarrollo mad.</b></th>
                <th align="left" color="red">{$filas4["pruDesMad"]}</th>
            </tr>
            <tr>
                <th align="left"><b>Otras pruebas</b></th>
                <th align="left" color="red">{$filas4["otrPru2"]}</th>
                <th align="left"><b>Concepto</b></th>
                <th align="left" color="red">{$filas4["concepto"]}</th>
            </tr>
            <tr>
                <th align="left"><b>Diag1</b></th>
                <th align="left" color="red">{$filas4["diag1"]}</th>
                <th align="left"><b>Diag2</b></th>
                <th align="left" color="red">{$filas4["diag2"]}</th>
            </tr>
            <tr>
                <th align="left"><b>Diag3</b></th>
                <th align="left" color="red">{$filas4["diag3"]}</th>
                <th align="left"><b>Profesional</b></th>
                <th align="left" color="red">{$filas5["nombre1"]} {$filas5["nombre2"]} {$filas5["apellido1"]} {$filas5["apellido2"]}</th>
            </tr>
            <tr><td colspan="4">----------------------------------------------------------------------------------------------------------------------------------</td></tr>
            <tr><td colspan="4">----------------------------------------------------------------------------------------------------------------------------------</td></tr>
EOT;
            
        }
        
        if($filas["tipoConsulta"]==16)
        {
            //Buscar la evolucion de psicologia
            //echo "SELECT * FROM evolucion WHERE consulta=".$filas["idConsulta"]." ORDER BY sesion DESC";
            $result4=$bd->extraerDatos("SELECT * FROM evolucion WHERE consulta=".$filas["idConsulta"]." ORDER BY sesion DESC");
            if(mysql_num_rows($result4))
            {
                while($filas4 = mysql_fetch_array($result4))
                {
                    
                    
                    $result5=$bd->extraerDatos("SELECT * FROM usuario WHERE idUsuario=".$filas["profesional"]);
                    $filas5 = mysql_fetch_array($result5);
                    
                    /*$result6=$bd->extraerDatos("SELECT count(*)as sesion FROM evolucion WHERE consulta=".$filas["idConsulta"]);
                    $filas6 = mysql_fetch_array($result6);
                    $sesion= $filas6["sesion"]+1;*/
        
                    $html = $html.<<<EOT
                    <tr>
                        <td colspan="4" align="center"><b>Evolución Psicología</b></td>
                    </tr>
                    <tr>
                        <th align="left"><b>Fecha y Hora</b></th>
                        <th align="left" color="red">{$filas["fecha"]} {$filas["hora"]}</th>
                        <th align="left"><b>Profesional</b></th>
                        <th align="left" color="red">{$filas5["nombre1"]} {$filas5["nombre2"]} {$filas5["apellido1"]} {$filas5["apellido2"]}</th>
                    </tr>
                    <tr>
                        <th align="left"><b>Diag1</b></th>
                        <th align="left" color="red">{$filas4["diag1"]}</th>
                        <th align="left"><b>Diag2</b></th>
                        <th align="left" color="red">{$filas4["diag2"]}</th>
                    </tr>
                    <tr>
                        <th align="left"><b>Diag3</b></th>
                        <th align="left" color="red">{$filas4["diag3"]}</th>
                    </tr>
                    <tr>
                        <td align="left" colspan="4"><b>Evolucion</b></td>
                    </tr>
                    <tr>
                        <td align="left" colspan="4" color="red">{$filas4["evolucion"]}</td>
                    </tr>
                    <tr><td colspan="4">----------------------------------------------------------------------------------------------------------------------------------</td></tr>
                    <tr><td colspan="4">----------------------------------------------------------------------------------------------------------------------------------</td></tr>
EOT;
                    //$pdf->writeHTML($html, true, false, true, false, '');
                }
            }
            
        }
        
    }
    $pdf->writeHTML($html, true, false, true, false, '');
    echo '</table>';
}

// output the HTML content
//$pdf->writeHTML($html, true, false, true, false, '');

//Close and output PDF document
$pdf->Output("../libreriapdf/prueba.pdf", 'F');
echo "<a target='_blank' href='libreriapdf/prueba.pdf'>prueba.pdf</a>";

//============================================================+
// END OF FILE
//============================================================+
