<?php


include ('includes/funciones.php');
include ('includes/funcionesUsuarios.php');
include ('includes/funcionesHTML.php');
include ('includes/funcionesGrupos.php');
include ('includes/funcionesDATOS.php');

$serviciosFunciones = new Servicios();
$serviciosUsuario 	= new ServiciosUsuarios();
$serviciosHTML 		= new ServiciosHTML();
$serviciosGrupos 	= new ServiciosG();
$serviciosDatos		= new ServiciosDatos();


$resZonasTorneos = $serviciosDatos->traerZonasPorTorneo(6);


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.Estilo2 {font-size: 10px}
#TabbedPanels1 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible table .Estilo2 td {
	color: #FFF;
}
#TabbedPanels1 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible table .Estilo2 td {
	font-family: Verdana, Geneva, sans-serif;
}
#TabbedPanels1 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible table .Estilo2 td {
	color: #FFF;
}
#TabbedPanels1 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible table {
	color: #FFF;
	font-weight: normal;
}
.Estilo21 {font-size: 10px;
	text-align: left;
}
a:link {
	color: #000;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #000;
}
a:hover {
	text-decoration: underline;
	color: #000;
}
a:active {
	text-decoration: none;
}
.negrita {
	color: #000;
}
datafutbol {
	font-size: 9px;
}
#TabbedPanels1 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible table tr td {
	color: #333;
	font-size: 12px;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
.negrita1 {color: #666;
	font-size: 11px;
}
.Estilo181 {font-size: 10px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #666;
	font-weight: bold;
}
.Estilo611 {font-size: 10.5px;
	color: #666;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: normal;
}
.Estilo71 {font-size: 10.5px;
	color: #666;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.negrita11 {color: #666;
	font-size: 11px;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<table width="790" border="0">
  <tr>
    <td><br />
      <br />
    <img src="images/lineadivisoria.jpg" width="790" height="23" /><br />      <table width="790" border="0">
      <tr>
        <td><table width="790" border="0">
          <tr>
            <td width="244">&nbsp;</td>
            <td width="117"><a href="http://www.laiguanafutbol.com.ar/laiguana_sabados.php?page=sab_fut5_est" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','images/estadisticas_hover.jpg',1)"><img src="images/estadisticas.jpg" name="Image5" width="117" height="22" border="0" id="Image5" /></a></td>
            <td width="32"><a href="http://www.laiguanafutbol.com.ar/laiguana_sabados.php?page=sab_fut5_resultados" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image8','','images/ultimosresultados_hover.jpg',1)"><img src="images/ultimosresultados.jpg" name="Image8" border="0" id="Image8" /></a></td>
            <td width="107"><a href="http://www.laiguanafutbol.com.ar/laiguana_sabados.php?page=sab_fut5_fix" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image7','','images/fixture_hover.jpg',1)"><img src="images/fixture.jpg" name="Image7" width="109" height="22" border="0" id="Image7" /></a></td>
            <td width="107"><a href="http://www.laiguanafutbol.com.ar/laiguana_sabados.php?page=sab_futfem_pro" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image9','','images/proximafecha_hover.jpg',1)"><img src="images/proximafecha.jpg" name="Image9" width="127" height="22" border="0" id="Image9" /></a></td>
            <td width="113"><a href="http://www.laiguanafutbol.com.ar/laiguana_sabados.php?page=sab_futfem_reglamento" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image6','','images/reglamento_hover.jpg',1)"><img src="images/reglamento.jpg" name="Image6" width="113" height="22" border="0" id="Image6" /></a></td>
            <td width="42">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
    </table>    <br /></td>
  </tr>
</table>
<br />
<br />
<table width="790" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><div id="TabbedPanels1" class="TabbedPanels">
      <ul class="TabbedPanelsTabGroup">
        <li class="TabbedPanelsTab" tabindex="0">Futbol 5 Sabados / Torneo Inicial 2015</li>
</ul>
      <div class="TabbedPanelsContentGroup">
        <div class="TabbedPanelsContent">
          <!-- IFRAME CON TODAS LAS TABLAS JUNTAS. -->
          <!--<iframe src="http://www.datafutbol.net/comunidad/campeonato/tablas/667" name="Campeonato-396" height="350" width="780" scrolling="no" frameborder="0">
            <p>Tu browser no permite mostrar estas tablas.</p>
            </iframe>
          <br />
          <img src="../images/lineadivisoria.jpg" width="790" height="23" /><br />
          <iframe src="http://www.datafutbol.net/comunidad/campeonato/tablas/668" name="Campeonato-396" width="780" height="420" scrolling="No" frameborder="0" id="Campeonato-396">
          <p>Tu browser no permite mostrar estas tablas.</p>
          </iframe>
          <br />
          <img src="../images/lineadivisoria.jpg" width="790" height="23" /><br />
          <iframe src="http://www.datafutbol.net/comunidad/campeonato/tablas/669" name="Campeonato-396" width="780" height="500" scrolling="No" frameborder="0" id="Campeonato-">
          <p>Tu browser no permite mostrar estas tablas.</p>
          </iframe>
          <br />
          <img src="../images/lineadivisoria.jpg" width="790" height="23" /><br />
          <iframe src="http://www.datafutbol.net/comunidad/campeonato/tablas/670" name="Campeonato-396" width="780" height="600" scrolling="No" frameborder="0" id="Campeonato-2">
          <p>Tu browser no permite mostrar estas tablas.</p>
          </iframe>-->
          <?php while ($row = mysql_fetch_array($resZonasTorneos)) { ?>
          <iframe src="datahtml/iguana_tablas.php?id=6&zona=<?php echo $row[0]; ?>&fecha=23" name="Campeonato-396" height="500" width="780" scrolling="no" frameborder="0"> 
            <p>Tu browser no permite mostrar estas tablas.</p>
            </iframe>
            <?php } ?>

<br />
        </div>
</div>
    </div>
      <p><br />
        <br />
        <br />
        <br />
    </p></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp; </p>
<script type="text/javascript">
<!--
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
var TabbedPanels2 = new Spry.Widget.TabbedPanels("TabbedPanels2");
//-->
</script>
</body>
</html>