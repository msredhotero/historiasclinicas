<?php


include ('includes/funciones.php');
include ('includes/funcionesJugadores.php');
include ('includes/funcionesEquipos.php');
include ('includes/funcionesGrupos.php');
include ('includes/funcionesZonasEquipos.php');
include ('includes/generadorfixturefijo.php');
include ('includes/funcionesDATOS.php');
include ('includes/funcionesPlayoff.php');

$serviciosFunciones = new Servicios();
$serviciosJugadores = new ServiciosJ();
$serviciosEquipos	= new ServiciosE();
$serviciosGrupos	= new ServiciosG();
$serviciosZonasEquipos	= new ServiciosZonasEquipos();
$serviciosDatos = new ServiciosDatos();
$serviciosPlayOff = new ServiciosPlayOff();


if (isset($_GET["id"])) {
	$idTipoTorneo = $_GET["id"];
} else {
	$idTipoTorneo = 6;
}

if (isset($_GET["zona"])) {
	$idzona = $_GET['zona'];
} else {
	$idzona = 19;
}

if (isset($_GET["fecha"])) {

	$idfecha = $_GET['fecha'];
} else {

	$idfecha = 23;
}

$torneo = $serviciosFunciones->TraerTorneosActivoPorTipo($idTipoTorneo);

$nombreTorneo = mysql_result($torneo,0,'descripciontorneo')." / ".mysql_result($torneo,0,'nombre');

$idfecha = $serviciosFunciones->UltimaFechaPorTorneoZona($idTipoTorneo,$idzona);

if (mysql_num_rows($idfecha)>0) {
	$idfecha = mysql_result($idfecha,0,0);	
} else {
	$idfecha = 23;	
}

$resTorneos = $serviciosDatos->TraerFixturePorZonaTorneo($idTipoTorneo,$idzona,$idfecha);
$resGoles = $serviciosDatos->Goleadores($idTipoTorneo,$idzona,$idfecha);
$resFairPlay = $serviciosDatos->fairplay($idTipoTorneo,$idzona,$idfecha);
$resSuspendido = $serviciosDatos->SuspendidosNuevo($idTipoTorneo,$idzona,$idfecha);
$resAmarillas = $serviciosDatos->traerAcumuladosAmarillasPorTorneoZona($idTipoTorneo,$idzona,$idfecha);
$resVallaMenosVencida = $serviciosDatos->TraerFixturePorZonaTorneoMenosGoles($idTipoTorneo,$idzona,$idfecha);


/////////////////////// PARA EL PLAYOFF /////////////////////////////////////////////

$idTorneo = mysql_result($serviciosFunciones->TraerTorneosActivoPorTipo($idTipoTorneo),0,0);



$etapas = $serviciosPlayOff->TraerEtaposPorTorneosZonas($idTorneo,$idzona);

//var_dump($etapas);
//die;
$resPlayOff = $serviciosPlayOff->traerArmarPlayOffPorEtapa($idTorneo,$idzona,1); //PlayOff
$resOctavos = $serviciosPlayOff->traerArmarPlayOffPorEtapa($idTorneo,$idzona,2); //Octavos
$resCuartos = $serviciosPlayOff->traerArmarPlayOffPorEtapa($idTorneo,$idzona,3); //Cuartos
$resSemiFinal = $serviciosPlayOff->traerArmarPlayOffPorEtapa($idTorneo,$idzona,4); //SemiFinal
$resTercer = $serviciosPlayOff->traerArmarPlayOffPorEtapa($idTorneo,$idzona,5); //Tercer puesto
$resFinal = $serviciosPlayOff->traerArmarPlayOffPorEtapa($idTorneo,$idzona,6); //Final
//traerArmarPlayOffPorEtapa($idTorneo, $idZona, $idEtapa)



$idTab = 2097;
$cadCab = '';
$cadCuerpo = '';

while ($rowEtapas = mysql_fetch_array($etapas)) { 
$idTab += 1;	
	switch ($rowEtapas['1']) {
		case 'PlayOff':
			$cadCab .= '<div class="tab-tabla " id="tab-tabla-'.$idTab.'">'.$rowEtapas['1'].'</div>';
			$cadCuerpo .= '<div class="posiciones list" id="tabla-posiciones-'.$idTab.'">
							<div class="titles">
								<div class="col col1"></div>
								<div class="col col2 col-number">EQUIPO A</div>
								<div class="col col3 col-number">RESULT. A</div>
								<div class="col col4 col-number">HORARIO</div>
								<div class="col col5 col-number">RESULT. B</div>
								<div class="col col6 col-number">EQUIPO B</div>
								<div class="col col7 col-number">FECHA</div>
							</div>
							<div class="items">';

						
								$cant = 1;
								
								while ($rowSF = mysql_fetch_array($resPlayOff)) {
	
								
								if (($cant % 2) != 0) {
								$cadCuerpo .= '<div class="item pair-row">';
								} else {
								$cadCuerpo .= '<div class="item odd-row">';
								}
									$cadCuerpo .= '<div class="col col1">
										
									</div>
									<div class="col col2 col-number">'.$rowSF['refplayoffequipo_a'].'</div>
									<div class="col col3 col-number">'.$rowSF['refplayoffresultado_a']; 
									if ($rowSF['penalesa'] != '') { 
										$cadCuerpo .= " (".$rowSF['penalesa'].")";
									}
									
									$cadCuerpo .= '</div>
									<div class="col col4 col-number">'.$rowSF['hora'].'</div>
									<div class="col col5 col-number">'.$rowSF['refplayoffresultado_b'];
									if ($rowSF['penalesb'] != '') { 
									$cadCuerpo .= " (".$rowSF['penalesb'].")"; 
									}
									
									$cadCuerpo .= '</div>
									<div class="col col6 col-number">'.$rowSF['refplayoffequipo_b'].'</div>
									<div class="col col7 col-number">'.$rowSF['fechajuego'].'</div>
					
								</div>';

									$cant = $cant + 1;
									} 

							$cadCuerpo .= '</div>
							<div class="instructions">
								<p>PJ: partidos jugados, PG: partidos ganados, PE: partidos 
					empatados, PP: partidos perdidos, GF: goles a favor, GC: goles en 
					contra, GD: diferencia de goles, PB: puntos bonus, FP: fair play, P: 
					puntos.</p>
							</div>
						</div>';
			break;
		case 'Octavos':
			$cadCab .= '<div class="tab-tabla " id="tab-tabla-'.$idTab.'">'.$rowEtapas['1'].'</div>';
			$cadCuerpo .= '<div class="posiciones list" id="tabla-posiciones-'.$idTab.'">
							<div class="titles">
								<div class="col col1"></div>
								<div class="col col2 col-number">EQUIPO A</div>
								<div class="col col3 col-number">RESULT. A</div>
								<div class="col col4 col-number">HORARIO</div>
								<div class="col col5 col-number">RESULT. B</div>
								<div class="col col6 col-number">EQUIPO B</div>
								<div class="col col7 col-number">FECHA</div>
							</div>
							<div class="items">';

						
								$cant = 1;
								
								while ($rowSF = mysql_fetch_array($resOctavos)) {
	
								
								if (($cant % 2) != 0) {
								$cadCuerpo .= '<div class="item pair-row">';
								} else {
								$cadCuerpo .= '<div class="item odd-row">';
								}
									$cadCuerpo .= '<div class="col col1">
										
									</div>
									<div class="col col2 col-number">'.$rowSF['refplayoffequipo_a'].'</div>
									<div class="col col3 col-number">'.$rowSF['refplayoffresultado_a']; 
									if ($rowSF['penalesa'] != '') { 
										$cadCuerpo .= " (".$rowSF['penalesa'].")";
									}
									
									$cadCuerpo .= '</div>
									<div class="col col4 col-number">'.$rowSF['hora'].'</div>
									<div class="col col5 col-number">'.$rowSF['refplayoffresultado_b'];
									if ($rowSF['penalesb'] != '') { 
									$cadCuerpo .= " (".$rowSF['penalesb'].")"; 
									}
									
									$cadCuerpo .= '</div>
									<div class="col col6 col-number">'.$rowSF['refplayoffequipo_b'].'</div>
									<div class="col col7 col-number">'.$rowSF['fechajuego'].'</div>
					
								</div>';

									$cant = $cant + 1;
									} 

							$cadCuerpo .= '</div>
							<div class="instructions">
								<p>PJ: partidos jugados, PG: partidos ganados, PE: partidos 
					empatados, PP: partidos perdidos, GF: goles a favor, GC: goles en 
					contra, GD: diferencia de goles, PB: puntos bonus, FP: fair play, P: 
					puntos.</p>
							</div>
						</div>';
			break;
		case 'Cuartos':
			$cadCab .= '<div class="tab-tabla " id="tab-tabla-'.$idTab.'">'.$rowEtapas['1'].'</div>';
			$cadCuerpo .= '<div class="posiciones list" id="tabla-posiciones-'.$idTab.'">
							<div class="titles">
								<div class="col col1"></div>
								<div class="col col2 col-number">EQUIPO A</div>
								<div class="col col3 col-number">RESULT. A</div>
								<div class="col col4 col-number">HORARIO</div>
								<div class="col col5 col-number">RESULT. B</div>
								<div class="col col6 col-number">EQUIPO B</div>
								<div class="col col7 col-number">FECHA</div>
							</div>
							<div class="items">';

						
								$cant = 1;
								
								while ($rowSF = mysql_fetch_array($resCuartos)) {
	
								
								if (($cant % 2) != 0) {
								$cadCuerpo .= '<div class="item pair-row">';
								} else {
								$cadCuerpo .= '<div class="item odd-row">';
								}
									$cadCuerpo .= '<div class="col col1">
										
									</div>
									<div class="col col2 col-number">'.$rowSF['refplayoffequipo_a'].'</div>
									<div class="col col3 col-number">'.$rowSF['refplayoffresultado_a']; 
									if ($rowSF['penalesa'] != '') { 
										$cadCuerpo .= " (".$rowSF['penalesa'].")";
									}
									
									$cadCuerpo .= '</div>
									<div class="col col4 col-number">'.$rowSF['hora'].'</div>
									<div class="col col5 col-number">'.$rowSF['refplayoffresultado_b'];
									if ($rowSF['penalesb'] != '') { 
									$cadCuerpo .= " (".$rowSF['penalesb'].")"; 
									}
									
									$cadCuerpo .= '</div>
									<div class="col col6 col-number">'.$rowSF['refplayoffequipo_b'].'</div>
									<div class="col col7 col-number">'.$rowSF['fechajuego'].'</div>
					
								</div>';

									$cant = $cant + 1;
									} 

							$cadCuerpo .= '</div>
							<div class="instructions">

								<p>PJ: partidos jugados, PG: partidos ganados, PE: partidos 
					empatados, PP: partidos perdidos, GF: goles a favor, GC: goles en 
					contra, GD: diferencia de goles, PB: puntos bonus, FP: fair play, P: 
					puntos.</p>
							</div>
						</div>';
			break;
		case 'SemiFinal':
			$cadCab .= '<div class="tab-tabla " id="tab-tabla-'.$idTab.'">'.$rowEtapas['1'].'</div>';
			$cadCuerpo .= '<div class="posiciones list" id="tabla-posiciones-'.$idTab.'">
							<div class="titles">
								<div class="col col1"></div>
								<div class="col col2 col-number">EQUIPO A</div>
								<div class="col col3 col-number">RESULT. A</div>
								<div class="col col4 col-number">HORARIO</div>
								<div class="col col5 col-number">RESULT. B</div>
								<div class="col col6 col-number">EQUIPO B</div>
								<div class="col col7 col-number">FECHA</div>
							</div>
							<div class="items">';

						
								$cant = 1;
								
								while ($rowSF = mysql_fetch_array($resSemiFinal)) {
	
								
								if (($cant % 2) != 0) {
								$cadCuerpo .= '<div class="item pair-row">';
								} else {
								$cadCuerpo .= '<div class="item odd-row">';
								}
									$cadCuerpo .= '<div class="col col1">
										
									</div>
									<div class="col col2 col-number">'.$rowSF['refplayoffequipo_a'].'</div>
									<div class="col col3 col-number">'.$rowSF['refplayoffresultado_a']; 
									if ($rowSF['penalesa'] != '') { 
										$cadCuerpo .= " (".$rowSF['penalesa'].")";
									}
									
									$cadCuerpo .= '</div>
									<div class="col col4 col-number">'.$rowSF['hora'].'</div>
									<div class="col col5 col-number">'.$rowSF['refplayoffresultado_b'];
									if ($rowSF['penalesb'] != '') { 
									$cadCuerpo .= " (".$rowSF['penalesb'].")"; 
									}
									
									$cadCuerpo .= '</div>
									<div class="col col6 col-number">'.$rowSF['refplayoffequipo_b'].'</div>
									<div class="col col7 col-number">'.$rowSF['fechajuego'].'</div>
					
								</div>';

									$cant = $cant + 1;
									} 

							$cadCuerpo .= '</div>
							<div class="instructions">
								<p>PJ: partidos jugados, PG: partidos ganados, PE: partidos 
					empatados, PP: partidos perdidos, GF: goles a favor, GC: goles en 
					contra, GD: diferencia de goles, PB: puntos bonus, FP: fair play, P: 
					puntos.</p>
							</div>
						</div>';
			break;
		case 'Tercer':
			$cadCab .= '<div class="tab-tabla " id="tab-tabla-'.$idTab.'">'.$rowEtapas['1'].'</div>';
			$cadCuerpo .= '<div class="posiciones list" id="tabla-posiciones-'.$idTab.'">
							<div class="titles">
								<div class="col col1"></div>
								<div class="col col2 col-number">EQUIPO A</div>
								<div class="col col3 col-number">RESULT. A</div>
								<div class="col col4 col-number">HORARIO</div>
								<div class="col col5 col-number">RESULT. B</div>
								<div class="col col6 col-number">EQUIPO B</div>
								<div class="col col7 col-number">FECHA</div>
							</div>
							<div class="items">';

						
								$cant = 1;
								
								while ($rowSF = mysql_fetch_array($resTercer)) {
	
								
								if (($cant % 2) != 0) {
								$cadCuerpo .= '<div class="item pair-row">';
								} else {
								$cadCuerpo .= '<div class="item odd-row">';
								}
									$cadCuerpo .= '<div class="col col1">
										
									</div>
									<div class="col col2 col-number">'.$rowSF['refplayoffequipo_a'].'</div>
									<div class="col col3 col-number">'.$rowSF['refplayoffresultado_a']; 
									if ($rowSF['penalesa'] != '') { 
										$cadCuerpo .= " (".$rowSF['penalesa'].")";
									}
									
									$cadCuerpo .= '</div>
									<div class="col col4 col-number">'.$rowSF['hora'].'</div>
									<div class="col col5 col-number">'.$rowSF['refplayoffresultado_b'];
									if ($rowSF['penalesb'] != '') { 
									$cadCuerpo .= " (".$rowSF['penalesb'].")"; 
									}
									
									$cadCuerpo .= '</div>
									<div class="col col6 col-number">'.$rowSF['refplayoffequipo_b'].'</div>
									<div class="col col7 col-number">'.$rowSF['fechajuego'].'</div>
					
								</div>';

									$cant = $cant + 1;
									} 

							$cadCuerpo .= '</div>
							<div class="instructions">
								<p>PJ: partidos jugados, PG: partidos ganados, PE: partidos 
					empatados, PP: partidos perdidos, GF: goles a favor, GC: goles en 
					contra, GD: diferencia de goles, PB: puntos bonus, FP: fair play, P: 
					puntos.</p>
							</div>
						</div>';
			break;
		case 'Final':
			$cadCab .= '<div class="tab-tabla " id="tab-tabla-'.$idTab.'">'.$rowEtapas['1'].'</div>';
			$cadCuerpo .= '<div class="posiciones list" id="tabla-posiciones-'.$idTab.'">
							<div class="titles">
								<div class="col col1"></div>
								<div class="col col2 col-number">EQUIPO A</div>
								<div class="col col3 col-number">RESULT. A</div>
								<div class="col col4 col-number">HORARIO</div>
								<div class="col col5 col-number">RESULT. B</div>
								<div class="col col6 col-number">EQUIPO B</div>
								<div class="col col7 col-number">FECHA</div>
							</div>
							<div class="items">';

						
								$cant = 1;
								
								while ($rowSF = mysql_fetch_array($resFinal)) {
	
								
								if (($cant % 2) != 0) {
								$cadCuerpo .= '<div class="item pair-row">';
								} else {
								$cadCuerpo .= '<div class="item odd-row">';
								}
									$cadCuerpo .= '<div class="col col1">
										
									</div>
									<div class="col col2 col-number">'.$rowSF['refplayoffequipo_a'].'</div>
									<div class="col col3 col-number">'.$rowSF['refplayoffresultado_a']; 
									if ($rowSF['penalesa'] != '') { 
										$cadCuerpo .= " (".$rowSF['penalesa'].")";
									}
									
									$cadCuerpo .= '</div>
									<div class="col col4 col-number">'.$rowSF['hora'].'</div>
									<div class="col col5 col-number">'.$rowSF['refplayoffresultado_b'];
									if ($rowSF['penalesb'] != '') { 
									$cadCuerpo .= " (".$rowSF['penalesb'].")"; 
									}
									
									$cadCuerpo .= '</div>
									<div class="col col6 col-number">'.$rowSF['refplayoffequipo_b'].'</div>
									<div class="col col7 col-number">'.$rowSF['fechajuego'].'</div>
					
								</div>';

									$cant = $cant + 1;
									} 

							$cadCuerpo .= '</div>
							<div class="instructions">
								<p>PJ: partidos jugados, PG: partidos ganados, PE: partidos 
					empatados, PP: partidos perdidos, GF: goles a favor, GC: goles en 
					contra, GD: diferencia de goles, PB: puntos bonus, FP: fair play, P: 
					puntos.</p>
							</div>
						</div>';
			break;
	}
}
///////////////////////   FIN PLAYOFF //////////////////////////////////////////////

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es" dir="ltr">
<head>
  <title>Tablas 360 Femenino</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="es" />
  
  <script type="text/javascript" src="jscss/jquery-1.8.3.min.js" charset="UTF-8"></script>
  <script type="text/javascript" src="jscss/tablas_export.js?v=2" charset="UTF-8"></script>
    	<link type="text/css" rel="stylesheet" href="jscss/tablas_export.css" media="screen" />
        
        
      	  		<style>
	  			body .list .items .item.odd-row {
	        	background-color: #F8DCEC;
	        }
	        body .list .items .item.pair-row {
	        	background-color: #EFADD3;
	        }
	        body .tabs-tablas .bottom-line {
	        	background-color: #D1288B;
	        }
	        body .tabs-tablas .tab-fairplay {
	        	background-color: #EFADD3;
	        }
	        body .tabs-tablas .tab-fairplay.selected {
	        	background-color: #D1288B;
	        	color: white;
	        }
	        body .list .titles {
	        	background-color: #D1288B;
	        }
	        body .tabs-tablas .tab-tabla {
	        	background-color: #EFADD3;
	        }
	        body .tabs-tablas .tab-tabla.selected {
	        	background-color: #D1288B;
	        	color: white;
	        }
	        body .posiciones.list .col.col1 {
	        	width: 29%;
	        }
	  	</style>
  	      </head>
<body>


  
  <div class="section-tabs">
	<div id="tab-posiciones" class="item posiciones">Posiciones</div>
	<div id="tab-goleadores" class="item goleadores">Goleadores</div>
	<div id="tab-fairplay" class="item fairplay">Fair Play</div>
	<div id="tab-vallamenosvencida" class="item vallamenosvencida selected">Valla menos vencida</div>
		  </div>
  <div style="display: none;" class="posiciones-wrapper section">
    	<div class="tabs-posiciones tabs-tablas">
      	<div class="tab-tabla selected" id="tab-tabla-2097"><?php echo $nombreTorneo; ?></div>
  	    	<!-- otras etapas -->
            <?php echo $cadCab; ?>
  	    <div class="bottom-line"></div>
</div>
<div class="tablas-posiciones">
	<div class="posiciones list" id="tabla-posiciones-2097">
    	<div class="titles">
    		<div class="col col1"></div>
    		<div class="col col2 col-number">PJ</div>
    		<div class="col col3 col-number">PG</div>
    		<div class="col col4 col-number">PE</div>
    		<div class="col col5 col-number">PP</div>
    		<div class="col col6 col-number">GF</div>
    		<div class="col col7 col-number">GC</div>
    		<div class="col col8 col-number">GD</div>
    		<div class="col col9 col-number">PB</div>
    		    			<div class="col col-fp col-number">FP</div>
    		    		<div class="col col10 col-number">P</div>
    	</div>
<div class="items">
    <?php
	
	$cant = 1;
	
	while ($row = mysql_fetch_array($resTorneos)) {
	?>
    
    <?php if (($cant % 2) != 0) { ?>
    <div class="item pair-row">
    <?php } else { ?>
    <div class="item odd-row">
    <?php } ?>
        <div class="col col1">
            <?php echo $row['nombre']; ?>
        </div>
        <div class="col col2 col-number"><?php echo $row['partidos']; ?></div>
        <div class="col col3 col-number"><?php echo $row['ganados']; ?></div>
        <div class="col col4 col-number"><?php echo $row['empatados']; ?></div>
        <div class="col col5 col-number"><?php echo $row['perdidos']; ?></div>
        <div class="col col6 col-number"><?php echo $row['golesafavor']; ?></div>
        <div class="col col7 col-number"><?php echo $row['golesencontra']; ?></div>
        <div class="col col8 col-number"><?php echo ((integer)$row['golesafavor'] - (integer)$row['golesencontra']); ?></div>
        <div class="col col9 col-number"><?php echo $row['bonus']; ?></div>
        <div class="col col-fp col-number"><?php echo $row['puntos']; ?></div>
        <div class="col col10 col-number"><?php echo $row['pts']; ?></div>
    </div>
    
    <?php 
		$cant = $cant + 1;
		} 
	?>
    
    

</div>
    	<div class="instructions">
        	<p>PJ: partidos jugados, PG: partidos ganados, PE: partidos 
empatados, PP: partidos perdidos, GF: goles a favor, GC: goles en 
contra, GD: diferencia de goles, PB: puntos bonus, FP: fair play, P: 
puntos.</p>
        </div>
	</div>
		<?php echo $cadCuerpo; ?>
        
        
        
        
        
        
	</div>
	</div>
  </div>
  <div class="goleadores-wrapper section">
  		<div class="goleadores list">
    	<div class="titles">
    		<div class="col col1">Jugador</div>
    		<div class="col col2">Equipo</div>
    		<div class="col col3">Goles</div>
    	</div>
    	<div class="items">
        <?php
			
			$cant = 1;
			
			while ($rowG = mysql_fetch_array($resGoles)) {
			?>
			
			<?php if (($cant % 2) != 0) { ?>
			<div class="item pair-row">
			<?php } else { ?>
			<div class="item odd-row">
			<?php } ?>
            	<div class="col col1">
            		<?php echo $rowG[0]; ?>
            	</div>
            	<div class="col col2">
            		<?php echo $rowG[1]; ?>
            	</div>
            	<div class="col col3"><?php echo $rowG[2]; ?></div>
            </div>
			<?php $cant += 1; } ?>
    	</div>
	</div>
  </div>
  <div class="fairplay-wrapper section">
  	<div class="tabs-tablas">
  <div class="tab-fairplay selected" id="tab-fairplay-equipos">Equipos</div>
  <div class="tab-fairplay" id="tab-fairplay-jugadores">Jugadores</div>
  <div class="tab-fairplay" id="tab-fairplay-suspendidos">Suspendidos</div>
  <div class="bottom-line"></div>
</div>
	<div class="fairplay equipos list" id="tabla-fairplay-equipos">
    	<div class="titles">
    		<div class="col col1">Equipo</div>
    		<div class="col col3">Puntos</div>

    	</div>
    	<div class="items">
        	<?php
	
			$cant = 1;
			
			while ($rowFP = mysql_fetch_array($resFairPlay)) {
			?>
			
			<?php if (($cant % 2) != 0) { ?>
			<div class="item pair-row">
			<?php } else { ?>
			<div class="item odd-row">
			<?php } ?>
                <div class="col col1">
                	<?php echo $rowFP[0]; ?>
                </div>
                <div class="col col3"><?php echo $rowFP[1]; ?></div>

            </div>

				<?php $cant += 1; } ?>
    	</div>
	</div>
	<div class="fairplay list jugadores" id="tabla-fairplay-jugadores">
    	<div class="titles">
    		<div class="col col1">Jugador</div>
    		<div class="col col2">Equipo</div>
    		<div class="col col3"><img src="../imagenes/icoAmarilla.png" /></div>
    		<div class="col col4"><img src="../imagenes/azul.png" /></div>
    		<div class="col col5"><img src="../imagenes/icoRoja.png" /></div>
    	</div>
    	<div class="items">
        	<?php
	
			$cant = 1;
			
			while ($rowA = mysql_fetch_array($resAmarillas)) {
			?>
			
			<?php if (($cant % 2) != 0) { ?>
			<div class="item pair-row">
			<?php } else { ?>
			<div class="item odd-row">
			<?php } ?>
                <div class="col col1">
                	<?php echo $rowA['apyn']; ?>
                </div>
                <div class="col col2">
                	<?php echo $rowA['nombre']; ?>
                </div>
                <div class="col col3"><?php echo $rowA['cantidad']; ?></div>
                <div class="col col4"><?php echo $rowA['cantidadazules']; ?></div>
                <div class="col col5"><?php echo $rowA['cantidadrojas']; ?></div>
            </div>
    		<?php $cant += 1; } ?>
    		</div>
	</div>
	<div class="fairplay list suspendidos" id="tabla-fairplay-suspendidos">
    	<div class="titles">
    		<div class="col col1">Jugador</div>
    		<div class="col col2">Equipo</div>
            <div class="col col3">Motivos</div>
    		<div class="col col4">Partidos</div>
    	</div>
    	<div class="items">
        	<?php
	
			$cant = 1;
			
			while ($rowS = mysql_fetch_array($resSuspendido)) {
			?>
			
			<?php if (($cant % 2) != 0) { ?>
			<div class="item pair-row">
			<?php } else { ?>
			<div class="item odd-row">
			<?php } ?>

                <div class="col col1">
                	<?php echo $rowS['apyn']; ?>
                </div>
                <div class="col col2">
                	<?php echo $rowS['nombre']; ?>
                </div>
                <div class="col col3"><?php echo $rowS['motivos']; ?></div>
                <div class="col col4"><?php echo $rowS['cantidad']; ?></div>
            
            </div>
    		<?php $cant += 1; } ?>
    	</div>
	</div>
  </div>
  <div style="display: block;" class="vallamenosvencida-wrapper section">
  		<div class="vallamenosvencida list">
    	<div class="titles">
    		<div class="col col1">Equipo</div>
    		<div class="col col2">Goles en contra</div>
    	</div>
    	<div class="items">
        	<?php
	
			$cant = 1;
			
			while ($rowV = mysql_fetch_array($resVallaMenosVencida)) {
			?>
			
			<?php if (($cant % 2) != 0) { ?>
			<div class="item pair-row">
			<?php } else { ?>
			<div class="item odd-row">
			<?php } ?>

                    <div class="col col1">
                        <?php echo $rowV['nombre']; ?>
                    </div>
                    <div class="col col2"><?php echo $rowV['golesencontra']; ?></div>
                </div>
            <?php $cant += 1; } ?>
    		</div>
	</div>
  </div>
  
  </div>
 <!-- <div class="section-tabs">
	<div id="tab-posiciones" class="item selected posiciones">Posiciones</div>
	<div id="tab-goleadores" class="item goleadores">Goleadores</div>
	<div id="tab-fairplay" class="item fairplay">Fair Play</div>
	<div id="tab-vallamenosvencida" class="item vallamenosvencida">Valla menos vencida</div>
		  </div>
  <div class="posiciones-wrapper section">
    	<div class="tabs-posiciones tabs-tablas">
      	<div class="tab-tabla selected" id="tab-tabla-2280">Grupo A</div>
  	    	<div class="tab-tabla " id="tab-tabla-2281">Grupo B</div>
  	    	<div class="tab-tabla " id="tab-tabla-2282">Grupo C</div>
  	    	<div class="tab-tabla " id="tab-tabla-2286">Grupo D</div>
  	    	<div class="tab-tabla " id="tab-tabla-2321">Grupo E</div>
  	    	<div class="tab-tabla " id="tab-tabla-2372">Copa de Oro - G. A</div>
  	    	<div class="tab-tabla " id="tab-tabla-2373">Copa de Oro - G. B</div>
  	    	<div class="tab-tabla " id="tab-tabla-2374">Copa de Plata - G.A</div>
  	    	<div class="tab-tabla " id="tab-tabla-2375">Copa de Plata - G.B</div>
  	    <div class="bottom-line"></div>
</div>
<div class="tablas-posiciones">
	<div class="posiciones list" id="tabla-posiciones-2280">
    	<div class="titles">
    		<div class="col col1"></div>
    		<div class="col col2 col-number">PJ</div>
    		<div class="col col3 col-number">PG</div>
    		<div class="col col4 col-number">PE</div>
    		<div class="col col5 col-number">PP</div>
    		<div class="col col6 col-number">GF</div>
    		<div class="col col7 col-number">GC</div>
    		<div class="col col8 col-number">GD</div>
    		<div class="col col9 col-number">PB</div>
    		    			<div class="col col-fp col-number">FP</div>
    		    		<div class="col col10 col-number">P</div>
    	</div>
    	<div class="items">
    		    		    			<div class="item pair-row">
    				<div class="col col1">
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/2064" target="_top">Las Colombianas</a>
    					    				</div>
    				<div class="col col2 col-number">3</div>
    				<div class="col col3 col-number">2</div>
    				<div class="col col4 col-number">0</div>
    				<div class="col col5 col-number">1</div>
    				<div class="col col6 col-number">13</div>
    				<div class="col col7 col-number">3</div>
    				<div class="col col8 col-number">10</div>
    				<div class="col col9 col-number">3</div>
    				    					<div class="col col-fp col-number">0</div>
    				    				<div class="col col10 col-number">7</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/2249" target="_top">Malfatti FC</a>
    					    				</div>
    				<div class="col col2 col-number">3</div>
    				<div class="col col3 col-number">2</div>
    				<div class="col col4 col-number">0</div>
    				<div class="col col5 col-number">1</div>
    				<div class="col col6 col-number">6</div>
    				<div class="col col7 col-number">4</div>
    				<div class="col col8 col-number">2</div>
    				<div class="col col9 col-number">3</div>
    				    					<div class="col col-fp col-number">0</div>
    				    				<div class="col col10 col-number">7</div>
    			</div>
    			    		    			<div class="item pair-row">
    				<div class="col col1">
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/2063" target="_top">All Pinks</a>
    					    				</div>
    				<div class="col col2 col-number">3</div>
    				<div class="col col3 col-number">2</div>
    				<div class="col col4 col-number">0</div>
    				<div class="col col5 col-number">1</div>
    				<div class="col col6 col-number">5</div>
    				<div class="col col7 col-number">3</div>
    				<div class="col col8 col-number">2</div>
    				<div class="col col9 col-number">3</div>
    				    					<div class="col col-fp col-number">0</div>
    				    				<div class="col col10 col-number">7</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/2443" target="_top">Las Turcas</a>
    					    				</div>
    				<div class="col col2 col-number">3</div>
    				<div class="col col3 col-number">0</div>
    				<div class="col col4 col-number">0</div>
    				<div class="col col5 col-number">3</div>
    				<div class="col col6 col-number">2</div>
    				<div class="col col7 col-number">16</div>
    				<div class="col col8 col-number">-14</div>
    				<div class="col col9 col-number">2</div>
    				    					<div class="col col-fp col-number">0</div>
    				    				<div class="col col10 col-number">2</div>
    			</div>
    			    		    	</div>
    	<div class="instructions">
        	<p>PJ: partidos jugados, PG: partidos ganados, PE: partidos empatados, PP: partidos perdidos, GF: goles a favor, GC: goles en contra, GD: diferencia de goles, PB: puntos bonus, FP: fair play, P: puntos.</p>
        </div>
	</div>
		<div class="posiciones list" id="tabla-posiciones-2281">
    	<div class="titles">
    		<div class="col col1"></div>
    		<div class="col col2 col-number">PJ</div>
    		<div class="col col3 col-number">PG</div>
    		<div class="col col4 col-number">PE</div>
    		<div class="col col5 col-number">PP</div>
    		<div class="col col6 col-number">GF</div>
    		<div class="col col7 col-number">GC</div>
    		<div class="col col8 col-number">GD</div>
    		<div class="col col9 col-number">PB</div>
    		    			<div class="col col-fp col-number">FP</div>
    		    		<div class="col col10 col-number">P</div>
    	</div>
    	<div class="items">
    		    		    			<div class="item pair-row">
    				<div class="col col1">
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/2413" target="_top">Traca FC</a>
    					    				</div>
    				<div class="col col2 col-number">3</div>
    				<div class="col col3 col-number">3</div>
    				<div class="col col4 col-number">0</div>
    				<div class="col col5 col-number">0</div>
    				<div class="col col6 col-number">16</div>
    				<div class="col col7 col-number">2</div>
    				<div class="col col8 col-number">14</div>
    				<div class="col col9 col-number">3</div>
    				    					<div class="col col-fp col-number">0</div>
    				    				<div class="col col10 col-number">9</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/1233" target="_top">Drink Team</a>
    					    				</div>
    				<div class="col col2 col-number">3</div>
    				<div class="col col3 col-number">2</div>
    				<div class="col col4 col-number">0</div>
    				<div class="col col5 col-number">1</div>
    				<div class="col col6 col-number">8</div>
    				<div class="col col7 col-number">9</div>
    				<div class="col col8 col-number">-1</div>
    				<div class="col col9 col-number">3</div>
    				    					<div class="col col-fp col-number">0</div>
    				    				<div class="col col10 col-number">7</div>
    			</div>
    			    		    			<div class="item pair-row">
    				<div class="col col1">
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/2781" target="_top">Liverfull</a>
    					    				</div>
    				<div class="col col2 col-number">3</div>
    				<div class="col col3 col-number">0</div>
    				<div class="col col4 col-number">0</div>
    				<div class="col col5 col-number">3</div>
    				<div class="col col6 col-number">2</div>
    				<div class="col col7 col-number">7</div>
    				<div class="col col8 col-number">-5</div>
    				<div class="col col9 col-number">3</div>
    				    					<div class="col col-fp col-number">0</div>
    				    				<div class="col col10 col-number">3</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/2833" target="_top">A pedal</a>
    					    				</div>
    				<div class="col col2 col-number">3</div>
    				<div class="col col3 col-number">1</div>
    				<div class="col col4 col-number">0</div>
    				<div class="col col5 col-number">2</div>
    				<div class="col col6 col-number">2</div>
    				<div class="col col7 col-number">10</div>
    				<div class="col col8 col-number">-8</div>
    				<div class="col col9 col-number">1</div>
    				    					<div class="col col-fp col-number">4</div>
    				    				<div class="col col10 col-number">3</div>
    			</div>
    			    		    	</div>
    	<div class="instructions">
        	<p>PJ: partidos jugados, PG: partidos ganados, PE: partidos empatados, PP: partidos perdidos, GF: goles a favor, GC: goles en contra, GD: diferencia de goles, PB: puntos bonus, FP: fair play, P: puntos.</p>
        </div>
	</div>
		<div class="posiciones list" id="tabla-posiciones-2282">
    	<div class="titles">
    		<div class="col col1"></div>
    		<div class="col col2 col-number">PJ</div>
    		<div class="col col3 col-number">PG</div>
    		<div class="col col4 col-number">PE</div>
    		<div class="col col5 col-number">PP</div>
    		<div class="col col6 col-number">GF</div>
    		<div class="col col7 col-number">GC</div>
    		<div class="col col8 col-number">GD</div>
    		<div class="col col9 col-number">PB</div>
    		    			<div class="col col-fp col-number">FP</div>
    		    		<div class="col col10 col-number">P</div>
    	</div>
    	<div class="items">
    		    		    			<div class="item pair-row">
    				<div class="col col1">
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/2835" target="_top">Todas al arco</a>
    					    				</div>
    				<div class="col col2 col-number">3</div>
    				<div class="col col3 col-number">3</div>
    				<div class="col col4 col-number">0</div>
    				<div class="col col5 col-number">0</div>
    				<div class="col col6 col-number">16</div>
    				<div class="col col7 col-number">3</div>
    				<div class="col col8 col-number">13</div>
    				<div class="col col9 col-number">3</div>
    				    					<div class="col col-fp col-number">0</div>
    				    				<div class="col col10 col-number">9</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/2836" target="_top">Noble Rejunte</a>
    					    				</div>
    				<div class="col col2 col-number">3</div>
    				<div class="col col3 col-number">1</div>
    				<div class="col col4 col-number">0</div>
    				<div class="col col5 col-number">2</div>
    				<div class="col col6 col-number">7</div>
    				<div class="col col7 col-number">9</div>
    				<div class="col col8 col-number">-2</div>
    				<div class="col col9 col-number">3</div>
    				    					<div class="col col-fp col-number">0</div>
    				    				<div class="col col10 col-number">5</div>
    			</div>
    			    		    			<div class="item pair-row">
    				<div class="col col1">
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/2783" target="_top">Bomba Molotov</a>
    					    				</div>
    				<div class="col col2 col-number">3</div>
    				<div class="col col3 col-number">1</div>
    				<div class="col col4 col-number">0</div>
    				<div class="col col5 col-number">2</div>
    				<div class="col col6 col-number">6</div>
    				<div class="col col7 col-number">11</div>
    				<div class="col col8 col-number">-5</div>
    				<div class="col col9 col-number">2</div>
    				    					<div class="col col-fp col-number">2</div>
    				    				<div class="col col10 col-number">4</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/2837" target="_top">Jumanji</a>
    					    				</div>
    				<div class="col col2 col-number">3</div>
    				<div class="col col3 col-number">1</div>
    				<div class="col col4 col-number">0</div>
    				<div class="col col5 col-number">2</div>
    				<div class="col col6 col-number">5</div>
    				<div class="col col7 col-number">11</div>
    				<div class="col col8 col-number">-6</div>
    				<div class="col col9 col-number">2</div>
    				    					<div class="col col-fp col-number">2</div>
    				    				<div class="col col10 col-number">4</div>
    			</div>
    			    		    	</div>
    	<div class="instructions">
        	<p>PJ: partidos jugados, PG: partidos ganados, PE: partidos empatados, PP: partidos perdidos, GF: goles a favor, GC: goles en contra, GD: diferencia de goles, PB: puntos bonus, FP: fair play, P: puntos.</p>
        </div>
	</div>
		<div class="posiciones list" id="tabla-posiciones-2286">
    	<div class="titles">
    		<div class="col col1"></div>
    		<div class="col col2 col-number">PJ</div>
    		<div class="col col3 col-number">PG</div>
    		<div class="col col4 col-number">PE</div>
    		<div class="col col5 col-number">PP</div>
    		<div class="col col6 col-number">GF</div>
    		<div class="col col7 col-number">GC</div>
    		<div class="col col8 col-number">GD</div>
    		<div class="col col9 col-number">PB</div>
    		    			<div class="col col-fp col-number">FP</div>
    		    		<div class="col col10 col-number">P</div>
    	</div>
    	<div class="items">
    		    		    			<div class="item pair-row">
    				<div class="col col1">
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/2411" target="_top">TNT</a>
    					    				</div>
    				<div class="col col2 col-number">3</div>
    				<div class="col col3 col-number">3</div>
    				<div class="col col4 col-number">0</div>
    				<div class="col col5 col-number">0</div>
    				<div class="col col6 col-number">17</div>
    				<div class="col col7 col-number">2</div>
    				<div class="col col8 col-number">15</div>
    				<div class="col col9 col-number">3</div>
    				    					<div class="col col-fp col-number">0</div>
    				    				<div class="col col10 col-number">9</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/2250" target="_top">La Famosa Banda</a>
    					    				</div>
    				<div class="col col2 col-number">3</div>
    				<div class="col col3 col-number">2</div>
    				<div class="col col4 col-number">0</div>
    				<div class="col col5 col-number">1</div>
    				<div class="col col6 col-number">9</div>
    				<div class="col col7 col-number">6</div>
    				<div class="col col8 col-number">3</div>
    				<div class="col col9 col-number">3</div>
    				    					<div class="col col-fp col-number">0</div>
    				    				<div class="col col10 col-number">7</div>
    			</div>
    			    		    			<div class="item pair-row">
    				<div class="col col1">
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/2251" target="_top">Angelitas Pachorras</a>
    					    				</div>
    				<div class="col col2 col-number">3</div>
    				<div class="col col3 col-number">1</div>
    				<div class="col col4 col-number">0</div>
    				<div class="col col5 col-number">2</div>
    				<div class="col col6 col-number">7</div>
    				<div class="col col7 col-number">12</div>
    				<div class="col col8 col-number">-5</div>
    				<div class="col col9 col-number">3</div>
    				    					<div class="col col-fp col-number">0</div>
    				    				<div class="col col10 col-number">5</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/2416" target="_top">Hasta la casa FC</a>
    					    				</div>
    				<div class="col col2 col-number">3</div>
    				<div class="col col3 col-number">0</div>
    				<div class="col col4 col-number">0</div>
    				<div class="col col5 col-number">3</div>
    				<div class="col col6 col-number">3</div>
    				<div class="col col7 col-number">16</div>
    				<div class="col col8 col-number">-13</div>
    				<div class="col col9 col-number">2</div>
    				    					<div class="col col-fp col-number">2</div>
    				    				<div class="col col10 col-number">2</div>
    			</div>
    			    		    	</div>
    	<div class="instructions">
        	<p>PJ: partidos jugados, PG: partidos ganados, PE: partidos empatados, PP: partidos perdidos, GF: goles a favor, GC: goles en contra, GD: diferencia de goles, PB: puntos bonus, FP: fair play, P: puntos.</p>
        </div>
	</div>
		<div class="posiciones list" id="tabla-posiciones-2321">
    	<div class="titles">
    		<div class="col col1"></div>
    		<div class="col col2 col-number">PJ</div>
    		<div class="col col3 col-number">PG</div>
    		<div class="col col4 col-number">PE</div>
    		<div class="col col5 col-number">PP</div>
    		<div class="col col6 col-number">GF</div>
    		<div class="col col7 col-number">GC</div>
    		<div class="col col8 col-number">GD</div>
    		<div class="col col9 col-number">PB</div>
    		    			<div class="col col-fp col-number">FP</div>
    		    		<div class="col col10 col-number">P</div>
    	</div>
    	<div class="items">
    		    		    			<div class="item pair-row">
    				<div class="col col1">
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/2779" target="_top">Las quetupé</a>
    					    				</div>
    				<div class="col col2 col-number">3</div>
    				<div class="col col3 col-number">3</div>
    				<div class="col col4 col-number">0</div>
    				<div class="col col5 col-number">0</div>
    				<div class="col col6 col-number">13</div>
    				<div class="col col7 col-number">1</div>
    				<div class="col col8 col-number">12</div>
    				<div class="col col9 col-number">3</div>
    				    					<div class="col col-fp col-number">0</div>
    				    				<div class="col col10 col-number">9</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/2065" target="_top">Las Churris</a>
    					    				</div>
    				<div class="col col2 col-number">3</div>
    				<div class="col col3 col-number">2</div>
    				<div class="col col4 col-number">0</div>
    				<div class="col col5 col-number">1</div>
    				<div class="col col6 col-number">6</div>
    				<div class="col col7 col-number">5</div>
    				<div class="col col8 col-number">1</div>
    				<div class="col col9 col-number">2</div>
    				    					<div class="col col-fp col-number">2</div>
    				    				<div class="col col10 col-number">6</div>
    			</div>
    			    		    			<div class="item pair-row">
    				<div class="col col1">
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/2415" target="_top">Somos Nosotras</a>
    					    				</div>
    				<div class="col col2 col-number">3</div>
    				<div class="col col3 col-number">1</div>
    				<div class="col col4 col-number">0</div>
    				<div class="col col5 col-number">2</div>
    				<div class="col col6 col-number">6</div>
    				<div class="col col7 col-number">4</div>
    				<div class="col col8 col-number">2</div>
    				<div class="col col9 col-number">3</div>
    				    					<div class="col col-fp col-number">0</div>
    				    				<div class="col col10 col-number">5</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/2439" target="_top">Animana FC</a>
    					    				</div>
    				<div class="col col2 col-number">3</div>
    				<div class="col col3 col-number">0</div>
    				<div class="col col4 col-number">0</div>
    				<div class="col col5 col-number">3</div>
    				<div class="col col6 col-number">0</div>
    				<div class="col col7 col-number">15</div>
    				<div class="col col8 col-number">-15</div>
    				<div class="col col9 col-number">0</div>
    				    					<div class="col col-fp col-number">6</div>
    				    				<div class="col col10 col-number">0</div>
    			</div>
    			    		    	</div>
    	<div class="instructions">
        	<p>PJ: partidos jugados, PG: partidos ganados, PE: partidos empatados, PP: partidos perdidos, GF: goles a favor, GC: goles en contra, GD: diferencia de goles, PB: puntos bonus, FP: fair play, P: puntos.</p>
        </div>
	</div>
		<div class="posiciones list" id="tabla-posiciones-2372">
    	<div class="titles">
    		<div class="col col1"></div>
    		<div class="col col2 col-number">PJ</div>
    		<div class="col col3 col-number">PG</div>
    		<div class="col col4 col-number">PE</div>
    		<div class="col col5 col-number">PP</div>
    		<div class="col col6 col-number">GF</div>
    		<div class="col col7 col-number">GC</div>
    		<div class="col col8 col-number">GD</div>
    		<div class="col col9 col-number">PB</div>
    		    			<div class="col col-fp col-number">FP</div>
    		    		<div class="col col10 col-number">P</div>
    	</div>
    	<div class="items">
    		    		    			<div class="item pair-row">
    				<div class="col col1">
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/2250" target="_top">La Famosa Banda</a>
    					    				</div>
    				<div class="col col2 col-number">1</div>
    				<div class="col col3 col-number">1</div>
    				<div class="col col4 col-number">0</div>
    				<div class="col col5 col-number">0</div>
    				<div class="col col6 col-number">4</div>
    				<div class="col col7 col-number">0</div>
    				<div class="col col8 col-number">4</div>
    				<div class="col col9 col-number">1</div>
    				    					<div class="col col-fp col-number">0</div>
    				    				<div class="col col10 col-number">3</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/2413" target="_top">Traca FC</a>
    					    				</div>
    				<div class="col col2 col-number">1</div>
    				<div class="col col3 col-number">0</div>
    				<div class="col col4 col-number">0</div>
    				<div class="col col5 col-number">1</div>
    				<div class="col col6 col-number">0</div>
    				<div class="col col7 col-number">4</div>
    				<div class="col col8 col-number">-4</div>
    				<div class="col col9 col-number">1</div>
    				    					<div class="col col-fp col-number">0</div>
    				    				<div class="col col10 col-number">1</div>
    			</div>
    			    		    			<div class="item pair-row">
    				<div class="col col1">
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/2779" target="_top">Las quetupé</a>
    					    				</div>
    				<div class="col col2 col-number">0</div>
    				<div class="col col3 col-number">0</div>
    				<div class="col col4 col-number">0</div>
    				<div class="col col5 col-number">0</div>
    				<div class="col col6 col-number">0</div>
    				<div class="col col7 col-number">0</div>
    				<div class="col col8 col-number">0</div>
    				<div class="col col9 col-number">0</div>
    				    					<div class="col col-fp col-number">0</div>
    				    				<div class="col col10 col-number">0</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/1233" target="_top">Drink Team</a>
    					    				</div>
    				<div class="col col2 col-number">0</div>
    				<div class="col col3 col-number">0</div>
    				<div class="col col4 col-number">0</div>
    				<div class="col col5 col-number">0</div>
    				<div class="col col6 col-number">0</div>
    				<div class="col col7 col-number">0</div>
    				<div class="col col8 col-number">0</div>
    				<div class="col col9 col-number">0</div>
    				    					<div class="col col-fp col-number">0</div>
    				    				<div class="col col10 col-number">0</div>
    			</div>
    			    		    	</div>
    	<div class="instructions">
        	<p>PJ: partidos jugados, PG: partidos ganados, PE: partidos empatados, PP: partidos perdidos, GF: goles a favor, GC: goles en contra, GD: diferencia de goles, PB: puntos bonus, FP: fair play, P: puntos.</p>
        </div>
	</div>
		<div class="posiciones list" id="tabla-posiciones-2373">
    	<div class="titles">
    		<div class="col col1"></div>
    		<div class="col col2 col-number">PJ</div>
    		<div class="col col3 col-number">PG</div>
    		<div class="col col4 col-number">PE</div>
    		<div class="col col5 col-number">PP</div>
    		<div class="col col6 col-number">GF</div>
    		<div class="col col7 col-number">GC</div>
    		<div class="col col8 col-number">GD</div>
    		<div class="col col9 col-number">PB</div>
    		    			<div class="col col-fp col-number">FP</div>
    		    		<div class="col col10 col-number">P</div>
    	</div>
    	<div class="items">
    		    		    			<div class="item pair-row">
    				<div class="col col1">
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/2064" target="_top">Las Colombianas</a>
    					    				</div>
    				<div class="col col2 col-number">1</div>
    				<div class="col col3 col-number">1</div>
    				<div class="col col4 col-number">0</div>
    				<div class="col col5 col-number">0</div>
    				<div class="col col6 col-number">4</div>
    				<div class="col col7 col-number">2</div>
    				<div class="col col8 col-number">2</div>
    				<div class="col col9 col-number">1</div>
    				    					<div class="col col-fp col-number">0</div>
    				    				<div class="col col10 col-number">3</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/2835" target="_top">Todas al arco</a>
    					    				</div>
    				<div class="col col2 col-number">1</div>
    				<div class="col col3 col-number">0</div>
    				<div class="col col4 col-number">0</div>
    				<div class="col col5 col-number">1</div>
    				<div class="col col6 col-number">2</div>
    				<div class="col col7 col-number">4</div>
    				<div class="col col8 col-number">-2</div>
    				<div class="col col9 col-number">1</div>
    				    					<div class="col col-fp col-number">0</div>
    				    				<div class="col col10 col-number">1</div>
    			</div>
    			    		    			<div class="item pair-row">
    				<div class="col col1">
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/2249" target="_top">Malfatti FC</a>
    					    				</div>
    				<div class="col col2 col-number">0</div>
    				<div class="col col3 col-number">0</div>
    				<div class="col col4 col-number">0</div>
    				<div class="col col5 col-number">0</div>
    				<div class="col col6 col-number">0</div>
    				<div class="col col7 col-number">0</div>
    				<div class="col col8 col-number">0</div>
    				<div class="col col9 col-number">0</div>
    				    					<div class="col col-fp col-number">0</div>
    				    				<div class="col col10 col-number">0</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/2411" target="_top">TNT</a>
    					    				</div>
    				<div class="col col2 col-number">0</div>
    				<div class="col col3 col-number">0</div>
    				<div class="col col4 col-number">0</div>
    				<div class="col col5 col-number">0</div>
    				<div class="col col6 col-number">0</div>
    				<div class="col col7 col-number">0</div>
    				<div class="col col8 col-number">0</div>
    				<div class="col col9 col-number">0</div>
    				    					<div class="col col-fp col-number">0</div>
    				    				<div class="col col10 col-number">0</div>
    			</div>
    			    		    	</div>
    	<div class="instructions">
        	<p>PJ: partidos jugados, PG: partidos ganados, PE: partidos empatados, PP: partidos perdidos, GF: goles a favor, GC: goles en contra, GD: diferencia de goles, PB: puntos bonus, FP: fair play, P: puntos.</p>
        </div>
	</div>
		<div class="posiciones list" id="tabla-posiciones-2374">
    	<div class="titles">
    		<div class="col col1"></div>
    		<div class="col col2 col-number">PJ</div>
    		<div class="col col3 col-number">PG</div>
    		<div class="col col4 col-number">PE</div>
    		<div class="col col5 col-number">PP</div>
    		<div class="col col6 col-number">GF</div>
    		<div class="col col7 col-number">GC</div>
    		<div class="col col8 col-number">GD</div>
    		<div class="col col9 col-number">PB</div>
    		    			<div class="col col-fp col-number">FP</div>
    		    		<div class="col col10 col-number">P</div>
    	</div>
    	<div class="items">
    		    		    			<div class="item pair-row">
    				<div class="col col1">
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/2415" target="_top">Somos Nosotras</a>
    					    				</div>
    				<div class="col col2 col-number">1</div>
    				<div class="col col3 col-number">1</div>
    				<div class="col col4 col-number">0</div>
    				<div class="col col5 col-number">0</div>
    				<div class="col col6 col-number">5</div>
    				<div class="col col7 col-number">1</div>
    				<div class="col col8 col-number">4</div>
    				<div class="col col9 col-number">1</div>
    				    					<div class="col col-fp col-number">0</div>
    				    				<div class="col col10 col-number">3</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/2781" target="_top">Liverfull</a>
    					    				</div>
    				<div class="col col2 col-number">1</div>
    				<div class="col col3 col-number">0</div>
    				<div class="col col4 col-number">0</div>
    				<div class="col col5 col-number">1</div>
    				<div class="col col6 col-number">1</div>
    				<div class="col col7 col-number">5</div>
    				<div class="col col8 col-number">-4</div>
    				<div class="col col9 col-number">1</div>
    				    					<div class="col col-fp col-number">0</div>
    				    				<div class="col col10 col-number">1</div>
    			</div>
    			    		    			<div class="item pair-row">
    				<div class="col col1">
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/2065" target="_top">Las Churris</a>
    					    				</div>
    				<div class="col col2 col-number">0</div>
    				<div class="col col3 col-number">0</div>
    				<div class="col col4 col-number">0</div>
    				<div class="col col5 col-number">0</div>
    				<div class="col col6 col-number">0</div>
    				<div class="col col7 col-number">0</div>
    				<div class="col col8 col-number">0</div>
    				<div class="col col9 col-number">0</div>
    				    					<div class="col col-fp col-number">0</div>
    				    				<div class="col col10 col-number">0</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/2063" target="_top">All Pinks</a>
    					    				</div>
    				<div class="col col2 col-number">0</div>
    				<div class="col col3 col-number">0</div>
    				<div class="col col4 col-number">0</div>
    				<div class="col col5 col-number">0</div>
    				<div class="col col6 col-number">0</div>
    				<div class="col col7 col-number">0</div>
    				<div class="col col8 col-number">0</div>
    				<div class="col col9 col-number">0</div>
    				    					<div class="col col-fp col-number">0</div>
    				    				<div class="col col10 col-number">0</div>
    			</div>
    			    		    	</div>
    	<div class="instructions">
        	<p>PJ: partidos jugados, PG: partidos ganados, PE: partidos empatados, PP: partidos perdidos, GF: goles a favor, GC: goles en contra, GD: diferencia de goles, PB: puntos bonus, FP: fair play, P: puntos.</p>
        </div>
	</div>
		<div class="posiciones list" id="tabla-posiciones-2375">
    	<div class="titles">
    		<div class="col col1"></div>
    		<div class="col col2 col-number">PJ</div>
    		<div class="col col3 col-number">PG</div>
    		<div class="col col4 col-number">PE</div>
    		<div class="col col5 col-number">PP</div>
    		<div class="col col6 col-number">GF</div>
    		<div class="col col7 col-number">GC</div>
    		<div class="col col8 col-number">GD</div>
    		<div class="col col9 col-number">PB</div>
    		    			<div class="col col-fp col-number">FP</div>
    		    		<div class="col col10 col-number">P</div>
    	</div>
    	<div class="items">
    		    		    			<div class="item pair-row">
    				<div class="col col1">
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/2251" target="_top">Angelitas Pachorras</a>
    					    				</div>
    				<div class="col col2 col-number">1</div>
    				<div class="col col3 col-number">1</div>
    				<div class="col col4 col-number">0</div>
    				<div class="col col5 col-number">0</div>
    				<div class="col col6 col-number">6</div>
    				<div class="col col7 col-number">4</div>
    				<div class="col col8 col-number">2</div>
    				<div class="col col9 col-number">1</div>
    				    					<div class="col col-fp col-number">0</div>
    				    				<div class="col col10 col-number">3</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/2783" target="_top">Bomba Molotov</a>
    					    				</div>
    				<div class="col col2 col-number">1</div>
    				<div class="col col3 col-number">0</div>
    				<div class="col col4 col-number">0</div>
    				<div class="col col5 col-number">1</div>
    				<div class="col col6 col-number">4</div>
    				<div class="col col7 col-number">6</div>
    				<div class="col col8 col-number">-2</div>
    				<div class="col col9 col-number">1</div>
    				    					<div class="col col-fp col-number">0</div>
    				    				<div class="col col10 col-number">1</div>
    			</div>
    			    		    			<div class="item pair-row">
    				<div class="col col1">
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/2836" target="_top">Noble Rejunte</a>
    					    				</div>
    				<div class="col col2 col-number">0</div>
    				<div class="col col3 col-number">0</div>
    				<div class="col col4 col-number">0</div>
    				<div class="col col5 col-number">0</div>
    				<div class="col col6 col-number">0</div>
    				<div class="col col7 col-number">0</div>
    				<div class="col col8 col-number">0</div>
    				<div class="col col9 col-number">0</div>
    				    					<div class="col col-fp col-number">0</div>
    				    				<div class="col col10 col-number">0</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/2416" target="_top">Hasta la casa FC</a>
    					    				</div>
    				<div class="col col2 col-number">0</div>
    				<div class="col col3 col-number">0</div>
    				<div class="col col4 col-number">0</div>
    				<div class="col col5 col-number">0</div>
    				<div class="col col6 col-number">0</div>
    				<div class="col col7 col-number">0</div>
    				<div class="col col8 col-number">0</div>
    				<div class="col col9 col-number">0</div>
    				    					<div class="col col-fp col-number">0</div>
    				    				<div class="col col10 col-number">0</div>
    			</div>
    			    		    	</div>
    	<div class="instructions">
        	<p>PJ: partidos jugados, PG: partidos ganados, PE: partidos empatados, PP: partidos perdidos, GF: goles a favor, GC: goles en contra, GD: diferencia de goles, PB: puntos bonus, FP: fair play, P: puntos.</p>
        </div>
	</div>
	</div>
  </div>
  <div class="goleadores-wrapper section">
  		<div class="goleadores list">
    	<div class="titles">
    		<div class="col col1">Jugador</div>
    		<div class="col col2">Equipo</div>
    		<div class="col col3">Goles</div>
    	</div>
    	<div class="items">
    		    		    			<div class="item pair-row">
    				<div class="col col1">
    					    						<a href="http://www.datafutbol.net/comunidad/jugador/27583" target="_top">Estefania Gularte</a>
    					    				</div>
    				<div class="col col2">
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/2411" target="_top">TNT</a>
    					    				</div>
    				<div class="col col3">8</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    					    						<a href="http://www.datafutbol.net/comunidad/jugador/32221" target="_top">Clara Dominguez</a>
    					    				</div>
    				<div class="col col2">
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/2835" target="_top">Todas al arco</a>
    					    				</div>
    				<div class="col col3">7</div>
    			</div>
    			    		    			<div class="item pair-row">
    				<div class="col col1">
    					    						<a href="http://www.datafutbol.net/comunidad/jugador/26428" target="_top">Agostina Guazzoni</a>
    					    				</div>
    				<div class="col col2">
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/2250" target="_top">La Famosa Banda</a>
    					    				</div>
    				<div class="col col3">6</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    					    						<a href="http://www.datafutbol.net/comunidad/jugador/31125" target="_top">Garcia Leily</a>
    					    				</div>
    				<div class="col col2">
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/2064" target="_top">Las Colombianas</a>
    					    				</div>
    				<div class="col col3">5</div>
    			</div>
    			    		    			<div class="item pair-row">
    				<div class="col col1">
    					    						<a href="http://www.datafutbol.net/comunidad/jugador/23583" target="_top">Andrea Garcia</a>
    					    				</div>
    				<div class="col col2">
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/2064" target="_top">Las Colombianas</a>
    					    				</div>
    				<div class="col col3">4</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    					    						<a href="http://www.datafutbol.net/comunidad/jugador/32220" target="_top">Macarena Galiñanes</a>
    					    				</div>
    				<div class="col col2">
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/2835" target="_top">Todas al arco</a>
    					    				</div>
    				<div class="col col3">4</div>
    			</div>
    			    		    			<div class="item pair-row">
    				<div class="col col1">
    					    						<a href="http://www.datafutbol.net/comunidad/jugador/32223" target="_top">Andrea Gimenez</a>
    					    				</div>
    				<div class="col col2">
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/2837" target="_top">Jumanji</a>
    					    				</div>
    				<div class="col col3">4</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    					    						<a href="http://www.datafutbol.net/comunidad/jugador/27777" target="_top">Rosalbina Adrian</a>
    					    				</div>
    				<div class="col col2">
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/2413" target="_top">Traca FC</a>
    					    				</div>
    				<div class="col col3">3</div>
    			</div>
    			    		    			<div class="item pair-row">
    				<div class="col col1">
    					    						<a href="http://www.datafutbol.net/comunidad/jugador/30713" target="_top">Jaqueline Amarilla</a>
    					    				</div>
    				<div class="col col2">
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/2251" target="_top">Angelitas Pachorras</a>
    					    				</div>
    				<div class="col col3">3</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    					    						<a href="http://www.datafutbol.net/comunidad/jugador/23578" target="_top">Diana Pulido</a>
    					    				</div>
    				<div class="col col2">
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/2064" target="_top">Las Colombianas</a>
    					    				</div>
    				<div class="col col3">3</div>
    			</div>
    			    		    	</div>
	</div>
  </div>
  <div class="fairplay-wrapper section">
  	<div class="tabs-tablas">
  <div class="tab-fairplay selected" id="tab-fairplay-equipos">Equipos</div>
  <div class="tab-fairplay" id="tab-fairplay-jugadores">Jugadores</div>
  <div class="tab-fairplay" id="tab-fairplay-suspendidos">Suspendidos</div>
  <div class="bottom-line"></div>
</div>
	<div class="fairplay equipos list" id="tabla-fairplay-equipos">
    	<div class="titles">
    		<div class="col col1">Equipo</div>
    		<div class="col col3"></div>
    		<div class="col col4"></div>
    		<div class="col col5"></div>
    	</div>
    	<div class="items">
    		    		    			<div class="item pair-row">
    				<div class="col col1">
	    					    					<a href="http://www.datafutbol.net/comunidad/equipo/2439" target="_top">Animana FC</a>
	    				    				</div>
    				<div class="col col3">6</div>
    				<div class="col col3">0</div>
    				<div class="col col3">0</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
	    					    					<a href="http://www.datafutbol.net/comunidad/equipo/2833" target="_top">A pedal</a>
	    				    				</div>
    				<div class="col col3">4</div>
    				<div class="col col3">0</div>
    				<div class="col col3">0</div>
    			</div>
    			    		    			<div class="item pair-row">
    				<div class="col col1">
	    					    					<a href="http://www.datafutbol.net/comunidad/equipo/2837" target="_top">Jumanji</a>
	    				    				</div>
    				<div class="col col3">2</div>
    				<div class="col col3">0</div>
    				<div class="col col3">0</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
	    					    					<a href="http://www.datafutbol.net/comunidad/equipo/2783" target="_top">Bomba Molotov</a>
	    				    				</div>
    				<div class="col col3">2</div>
    				<div class="col col3">0</div>
    				<div class="col col3">0</div>
    			</div>
    			    		    			<div class="item pair-row">
    				<div class="col col1">
	    					    					<a href="http://www.datafutbol.net/comunidad/equipo/2065" target="_top">Las Churris</a>
	    				    				</div>
    				<div class="col col3">2</div>
    				<div class="col col3">0</div>
    				<div class="col col3">0</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
	    					    					<a href="http://www.datafutbol.net/comunidad/equipo/2416" target="_top">Hasta la casa FC</a>
	    				    				</div>
    				<div class="col col3">2</div>
    				<div class="col col3">0</div>
    				<div class="col col3">0</div>
    			</div>
    			    		    	</div>
	</div>
	<div class="fairplay list jugadores" id="tabla-fairplay-jugadores">
  		<div class="empty">
			<p>A&uacute;n no hubo tarjetas en el campeonato.</p>
		</div>
	</div>
	<div class="fairplay list suspendidos" id="tabla-fairplay-suspendidos">
  		<div class="empty">
			<p>No hay suspendidos en el campeonato.</p>
		</div>
	</div>
  </div>
  <div class="vallamenosvencida-wrapper section">
  		<div class="vallamenosvencida list">
    	<div class="titles">
    		<div class="col col1">Equipo</div>
    		<div class="col col2">Goles en contra</div>
    	</div>
    	<div class="items">
    		    		    			<div class="item pair-row">
    				<div class="col col1">
    						    					<a href="http://www.datafutbol.net/comunidad/equipo/2779" target="_top">Las quetupé</a>
	    				    				</div>
    				<div class="col col2">1</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    						    					<a href="http://www.datafutbol.net/comunidad/equipo/2411" target="_top">TNT</a>
	    				    				</div>
    				<div class="col col2">2</div>
    			</div>
    			    		    			<div class="item pair-row">
    				<div class="col col1">
    						    					<a href="http://www.datafutbol.net/comunidad/equipo/2063" target="_top">All Pinks</a>
	    				    				</div>
    				<div class="col col2">3</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    						    					<a href="http://www.datafutbol.net/comunidad/equipo/2249" target="_top">Malfatti FC</a>
	    				    				</div>
    				<div class="col col2">4</div>
    			</div>
    			    		    			<div class="item pair-row">
    				<div class="col col1">
    						    					<a href="http://www.datafutbol.net/comunidad/equipo/2415" target="_top">Somos Nosotras</a>
	    				    				</div>
    				<div class="col col2">5</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    						    					<a href="http://www.datafutbol.net/comunidad/equipo/2064" target="_top">Las Colombianas</a>
	    				    				</div>
    				<div class="col col2">5</div>
    			</div>
    			    		    			<div class="item pair-row">
    				<div class="col col1">
    						    					<a href="http://www.datafutbol.net/comunidad/equipo/2065" target="_top">Las Churris</a>
	    				    				</div>
    				<div class="col col2">5</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    						    					<a href="http://www.datafutbol.net/comunidad/equipo/2250" target="_top">La Famosa Banda</a>
	    				    				</div>
    				<div class="col col2">6</div>
    			</div>
    			    		    			<div class="item pair-row">
    				<div class="col col1">
    						    					<a href="http://www.datafutbol.net/comunidad/equipo/2413" target="_top">Traca FC</a>
	    				    				</div>
    				<div class="col col2">6</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    						    					<a href="http://www.datafutbol.net/comunidad/equipo/2835" target="_top">Todas al arco</a>
	    				    				</div>
    				<div class="col col2">7</div>
    			</div>
    			    		    			<div class="item pair-row">
    				<div class="col col1">
    						    					<a href="http://www.datafutbol.net/comunidad/equipo/1233" target="_top">Drink Team</a>
	    				    				</div>
    				<div class="col col2">9</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    						    					<a href="http://www.datafutbol.net/comunidad/equipo/2836" target="_top">Noble Rejunte</a>
	    				    				</div>
    				<div class="col col2">9</div>
    			</div>
    			    		    			<div class="item pair-row">
    				<div class="col col1">
    						    					<a href="http://www.datafutbol.net/comunidad/equipo/2833" target="_top">A pedal</a>
	    				    				</div>
    				<div class="col col2">10</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    						    					<a href="http://www.datafutbol.net/comunidad/equipo/2837" target="_top">Jumanji</a>
	    				    				</div>
    				<div class="col col2">11</div>
    			</div>
    			    		    			<div class="item pair-row">
    				<div class="col col1">
    						    					<a href="http://www.datafutbol.net/comunidad/equipo/2781" target="_top">Liverfull</a>
	    				    				</div>
    				<div class="col col2">12</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    						    					<a href="http://www.datafutbol.net/comunidad/equipo/2439" target="_top">Animana FC</a>
	    				    				</div>
    				<div class="col col2">15</div>
    			</div>
    			    		    			<div class="item pair-row">
    				<div class="col col1">
    						    					<a href="http://www.datafutbol.net/comunidad/equipo/2416" target="_top">Hasta la casa FC</a>
	    				    				</div>
    				<div class="col col2">16</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    						    					<a href="http://www.datafutbol.net/comunidad/equipo/2443" target="_top">Las Turcas</a>
	    				    				</div>
    				<div class="col col2">16</div>
    			</div>
    			    		    			<div class="item pair-row">
    				<div class="col col1">
    						    					<a href="http://www.datafutbol.net/comunidad/equipo/2251" target="_top">Angelitas Pachorras</a>
	    				    				</div>
    				<div class="col col2">16</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    						    					<a href="http://www.datafutbol.net/comunidad/equipo/2783" target="_top">Bomba Molotov</a>
	    				    				</div>
    				<div class="col col2">17</div>
    			</div>
    			    		    	</div>
	</div>
  </div>
  <div class="fixture-wrapper section">
  		<div class="tabs-fixture tabs-tablas">
	  	  	  	<div class="tab-tabla selected" id="tab-tabla-2280">Grupo A</div>
	  		  	  	<div class="tab-tabla " id="tab-tabla-2281">Grupo B</div>
	  		  	  	<div class="tab-tabla " id="tab-tabla-2282">Grupo C</div>
	  		  	  	<div class="tab-tabla " id="tab-tabla-2286">Grupo D</div>
	  		  	  	<div class="tab-tabla " id="tab-tabla-2321">Grupo E</div>
	  		  	  	<div class="tab-tabla " id="tab-tabla-2372">Copa de Oro - G. A</div>
	  		  	  	<div class="tab-tabla " id="tab-tabla-2373">Copa de Oro - G. B</div>
	  		  	  	<div class="tab-tabla " id="tab-tabla-2374">Copa de Plata - G.A</div>
	  		  	  	<div class="tab-tabla " id="tab-tabla-2375">Copa de Plata - G.B</div>
	  		  	  <div class="bottom-line"></div>
	</div>
	<div class="tablas-fixture">
		<div class="fixture list" id="tabla-fixture-2280">
			<div class="fechas-selectores">
				<div class="texto">Fechas: </div>
																						<div class="fecha-selector selected" id="fecha-selector-1">1</div>
																			<div class="fecha-selector " id="fecha-selector-2">2</div>
																			<div class="fecha-selector " id="fecha-selector-3">3</div>
																</div>
    	<div class="items">
    		    			    			    				    					<div class="fecha" id="fecha-1">
	        			<div class="sub-header">
	        				<p>Fecha 1</p>
	        			</div>
	            			            			<div class="item pair-row">
	            				<div class="col col1">All Pinks</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/34329" target="_top">
	            								2 - 1	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Las Colombianas</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">18-07-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            			            			<div class="item odd-row">
	            				<div class="col col1">Malfatti FC</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/34809" target="_top">
	            								5 - 0	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Las Turcas</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">18-07-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            		            	</div>
        		    				    					<div class="fecha" id="fecha-2">
	        			<div class="sub-header">
	        				<p>Fecha 2</p>
	        			</div>
	            			            			<div class="item pair-row">
	            				<div class="col col1">All Pinks</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/34331" target="_top">
	            								3 - 1	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Las Turcas</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">25-07-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            			            			<div class="item odd-row">
	            				<div class="col col1">Malfatti FC</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/34332" target="_top">
	            								0 - 4	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Las Colombianas</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">25-07-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            		            	</div>
        		    				    					<div class="fecha" id="fecha-3">
	        			<div class="sub-header">
	        				<p>Fecha 3</p>
	        			</div>
	            			            			<div class="item pair-row">
	            				<div class="col col1">All Pinks</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/34333" target="_top">
	            								0 - 1	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Malfatti FC</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">08-08-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            			            			<div class="item odd-row">
	            				<div class="col col1">Las Colombianas</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/34334" target="_top">
	            								8 - 1	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Las Turcas</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">01-08-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            		            	</div>
        		        		        	
    	</div>
	</div>
		<div class="fixture list" id="tabla-fixture-2281">
			<div class="fechas-selectores">
				<div class="texto">Fechas: </div>
																						<div class="fecha-selector selected" id="fecha-selector-1">1</div>
																			<div class="fecha-selector " id="fecha-selector-2">2</div>
																			<div class="fecha-selector " id="fecha-selector-3">3</div>
																</div>
    	<div class="items">
    		    			    			    				    					<div class="fecha" id="fecha-1">
	        			<div class="sub-header">
	        				<p>Fecha 1</p>
	        			</div>
	            			            			<div class="item pair-row">
	            				<div class="col col1">A pedal</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/34335" target="_top">
	            								2 - 0	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Liverfull</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">18-07-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            			            			<div class="item odd-row">
	            				<div class="col col1">Traca FC</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/34336" target="_top">
	            								8 - 1	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Drink Team</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">18-07-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            		            	</div>
        		    				    					<div class="fecha" id="fecha-2">
	        			<div class="sub-header">
	        				<p>Fecha 2</p>
	        			</div>
	            			            			<div class="item pair-row">
	            				<div class="col col1">A pedal</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/34337" target="_top">
	            								0 - 5	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Traca FC</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">01-08-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            			            			<div class="item odd-row">
	            				<div class="col col1">Drink Team</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/34338" target="_top">
	            								2 - 1	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Liverfull</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">25-07-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            		            	</div>
        		    				    					<div class="fecha" id="fecha-3">
	        			<div class="sub-header">
	        				<p>Fecha 3</p>
	        			</div>
	            			            			<div class="item pair-row">
	            				<div class="col col1">A pedal</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/34339" target="_top">
	            								0 - 5	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Drink Team</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">01-08-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            			            			<div class="item odd-row">
	            				<div class="col col1">Liverfull</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/34340" target="_top">
	            								1 - 3	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Traca FC</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">01-08-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            		            	</div>
        		        		        	
    	</div>
	</div>
		<div class="fixture list" id="tabla-fixture-2282">
			<div class="fechas-selectores">
				<div class="texto">Fechas: </div>
																						<div class="fecha-selector selected" id="fecha-selector-1">1</div>
																			<div class="fecha-selector " id="fecha-selector-2">2</div>
																			<div class="fecha-selector " id="fecha-selector-3">3</div>
																</div>
    	<div class="items">
    		    			    			    				    					<div class="fecha" id="fecha-1">
	        			<div class="sub-header">
	        				<p>Fecha 1</p>
	        			</div>
	            			            			<div class="item pair-row">
	            				<div class="col col1">Bomba Molotov</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/34341" target="_top">
	            								1 - 6	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Todas al arco</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">18-07-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            			            			<div class="item odd-row">
	            				<div class="col col1">Jumanji</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/34342" target="_top">
	            								4 - 1	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Noble Rejunte</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">18-07-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            		            	</div>
        		    				    					<div class="fecha" id="fecha-2">
	        			<div class="sub-header">
	        				<p>Fecha 2</p>
	        			</div>
	            			            			<div class="item pair-row">
	            				<div class="col col1">Bomba Molotov</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/34343" target="_top">
	            								5 - 0	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Jumanji</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">01-08-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            			            			<div class="item odd-row">
	            				<div class="col col1">Noble Rejunte</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/34344" target="_top">
	            								1 - 5	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Todas al arco</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">01-08-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            		            	</div>
        		    				    					<div class="fecha" id="fecha-3">
	        			<div class="sub-header">
	        				<p>Fecha 3</p>
	        			</div>
	            			            			<div class="item pair-row">
	            				<div class="col col1">Bomba Molotov</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/34345" target="_top">
	            								0 - 5	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Noble Rejunte</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">25-07-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            			            			<div class="item odd-row">
	            				<div class="col col1">Todas al arco</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/34346" target="_top">
	            								5 - 1	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Jumanji</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">25-07-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            		            	</div>
        		        		        	
    	</div>
	</div>
		<div class="fixture list" id="tabla-fixture-2286">
			<div class="fechas-selectores">
				<div class="texto">Fechas: </div>
																						<div class="fecha-selector selected" id="fecha-selector-1">1</div>
																			<div class="fecha-selector " id="fecha-selector-2">2</div>
																			<div class="fecha-selector " id="fecha-selector-3">3</div>
																</div>
    	<div class="items">
    		    			    			    				    					<div class="fecha" id="fecha-1">
	        			<div class="sub-header">
	        				<p>Fecha 1</p>
	        			</div>
	            			            			<div class="item pair-row">
	            				<div class="col col1">Angelitas Pachorras</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/34347" target="_top">
	            								0 - 4	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">La Famosa Banda</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">18-07-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            			            			<div class="item odd-row">
	            				<div class="col col1">TNT</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/34348" target="_top">
	            								6 - 0	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Hasta la casa FC</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">18-07-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            		            	</div>
        		    				    					<div class="fecha" id="fecha-2">
	        			<div class="sub-header">
	        				<p>Fecha 2</p>
	        			</div>
	            			            			<div class="item pair-row">
	            				<div class="col col1">Angelitas Pachorras</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/34349" target="_top">
	            								2 - 8	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">TNT</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">25-07-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            			            			<div class="item odd-row">
	            				<div class="col col1">Hasta la casa FC</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/34350" target="_top">
	            								3 - 5	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">La Famosa Banda</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">25-07-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            		            	</div>
        		    				    					<div class="fecha" id="fecha-3">
	        			<div class="sub-header">
	        				<p>Fecha 3</p>
	        			</div>
	            			            			<div class="item pair-row">
	            				<div class="col col1">Angelitas Pachorras</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/34351" target="_top">
	            								5 - 0	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Hasta la casa FC</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">01-08-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            			            			<div class="item odd-row">
	            				<div class="col col1">La Famosa Banda</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/34352" target="_top">
	            								0 - 3	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">TNT</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">01-08-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            		            	</div>
        		        		        	
    	</div>
	</div>
		<div class="fixture list" id="tabla-fixture-2321">
			<div class="fechas-selectores">
				<div class="texto">Fechas: </div>
																						<div class="fecha-selector selected" id="fecha-selector-1">1</div>
																			<div class="fecha-selector " id="fecha-selector-2">2</div>
																			<div class="fecha-selector " id="fecha-selector-3">3</div>
																</div>
    	<div class="items">
    		    			    			    				    					<div class="fecha" id="fecha-1">
	        			<div class="sub-header">
	        				<p>Fecha 1</p>
	        			</div>
	            			            			<div class="item pair-row">
	            				<div class="col col1">Animana FC</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/34547" target="_top">
	            								0 - 5	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Las Churris</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">25-07-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            			            			<div class="item odd-row">
	            				<div class="col col1">Somos Nosotras</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/34548" target="_top">
	            								1 - 3	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Las quetupé</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">25-07-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            		            	</div>
        		    				    					<div class="fecha" id="fecha-2">
	        			<div class="sub-header">
	        				<p>Fecha 2</p>
	        			</div>
	            			            			<div class="item pair-row">
	            				<div class="col col1">Animana FC</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/34549" target="_top">
	            								0 - 5	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Somos Nosotras</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">08-08-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            			            			<div class="item odd-row">
	            				<div class="col col1">Las quetupé</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/34550" target="_top">
	            								5 - 0	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Las Churris</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">08-08-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            		            	</div>
        		    				    					<div class="fecha" id="fecha-3">
	        			<div class="sub-header">
	        				<p>Fecha 3</p>
	        			</div>
	            			            			<div class="item pair-row">
	            				<div class="col col1">Animana FC</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/34551" target="_top">
	            								0 - 5	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Las quetupé</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">01-08-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            			            			<div class="item odd-row">
	            				<div class="col col1">Las Churris</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/34552" target="_top">
	            								1 - 0	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Somos Nosotras</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">01-08-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            		            	</div>
        		        		        	
    	</div>
	</div>
		<div class="fixture list" id="tabla-fixture-2372">
			<div class="fechas-selectores">
				<div class="texto">Fechas: </div>
																						<div class="fecha-selector selected" id="fecha-selector-1">1</div>
																			<div class="fecha-selector " id="fecha-selector-2">2</div>
																			<div class="fecha-selector " id="fecha-selector-3">3</div>
																</div>
    	<div class="items">
    		    			    			    				    					<div class="fecha" id="fecha-1">
	        			<div class="sub-header">
	        				<p>Fecha 1</p>
	        			</div>
	            			            			<div class="item pair-row">
	            				<div class="col col1">Drink Team</div>
	            				<div class="col col2">
	            						            				      -
	            				  	            				</div>
	            				<div class="col col3">Traca FC</div>
	            					            			</div>
	            				            			            			<div class="item odd-row">
	            				<div class="col col1">La Famosa Banda</div>
	            				<div class="col col2">
	            						            				      -
	            				  	            				</div>
	            				<div class="col col3">Las quetupé</div>
	            					            			</div>
	            				            		            	</div>
        		    				    					<div class="fecha" id="fecha-2">
	        			<div class="sub-header">
	        				<p>Fecha 2</p>
	        			</div>
	            			            			<div class="item pair-row">
	            				<div class="col col1">Drink Team</div>
	            				<div class="col col2">
	            						            				      -
	            				  	            				</div>
	            				<div class="col col3">La Famosa Banda</div>
	            					            			</div>
	            				            			            			<div class="item odd-row">
	            				<div class="col col1">Las quetupé</div>
	            				<div class="col col2">
	            						            				      -
	            				  	            				</div>
	            				<div class="col col3">Traca FC</div>
	            					            			</div>
	            				            		            	</div>
        		    				    					<div class="fecha" id="fecha-3">
	        			<div class="sub-header">
	        				<p>Fecha 3</p>
	        			</div>
	            			            			<div class="item pair-row">
	            				<div class="col col1">Traca FC</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/34971" target="_top">
	            								0 - 4	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">La Famosa Banda</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">08-08-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            			            			<div class="item odd-row">
	            				<div class="col col1">Drink Team</div>
	            				<div class="col col2">
	            						            				      -
	            				  	            				</div>
	            				<div class="col col3">Las quetupé</div>
	            					            			</div>
	            				            		            	</div>
        		        		        	
    	</div>
	</div>
		<div class="fixture list" id="tabla-fixture-2373">
			<div class="fechas-selectores">
				<div class="texto">Fechas: </div>
																						<div class="fecha-selector selected" id="fecha-selector-1">1</div>
																			<div class="fecha-selector " id="fecha-selector-2">2</div>
																			<div class="fecha-selector " id="fecha-selector-3">3</div>
																</div>
    	<div class="items">
    		    			    			    				    					<div class="fecha" id="fecha-1">
	        			<div class="sub-header">
	        				<p>Fecha 1</p>
	        			</div>
	            			            			<div class="item pair-row">
	            				<div class="col col1">Las Colombianas</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/34972" target="_top">
	            								4 - 2	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Todas al arco</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">08-08-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            			            			<div class="item odd-row">
	            				<div class="col col1">Malfatti FC</div>
	            				<div class="col col2">
	            						            				      -
	            				  	            				</div>
	            				<div class="col col3">TNT</div>
	            					            			</div>
	            				            		            	</div>
        		    				    					<div class="fecha" id="fecha-2">
	        			<div class="sub-header">
	        				<p>Fecha 2</p>
	        			</div>
	            			            			<div class="item pair-row">
	            				<div class="col col1">Las Colombianas</div>
	            				<div class="col col2">
	            						            				      -
	            				  	            				</div>
	            				<div class="col col3">Malfatti FC</div>
	            					            			</div>
	            				            			            			<div class="item odd-row">
	            				<div class="col col1">TNT</div>
	            				<div class="col col2">
	            						            				      -
	            				  	            				</div>
	            				<div class="col col3">Todas al arco</div>
	            					            			</div>
	            				            		            	</div>
        		    				    					<div class="fecha" id="fecha-3">
	        			<div class="sub-header">
	        				<p>Fecha 3</p>
	        			</div>
	            			            			<div class="item pair-row">
	            				<div class="col col1">Las Colombianas</div>
	            				<div class="col col2">
	            						            				      -
	            				  	            				</div>
	            				<div class="col col3">TNT</div>
	            					            			</div>
	            				            			            			<div class="item odd-row">
	            				<div class="col col1">Todas al arco</div>
	            				<div class="col col2">
	            						            				      -
	            				  	            				</div>
	            				<div class="col col3">Malfatti FC</div>
	            					            			</div>
	            				            		            	</div>
        		        		        	
    	</div>
	</div>
		<div class="fixture list" id="tabla-fixture-2374">
			<div class="fechas-selectores">
				<div class="texto">Fechas: </div>
																						<div class="fecha-selector selected" id="fecha-selector-1">1</div>
																			<div class="fecha-selector " id="fecha-selector-2">2</div>
																			<div class="fecha-selector " id="fecha-selector-3">3</div>
																</div>
    	<div class="items">
    		    			    			    				    					<div class="fecha" id="fecha-1">
	        			<div class="sub-header">
	        				<p>Fecha 1</p>
	        			</div>
	            			            			<div class="item pair-row">
	            				<div class="col col1">All Pinks</div>
	            				<div class="col col2">
	            						            				      -
	            				  	            				</div>
	            				<div class="col col3">Somos Nosotras</div>
	            					            			</div>
	            				            			            			<div class="item odd-row">
	            				<div class="col col1">Las Churris</div>
	            				<div class="col col2">
	            						            				      -
	            				  	            				</div>
	            				<div class="col col3">Liverfull</div>
	            					            			</div>
	            				            		            	</div>
        		    				    					<div class="fecha" id="fecha-2">
	        			<div class="sub-header">
	        				<p>Fecha 2</p>
	        			</div>
	            			            			<div class="item pair-row">
	            				<div class="col col1">All Pinks</div>
	            				<div class="col col2">
	            						            				      -
	            				  	            				</div>
	            				<div class="col col3">Las Churris</div>
	            					            			</div>
	            				            			            			<div class="item odd-row">
	            				<div class="col col1">Liverfull</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/34939" target="_top">
	            								1 - 5	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Somos Nosotras</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">08-08-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            		            	</div>
        		    				    					<div class="fecha" id="fecha-3">
	        			<div class="sub-header">
	        				<p>Fecha 3</p>
	        			</div>
	            			            			<div class="item pair-row">
	            				<div class="col col1">All Pinks</div>
	            				<div class="col col2">
	            						            				      -
	            				  	            				</div>
	            				<div class="col col3">Liverfull</div>
	            					            			</div>
	            				            			            			<div class="item odd-row">
	            				<div class="col col1">Somos Nosotras</div>
	            				<div class="col col2">
	            						            				      -
	            				  	            				</div>
	            				<div class="col col3">Las Churris</div>
	            					            			</div>
	            				            		            	</div>
        		        		        	
    	</div>
	</div>
		<div class="fixture list" id="tabla-fixture-2375">
			<div class="fechas-selectores">
				<div class="texto">Fechas: </div>
																						<div class="fecha-selector selected" id="fecha-selector-1">1</div>
																			<div class="fecha-selector " id="fecha-selector-2">2</div>
																			<div class="fecha-selector " id="fecha-selector-3">3</div>
																</div>
    	<div class="items">
    		    			    			    				    					<div class="fecha" id="fecha-1">
	        			<div class="sub-header">
	        				<p>Fecha 1</p>
	        			</div>
	            			            			<div class="item pair-row">
	            				<div class="col col1">Angelitas Pachorras</div>
	            				<div class="col col2">
	            						            				      -
	            				  	            				</div>
	            				<div class="col col3">Noble Rejunte</div>
	            					            			</div>
	            				            			            			<div class="item odd-row">
	            				<div class="col col1">Bomba Molotov</div>
	            				<div class="col col2">
	            						            				      -
	            				  	            				</div>
	            				<div class="col col3">Hasta la casa FC</div>
	            					            			</div>
	            				            		            	</div>
        		    				    					<div class="fecha" id="fecha-2">
	        			<div class="sub-header">
	        				<p>Fecha 2</p>
	        			</div>
	            			            			<div class="item pair-row">
	            				<div class="col col1">Angelitas Pachorras</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/34944" target="_top">
	            								6 - 4	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Bomba Molotov</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">08-08-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            			            			<div class="item odd-row">
	            				<div class="col col1">Hasta la casa FC</div>
	            				<div class="col col2">
	            						            				      -
	            				  	            				</div>
	            				<div class="col col3">Noble Rejunte</div>
	            					            			</div>
	            				            		            	</div>
        		    				    					<div class="fecha" id="fecha-3">
	        			<div class="sub-header">
	        				<p>Fecha 3</p>
	        			</div>
	            			            			<div class="item pair-row">
	            				<div class="col col1">Angelitas Pachorras</div>
	            				<div class="col col2">
	            						            				      -
	            				  	            				</div>
	            				<div class="col col3">Hasta la casa FC</div>
	            					            			</div>
	            				            			            			<div class="item odd-row">
	            				<div class="col col1">Noble Rejunte</div>
	            				<div class="col col2">
	            						            				      -
	            				  	            				</div>
	            				<div class="col col3">Bomba Molotov</div>
	            					            			</div>
	            				            		            	</div>
        		        		        	
    	</div>
	</div>
		</div>
  </div>-->
</body>
</html>