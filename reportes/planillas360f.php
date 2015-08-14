<?php

date_default_timezone_set('America/Buenos_Aires');

include ('../includes/funcionesUsuarios.php');
include ('../includes/funciones.php');
include ('../includes/funcionesHTML.php');
include ('../includes/funcionesJugadores.php');
include ('../includes/funcionesEquipos.php');
include ('../includes/funcionesGrupos.php');
include ('../includes/funcionesZonasEquipos.php');
include ('../includes/funcionesNoticias.php');
include ('../includes/funcionesDATOS.php');

$serviciosUsuarios  = new ServiciosUsuarios();
$serviciosFunciones = new Servicios();
$serviciosHTML		= new ServiciosHTML();
$serviciosJugadores = new ServiciosJ();
$serviciosEquipos	= new ServiciosE();
$serviciosGrupos	= new ServiciosG();
$serviciosZonasEquipos	= new ServiciosZonasEquipos();
$serviciosNoticias = new ServiciosNoticias();
$serviciosDatos = new ServiciosDatos();

$fecha = date('Y-m-d');

require('fpdf.php');

//$header = array("Hora", "Cancha 1", "Cancha 2", "Cancha 3");

$reffecha = $_GET['reffecha'];

$idtorneo = $_GET['reftorneo'];

$resEquipos = $serviciosFunciones->traerPlanillas($idtorneo,$reffecha);

//echo $resEquipos;





$pdf = new FPDF();
$cantidadJugadores = 0;
#Establecemos los márgenes izquierda, arriba y derecha: 
$pdf->SetMargins(2, 2 , 2); 

#Establecemos el margen inferior: 
$pdf->SetAutoPageBreak(true,1); 

while ($rowE = mysql_fetch_array($resEquipos)) {
	
	$pdf->AddPage();
	/***********************************    PRIMER CUADRANTE ******************************************/
	//$pdf->Rect(5,5,200,281,'');
	$pdf->Image('../imagenes/logo_laiguana.png',7,2,48);
	//$pdf->Rect(5,45,200,241,'');
	$pdf->SetFont('Arial','B',9);
	$pdf->SetXY(12,5);
	//$pdf->Cell(22,5,'#Planilla de partido',0,0,'C',false);
	$pdf->SetFont('Arial','',12);
	/*$pdf->SetXY(60,5);
	$pdf->Cell(30,20,strtoupper($rowE['zona']),1,0,'C',false);
	$pdf->Cell(115,20,strtoupper($rowE['descripciontorneo']),1,0,'C',false);
	$pdf->Ln();
	$pdf->SetX(60);
	$pdf->Cell(30,20,strtoupper($rowE['tipofecha']),1,0,'C',false);
	$pdf->Cell(50,20,strtoupper($rowE['cancha']),1,0,'C',false);
	$pdf->Cell(65,20,'HORARIO '.strtoupper($rowE['hora']),1,0,'C',false);*/
	$pdf->SetXY(87,7);
	$pdf->Cell(70,5,strtoupper($rowE['descripciontorneo']),1,0,'L',false);
	$pdf->Cell(20,5,' #Fecha: ',1,0,'R',false);
	$pdf->Cell(8,5,date('d',strtotime($rowE['fechajuego'])),1,0,'C',false);
	$pdf->Cell(8,5,date('m',strtotime($rowE['fechajuego'])),1,0,'C',false);
	$pdf->Cell(14,5,date('Y',strtotime($rowE['fechajuego'])),1,0,'C',false);
	$pdf->SetXY(65,14);
	$pdf->Cell(22,5,'equipo',0,0,'C',false);
	$pdf->Cell(120,5,'',1,0,'C',false);
	//$pdf->Cell(53,5,'Fecha: '.$rowE['fechajuego'],0,0,'R',false);
	$pdf->SetXY(65,21);
	$pdf->Cell(22,5,'capitán',0,0,'C',false);
	$pdf->Cell(120,5,'',1,0,'C',false);
	$pdf->SetXY(65,28);
	$pdf->Cell(22,5,'teléfono',0,0,'C',false);
	$pdf->Cell(120,5,'',1,0,'C',false);
	
	$pdf->SetFont('Arial','',10);
	//$pdf->SetXY(163,20);
	//$pdf->Cell(35,5,'Seguí el torneo en',0,0,'L',false);
	//$pdf->SetXY(163,25);
	//$pdf->Image('../imagenes/imgfacebookplanillas.jpg',163,25,32);
	//$pdf->SetXY(161,33);
	//$pdf->Cell(35,4,'/tressesentafutbol',0,0,'R',false);
	//$pdf->SetXY(5,37);
	//$pdf->SetFont('Arial','',9);
	//$pdf->Cell(180,7,'* el capitán debe ser responsable de hcequear las estadisticas computadas y firmar la planilla. No se aceptarán reclamos posteriores.',0,0,'L',false);
	/***********************************    FIN ******************************************/
	
	/***********************************    SEGUNDO CUADRANTE ******************************************/
	$pdf->SetFillColor(155,155,155);
	$resJugadores = $serviciosJugadores->TraerJugadoresPorEquipoPlanillas($rowE['idequipo'],$reffecha);
	$pdf->Ln();
	$pdf->Ln();
	$pdf->SetX(5);
	$pdf->Cell(49.5,5,'#NOMBRE Y APELLIDO',1,0,'C',false);
	$pdf->Cell(15,5,'#nro',1,0,'C',false);
	$pdf->Cell(20,5,'#DNI',1,0,'C',false);
	$pdf->Cell(25,5,'FIRMA',1,0,'C',false);
	$pdf->Cell(16,5,'TA',1,0,'C',false);
	$pdf->Cell(16,5,'Taz',1,0,'C',false);
	$pdf->Cell(16,5,'TR',1,0,'C',false);
	$pdf->Cell(16,5,'GOLES',1,0,'C',false);
	$pdf->Cell(13.5,5,'MEJOR',1,0,'C',false);
	$pdf->Cell(13,5,'JUGO',1,0,'C',false);
	
	$i = 0;
	while ($rowJ = mysql_fetch_array($resJugadores))
	{
		$pdf->SetFillColor(183,183,183);
		$i = $i+1;
		$pdf->Ln();
		$pdf->SetX(5);
		$pdf->SetFont('Arial','',7);
		if ($rowJ['suspendido'] == '0') {
			$pdf->Cell(5,5,$i,1,0,'C',false);
			$pdf->Cell(44.5,5,strtoupper($rowJ['apyn']),1,0,'L',false);
			$pdf->Cell(15,5,'',1,0,'C',false);
			$pdf->Cell(20,5,$rowJ['dni'],1,0,'C',false);
			$pdf->Cell(25,5,'',1,0,'C',false);
			$pdf->Cell(16,5,'',1,0,'C',false);
			$pdf->Cell(16,5,'',1,0,'C',false);
			$pdf->Cell(16,5,'',1,0,'C',false);
			$pdf->Cell(16,5,'',1,0,'C',false);
			$pdf->Cell(13.5,5,'',1,0,'C',false);
			$pdf->Cell(13,5,'Si/No',1,0,'C',false);
			
		} else {
			$pdf->Cell(5,5,$i,1,0,'C',false);
			$pdf->Cell(44.5,5,strtoupper($rowJ['apyn']),1,0,'L',true);
			$pdf->Cell(15,5,'',1,0,'C',true);
			$pdf->Cell(20,5,$rowJ['dni'],1,0,'C',true);
			$pdf->Cell(25,5,'',1,0,'C',true);
			$pdf->Cell(16,5,'',1,0,'C',true);
			$pdf->Cell(16,5,'',1,0,'C',true);
			$pdf->Cell(16,5,'',1,0,'C',true);
			$pdf->Cell(16,5,'',1,0,'C',true);
			$pdf->Cell(13.5,5,'',1,0,'C',true);
			$pdf->Cell(13,5,'(Susp.)',1,0,'C',true);	
		}
		if ($i == 24) {
			break;	
		}
	}
	
	if ($i < 19) {
		for ($j=$i+1;$j<19;$j++) {
			$pdf->Ln();
			$pdf->SetX(5);
			$pdf->Cell(5,5,$j,1,0,'C',false);
			$pdf->Cell(44.5,5,'',1,0,'C',false);
			$pdf->Cell(15,5,'',1,0,'C',false);
			$pdf->Cell(20,5,'',1,0,'C',false);
			$pdf->Cell(25,5,'',1,0,'C',false);
			$pdf->Cell(16,5,'',1,0,'C',false);
			$pdf->Cell(16,5,'',1,0,'C',false);
			$pdf->Cell(16,5,'',1,0,'C',false);
			$pdf->Cell(16,5,'',1,0,'C',false);
			$pdf->Cell(13.5,5,'',1,0,'C',false);
			$pdf->Cell(13,5,'',1,0,'C',false);
		}
	}
	
	
	
	
	
	/////////////////////  PARA LOS PAGOS  //////////////////////////////////////////////////////
	$yLeyanada = -20;
	
	$pdf->SetFont('Arial','B',11);
	$pdf->SetXY(5,159 + $yLeyanada);
	$pdf->Cell(200,10,strtoupper('#observaciones'),1,0,'L',false);
	
	$pdf->SetXY(5,159 + $yLeyanada + 10);
	$pdf->Cell(200,10,'',1,0,'L',false);
	
	$pdf->SetXY(5,159 + $yLeyanada + 20);
	$pdf->Cell(200,10,'',1,0,'L',false);
	
	$pdf->SetXY(5,159 + $yLeyanada + 30);
	$pdf->Cell(200,10,strtoupper('#deuda del equipo'),1,0,'L',false);
	
	$pdf->SetXY(5,159 + $yLeyanada + 40);
	$pdf->Cell(42,10,'inscripción',1,0,'C',false);
	$pdf->Cell(42,10,'0',1,0,'L',false);
	$pdf->Cell(35,10,'#ARBITRO',1,0,'L',false);
	$pdf->Cell(81,10,'',1,0,'C',false);
	
	$pdf->SetXY(5,159 + $yLeyanada + 50);
	$pdf->Cell(42,10,'depósito',1,0,'C',false);
	$pdf->Cell(42,10,'0',1,0,'L',false);
	$pdf->Cell(35,10,'#VEEDOR/A',1,0,'L',false);
	$pdf->Cell(81,10,'',1,0,'C',false);
	
	$pdf->SetXY(5,159 + $yLeyanada + 60);
	$pdf->Cell(42,10,'#PAGO',1,0,'C',false);
	$pdf->Cell(42,10,'0',1,0,'L',false);
	$pdf->Cell(35,10,'#RESULTADO',1,0,'L',false);
	$pdf->Cell(81,10,'',1,0,'C',false);
	
	
	
	$pdf->SetFillColor(200,200,200);
	
	$pdf->SetXY(5,159 + $yLeyanada + 75);
	$pdf->Cell(200,5,'',0,0,'L',true);
	$pdf->Rect(5,159 + $yLeyanada + 80,200,15);
	$pdf->Image('../imagenes/logo_laiguana_palabra.png',7,159 + $yLeyanada + 60,16);
	
	$pdf->SetXY(8,159 + $yLeyanada + 84);
	$pdf->SetTextColor(254,254,254);
	$pdf->SetFillColor(0,0,0);
	$pdf->Cell(50,8,strtoupper('#contactanos'),0,0,'C',true);
	$pdf->SetTextColor(0,0,0);
	$pdf->Image('../imagenes/monotone_email_letter_round.png',60,158 + $yLeyanada + 84,10);
	$pdf->Cell(60,8,'info@laiguanafutbol.com',0,0,'R',false);
	$pdf->Image('../imagenes/icon-blue-m-web-based.png',120,158 + $yLeyanada + 85,8);
	$pdf->Cell(53,8,'laiguanafutbol.com.ar',0,0,'R',false);

}
//120 x 109



$nombreTurno = "Planillas-".$fecha.".pdf";

$pdf->Output($nombreTurno,'I');


?>

