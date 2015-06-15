<?php

/**
 * @author www.intercambiosvirtuales.org
 * @copyright 2013
 */
date_default_timezone_set('America/Buenos_Aires');

class Servicios {
	
	/* logica de negocios para los tipos de torneos */ 
	
	function traerTipoTorneo() {
		$sql = "SELECT idtipotorneo,descripciontorneo FROM tbtipotorneo order by descripciontorneo";
		$res 	=	$this->query($sql,0);
		
		return $res;
		
	}
	
	
	
	/* fin */


	function camposTablaView($cabeceras,$datos,$cantidad) {
		$cadView = '';
		$cadRows = '';
		if ($cantidad == 99) {
				$cantidad = 5;
				$classMod = 'varmodificargoleadores';
				$classEli = 'varborrargoleadores';
				$idresultados = "resultadosgoleadores";
			} else {
				$classMod = 'varmodificar';
				$classEli = 'varborrar';
				$idresultados = "resultados";
			}
		while ($row = mysql_fetch_array($datos)) {
			$cadsubRows = '';
			$cadRows = $cadRows.'
			
					<tr class="'.$row[0].'">
                        	';
			
			
			for ($i=1;$i<=$cantidad;$i++) {
				
				$cadsubRows = $cadsubRows.'<td>'.$row[$i].'</td>';	
			}
			
			
			
			$cadRows = $cadRows.'
                            '.$cadsubRows.'
							<td>
								
                                <div class="btn-group">
                                    <button class="btn btn-success" type="button">Acciones</button>
                                    
                                    <button class="btn btn-success dropdown-toggle" data-toggle="dropdown" type="button">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                        <a href="javascript:void(0)" class="'.$classMod.'" id="'.$row[0].'">Modificar</a>
                                        </li>

                                        <li>
                                        <a href="javascript:void(0)" class="'.$classEli.'" id="'.$row[0].'">Borrar</a>
                                        </li>
										
                                    </ul>
                                </div>
                            </td>
                        </tr>
			';
		}
		
		$cadView = $cadView.'
			<table class="table table-striped table-responsive" id="example">
            	<thead>
                	<tr>
                    	'.$cabeceras.'
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody id="'.$idresultados.'">

                	'.utf8_encode($cadRows).'
                </tbody>
            </table>
			<div style="margin-bottom:85px; margin-right:60px;"></div>
		
		';	
		
		
		return $cadView;
	}
	
	
	
	function camposTabla($accion,$tabla,$lblcambio,$lblreemplazo,$refdescripcion,$refCampo) {
		$sql	=	"show columns from ".$tabla;
		$res 	=	$this->query($sql,0);
		
		$camposEscondido = "";
		/* Analizar para despues */
		/*if (count($refencias) > 0) {
			$j = 0;

			foreach ($refencias as $reftablas) {
				$sqlTablas = "select id".$reftablas.", ".$refdescripcion[$j]." from ".$reftablas." order by ".$refdescripcion[$j];
				$resultadoRef[$j][0] = $this->query($sqlTablas,0);
				$resultadoRef[$j][1] = $refcampos[$j];
			}
		}*/
		
		
		if ($res == false) {
			return 'Error al traer datos';
		} else {
			
			$form	=	'';
			
			while ($row = mysql_fetch_array($res)) {
				
				$i = 0;
				foreach ($lblcambio as $cambio) {
					if ($row[0] == $cambio) {
						$label = $lblreemplazo[$i];
						$i = 0;
						break;
					} else {
						$label = $row[0];
					}
					$i = $i + 1;
				}
				
				if ($row[3] != 'PRI') {
					if (strpos($row[1],"decimal") !== false) {
						$form	=	$form.'
						
						<div class="form-group col-md-6">
							<label for="'.$label.'" class="control-label" style="text-align:left">'.ucwords($label).'</label>
							<div class="input-group col-md-12">
								<span class="input-group-addon">$</span>
								<input type="text" class="form-control" id="'.strtolower($row[0]).'" name="'.strtolower($row[0]).'" value="0" required>
								<span class="input-group-addon">.00</span>
							</div>
						</div>
						
						';
					} else {
						if ( in_array($row[0],$refCampo) ) {
							
							$campo = strtolower($row[0]);
							
							$option = $refdescripcion[array_search($row[0], $refCampo)];
							/*
							$i = 0;
							foreach ($lblcambio as $cambio) {
								if ($row[0] == $cambio) {
									$label = $lblreemplazo[$i];
									$i = 0;
									break 2;
								} else {
									$label = $row[0];
								}
								$i = $i + 1;
							}*/
							
							$form	=	$form.'
							
							<div class="form-group col-md-6">
								<label for="'.$campo.'" class="control-label" style="text-align:left">'.$label.'</label>
								<div class="input-group col-md-12">
									<select class="form-control" id="'.strtolower($campo).'" name="'.strtolower($campo).'">
										';
							
							$form	=	$form.$option;
							
							$form	=	$form.'		</select>
								</div>
							</div>
							
							';
							
						} else {
							
							if (strpos($row[1],"bit") !== false) {
								$label = ucwords($label);
								$campo = strtolower($row[0]);
								
								$form	=	$form.'
								
								<div class="form-group col-md-6">
									<label for="'.$campo.'" class="control-label" style="text-align:left">'.$label.'</label>
									<div class="input-group col-md-12 fontcheck">
										<input type="checkbox" class="form-control" id="'.$campo.'" name="'.$campo.'" style="width:50px;" required> <p>Si/No</p>
									</div>
								</div>
								
								';
								
								
							} else {
								
								if (strpos($row[1],"date") !== false) {
									$label = ucwords($label);
									$campo = strtolower($row[0]);
									
									$form	=	$form.'
									
									<div class="form-group col-md-6">
										<label for="'.$campo.'" class="control-label" style="text-align:left">'.$label.'</label>
										<div class="input-group date form_date col-md-6" data-date="" data-date-format="dd MM yyyy" data-link-field="'.$campo.'" data-link-format="yyyy-mm-dd">
											<input class="form-control" size="50" type="text" value="" readonly>
											<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
										</div>
										<input type="hidden" name="'.$campo.'" id="'.$campo.'" value="" />
									</div>
									
									';
									
								} else {
									
									if (strpos($row[1],"time") !== false) {
										$label = ucwords($label);
										$campo = strtolower($row[0]);
										
										$form	=	$form.'
										
										<div class="form-group col-md-6">
											<label for="'.$campo.'" class="control-label" style="text-align:left">'.$label.'</label>
											<div class="input-group bootstrap-timepicker col-md-6">
												<input id="timepicker2" name="'.$campo.'" class="form-control">
												<span class="input-group-addon">
<span class="glyphicon glyphicon-time"></span>
</span>
											</div>
											
										</div>
										
										';
										
									} else {
										if ((integer)(str_replace('varchar(','',$row[1])) > 200) {
											$label = ucwords($label);
											$campo = strtolower($row[0]);
											
											$form	=	$form.'
											
											<div class="form-group col-md-6">
												<label for="'.$campo.'" class="control-label" style="text-align:left">'.$label.'</label>
												<div class="input-group col-md-12">
													<textarea type="text" rows="10" cols="6" class="form-control" id="'.$campo.'" name="'.$campo.'" placeholder="Ingrese el '.$label.'..." required></textarea>
												</div>
												
											</div>
											
											';
											
										} else {
											$label = ucwords($label);
											$campo = strtolower($row[0]);
											
											$form	=	$form.'
											
											<div class="form-group col-md-6">
												<label for="'.$campo.'" class="control-label" style="text-align:left">'.$label.'</label>
												<div class="input-group col-md-12">
													<input type="text" class="form-control" id="'.$campo.'" name="'.$campo.'" placeholder="Ingrese el '.$label.'..." required>
												</div>
											</div>
											
											';
										}
									}
								}
							}
						}
						
						
					}
				} else {
	
					$camposEscondido = $camposEscondido.'<input type="hidden" id="accion" name="accion" value="'.$accion.'"/>';	
				}
			}
			
			$formulario = $form."<br><br>".$camposEscondido;
			
			return $formulario;
		}	
	}







	function camposTablaModificar($id,$lblid,$accion,$tabla,$lblcambio,$lblreemplazo,$refdescripcion,$refCampo) {
		
		if ($tabla == 'dbtorneos') {
			$resMod = $this->TraerIdTorneos($id);
		} else {
			$sqlMod = "select * from ".$tabla." where ".$lblid." = ".$id;
			$resMod = $this->query($sqlMod,0);
		}
		$sql	=	"show columns from ".$tabla;
		$res 	=	$this->query($sql,0);
		
		$camposEscondido = "";
		/* Analizar para despues */
		/*if (count($refencias) > 0) {
			$j = 0;

			foreach ($refencias as $reftablas) {
				$sqlTablas = "select id".$reftablas.", ".$refdescripcion[$j]." from ".$reftablas." order by ".$refdescripcion[$j];
				$resultadoRef[$j][0] = $this->query($sqlTablas,0);
				$resultadoRef[$j][1] = $refcampos[$j];
			}
		}*/
		
		
		if ($res == false) {
			return 'Error al traer datos';
		} else {
			
			$form	=	'';
			
			while ($row = mysql_fetch_array($res)) {
				
				$i = 0;
				foreach ($lblcambio as $cambio) {
					if ($row[0] == $cambio) {
						$label = $lblreemplazo[$i];
						$i = 0;
						break;
					} else {
						$label = $row[0];
					}
					$i = $i + 1;
				}
				
				if ($row[3] != 'PRI') {
					if (strpos($row[1],"decimal") !== false) {
						$form	=	$form.'
						
						<div class="form-group col-md-6">
							<label for="'.$label.'" class="control-label" style="text-align:left">'.ucwords($label).'</label>
							<div class="input-group col-md-12">
								<span class="input-group-addon">$</span>
								<input type="text" class="form-control" id="'.strtolower($row[0]).'" name="'.strtolower($row[0]).'" value="'.mysql_result($resMod,0,$row[0]).'" required>
								<span class="input-group-addon">.00</span>
							</div>
						</div>
						
						';
					} else {
						if ( in_array($row[0],$refCampo) ) {
							
							$campo = strtolower($row[0]);
							
							$option = $refdescripcion[array_search($row[0], $refCampo)];
							/*
							$i = 0;
							foreach ($lblcambio as $cambio) {
								if ($row[0] == $cambio) {
									$label = $lblreemplazo[$i];
									$i = 0;
									break 2;
								} else {
									$label = $row[0];
								}
								$i = $i + 1;
							}*/
							
							$form	=	$form.'
							
							<div class="form-group col-md-6">
								<label for="'.$campo.'" class="control-label" style="text-align:left">'.$label.'</label>
								<div class="input-group col-md-12">
									<select class="form-control" id="'.strtolower($campo).'" name="'.strtolower($campo).'">
										';
							
							$form	=	$form.$option;
							
							$form	=	$form.'		</select>
								</div>
							</div>
							
							';
							
						} else {
							
							if (strpos($row[1],"bit") !== false) {
								$label = ucwords($label);
								$campo = strtolower($row[0]);
								
								$activo = '';
								if (mysql_result($resMod,0,$row[0])==1){
									$activo = 'checked';
								}
								
								$form	=	$form.'
								
								<div class="form-group col-md-6">
									<label for="'.$campo.'" class="control-label" style="text-align:left">'.$label.'</label>
									<div class="input-group col-md-12 fontcheck">
										<input type="checkbox" '.$activo.' class="form-control" id="'.$campo.'" name="'.$campo.'" style="width:50px;" required> <p>Si/No</p>
									</div>
								</div>
								
								';
								
								
							} else {
								
								if (strpos($row[1],"date") !== false) {
									$label = ucwords($label);
									$campo = strtolower($row[0]);
									
									$form	=	$form.'
									
									<div class="form-group col-md-6">
										<label for="'.$campo.'" class="control-label" style="text-align:left">'.$label.'</label>
										<div class="input-group date form_date col-md-6" data-date="" data-date-format="dd MM yyyy" data-link-field="'.$campo.'" data-link-format="yyyy-mm-dd">
											<input class="form-control" value="'.mysql_result($resMod,0,$row[0]).'" size="50" type="text" value="" readonly>
											<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
										</div>
										<input type="hidden" name="'.$campo.'" id="'.$campo.'" value="'.mysql_result($resMod,0,$row[0]).'" />
									</div>
									
									';
									
								} else {
									
									if (strpos($row[1],"time") !== false) {
										$label = ucwords($label);
										$campo = strtolower($row[0]);
										
										$form	=	$form.'
										
										<div class="form-group col-md-6">
											<label for="'.$campo.'" class="control-label" style="text-align:left">'.$label.'</label>
											<div class="input-group bootstrap-timepicker col-md-6">
												<input id="timepicker2" value="'.mysql_result($resMod,0,$row[0]).'" name="'.$campo.'" class="form-control">
												<span class="input-group-addon">
<span class="glyphicon glyphicon-time"></span>
</span>
											</div>
											
										</div>
										
										';
										
									} else {
										$label = ucwords($label);
										$campo = strtolower($row[0]);
										
										$form	=	$form.'
										
										<div class="form-group col-md-6">
											<label for="'.$campo.'" class="control-label" style="text-align:left">'.$label.'</label>
											<div class="input-group col-md-12">
												<input type="text" value="'.utf8_encode(mysql_result($resMod,0,$row[0])).'" class="form-control" id="'.$campo.'" name="'.$campo.'" placeholder="Ingrese el '.$label.'..." required>
											</div>
										</div>
										
										';
									}
								}
							}
						}
						
						
					}
				} else {
	
					$camposEscondido = $camposEscondido.'<input type="hidden" id="accion" name="accion" value="'.$accion.'"/>'.'<input type="hidden" id="id" name="id" value="'.$id.'"/>';	
				}
			}
			
			$formulario = $form."<br><br>".$camposEscondido;
			
			return $formulario;
		}	
	}
	




	function camposTablaMod($accion,$id) {
		
		$resTipoVenta = $this->traerUsuariosPorId($id);
		
		$sql	=	"show columns from se_usuarios";
		$res 	=	$this->query($sql,0);
		if ($res == false) {
			return 'Error al traer datos';
		} else {
			
			$form	=	'';
			
			while ($row = mysql_fetch_array($res)) {
				if ($row[3] != 'PRI') {
					if (strpos($row[1],"decimal") !== false) {
						$form	=	$form.'
						
						<div class="form-group col-md-6">
							<label for="'.$row[0].'" class="control-label" style="text-align:left">'.ucwords($row[0]).'</label>
							<div class="input-group col-md-12">
								<span class="input-group-addon">$</span>
								<input type="text" class="form-control" id="'.$row[0].'" name="'.$row[0].'" value="'.mysql_result($resTipoVenta,0,$row[0]).'" required>
								<span class="input-group-addon">.00</span>
							</div>
						</div>
						
						';
					} else {
						
						$formTabla = "";
						$formReferencia = "";
						switch ($row[0]) {
							case "refroll":
								$label = "Rol";
								$campo = $row[0];
								
								$formTabla = '
									<div class="form-group col-md-6">
										<label for="'.$campo.'" class="control-label" style="text-align:left">'.$label.'</label>
										<div class="input-group col-md-12">
													
											<select class="form-control" id="'.$campo.'" name="'.$campo.'">
												';
												if (mysql_result($resTipoVenta,0,$campo) == 'SuperAdmin') {
													$formTabla = $formTabla.'
														<option value="SuperAdmin" selected>SuperAdmin</option>
														<option value="Administrador">Administrador</option>
														<option value="Empleado">Empleado</option>
													';
												}
												if (mysql_result($resTipoVenta,0,$campo) == 'Administrador') {
													$formTabla = $formTabla.'
														<option value="SuperAdmin">SuperAdmin</option>
														<option value="Administrador" selected>Administrador</option>
														<option value="Empleado">Empleado</option>
													';
												}
												if (mysql_result($resTipoVenta,0,$campo) == 'Empleado') {
													$formTabla = $formTabla.'
														<option value="SuperAdmin">SuperAdmin</option>
														<option value="Administrador">Administrador</option>
														<option value="Empleado" selected>Empleado</option>
													';
												}
												
								$formTabla = $formTabla.'</select>
										</div>
									</div>
									
									';
								
								break;
							case "refvalores":
								$label = "Aplica Sobre";
								$campo = $row[0];
								
								$sqlRef = "select idvalor,descripcion from lcdd_valores";
								$resRef = $this->query($sqlRef,0);
								
								$formRefDivUno = '<div class="form-group col-md-6">
											<label for="'.$row[0].'" class="control-label" style="text-align:left">'.$label.'</label>
											<div class="input-group col-md-12">
												<select class="form-control" id="'.$campo.'" name="'.$campo.'" >';
								$formRefDivDos = "</select></div></div>";
								$formOption = "";
								
								while ($rowRef = mysql_fetch_array($resRef)) {
									if (mysql_result($resTipoVenta,0,$campo) == $rowRef[0]) {
										$formOption = $formOption."<option value='".$rowRef[0]."' selected>".$rowRef[1]."</option>";
									} else {
										$formOption = $formOption."<option value='".$rowRef[0]."'>".$rowRef[1]."</option>";
									}
								}
								
								$formReferencia = $formRefDivUno.$formOption.$formRefDivDos;
								
								break;
							default:
								$label = ucwords($row[0]);
								$campo = $row[0];
								
								$formTabla = '
									<div class="form-group col-md-6">
										<label for="'.$campo.'" class="control-label" style="text-align:left">'.$label.'</label>
										<div class="input-group col-md-12">
											<input type="text" class="form-control" value="'.utf8_encode(mysql_result($resTipoVenta,0,$campo)).'" id="'.$campo.'" name="'.$campo.'" placeholder="Ingrese el '.$label.'..." required>
										</div>
									</div>
									
									';
									
								break;
							}
						
						
						
						$form	=	$form.$formReferencia.$formTabla;
					}
				} else {
					$camposEscondido = '<input type="hidden" id="id" name="id" value="'.$id.'"/>';
					$camposEscondido = $camposEscondido.'<input type="hidden" id="accion" name="accion" value="'.$accion.'"/>';	
				}
			}
			
			$formulario = $form."<br><br>".$camposEscondido;
			
			return $formulario;
		}	
	}


	function TraerCanchas() {
		$sql = "select idcancha, cancha from tbcanchas order by idcancha";
		
		return $this-> query($sql,0);
			
	}

	Function TraerUsuario($nombre,$pass) {
		
		require_once 'appconfig.php';

		$appconfig	= new appconfig();
		$datos		= $appconfig->conexion();
		$hostname	= $datos['hostname'];
		$database	= $datos['database'];
		$username	= $datos['username'];
		$password	= $datos['password'];
		
		
		$conn = mysql_connect($hostname,$username,$password) or die ("no se puede conectar".mysql_error());
		
		$db = mysql_select_db($database);
	 
	 	
	 
		$error = 0;		
		
		
		
		$sqlusu = "select * from dbusuarios where usuario = '".$nombre."'";
		
		$respusu = mysql_query($sqlusu,$conn) or die (mysql_error(1));;
		
		$filas = mysql_num_rows($respusu);
		
		if ($filas > 0) {
			$sqlpass = "select * from dbusuarios where Pass = '".$pass."' and idusuario = ".mysql_result($respusu,0,0);
		    //echo $sqlpass;
		    $error = 1;
		    
			$resppass = mysql_query($sqlpass,$conn) or die (mysql_error(1));;
			
			$filas2 = mysql_num_rows($resppass);
			
			if ($filas2 > 0) {
				$error = 1;
				
				$_SESSION['sg_usuario'] = $nombre;
				$_SESSION['sg_pass'] = $pass;
				
				} else {
				$error = 0;
				}
			
			}
			else
			
			{
				$error = 0;	
			}
			
	    mysql_close($conn);
	
		return $error;
		
	}
	
	Function TraerTipoDoc() {
		$sql = "select * from tbtipodoc";
		return $this-> query($sql,0);
	}
	
	
	
	function activarTabla($tabla,$id,$campo,$todos)
	{
		if ($todos == true) {
		$sql = "update ".$tabla." set activo = false";
		$this-> query($sql,0);
		}
		
		$sql = "";
		$sql = "update ".$tabla." set activo = true where ".$campo." = ".$id;
		$this-> query($sql,0);
	}
	
	function TraerTorneos() {
		$sql = "select t.idtorneo,t.nombre,t.fechacreacion,t.activo,tt.descripciontorneo,ss.nombre from dbtorneos t
				inner join
				tbtipotorneo tt on t.reftipotorneo = tt.idtipotorneo
				inner join
				tbsedes ss on ss.idsede = t.refsede
				order by idtorneo desc";
		return $this-> query($sql,0);
	}
	
	function TraerIdTorneos($id) {
		$sql = "SELECT idtorneo,nombre,date_format(fechacreacion, '%d/%m/%Y') as fechacreacion,activo,reftipotorneo,refsede FROM dbtorneos where idtorneo = ".$id;
		return $this-> query($sql,0);
	}
	
function TraerTorneosClientes() {
		$sql = "select * from dbtorneos where idtorneo >23 and activo = 0 order by idtorneo";
		return $this-> query($sql,0);
	}

function cambiarTorneo($idtipotorneo,$idtorneo) {
	
	$resTP = $this->TraerTorneoPorTipoTorneo($idtipotorneo);
	session_start();
	$_SESSION['torneo_predio'] = mysql_result($resTP,0,4);
	
	$_SESSION['idtorneo_predio'] = $idtipotorneo;
	
	return true;
}
	
	
function deshactivarTorneos($idtorneo,$idtipotorneo) {
	$sql = "update dbtorneos set activo = 0 where reftipotorneo = ".$idtipotorneo." and idtorneo <> ".$idtorneo;
	return $this-> query($sql,0);
}

	function TraerTorneosActivo($tipotorneo) {
		$sql = "select t.idtorneo,t.nombre,t.fechacreacion,t.activo,tt.descripciontorneo from dbtorneos t
				inner join
				tbtipotorneo tt on t.reftipotorneo = tt.idtipotorneo
				where tt.descripciontorneo = '".$tipotorneo."' and t.activo = 1";
		return $this-> query($sql,0);
	}
	
	function TraerTorneoPorTipoTorneo($idtipotorneo) {
		$sql = "select t.idtorneo,t.nombre,t.fechacreacion,t.activo,tt.descripciontorneo from dbtorneos t
				inner join
				tbtipotorneo tt on t.reftipotorneo = tt.idtipotorneo
				where tt.idtipotorneo = ".$idtipotorneo;
		return $this-> query($sql,0);
	}
	
	
	
	function insertarTorneo($nombre,$fechacrea,$activo,$reftipotorneo,$refsede) {
		$nombre = str_replace("'","",$nombre);
		$nombre = utf8_decode($nombre);
		
		$sql = "insert into dbtorneos(idtorneo,nombre,fechacreacion,activo,reftipotorneo,refsede) values ('','".$nombre."', '".$fechacrea."', ".$activo.",".$reftipotorneo.",".$refsede.")";
		//return $sql;
		$res = $this-> query($sql,1);
		
		return $res;
	}
	
	function modificarTorneo($idtorneo,$nombre,$fechacrea,$activo,$reftipotorneo,$refsede) {
		$nombre = str_replace("'","",$nombre);
		$nombre = utf8_decode($nombre);

		
		$sql = "update dbtorneos 
					set 
						nombre = '".$nombre."', 
						activo =".$activo.",
						refsede=".$refsede.",
						";
		if ($fechacrea != '') {				
			$sql = $sql."   fechacreacion = '".$fechacrea."',";
		}
		$sql = $sql."   reftipotorneo = ".$reftipotorneo."  
						where idtorneo =".$idtorneo;
		$res = $this-> query($sql,0);
		
		if ($res == false) {
			return 'Error al insertar datos';
		} else {
			return '';
		}	

		
	}
	
	
	function eliminarTorneo($idtorneo) {
		
		//fijarse si este torneo no tiene relacionado ningun grupo.
		$sqlHayGrupos = "select * from dbtorneoge where reftorneo =".$idtorneo;
		$resHayGrupos = $this-> query($sqlHayGrupos,0);
		
		
		$HayFilas = mysql_num_rows($resHayGrupos);
		
		if ($HayFilas < 1) {
		$sql = "delete from dbtorneos where idtorneo =".$idtorneo;
		$this-> query($sql,0);
		return 1;
		} else {
			return 0;
		}
		
	}
	
	function TraerHorarios($tipotorneo) {
		$sql = "select t.idhorario, t.horario from tbhorarios t 
				inner join tbtipotorneo tp on t.reftipotorneo = tp.idtipotorneo 
				where tp.descripciontorneo = '".$tipotorneo."'";
		return $this-> query($sql,0);
	}
	
	function TraerHorariosId($id) {
		$sql = "select
				h.idhorario,tp.valor,tp.iddbturnosequiposprioridad
				from		dbturnosequiposprioridad tp
				inner
				join		tbhorarios h
				on			tp.refturno = h.idhorario
				where		tp.reftorneoge = ".$id;
		return $this-> query($sql,0);
	}
	
	
	function TraerFecha() {
		$sql = "select * from tbfechas";
		return $this-> query($sql,0);
	}
	
	function TraerFechaPorId($id) {
		$sql = "select * from tbfechas where idfecha =".$id;
		return $this-> query($sql,0);
	}
	
	function TraerUltimasDosFechas() {
		$sql = "select
					distinct f.reffecha 
				from		dbfixture f
				order by	f.refFecha desc
				limit 2";
		return $this-> query($sql,0);		
	}
	
	function TraerUltimaFecha() {
		$sql = "select
					distinct f.reffecha 
				from		dbfixture f
				order by	f.refFecha desc
				limit 1";
		return $this-> query($sql,0);		
	}
	
	function TraerUltimaFechaActivo() {
		$sql = "select
					distinct f.reffecha 
				from		dbfixture f
				where 		chequeado = 1
				order by	f.refFecha desc
				limit 1";
		return $this-> query($sql,0);		
	}
	
	
	function TraerIdFecha($fecha) {
		$sql = "select * from tbfechas where idfecha=".$fecha;
		return $this-> query($sql,0);
	}
	
	
	function ModificarFechas($fecha,$resumen) {
		header( 'Content-type: text/html; charset=iso-8859-1' );
		
		
		$sqlfecha = "select * from tbfechas where tipofecha='".$fecha."'";
		
		$resfecha = $this->query($sqlfecha,0);
		$idfecha= mysql_result($resfecha,0,0);
		
		$sql = "update tbfechas set resumen = '".utf8_decode($resumen)."' where idfecha=".$idfecha;
		return $this-> query($sql,0);
	}
	
	function insertarConducta($refequipo,$puntos,$reffecha) {
$sql = "insert into tbconducta(idconducta,refequipo,puntos,reffecha)
values ('',".$refequipo.",".$puntos.",".$reffecha.")";
$res = $this->query($sql,1);
return $res;
}


function modificarConducta($id,$refequipo,$puntos) {
$sql = "update tbconducta
set
refequipo = ".$refequipo.",puntos = ".$puntos."
where idconducta =".$id;
$res = $this->query($sql,0);
return $res;
}

function traerConductaPorFechaEquipo($refequipo,$reffecha) {
	$sql = "select c.idconducta,e.nombre,c.puntos,e.idequipo from tbconducta c
			inner join dbequipos e on e.idequipo = c.refequipo 
			where c.refequipo =".$refequipo." and c.reffecha =".$reffecha;
	$res = $this->query($sql,0);
	return $res;
}

function modificarConductaPorEquipo($refequipo,$puntos,$reffecha) {

	$existe = $this->traerConductaPorFechaEquipo($refequipo,$reffecha);
	
	if (mysql_num_rows($existe)>0) {
		//si existe le sumo
		$sql = "update tbconducta
		set
		puntos = puntos + ".$puntos."
		where refequipo =".$refequipo;
		$res = $this->query($sql,0);
		
	} else {
		//sino existe lo inserto
		$res = $this->insertarConducta($refequipo,$puntos,$reffecha);
	}
	
	return $res;
}


function eliminarConducta($id) {
$sql = "delete from tbconducta where idconducta =".$id;
$res = $this->query($sql,0);
return $res;
} 

function traerConducta() {
	$sql = "select c.idconducta,e.nombre,c.puntos,f.tipofecha from tbconducta c
			inner join dbequipos e on e.idequipo = c.refequipo 
			inner join tbfechas f on f.idfecha = c.reffecha
			order by e.nombre,c.reffecha desc";
	$res = $this->query($sql,0);
	return $res;
}

function traerConductaPorId($id) {
	$sql = "select c.idconducta,e.nombre,c.puntos,e.idequipo from tbconducta c
			inner join dbequipos e on e.idequipo = c.refequipo 
			where c.idconducta =".$id;
	$res = $this->query($sql,0);
	return $res;
}


	function insertarContacto($nombre,$apellido,$mail,$asunto,$mensaje) {
		
		$sql = "insert into dbcontactos(dbcontactos.idcontacto,
										dbcontactos.nombre,
										dbcontactos.apellido,
										dbcontactos.asunto,
										dbcontactos.mensaje,
										dbcontactos.telefono,
										dbcontactos.mail,
										dbcontactos.domicilio,
										dbcontactos.imagen) values 
										('','".$nombre."','".$apellido."','".$asunto."','".$mensaje."',null,'".$mail."','','')";

                $correo = "info@complejoshowbol.com.ar"; 
mail($correo, "ComplejoShowBol", "Te enviaron un correo. Nombre: ".$nombre.", Asunto: ".$asunto.",Mail: ".$mail.",Mensaje: ".$mensaje);
                
                $correo = "matias_ortega22@hotmail.com"; 
mail($correo, "ComplejoShowBol", "Te enviaron un correo. Nombre: ".$nombre.", Asunto: ".$asunto.",Mail: ".$mail.",Mensaje: ".$mensaje);


                $correo = "msredhotero@msn.com"; 
mail($correo, "ComplejoShowBol", "Te enviaron un correo. Nombre: ".$nombre.", Asunto: ".$asunto.",Mail: ".$mail.",Mensaje: ".$mensaje);



		return $this-> query($sql,1);
		//return $sql;
	}





function insertarSuspendidosFechas($refjugador,$refequipo,$reffecha,$refsuspendido) {
$sql = "insert into dbsuspendidosfechas(idsuspendidofecha,refjugador,refequipo,reffecha,refsuspendido)
values ('',".$refjugador.",".$refequipo.",".$reffecha.",".$refsuspendido.")";
$res = $this->query($sql,1);
return $res;
}


function modificarSuspendidosFechas($id,$refjugador,$refequipo,$reffecha) {
$sql = "update dbsuspendidosfechas
set
refjugador = ".$refjugador.",refequipo = ".$refequipo.",reffecha = ".$reffecha."
where idsuspendidofecha =".$id;
$res = $this->query($sql,0);
return $res;
}


function eliminarSuspendidosFechas($refjugador,$refequipo) {
$sql = "delete from dbsuspendidosfechas where refjugador =".$refjugador." and refequipo = ".$refequipo;
$res = $this->query($sql,0);
return $res;
} 

function traerSuspendidosPorFechas($refjugador,$refequipo) {
	$sql = "select sp.idsuspendidofecha, sp.refjugador, sp.refequipo, sp.reffecha
			from dbsuspendidosfechas sp 
			where sp.refjugador =".$refjugador." and sp.refequipo =".$refequipo;	
	$res = $this->query($sql,0);
	return $res;
}








	
	
	function traerPlanillas($idtorneo,$reffecha) {
		$sql = "select
					*
					from (
						select 
						e.nombre,
						e.nombrecapitan,
						e.telefonocapitan,
						e.emailcapitan,
						e.facebookcapitan,
						e.nombresubcapitan,
						e.telefonosubcapitan,
						e.emailsubcapitan,
						e.facebooksubcapitan,
						g.nombre as zona,
						t.idtorneo,
						tp.idtipotorneo,
						g.idgrupo,
						t.nombre as torneo,
						tp.descripciontorneo,
						e.idequipo,
						f.idfixture,
						ff.tipofecha,
						f.cancha,
						DATE_FORMAT(f.Hora,'%k:%i') AS hora,
						ff.idfecha
					
						from		dbtorneoge tge
						inner
						join		dbequipos e
						on			tge.refequipo = e.idequipo
						inner
						join		dbgrupos g
						on			g.idgrupo = tge.refgrupo
						inner
						join		dbtorneos t
						on			t.idtorneo = tge.reftorneo
						inner
						join		tbtipotorneo tp
						on			tp.idtipotorneo = t.reftipotorneo
						inner
						join		dbfixture f
						on			f.reftorneoge_a = tge.idtorneoge
						
						inner
						join		tbfechas ff
						on			ff.idfecha = f.reffecha
						where tp.idtipotorneo in (".$idtorneo.")
						union all
						
						
						select 
					e.Nombre,
					e.nombrecapitan,
					e.telefonocapitan,
					e.emailcapitan,
					e.facebookcapitan,
					e.nombresubcapitan,
					e.telefonosubcapitan,
					e.emailsubcapitan,
					e.facebooksubcapitan,
					g.nombre as zona,
					g.idgrupo,
					t.nombre as torneo,
					t.idtorneo,
					tp.idtipotorneo,
					tp.descripciontorneo,
					e.idequipo,
					f.idfixture,
					ff.tipofecha,
					f.cancha,
					DATE_FORMAT(f.Hora,'%k:%i') AS hora,
					ff.idfecha
					
					from		dbtorneoge tge
					inner
					join		dbequipos e
					on			tge.refequipo = e.idequipo
					inner
					join		dbgrupos g
					on			g.idgrupo = tge.refgrupo
					inner
					join		dbtorneos t
					on			t.idtorneo = tge.reftorneo
					inner
					join		tbtipotorneo tp
					on			tp.idtipotorneo = t.reftipotorneo
					inner
					join		dbfixture f
					on			f.reftorneoge_b = tge.idtorneoge
					
					inner
					join		tbfechas ff
					on			ff.idfecha = f.reffecha
					where		tp.idtipotorneo in (".$idtorneo.")
					) t
					where t.idfecha = ".$reffecha."
					order by t.idfixture";	
		//return $sql;
		return $this-> query($sql,0);
	}
	
	
	function UltimaFecha() {
		$sql = "select ff.idfecha,ff.tipofecha 
				from dbfixture fi
				inner
				join tbfechas ff
				on	ff.idfecha = fi.reffecha 
				where fi.chequeado = 1
				group by ff.idfecha,ff.tipofecha
				order by ff.idfecha desc 
				limit 1";	
		return $this-> query($sql,0);
	}
	
	
	function NuevaFecha($reffecha) {
		$sql = "select month(fi.fechajuego) as mes,day(fi.fechajuego) as dia
				from dbfixture fi
				inner
				join tbfechas ff
				on	ff.idfecha = fi.reffecha 
				where fi.chequeado = 0 and fi.reffecha = ".$reffecha."
				group by fi.fechajuego 
				limit 1";	
		return $this-> query($sql,0);
	}
	

/* PARA Sedes */

function insertarSedes($nombre,$direccion) {
$sql = "insert into tbsedes(idsede,nombre,direccion)
values ('','".utf8_decode($nombre)."','".utf8_decode($direccion)."')";
$res = $this->query($sql,1);
return $res;
}


function modificarSedes($id,$nombre,$direccion) {
$sql = "update tbsedes
set
nombre = '".utf8_decode($nombre)."',direccion = '".utf8_decode($direccion)."'
where idsede =".$id;
$res = $this->query($sql,0);
return $res;
}


function eliminarSedes($id) {
$sql = "delete from tbsedes where idsede =".$id;
$res = $this->query($sql,0);
return $res;
}


function traerSedes() {
$sql = "select idsede,nombre,direccion from tbsedes order by 1";
$res = $this->query($sql,0);
return $res;
}


function traerSedesPorId($id) {
$sql = "select idsede,nombre,direccion from tbsedes where idsede =".$id;
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
	
	
	
	
	
	
	
	
	
	
	
	
	}

?>