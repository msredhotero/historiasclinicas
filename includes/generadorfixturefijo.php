
<?php

date_default_timezone_set('America/Buenos_Aires');

class GenerarFixture {

function traerEquipoPorId($id) {

		$sql		=	"
			select 
				tge.refGrupo,
				g.nombre,
				tge.IdTorneoGE,
				tge.refequipo,
				e.Nombre,
				h.horario,
				tge.prioridad,
				tp.valor
			from
				dbtorneoge tge
					inner join
				dbturnosequiposprioridad tp ON tge.IdTorneoGE = tp.reftorneoge
					inner join
				dbequipos e ON e.IdEquipo = tge.refequipo
					inner join
				dbgrupos g ON g.IdGrupo = tge.refgrupo
					inner join
				tbhorarios h ON h.idhorario = tp.refturno
			where tge.refequipo = ".$id."
			order by g.nombre  , tp.valor desc , tge.prioridad desc

				";

	
	$res = query($sql,0);
	if (mysql_num_rows($res)>0) {
		return $res;
	}
	return 0;
}


function traerEquipos($idtorneo, $idZona) {

		$sql		=	"
			select 
				concat(g.nombre,' - ', e.nombre)as nombreEquipo,tge.idtorneoge, g.nombre, e.nombre, t.nombre, tge.prioridad
			from
				dbequipos e
					inner join
				dbtorneoge tge ON tge.refequipo = e.idequipo
					inner join
				dbgrupos g ON g.idgrupo = tge.refgrupo
					inner join
				dbtorneos t ON t.idtorneo = tge.reftorneo
				inner
								join		tbtipotorneo tp
								on			tp.idtipotorneo = t.reftipotorneo
					
					where	t.idtorneo = ".$idtorneo." and tge.refgrupo = ".$idZona."
					limit 12
			
				";

	
	$res2 = $this->query($sql,0);

	return $res2;
}

function Generar($idtorneo, $idZona) {
$equipo = $this->traerEquipos($idtorneo, $idZona);



$cadFixture = '';
$arEquipos = array();
$arEquiposId = array();

if ((mysql_num_rows($equipo)%2) == 1) {
	$cantidadEquipos = mysql_num_rows($equipo)+1;
	for ($p=0;$p<mysql_num_rows($equipo);$p++) {
		$arEquipos[$p] = mysql_result($equipo,$p,0);
		$arEquiposId[$p] = mysql_result($equipo,$p,1);
	}
	$arEquipos[$cantidadEquipos-1] = "borrar";
	$arEquiposId[$cantidadEquipos-1] = 0;
} else {
	$cantidadEquipos = mysql_num_rows($equipo);
	for ($p=0;$p<mysql_num_rows($equipo);$p++) {
		$arEquipos[$p] = mysql_result($equipo,$p,0);
		$arEquiposId[$p] = mysql_result($equipo,$p,1);
	}
}

//var_dump($arEquipos);



$columnas	= $cantidadEquipos - 1;
$filas		= $cantidadEquipos / 2;

$fixture = array();

$fixtureNum = array();

$k = $cantidadEquipos;
$m = 2;

for ($i=1;$i<=$filas;$i++) {
	$m = $i + 1;
	//$k = $k - 1;
	if ($i >2) {
		$k = $k - 1;
	}
	//echo 'esta es k:'.$k."<br>";
	for ($j=1;$j<=$columnas;$j++) {
		
		if (($i == 1) && ($j == 1)) {
			$fixture[$i-1][$j-1] = $arEquipos[0]."***".$arEquipos[1]."***".$arEquiposId[0]."***".$arEquiposId[1];
			$fixtureNum[$i-1][$j-1] = "1***2";
			//echo 'bien';
		} else {
			if ($i == 1) {
				//echo 'bien'.($cantidadEquipos+1-$j);
				$fixture[$i-1][$j-1] = $arEquipos[0]."***".$arEquipos[$cantidadEquipos+1-$j]."***".$arEquiposId[0]."***".$arEquiposId[$cantidadEquipos+1-$j];
				//$fixtureNum[$i-1][$j-1] = "1***".($cantidadEquipos+2-$j);	
					
			} else {
				//echo 'bien'.($k-$i+1)."<br>";
				//echo 'esta es m:'.$m."<br>";
				//echo 'esta es j:'.$j."<br>";
				//echo 'mal'.($m)."<br>";
				//echo 'esta es i:'.$i."<br>";
				$fixture[$i-1][$j-1] = $arEquipos[$k-1]."***".$arEquipos[$m-1]."***".$arEquiposId[$k-1]."***".$arEquiposId[$m-1];
				$fixtureNum[$i-1][$j-1] = ($k)."***".($m);
				$k = $k - 1;
				
					
				if ($k < 2) {
					$k = $cantidadEquipos;	
				}
				
				$m = $m - 1;

				if ($m < 2) {
					$m = $cantidadEquipos;	
				}
				
				
			}
		}
		
		
	}	
}

return $fixture;

}

function query($sql,$accion) {
	
	require_once 'appconfig.php';

	$appconfig	= new appconfig();
	$datos		= $appconfig->conexion();
	$hostname	= $datos['hostname'];
	$database	= $datos['database'];
	$username	= $datos['username'];
	$password	= $datos['password'];
	
	
	$conex = mysql_connect($hostname,$username,$password) or die ("no se puede conectar".mysql_error());
	
	mysql_select_db($database);
	
	$result = mysql_query($sql,$conex);
	if ($accion && $result) {
		$result = mysql_insert_id();
	}
	mysql_close($conex);
	return $result;
	
}


}
?>
</body>
</html>