<?php

/**
 * @author www.intercambiosvirtuales.org
 * @copyright 2013
 */
date_default_timezone_set('America/Buenos_Aires');

class ServiciosE {
	
	function TraerEquipos() {
		$sql = "select IdEquipo,
				Nombre,
				nombrecapitan,
				emailcapitan,
				telefonocapitan,
				facebookcapitan,
				nombresubcapitan,
				emailsubcapitan,
				telefonosubcapitan,
				facebooksubcapitan from dbequipos order by nombre";
		return $this-> query($sql,0);
	}

	
	function TraerIdEquipo($id) {
		$sql = "select * from dbequipos where idequipo = ".$id;
		return $this-> query($sql,0);
	}
	
	function TraerIdEquipoInfo($id) {
		$sql = "select * from dbequipos e
				inner join dbcontactos c
				on e.refcontacto = c.idcontacto 
				where idequipo = ".$id;
		return $this-> query($sql,0);
	}
	
function insertarEquipos($nombre,$nombrecapitan,$telefonocapitan,$facebookcapitan,$nombresubcapitan,$telefonosubcapitan,$facebooksubcapitan,$emailcapitan,$emailsubcapitan) {
$sql = "insert into dbequipos(idequipo,nombre,nombrecapitan,telefonocapitan,facebookcapitan,nombresubcapitan,telefonosubcapitan,facebooksubcapitan,emailcapitan,emailsubcapitan)
values ('','".utf8_decode($nombre)."','".utf8_decode($nombrecapitan)."','".utf8_decode($telefonocapitan)."','".utf8_decode($facebookcapitan)."','".utf8_decode($nombresubcapitan)."','".utf8_decode($telefonosubcapitan)."','".utf8_decode($facebooksubcapitan)."','".utf8_decode($emailcapitan)."','".utf8_decode($emailsubcapitan)."')";
$res = $this->query($sql,1);
if ((integer)$res > 0) {
	$sql2 = "insert into tbconducta(idconducta,refequipo,puntos,reffecha)
	values ('',".$res.",0,0)";
	$res2 = $this->query($sql2,1);	
}
return $res;
}


function modificarEquipos($id,$nombre,$nombrecapitan,$telefonocapitan,$facebookcapitan,$nombresubcapitan,$telefonosubcapitan,$facebooksubcapitan,$emailcapitan,$emailsubcapitan) {
$sql = "update dbequipos
set
nombre = '".utf8_decode($nombre)."',nombrecapitan = '".utf8_decode($nombrecapitan)."',telefonocapitan = '".utf8_decode($telefonocapitan)."',facebookcapitan = '".utf8_decode($facebookcapitan)."',nombresubcapitan = '".utf8_decode($nombresubcapitan)."',telefonosubcapitan = '".utf8_decode($telefonosubcapitan)."',facebooksubcapitan = '".utf8_decode($facebooksubcapitan)."',emailcapitan = '".utf8_decode($emailcapitan)."',emailsubcapitan = '".utf8_decode($emailsubcapitan)."'
where idequipo =".$id;
$res = $this->query($sql,0);
return $res;
}


function eliminarEquipos($id) {
$sql = "delete from dbequipos where idequipo =".$id;
$res = $this->query($sql,0);
return $res;
} 
	
	
	
	
	
function insertarSuspendidos($refjugador,$motivos,$cantidadfechas,$fechacreacion) {
$sql = "insert into tbsuspendidos(idsuspendido,refjugador,motivos,cantidadfechas,fechacreacion)
values ('',".$refjugador.",'".utf8_decode($motivos)."',".$cantidadfechas.",'".utf8_decode($fechacreacion)."')";
$res = $this->query($sql,1);
return $res;
}


function modificarSuspendidos($id,$refjugador,$motivos,$cantidadfechas,$fechacreacion) {
$sql = "update tbsuspendidos
set
refjugador = ".$refjugador.",motivos = '".utf8_decode($motivos)."',cantidadfechas = ".$cantidadfechas.",fechacreacion = '".utf8_decode($fechacreacion)."'
where idsuspendido =".$id;
$res = $this->query($sql,0);
return $res;
}


function eliminarSuspendidos($id) {
$sql = "delete from tbsuspendidos where idsuspendido =".$id;
$res = $this->query($sql,0);
return $res;
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