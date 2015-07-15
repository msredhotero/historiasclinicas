<?php

/**
 * @author www.intercambiosvirtuales.org
 * @copyright 2013
 */
date_default_timezone_set('America/Buenos_Aires');

class ServiciosPagos {
	
	/* PARA Pagos */

	function insertarPagos($refequipo,$reftorneo,$refzona,$reffecha,$importe,$observacion,$fechacreacion) {
	$sql = "insert into dbpagos(idpago,refequipo,reftorneo,refzona,reffecha,importe,observacion,fechacreacion)
	values ('',".$refequipo.",".$reftorneo.",".$refzona.",".$reffecha.",".$importe.",'".utf8_decode($observacion)."','".utf8_decode($fechacreacion)."')";
	$res = $this->query($sql,1);
	return $res;
	}
	
	
	function modificarPagos($id,$refequipo,$reftorneo,$refzona,$reffecha,$importe,$observacion,$fechacreacion) {
	$sql = "update dbpagos
	set
	refequipo = ".$refequipo.",reftorneo = ".$reftorneo.",refzona = ".$refzona.",reffecha = ".$reffecha.",importe = ".$importe.",observacion = '".utf8_decode($observacion)."',fechacreacion = '".utf8_decode($fechacreacion)."'
	where idpago =".$id;
	$res = $this->query($sql,0);
	return $res;
	}
	
	
	function eliminarPagos($id) {
	$sql = "delete from dbpagos where idpago =".$id;
	$res = $this->query($sql,0);
	return $res;
	}
	
	
	function traerPagos() {
	$sql = "select 	idpago,
					e.nombre,
					t.nombre,
					z.nombre,
					f.tipofecha,
					p.importe,
					p.observacion,
					p.fechacreacion,
					p.refequipo,
					p.reftorneo,
					p.refzona,
					p.reffecha 
					from dbpagos p 
					inner join dbequipos e on e.idequipo = p.refequipo
					inner join dbtorneos t on t.idtorneo = p.reftorneo
					inner join dbgrupos z on z.idgrupo = p.refzona
					inner join tbfechas f on f.idfecha = p.reffecha
					order by 1";
	$res = $this->query($sql,0);
	return $res;
	}
	
	
	function traerPagosPorId($id) {
	$sql = "select idpago,refequipo,reftorneo,refzona,reffecha,importe,observacion,fechacreacion from dbpagos where idpago =".$id;
	$res = $this->query($sql,0);
	return $res;
	}
	
	/* Fin */
	
	
	
	
	
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
		
		        $error = 0;
		mysql_query("BEGIN");
		$result=mysql_query($sql,$conex);
		if ($accion && $result) {
			$result = mysql_insert_id();
		}
		if(!$result){
			$error=1;
		}
		if($error==1){
			mysql_query("ROLLBACK");
			return false;
		}
		 else{
			mysql_query("COMMIT");
			return $result;
		}
		
	}
	
	
	
	
	} //fin de servicios


?>