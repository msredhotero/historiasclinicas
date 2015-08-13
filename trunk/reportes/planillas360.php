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
	
	
	/////////////////////  PARA LAS LEYENDAS  //////////////////////////////////////////////////////
	$yLeyanada = -20;
	
	$pdf->Ln();
	$pdf->SetX(5);
	$pdf->Image('../imagenes/pelotaweb.png',10,161 + $yLeyanada,0);	//*//
	$pdf->SetXY(18,162 + $yLeyanada);								//*//
	
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(25,5,'#Depósito',0,0,'L',false);
	$pdf->SetFont('Arial','',14);
	$pdf->Cell(45,5,'#Muy importante!',0,0,'R',false);
	$pdf->SetFont('Arial','',8);
	$pdf->Line(18,167 + $yLeyanada,85,167 + $yLeyanada);			//*//
	$pdf->Ln();
	$pdf->SetX(19);
	$pdf->MultiCell(65,4,'En las primeras tres fechas los equipos deberán abonar el depósito, el cual se reintegrará en las Copas o Promociones al finalizar el torneo. (En caso de faltar a algún partido el equipo perderá el depósito).',0,'','');
	
	$pdf->SetFont('Arial','',12);
	$pdf->SetX(5);
	$pdf->Image('../imagenes/pelotaweb.png',10,187 + $yLeyanada,0);	//*//
	$pdf->SetXY(18,188 + $yLeyanada);								//*//
	$pdf->Cell(25,5,'#Uso de canilleras',0,0,'L',false);
	$pdf->SetFont('Arial','',7);
	$pdf->Line(18,193 + $yLeyanada,85,193 + $yLeyanada);			//*//
	$pdf->Ln();
	$pdf->SetX(19);
	$pdf->MultiCell(65,4,'El uso de canilleras será obligatorio a partir de la segunda fecha. IMPORTANTE: Si un jugador de un equipo no utiliza canilleras, o se las saca durante el partido, el equipo acumulará automáticamente una tarjeta amarilla a la Tabla Fair Play.',0,'','');
	
	$pdf->SetFont('Arial','',12);
	$pdf->SetX(5);
	$pdf->Image('../imagenes/pelotaweb.png',10,212 + $yLeyanada,0);	//*//
	$pdf->SetXY(18,213 + $yLeyanada);								//*//
	$pdf->Cell(25,5,'#Lista de Buena Fe',0,0,'L',false);
	$pdf->SetFont('Arial','',7);
	$pdf->Line(18,218 + $yLeyanada,85,218 + $yLeyanada);			//*//
	$pdf->Ln();
	$pdf->SetX(19);
	$pdf->MultiCell(65,4,'¿Cuántos jugadores nuevos puedo anotar por partido?. Se podrán incluir hasta dos jugadores nuevos por partido, hasta llegar al límite de 18 inscriptos.',0,'','');
	$pdf->SetFont('Arial','B',7);
	$pdf->SetX(19);
	$pdf->Cell(65,4,'La edad permitida es de 18 a 40 años.',0,0,'L',false);
	
	$pdf->SetFont('Arial','',12);
	$pdf->SetX(5);
	$pdf->Image('../imagenes/pelotaweb.png',10,234 + $yLeyanada,0);	//*//
	$pdf->SetXY(18,235 + $yLeyanada);								//*//
	$pdf->Cell(25,5,'#Punto Bonus / Tabla Fair Play',0,0,'L',false);
	$pdf->SetFont('Arial','',7);
	$pdf->Line(18,240 + $yLeyanada,85,240 + $yLeyanada);			//*//
	$pdf->Ln();
	$pdf->SetX(19);
	$pdf->MultiCell(65,4,'El punto bonus se otorga por presentismo y buena conducta. La tarjeta amarilla suma 1pto. a la Tabla Fair Play, la tarjeta azul 2ptos. y la tarjeta roja 3ptos.',0,'','');
	$pdf->SetFont('Arial','B',8);
	$pdf->SetX(17.5);
	$pdf->Cell(65,4,'3 amarillas = 1 fecha de sup. 1 azul = 2 amarillas',0,0,'L',false);
	///////////////////// FIN PARA LAS LEYENDAS  //////////////////////////////////////////////////////
	
	
	/////////////////////  PARA LOS PAGOS  //////////////////////////////////////////////////////
	$pdf->SetFont('Arial','B',11);
	$pdf->SetXY(89.5,159 + $yLeyanada);
	$pdf->Cell(115.5,10,'#observaciones',1,0,'L',false);
	
	$pdf->SetXY(89.5,159 + $yLeyanada + 10);
	$pdf->Cell(115.5,10,'',1,0,'L',false);
	
	$pdf->SetXY(89.5,159 + $yLeyanada + 20);
	$pdf->Cell(115.5,10,'',1,0,'L',false);
	
	$pdf->SetXY(89.5,159 + $yLeyanada + 30);
	$pdf->Image('../imagenes/pelotaweb.png',91.5,157 + $yLeyanada + 30,10);	//*//
	$pdf->Cell(77,10,'depósito acreditado',1,0,'C',false);
	$pdf->Cell(38.5,10,'',1,0,'L',false);
	
	$pdf->SetXY(89.5,159 + $yLeyanada + 40);
	$pdf->MultiCell(38.5,20,'Debe',1,'L','');
	
	$pdf->SetXY(128,159 + $yLeyanada + 40);
	$pdf->Cell(38.5,10,'inscripción',1,0,'L',false);
	$pdf->Cell(38.5,10,'',1,0,'L',false);
	
	$pdf->SetXY(128,159 + $yLeyanada + 50);
	$pdf->Cell(38.5,10,'fechas anteriores',1,0,'L',false);
	$pdf->Cell(38.5,10,'',1,0,'L',false);
	
	$pdf->SetXY(89.5,159 + $yLeyanada + 60);
	$pdf->Cell(38.5,10,'Pagó',1,0,'L',false);
	$pdf->Cell(77,10,'',1,0,'L',false);
	
	$pdf->SetXY(89.5,159 + $yLeyanada + 70);
	$pdf->Cell(77,10,'Arbitro',1,0,'L',false);
	$pdf->Cell(38.5,10,'#Rseultado Final',1,0,'C',false);
	
	$pdf->SetXY(89.5,159 + $yLeyanada + 80);
	$pdf->Cell(77,10,'Veedor',1,0,'L',false);
	$pdf->Cell(38.5,10,'-',1,0,'C',false);
	
	$pdf->SetXY(89.5,159 + $yLeyanada + 90);
	$pdf->Cell(77,10,'Firma Capitán:',1,0,'L',false);
	$pdf->Cell(38.5,10,'-',1,0,'C',false);
	/////////////////////  FIN PARA LOS PAGOS  //////////////////////////////////////////////////////
	$pdf->Line(4,159 + $yLeyanada + 101,206,159 + $yLeyanada + 101);
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

