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
	$pdf->Rect(5,5,200,281,'');
	$pdf->Image('../imagenes/logo360nuevo.png',7,10,0);
	//$pdf->Rect(5,45,200,241,'');
	$pdf->SetFont('Arial','B',9);
	$pdf->SetXY(12,5);
	$pdf->Cell(22,5,'#Planilla de partido',0,0,'C',false);
	$pdf->SetFont('Arial','',12);
	/*$pdf->SetXY(60,5);
	$pdf->Cell(30,20,strtoupper($rowE['zona']),1,0,'C',false);
	$pdf->Cell(115,20,strtoupper($rowE['descripciontorneo']),1,0,'C',false);
	$pdf->Ln();
	$pdf->SetX(60);
	$pdf->Cell(30,20,strtoupper($rowE['tipofecha']),1,0,'C',false);
	$pdf->Cell(50,20,strtoupper($rowE['cancha']),1,0,'C',false);
	$pdf->Cell(65,20,'HORARIO '.strtoupper($rowE['hora']),1,0,'C',false);*/
	$pdf->SetXY(100,7);
	$pdf->Cell(100,5,strtoupper($rowE['descripciontorneo']),0,0,'R',false);
	$pdf->SetXY(45,14);
	$pdf->Cell(22,5,'equipo',0,0,'C',false);
	$pdf->Cell(80,5,'',1,0,'C',false);
	$pdf->Cell(53,5,'Fecha: '.$rowE['fechajuego'],0,0,'R',false);
	$pdf->SetXY(45,21);
	$pdf->Cell(22,5,'capitán',0,0,'C',false);
	$pdf->Cell(80,5,'',1,0,'C',false);
	$pdf->SetXY(45,28);
	$pdf->Cell(22,5,'teléfono',0,0,'C',false);
	$pdf->Cell(80,5,'',1,0,'C',false);
	
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(163,20);
	$pdf->Cell(35,5,'Seguí el torneo en',0,0,'L',false);
	$pdf->SetXY(163,25);
	$pdf->Image('../imagenes/imgfacebookplanillas.jpg',163,25,32);
	$pdf->SetXY(161,33);
	$pdf->Cell(35,4,'/tressesentafutbol',0,0,'R',false);
	$pdf->SetXY(5,37);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(180,7,'* el capitán debe ser responsable de hcequear las estadisticas computadas y firmar la planilla. No se aceptarán reclamos posteriores.',0,0,'L',false);
	/***********************************    FIN ******************************************/
	
	/***********************************    SEGUNDO CUADRANTE ******************************************/
	$pdf->SetFillColor(155,155,155);
	$resJugadores = $serviciosJugadores->TraerJugadoresPorEquipoPlanillas($rowE['idequipo'],$reffecha);
	
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
			$pdf->Cell(49.5,5,strtoupper($rowJ['apyn']),1,0,'L',false);
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
			$pdf->Cell(49.5,5,strtoupper($rowJ['apyn']),1,0,'L',true);
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
		for ($j=$i+1;$j<29;$j++) {
			$pdf->Ln();
			$pdf->SetX(5);
			$pdf->Cell(49.5,5,'',1,0,'C',false);
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
	$pdf->Ln();
	$pdf->SetX(5);
	$pdf->Image('../imagenes/pelotaweb.png',10,191,0);
	$pdf->SetXY(18,192);
	
	$pdf->SetFont('Arial','',12);
	
	$pdf->Cell(25,5,'#Depósito',0,0,'L',false);
	
	$pdf->Line(18,197,85,197);
	/*
	$pdf->Cell(56,5,'Total Goles:',1,0,'L',false);
	$pdf->Cell(56,5,'Total Amarillas y Azules:',1,0,'L',false);
	$pdf->Cell(55,5,'Total Rojas:',1,0,'L',false);
	
	$pdf->Ln();
	$pdf->SetX(5);
	$pdf->Cell(167,25,'OBSERVACIONES',1,0,'L',false);
	$pdf->Cell(16.5,5,'ENTRO',1,0,'C',false);
	$pdf->Cell(16.5,5,'SALIO',1,0,'C',false);
	$pdf->Ln();
	$pdf->SetX(172);
	$pdf->Cell(16.5,5,'',1,0,'L',false);
	$pdf->Cell(16.5,5,'',1,0,'L',false);
	$pdf->Ln();
	$pdf->SetX(172);
	$pdf->Cell(16.5,5,'',1,0,'L',false);
	$pdf->Cell(16.5,5,'',1,0,'L',false);
	
	$pdf->Ln();
	$pdf->SetX(172);
	$pdf->Cell(16.5,5,'',1,0,'L',false);
	$pdf->Cell(16.5,5,'',1,0,'L',false);
	
	$pdf->Ln();
	$pdf->SetX(172);
	$pdf->Cell(16.5,5,'',1,0,'L',false);
	$pdf->Cell(16.5,5,'',1,0,'L',false);
	*/

	
	
	/********* LA FECHA **************////////////////
	/*$pdf->SetXY(5,260);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(90,6,'FECHA:',0,0,'L',false);
	*/
	
	
	/********* LAS FIRMAS **************////////////////
	/*$pdf->SetXY(20,278);
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(90,6,'FIRMA DELEGADO:',0,0,'L',false);
	$pdf->Cell(50,6,'ACLARACION:',0,0,'L',false);*/
}
//120 x 109



$nombreTurno = "Planillas-".$fecha.".pdf";

$pdf->Output($nombreTurno,'I');


?>

