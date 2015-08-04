﻿<?php


include ('includes/funciones.php');
include ('includes/funcionesJugadores.php');
include ('includes/funcionesEquipos.php');
include ('includes/funcionesGrupos.php');
include ('includes/funcionesZonasEquipos.php');
include ('includes/generadorfixturefijo.php');
include ('includes/funcionesDATOS.php');

$serviciosFunciones = new Servicios();
$serviciosJugadores = new ServiciosJ();
$serviciosEquipos	= new ServiciosE();
$serviciosGrupos	= new ServiciosG();
$serviciosZonasEquipos	= new ServiciosZonasEquipos();
$serviciosDatos = new ServiciosDatos();

if (isset($_GET["id"])) {
	$idTipoTorneo = $_GET["id"];
} else {
	$idTipoTorneo = 3;
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


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es" dir="ltr">
<head>
  <title>Tablas</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="es" />
  
  <script type="text/javascript" src="jscss/jquery-1.8.3.min.js" charset="UTF-8"></script>
  <script type="text/javascript" src="jscss/tablas_export.js?v=2" charset="UTF-8"></script>
    	<link type="text/css" rel="stylesheet" href="jscss/tablas_export.css" media="screen" />
      	<style>
  		body .section .list .items .item.odd-row {
        	background-color: #DEE1E6;
        }
        body .section .list .items .item.pair-row {
        	background-color: #B0B7C1;
        }
        body .section .tabs-tablas .bottom-line {
        	background-color: #FF4200;
        }
        body .section .tabs-tablas .tab-fairplay {
        	background-color: #B0B7C1;
        }
        body .section .tabs-tablas .tab-fairplay.selected {
        	background-color: #FF4200;
        	color: white;
        }
        body .section .list .titles {
        	background-color: #FF4200;
        }
        body .section .tabs-tablas .tab-tabla {
        	background-color: #B0B7C1;
        }
        body .section .tabs-tablas .tab-tabla.selected {
        	background-color: #FF4200;
        	color: white;
        }
        body .section .posiciones.list .col.col1 {
        	width: 29%;
        }
  	</style>
      </head>
<body>
  <!--<div class="section-tabs">
	<div id="tab-posiciones" class="item selected posiciones">Posiciones</div>
	<div id="tab-goleadores" class="item goleadores">Goleadores</div>
	<div id="tab-fairplay" class="item fairplay">Fair Play</div>
	<div id="tab-vallamenosvencida" class="item vallamenosvencida">Valla menos vencida</div>
		  </div>
  <div class="posiciones-wrapper section">
    	<div class="tabs-posiciones tabs-tablas">
      	<div class="tab-tabla selected" id="tab-tabla-2111">F5 Jueves Zona Norte - Torneo Inicial</div>
  	    <div class="bottom-line"></div>
</div>
<div class="tablas-posiciones">
	<div class="posiciones list" id="tabla-posiciones-2111">
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
    					    						<a href="../../../equipo/2279/index.html" target="_top">Maraquena FC</a>
    					    				</div>
    				<div class="col col2 col-number">8</div>
    				<div class="col col3 col-number">8</div>
    				<div class="col col4 col-number">0</div>
    				<div class="col col5 col-number">0</div>
    				<div class="col col6 col-number">71</div>
    				<div class="col col7 col-number">19</div>
    				<div class="col col8 col-number">52</div>
    				<div class="col col9 col-number">8</div>
    				    					<div class="col col-fp col-number">3</div>
    				    				<div class="col col10 col-number">24</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    					    						<a href="../../../equipo/1389/index.html" target="_top">PKM</a>
    					    				</div>
    				<div class="col col2 col-number">8</div>
    				<div class="col col3 col-number">5</div>
    				<div class="col col4 col-number">0</div>
    				<div class="col col5 col-number">3</div>
    				<div class="col col6 col-number">61</div>
    				<div class="col col7 col-number">52</div>
    				<div class="col col8 col-number">9</div>
    				<div class="col col9 col-number">8</div>
    				    					<div class="col col-fp col-number">5</div>
    				    				<div class="col col10 col-number">18</div>
    			</div>
    			    		    			<div class="item pair-row">
    				<div class="col col1">
    					    						<a href="../../../equipo/2759/index.html" target="_top">Pumpernic</a>
    					    				</div>
    				<div class="col col2 col-number">8</div>
    				<div class="col col3 col-number">5</div>
    				<div class="col col4 col-number">0</div>
    				<div class="col col5 col-number">3</div>
    				<div class="col col6 col-number">48</div>
    				<div class="col col7 col-number">49</div>
    				<div class="col col8 col-number">-1</div>
    				<div class="col col9 col-number">8</div>
    				    					<div class="col col-fp col-number">4</div>
    				    				<div class="col col10 col-number">18</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    					    						<a href="../../../equipo/281/index.html" target="_top">Papagarte's</a>
    					    				</div>
    				<div class="col col2 col-number">8</div>
    				<div class="col col3 col-number">3</div>
    				<div class="col col4 col-number">2</div>
    				<div class="col col5 col-number">3</div>
    				<div class="col col6 col-number">41</div>
    				<div class="col col7 col-number">27</div>
    				<div class="col col8 col-number">14</div>
    				<div class="col col9 col-number">8</div>
    				    					<div class="col col-fp col-number">2</div>
    				    				<div class="col col10 col-number">16</div>
    			</div>
    			    		    			<div class="item pair-row">
    				<div class="col col1">
    					    						<a href="../../../equipo/2758/index.html" target="_top">Alacranes</a>
    					    				</div>
    				<div class="col col2 col-number">8</div>
    				<div class="col col3 col-number">4</div>
    				<div class="col col4 col-number">1</div>
    				<div class="col col5 col-number">3</div>
    				<div class="col col6 col-number">47</div>
    				<div class="col col7 col-number">35</div>
    				<div class="col col8 col-number">12</div>
    				<div class="col col9 col-number">7</div>
    				    					<div class="col col-fp col-number">8</div>
    				    				<div class="col col10 col-number">16</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    					    						<a href="../../../equipo/2053/index.html" target="_top">Rodado 26</a>
    					    				</div>
    				<div class="col col2 col-number">8</div>
    				<div class="col col3 col-number">4</div>
    				<div class="col col4 col-number">1</div>
    				<div class="col col5 col-number">3</div>
    				<div class="col col6 col-number">37</div>
    				<div class="col col7 col-number">38</div>
    				<div class="col col8 col-number">-1</div>
    				<div class="col col9 col-number">7</div>
    				    					<div class="col col-fp col-number">15</div>
    				    				<div class="col col10 col-number">15</div>
    			</div>
    			    		    			<div class="item pair-row">
    				<div class="col col1">
    					    						<a href="../../../equipo/2757/index.html" target="_top">Bosques de Palermo</a>
    					    				</div>
    				<div class="col col2 col-number">8</div>
    				<div class="col col3 col-number">2</div>
    				<div class="col col4 col-number">0</div>
    				<div class="col col5 col-number">6</div>
    				<div class="col col6 col-number">22</div>
    				<div class="col col7 col-number">59</div>
    				<div class="col col8 col-number">-37</div>
    				<div class="col col9 col-number">8</div>
    				    					<div class="col col-fp col-number">3</div>
    				    				<div class="col col10 col-number">12</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    					    						<a href="../../../equipo/2760/index.html" target="_top">Doña Pepa</a>
    					    				</div>
    				<div class="col col2 col-number">8</div>
    				<div class="col col3 col-number">1</div>
    				<div class="col col4 col-number">1</div>
    				<div class="col col5 col-number">6</div>
    				<div class="col col6 col-number">31</div>
    				<div class="col col7 col-number">56</div>
    				<div class="col col8 col-number">-25</div>
    				<div class="col col9 col-number">8</div>
    				    					<div class="col col-fp col-number">1</div>
    				    				<div class="col col10 col-number">11</div>
    			</div>
    			    		    			<div class="item pair-row">
    				<div class="col col1">
    					    						<a href="../../../equipo/2761/index.html" target="_top">Los Reclutas del Loco Bielsa</a>
    					    				</div>
    				<div class="col col2 col-number">8</div>
    				<div class="col col3 col-number">1</div>
    				<div class="col col4 col-number">1</div>
    				<div class="col col5 col-number">6</div>
    				<div class="col col6 col-number">22</div>
    				<div class="col col7 col-number">45</div>
    				<div class="col col8 col-number">-23</div>
    				<div class="col col9 col-number">5</div>
    				    					<div class="col col-fp col-number">9</div>
    				    				<div class="col col10 col-number">8</div>
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
    					    						<a href="../../../jugador/30025/index.html" target="_top">Joaquin Rios</a>
    					    				</div>
    				<div class="col col2">
    					    						<a href="../../../equipo/1389/index.html" target="_top">PKM</a>
    					    				</div>
    				<div class="col col3">27</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    					    						<a href="../../../jugador/23335/index.html" target="_top">Ariel Albarracin</a>
    					    				</div>
    				<div class="col col2">
    					    						<a href="../../../equipo/2758/index.html" target="_top">Alacranes</a>
    					    				</div>
    				<div class="col col3">22</div>
    			</div>
    			    		    			<div class="item pair-row">
    				<div class="col col1">
    					    						<a href="../../../jugador/1291/index.html" target="_top">Emiliano Boffa</a>
    					    				</div>
    				<div class="col col2">
    					    						<a href="../../../equipo/2279/index.html" target="_top">Maraquena FC</a>
    					    				</div>
    				<div class="col col3">20</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    					    						<a href="../../../jugador/30029/index.html" target="_top">Martin Darruspe</a>
    					    				</div>
    				<div class="col col2">
    					    						<a href="../../../equipo/2053/index.html" target="_top">Rodado 26</a>
    					    				</div>
    				<div class="col col3">16</div>
    			</div>
    			    		    			<div class="item pair-row">
    				<div class="col col1">
    					    						<a href="../../../jugador/8085/index.html" target="_top">Juan Corredato</a>
    					    				</div>
    				<div class="col col2">
    					    						<a href="../../../equipo/2279/index.html" target="_top">Maraquena FC</a>
    					    				</div>
    				<div class="col col3">12</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    					    						<a href="../../../jugador/24203/index.html" target="_top">Gabriel Lancelotte</a>
    					    				</div>
    				<div class="col col2">
    					    						<a href="../../../equipo/281/index.html" target="_top">Papagarte's</a>
    					    				</div>
    				<div class="col col3">12</div>
    			</div>
    			    		    			<div class="item pair-row">
    				<div class="col col1">
    					    						<a href="../../../jugador/30024/index.html" target="_top">Martin Miguez</a>
    					    				</div>
    				<div class="col col2">
    					    						<a href="../../../equipo/2760/index.html" target="_top">Doña Pepa</a>
    					    				</div>
    				<div class="col col3">11</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    					    						<a href="../../../jugador/3769/index.html" target="_top">Christian Li</a>
    					    				</div>
    				<div class="col col2">
    					    						<a href="../../../equipo/281/index.html" target="_top">Papagarte's</a>
    					    				</div>
    				<div class="col col3">10</div>
    			</div>
    			    		    			<div class="item pair-row">
    				<div class="col col1">
    					    						<a href="../../../jugador/26411/index.html" target="_top">Patricio Santik</a>
    					    				</div>
    				<div class="col col2">
    					    						<a href="../../../equipo/2279/index.html" target="_top">Maraquena FC</a>
    					    				</div>
    				<div class="col col3">10</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    					    						<a href="../../../jugador/30031/index.html" target="_top">Francisco Dominguez</a>
    					    				</div>
    				<div class="col col2">
    					    						<a href="../../../equipo/2759/index.html" target="_top">Pumpernic</a>
    					    				</div>
    				<div class="col col3">10</div>
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
	    					    					<a href="../../../equipo/2053/index.html" target="_top">Rodado 26</a>
	    				    				</div>
    				<div class="col col3">11</div>
    				<div class="col col3">2</div>
    				<div class="col col3">0</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
	    					    					<a href="../../../equipo/2761/index.html" target="_top">Los Reclutas del Loco Bielsa</a>
	    				    				</div>
    				<div class="col col3">9</div>
    				<div class="col col3">0</div>
    				<div class="col col3">0</div>
    			</div>
    			    		    			<div class="item pair-row">
    				<div class="col col1">
	    					    					<a href="../../../equipo/2758/index.html" target="_top">Alacranes</a>
	    				    				</div>
    				<div class="col col3">8</div>
    				<div class="col col3">0</div>
    				<div class="col col3">0</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
	    					    					<a href="../../../equipo/1389/index.html" target="_top">PKM</a>
	    				    				</div>
    				<div class="col col3">5</div>
    				<div class="col col3">0</div>
    				<div class="col col3">0</div>
    			</div>
    			    		    			<div class="item pair-row">
    				<div class="col col1">
	    					    					<a href="../../../equipo/2759/index.html" target="_top">Pumpernic</a>
	    				    				</div>
    				<div class="col col3">4</div>
    				<div class="col col3">0</div>
    				<div class="col col3">0</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
	    					    					<a href="../../../equipo/2279/index.html" target="_top">Maraquena FC</a>
	    				    				</div>
    				<div class="col col3">3</div>
    				<div class="col col3">0</div>
    				<div class="col col3">0</div>
    			</div>
    			    		    			<div class="item pair-row">
    				<div class="col col1">
	    					    					<a href="../../../equipo/2757/index.html" target="_top">Bosques de Palermo</a>
	    				    				</div>
    				<div class="col col3">1</div>
    				<div class="col col3">1</div>
    				<div class="col col3">0</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
	    					    					<a href="../../../equipo/281/index.html" target="_top">Papagarte's</a>
	    				    				</div>
    				<div class="col col3">2</div>
    				<div class="col col3">0</div>
    				<div class="col col3">0</div>
    			</div>
    			    		    			<div class="item pair-row">
    				<div class="col col1">
	    					    					<a href="../../../equipo/2760/index.html" target="_top">Doña Pepa</a>
	    				    				</div>
    				<div class="col col3">1</div>
    				<div class="col col3">0</div>
    				<div class="col col3">0</div>
    			</div>
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
    		    		    			<div class="item pair-row">
    				<div class="col col1">
    						    					<a href="../../../jugador/23795/index.html" target="_top">Eugenio Birabent</a>
	    				    				</div>
    				<div class="col col2">
    						    					<a href="../../../equipo/2053/index.html" target="_top">Rodado 26</a>
	    				    				</div>
    				<div class="col col3">2</div>
    				<div class="col col3">1</div>
    				<div class="col col3">0</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    						    					<a href="../../../jugador/1238/index.html" target="_top">Norberto Echeverria</a>
	    				    				</div>
    				<div class="col col2">
    						    					<a href="../../../equipo/2758/index.html" target="_top">Alacranes</a>
	    				    				</div>
    				<div class="col col3">2</div>
    				<div class="col col3">0</div>
    				<div class="col col3">0</div>
    			</div>
    			    		    			<div class="item pair-row">
    				<div class="col col1">
    						    					<a href="../../../jugador/3754/index.html" target="_top">Fabricio Procopio</a>
	    				    				</div>
    				<div class="col col2">
    						    					<a href="../../../equipo/2757/index.html" target="_top">Bosques de Palermo</a>
	    				    				</div>
    				<div class="col col3">0</div>
    				<div class="col col3">1</div>
    				<div class="col col3">0</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    						    					<a href="../../../jugador/30027/index.html" target="_top">Ignacio Fernandez</a>
	    				    				</div>
    				<div class="col col2">
    						    					<a href="../../../equipo/2053/index.html" target="_top">Rodado 26</a>
	    				    				</div>
    				<div class="col col3">0</div>
    				<div class="col col3">1</div>
    				<div class="col col3">0</div>
    			</div>
    			    		    			<div class="item pair-row">
    				<div class="col col1">
    						    					<a href="../../../jugador/30029/index.html" target="_top">Martin Darruspe</a>
	    				    				</div>
    				<div class="col col2">
    						    					<a href="../../../equipo/2053/index.html" target="_top">Rodado 26</a>
	    				    				</div>
    				<div class="col col3">1</div>
    				<div class="col col3">0</div>
    				<div class="col col3">0</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    						    					<a href="../../../jugador/30374/index.html" target="_top">Marcelo Rivero</a>
	    				    				</div>
    				<div class="col col2">
    						    					<a href="../../../equipo/2761/index.html" target="_top">Los Reclutas del Loco Bielsa</a>
	    				    				</div>
    				<div class="col col3">1</div>
    				<div class="col col3">0</div>
    				<div class="col col3">0</div>
    			</div>
    			    		    			<div class="item pair-row">
    				<div class="col col1">
    						    					<a href="../../../jugador/31422/index.html" target="_top">Santiago Schamun</a>
	    				    				</div>
    				<div class="col col2">
    						    					<a href="../../../equipo/1389/index.html" target="_top">PKM</a>
	    				    				</div>
    				<div class="col col3">1</div>
    				<div class="col col3">0</div>
    				<div class="col col3">0</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    						    					<a href="../../../jugador/30376/index.html" target="_top">Emmanuel Carrio</a>
	    				    				</div>
    				<div class="col col2">
    						    					<a href="../../../equipo/2761/index.html" target="_top">Los Reclutas del Loco Bielsa</a>
	    				    				</div>
    				<div class="col col3">1</div>
    				<div class="col col3">0</div>
    				<div class="col col3">0</div>
    			</div>
    			    		    			<div class="item pair-row">
    				<div class="col col1">
    						    					<a href="../../../jugador/30028/index.html" target="_top">Daniel Melkvs</a>
	    				    				</div>
    				<div class="col col2">
    						    					<a href="../../../equipo/2053/index.html" target="_top">Rodado 26</a>
	    				    				</div>
    				<div class="col col3">1</div>
    				<div class="col col3">0</div>
    				<div class="col col3">0</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    						    					<a href="../../../jugador/30034/index.html" target="_top">Roberto Abregu</a>
	    				    				</div>
    				<div class="col col2">
    						    					<a href="../../../equipo/2279/index.html" target="_top">Maraquena FC</a>
	    				    				</div>
    				<div class="col col3">1</div>
    				<div class="col col3">0</div>
    				<div class="col col3">0</div>
    			</div>
    			    		    			<div class="item pair-row">
    				<div class="col col1">
    						    					<a href="../../../jugador/25060/index.html" target="_top">Daniel Cardozo</a>
	    				    				</div>
    				<div class="col col2">
    						    					<a href="../../../equipo/2053/index.html" target="_top">Rodado 26</a>
	    				    				</div>
    				<div class="col col3">1</div>
    				<div class="col col3">0</div>
    				<div class="col col3">0</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    						    					<a href="../../../jugador/1463/index.html" target="_top">Diego Franceschini</a>
	    				    				</div>
    				<div class="col col2">
    						    					<a href="../../../equipo/2758/index.html" target="_top">Alacranes</a>
	    				    				</div>
    				<div class="col col3">1</div>
    				<div class="col col3">0</div>
    				<div class="col col3">0</div>
    			</div>
    			    		    			<div class="item pair-row">
    				<div class="col col1">
    						    					<a href="../../../jugador/3769/index.html" target="_top">Christian Li</a>
	    				    				</div>
    				<div class="col col2">
    						    					<a href="../../../equipo/281/index.html" target="_top">Papagarte's</a>
	    				    				</div>
    				<div class="col col3">1</div>
    				<div class="col col3">0</div>
    				<div class="col col3">0</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    						    					<a href="../../../jugador/16255/index.html" target="_top">Esteban Branciari</a>
	    				    				</div>
    				<div class="col col2">
    						    					<a href="../../../equipo/1389/index.html" target="_top">PKM</a>
	    				    				</div>
    				<div class="col col3">1</div>
    				<div class="col col3">0</div>
    				<div class="col col3">0</div>
    			</div>
    			    		    			<div class="item pair-row">
    				<div class="col col1">
    						    					<a href="../../../jugador/16258/index.html" target="_top">Hernán Zapatini</a>
	    				    				</div>
    				<div class="col col2">
    						    					<a href="../../../equipo/1389/index.html" target="_top">PKM</a>
	    				    				</div>
    				<div class="col col3">1</div>
    				<div class="col col3">0</div>
    				<div class="col col3">0</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    						    					<a href="../../../jugador/27220/index.html" target="_top">Diego Lancelotte</a>
	    				    				</div>
    				<div class="col col2">
    						    					<a href="../../../equipo/281/index.html" target="_top">Papagarte's</a>
	    				    				</div>
    				<div class="col col3">1</div>
    				<div class="col col3">0</div>
    				<div class="col col3">0</div>
    			</div>
    			    		    	</div>
	</div>
	<div class="fairplay list suspendidos" id="tabla-fairplay-suspendidos">
    	<div class="titles">
    		<div class="col col1">Jugador</div>
    		<div class="col col2">Equipo</div>
    		<div class="col col3">Partidos</div>
    	</div>
    	<div class="items">
    		    		    			<div class="item pair-row">
    				<div class="col col1">
    						    					<a href="../../../jugador/23795/index.html" target="_top">Eugenio Birabent</a>
	    				    				</div>
    				<div class="col col2">
    						    					<a href="../../../equipo/2053/index.html" target="_top">Rodado 26</a>
	    				    				</div>
    				<div class="col col3">1</div>
    				<div class="col col4">
    					<div class="view-more closed"></div>
    				</div>
    				<div class="more">
    					<div class="row">
    						<div class="title">Motivo:</div>
    						<div class="text">Acumulación de tarjetas</div>
    					</div>
    					<div class="row">
    						<div class="title">Desde:</div>
    						<div class="text">
    						              				    Fecha 5            				      						</div>
    					</div>
    					<div class="row">
    						<div class="title">Hasta:</div>
    						<div class="text">
    						              				    Fecha 7            				      						</div>
    					</div>
    				</div>
    			</div>
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
    						    					<a href="../../../equipo/2279/index.html" target="_top">Maraquena FC</a>
	    				    				</div>
    				<div class="col col2">19</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    						    					<a href="../../../equipo/281/index.html" target="_top">Papagarte's</a>
	    				    				</div>
    				<div class="col col2">27</div>
    			</div>
    			    		    			<div class="item pair-row">
    				<div class="col col1">
    						    					<a href="../../../equipo/2758/index.html" target="_top">Alacranes</a>
	    				    				</div>
    				<div class="col col2">35</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    						    					<a href="../../../equipo/2053/index.html" target="_top">Rodado 26</a>
	    				    				</div>
    				<div class="col col2">38</div>
    			</div>
    			    		    			<div class="item pair-row">
    				<div class="col col1">
    						    					<a href="../../../equipo/2761/index.html" target="_top">Los Reclutas del Loco Bielsa</a>
	    				    				</div>
    				<div class="col col2">45</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    						    					<a href="../../../equipo/2759/index.html" target="_top">Pumpernic</a>
	    				    				</div>
    				<div class="col col2">49</div>
    			</div>
    			    		    			<div class="item pair-row">
    				<div class="col col1">
    						    					<a href="../../../equipo/1389/index.html" target="_top">PKM</a>
	    				    				</div>
    				<div class="col col2">52</div>
    			</div>
    			    		    			<div class="item odd-row">
    				<div class="col col1">
    						    					<a href="../../../equipo/2760/index.html" target="_top">Doña Pepa</a>
	    				    				</div>
    				<div class="col col2">56</div>
    			</div>
    			    		    			<div class="item pair-row">
    				<div class="col col1">
    						    					<a href="../../../equipo/2757/index.html" target="_top">Bosques de Palermo</a>
	    				    				</div>
    				<div class="col col2">59</div>
    			</div>
    			    		    	</div>
	</div>
  </div>
  <div class="fixture-wrapper section">
  		<div class="tabs-fixture tabs-tablas">
	  	  	  	<div class="tab-tabla selected" id="tab-tabla-2111">F5 Jueves Zona Norte - Torneo Inicial</div>
	  		  	  <div class="bottom-line"></div>
	</div>
	<div class="tablas-fixture">
		<div class="fixture list" id="tabla-fixture-2111">
			<div class="fechas-selectores">
				<div class="texto">Fechas: </div>
																						<div class="fecha-selector selected" id="fecha-selector-1">1</div>
																			<div class="fecha-selector " id="fecha-selector-2">2</div>
																			<div class="fecha-selector " id="fecha-selector-3">3</div>
																			<div class="fecha-selector " id="fecha-selector-4">4</div>
																			<div class="fecha-selector " id="fecha-selector-5">5</div>
																			<div class="fecha-selector " id="fecha-selector-6">6</div>
																			<div class="fecha-selector " id="fecha-selector-7">7</div>
																			<div class="fecha-selector " id="fecha-selector-8">8</div>
																			<div class="fecha-selector " id="fecha-selector-9">9</div>
																</div>
    	<div class="items">
    		    			    			    				    					<div class="fecha" id="fecha-1">
	        			<div class="sub-header">
	        				<p>Fecha 1</p>
	        			</div>
	            			            			<div class="item pair-row">
	            				<div class="col col1">PKM</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="../../../partido/31827/index.html" target="_top">
	            								8 - 0	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Bosques de Palermo</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Area Chica</div>
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
	            				<div class="col col1">Maraquena FC</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="../../../partido/31832/index.html" target="_top">
	            								7 - 2	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Alacranes</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Area Chica</div>
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
	            				<div class="col col1">Pumpernic</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="../../../partido/31831/index.html" target="_top">
	            								6 - 9	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Rodado 26</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Area Chica</div>
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
	            				<div class="col col1">Papagarte's</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="../../../partido/31830/index.html" target="_top">
	            								4 - 4	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Doña Pepa</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Area Chica</div>
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
	            				            		            	</div>
        		    				    					<div class="fecha" id="fecha-2">
	        			<div class="sub-header">
	        				<p>Fecha 2</p>
	        			</div>
	            			            			<div class="item pair-row">
	            				<div class="col col1">Los Reclutas del Loco Bielsa</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="../../../partido/32049/index.html" target="_top">
	            								3 - 3	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Rodado 26</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Area Chica</div>
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
	            				<div class="col col1">Doña Pepa</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="../../../partido/32048/index.html" target="_top">
	            								6 - 11	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">PKM</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Area Chica</div>
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
	            				            			            			<div class="item pair-row">
	            				<div class="col col1">Pumpernic</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="../../../partido/32047/index.html" target="_top">
	            								1 - 6	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Maraquena FC</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Area Chica</div>
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
	            				<div class="col col1">Alacranes</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="../../../partido/32046/index.html" target="_top">
	            								16 - 3	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Bosques de Palermo</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Area Chica</div>
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
        		    				    					<div class="fecha" id="fecha-3">
	        			<div class="sub-header">
	        				<p>Fecha 3</p>
	        			</div>
	            			            			<div class="item pair-row">
	            				<div class="col col1">Papagarte's</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="../../../partido/32055/index.html" target="_top">
	            								3 - 4	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Rodado 26</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Area Chica</div>
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
	            				<div class="col col1">Los Reclutas del Loco Bielsa</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="../../../partido/32053/index.html" target="_top">
	            								3 - 9	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Maraquena FC</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Area Chica</div>
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
	            				            			            			<div class="item pair-row">
	            				<div class="col col1">Doña Pepa</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="../../../partido/32052/index.html" target="_top">
	            								3 - 4	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Bosques de Palermo</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Area Chica</div>
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
	            				<div class="col col1">Alacranes</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="../../../partido/32051/index.html" target="_top">
	            								6 - 7	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Pumpernic</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Area Chica</div>
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
        		    				    					<div class="fecha" id="fecha-4">
	        			<div class="sub-header">
	        				<p>Fecha 4</p>
	        			</div>
	            			            			<div class="item pair-row">
	            				<div class="col col1">Alacranes</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="../../../partido/32056/index.html" target="_top">
	            								6 - 2	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Doña Pepa</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Area Chica</div>
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
	            				<div class="col col1">Los Reclutas del Loco Bielsa</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="../../../partido/32058/index.html" target="_top">
	            								7 - 10	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Pumpernic</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Area Chica</div>
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
	            				            			            			<div class="item pair-row">
	            				<div class="col col1">Papagarte's</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="../../../partido/32059/index.html" target="_top">
	            								3 - 4	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Maraquena FC</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Area Chica</div>
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
	            				<div class="col col1">Rodado 26</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="../../../partido/32060/index.html" target="_top">
	            								5 - 7	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">PKM</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Area Chica</div>
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
        		    				    					<div class="fecha" id="fecha-5">
	        			<div class="sub-header">
	        				<p>Fecha 5</p>
	        			</div>
	            			            			<div class="item pair-row">
	            				<div class="col col1">PKM</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="../../../partido/32065/index.html" target="_top">
	            								4 - 8	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Maraquena FC</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Area Chica</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">18-06-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            			            			<div class="item odd-row">
	            				<div class="col col1">Papagarte's</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="../../../partido/32063/index.html" target="_top">
	            								4 - 5	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Pumpernic</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Area Chica</div>
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
	            				<div class="col col1">Rodado 26</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="../../../partido/32062/index.html" target="_top">
	            								5 - 4	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Bosques de Palermo</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Area Chica</div>
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
	            				<div class="col col1">Alacranes</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="../../../partido/32061/index.html" target="_top">
	            								0 - 5	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Los Reclutas del Loco Bielsa</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Area Chica</div>
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
        		    				    					<div class="fecha" id="fecha-6">
	        			<div class="sub-header">
	        				<p>Fecha 6</p>
	        			</div>
	            			            			<div class="item pair-row">
	            				<div class="col col1">Maraquena FC</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="../../../partido/32067/index.html" target="_top">
	            								17 - 1	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Bosques de Palermo</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Area Chica</div>
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
	            				            			            			<div class="item odd-row">
	            				<div class="col col1">PKM</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="../../../partido/32068/index.html" target="_top">
	            								11 - 6	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Pumpernic</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Area Chica</div>
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
	            				<div class="col col1">Rodado 26</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="../../../partido/32069/index.html" target="_top">
	            								10 - 3	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Doña Pepa</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Area Chica</div>
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
	            				            			            			<div class="item odd-row">
	            				<div class="col col1">Papagarte's</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="../../../partido/32070/index.html" target="_top">
	            								5 - 0	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Los Reclutas del Loco Bielsa</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Area Chica</div>
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
        		    				    					<div class="fecha" id="fecha-7">
	        			<div class="sub-header">
	        				<p>Fecha 7</p>
	        			</div>
	            			            			<div class="item pair-row">
	            				<div class="col col1">PKM</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="../../../partido/32074/index.html" target="_top">
	            								8 - 4	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Los Reclutas del Loco Bielsa</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Area Chica</div>
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
	            				<div class="col col1">Maraquena FC</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="../../../partido/32073/index.html" target="_top">
	            								13 - 4	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Doña Pepa</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Area Chica</div>
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
	            				<div class="col col1">Bosques de Palermo</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="../../../partido/32072/index.html" target="_top">
	            								2 - 5	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Pumpernic</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Area Chica</div>
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
	            				<div class="col col1">Alacranes</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="../../../partido/32071/index.html" target="_top">
	            								3 - 3	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Papagarte's</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Area Chica</div>
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
	            				            		            	</div>
        		    				    					<div class="fecha" id="fecha-8">
	        			<div class="sub-header">
	        				<p>Fecha 8</p>
	        			</div>
	            			            			<div class="item pair-row">
	            				<div class="col col1">PKM</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="../../../partido/32080/index.html" target="_top">
	            								4 - 14	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Papagarte's</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Area Chica</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">25-06-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            			            			<div class="item odd-row">
	            				<div class="col col1">Pumpernic</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="../../../partido/32078/index.html" target="_top">
	            								8 - 4	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Doña Pepa</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Area Chica</div>
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
	            				<div class="col col1">Bosques de Palermo</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="../../../partido/32077/index.html" target="_top">
	            								5 - 0	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Los Reclutas del Loco Bielsa</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Area Chica</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">25-06-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            			            			<div class="item odd-row">
	            				<div class="col col1">Alacranes</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="../../../partido/32076/index.html" target="_top">
	            								5 - 0	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Rodado 26</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Area Chica</div>
	                					</div>
	                						                					<div class="row">
	                						<div class="title">Fecha:</div>
	                						<div class="text">18-06-2015</div>
	                					</div>
	                					<div class="row">
	                						<div class="title">Hora:</div>
	                						<div class="text">---</div>
	                					</div>
	            					</div>
	            					            			</div>
	            				            		            	</div>
        		    				    					<div class="fecha" id="fecha-9">
	        			<div class="sub-header">
	        				<p>Fecha 9</p>
	        			</div>
	            			            			<div class="item pair-row">
	            				<div class="col col1">Alacranes</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="../../../partido/32081/index.html" target="_top">
	            								9 - 8	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">PKM</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Area Chica</div>
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
	            				<div class="col col1">Bosques de Palermo</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="../../../partido/32082/index.html" target="_top">
	            								3 - 5	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Papagarte's</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Area Chica</div>
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
	            				<div class="col col1">Doña Pepa</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="../../../partido/32084/index.html" target="_top">
	            								5 - 0	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Los Reclutas del Loco Bielsa</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Area Chica</div>
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
	            				            			            			<div class="item odd-row">
	            				<div class="col col1">Maraquena FC</div>
	            				<div class="col col2">
	            						            				      
	            				    	<a href="../../../partido/32085/index.html" target="_top">
	            								7 - 1	            							</a>
	            							            				 		            				</div>
	            				<div class="col col3">Rodado 26</div>
	            					            					<div class="col col4 closed view-more"></div>
	            					<div class="more">
	            						<div class="row">
	                						<div class="title">Sede:</div>
	                						<div class="text">Area Chica</div>
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
	            				            		            	</div>
        		        		        	
    	</div>
	</div>
		</div>
  </div>-->
  
  
  <div class="section-tabs">
	<div id="tab-posiciones" class="item posiciones">Posiciones</div>
	<div id="tab-goleadores" class="item goleadores">Goleadores</div>
	<div id="tab-fairplay" class="item fairplay">Fair Play</div>
	<div id="tab-vallamenosvencida" class="item vallamenosvencida selected">Valla menos vencida</div>
		  </div>
  <div style="display: none;" class="posiciones-wrapper section">
    	<div class="tabs-posiciones tabs-tablas">
      	<div class="tab-tabla selected" id="tab-tabla-2097"><?php echo $nombreTorneo; ?></div>
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
            <?php echo $row['nombre']; ?>
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
</body>
</html>
<!-- Localized -->