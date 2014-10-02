<?php
session_start();
//echo $_SESSION["rol"];
setlocale(LC_ALL,"es_ES");
if($_SESSION["usuario"]!="" && $_SESSION["usuario"]!="0")
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pl" xml:lang="pl">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="Paweł 'kilab' Balicki - kilab.pl" />
<title>Sistema de Control FQAI</title>
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/navi.css" media="screen" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/validacion.js"></script>
<script type="text/javascript">
$(function(){
	$(".box .h_title").not(this).next("ul").hide("normal");
	$(".box .h_title").not(this).next("#home").show("normal");
	$(".box").children(".h_title").click( function() { $(this).next("ul").slideToggle(); });
});
</script>
<!-- datapicker-->
<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

<!------Graficas------->
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">

  // Load the Visualization API and the piechart package.
  google.load('visualization', '1.0', {'packages':['corechart']});

  // Set a callback to run when the Google Visualization API is loaded.
  google.setOnLoadCallback(drawChart);

  // Callback that creates and populates a data table,
  // instantiates the pie chart, passes in the data and
  // draws it.
  function drawChart() {

    // Create the data table.
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Topping');
    data.addColumn('number', 'Slices');
    data.addRows([
      ['Mushrooms', 3],
      ['Onions', 1],
      ['Olives', 1],
      ['Zucchini', 1],
      ['Pepperoni', 2]
    ]);

    // Set chart options
    var options = {'title':'How Much Pizza I Ate Last Night',
                   'width':400,
                   'height':300};

    // Instantiate and draw our chart, passing in some options.
    var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
    chart.draw(data, options);
  }
</script>


</head>
<body>
<div class="wrap">
	<div id="header">
		<div id="top">
			<div class="left">
				<p>Bienvenido, <strong><?php echo $_SESSION["nombre"];?></strong> [ <a href="" onclick="salir(); return false;">Salir</a> ]</p>
			</div>
			<div class="right">
				<div class="align-right">
					<p>Hoy es: <strong><?php echo strftime("%A %d de %B del %Y");?></strong></p>
				</div>
			</div>
		</div>
	</div>
	
	<div id="content">
		<div id="sidebar">
            <?php
            if($_SESSION["rol"]=="1" || $_SESSION["rol"]=="3")
            {
            ?>
			<div class="box">
				<div class="h_title">&#8250; Citas Médicas</div>
				<ul id="home">
					<li class="b1"><a class="icon add_page" href="" onclick="dibujarFormularioIngresoconsulta();return false;">Solicitar Cita Médica</a></li>
					<li class="b2"><a class="icon report" href="" onclick="consultarTodosconsulta(); return false;">Confirmar Cita Médica</a></li>
				</ul>
			</div>
			<?php
            }
            if($_SESSION["rol"]=="1")
            {
            ?>
			<div class="box">
				<div class="h_title">&#8250; Panel Usuarios</div>
				<ul>
					<li class="b2"><a class="icon add_user" href="" onclick="dibujarFormularioIngresousuario();return false;">Nuevo Usuario</a></li>
					<li class="b1"><a class="icon users" href="" onclick="consultarTodosusuario();return false;">Consultar Usuarios</a></li>
				</ul>
			</div>
            <?php
            }
            if($_SESSION["rol"]=="1" || $_SESSION["rol"]=="3")
            {
            ?>
			<div class="box">
				<div class="h_title">&#8250; Panel Pacientes</div>
				<ul>
                    <li class="b2"><a class="icon add_user" href="" onclick="dibujarFormularioIngresopaciente();return false;">Nuevo Paciente</a></li>
					<li class="b1"><a class="icon users" href="" onclick="consultarTodospaciente();return false;">Consultar Pacientes</a></li>
				</ul>
			</div>
            <?php
            }
            //$_SESSION["rol"]=="1" || 
            if($_SESSION["rol"]=="2")
            {
            ?>
            <div class="box">
				<div class="h_title">&#8250; Panel Médico</div>
				<ul>
                    <li class="b2"><a class="icon add_user" href="" onclick="consultarCitasDia();return false;">Citas del Día</a></li>
					<li class="b1"><a class="icon users" href="" onclick="mostrarFormularioGenHC();return false;">Historias Clínicas</a></li>
				</ul>
			</div>
            <?php
            }
            if($_SESSION["rol"]=="1" || $_SESSION["rol"]=="3")
            {
            ?>
			<div class="box">
				<div class="h_title">&#8250; Facturación</div>
				<ul>
					<li class="b1"><a class="icon config" href="" onclick="mostrarFormularioReporteMensual(); return false;">Reporte Mensual</a></li>
					<li class="b2"><a class="icon contact" href="" onclick="mostrarFormularioGrafica(); return false;">Grafica por Entidad</a></li>
				</ul>
			</div>
            <?php
            }
            if($_SESSION["rol"]=="1" || $_SESSION["rol"]=="3")
            {
            ?>
            <div class="box">
				<div class="h_title">&#8250; Reportes</div>
				<ul>
					<li class="b1"><a class="icon config" href="" onclick="mostrarFormularioGenHC();return false;">Generar Historia Clinica</a></li>
					<li class="b2"><a class="icon contact" href="" onclick="formularioRIPS(); return false;">Generar RIPS</a></li>
				</ul>
			</div>
            <?php
            }
            if($_SESSION["rol"]=="1" || $_SESSION["rol"]=="3")
            {
            ?>
            <div class="box">
				<div class="h_title">&#8250; Configuración</div>
				<ul>
					<li class="b1"><a class="icon config" href="" onclick="dibujarFormularioIngresoeps();return false;">Ingresar EPS</a></li>
					<li class="b2"><a class="icon contact" href="" onclick="consultarTodoseps();return false;">Consultar EPS</a></li>
				</ul>
			</div>
            <?php
            }
            ?>
            
                    <?php
            
            if($_SESSION["rol"]=="1")
            {
            ?>
            <div class="box">
				<div class="h_title">&#8250; Panel de CUPS</div>
				<ul>
					<li class="b1"><a class="icon config" href="" onclick="dibujarFormularioCups();return false;">Ingresar Cups</a></li>
					<li class="b2"><a class="icon report" href="" onclick="consultarTodosCups();return false;">Consultar Cups</a></li>
				</ul>
			</div>
            <?php
            }
            ?>
                    
                    
		</div>
		<div id="main">
            <div class="full_w">
				<div class="h_title">Principal - Pagina Inicial</div>
				<form action="" method="post">
					
				</form>
			</div>
		</div>
		<div class="clear"></div>
	</div>

	<div id="footer">
		<div class="left">
			<p>Desarrollado por: <a target="_blank" href="http://gatolocostudios.com">Gato Loco Strudios</a> | <a target="_blank" href="http://mavik-soft.com">Maviksoft</a></p>
		</div>
		<div class="right">
			<p><a href=""></a> Todos los derechos reservados | 2014<a href=""></a></p>
		</div>
	</div>
</div>

</body>
</html>
<?php
}
else
{
    header('Location: index.php');
}
?>