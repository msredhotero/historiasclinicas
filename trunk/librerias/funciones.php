<?php
$accion=$_GET["accion"];

if($accion == 'dibujarFormularioCups')
{
    require '../clases/cups.php';
    $cups=new cups;
    $cups->dibujarFormularioCups();  
}


if($accion == 'ingresar')
{
	$identificacion =$_GET['identificacion'];
    $contrasena     =$_GET['contrasena'];
    
	require '../clases/usuario.php';
	$usuario=new usuario;
	$usuario->ingresar($identificacion,$contrasena);
}

if($accion == 'salir')
{
	require '../clases/usuario.php';
	$usuario=new usuario;
	$usuario->salir();
}

if($accion == 'dibujarFormularioIngresoalimentos')
{
	require '../clases/alimentos.php';
	$alimentos=new alimentos;
	$alimentos->dibujarFormularioIngresoalimentos();
}

if($accion == 'ingresarNuevoalimentos')
{
	$idAlimentos=$_GET["idAlimentos"];
	$consulta=$_GET["consulta"];
	$alimento=$_GET["alimento"];
	$preferencia=$_GET["preferencia"];
	$rechazo=$_GET["rechazo"];
	$intolerados=$_GET["intolerados"];
	
	require '../clases/alimentos.php';
	$alimentos=new alimentos;
	$alimentos->insertarDatos($idAlimentos,$consulta,$alimento,$preferencia,$rechazo,$intolerados);
}

if($accion == 'consultarTodosalimentos')
{
	require '../clases/alimentos.php';
	$alimentos=new alimentos;
	$alimentos->consultarTodosalimentos();
}

if($accion == 'dibujarFormularioModificaralimentos')
{
	require '../clases/alimentos.php';
	$id = $_GET["id"];
	$alimentos=new alimentos;
	$alimentos->dibujarFormularioModificaralimentos($id);
}

if($accion == 'modificaralimentos')
{
	$idAlimentos=$_GET["idAlimentos"];
	$consulta=$_GET["consulta"];
	$alimento=$_GET["alimento"];
	$preferencia=$_GET["preferencia"];
	$rechazo=$_GET["rechazo"];
	$intolerados=$_GET["intolerados"];
	
	require '../clases/alimentos.php';
	$alimentos=new alimentos;
	$alimentos->actualizarDatos($idAlimentos,$consulta,$alimento,$preferencia,$rechazo,$intolerados);
}

if($accion == 'eliminaralimentos')
{
	$id=$_GET['id'];
	require '../clases/alimentos.php';
	$alimentos=new alimentos;
	$alimentos->eliminarDatos($id);
}

if($accion == 'dibujarFormularioIngresoapoyo')
{
	require '../clases/apoyo.php';
	$apoyo=new apoyo;
	$apoyo->dibujarFormularioIngresoapoyo();
}

if($accion == 'ingresarNuevoapoyo')
{
	$idApoyo=$_GET["idApoyo"];
	$consulta=$_GET["consulta"];
	$nombres=$_GET["nombres"];
	$relacion=$_GET["relacion"];
	$telefono=$_GET["telefono"];
	$direccion=$_GET["direccion"];
	
	require '../clases/apoyo.php';
	$apoyo=new apoyo;
	$apoyo->insertarDatos($idApoyo,$consulta,$nombres,$relacion,$telefono,$direccion);
}

if($accion == 'consultarTodosapoyo')
{
    $consulta=$_GET["consulta"];
	require '../clases/apoyo.php';
	$apoyo=new apoyo;
	$apoyo->consultarTodosapoyo($consulta);
}

if($accion == 'dibujarFormularioModificarapoyo')
{
	require '../clases/apoyo.php';
	$id = $_GET["id"];
	$apoyo=new apoyo;
	$apoyo->dibujarFormularioModificarapoyo($id);
}

if($accion == 'modificarapoyo')
{
	$idApoyo=$_GET["idApoyo"];
	$consulta=$_GET["consulta"];
	$nombres=$_GET["nombres"];
	$relacion=$_GET["relacion"];
	$telefono=$_GET["telefono"];
	$direccion=$_GET["direccion"];
	
	require '../clases/apoyo.php';
	$apoyo=new apoyo;
	$apoyo->actualizarDatos($idApoyo,$consulta,$nombres,$relacion,$telefono,$direccion);
}

if($accion == 'eliminarapoyo')
{
	$id=$_GET['id'];
	require '../clases/apoyo.php';
	$apoyo=new apoyo;
	$apoyo->eliminarDatos($id);
}

if($accion == 'dibujarFormularioIngresocapacitacion')
{
	require '../clases/capacitacion.php';
	$capacitacion=new capacitacion;
	$capacitacion->dibujarFormularioIngresocapacitacion();
}

if($accion == 'ingresarNuevocapacitacion')
{
	$idCapacitacion=$_GET["idCapacitacion"];
	$consulta=$_GET["consulta"];
	$oficio=$_GET["oficio"];
	$institucion=$_GET["institucion"];
	$tiempo=$_GET["tiempo"];
	
	require '../clases/capacitacion.php';
	$capacitacion=new capacitacion;
	$capacitacion->insertarDatos($idCapacitacion,$consulta,$oficio,$institucion,$tiempo);
}

if($accion == 'consultarTodoscapacitacion')
{
    $id=$_GET["id"];
	require '../clases/capacitacion.php';
	$capacitacion=new capacitacion;
	$capacitacion->consultarTodoscapacitacion($id);
}

if($accion == 'dibujarFormularioModificarcapacitacion')
{
	require '../clases/capacitacion.php';
	$id = $_GET["id"];
	$capacitacion=new capacitacion;
	$capacitacion->dibujarFormularioModificarcapacitacion($id);
}

if($accion == 'modificarcapacitacion')
{
	$idCapacitacion=$_GET["idCapacitacion"];
	$consulta=$_GET["consulta"];
	$oficio=$_GET["oficio"];
	$institucion=$_GET["institucion"];
	$tiempo=$_GET["tiempo"];
	
	require '../clases/capacitacion.php';
	$capacitacion=new capacitacion;
	$capacitacion->actualizarDatos($idCapacitacion,$consulta,$oficio,$institucion,$tiempo);
}

if($accion == 'eliminarcapacitacion')
{
	$id=$_GET['id'];
	require '../clases/capacitacion.php';
	$capacitacion=new capacitacion;
	$capacitacion->eliminarDatos($id);
}

if($accion == 'dibujarFormularioIngresoconsulta')
{
	require '../clases/consulta.php';
	$consulta=new consulta;
	$consulta->dibujarFormularioIngresoconsulta();
}

if($accion == 'ingresarNuevoconsulta')
{
	$idConsulta=$_GET["idConsulta"];
	$paciente=$_GET["paciente"];
	$regimen=$_GET["regimen"];
	$eps=$_GET["eps"];
	$tipoConsulta=$_GET["tipoConsulta"];
	$profesional=$_GET["profesional"];
	$fecha=$_GET["fecha"];
	$hora=$_GET["hora"];
	$confirmada=$_GET["confirmada"];
	$cancelada=$_GET["cancelada"];
	$motivo=$_GET["motivo"];
	$factura=$_GET["factura"];
	$autorizacion=$_GET["autorizacion"];
	$valor=$_GET["valor"];
	$acompanante=$_GET["acompanante"];
	$parentesco=$_GET["parentesco"];
	$telefono=$_GET["telefono"];
	
	require '../clases/consulta.php';
	$consulta=new consulta;
	$consulta->insertarDatos($idConsulta,$paciente,$regimen,$eps,$tipoConsulta,$profesional,$fecha,$hora,$confirmada,$cancelada,$motivo,$factura,$autorizacion,$valor,$acompanante,$parentesco,$telefono);
}

if($accion == 'consultarTodosconsulta')
{
	require '../clases/consulta.php';
	$consulta=new consulta;
	$consulta->consultarTodosconsulta();
}

if($accion == 'dibujarFormularioModificarconsulta')
{
	require '../clases/consulta.php';
	$id = $_GET["id"];
	$consulta=new consulta;
	$consulta->dibujarFormularioModificarconsulta($id);
}

if($accion == 'modificarconsulta')
{
	$idConsulta=$_GET["idConsulta"];
	$paciente=$_GET["paciente"];
	$regimen=$_GET["regimen"];
	$eps=$_GET["eps"];
	$tipoConsulta=$_GET["tipoConsulta"];
	$profesional=$_GET["profesional"];
	$fecha=$_GET["fecha"];
	$hora=$_GET["hora"];
	$confirmada=$_GET["confirmada"];
	$cancelada=$_GET["cancelada"];
	$motivo=$_GET["motivo"];
	$factura=$_GET["factura"];
	$autorizacion=$_GET["autorizacion"];
	$valor=$_GET["valor"];
	$acompanante=$_GET["acompanante"];
	$parentesco=$_GET["parentesco"];
	$telefono=$_GET["telefono"];
	
	require '../clases/consulta.php';
	$consulta=new consulta;
	$consulta->actualizarDatos($idConsulta,$paciente,$regimen,$eps,$tipoConsulta,$profesional,$fecha,$hora,$confirmada,$cancelada,$motivo,$factura,$autorizacion,$valor,$acompanante,$parentesco,$telefono);
}

if($accion == 'eliminarconsulta')
{
	$id=$_GET['id'];
	require '../clases/consulta.php';
	$consulta=new consulta;
	$consulta->eliminarDatos($id);
}

if($accion == 'dibujarFormularioIngresodepartamento')
{
	require '../clases/departamento.php';
	$departamento=new departamento;
	$departamento->dibujarFormularioIngresodepartamento();
}

if($accion == 'ingresarNuevodepartamento')
{
	$idDepartamento=$_GET["idDepartamento"];
	$codigo=$_GET["codigo"];
	$nombre=$_GET["nombre"];
	
	require '../clases/departamento.php';
	$departamento=new departamento;
	$departamento->insertarDatos($idDepartamento,$codigo,$nombre);
}

if($accion == 'consultarTodosdepartamento')
{
	require '../clases/departamento.php';
	$departamento=new departamento;
	$departamento->consultarTodosdepartamento();
}

if($accion == 'dibujarFormularioModificardepartamento')
{
	require '../clases/departamento.php';
	$id = $_GET["id"];
	$departamento=new departamento;
	$departamento->dibujarFormularioModificardepartamento($id);
}

if($accion == 'modificardepartamento')
{
	$idDepartamento=$_GET["idDepartamento"];
	$codigo=$_GET["codigo"];
	$nombre=$_GET["nombre"];
	
	require '../clases/departamento.php';
	$departamento=new departamento;
	$departamento->actualizarDatos($idDepartamento,$codigo,$nombre);
}

if($accion == 'eliminardepartamento')
{
	$id=$_GET['id'];
	require '../clases/departamento.php';
	$departamento=new departamento;
	$departamento->eliminarDatos($id);
}

if($accion == 'dibujarFormularioIngresoeps')
{
	require '../clases/eps.php';
	$eps=new eps;
	$eps->dibujarFormularioIngresoeps();
}

if($accion == 'ingresarNuevoeps')
{
	$idEps=$_GET["idEps"];
	$codigo=$_GET["codigo"];
	$nombre=$_GET["nombre"];
	
	require '../clases/eps.php';
	$eps=new eps;
	$eps->insertarDatos($idEps,$codigo,$nombre);
}

if($accion == 'consultarTodoseps')
{
	require '../clases/eps.php';
	$eps=new eps;
	$eps->consultarTodoseps();
}

if($accion == 'dibujarFormularioModificareps')
{
	require '../clases/eps.php';
	$id = $_GET["id"];
	$eps=new eps;
	$eps->dibujarFormularioModificareps($id);
}

if($accion == 'modificareps')
{
	$idEps=$_GET["idEps"];
	$codigo=$_GET["codigo"];
	$nombre=$_GET["nombre"];
	
	require '../clases/eps.php';
	$eps=new eps;
	$eps->actualizarDatos($idEps,$codigo,$nombre);
}

if($accion == 'eliminareps')
{
	$id=$_GET['id'];
	require '../clases/eps.php';
	$eps=new eps;
	$eps->eliminarDatos($id);
}

if($accion == 'dibujarFormularioIngresoevaluacion')
{
	require '../clases/evaluacion.php';
	$evaluacion=new evaluacion;
	$evaluacion->dibujarFormularioIngresoevaluacion();
}

if($accion == 'ingresarNuevoevaluacion')
{
	$idEvaluacion=$_GET["idEvaluacion"];
	$consulta=$_GET["consulta"];
	$sisFonCom=$_GET["sisFonCom"];
	$falFon=$_GET["falFon"];
	$falCom=$_GET["falCom"];
	$modo=$_GET["modo"];
	$tipo=$_GET["tipo"];
	$cooFon=$_GET["cooFon"];
	$conCatSem=$_GET["conCatSem"];
	$cuales=$_GET["cuales"];
	$reaSec=$_GET["reaSec"];
	$reaNom=$_GET["reaNom"];
	$reaAgr=$_GET["reaAgr"];
	$ideAbs=$_GET["ideAbs"];
	$dif=$_GET["dif"];
	$sem=$_GET["sem"];
	$ana=$_GET["ana"];
	$reaDesObj=$_GET["reaDesObj"];
	$sin=$_GET["sin"];
	$ant=$_GET["ant"];
	$comOrd=$_GET["comOrd"];
	$manCatGra=$_GET["manCatGra"];
	$cuales2=$_GET["cuales2"];
	$forOra=$_GET["forOra"];
	$orgPalDes=$_GET["orgPalDes"];
	$cohGra=$_GET["cohGra"];
	$intCom=$_GET["intCom"];
	$reaPre=$_GET["reaPre"];
	$reaRes=$_GET["reaRes"];
	$reaExc=$_GET["reaExc"];
	$reaNeg=$_GET["reaNeg"];
	$reaAfi=$_GET["reaAfi"];
	$reaInf=$_GET["reaInf"];
	$funIns=$_GET["funIns"];
	$funReg=$_GET["funReg"];
	$funPer=$_GET["funPer"];
	$funMat=$_GET["funMat"];
	$funIma=$_GET["funIma"];
	$funInf=$_GET["funInf"];
	$funHeu=$_GET["funHeu"];
	$funTex=$_GET["funTex"];
	$funCom=$_GET["funCom"];
	$manConVis=$_GET["manConVis"];
	$resTurCom=$_GET["resTurCom"];
	$iniManFinTop=$_GET["iniManFinTop"];
	$cuales3=$_GET["cuales3"];
	$recFon=$_GET["recFon"];
	$recSil=$_GET["recSil"];
	$reaLecPal=$_GET["reaLecPal"];
	$reaLecSil=$_GET["reaLecSil"];
	$comportamiento=$_GET["comportamiento"];
	$utiApo=$_GET["utiApo"];
	$velocidadLectura=$_GET["velocidadLectura"];
	$comTex=$_GET["comTex"];
	$reaEscAut=$_GET["reaEscAut"];
	$como1=$_GET["como1"];
	$reaExcCop=$_GET["reaExcCop"];
	$como2=$_GET["como2"];
	$reaEscDic=$_GET["reaEscDic"];
	$como3=$_GET["como3"];
	$reaEscEsp=$_GET["reaEscEsp"];
	$como4=$_GET["como4"];
	$coherencia=$_GET["coherencia"];
	$cohecion=$_GET["cohecion"];
	$tieDisOmiGra=$_GET["tieDisOmiGra"];
	$tieDisOmiSil=$_GET["tieDisOmiSil"];
	$tieDisOmiPal=$_GET["tieDisOmiPal"];
	$tieDisOmiFra=$_GET["tieDisOmiFra"];
	$memCor=$_GET["memCor"];
	$memMed=$_GET["memMed"];
	$memLar=$_GET["memLar"];
	$preAteAct=$_GET["preAteAct"];
	$motAntAct=$_GET["motAntAct"];
	$tolAct=$_GET["tolAct"];
	$nivAct=$_GET["nivAct"];
	$diagnostico=$_GET["diagnostico"];
	$impDiag=$_GET["impDiag"];
	
	require '../clases/evaluacion.php';
	$evaluacion=new evaluacion;
	$evaluacion->insertarDatos($idEvaluacion,$consulta,$sisFonCom,$falFon,$falCom,$modo,$tipo,$cooFon,$conCatSem,$cuales,$reaSec,$reaNom,$reaAgr,$ideAbs,$dif,$sem,$ana,$reaDesObj,$sin,$ant,$comOrd,$manCatGra,$cuales2,$forOra,$orgPalDes,$cohGra,$intCom,$reaPre,$reaRes,$reaExc,$reaNeg,$reaAfi,$reaInf,$funIns,$funReg,$funPer,$funMat,$funIma,$funInf,$funHeu,$funTex,$funCom,$manConVis,$resTurCom,$iniManFinTop,$cuales3,$recFon,$recSil,$reaLecPal,$reaLecSil,$comportamiento,$utiApo,$velocidadLectura,$comTex,$reaEscAut,$como1,$reaExcCop,$como2,$reaEscDic,$como3,$reaEscEsp,$como4,$coherencia,$cohecion,$tieDisOmiGra,$tieDisOmiSil,$tieDisOmiPal,$tieDisOmiFra,$memCor,$memMed,$memLar,$preAteAct,$motAntAct,$tolAct,$nivAct,$diagnostico,$impDiag);
}

if($accion == 'consultarTodosevaluacion')
{
	require '../clases/evaluacion.php';
	$evaluacion=new evaluacion;
	$evaluacion->consultarTodosevaluacion();
}

if($accion == 'dibujarFormularioModificarevaluacion')
{
	require '../clases/evaluacion.php';
	$id = $_GET["id"];
	$evaluacion=new evaluacion;
	$evaluacion->dibujarFormularioModificarevaluacion($id);
}

if($accion == 'modificarevaluacion')
{
	$idEvaluacion=$_GET["idEvaluacion"];
	$consulta=$_GET["consulta"];
	$sisFonCom=$_GET["sisFonCom"];
	$falFon=$_GET["falFon"];
	$falCom=$_GET["falCom"];
	$modo=$_GET["modo"];
	$tipo=$_GET["tipo"];
	$cooFon=$_GET["cooFon"];
	$conCatSem=$_GET["conCatSem"];
	$cuales=$_GET["cuales"];
	$reaSec=$_GET["reaSec"];
	$reaNom=$_GET["reaNom"];
	$reaAgr=$_GET["reaAgr"];
	$ideAbs=$_GET["ideAbs"];
	$dif=$_GET["dif"];
	$sem=$_GET["sem"];
	$ana=$_GET["ana"];
	$reaDesObj=$_GET["reaDesObj"];
	$sin=$_GET["sin"];
	$ant=$_GET["ant"];
	$comOrd=$_GET["comOrd"];
	$manCatGra=$_GET["manCatGra"];
	$cuales2=$_GET["cuales2"];
	$forOra=$_GET["forOra"];
	$orgPalDes=$_GET["orgPalDes"];
	$cohGra=$_GET["cohGra"];
	$intCom=$_GET["intCom"];
	$reaPre=$_GET["reaPre"];
	$reaRes=$_GET["reaRes"];
	$reaExc=$_GET["reaExc"];
	$reaNeg=$_GET["reaNeg"];
	$reaAfi=$_GET["reaAfi"];
	$reaInf=$_GET["reaInf"];
	$funIns=$_GET["funIns"];
	$funReg=$_GET["funReg"];
	$funPer=$_GET["funPer"];
	$funMat=$_GET["funMat"];
	$funIma=$_GET["funIma"];
	$funInf=$_GET["funInf"];
	$funHeu=$_GET["funHeu"];
	$funTex=$_GET["funTex"];
	$funCom=$_GET["funCom"];
	$manConVis=$_GET["manConVis"];
	$resTurCom=$_GET["resTurCom"];
	$iniManFinTop=$_GET["iniManFinTop"];
	$cuales3=$_GET["cuales3"];
	$recFon=$_GET["recFon"];
	$recSil=$_GET["recSil"];
	$reaLecPal=$_GET["reaLecPal"];
	$reaLecSil=$_GET["reaLecSil"];
	$comportamiento=$_GET["comportamiento"];
	$utiApo=$_GET["utiApo"];
	$velocidadLectura=$_GET["velocidadLectura"];
	$comTex=$_GET["comTex"];
	$reaEscAut=$_GET["reaEscAut"];
	$como1=$_GET["como1"];
	$reaExcCop=$_GET["reaExcCop"];
	$como2=$_GET["como2"];
	$reaEscDic=$_GET["reaEscDic"];
	$como3=$_GET["como3"];
	$reaEscEsp=$_GET["reaEscEsp"];
	$como4=$_GET["como4"];
	$coherencia=$_GET["coherencia"];
	$cohecion=$_GET["cohecion"];
	$tieDisOmiGra=$_GET["tieDisOmiGra"];
	$tieDisOmiSil=$_GET["tieDisOmiSil"];
	$tieDisOmiPal=$_GET["tieDisOmiPal"];
	$tieDisOmiFra=$_GET["tieDisOmiFra"];
	$memCor=$_GET["memCor"];
	$memMed=$_GET["memMed"];
	$memLar=$_GET["memLar"];
	$preAteAct=$_GET["preAteAct"];
	$motAntAct=$_GET["motAntAct"];
	$tolAct=$_GET["tolAct"];
	$nivAct=$_GET["nivAct"];
	$diagnostico=$_GET["diagnostico"];
	$impDiag=$_GET["impDiag"];
	
	require '../clases/evaluacion.php';
	$evaluacion=new evaluacion;
	$evaluacion->actualizarDatos($idEvaluacion,$consulta,$sisFonCom,$falFon,$falCom,$modo,$tipo,$cooFon,$conCatSem,$cuales,$reaSec,$reaNom,$reaAgr,$ideAbs,$dif,$sem,$ana,$reaDesObj,$sin,$ant,$comOrd,$manCatGra,$cuales2,$forOra,$orgPalDes,$cohGra,$intCom,$reaPre,$reaRes,$reaExc,$reaNeg,$reaAfi,$reaInf,$funIns,$funReg,$funPer,$funMat,$funIma,$funInf,$funHeu,$funTex,$funCom,$manConVis,$resTurCom,$iniManFinTop,$cuales3,$recFon,$recSil,$reaLecPal,$reaLecSil,$comportamiento,$utiApo,$velocidadLectura,$comTex,$reaEscAut,$como1,$reaExcCop,$como2,$reaEscDic,$como3,$reaEscEsp,$como4,$coherencia,$cohecion,$tieDisOmiGra,$tieDisOmiSil,$tieDisOmiPal,$tieDisOmiFra,$memCor,$memMed,$memLar,$preAteAct,$motAntAct,$tolAct,$nivAct,$diagnostico,$impDiag);
}

if($accion == 'eliminarevaluacion')
{
	$id=$_GET['id'];
	require '../clases/evaluacion.php';
	$evaluacion=new evaluacion;
	$evaluacion->eliminarDatos($id);
}

if($accion == 'dibujarFormularioIngresoexploracionorganos')
{
	require '../clases/exploracionorganos.php';
	$exploracionorganos=new exploracionorganos;
	$exploracionorganos->dibujarFormularioIngresoexploracionorganos();
}

if($accion == 'ingresarNuevoexploracionorganos')
{
	$idExploracionOrganos=$_GET["idExploracionOrganos"];
	$consulta=$_GET["consulta"];
	$organo=$_GET["organo"];
	$anatomia=$_GET["anatomia"];
	$movilidad=$_GET["movilidad"];
	$tono=$_GET["tono"];
	$sensibilidad=$_GET["sensibilidad"];
	$funcion=$_GET["funcion"];
	
	require '../clases/exploracionorganos.php';
	$exploracionorganos=new exploracionorganos;
	$exploracionorganos->insertarDatos($idExploracionOrganos,$consulta,$organo,$anatomia,$movilidad,$tono,$sensibilidad,$funcion);
}

if($accion == 'consultarTodosexploracionorganos')
{
	require '../clases/exploracionorganos.php';
	$exploracionorganos=new exploracionorganos;
	$exploracionorganos->consultarTodosexploracionorganos();
}

if($accion == 'dibujarFormularioModificarexploracionorganos')
{
	require '../clases/exploracionorganos.php';
	$id = $_GET["id"];
	$exploracionorganos=new exploracionorganos;
	$exploracionorganos->dibujarFormularioModificarexploracionorganos($id);
}

if($accion == 'modificarexploracionorganos')
{
	$idExploracionOrganos=$_GET["idExploracionOrganos"];
	$consulta=$_GET["consulta"];
	$organo=$_GET["organo"];
	$anatomia=$_GET["anatomia"];
	$movilidad=$_GET["movilidad"];
	$tono=$_GET["tono"];
	$sensibilidad=$_GET["sensibilidad"];
	$funcion=$_GET["funcion"];
	
	require '../clases/exploracionorganos.php';
	$exploracionorganos=new exploracionorganos;
	$exploracionorganos->actualizarDatos($idExploracionOrganos,$consulta,$organo,$anatomia,$movilidad,$tono,$sensibilidad,$funcion);
}

if($accion == 'eliminarexploracionorganos')
{
	$id=$_GET['id'];
	require '../clases/exploracionorganos.php';
	$exploracionorganos=new exploracionorganos;
	$exploracionorganos->eliminarDatos($id);
}

if($accion == 'dibujarFormularioIngresofamilia')
{
	require '../clases/familia.php';
	$familia=new familia;
	$familia->dibujarFormularioIngresofamilia();
}

if($accion == 'ingresarNuevofamilia')
{
	$idFamilia=$_GET["idFamilia"];
	$consulta=$_GET["consulta"];
	$nombres=$_GET["nombres"];
	$parentesco=$_GET["parentesco"];
	$edad=$_GET["edad"];
	$esc=$_GET["esc"];
	$ocupacion=$_GET["ocupacion"];
	
	require '../clases/familia.php';
	$familia=new familia;
	$familia->insertarDatos($idFamilia,$consulta,$nombres,$parentesco,$edad,$esc,$ocupacion);
}

if($accion == 'consultarTodosfamilia')
{
	require '../clases/familia.php';
    $consulta = $_GET["consulta"];
	$familia=new familia;
	$familia->consultarTodosfamilia($consulta);
}

if($accion == 'dibujarFormularioModificarfamilia')
{
	require '../clases/familia.php';
	$id = $_GET["id"];
	$familia=new familia;
	$familia->dibujarFormularioModificarfamilia($id);
}

if($accion == 'modificarfamilia')
{
	$idFamilia=$_GET["idFamilia"];
	$consulta=$_GET["consulta"];
	$nombres=$_GET["nombres"];
	$parentesco=$_GET["parentesco"];
	$edad=$_GET["edad"];
	$esc=$_GET["esc"];
	$ocupacion=$_GET["ocupacion"];
	
	require '../clases/familia.php';
	$familia=new familia;
	$familia->actualizarDatos($idFamilia,$consulta,$nombres,$parentesco,$edad,$esc,$ocupacion);
}

if($accion == 'eliminarfamilia')
{
	$id=$_GET['id'];
	require '../clases/familia.php';
	$familia=new familia;
	$familia->eliminarDatos($id);
}

if($accion == 'dibujarFormularioIngresofisioterapia')
{
	require '../clases/fisioterapia.php';
	$fisioterapia=new fisioterapia;
	$fisioterapia->dibujarFormularioIngresofisioterapia();
}

if($accion == 'ingresarNuevofisioterapia')
{
	$idFisioterapia=$_GET["idFisioterapia"];
	$consulta=$_GET["consulta"];
	$evaluacion=$_GET["evaluacion"];
	$concepto=$_GET["concepto"];
	$diagnostico=$_GET["diagnostico"];
	$profesional=$_GET["profesional"];
	
	require '../clases/fisioterapia.php';
	$fisioterapia=new fisioterapia;
	$fisioterapia->insertarDatos($idFisioterapia,$consulta,$evaluacion,$concepto,$diagnostico,$profesional);
}

if($accion == 'consultarTodosfisioterapia')
{
	require '../clases/fisioterapia.php';
	$fisioterapia=new fisioterapia;
	$fisioterapia->consultarTodosfisioterapia();
}

if($accion == 'dibujarFormularioModificarfisioterapia')
{
	require '../clases/fisioterapia.php';
	$id = $_GET["id"];
	$fisioterapia=new fisioterapia;
	$fisioterapia->dibujarFormularioModificarfisioterapia($id);
}

if($accion == 'modificarfisioterapia')
{
	$idFisioterapia=$_GET["idFisioterapia"];
	$consulta=$_GET["consulta"];
	$evaluacion=$_GET["evaluacion"];
	$concepto=$_GET["concepto"];
	$diagnostico=$_GET["diagnostico"];
	$profesional=$_GET["profesional"];
	
	require '../clases/fisioterapia.php';
	$fisioterapia=new fisioterapia;
	$fisioterapia->actualizarDatos($idFisioterapia,$consulta,$evaluacion,$concepto,$diagnostico,$profesional);
}

if($accion == 'eliminarfisioterapia')
{
	$id=$_GET['id'];
	require '../clases/fisioterapia.php';
	$fisioterapia=new fisioterapia;
	$fisioterapia->eliminarDatos($id);
}

if($accion == 'dibujarFormularioIngresofonoaudiologia')
{
	require '../clases/fonoaudiologia.php';
	$fonoaudiologia=new fonoaudiologia;
	$fonoaudiologia->dibujarFormularioIngresofonoaudiologia();
}

if($accion == 'dibujarFormularioIngresofonoaudiologia')
{
	require '../clases/fonoaudiologia.php';
	$fonoaudiologia=new fonoaudiologia;
	$fonoaudiologia->dibujarFormularioIngresofonoaudiologia();
}

if($accion == 'ingresarNuevofonoaudiologia')
{
	$idFonoAudiologia=$_GET["idFonoAudiologia"];
	$consulta=$_GET["consulta"];
	$antPre=$_GET["antPre"];
	$antPeri=$_GET["antPeri"];
	$antPers=$_GET["antPers"];
	$alMa=$_GET["alMa"];
	$alBla=$_GET["alBla"];
	$alSol=$_GET["alSol"];
	$alTet=$_GET["alTet"];
	$alInd=$_GET["alInd"];
	$tipAli=$_GET["tipAli"];
	$evoBal=$_GET["evoBal"];
	$evoPal=$_GET["evoPal"];
	$evoFra=$_GET["evoFra"];
	$evoPro=$_GET["evoPro"];
	$evoGra=$_GET["evoGra"];
	$evoLec=$_GET["evoLec"];
	$evoPre=$_GET["evoPre"];
	$obs=$_GET["obs"];
	$sisFonCom=$_GET["sisFonCom"];
	$falFon=$_GET["falFon"];
	$falFonCua=$_GET["falFonCua"];
	$falCom=$_GET["falCom"];
	$falComCua=$_GET["falComCua"];
	$labAna=$_GET["labAna"];
	$labMov=$_GET["labMov"];
	$labTon=$_GET["labTon"];
	$labSen=$_GET["labSen"];
	$labFun=$_GET["labFun"];
	$lenAna=$_GET["lenAna"];
	$lenMov=$_GET["lenMov"];
	$lenTon=$_GET["lenTon"];
	$lenSen=$_GET["lenSen"];
	$lenFun=$_GET["lenFun"];
	$mejAna=$_GET["mejAna"];
	$mejMov=$_GET["mejMov"];
	$mejTon=$_GET["mejTon"];
	$mejSen=$_GET["mejSen"];
	$mejFun=$_GET["mejFun"];
	$velAna=$_GET["velAna"];
	$velMov=$_GET["velMov"];
	$velTon=$_GET["velTon"];
	$velSen=$_GET["velSen"];
	$velFun=$_GET["velFun"];
	$die=$_GET["die"];
	$pal=$_GET["pal"];
	$praORF=$_GET["praORF"];
	$resMod=$_GET["resMod"];
	$resTip=$_GET["resTip"];
	$resCoo=$_GET["resCoo"];
	$nivSemSem=$_GET["nivSemSem"];
	$nivSemCua=$_GET["nivSemCua"];
	$nivSemSec=$_GET["nivSemSec"];
	$nivSemNom=$_GET["nivSemNom"];
	$nivSemAgr=$_GET["nivSemAgr"];
	$nivSemAbsVis=$_GET["nivSemAbsVis"];
	$nivSemAbsAud=$_GET["nivSemAbsAud"];
	$nivSemAbsGes=$_GET["nivSemAbsGes"];
	$nivSemDif=$_GET["nivSemDif"];
	$nivSemSemj=$_GET["nivSemSemj"];
	$nivSemAna=$_GET["nivSemAna"];
	$nivSemReaDesc=$_GET["nivSemReaDesc"];
	$nivSemSin=$_GET["nivSemSin"];
	$nivSemAut=$_GET["nivSemAut"];
	$nivSemComOrdSim=$_GET["nivSemComOrdSim"];
	$nivSemComOrdCom=$_GET["nivSemComOrdCom"];
	$nivSemComOrdObj=$_GET["nivSemComOrdObj"];
	$nivSemGraCatGra=$_GET["nivSemGraCatGra"];
	$nivSemGraCatGraCua=$_GET["nivSemGraCatGraCua"];
	$nivSemGraOra=$_GET["nivSemGraOra"];
	$nivSemGraPal=$_GET["nivSemGraPal"];
	$nivSemGraCoh=$_GET["nivSemGraCoh"];
	$nivSemGraCoe=$_GET["nivSemGraCoe"];
	$nivPraInt=$_GET["nivPraInt"];
	$nivPraPre=$_GET["nivPraPre"];
	$nivPraRes=$_GET["nivPraRes"];
	$nivPraExc=$_GET["nivPraExc"];
	$nivPraNeg=$_GET["nivPraNeg"];
	$nivPraAfi=$_GET["nivPraAfi"];
	$nivPraInf=$_GET["nivPraInf"];
	$nivPraCon=$_GET["nivPraCon"];
	$nivPraTur=$_GET["nivPraTur"];
	$nivPraTop=$_GET["nivPraTop"];
	$lectoFone=$_GET["lectoFone"];
	$lectoSila=$_GET["lectoSila"];
	$lectoLect=$_GET["lectoLect"];
	$lectoVoz=$_GET["lectoVoz"];
	$lectoSile=$_GET["lectoSile"];
	$lectoComp=$_GET["lectoComp"];
	$lectoApoy=$_GET["lectoApoy"];
	$lectoApoyCual=$_GET["lectoApoyCual"];
	$lectoVelo=$_GET["lectoVelo"];
	$lectoTexLei=$_GET["lectoTexLei"];
	$escAut=$_GET["escAut"];
	$escAutCom=$_GET["escAutCom"];
	$escCop=$_GET["escCop"];
	$escCopCom=$_GET["escCopCom"];
	$escDic=$_GET["escDic"];
	$escDicCom=$_GET["escDicCom"];
	$escEsp=$_GET["escEsp"];
	$escEspCom=$_GET["escEspCom"];
	$escCoh=$_GET["escCoh"];
	$escCoe=$_GET["escCoe"];
	$escGra=$_GET["escGra"];
	$escSil=$_GET["escSil"];
	$escPal=$_GET["escPal"];
	$escFra=$_GET["escFra"];
	$apreCor=$_GET["apreCor"];
	$apreMed=$_GET["apreMed"];
	$apreLar=$_GET["apreLar"];
	$apreAte=$_GET["apreAte"];
	$apreMot=$_GET["apreMot"];
	$apreTol=$_GET["apreTol"];
	$apreAct=$_GET["apreAct"];
	$impDiag=$_GET["impDiag"];
	$diag1=$_GET["diag1"];
	$diag2=$_GET["diag2"];
	$diag3=$_GET["diag3"];
	$profesional=$_GET["profesional"];
	
	require '../clases/fonoaudiologia.php';
	$fonoaudiologia=new fonoaudiologia;
	$fonoaudiologia->insertarDatos($idFonoAudiologia,$consulta,$antPre,$antPeri,$antPers,$alMa,$alBla,$alSol,$alTet,$alInd,$tipAli,$evoBal,$evoPal,$evoFra,$evoPro,$evoGra,$evoLec,$evoPre,$obs,$sisFonCom,$falFon,$falFonCua,$falCom,$falComCua,$labAna,$labMov,$labTon,$labSen,$labFun,$lenAna,$lenMov,$lenTon,$lenSen,$lenFun,$mejAna,$mejMov,$mejTon,$mejSen,$mejFun,$velAna,$velMov,$velTon,$velSen,$velFun,$die,$pal,$praORF,$resMod,$resTip,$resCoo,$nivSemSem,$nivSemCua,$nivSemSec,$nivSemNom,$nivSemAgr,$nivSemAbsVis,$nivSemAbsAud,$nivSemAbsGes,$nivSemDif,$nivSemSemj,$nivSemAna,$nivSemReaDesc,$nivSemSin,$nivSemAut,$nivSemComOrdSim,$nivSemComOrdCom,$nivSemComOrdObj,$nivSemGraCatGra,$nivSemGraCatGraCua,$nivSemGraOra,$nivSemGraPal,$nivSemGraCoh,$nivSemGraCoe,$nivPraInt,$nivPraPre,$nivPraRes,$nivPraExc,$nivPraNeg,$nivPraAfi,$nivPraInf,$nivPraCon,$nivPraTur,$nivPraTop,$lectoFone,$lectoSila,$lectoLect,$lectoVoz,$lectoSile,$lectoComp,$lectoApoy,$lectoApoyCual,$lectoVelo,$lectoTexLei,$escAut,$escAutCom,$escCop,$escCopCom,$escDic,$escDicCom,$escEsp,$escEspCom,$escCoh,$escCoe,$escGra,$escSil,$escPal,$escFra,$apreCor,$apreMed,$apreLar,$apreAte,$apreMot,$apreTol,$apreAct,$impDiag,$diag1,$diag2,$diag3,$profesional);
}

if($accion == 'consultarTodosfonoaudiologia')
{
	require '../clases/fonoaudiologia.php';
	$fonoaudiologia=new fonoaudiologia;
	$fonoaudiologia->consultarTodosfonoaudiologia();
}

if($accion == 'dibujarFormularioModificarfonoaudiologia')
{
	require '../clases/fonoaudiologia.php';
	$id = $_GET["id"];
	$fonoaudiologia=new fonoaudiologia;
	$fonoaudiologia->dibujarFormularioModificarfonoaudiologia($id);
}

if($accion == 'modificarfonoaudiologia')
{
	$idFonoAudiologia=$_GET["idFonoAudiologia"];
	$consulta=$_GET["consulta"];
	$antPre=$_GET["antPre"];
	$antPeri=$_GET["antPeri"];
	$antPers=$_GET["antPers"];
	$alMa=$_GET["alMa"];
	$alBla=$_GET["alBla"];
	$alSol=$_GET["alSol"];
	$alTet=$_GET["alTet"];
	$alInd=$_GET["alInd"];
	$tipAli=$_GET["tipAli"];
	$evoBal=$_GET["evoBal"];
	$evoPal=$_GET["evoPal"];
	$evoFra=$_GET["evoFra"];
	$evoPro=$_GET["evoPro"];
	$evoGra=$_GET["evoGra"];
	$evoLec=$_GET["evoLec"];
	$evoPre=$_GET["evoPre"];
	$obs=$_GET["obs"];
	$sisFonCom=$_GET["sisFonCom"];
	$falFon=$_GET["falFon"];
	$falFonCua=$_GET["falFonCua"];
	$falCom=$_GET["falCom"];
	$falComCua=$_GET["falComCua"];
	$labAna=$_GET["labAna"];
	$labMov=$_GET["labMov"];
	$labTon=$_GET["labTon"];
	$labSen=$_GET["labSen"];
	$labFun=$_GET["labFun"];
	$lenAna=$_GET["lenAna"];
	$lenMov=$_GET["lenMov"];
	$lenTon=$_GET["lenTon"];
	$lenSen=$_GET["lenSen"];
	$lenFun=$_GET["lenFun"];
	$mejAna=$_GET["mejAna"];
	$mejMov=$_GET["mejMov"];
	$mejTon=$_GET["mejTon"];
	$mejSen=$_GET["mejSen"];
	$mejFun=$_GET["mejFun"];
	$velAna=$_GET["velAna"];
	$velMov=$_GET["velMov"];
	$velTon=$_GET["velTon"];
	$velSen=$_GET["velSen"];
	$velFun=$_GET["velFun"];
	$die=$_GET["die"];
	$pal=$_GET["pal"];
	$praORF=$_GET["praORF"];
	$resMod=$_GET["resMod"];
	$resTip=$_GET["resTip"];
	$resCoo=$_GET["resCoo"];
	$nivSemSem=$_GET["nivSemSem"];
	$nivSemCua=$_GET["nivSemCua"];
	$nivSemSec=$_GET["nivSemSec"];
	$nivSemNom=$_GET["nivSemNom"];
	$nivSemAgr=$_GET["nivSemAgr"];
	$nivSemAbsVis=$_GET["nivSemAbsVis"];
	$nivSemAbsAud=$_GET["nivSemAbsAud"];
	$nivSemAbsGes=$_GET["nivSemAbsGes"];
	$nivSemDif=$_GET["nivSemDif"];
	$nivSemSemj=$_GET["nivSemSemj"];
	$nivSemAna=$_GET["nivSemAna"];
	$nivSemReaDesc=$_GET["nivSemReaDesc"];
	$nivSemSin=$_GET["nivSemSin"];
	$nivSemAut=$_GET["nivSemAut"];
	$nivSemComOrdSim=$_GET["nivSemComOrdSim"];
	$nivSemComOrdCom=$_GET["nivSemComOrdCom"];
	$nivSemComOrdObj=$_GET["nivSemComOrdObj"];
	$nivSemGraCatGra=$_GET["nivSemGraCatGra"];
	$nivSemGraCatGraCua=$_GET["nivSemGraCatGraCua"];
	$nivSemGraOra=$_GET["nivSemGraOra"];
	$nivSemGraPal=$_GET["nivSemGraPal"];
	$nivSemGraCoh=$_GET["nivSemGraCoh"];
	$nivSemGraCoe=$_GET["nivSemGraCoe"];
	$nivPraInt=$_GET["nivPraInt"];
	$nivPraPre=$_GET["nivPraPre"];
	$nivPraRes=$_GET["nivPraRes"];
	$nivPraExc=$_GET["nivPraExc"];
	$nivPraNeg=$_GET["nivPraNeg"];
	$nivPraAfi=$_GET["nivPraAfi"];
	$nivPraInf=$_GET["nivPraInf"];
	$nivPraCon=$_GET["nivPraCon"];
	$nivPraTur=$_GET["nivPraTur"];
	$nivPraTop=$_GET["nivPraTop"];
	$lectoFone=$_GET["lectoFone"];
	$lectoSila=$_GET["lectoSila"];
	$lectoLect=$_GET["lectoLect"];
	$lectoVoz=$_GET["lectoVoz"];
	$lectoSile=$_GET["lectoSile"];
	$lectoComp=$_GET["lectoComp"];
	$lectoApoy=$_GET["lectoApoy"];
	$lectoApoyCual=$_GET["lectoApoyCual"];
	$lectoVelo=$_GET["lectoVelo"];
	$lectoTexLei=$_GET["lectoTexLei"];
	$escAut=$_GET["escAut"];
	$escAutCom=$_GET["escAutCom"];
	$escCop=$_GET["escCop"];
	$escCopCom=$_GET["escCopCom"];
	$escDic=$_GET["escDic"];
	$escDicCom=$_GET["escDicCom"];
	$escEsp=$_GET["escEsp"];
	$escEspCom=$_GET["escEspCom"];
	$escCoh=$_GET["escCoh"];
	$escCoe=$_GET["escCoe"];
	$escGra=$_GET["escGra"];
	$escSil=$_GET["escSil"];
	$escPal=$_GET["escPal"];
	$escFra=$_GET["escFra"];
	$apreCor=$_GET["apreCor"];
	$apreMed=$_GET["apreMed"];
	$apreLar=$_GET["apreLar"];
	$apreAte=$_GET["apreAte"];
	$apreMot=$_GET["apreMot"];
	$apreTol=$_GET["apreTol"];
	$apreAct=$_GET["apreAct"];
	$impDiag=$_GET["impDiag"];
	$diag1=$_GET["diag1"];
	$diag2=$_GET["diag2"];
	$diag3=$_GET["diag3"];
	$profesional=$_GET["profesional"];
	
	require '../clases/fonoaudiologia.php';
	$fonoaudiologia=new fonoaudiologia;
	$fonoaudiologia->actualizarDatos($idFonoAudiologia,$consulta,$antPre,$antPeri,$antPers,$alMa,$alBla,$alSol,$alTet,$alInd,$tipAli,$evoBal,$evoPal,$evoFra,$evoPro,$evoGra,$evoLec,$evoPre,$obs,$sisFonCom,$falFon,$falFonCua,$falCom,$falComCua,$labAna,$labMov,$labTon,$labSen,$labFun,$lenAna,$lenMov,$lenTon,$lenSen,$lenFun,$mejAna,$mejMov,$mejTon,$mejSen,$mejFun,$velAna,$velMov,$velTon,$velSen,$velFun,$die,$pal,$praORF,$resMod,$resTip,$resCoo,$nivSemSem,$nivSemCua,$nivSemSec,$nivSemNom,$nivSemAgr,$nivSemAbsVis,$nivSemAbsAud,$nivSemAbsGes,$nivSemDif,$nivSemSemj,$nivSemAna,$nivSemReaDesc,$nivSemSin,$nivSemAut,$nivSemComOrdSim,$nivSemComOrdCom,$nivSemComOrdObj,$nivSemGraCatGra,$nivSemGraCatGraCua,$nivSemGraOra,$nivSemGraPal,$nivSemGraCoh,$nivSemGraCoe,$nivPraInt,$nivPraPre,$nivPraRes,$nivPraExc,$nivPraNeg,$nivPraAfi,$nivPraInf,$nivPraCon,$nivPraTur,$nivPraTop,$lectoFone,$lectoSila,$lectoLect,$lectoVoz,$lectoSile,$lectoComp,$lectoApoy,$lectoApoyCual,$lectoVelo,$lectoTexLei,$escAut,$escAutCom,$escCop,$escCopCom,$escDic,$escDicCom,$escEsp,$escEspCom,$escCoh,$escCoe,$escGra,$escSil,$escPal,$escFra,$apreCor,$apreMed,$apreLar,$apreAte,$apreMot,$apreTol,$apreAct,$impDiag,$diag1,$diag2,$diag3,$profesional);
}

if($accion == 'eliminarfonoaudiologia')
{
	$id=$_GET['id'];
	require '../clases/fonoaudiologia.php';
	$fonoaudiologia=new fonoaudiologia;
	$fonoaudiologia->eliminarDatos($id);
}

if($accion == 'dibujarFormularioIngresofrecuenciaalimentaria')
{
	require '../clases/frecuenciaalimentaria.php';
	$frecuenciaalimentaria=new frecuenciaalimentaria;
	$frecuenciaalimentaria->dibujarFormularioIngresofrecuenciaalimentaria();
}

if($accion == 'ingresarNuevofrecuenciaalimentaria')
{
	$idFrecuenciaAlimentaria=$_GET["idFrecuenciaAlimentaria"];
	$consulta=$_GET["consulta"];
	$alimento=$_GET["alimento"];
	$diario=$_GET["diario"];
	$semanal=$_GET["semanal"];
	$quincenal=$_GET["quincenal"];
	$ocasional=$_GET["ocasional"];
	$peso=$_GET["peso"];
	$tall=$_GET["tall"];
	$pt=$_GET["p/t"];
	$te=$_GET["t/e"];
	$diaNut=$_GET["diaNut"];
	$eduNut=$_GET["eduNut"];
	$objetivos=$_GET["objetivos"];
	$estrategias=$_GET["estrategias"];
	$metas=$_GET["metas"];
	$profesional=$_GET["profesional"];
	
	require '../clases/frecuenciaalimentaria.php';
	$frecuenciaalimentaria=new frecuenciaalimentaria;
	$frecuenciaalimentaria->insertarDatos($idFrecuenciaAlimentaria,$consulta,$alimento,$diario,$semanal,$quincenal,$ocasional,$peso,$tall,$pt,$te,$diaNut,$eduNut,$objetivos,$estrategias,$metas,$profesional);
}

if($accion == 'consultarTodosfrecuenciaalimentaria')
{
	require '../clases/frecuenciaalimentaria.php';
	$frecuenciaalimentaria=new frecuenciaalimentaria;
	$frecuenciaalimentaria->consultarTodosfrecuenciaalimentaria();
}

if($accion == 'dibujarFormularioModificarfrecuenciaalimentaria')
{
	require '../clases/frecuenciaalimentaria.php';
	$id = $_GET["id"];
	$frecuenciaalimentaria=new frecuenciaalimentaria;
	$frecuenciaalimentaria->dibujarFormularioModificarfrecuenciaalimentaria($id);
}

if($accion == 'modificarfrecuenciaalimentaria')
{
	$idFrecuenciaAlimentaria=$_GET["idFrecuenciaAlimentaria"];
	$consulta=$_GET["consulta"];
	$alimento=$_GET["alimento"];
	$diario=$_GET["diario"];
	$semanal=$_GET["semanal"];
	$quincenal=$_GET["quincenal"];
	$ocasional=$_GET["ocasional"];
	$peso=$_GET["peso"];
	$tall=$_GET["tall"];
	$pt=$_GET["p/t"];
	$te=$_GET["t/e"];
	$diaNut=$_GET["diaNut"];
	$eduNut=$_GET["eduNut"];
	$objetivos=$_GET["objetivos"];
	$estrategias=$_GET["estrategias"];
	$metas=$_GET["metas"];
	$profesional=$_GET["profesional"];
	
	require '../clases/frecuenciaalimentaria.php';
	$frecuenciaalimentaria=new frecuenciaalimentaria;
	$frecuenciaalimentaria->actualizarDatos($idFrecuenciaAlimentaria,$consulta,$alimento,$diario,$semanal,$quincenal,$ocasional,$peso,$tall,$pt,$te,$diaNut,$eduNut,$objetivos,$estrategias,$metas,$profesional);
}

if($accion == 'eliminarfrecuenciaalimentaria')
{
	$id=$_GET['id'];
	require '../clases/frecuenciaalimentaria.php';
	$frecuenciaalimentaria=new frecuenciaalimentaria;
	$frecuenciaalimentaria->eliminarDatos($id);
}

if($accion == 'dibujarFormularioIngresolaborales')
{
	require '../clases/laborales.php';
	$laborales=new laborales;
	$laborales->dibujarFormularioIngresolaborales();
}

if($accion == 'ingresarNuevolaborales')
{
	$idLaborales=$_GET["idLaborales"];
	$consulta=$_GET["consulta"];
	$empresa=$_GET["empresa"];
	$cargo=$_GET["cargo"];
	$tiempo=$_GET["tiempo"];
	$motRet=$_GET["motRet"];
	
	require '../clases/laborales.php';
	$laborales=new laborales;
	$laborales->insertarDatos($idLaborales,$consulta,$empresa,$cargo,$tiempo,$motRet);
}

if($accion == 'consultarTodoslaborales')
{
    $consulta=$_GET["consulta"];
	require '../clases/laborales.php';
	$laborales=new laborales;
	$laborales->consultarTodoslaborales($consulta);
}

if($accion == 'dibujarFormularioModificarlaborales')
{
	require '../clases/laborales.php';
	$id = $_GET["id"];
	$laborales=new laborales;
	$laborales->dibujarFormularioModificarlaborales($id);
}

if($accion == 'modificarlaborales')
{
	$idLaborales=$_GET["idLaborales"];
	$consulta=$_GET["consulta"];
	$empresa=$_GET["empresa"];
	$cargo=$_GET["cargo"];
	$tiempo=$_GET["tiempo"];
	$motRet=$_GET["motRet"];
	
	require '../clases/laborales.php';
	$laborales=new laborales;
	$laborales->actualizarDatos($idLaborales,$consulta,$empresa,$cargo,$tiempo,$motRet);
}

if($accion == 'eliminarlaborales')
{
	$id=$_GET['id'];
	require '../clases/laborales.php';
	$laborales=new laborales;
	$laborales->eliminarDatos($id);
}

if($accion == 'dibujarFormularioIngresomunicipio')
{
	require '../clases/municipio.php';
	$municipio=new municipio;
	$municipio->dibujarFormularioIngresomunicipio();
}

if($accion == 'ingresarNuevomunicipio')
{
	$idMunicipio=$_GET["idMunicipio"];
	$codigo=$_GET["codigo"];
	$nombre=$_GET["nombre"];
	$departamento=$_GET["departamento"];
	
	require '../clases/municipio.php';
	$municipio=new municipio;
	$municipio->insertarDatos($idMunicipio,$codigo,$nombre,$departamento);
}

if($accion == 'consultarTodosmunicipio')
{
	require '../clases/municipio.php';
	$municipio=new municipio;
	$municipio->consultarTodosmunicipio();
}

if($accion == 'dibujarFormularioModificarmunicipio')
{
	require '../clases/municipio.php';
	$id = $_GET["id"];
	$municipio=new municipio;
	$municipio->dibujarFormularioModificarmunicipio($id);
}

if($accion == 'modificarmunicipio')
{
	$idMunicipio=$_GET["idMunicipio"];
	$codigo=$_GET["codigo"];
	$nombre=$_GET["nombre"];
	$departamento=$_GET["departamento"];
	
	require '../clases/municipio.php';
	$municipio=new municipio;
	$municipio->actualizarDatos($idMunicipio,$codigo,$nombre,$departamento);
}

if($accion == 'eliminarmunicipio')
{
	$id=$_GET['id'];
	require '../clases/municipio.php';
	$municipio=new municipio;
	$municipio->eliminarDatos($id);
}

if($accion == 'dibujarFormularioIngresonutricional')
{
	require '../clases/nutricional.php';
	$nutricional=new nutricional;
	$nutricional->dibujarFormularioIngresonutricional();
}

if($accion == 'ingresarNuevonutricional')
{
	$idNutricional=$_GET["idNutricional"];
	$consulta=$_GET["consulta"];
	$antPerSal=$_GET["antPerSal"];
	$aleAli=$_GET["aleAli"];
	$traDigEst=$_GET["traDigEst"];
	$traDigGas=$_GET["traDigGas"];
	$traDigRGE=$_GET["traDigRGE"];
	$traDigDia=$_GET["traDigDia"];
	$praDep=$_GET["praDep"];
	$cualDep=$_GET["cualDep"];
	$frecuencia=$_GET["frecuencia"];
	$antFamSal=$_GET["antFamSal"];
	$conRegComPrin=$_GET["conRegComPrin"];
	$masNor=$_GET["masNor"];
	$conComNut=$_GET["conComNut"];
	$conAguaDia=$_GET["conAguaDia"];
	$apetito=$_GET["apetito"];
	
	require '../clases/nutricional.php';
	$nutricional=new nutricional;
	$nutricional->insertarDatos($idNutricional,$consulta,$antPerSal,$aleAli,$traDigEst,$traDigGas,$traDigRGE,$traDigDia,$praDep,$cualDep,$frecuencia,$antFamSal,$conRegComPrin,$masNor,$conComNut,$conAguaDia,$apetito);
}

if($accion == 'consultarTodosnutricional')
{
	require '../clases/nutricional.php';
	$nutricional=new nutricional;
	$nutricional->consultarTodosnutricional();
}

if($accion == 'dibujarFormularioModificarnutricional')
{
	require '../clases/nutricional.php';
	$id = $_GET["id"];
	$nutricional=new nutricional;
	$nutricional->dibujarFormularioModificarnutricional($id);
}

if($accion == 'modificarnutricional')
{
	$idNutricional=$_GET["idNutricional"];
	$consulta=$_GET["consulta"];
	$antPerSal=$_GET["antPerSal"];
	$aleAli=$_GET["aleAli"];
	$traDigEst=$_GET["traDigEst"];
	$traDigGas=$_GET["traDigGas"];
	$traDigRGE=$_GET["traDigRGE"];
	$traDigDia=$_GET["traDigDia"];
	$praDep=$_GET["praDep"];
	$cualDep=$_GET["cualDep"];
	$frecuencia=$_GET["frecuencia"];
	$antFamSal=$_GET["antFamSal"];
	$conRegComPrin=$_GET["conRegComPrin"];
	$masNor=$_GET["masNor"];
	$conComNut=$_GET["conComNut"];
	$conAguaDia=$_GET["conAguaDia"];
	$apetito=$_GET["apetito"];
	
	require '../clases/nutricional.php';
	$nutricional=new nutricional;
	$nutricional->actualizarDatos($idNutricional,$consulta,$antPerSal,$aleAli,$traDigEst,$traDigGas,$traDigRGE,$traDigDia,$praDep,$cualDep,$frecuencia,$antFamSal,$conRegComPrin,$masNor,$conComNut,$conAguaDia,$apetito);
}

if($accion == 'eliminarnutricional')
{
	$id=$_GET['id'];
	require '../clases/nutricional.php';
	$nutricional=new nutricional;
	$nutricional->eliminarDatos($id);
}

if($accion == 'dibujarFormularioIngresoodontologia')
{
	require '../clases/odontologia.php';
	$odontologia=new odontologia;
	$odontologia->dibujarFormularioIngresoodontologia();
}

if($accion == 'ingresarNuevoodontologia')
{
	$idOdontologia=$_GET["idOdontologia"];
	$consulta=$_GET["consulta"];
	$motCon=$_GET["motCon"];
	$enfermedad=$_GET["enfermedad"];
	$pulso=$_GET["pulso"];
	$preArt=$_GET["preArt"];
	$freRes=$_GET["freRes"];
	$freCar=$_GET["freCar"];
	$ttoMedAct=$_GET["ttoMedAct"];
	$tomMed=$_GET["tomMed"];
	$alergia=$_GET["alergia"];
	$cardiopatia=$_GET["cardiopatia"];
	$altPA=$_GET["altPA"];
	$diabetes=$_GET["diabetes"];
	$hepatitis=$_GET["hepatitis"];
	$disSan=$_GET["disSan"];
	$enfRen=$_GET["enfRen"];
	$inmuno=$_GET["inmuno"];
	$traEnd=$_GET["traEnd"];
	$patResp=$_GET["patResp"];
	$traGas=$_GET["traGas"];
	$epilepsia=$_GET["epilepsia"];
	$cirugias=$_GET["cirugias"];
	$protesis=$_GET["protesis"];
	$observaciones=$_GET["observaciones"];
	$labSup=$_GET["labSup"];
	$labInf=$_GET["labInf"];
	$comisuras=$_GET["comisuras"];
	$mucOral=$_GET["mucOral"];
	$paladar=$_GET["paladar"];
	$lengua=$_GET["lengua"];
	$pisBoca=$_GET["pisBoca"];
	$rebAlv=$_GET["rebAlv"];
	$frenillos=$_GET["frenillos"];
	$glaSal=$_GET["glaSal"];
	$dolMus=$_GET["dolMus"];
	$dolArt=$_GET["dolArt"];
	$ruiArt=$_GET["ruiArt"];
	$alteracion=$_GET["alteracion"];
	$despalzamiento=$_GET["despalzamiento"];
	$observaciones2=$_GET["observaciones2"];
	$forma=$_GET["forma"];
	$tamano=$_GET["tamano"];
	$numero=$_GET["numero"];
	$movTejDen=$_GET["movTejDen"];
	$inflamacion=$_GET["inflamacion"];
	$bolsa=$_GET["bolsa"];
	$recesiones=$_GET["recesiones"];
	$movExaPul=$_GET["movExaPul"];
	$perExaPul=$_GET["perExaPul"];
	$senExaPul=$_GET["senExaPul"];
	$fisExaPul=$_GET["fisExaPul"];
	$dieTraExaPul=$_GET["dieTraExaPul"];
	$habOra=$_GET["habOra"];
	$observaciones3=$_GET["observaciones3"];
	$diagOral=$_GET["diagOral"];
	$plaTra=$_GET["plaTra"];
	$profesional2=$_GET["profesional2"];
	$oASI8=$_GET["oASI8"];
	$oASI7=$_GET["oASI7"];
	$oASI6=$_GET["oASI6"];
	$oASI5=$_GET["oASI5"];
	$oASI4=$_GET["oASI4"];
	$oASI3=$_GET["oASI3"];
	$oASI2=$_GET["oASI2"];
	$oASI1=$_GET["oASI1"];
	$oAII8=$_GET["oAII8"];
	$oAII7=$_GET["oAII7"];
	$oAII6=$_GET["oAII6"];
	$oAII5=$_GET["oAII5"];
	$oAII4=$_GET["oAII4"];
	$oAII3=$_GET["oAII3"];
	$oAII2=$_GET["oAII2"];
	$oAII1=$_GET["oAII1"];
	$oADS8=$_GET["oADS8"];
	$oADS7=$_GET["oADS7"];
	$oADS6=$_GET["oADS6"];
	$oADS5=$_GET["oADS5"];
	$oADS4=$_GET["oADS4"];
	$oADS3=$_GET["oADS3"];
	$oADS2=$_GET["oADS2"];
	$oADS1=$_GET["oADS1"];
	$oADI8=$_GET["oADI8"];
	$oADI7=$_GET["oADI7"];
	$oADI6=$_GET["oADI6"];
	$oADI5=$_GET["oADI5"];
	$oADI4=$_GET["oADI4"];
	$oADI3=$_GET["oADI3"];
	$oADI2=$_GET["oADI2"];
	$oADI1=$_GET["oADI1"];
	$oIIS8=$_GET["oIIS8"];
	$oIIS7=$_GET["oIIS7"];
	$oIIS6=$_GET["oIIS6"];
	$oIIS5=$_GET["oIIS5"];
	$oIIS4=$_GET["oIIS4"];
	$oIIS3=$_GET["oIIS3"];
	$oIIS2=$_GET["oIIS2"];
	$oIIS1=$_GET["oIIS1"];
	$oIII8=$_GET["oIII8"];
	$oIII7=$_GET["oIII7"];
	$oIII6=$_GET["oIII6"];
	$oIII5=$_GET["oIII5"];
	$oIII4=$_GET["oIII4"];
	$oIII3=$_GET["oIII3"];
	$oIII2=$_GET["oIII2"];
	$oIII1=$_GET["oIII1"];
	$oIDS8=$_GET["oIDS8"];
	$oIDS7=$_GET["oIDS7"];
	$oIDS6=$_GET["oIDS6"];
	$oIDS5=$_GET["oIDS5"];
	$oIDS4=$_GET["oIDS4"];
	$oIDS3=$_GET["oIDS3"];
	$oIDS2=$_GET["oIDS2"];
	$oIDS1=$_GET["oIDS1"];
	$oIDI8=$_GET["oIDI8"];
	$oIDI7=$_GET["oIDI7"];
	$oIDI6=$_GET["oIDI6"];
	$oIDI5=$_GET["oIDI5"];
	$oIDI4=$_GET["oIDI4"];
	$oIDI3=$_GET["oIDI3"];
	$oIDI2=$_GET["oIDI2"];
	$oIDI1=$_GET["oIDI1"];
	$profesional=$_GET["profesional"];
	
	require '../clases/odontologia.php';
	$odontologia=new odontologia;
	$odontologia->insertarDatos($idOdontologia,$consulta,$motCon,$enfermedad,$pulso,$preArt,$freRes,$freCar,$ttoMedAct,$tomMed,$alergia,$cardiopatia,$altPA,$diabetes,$hepatitis,$disSan,$enfRen,$inmuno,$traEnd,$patResp,$traGas,$epilepsia,$cirugias,$protesis,$observaciones,$labSup,$labInf,$comisuras,$mucOral,$paladar,$lengua,$pisBoca,$rebAlv,$frenillos,$glaSal,$dolMus,$dolArt,$ruiArt,$alteracion,$despalzamiento,$observaciones2,$forma,$tamano,$numero,$movTejDen,$inflamacion,$bolsa,$recesiones,$movExaPul,$perExaPul,$senExaPul,$fisExaPul,$dieTraExaPul,$habOra,$observaciones3,$diagOral,$plaTra,$profesional2,$oASI8,$oASI7,$oASI6,$oASI5,$oASI4,$oASI3,$oASI2,$oASI1,$oAII8,$oAII7,$oAII6,$oAII5,$oAII4,$oAII3,$oAII2,$oAII1,$oADS8,$oADS7,$oADS6,$oADS5,$oADS4,$oADS3,$oADS2,$oADS1,$oADI8,$oADI7,$oADI6,$oADI5,$oADI4,$oADI3,$oADI2,$oADI1,$oIIS8,$oIIS7,$oIIS6,$oIIS5,$oIIS4,$oIIS3,$oIIS2,$oIIS1,$oIII8,$oIII7,$oIII6,$oIII5,$oIII4,$oIII3,$oIII2,$oIII1,$oIDS8,$oIDS7,$oIDS6,$oIDS5,$oIDS4,$oIDS3,$oIDS2,$oIDS1,$oIDI8,$oIDI7,$oIDI6,$oIDI5,$oIDI4,$oIDI3,$oIDI2,$oIDI1,$profesional);
}

if($accion == 'consultarTodosodontologia')
{
	require '../clases/odontologia.php';
	$odontologia=new odontologia;
	$odontologia->consultarTodosodontologia();
}

if($accion == 'dibujarFormularioModificarodontologia')
{
	require '../clases/odontologia.php';
	$id = $_GET["id"];
	$odontologia=new odontologia;
	$odontologia->dibujarFormularioModificarodontologia($id);
}

if($accion == 'modificarodontologia')
{
	$idOdontologia=$_GET["idOdontologia"];
	$consulta=$_GET["consulta"];
	$motCon=$_GET["motCon"];
	$enfermedad=$_GET["enfermedad"];
	$pulso=$_GET["pulso"];
	$preArt=$_GET["preArt"];
	$freRes=$_GET["freRes"];
	$freCar=$_GET["freCar"];
	$ttoMedAct=$_GET["ttoMedAct"];
	$tomMed=$_GET["tomMed"];
	$alergia=$_GET["alergia"];
	$cardiopatia=$_GET["cardiopatia"];
	$altPA=$_GET["altP/A"];
	$diabetes=$_GET["diabetes"];
	$hepatitis=$_GET["hepatitis"];
	$disSan=$_GET["disSan"];
	$enfRen=$_GET["enfRen"];
	$inmuno=$_GET["inmuno"];
	$traEnd=$_GET["traEnd"];
	$patResp=$_GET["patResp"];
	$traGas=$_GET["traGas"];
	$epilepsia=$_GET["epilepsia"];
	$cirugias=$_GET["cirugias"];
	$protesis=$_GET["protesis"];
	$observaciones=$_GET["observaciones"];
	$labSup=$_GET["labSup"];
	$labInf=$_GET["labInf"];
	$comisuras=$_GET["comisuras"];
	$mucOral=$_GET["mucOral"];
	$paladar=$_GET["paladar"];
	$lengua=$_GET["lengua"];
	$pisBoca=$_GET["pisBoca"];
	$rebAlv=$_GET["rebAlv"];
	$frenillos=$_GET["frenillos"];
	$glaSal=$_GET["glaSal"];
	$dolMus=$_GET["dolMus"];
	$dolArt=$_GET["dolArt"];
	$ruiArt=$_GET["ruiArt"];
	$alteracion=$_GET["alteracion"];
	$despalzamiento=$_GET["despalzamiento"];
	$observaciones2=$_GET["observaciones2"];
	$forma=$_GET["forma"];
	$tamano=$_GET["tamano"];
	$numero=$_GET["numero"];
	$movTejDen=$_GET["movTejDen"];
	$inflamacion=$_GET["inflamacion"];
	$bolsa=$_GET["bolsa"];
	$recesiones=$_GET["recesiones"];
	$movExaPul=$_GET["movExaPul"];
	$perExaPul=$_GET["perExaPul"];
	$senExaPul=$_GET["senExaPul"];
	$fisExaPul=$_GET["fisExaPul"];
	$dieTraExaPul=$_GET["dieTraExaPul"];
	$habOra=$_GET["habOra"];
	$observaciones3=$_GET["observaciones3"];
	$diagOral=$_GET["diagOral"];
	$plaTra=$_GET["plaTra"];
	$profesional2=$_GET["profesional2"];
	$oASI8=$_GET["oASI8"];
	$oASI7=$_GET["oASI7"];
	$oASI6=$_GET["oASI6"];
	$oASI5=$_GET["oASI5"];
	$oASI4=$_GET["oASI4"];
	$oASI3=$_GET["oASI3"];
	$oASI2=$_GET["oASI2"];
	$oASI1=$_GET["oASI1"];
	$oAII8=$_GET["oAII8"];
	$oAII7=$_GET["oAII7"];
	$oAII6=$_GET["oAII6"];
	$oAII5=$_GET["oAII5"];
	$oAII4=$_GET["oAII4"];
	$oAII3=$_GET["oAII3"];
	$oAII2=$_GET["oAII2"];
	$oAII1=$_GET["oAII1"];
	$oADS8=$_GET["oADS8"];
	$oADS7=$_GET["oADS7"];
	$oADS6=$_GET["oADS6"];
	$oADS5=$_GET["oADS5"];
	$oADS4=$_GET["oADS4"];
	$oADS3=$_GET["oADS3"];
	$oADS2=$_GET["oADS2"];
	$oADS1=$_GET["oADS1"];
	$oADI8=$_GET["oADI8"];
	$oADI7=$_GET["oADI7"];
	$oADI6=$_GET["oADI6"];
	$oADI5=$_GET["oADI5"];
	$oADI4=$_GET["oADI4"];
	$oADI3=$_GET["oADI3"];
	$oADI2=$_GET["oADI2"];
	$oADI1=$_GET["oADI1"];
	$oIIS8=$_GET["oIIS8"];
	$oIIS7=$_GET["oIIS7"];
	$oIIS6=$_GET["oIIS6"];
	$oIIS5=$_GET["oIIS5"];
	$oIIS4=$_GET["oIIS4"];
	$oIIS3=$_GET["oIIS3"];
	$oIIS2=$_GET["oIIS2"];
	$oIIS1=$_GET["oIIS1"];
	$oIII8=$_GET["oIII8"];
	$oIII7=$_GET["oIII7"];
	$oIII6=$_GET["oIII6"];
	$oIII5=$_GET["oIII5"];
	$oIII4=$_GET["oIII4"];
	$oIII3=$_GET["oIII3"];
	$oIII2=$_GET["oIII2"];
	$oIII1=$_GET["oIII1"];
	$oIDS8=$_GET["oIDS8"];
	$oIDS7=$_GET["oIDS7"];
	$oIDS6=$_GET["oIDS6"];
	$oIDS5=$_GET["oIDS5"];
	$oIDS4=$_GET["oIDS4"];
	$oIDS3=$_GET["oIDS3"];
	$oIDS2=$_GET["oIDS2"];
	$oIDS1=$_GET["oIDS1"];
	$oIDI8=$_GET["oIDI8"];
	$oIDI7=$_GET["oIDI7"];
	$oIDI6=$_GET["oIDI6"];
	$oIDI5=$_GET["oIDI5"];
	$oIDI4=$_GET["oIDI4"];
	$oIDI3=$_GET["oIDI3"];
	$oIDI2=$_GET["oIDI2"];
	$oIDI1=$_GET["oIDI1"];
	$profesional=$_GET["profesional"];
	
	require '../clases/odontologia.php';
	$odontologia=new odontologia;
	$odontologia->actualizarDatos($idOdontologia,$consulta,$motCon,$enfermedad,$pulso,$preArt,$freRes,$freCar,$ttoMedAct,$tomMed,$alergia,$cardiopatia,$altPA,$diabetes,$hepatitis,$disSan,$enfRen,$inmuno,$traEnd,$patResp,$traGas,$epilepsia,$cirugias,$protesis,$observaciones,$labSup,$labInf,$comisuras,$mucOral,$paladar,$lengua,$pisBoca,$rebAlv,$frenillos,$glaSal,$dolMus,$dolArt,$ruiArt,$alteracion,$despalzamiento,$observaciones2,$forma,$tamano,$numero,$movTejDen,$inflamacion,$bolsa,$recesiones,$movExaPul,$perExaPul,$senExaPul,$fisExaPul,$dieTraExaPul,$habOra,$observaciones3,$diagOral,$plaTra,$profesional2,$oASI8,$oASI7,$oASI6,$oASI5,$oASI4,$oASI3,$oASI2,$oASI1,$oAII8,$oAII7,$oAII6,$oAII5,$oAII4,$oAII3,$oAII2,$oAII1,$oADS8,$oADS7,$oADS6,$oADS5,$oADS4,$oADS3,$oADS2,$oADS1,$oADI8,$oADI7,$oADI6,$oADI5,$oADI4,$oADI3,$oADI2,$oADI1,$oIIS8,$oIIS7,$oIIS6,$oIIS5,$oIIS4,$oIIS3,$oIIS2,$oIIS1,$oIII8,$oIII7,$oIII6,$oIII5,$oIII4,$oIII3,$oIII2,$oIII1,$oIDS8,$oIDS7,$oIDS6,$oIDS5,$oIDS4,$oIDS3,$oIDS2,$oIDS1,$oIDI8,$oIDI7,$oIDI6,$oIDI5,$oIDI4,$oIDI3,$oIDI2,$oIDI1,$profesional);
}

if($accion == 'eliminarodontologia')
{
	$id=$_GET['id'];
	require '../clases/odontologia.php';
	$odontologia=new odontologia;
	$odontologia->eliminarDatos($id);
}

if($accion == 'dibujarFormularioIngresooficio')
{
	require '../clases/oficio.php';
	$oficio=new oficio;
	$oficio->dibujarFormularioIngresooficio();
}

if($accion == 'ingresarNuevooficio')
{
	$idOficio=$_GET["idOficio"];
	$consulta=$_GET["consulta"];
	$nombre=$_GET["nombre"];
	$descripcion=$_GET["descripcion"];
	
	require '../clases/oficio.php';
	$oficio=new oficio;
	$oficio->insertarDatos($idOficio,$consulta,$nombre,$descripcion);
}

if($accion == 'consultarTodosoficio')
{
    $consulta=$_GET["consulta"];
	require '../clases/oficio.php';
	$oficio=new oficio;
	$oficio->consultarTodosoficio($consulta);
}

if($accion == 'dibujarFormularioModificaroficio')
{
	require '../clases/oficio.php';
	$id = $_GET["id"];
	$oficio=new oficio;
	$oficio->dibujarFormularioModificaroficio($id);
}

if($accion == 'modificaroficio')
{
	$idOficio=$_GET["idOficio"];
	$consulta=$_GET["consulta"];
	$nombre=$_GET["nombre"];
	$descripcion=$_GET["descripcion"];
	
	require '../clases/oficio.php';
	$oficio=new oficio;
	$oficio->actualizarDatos($idOficio,$consulta,$nombre,$descripcion);
}

if($accion == 'eliminaroficio')
{
	$id=$_GET['id'];
	require '../clases/oficio.php';
	$oficio=new oficio;
	$oficio->eliminarDatos($id);
}

if($accion == 'dibujarFormularioIngresopaciente')
{
	require '../clases/paciente.php';
	$paciente=new paciente;
	$paciente->dibujarFormularioIngresopaciente();
}

if($accion == 'ingresarNuevopaciente')
{
	$idPaciente=$_GET["idPaciente"];
	$tipoIden=$_GET["tipoIden"];
	$nombre1=$_GET["nombre1"];
	$nombre2=$_GET["nombre2"];
	$apellido1=$_GET["apellido1"];
	$apellido2=$_GET["apellido2"];
	$fechaNacimiento=$_GET["fechaNacimiento"];
	$ciudadNacimiento=$_GET["ciudadNacimiento"];
	$genero=$_GET["genero"];
	$escolaridad=$_GET["escolaridad"];
	$ultAnioApr=$_GET["ultAnioApr"];
	$tipoSangre=$_GET["tipoSangre"];
	$tipoVinculacion=$_GET["tipoVinculacion"];
	$numero=$_GET["numero"];
	$direccion=$_GET["direccion"];
	$telefono=$_GET["telefono"];
	$nombreMadre=$_GET["nombreMadre"];
	$ocuMad=$_GET["ocuMad"];
	$nombrePad=$_GET["nombrePad"];
	$ocuPad=$_GET["ocuPad"];
    $selectDep=$_GET["selectDep"];
    $zonares=$_GET["zonares"];
	
	require '../clases/paciente.php';
	$paciente=new paciente;
	$paciente->insertarDatos($idPaciente,$tipoIden,$nombre1,$nombre2,$apellido1,$apellido2,$fechaNacimiento,$ciudadNacimiento,$genero,$escolaridad,$ultAnioApr,$tipoSangre,$tipoVinculacion,$numero,$direccion,$telefono,$nombreMadre,$ocuMad,$nombrePad,$ocuPad,$selectDep,$zonares);
}

if($accion == 'consultarTodospaciente')
{
	require '../clases/paciente.php';
	$paciente=new paciente;
	$paciente->consultarTodospaciente();
}

if($accion == 'dibujarFormularioModificarpaciente')
{
	require '../clases/paciente.php';
	$id = $_GET["id"];
	$paciente=new paciente;
	$paciente->dibujarFormularioModificarpaciente($id);
}

if($accion == 'modificarpaciente')
{
	$idPaciente=$_GET["idPaciente"];
	$tipoIden=$_GET["tipoIden"];
	$nombre1=$_GET["nombre1"];
	$nombre2=$_GET["nombre2"];
	$apellido1=$_GET["apellido1"];
	$apellido2=$_GET["apellido2"];
	$fechaNacimiento=$_GET["fechaNacimiento"];
	$ciudadNacimiento=$_GET["ciudadNacimiento"];
	$genero=$_GET["genero"];
	$escolaridad=$_GET["escolaridad"];
	$ultAnioApr=$_GET["ultAnioApr"];
	$tipoSangre=$_GET["tipoSangre"];
	$tipoVinculacion=$_GET["tipoVinculacion"];
	$numero=$_GET["numero"];
	$direccion=$_GET["direccion"];
	$telefono=$_GET["telefono"];
	$nombreMadre=$_GET["nombreMadre"];
	$ocuMad=$_GET["ocuMad"];
	$nombrePad=$_GET["nombrePad"];
	$ocuPad=$_GET["ocuPad"];
    $municipio=$_GET["municipio"];
	
	require '../clases/paciente.php';
	$paciente=new paciente;
	$paciente->actualizarDatos($idPaciente,$tipoIden,$nombre1,$nombre2,$apellido1,$apellido2,$fechaNacimiento,$ciudadNacimiento,$genero,$escolaridad,$ultAnioApr,$tipoSangre,$tipoVinculacion,$numero,$direccion,$telefono,$nombreMadre,$ocuMad,$nombrePad,$ocuPad,$municipio);
}

if($accion == 'eliminarpaciente')
{
	$id=$_GET['id'];
	require '../clases/paciente.php';
	$paciente=new paciente;
	$paciente->eliminarDatos($id);
}

if($accion == 'dibujarFormularioIngresopsicologia')
{
	require '../clases/psicologia.php';
	$psicologia=new psicologia;
	$psicologia->dibujarFormularioIngresopsicologia();
}

if($accion == 'ingresarNuevopsicologia')
{
	$idPsicologia=$_GET["idPsicologia"];
	$consulta=$_GET["consulta"];
	$desPsi=$_GET["desPsi"];
	$traRec=$_GET["traRec"];
	$antEmb=$_GET["antEmb"];
	$antPar=$_GET["antPar"];
	$antDesPsi=$_GET["antDesPsi"];
	$antDesPsi2=$_GET["antDesPsi2"];
	$factNos=$_GET["factNos"];
	$priInf=$_GET["priInf"];
	$segInf=$_GET["segInf"];
	$pub=$_GET["pub"];
	$ado=$_GET["ado"];
	$fam=$_GET["fam"];
	$relHer=$_GET["relHer"];
	$actAcu=$_GET["actAcu"];
	$conAcu=$_GET["conAcu"];
	$expFam=$_GET["expFam"];
	$diaFam=$_GET["diaFam"];
	$observaciones=$_GET["observaciones"];
	$conPsiObt=$_GET["conPsiObt"];
	$entSem=$_GET["entSem"];
	$pruDesMad=$_GET["pruDesMad"];
	$otrPru2=$_GET["otrPru2"];
	$concepto=$_GET["concepto"];
	$profesional=$_GET["profesional"];
	$diag1=$_GET["diag1"];
	$diag2=$_GET["diag2"];
	$diag3=$_GET["diag3"];
	
	require '../clases/psicologia.php';
	$psicologia=new psicologia;
	$psicologia->insertarDatos($idPsicologia,$consulta,$desPsi,$traRec,$antEmb,$antPar,$antDesPsi,$antDesPsi2,$factNos,$priInf,$segInf,$pub,$ado,$fam,$relHer,$actAcu,$conAcu,$expFam,$diaFam,$observaciones,$conPsiObt,$entSem,$pruDesMad,$otrPru2,$concepto,$profesional,$diag1,$diag2,$diag3);
}

if($accion == 'consultarTodospsicologia')
{
	require '../clases/psicologia.php';
	$psicologia=new psicologia;
	$psicologia->consultarTodospsicologia();
}

if($accion == 'dibujarFormularioModificarpsicologia')
{
	require '../clases/psicologia.php';
	$id = $_GET["id"];
	$psicologia=new psicologia;
	$psicologia->dibujarFormularioModificarpsicologia($id);
}

if($accion == 'modificarpsicologia')
{
	$idPsicologia=$_GET["idPsicologia"];
	$consulta=$_GET["consulta"];
	$desPsi=$_GET["desPsi"];
	$traRec=$_GET["traRec"];
	$antEmb=$_GET["antEmb"];
	$antPar=$_GET["antPar"];
	$antDesPsi=$_GET["antDesPsi"];
	$antDesPsi2=$_GET["antDesPsi2"];
	$factNos=$_GET["factNos"];
	$priInf=$_GET["priInf"];
	$segInf=$_GET["segInf"];
	$pub=$_GET["pub"];
	$ado=$_GET["ado"];
	$fam=$_GET["fam"];
	$relHer=$_GET["relHer"];
	$actAcu=$_GET["actAcu"];
	$conAcu=$_GET["conAcu"];
	$expFam=$_GET["expFam"];
	$diaFam=$_GET["diaFam"];
	$observaciones=$_GET["observaciones"];
	$conPsiObt=$_GET["conPsiObt"];
	$entSem=$_GET["entSem"];
	$pruDesMad=$_GET["pruDesMad"];
	$otrPru2=$_GET["otrPru2"];
	$concepto=$_GET["concepto"];
	$profesional=$_GET["profesional"];
	$diag1=$_GET["diag1"];
	$diag2=$_GET["diag2"];
	$diag3=$_GET["diag3"];
	
	require '../clases/psicologia.php';
	$psicologia=new psicologia;
	$psicologia->actualizarDatos($idPsicologia,$consulta,$desPsi,$traRec,$antEmb,$antPar,$antDesPsi,$antDesPsi2,$factNos,$priInf,$segInf,$pub,$ado,$fam,$relHer,$actAcu,$conAcu,$expFam,$diaFam,$observaciones,$conPsiObt,$entSem,$pruDesMad,$otrPru2,$concepto,$profesional,$diag1,$diag2,$diag3);
}

if($accion == 'eliminarpsicologia')
{
	$id=$_GET['id'];
	require '../clases/psicologia.php';
	$psicologia=new psicologia;
	$psicologia->eliminarDatos($id);
}

if($accion == 'dibujarFormularioIngresorol')
{
	require '../clases/rol.php';
	$rol=new rol;
	$rol->dibujarFormularioIngresorol();
}

if($accion == 'ingresarNuevorol')
{
	$idRol=$_GET["idRol"];
	$nombre=$_GET["nombre"];
	
	require '../clases/rol.php';
	$rol=new rol;
	$rol->insertarDatos($idRol,$nombre);
}

if($accion == 'consultarTodosrol')
{
	require '../clases/rol.php';
	$rol=new rol;
	$rol->consultarTodosrol();
}

if($accion == 'dibujarFormularioModificarrol')
{
	require '../clases/rol.php';
	$id = $_GET["id"];
	$rol=new rol;
	$rol->dibujarFormularioModificarrol($id);
}

if($accion == 'modificarrol')
{
	$idRol=$_GET["idRol"];
	$nombre=$_GET["nombre"];
	
	require '../clases/rol.php';
	$rol=new rol;
	$rol->actualizarDatos($idRol,$nombre);
}

if($accion == 'eliminarrol')
{
	$id=$_GET['id'];
	require '../clases/rol.php';
	$rol=new rol;
	$rol->eliminarDatos($id);
}

if($accion == 'dibujarFormularioIngresotrabajosocial')
{
	require '../clases/trabajosocial.php';
	$trabajosocial=new trabajosocial;
	$trabajosocial->dibujarFormularioIngresotrabajosocial();
}

if($accion == 'ingresarNuevotrabajosocial')
{
	$idTrabajoSocial=$_GET["idTrabajoSocial"];
	$consulta=$_GET["consulta"];
	$relFamDecTom=$_GET["relFamDecTom"];
	$relFamExpAfe=$_GET["relFamExpAfe"];
	$relFamExpAfePadHij=$_GET["relFamExpAfePadHij"];
	$relFamMotCon=$_GET["relFamMotCon"];
	$relFamExpCon=$_GET["relFamExpCon"];
	$relFamComFal=$_GET["relFamComFal"];
	$relFamSan=$_GET["relFamSan"];
	$relFamActTieLib=$_GET["relFamActTieLib"];
	$genograma=$_GET["genograma"];
	$obsGen=$_GET["obsGen"];
	$eveVivFamUltAni1=$_GET["eveVivFamUltAni1"];
	$eveVivFamUltAni2=$_GET["eveVivFamUltAni2"];
	$eveVivFamUltAni3=$_GET["eveVivFamUltAni3"];
	$eveVivFamUltAni4=$_GET["eveVivFamUltAni4"];
	$eveVivFamUltAni5=$_GET["eveVivFamUltAni5"];
	$eveVivFamUltAni6=$_GET["eveVivFamUltAni6"];
	$eveVivFamUltAni7=$_GET["eveVivFamUltAni7"];
	$eveVivFamUltAni8=$_GET["eveVivFamUltAni8"];
	$eveVivFamUltAni9=$_GET["eveVivFamUltAni9"];
	$eveVivFamUltAni10=$_GET["eveVivFamUltAni10"];
	$eveVivFamUltAni11=$_GET["eveVivFamUltAni11"];
	$eveVivFamUltAni12=$_GET["eveVivFamUltAni12"];
	$eveVivFamUltAni13=$_GET["eveVivFamUltAni13"];
	$eveVivFamUltAni14=$_GET["eveVivFamUltAni14"];
	$eveVivFamUltAni15=$_GET["eveVivFamUltAni15"];
	$eveVivFamUltAni16=$_GET["eveVivFamUltAni16"];
	$eveVivFamUltAni17=$_GET["eveVivFamUltAni17"];
	$eveVivFamUltAni18=$_GET["eveVivFamUltAni18"];
	$eveVivFamUltAni19=$_GET["eveVivFamUltAni19"];
	$eveVivFamUltAni20=$_GET["eveVivFamUltAni20"];
	$eveVivFamUltAni21=$_GET["eveVivFamUltAni21"];
	$eveVivFamUltAni22=$_GET["eveVivFamUltAni22"];
	$eveVivFamUltAni23=$_GET["eveVivFamUltAni23"];
	$eveVivFamUltAni24=$_GET["eveVivFamUltAni24"];
	$dinRelFamA=$_GET["dinRelFamA"];
	$dinRelFamB=$_GET["dinRelFamB"];
	$crit1=$_GET["crit1"];
	$crit2=$_GET["crit2"];
	$crit3=$_GET["crit3"];
	$crit4=$_GET["crit4"];
	$crit5=$_GET["crit5"];
	$crit6=$_GET["crit6"];
	$crit7=$_GET["crit7"];
	$crit8=$_GET["crit8"];
	$crit9=$_GET["crit9"];
	$crit10=$_GET["crit10"];
	$crit11=$_GET["crit11"];
	$crit12=$_GET["crit12"];
	$crit13=$_GET["crit13"];
	$crit14=$_GET["crit14"];
	$crit15=$_GET["crit15"];
	$crit16=$_GET["crit16"];
	$crit17=$_GET["crit17"];
	$factGen=$_GET["factGen"];
	$factVul=$_GET["factVul"];
	$aspHabTipBar=$_GET["aspHabTipBar"];
	$aspHabSerTra=$_GET["aspHabSerTra"];
	$aspHabEst=$_GET["aspHabEst"];
	$aspHabTipViv=$_GET["aspHabTipViv"];
	$aspHabDes=$_GET["aspHabDes"];
	$aspHabTen=$_GET["aspHabTen"];
	$aspHabSer=$_GET["aspHabSer"];
	$aspHabLim=$_GET["aspHabLim"];
	$conEcoResObl=$_GET["conEcoResObl"];
	$conEcoIngMen=$_GET["conEcoIngMen"];
	$concepto=$_GET["concepto"];
	$plaTraObj=$_GET["plaTraObj"];
	$plaTraAct=$_GET["plaTraAct"];
	$plaTraMet=$_GET["plaTraMet"];
	$plaTraObj2=$_GET["plaTraObj2"];
	$plaTraAct2=$_GET["plaTraAct2"];
	$plaTraMet2=$_GET["plaTraMet2"];
	$profesional=$_GET["profesional"];
	$diag1=$_GET["diag1"];
	$diag2=$_GET["diag2"];
	$diag3=$_GET["diag3"];
	
	require '../clases/trabajosocial.php';
	$trabajosocial=new trabajosocial;
	$trabajosocial->insertarDatos($idTrabajoSocial,$consulta,$relFamDecTom,$relFamExpAfe,$relFamExpAfePadHij,$relFamMotCon,$relFamExpCon,$relFamComFal,$relFamSan,$relFamActTieLib,$genograma,$obsGen,$eveVivFamUltAni1,$eveVivFamUltAni2,$eveVivFamUltAni3,$eveVivFamUltAni4,$eveVivFamUltAni5,$eveVivFamUltAni6,$eveVivFamUltAni7,$eveVivFamUltAni8,$eveVivFamUltAni9,$eveVivFamUltAni10,$eveVivFamUltAni11,$eveVivFamUltAni12,$eveVivFamUltAni13,$eveVivFamUltAni14,$eveVivFamUltAni15,$eveVivFamUltAni16,$eveVivFamUltAni17,$eveVivFamUltAni18,$eveVivFamUltAni19,$eveVivFamUltAni20,$eveVivFamUltAni21,$eveVivFamUltAni22,$eveVivFamUltAni23,$eveVivFamUltAni24,$dinRelFamA,$dinRelFamB,$crit1,$crit2,$crit3,$crit4,$crit5,$crit6,$crit7,$crit8,$crit9,$crit10,$crit11,$crit12,$crit13,$crit14,$crit15,$crit16,$crit17,$factGen,$factVul,$aspHabTipBar,$aspHabSerTra,$aspHabEst,$aspHabTipViv,$aspHabDes,$aspHabTen,$aspHabSer,$aspHabLim,$conEcoResObl,$conEcoIngMen,$concepto,$plaTraObj,$plaTraAct,$plaTraMet,$plaTraObj2,$plaTraAct2,$plaTraMet2,$profesional,$diag1,$diag2,$diag3);
}

if($accion == 'consultarTodostrabajosocial')
{
	require '../clases/trabajosocial.php';
	$trabajosocial=new trabajosocial;
	$trabajosocial->consultarTodostrabajosocial();
}

if($accion == 'dibujarFormularioModificartrabajosocial')
{
	require '../clases/trabajosocial.php';
	$id = $_GET["id"];
	$trabajosocial=new trabajosocial;
	$trabajosocial->dibujarFormularioModificartrabajosocial($id);
}

if($accion == 'modificartrabajosocial')
{
	$idTrabajoSocial=$_GET["idTrabajoSocial"];
	$consulta=$_GET["consulta"];
	$relFamDecTom=$_GET["relFamDecTom"];
	$relFamExpAfe=$_GET["relFamExpAfe"];
	$relFamExpAfePadHij=$_GET["relFamExpAfePadHij"];
	$relFamMotCon=$_GET["relFamMotCon"];
	$relFamExpCon=$_GET["relFamExpCon"];
	$relFamComFal=$_GET["relFamComFal"];
	$relFamSan=$_GET["relFamSan"];
	$relFamActTieLib=$_GET["relFamActTieLib"];
	$genograma=$_GET["genograma"];
	$obsGen=$_GET["obsGen"];
	$eveVivFamUltAni1=$_GET["eveVivFamUltAni1"];
	$eveVivFamUltAni2=$_GET["eveVivFamUltAni2"];
	$eveVivFamUltAni3=$_GET["eveVivFamUltAni3"];
	$eveVivFamUltAni4=$_GET["eveVivFamUltAni4"];
	$eveVivFamUltAni5=$_GET["eveVivFamUltAni5"];
	$eveVivFamUltAni6=$_GET["eveVivFamUltAni6"];
	$eveVivFamUltAni7=$_GET["eveVivFamUltAni7"];
	$eveVivFamUltAni8=$_GET["eveVivFamUltAni8"];
	$eveVivFamUltAni9=$_GET["eveVivFamUltAni9"];
	$eveVivFamUltAni10=$_GET["eveVivFamUltAni10"];
	$eveVivFamUltAni11=$_GET["eveVivFamUltAni11"];
	$eveVivFamUltAni12=$_GET["eveVivFamUltAni12"];
	$eveVivFamUltAni13=$_GET["eveVivFamUltAni13"];
	$eveVivFamUltAni14=$_GET["eveVivFamUltAni14"];
	$eveVivFamUltAni15=$_GET["eveVivFamUltAni15"];
	$eveVivFamUltAni16=$_GET["eveVivFamUltAni16"];
	$eveVivFamUltAni17=$_GET["eveVivFamUltAni17"];
	$eveVivFamUltAni18=$_GET["eveVivFamUltAni18"];
	$eveVivFamUltAni19=$_GET["eveVivFamUltAni19"];
	$eveVivFamUltAni20=$_GET["eveVivFamUltAni20"];
	$eveVivFamUltAni21=$_GET["eveVivFamUltAni21"];
	$eveVivFamUltAni22=$_GET["eveVivFamUltAni22"];
	$eveVivFamUltAni23=$_GET["eveVivFamUltAni23"];
	$eveVivFamUltAni24=$_GET["eveVivFamUltAni24"];
	$dinRelFamA=$_GET["dinRelFamA"];
	$dinRelFamB=$_GET["dinRelFamB"];
	$crit1=$_GET["crit1"];
	$crit2=$_GET["crit2"];
	$crit3=$_GET["crit3"];
	$crit4=$_GET["crit4"];
	$crit5=$_GET["crit5"];
	$crit6=$_GET["crit6"];
	$crit7=$_GET["crit7"];
	$crit8=$_GET["crit8"];
	$crit9=$_GET["crit9"];
	$crit10=$_GET["crit10"];
	$crit11=$_GET["crit11"];
	$crit12=$_GET["crit12"];
	$crit13=$_GET["crit13"];
	$crit14=$_GET["crit14"];
	$crit15=$_GET["crit15"];
	$crit16=$_GET["crit16"];
	$crit17=$_GET["crit17"];
	$factGen=$_GET["factGen"];
	$factVul=$_GET["factVul"];
	$aspHabTipBar=$_GET["aspHabTipBar"];
	$aspHabSerTra=$_GET["aspHabSerTra"];
	$aspHabEst=$_GET["aspHabEst"];
	$aspHabTipViv=$_GET["aspHabTipViv"];
	$aspHabDes=$_GET["aspHabDes"];
	$aspHabTen=$_GET["aspHabTen"];
	$aspHabSer=$_GET["aspHabSer"];
	$aspHabLim=$_GET["aspHabLim"];
	$conEcoResObl=$_GET["conEcoResObl"];
	$conEcoIngMen=$_GET["conEcoIngMen"];
	$concepto=$_GET["concepto"];
	$plaTraObj=$_GET["plaTraObj"];
	$plaTraAct=$_GET["plaTraAct"];
	$plaTraMet=$_GET["plaTraMet"];
	$plaTraObj2=$_GET["plaTraObj2"];
	$plaTraAct2=$_GET["plaTraAct2"];
	$plaTraMet2=$_GET["plaTraMet2"];
	$profesional=$_GET["profesional"];
	$diag1=$_GET["diag1"];
	$diag2=$_GET["diag2"];
	$diag3=$_GET["diag3"];
	
	require '../clases/trabajosocial.php';
	$trabajosocial=new trabajosocial;
	$trabajosocial->actualizarDatos($idTrabajoSocial,$consulta,$relFamDecTom,$relFamExpAfe,$relFamExpAfePadHij,$relFamMotCon,$relFamExpCon,$relFamComFal,$relFamSan,$relFamActTieLib,$genograma,$obsGen,$eveVivFamUltAni1,$eveVivFamUltAni2,$eveVivFamUltAni3,$eveVivFamUltAni4,$eveVivFamUltAni5,$eveVivFamUltAni6,$eveVivFamUltAni7,$eveVivFamUltAni8,$eveVivFamUltAni9,$eveVivFamUltAni10,$eveVivFamUltAni11,$eveVivFamUltAni12,$eveVivFamUltAni13,$eveVivFamUltAni14,$eveVivFamUltAni15,$eveVivFamUltAni16,$eveVivFamUltAni17,$eveVivFamUltAni18,$eveVivFamUltAni19,$eveVivFamUltAni20,$eveVivFamUltAni21,$eveVivFamUltAni22,$eveVivFamUltAni23,$eveVivFamUltAni24,$dinRelFamA,$dinRelFamB,$crit1,$crit2,$crit3,$crit4,$crit5,$crit6,$crit7,$crit8,$crit9,$crit10,$crit11,$crit12,$crit13,$crit14,$crit15,$crit16,$crit17,$factGen,$factVul,$aspHabTipBar,$aspHabSerTra,$aspHabEst,$aspHabTipViv,$aspHabDes,$aspHabTen,$aspHabSer,$aspHabLim,$conEcoResObl,$conEcoIngMen,$concepto,$plaTraObj,$plaTraAct,$plaTraMet,$plaTraObj2,$plaTraAct2,$plaTraMet2,$profesional,$diag1,$diag2,$diag3);
}

if($accion == 'eliminartrabajosocial')
{
	$id=$_GET['id'];
	require '../clases/trabajosocial.php';
	$trabajosocial=new trabajosocial;
	$trabajosocial->eliminarDatos($id);
}

if($accion == 'dibujarFormularioIngresousuario')
{
	require '../clases/usuario.php';
	$usuario=new usuario;
	$usuario->dibujarFormularioIngresousuario();
}

if($accion == 'ingresarNuevousuario')
{
	$idUsuario=$_GET["idUsuario"];
	$nombre1=$_GET["nombre1"];
	$nombre2=$_GET["nombre2"];
	$apellido1=$_GET["apellido1"];
	$apellido2=$_GET["apellido2"];
	$rol=$_GET["rol"];
	$tarjeta=$_GET["tarjeta"];
	$contrasena=$_GET["contrasena"];
	
	require '../clases/usuario.php';
	$usuario=new usuario;
	$usuario->insertarDatos($idUsuario,$nombre1,$nombre2,$apellido1,$apellido2,$rol,$tarjeta,$contrasena);
}

if($accion == 'consultarTodosusuario')
{
	require '../clases/usuario.php';
	$usuario=new usuario;
	$usuario->consultarTodosusuario();
}

if($accion == 'dibujarFormularioModificarusuario')
{
	require '../clases/usuario.php';
	$id = $_GET["id"];
	$usuario=new usuario;
	$usuario->dibujarFormularioModificarusuario($id);
}

if($accion == 'modificarusuario')
{
	$idUsuario=$_GET["idUsuario"];
	$nombre1=$_GET["nombre1"];
	$nombre2=$_GET["nombre2"];
	$apellido1=$_GET["apellido1"];
	$apellido2=$_GET["apellido2"];
	$rol=$_GET["rol"];
	$tarjeta=$_GET["tarjeta"];
	$contrasena=$_GET["contrasena"];
	
	require '../clases/usuario.php';
	$usuario=new usuario;
	$usuario->actualizarDatos($idUsuario,$nombre1,$nombre2,$apellido1,$apellido2,$rol,$tarjeta,$contrasena);
}

if($accion == 'eliminarusuario')
{
	$id=$_GET['id'];
	require '../clases/usuario.php';
	$usuario=new usuario;
	$usuario->eliminarDatos($id);
}

if($accion == 'dibujarFormularioIngresovaloracionmedica')
{
	require '../clases/valoracionmedica.php';
	$valoracionmedica=new valoracionmedica;
	$valoracionmedica->dibujarFormularioIngresovaloracionmedica();
}

if($accion == 'ingresarNuevovaloracionmedica')
{
	$idValoracionMedica=$_GET["idValoracionMedica"];
	$consulta=$_GET["consulta"];
	$durEmb=$_GET["durEmb"];
	$patDurEmb=$_GET["patDurEmb"];
	$droMedIng=$_GET["droMedIng"];
	$nacimiento=$_GET["nacimiento"];
	$donde=$_GET["donde"];
	$llanto=$_GET["llanto"];
	$cianosis=$_GET["cianosis"];
	$apgar=$_GET["apgar"];
	$peso=$_GET["peso"];
	$talla=$_GET["talla"];
	$patPer=$_GET["patPer"];
	$patDurPriAnio=$_GET["patDurPriAnio"];
	$recTraAct=$_GET["recTraAct"];
	$hospitalizaciones=$_GET["hospitalizaciones"];
	$tiempo=$_GET["tiempo"];
	$diagHosp=$_GET["diagHosp"];
	$lacMat=$_GET["lacMat"];
	$tiempoLact=$_GET["tiempoLact"];
	$lecCom=$_GET["lecCom"];
	$iniDieCom=$_GET["iniDieCom"];
	$intAli=$_GET["intAli"];
	$antQui=$_GET["antQui"];
	$antTra=$_GET["antTra"];
	$intAle=$_GET["intAle"];
	$exaInt=$_GET["exaInt"];
	$inmunizaciones=$_GET["inmunizaciones"];
	$asma=$_GET["asma"];
	$malformaciones=$_GET["malformaciones"];
	$alergias=$_GET["alergias"];
	$diabetes=$_GET["diabetes"];
	$rsm=$_GET["rsm"];
	$epilepsia=$_GET["epilepsia"];
	$proLenguaje=$_GET["proLenguaje"];
	$mentales=$_GET["mentales"];
	$otras=$_GET["otras"];
	$fisPeso=$_GET["fisPeso"];
	$fistalla=$_GET["fistalla"];
	$fisTA=$_GET["fisTA"];
	$fisCef=$_GET["fisCef"];
	$fisFC=$_GET["fisFC"];
	$fisPulso=$_GET["fisPulso"];
	$fisForma=$_GET["fisForma"];
	$fisFaciales=$_GET["fisFaciales"];
	$fisOjos=$_GET["fisOjos"];
	$orlCavOral=$_GET["orlCavOral"];
	$orlFaringe=$_GET["orlFaringe"];
	$orlAuriculares=$_GET["orlAuriculares"];
	$orlOido=$_GET["orlOido"];
	$orlNariz=$_GET["orlNariz"];
	$orlCuello=$_GET["orlCuello"];
	$toraxConf=$_GET["toraxConf"];
	$toraxCora=$_GET["toraxCora"];
	$toraxBronPul=$_GET["toraxBronPul"];
	$abdomen=$_GET["abdomen"];
	$genExt=$_GET["genExt"];
	$colVer=$_GET["colVer"];
	$extremidades=$_GET["extremidades"];
	$piel=$_GET["piel"];
	$neuEsfMen=$_GET["neuEsfMen"];
	$neuEsfMot=$_GET["neuEsfMot"];
	$neuTonMus=$_GET["neuTonMus"];
	$neuEqu=$_GET["neuEqu"];
	$neuMar=$_GET["neuMar"];
	$neuSen=$_GET["neuSen"];
	$neuParCra=$_GET["neuParCra"];
	$refPup=$_GET["refPup"];
	$refTen=$_GET["refTen"];
	$refAno=$_GET["refAno"];
	$observaciones=$_GET["observaciones"];
	$diagnostico=$_GET["diagnostico"];
	$impDiag=$_GET["impDiag"];
	$profesional=$_GET["profesional"];
	
	require '../clases/valoracionmedica.php';
	$valoracionmedica=new valoracionmedica;
	$valoracionmedica->insertarDatos($idValoracionMedica,$consulta,$durEmb,$patDurEmb,$droMedIng,$nacimiento,$donde,$llanto,$cianosis,$apgar,$peso,$talla,$patPer,$patDurPriAnio,$recTraAct,$hospitalizaciones,$tiempo,$diagHosp,$lacMat,$tiempoLact,$lecCom,$iniDieCom,$intAli,$antQui,$antTra,$intAle,$exaInt,$inmunizaciones,$asma,$malformaciones,$alergias,$diabetes,$rsm,$epilepsia,$proLenguaje,$mentales,$otras,$fisPeso,$fistalla,$fisTA,$fisCef,$fisFC,$fisPulso,$fisForma,$fisFaciales,$fisOjos,$orlCavOral,$orlFaringe,$orlAuriculares,$orlOido,$orlNariz,$orlCuello,$toraxConf,$toraxCora,$toraxBronPul,$abdomen,$genExt,$colVer,$extremidades,$piel,$neuEsfMen,$neuEsfMot,$neuTonMus,$neuEqu,$neuMar,$neuSen,$neuParCra,$refPup,$refTen,$refAno,$observaciones,$diagnostico,$impDiag,$profesional);
}

if($accion == 'consultarTodosvaloracionmedica')
{
	require '../clases/valoracionmedica.php';
	$valoracionmedica=new valoracionmedica;
	$valoracionmedica->consultarTodosvaloracionmedica();
}

if($accion == 'dibujarFormularioModificarvaloracionmedica')
{
	require '../clases/valoracionmedica.php';
	$id = $_GET["id"];
	$valoracionmedica=new valoracionmedica;
	$valoracionmedica->dibujarFormularioModificarvaloracionmedica($id);
}

if($accion == 'modificarvaloracionmedica')
{
	$idValoracionMedica=$_GET["idValoracionMedica"];
	$consulta=$_GET["consulta"];
	$durEmb=$_GET["durEmb"];
	$patDurEmb=$_GET["patDurEmb"];
	$droMedIng=$_GET["droMedIng"];
	$nacimiento=$_GET["nacimiento"];
	$donde=$_GET["donde"];
	$llanto=$_GET["llanto"];
	$cianosis=$_GET["cianosis"];
	$apgar=$_GET["apgar"];
	$peso=$_GET["peso"];
	$talla=$_GET["talla"];
	$patPer=$_GET["patPer"];
	$patDurPriAnio=$_GET["patDurPriAnio"];
	$recTraAct=$_GET["recTraAct"];
	$hospitalizaciones=$_GET["hospitalizaciones"];
	$tiempo=$_GET["tiempo"];
	$diagHosp=$_GET["diagHosp"];
	$lacMat=$_GET["lacMat"];
	$tiempoLact=$_GET["tiempoLact"];
	$lecCom=$_GET["lecCom"];
	$iniDieCom=$_GET["iniDieCom"];
	$intAli=$_GET["intAli"];
	$antQui=$_GET["antQui"];
	$antTra=$_GET["antTra"];
	$intAle=$_GET["intAle"];
	$exaInt=$_GET["exaInt"];
	$inmunizaciones=$_GET["inmunizaciones"];
	$asma=$_GET["asma"];
	$malformaciones=$_GET["malformaciones"];
	$alergias=$_GET["alergias"];
	$diabetes=$_GET["diabetes"];
	$rsm=$_GET["rsm"];
	$epilepsia=$_GET["epilepsia"];
	$proLenguaje=$_GET["proLenguaje"];
	$mentales=$_GET["mentales"];
	$otras=$_GET["otras"];
	$fisPeso=$_GET["fisPeso"];
	$fistalla=$_GET["fistalla"];
	$fisTA=$_GET["fisTA"];
	$fisCef=$_GET["fisCef"];
	$fisFC=$_GET["fisFC"];
	$fisPulso=$_GET["fisPulso"];
	$fisForma=$_GET["fisForma"];
	$fisFaciales=$_GET["fisFaciales"];
	$fisOjos=$_GET["fisOjos"];
	$orlCavOral=$_GET["orlCavOral"];
	$orlFaringe=$_GET["orlFaringe"];
	$orlAuriculares=$_GET["orlAuriculares"];
	$orlOido=$_GET["orlOido"];
	$orlNariz=$_GET["orlNariz"];
	$orlCuello=$_GET["orlCuello"];
	$toraxConf=$_GET["toraxConf"];
	$toraxCora=$_GET["toraxCora"];
	$toraxBronPul=$_GET["toraxBronPul"];
	$abdomen=$_GET["abdomen"];
	$genExt=$_GET["genExt"];
	$colVer=$_GET["colVer"];
	$extremidades=$_GET["extremidades"];
	$piel=$_GET["piel"];
	$neuEsfMen=$_GET["neuEsfMen"];
	$neuEsfMot=$_GET["neuEsfMot"];
	$neuTonMus=$_GET["neuTonMus"];
	$neuEqu=$_GET["neuEqu"];
	$neuMar=$_GET["neuMar"];
	$neuSen=$_GET["neuSen"];
	$neuParCra=$_GET["neuParCra"];
	$refPup=$_GET["refPup"];
	$refTen=$_GET["refTen"];
	$refAno=$_GET["refAno"];
	$observaciones=$_GET["observaciones"];
	$diagnostico=$_GET["diagnostico"];
	$impDiag=$_GET["impDiag"];
	$profesional=$_GET["profesional"];
	
	require '../clases/valoracionmedica.php';
	$valoracionmedica=new valoracionmedica;
	$valoracionmedica->actualizarDatos($idValoracionMedica,$consulta,$durEmb,$patDurEmb,$droMedIng,$nacimiento,$donde,$llanto,$cianosis,$apgar,$peso,$talla,$patPer,$patDurPriAnio,$recTraAct,$hospitalizaciones,$tiempo,$diagHosp,$lacMat,$tiempoLact,$lecCom,$iniDieCom,$intAli,$antQui,$antTra,$intAle,$exaInt,$inmunizaciones,$asma,$malformaciones,$alergias,$diabetes,$rsm,$epilepsia,$proLenguaje,$mentales,$otras,$fisPeso,$fistalla,$fisTA,$fisCef,$fisFC,$fisPulso,$fisForma,$fisFaciales,$fisOjos,$orlCavOral,$orlFaringe,$orlAuriculares,$orlOido,$orlNariz,$orlCuello,$toraxConf,$toraxCora,$toraxBronPul,$abdomen,$genExt,$colVer,$extremidades,$piel,$neuEsfMen,$neuEsfMot,$neuTonMus,$neuEqu,$neuMar,$neuSen,$neuParCra,$refPup,$refTen,$refAno,$observaciones,$diagnostico,$impDiag,$profesional);
}

if($accion == 'eliminarvaloracionmedica')
{
	$id=$_GET['id'];
	require '../clases/valoracionmedica.php';
	$valoracionmedica=new valoracionmedica;
	$valoracionmedica->eliminarDatos($id);
}

if($accion == 'dibujarFormularioIngresovaloracionocupacional')
{
	require '../clases/valoracionocupacional.php';
	$valoracionocupacional=new valoracionocupacional;
	$valoracionocupacional->dibujarFormularioIngresovaloracionocupacional();
}

if($accion == 'ingresarNuevovaloracionocupacional')
{
	$idValoracionOcupacional=$_GET["idValoracionOcupacional"];
	$consulta=$_GET["consulta"];
	$antPsi=$_GET["antPsi"];
	$obsNeu=$_GET["obsNeu"];
	$tonMus=$_GET["tonMus"];
	$intRef=$_GET["intRef"];
	$segVis=$_GET["segVis"];
	$patFunMov=$_GET["patFunMov"];
	$patIntMov=$_GET["patIntMov"];
	$cooMotGru=$_GET["cooMotGru"];
	$cooMotFin=$_GET["cooMotFin"];
	$desOcuRutDia=$_GET["desOcuRutDia"];
	$desOcuAutCuid=$_GET["desOcuAutCuid"];
	$desOcuParMan=$_GET["desOcuParMan"];
	$desOcuDilMan=$_GET["desOcuDilMan"];
	$desOcuUsoTieLib=$_GET["desOcuUsoTieLib"];
	$desOcuApoNegFam=$_GET["desOcuApoNegFam"];
	$diaOcu=$_GET["diaOcu"];
	$diagnostico=$_GET["diagnostico"];
    $diagnostico2=$_GET["diagnostico2"];
    $diagnostico3=$_GET["diagnostico3"];
	$proOcupacional=$_GET["proOcupacional"];
	$observaciones=$_GET["observaciones"];
	$profesional=$_GET["profesional"];
	
	require '../clases/valoracionocupacional.php';
	$valoracionocupacional=new valoracionocupacional;
	$valoracionocupacional->insertarDatos($idValoracionOcupacional,$consulta,$antPsi,$obsNeu,$tonMus,$intRef,$segVis,$patFunMov,$patIntMov,$cooMotGru,$cooMotFin,$desOcuRutDia,$desOcuAutCuid,$desOcuParMan,$desOcuDilMan,$desOcuUsoTieLib,$desOcuApoNegFam,$diaOcu,$diagnostico,$diagnostico2,$diagnostico3,$proOcupacional,$observaciones,$profesional);
}

if($accion == 'consultarTodosvaloracionocupacional')
{
	require '../clases/valoracionocupacional.php';
	$valoracionocupacional=new valoracionocupacional;
	$valoracionocupacional->consultarTodosvaloracionocupacional();
}

if($accion == 'dibujarFormularioModificarvaloracionocupacional')
{
	require '../clases/valoracionocupacional.php';
	$id = $_GET["id"];
	$valoracionocupacional=new valoracionocupacional;
	$valoracionocupacional->dibujarFormularioModificarvaloracionocupacional($id);
}

if($accion == 'modificarvaloracionocupacional')
{
	$idValoracionOcupacional=$_GET["idValoracionOcupacional"];
	$consulta=$_GET["consulta"];
	$antPsi=$_GET["antPsi"];
	$obsNeu=$_GET["obsNeu"];
	$tonMus=$_GET["tonMus"];
	$intRef=$_GET["intRef"];
	$segVis=$_GET["segVis"];
	$patFunMov=$_GET["patFunMov"];
	$patIntMov=$_GET["patIntMov"];
	$cooMotGru=$_GET["cooMotGru"];
	$cooMotFin=$_GET["cooMotFin"];
	$desOcuRutDia=$_GET["desOcuRutDia"];
	$desOcuAutCuid=$_GET["desOcuAutCuid"];
	$desOcuParMan=$_GET["desOcuParMan"];
	$desOcuDilMan=$_GET["desOcuDilMan"];
	$desOcuUsoTieLib=$_GET["desOcuUsoTieLib"];
	$desOcuApoNegFam=$_GET["desOcuApoNegFam"];
	$diaOcu=$_GET["diaOcu"];
	$diagnostico=$_GET["diagnostico"];
	$proOcupacional=$_GET["proOcupacional"];
	$observaciones=$_GET["observaciones"];
	$profesional=$_GET["profesional"];
	
	require '../clases/valoracionocupacional.php';
	$valoracionocupacional=new valoracionocupacional;
	$valoracionocupacional->actualizarDatos($idValoracionOcupacional,$consulta,$antPsi,$obsNeu,$tonMus,$intRef,$segVis,$patFunMov,$patIntMov,$cooMotGru,$cooMotFin,$desOcuRutDia,$desOcuAutCuid,$desOcuParMan,$desOcuDilMan,$desOcuUsoTieLib,$desOcuApoNegFam,$diaOcu,$diagnostico,$proOcupacional,$observaciones,$profesional);
}

if($accion == 'eliminarvaloracionocupacional')
{
	$id=$_GET['id'];
	require '../clases/valoracionocupacional.php';
	$valoracionocupacional=new valoracionocupacional;
	$valoracionocupacional->eliminarDatos($id);
}

if($accion == 'cargarCiudades')
{
	$id=$_GET['id'];
	require '../clases/municipio.php';
	$municipio=new municipio;
	$municipio->cargarCiudades($id);
}

if($accion == 'consultarCitasDia')
{
	require '../clases/consulta.php';
	$consulta=new consulta;
	$consulta->consultarCitasDia();
}

if($accion == 'abrirFormato')
{
	$formato=$_GET['formato'];
    $consultas=$_GET['consulta'];
	require '../clases/consulta.php';
	$consulta=new consulta;
	$consulta->abrirFormato($formato,$consultas);
}

if($accion == 'mostrarFormularioGenHC')
{
    require '../clases/historiaclinica.php';
	$hc=new historiaclinica;
	$hc->formularioHC();
}

if($accion == 'ingresarGenHC')
{
    require '../clases/historiaclinica.php';
    
    $usuario=$_GET['usuario'];
    $fechaI=$_GET['fechaI'];
    $fechaF=$_GET['fechaF'];
    
	$hc=new historiaclinica;
	$hc->ingresarGenHC($usuario,$fechaI,$fechaF);
}

if($accion == 'dibujarFormularioIngresoevolucion')
{
	require '../clases/evolucion.php';
	$evolucion=new evolucion;
	$evolucion->dibujarFormularioIngresoevolucion();
}

if($accion == 'ingresarNuevoevolucion')
{
	$idEvolucion=$_GET["idEvolucion"];
	$consulta=$_GET["consulta"];
	$evolucion=$_GET["evolucion"];
	$diag1=$_GET["diag1"];
	$diag2=$_GET["diag2"];
	$diag3=$_GET["diag3"];
	$sesion=$_GET["sesion"];
	
	require '../clases/evolucion.php';
	$evolucion2=new evolucion;
	$evolucion2->insertarDatos($idEvolucion,$consulta,$evolucion,$diag1,$diag2,$diag3,$sesion);
}

if($accion == 'consultarTodosevolucion')
{
	require '../clases/evolucion.php';
	$evolucion=new evolucion;
	$evolucion->consultarTodosevolucion();
}

if($accion == 'dibujarFormularioModificarevolucion')
{
	require '../clases/evolucion.php';
	$id = $_GET["id"];
	$evolucion=new evolucion;
	$evolucion->dibujarFormularioModificarevolucion($id);
}

if($accion == 'modificarevolucion')
{
	$idEvolucion=$_GET["idEvolucion"];
	$consulta=$_GET["consulta"];
	$evolucion=$_GET["evolucion"];
	$diag1=$_GET["diag1"];
	$diag2=$_GET["diag2"];
	$diag3=$_GET["diag3"];
	$sesion=$_GET["sesion"];
	
	require '../clases/evolucion.php';
	$evolucion=new evolucion;
	$evolucion->actualizarDatos($idEvolucion,$consulta,$evolucion,$diag1,$diag2,$diag3,$sesion);
}

if($accion == 'eliminarevolucion')
{
	$id=$_GET['id'];
	require '../clases/evolucion.php';
	$evolucion=new evolucion;
	$evolucion->eliminarDatos($id);
}

if($accion == 'verDisponibilidad')
{
	$profesional=$_GET["profesional"];
	$fecha=$_GET["fecha"];
	$hora=$_GET["hora"];
	
	require '../clases/consulta.php';
	$consulta=new consulta;
	$consulta->verDisponibilidad($profesional,$fecha,$hora);
}

if($accion == 'formularioRIPS')
{
	require '../clases/RIPS.php';
	$rips=new RIPS;
	$rips->formularioRIPS();
}

if($accion == 'generarRIPS')
{
	$entidad=$_GET["entidad"];
	$fechaI=$_GET["fechaI"];
	$fechaF=$_GET["fechaF"];
	
	require '../clases/RIPS.php';
	$rips=new RIPS;
	$rips->generarRIPS($entidad,$fechaI,$fechaF);
}

if($accion == 'existePaciente')
{
	$paciente=$_GET["paciente"];
	
	require '../clases/usuario.php';
	$usuario=new usuario;
	$usuario->existePaciente($paciente);
}

if($accion == 'mostrarFormularioReporteMensual')
{	
	require '../clases/consulta.php';
	$consulta=new consulta;
	$consulta->mostrarFormularioReporteMensual();
}

if($accion == 'generarReporteMensual')
{	
    require '../clases/consulta.php';
    $fechaI=$_GET["fechaI"];
    $fechaF=$_GET["fechaF"];
    
	$consulta=new consulta;
	$consulta->generarReporteMensual($fechaI,$fechaF);
}

if($accion == 'mostrarFormularioGrafica')
{	
	require '../clases/consulta.php';
	$consulta=new consulta;
	$consulta->mostrarFormularioGrafica();
}

if($accion == 'cargarDiagnosticos')
{	
    require '../clases/cie10.php';
    $input=$_GET["input"];
    $nInput=$_GET["nInput"];
    
	$cie10=new cie10;
	$cie10->cargarDiagnosticos($input,$nInput);
}
?>