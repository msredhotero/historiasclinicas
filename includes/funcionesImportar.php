<?php


date_default_timezone_set('America/Buenos_Aires');

class ServiciosImportar {

function subirArchivo($file) {
	$dir_destino = '../archivos/';
	$imagen_subida = $dir_destino . utf8_decode(str_replace(' ','',basename($_FILES[$file]['name'])));
	
	//$noentrar = '../imagenes/index.php';
	//$nuevo_noentrar = '../archivos/'.$carpeta.'/'.$idInmueble.'/'.'index.php';
	
	if (!file_exists($dir_destino)) {
    	mkdir($dir_destino, 0777);
	}
	
	 
	if(!is_writable($dir_destino)){
		
		echo "no tiene permisos";
		
	}	else	{
		if ($_FILES[$file]['tmp_name'] != '') {
			if(is_uploaded_file($_FILES[$file]['tmp_name'])){
				/*echo "Archivo ". $_FILES['foto']['name'] ." subido con éxtio.\n";
				echo "Mostrar contenido\n";
				echo $imagen_subida;*/
				if (move_uploaded_file($_FILES[$file]['tmp_name'], $imagen_subida)) {
					
					$archivo = utf8_decode($_FILES[$file]["name"]);
					$tipoarchivo = $_FILES[$file]["type"];
					
					/*if ($this->existeArchivo($idInmueble,$archivo,$tipoarchivo) == 0) {
						$sql	=	"insert into pifotos(idfoto,refinmueble,imagen,type) values ('',".$idInmueble.",'".str_replace(' ','',$archivo)."','".$tipoarchivo."')";
						$this->query($sql,1);
					}
					echo "";
					
					copy($noentrar, $nuevo_noentrar);
	*/
				} else {
					echo "Posible ataque de carga de archivos!\n";
				}
			}else{
				echo "Posible ataque del archivo subido: ";
				echo "nombre del archivo '". $_FILES[$file]['tmp_name'] . "'.";
			}
		}
	}	
}

function insertarDatos($codigocuenta,$comprobante,$fecha,$documento,$documentoreferencia,$nit,$detalle,$tipo,$valor,$valorbase,$centrocostos,$transaccion,$plazo,$nombre,$descripcion,$token) 
{
	$sql = "insert into ed_datos(iddato,codigocuenta,comprobante,fecha,documento,documentoreferencia,nit,detalle,tipo,valor,valorbase,centrocostos,transaccion,plazo,nombre,descripcion,token) 
			values
				('',
				'".$codigocuenta."',
				'".$comprobante."',
				'".$fecha."',
				'".$documento."',
				'".$documentoreferencia."',
				'".$nit."',
				'".$detalle."',
				'".$tipo."',
				'".$valor."',
				'".$valorbase."',
				'".$centrocostos."',
				'".$transaccion."',
				'".$plazo."',
				'".$nombre."',
				'".$descripcion."',
				'".$token."')";
	//echo $sql;
	$res 		=	$this->query($sql,1);
	
	if ($res == false) {
		return 'Error al insertar datos';
	} else {
		return $res;
	}
}


function insertarDatosaux($documento,$fecha,$proveedor,$exento,$excluido,$nograbado,$grabado,$iva,$costototal,$token) 
{
	$sql = "insert into ed_importado(idimportado,documento,fecha,proveedor,exento,excluido,nograbado,grabado,iva,costototal,token) 
			values
				('',
				'".$documento."',
				'".$fecha."',
				'".$proveedor."',
				'".$exento."',
				'".$excluido."',
				'".$nograbado."',
				'".$grabado."',
				'".$iva."',
				'".$costototal."',
				'".$token."')";
	//echo $sql;
	$res 		=	$this->query($sql,1);
	
	if ($res == false) {
		return 'Error al insertar datos';
	} else {
		return $res;
	}
}

function traerNIT($proveedor) {
	$sql = "select nit from ed_proveedores where proveedor like '%".ltrim(rtrim($proveedor))."%'";
	$res 		=	$this->query($sql,0);
	
	if ($res == false) {
		return 'Error al traer datos';
	} else {
		if (mysql_num_rows($res)>0) {
			return mysql_result($res,0,0);
		} else {
			return "0";	
		}
	}
}

function GUID()
{
    if (function_exists('com_create_guid') === true)
    {
        return trim(com_create_guid(), '{}');
    }

    return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
}

function eliminarImportacion($token) {
	$sql = "delete from ed_datos where token = '".$token."'";
	$res 		=	$this->query($sql,0);
	
	if ($res == false) {
		return 'Error al eliminar datos';
	} else {
		return $res;
	}
}

function traerDatosImportados() {
	$sql = "SELECT 
				nombre,
				descripcion,
				max(fechacreacion) as fechacreacion,
				token
			FROM
				ed_datos
			group by
				nombre,
				descripcion,
				token
			 order by fechacreacion desc";
	$res 		=	$this->query($sql,0);
	
	if ($res == false) {
		return 'Error al traer datos';
	} else {
		return $res;
	}
}

function traerDatosImportadosToken($token) {
	$sql = "SELECT 
				iddato,
				RPAD(codigocuenta, 20, ' ') as codigocuenta,
				comprobante,
				concat(SUBSTRING(fecha,4,2),'/',SUBSTRING(fecha,1,2),'/',SUBSTRING(fecha,7,4)) as fecha,
				(case when length(documento) > 9
				then
					substring(documento,length(documento)-9+1)
				else
					LPAD(documento, 9, '0')
				end) as documento,
				(case when length(documentoreferencia) > 9
				then
					substring(documentoreferencia,length(documentoreferencia)-9+1)
				else
					LPAD(documento, 9, '0')
				end) as documentoreferencia,
				nit,
				RPAD(detalle, 28, ' ') as detalle,
				tipo,
				CAST(valor AS DECIMAL(14,2)) as valor,
				CAST(valorbase AS DECIMAL(14,2)) as valorbase,
				RPAD(centrocostos, 20, ' ') as centrocostos,
				transaccion,
				plazo,
				nombre,
				descripcion,
				token
			FROM
				ed_datos
			where token = '".$token."'
			 order by iddato";
	$res 		=	$this->query($sql,0);
	
	if ($res == false) {
		return 'Error al traer datos';
	} else {
		return $res;
	}
}

function ImportarTxt($token,$nombrearchivo) {

	$sql = "SELECT 
				iddato,
				RPAD(codigocuenta, 20, ' ') as codigocuenta,
				comprobante,
				concat(SUBSTRING(fecha,4,2),'/',SUBSTRING(fecha,1,2),'/',SUBSTRING(fecha,7,4)) as fecha,
				(case when length(documento) > 9
				then
					substring(documento,length(documento)-9+1)
				else
					LPAD(documento, 9, '0')
				end) as documento,
				(case when length(documentoreferencia) > 9
				then
					substring(documentoreferencia,length(documentoreferencia)-9+1)
				else
					LPAD(documento, 9, '0')
				end) as documentoreferencia,
				nit,
				RPAD(detalle, 28, ' ') as detalle,
				tipo,
				CAST(valor AS DECIMAL(14,2)) as valor,
				CAST(valorbase AS DECIMAL(14,2)) as valorbase,
				RPAD(centrocostos, 20, ' ') as centrocostos,
				transaccion,
				plazo,
				nombre,
				descripcion,
				token
			FROM
				ed_datos
			where token = '".$token."'
			 order by iddato";
	$res 		=	$this->query($sql,0);
	
	if ($res == false) {
		return 'Error al traer datos';
	} else {
		
		$file = fopen("C:/".$nombrearchivo.".txt", "w");
		
		fwrite($file, 'Cuenta	Comprobante	Fecha(mm/dd/yyyy)	Documento	Documento Ref.	Nit	Detalle	Tipo	Valor	Base	Centro de Costo	Trans. Ext	Plazo' . PHP_EOL);
		
		while ($row = mysql_fetch_array($res)) {
			
			if ($row[7] == 'IVA DESCONTABLE             ') {
				if ($row[9] != 0) {
					fwrite($file, $row[1].'	'.$row[2].'	'.$row[3].'	'.$row[4].'	'.$row[5].'	'.$row[6].'	'.$row[7].'	'.$row[8].'	'.$row[9].'	'.$row[10].'	'.$row[11].'	'.$row[12].'	'.$row[13].'	' . PHP_EOL);
				}
			} else {
				fwrite($file, $row[1].'	'.$row[2].'	'.$row[3].'	'.$row[4].'	'.$row[5].'	'.$row[6].'	'.$row[7].'	'.$row[8].'	'.$row[9].'	'.$row[10].'	'.$row[11].'	'.$row[12].'	'.$row[13].'	' . PHP_EOL);	
			}
		}
		
		fclose($file);
		
		return 'Archivo generado';
	}
	
	
}


function ImportarExcel($reffecha,$nombrearchivo) {
	
	require_once '../excelClass/PHPExcel.php';
	
	// Se crea el objeto PHPExcel
	$objPHPExcel = new PHPExcel();

	// Se asignan las propiedades del libro
	$objPHPExcel->getProperties()->setCreator("Marcos") // Nombre del autor
		->setLastModifiedBy("Marcos") //Ultimo usuario que lo modificó
		->setTitle($nombrearchivo) // Titulo
		->setSubject($nombrearchivo) //Asunto
		->setDescription("Exportacion de datos") //Descripción
		->setKeywords("datos") //Etiquetas
		->setCategory("Reporte excel"); //Categorias
	
	$tituloReporte = "Registros Pagos Por Fecha";
	$titulosColumnas = array('Torneo', 'Equipo', 'Categoria', 'Fecha', 'Importe', 'Obs.', 'Fecha Pago');
	
	// Se combinan las celdas A1 hasta D1, para colocar ahí el titulo del reporte
	$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A1:D1');

	// Se agregan los titulos del reporte
	$objPHPExcel->setActiveSheetIndex(0)
		->setCellValue('A1',$tituloReporte) // Titulo del reporte
		->setCellValue('A3',  $titulosColumnas[0])  //Titulo de las columnas
		->setCellValue('B3',  $titulosColumnas[1])
		->setCellValue('C3',  $titulosColumnas[2])
		->setCellValue('D3',  $titulosColumnas[3])
		->setCellValue('E3',  $titulosColumnas[4])
		->setCellValue('F3',  $titulosColumnas[5])
		->setCellValue('G3',  $titulosColumnas[6]);
	
	$estiloTituloReporte = array(
		'font' => array(
			'name'      => 'Verdana',
			'bold'      => true,
			'italic'    => false,
			'strike'    => false,
			'size' =>16,
			'color'     => array(
				'rgb' => 'FFFFFF'
			)
		),
		'fill' => array(
			'type'  => PHPExcel_Style_Fill::FILL_SOLID,
			'color' => array(
				'argb' => 'FF220835')
		),
		'borders' => array(
			'allborders' => array(
				'style' => PHPExcel_Style_Border::BORDER_NONE
			)
		),
		'alignment' => array(
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
			'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			'rotation' => 0,
			'wrap' => TRUE
		)
	);
	 
	$estiloTituloColumnas = array(
		'font' => array(
			'name'  => 'Arial',
			'bold'  => true,
			'color' => array(
				'rgb' => 'FFFFFF'
			)
		),
		'fill' => array(
			'type'       => PHPExcel_Style_Fill::FILL_GRADIENT_LINEAR,
		'rotation'   => 90,
			'startcolor' => array(
				'rgb' => 'c47cf2'
			),
			'endcolor' => array(
				'argb' => 'FF431a5d'
			)
		),
		'borders' => array(
			'top' => array(
				'style' => PHPExcel_Style_Border::BORDER_MEDIUM ,
				'color' => array(
					'rgb' => '143860'
				)
			),
			'bottom' => array(
				'style' => PHPExcel_Style_Border::BORDER_MEDIUM ,
				'color' => array(
					'rgb' => '143860'
				)
			)
		),
		'alignment' =>  array(
			'horizontal'=> PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
			'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			'wrap'      => TRUE
		)
	);
	 
	$estiloInformacion = new PHPExcel_Style();
	$estiloInformacion->applyFromArray( array(
		'font' => array(
			'name'  => 'Arial',
			'color' => array(
				'rgb' => '000000'
			)
		),
		'fill' => array(
		'type'  => PHPExcel_Style_Fill::FILL_SOLID,
		'color' => array(
				'argb' => 'FFd9b7f4')
		),
		'borders' => array(
			'left' => array(
				'style' => PHPExcel_Style_Border::BORDER_THIN ,
			'color' => array(
					'rgb' => '3a2a47'
				)
			)
		)
	));
	
	
	$sql = "select
				p.idpago,
				t.nombre as torneo,
				e.nombre as equipo,
				g.nombre as categoria,
				f.tipofecha,
				p.importe,
				p.observacion,
				p.fechacreacion
			from		dbpagos p
			inner
			join		dbequipos e
			on			p.refequipo = e.idequipo
			inner
			join		dbtorneos t
			on			t.idtorneo = p.reftorneo
			inner
			join		tbtipotorneo tp
			on			tp.idtipotorneo = t.reftipotorneo
			inner
			join		dbgrupos g
			on			g.idgrupo = p.refzona
			inner
			join		tbfechas f
			on			f.idfecha = p.reffecha
			where p.reffecha <= ".$reffecha."
			order by	f.idfecha,e.nombre";
	$res 		=	$this->query($sql,0);
	
	if ($res == false) {
		return 'Error al traer datos';
	} else {
		
		$i = 4; //Numero de fila donde se va a comenzar a rellenar
		 while ($fila = mysql_fetch_array($res)) {
			 $objPHPExcel->setActiveSheetIndex(0)
				 ->setCellValue('A'.$i, $fila['torneo'])
				 ->setCellValue('B'.$i, $fila['equipo'])
				 ->setCellValue('C'.$i, $fila['categoria'])
				 ->setCellValue('D'.$i, $fila['tipofecha'])
				 ->setCellValue('E'.$i, $fila['importe'])
				 ->setCellValue('F'.$i, $fila['observacion'])
				 ->setCellValue('G'.$i, $fila['fechacreacion']);
			 $i++;
		 }
		
		$objPHPExcel->getActiveSheet()->getStyle('A1:D1')->applyFromArray($estiloTituloReporte);
		$objPHPExcel->getActiveSheet()->getStyle('A3:G3')->applyFromArray($estiloTituloColumnas);
		$objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion, "A4:G".($i-1));
		
		for($i = 'A'; $i <= 'M'; $i++){
			$objPHPExcel->setActiveSheetIndex(0)->getColumnDimension($i)->setAutoSize(TRUE);
		}
		
		// Se asigna el nombre a la hoja
		$objPHPExcel->getActiveSheet()->setTitle('Resultado');
		 
		// Se activa la hoja para que sea la que se muestre cuando el archivo se abre
		$objPHPExcel->setActiveSheetIndex(0);
		 
		// Inmovilizar paneles
		//$objPHPExcel->getActiveSheet(0)->freezePane('A4');
		//$objPHPExcel->getActiveSheet(0)->freezePaneByColumnAndRow(0,12);
		
		// Se manda el archivo al navegador web, con el nombre que se indica, en formato 2007
		//header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		//header('Content-Disposition: attachment;filename="Reportedepagos.xlsx"');
		//header('Cache-Control: max-age=0');
		 
		//$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2003');
		//$objWriter->save('../archivos/'.$nombrearchivo.'.xlsx');
		//$objWriter->save('php://output');
		//exit;
		// We'll be outputting an excel file
//header('Content-type: application/vnd.ms-excel');

// It will be called file.xls
//header('Content-Disposition: attachment; filename="file.xls"');

// Write file to the browser
//$objWriter->save('php://output');

/*header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="Reportedealumnos.xlsx"');
		header('Cache-Control: max-age=0');*/
		 
		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
		$objWriter->save('../../archivos/'.$nombrearchivo.'.xlsx');
		exit;
		
		//return 'Archivo Generado';
	}
	
	
}

function cargarExcel($archivo,$nombre,$descripcion) {
					$token = $this->GUID();
					$token2 = $this->GUID();
                    //incluimos la clase
                    require_once '../excelClass/PHPExcel/IOFactory.php';
                    
					$datos = array('comprobante' => '00004',
								   'codigocuenta' => array ('14350504','14350505','14350506','24081001','220501','129505','233595'),
								   'fecha' => '',
								   'documento' => '',
								   'documentoreferencia' => '',
								   'nit' => '',
								   'detalle' => array('COMPRA GRAVADA','COMPRA EXCLUIDA','COMPRA EXENTA','IVA DESCONTABLE','PROVEEDOR DE MERCANCIA','APORTES COOPERATIVA','APORTES COOPERATIVA'),
								   'tipo' => array('1','1','1','1','2','1','2'),
								   'valor' => array(),
								   'valorbase' => array(),
								   'centrocostos' => array('01','01','01','','','',''),
								   'transaccion' => '',
								   'plazo' => '0');
					
                    //cargamos el archivo que deseamos leer
                    $objPHPExcel = PHPExcel_IOFactory::load('../archivos/'.$archivo);
                    //obtenemos los datos de la hoja activa (la primera)
                    //$objHoja=$objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
                    //$objHoja=$objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
					
					$objHoja=$objPHPExcel->getSheet(0)->toArray(null,true,true,true);
					// ó
					//$objPHPExcel->getSheetByName('Worksheet 1');
					
                    //recorremos las filas obtenidas
                    foreach ($objHoja as $iIndice=>$objCelda) {
                        //imprimimos el contenido de la celda utilizando la letra de cada columna
						
						$this->insertarDatosaux($objCelda['D'],$objCelda['E'],$objCelda['F'],$objCelda['J'],$objCelda['M'],$objCelda['S'],$objCelda['T'],$objCelda['V'],$objCelda['X'],$token);
						
						if (($objCelda['D'] != '') && ($objCelda['D'] != 'Documento')) {
							
							
							
							$datos["valor"][0] = $objCelda['T'] == '' ? 0 : str_replace('$','',str_replace(',','',$objCelda['T']));
							$datos["valor"][1] = $objCelda['M'] == '' ? 0 : str_replace('$','',str_replace(',','',$objCelda['M']));
							$datos["valor"][2] = $objCelda['J'] == '' ? 0 : str_replace('$','',str_replace(',','',$objCelda['J']));
							$datos["valor"][3] = $objCelda['V'] == '' ? 0 : str_replace('$','',str_replace(',','',$objCelda['V'])) * 0.16;
							$datos["valor"][4] = $objCelda['X'] == '' ? 0 : str_replace('$','',str_replace(',','',$objCelda['X']));
							$datos["valor"][5] = (str_replace('$','',str_replace(',','',$objCelda['T'])) + str_replace('$','',str_replace(',','',$objCelda['M'])) + str_replace('$','',str_replace(',','',$objCelda['J']))) * 0.01;
							$datos["valor"][6] = (str_replace('$','',str_replace(',','',$objCelda['T'])) + str_replace('$','',str_replace(',','',$objCelda['M'])) + str_replace('$','',str_replace(',','',$objCelda['J']))) * 0.01;
							
							$datos["valorbase"][0] = 0;
							$datos["valorbase"][1] = 0;
							$datos["valorbase"][2] = 0;
							$datos["valorbase"][3] = $objCelda['T'] == '' ? 0 : str_replace('$','',str_replace(',','',$objCelda['T']));
							$datos["valorbase"][4] = 0;
							$datos["valorbase"][5] = 0;
							$datos["valorbase"][6] = 0;
							
							$datos["fecha"] = $objCelda['E'];
							
							$datos["documento"] = $objCelda['D'];
							$datos["documentoreferencia"] = $objCelda['D'];
							
							//funcion para ir a buscar al proveedor
							$datos["nit"] = $this->traerNIT($objCelda['F']);
							
							
							
							if ($datos["nit"] == '860026123') {
								for ($i=0;$i<7;$i++) {
									/*echo '
										<tr>
											<td>'.$datos["codigocuenta"].'</td>
											<td>'.$datos["comprobante"][$i].'</td>
											<td>'.$datos["fecha"].'</td>
											<td>'.$datos["documento"].'</td>
											<td>'.$datos["documentoreferencia"].'</td>
											<td>'.$datos["nit"].'</td>
											<td>'.$datos["detalle"][$i].'</td>
											<td>'.$datos["tipo"][$i].'</td>
											<td>'.$datos["valor"][$i].'</td>
											<td>'.$datos["valorbase"][$i].'</td>
											<td>'.$datos["centrocostos"][$i].'</td>
											<td>'.$datos["transaccion"].'</td>
											<td>'.$datos["plazo"].'</td>
										</tr>
									';*/
									
									
									if ($datos["codigocuenta"][$i] == '233595') {
										$codigocuenta = '220501';
									} else {
										$codigocuenta = $datos["codigocuenta"][$i];
									}
									$this->insertarDatos($codigocuenta,$datos["comprobante"],$datos["fecha"],$datos["documento"],$datos["documentoreferencia"],$datos["nit"],$datos["detalle"][$i],$datos["tipo"][$i],$datos["valor"][$i],$datos["valorbase"][$i],$datos["centrocostos"][$i],$datos["transaccion"],$datos["plazo"],$nombre,$descripcion,$token);
								}
							
							} else {
								for ($i=0;$i<5;$i++) {
									/*echo '
										<tr>
											<td>'.$datos["codigocuenta"].'</td>
											<td>'.$datos["comprobante"][$i].'</td>
											<td>'.$datos["fecha"].'</td>
											<td>'.$datos["documento"].'</td>
											<td>'.$datos["documentoreferencia"].'</td>
											<td>'.$datos["nit"].'</td>
											<td>'.$datos["detalle"][$i].'</td>
											<td>'.$datos["tipo"][$i].'</td>
											<td>'.$datos["valor"][$i].'</td>
											<td>'.$datos["valorbase"][$i].'</td>
											<td>'.$datos["centrocostos"][$i].'</td>
											<td>'.$datos["transaccion"].'</td>
											<td>'.$datos["plazo"].'</td>
										</tr>
									';*/
									$this->insertarDatos($datos["codigocuenta"][$i],$datos["comprobante"],$datos["fecha"],$datos["documento"],$datos["documentoreferencia"],$datos["nit"],$datos["detalle"][$i],$datos["tipo"][$i],$datos["valor"][$i],$datos["valorbase"][$i],$datos["centrocostos"][$i],$datos["transaccion"],$datos["plazo"],$nombre,$descripcion,$token);
								}
							}
						}
                    }
					
					return $this->traerDatosImportadosToken($token);
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
		/*
		$result = mysql_query($sql,$conex);
		if ($accion && $result) {
			$result = mysql_insert_id();
		}
		mysql_close($conex);
		return $result;
		*/
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