<?php


include ('../includes/funciones.php');
include ('../includes/funcionesJugadores.php');
include ('../includes/funcionesEquipos.php');
include ('../includes/funcionesGrupos.php');
include ('../includes/funcionesZonasEquipos.php');
include ('../includes/generadorfixturefijo.php');
include ('../includes/funcionesDATOS.php');

$serviciosFunciones = new Servicios();
$serviciosJugadores = new ServiciosJ();
$serviciosEquipos	= new ServiciosE();
$serviciosGrupos	= new ServiciosG();
$serviciosZonasEquipos	= new ServiciosZonasEquipos();
$serviciosDatos = new ServiciosDatos();

if (isset($_GET["id"])) {
	$idTipoTorneo = $_GET["id"];
	$idzona = $_GET['zona'];
	$idfecha = $_GET['fecha'];
} else {
	$idTipoTorneo = 3;
	$idzona = 19;
	$idfecha = 23;
}

$resTorneos = $serviciosDatos->TraerFixturePorZonaTorneo($idTipoTorneo,$idzona,$idfecha);
$resGoles = $serviciosDatos->Goleadores($idTipoTorneo,$idzona,$idfecha);
$resFairPlay = $serviciosDatos->fairplay($idTipoTorneo,$idzona,$idfecha);
$resSuspendido = $serviciosDatos->SuspendidosNuevo($idTipoTorneo,$idzona,$idfecha);
$resAmarillas = $serviciosDatos->traerAcumuladosAmarillasPorTorneoZona($idTipoTorneo,$idzona,$idfecha);
$resVallaMenosVencida = $serviciosDatos->TraerFixturePorZonaTorneoMenosGoles($idTipoTorneo,$idzona,$idfecha);


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" dir="ltr" lang="es"><head>
  <title>Iguana | Tablas</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="language" content="es">
  
  <script type="text/javascript" src="DataFutbol%20_%20Tablas_archivos/jquery-1.js" charset="UTF-8"></script>
  <script type="text/javascript" src="DataFutbol%20_%20Tablas_archivos/tablas_export.js" charset="UTF-8"></script>
    	<link type="text/css" rel="stylesheet" href="DataFutbol%20_%20Tablas_archivos/tablas_export_new.css" media="screen">
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
      	<div class="tab-tabla selected" id="tab-tabla-2097">Futbol 5 Jueves / Torneo Apertura 2015</div>
  	    	<!--<div class="tab-tabla " id="tab-tabla-2139">Copa de Oro</div>
  	    	<div class="tab-tabla " id="tab-tabla-2140">Copa de Plata</div>-->
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
            <a href="http://www.datafutbol.net/comunidad/equipo/2784" target="_top"><?php echo $row['nombre']; ?></a>
        </div>
        <div class="col col2 col-number"><?php echo $row['partidos']; ?></div>
        <div class="col col3 col-number"><?php echo $row['ganados']; ?></div>
        <div class="col col4 col-number"><?php echo $row['empatados']; ?></div>
        <div class="col col5 col-number"><?php echo $row['perdidos']; ?></div>
        <div class="col col6 col-number"><?php echo $row['golesafavor']; ?></div>
        <div class="col col7 col-number"><?php echo $row['golesencontra']; ?></div>
        <div class="col col8 col-number"><?php echo ((integer)$row['golesafavor'] - (integer)$row['golesencontra']); ?></div>
        <div class="col col9 col-number">0</div>
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
		<!--<div class="posiciones list" id="tabla-posiciones-2139">
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
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/2785" target="_top">4 de Copas</a>
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
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/2610" target="_top">Arsenalgas</a>
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
    			    		    			<div class="item pair-row">
    				<div class="col col1">
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/1372" target="_top">Pura Pinta</a>
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
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/2784" target="_top">Yendo</a>
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
        	<p>PJ: partidos jugados, PG: partidos ganados, PE: partidos 
empatados, PP: partidos perdidos, GF: goles a favor, GC: goles en 
contra, GD: diferencia de goles, PB: puntos bonus, FP: fair play, P: 
puntos.</p>
        </div>
	</div>
		<div class="posiciones list" id="tabla-posiciones-2140">
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
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/2786" target="_top">Atlético Vermú</a>
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
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/2728" target="_top">Las Gualeyas</a>
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
    			    		    			<div class="item pair-row">
    				<div class="col col1">
    					    						<a href="http://www.datafutbol.net/comunidad/equipo/2609" target="_top">Limpiafondos</a>
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
        	<p>PJ: partidos jugados, PG: partidos ganados, PE: partidos 
empatados, PP: partidos perdidos, GF: goles a favor, GC: goles en 
contra, GD: diferencia de goles, PB: puntos bonus, FP: fair play, P: 
puntos.</p>
        </div>-->
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
    		<div class="col col3"></div>

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
    		<div class="col col3"></div>
    		<div class="col col4"></div>
    		<div class="col col5"></div>
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
  <div class="fixture-wrapper section">
  		<div class="tabs-fixture tabs-tablas">
	  	  	  	<div class="tab-tabla selected" id="tab-tabla-2097">Futbol 5 Jueves / Torneo Apertura 2015</div>
	  		  	  	<div class="tab-tabla " id="tab-tabla-2139">Copa de Oro</div>
	  		  	  	<div class="tab-tabla " id="tab-tabla-2140">Copa de Plata</div>
	  		  	  <div class="bottom-line"></div>
	</div>
	<div class="tablas-fixture">
		<div class="fixture list" id="tabla-fixture-2097">
			<div class="fechas-selectores">
				<div class="texto">Fechas: </div>
																						<div class="fecha-selector selected" id="fecha-selector-1">1</div>
																			<div class="fecha-selector " id="fecha-selector-2">2</div>
																			<div class="fecha-selector " id="fecha-selector-3">3</div>
																			<div class="fecha-selector " id="fecha-selector-4">4</div>
																			<div class="fecha-selector " id="fecha-selector-5">5</div>
																			<div class="fecha-selector " id="fecha-selector-6">6</div>
																			<div class="fecha-selector " id="fecha-selector-7">7</div>
																</div>
    	<div class="items">
    		    			    			    				    					<div class="fecha" id="fecha-1">
	        			<div class="sub-header">
	        				<p>Fecha 1</p>
	        			</div>
	            			            			<div class="item pair-row">
	            				<div class="col col1">Arsenalgas</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/31559" target="_top">
	            								6 - 5	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Pura Pinta</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">09-04-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            			            			<div class="item odd-row">
	            				<div class="col col1">Atlético Vermú</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/32171" target="_top">
	            								2 - 1	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Limpiafondos</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">09-04-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            			            			<div class="item pair-row">
	            				<div class="col col1">Las Gualeyas</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/32172" target="_top">
	            								1 - 15	            							</a>
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
	                						<div class="text">09-04-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            			            			<div class="item odd-row">
	            				<div class="col col1">Yendo</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/32173" target="_top">
	            								7 - 1	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">4 de Copas</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">04-06-2015</div>
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
	            				<div class="col col1">Arsenalgas</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/32174" target="_top">
	            								4 - 1	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Atlético Vermú</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">23-04-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            			            			<div class="item odd-row">
	            				<div class="col col1">Las Gualeyas</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/32175" target="_top">
	            								0 - 5	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Pura Pinta</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">04-06-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            			            			<div class="item pair-row">
	            				<div class="col col1">Yendo</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/32176" target="_top">
	            								5 - 0	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Limpiafondos</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">11-06-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            			            			<div class="item odd-row">
	            				<div class="col col1">4 de Copas</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/32177" target="_top">
	            								5 - 2	            							</a>
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
	                						<div class="text">11-06-2015</div>
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
	            				<div class="col col1">Yendo</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/32179" target="_top">
	            								4 - 0	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Atlético Vermú</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">30-04-2015</div>
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
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/32181" target="_top">
	            								15 - 2	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Limpiafondos</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">30-04-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            			            			<div class="item pair-row">
	            				<div class="col col1">4 de Copas</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/32180" target="_top">
	            								3 - 2	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Pura Pinta</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">30-04-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            			            			<div class="item odd-row">
	            				<div class="col col1">Arsenalgas</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/32178" target="_top">
	            								6 - 0	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Las Gualeyas</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">30-04-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            		            	</div>
        		    				    					<div class="fecha" id="fecha-4">
	        			<div class="sub-header">
	        				<p>Fecha 4</p>
	        			</div>
	            			            			<div class="item pair-row">
	            				<div class="col col1">Arsenalgas</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/32182" target="_top">
	            								0 - 6	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Yendo</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">21-05-2015</div>
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
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/32183" target="_top">
	            								5 - 0	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Atlético Vermú</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">04-06-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            			            			<div class="item pair-row">
	            				<div class="col col1">4 de Copas</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/32184" target="_top">
	            								13 - 2	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Las Gualeyas</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">23-04-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            			            			<div class="item odd-row">
	            				<div class="col col1">Limpiafondos</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/32185" target="_top">
	            								3 - 4	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Pura Pinta</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">23-04-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            		            	</div>
        		    				    					<div class="fecha" id="fecha-5">
	        			<div class="sub-header">
	        				<p>Fecha 5</p>
	        			</div>
	            			            			<div class="item pair-row">
	            				<div class="col col1">Limpiafondos</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/32188" target="_top">
	            								2 - 4	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Las Gualeyas</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">16-04-2015</div>
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
	            						            				      -
	            				  	            				</div>
	            				<div class="col col3">Yendo</div>
	            					            			</div>
	            				            			            			<div class="item pair-row">
	            				<div class="col col1">Arsenalgas</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/32186" target="_top">
	            								4 - 4	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">4 de Copas</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">16-04-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            			            			<div class="item odd-row">
	            				<div class="col col1">Pura Pinta</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/32187" target="_top">
	            								4 - 2	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Atlético Vermú</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">16-04-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            		            	</div>
        		    				    					<div class="fecha" id="fecha-6">
	        			<div class="sub-header">
	        				<p>Fecha 6</p>
	        			</div>
	            			            			<div class="item pair-row">
	            				<div class="col col1">Limpiafondos</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/32193" target="_top">
	            								2 - 6	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">4 de Copas</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">21-05-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            			            			<div class="item odd-row">
	            				<div class="col col1">Pura Pinta</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/32192" target="_top">
	            								2 - 6	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Yendo</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">11-06-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            			            			<div class="item pair-row">
	            				<div class="col col1">Atlético Vermú</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/32191" target="_top">
	            								5 - 0	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Las Gualeyas</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">21-05-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            			            			<div class="item odd-row">
	            				<div class="col col1">Arsenalgas</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/32190" target="_top">
	            								5 - 0	            							</a>
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
	                						<div class="text">11-06-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            		            	</div>
        		    				    					<div class="fecha" id="fecha-7">
	        			<div class="sub-header">
	        				<p>Fecha 7</p>
	        			</div>
	            			            			<div class="item pair-row">
	            				<div class="col col1">Las Gualeyas</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/32196" target="_top">
	            								0 - 18	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Yendo</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">28-05-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            			            			<div class="item odd-row">
	            				<div class="col col1">Arsenalgas</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/32194" target="_top">
	            								4 - 1	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Limpiafondos</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">04-06-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            			            			<div class="item pair-row">
	            				<div class="col col1">Pura Pinta</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/32197" target="_top">
	            								5 - 0	            							</a>
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
	                						<div class="text">28-05-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            			            			<div class="item odd-row">
	            				<div class="col col1">Atlético Vermú</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="http://www.datafutbol.net/comunidad/partido/32195" target="_top">
	            								4 - 3	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">4 de Copas</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Grun Fútbol</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">28-05-2015</div>
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
		<div class="fixture list" id="tabla-fixture-2139">
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
	            				<div class="col col1">4 de Copas</div>
	            				<div class="col col2">
	            						            				      -
	            				  	            				</div>
	            				<div class="col col3">Yendo</div>
	            					            			</div>
	            				            			            			<div class="item odd-row">
	            				<div class="col col1">Arsenalgas</div>
	            				<div class="col col2">
	            						            				      -
	            				  	            				</div>
	            				<div class="col col3">Pura Pinta</div>
	            					            			</div>
	            				            		            	</div>
        		    				    					<div class="fecha" id="fecha-2">
	        			<div class="sub-header">
	        				<p>Fecha 2</p>
	        			</div>
	            			            			<div class="item pair-row">
	            				<div class="col col1">4 de Copas</div>
	            				<div class="col col2">
	            						            				      -
	            				  	            				</div>
	            				<div class="col col3">Arsenalgas</div>
	            					            			</div>
	            				            			            			<div class="item odd-row">
	            				<div class="col col1">Pura Pinta</div>
	            				<div class="col col2">
	            						            				      -
	            				  	            				</div>
	            				<div class="col col3">Yendo</div>
	            					            			</div>
	            				            		            	</div>
        		    				    					<div class="fecha" id="fecha-3">
	        			<div class="sub-header">
	        				<p>Fecha 3</p>
	        			</div>
	            			            			<div class="item pair-row">
	            				<div class="col col1">4 de Copas</div>
	            				<div class="col col2">
	            						            				      -
	            				  	            				</div>
	            				<div class="col col3">Pura Pinta</div>
	            					            			</div>
	            				            			            			<div class="item odd-row">
	            				<div class="col col1">Yendo</div>
	            				<div class="col col2">
	            						            				      -
	            				  	            				</div>
	            				<div class="col col3">Arsenalgas</div>
	            					            			</div>
	            				            		            	</div>
        		        		        	
    	</div>
	</div>
		<div class="fixture list" id="tabla-fixture-2140">
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
	            				<div class="col col1">Atlético Vermú</div>
	            				<div class="col col2">
	            						            				      -
	            				  	            				</div>
	            				<div class="col col3">TNT</div>
	            					            			</div>
	            				            			            			<div class="item odd-row">
	            				<div class="col col1">Las Gualeyas</div>
	            				<div class="col col2">
	            						            				      -
	            				  	            				</div>
	            				<div class="col col3">Limpiafondos</div>
	            					            			</div>
	            				            		            	</div>
        		    				    					<div class="fecha" id="fecha-2">
	        			<div class="sub-header">
	        				<p>Fecha 2</p>
	        			</div>
	            			            			<div class="item pair-row">
	            				<div class="col col1">Atlético Vermú</div>
	            				<div class="col col2">
	            						            				      -
	            				  	            				</div>
	            				<div class="col col3">Las Gualeyas</div>
	            					            			</div>
	            				            			            			<div class="item odd-row">
	            				<div class="col col1">Limpiafondos</div>
	            				<div class="col col2">
	            						            				      -
	            				  	            				</div>
	            				<div class="col col3">TNT</div>
	            					            			</div>
	            				            		            	</div>
        		    				    					<div class="fecha" id="fecha-3">
	        			<div class="sub-header">
	        				<p>Fecha 3</p>
	        			</div>
	            			            			<div class="item pair-row">
	            				<div class="col col1">Atlético Vermú</div>
	            				<div class="col col2">
	            						            				      -
	            				  	            				</div>
	            				<div class="col col3">Limpiafondos</div>
	            					            			</div>
	            				            			            			<div class="item odd-row">
	            				<div class="col col1">TNT</div>
	            				<div class="col col2">
	            						            				      -
	            				  	            				</div>
	            				<div class="col col3">Las Gualeyas</div>
	            					            			</div>
	            				            		            	</div>
        		        		        	
    	</div>
	</div>
		</div>
  </div>

</body></html>