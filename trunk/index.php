<?php
session_start();
//echo $_SESSION["usuario"];
if(empty($_SESSION["usuario"]) || $_SESSION["usuario"]=="")
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pl" xml:lang="pl">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="Paweł 'kilab' Balicki - kilab.pl" />
<title>Sistema de Control Médico</title>
<link rel="stylesheet" type="text/css" href="css/login.css" media="screen" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/validacion.js"></script>
</head>
<body>
<div class="wrap">
	<div id="content">
		<div id="main">
			<div class="full_w">
				<form action="" method="post">
					<label for="login">Usuario:</label>
					<input id="identificacion" name="login" class="text" />
					<label for="pass">Constraseña:</label>
					<input id="contrasena" name="pass" type="password" class="text" />
					<div class="sep"></div>
					<button type="submit" class="ok" onclick="ingresar();return false;">Ingresar</button> <a class="button" href="">Solicitar Contraseña</a>
				</form>
			</div>
			<div class="footer"><a href="">Gatoloco Studios</a> | <a href="">Maviksoft</a></div>
		</div>
	</div>
</div>

</body>
</html>
<?php
}
else
{
    header('Location: sistema.php');
}
?>