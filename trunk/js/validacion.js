function ingresar()
{
    var identificacion  = $("#identificacion").val();
    var contrasena      = $("#contrasena").val();
    
    if(identificacion!="" && contrasena!="")
    {
        $.ajax({
    		type:"POST",
    		url:"librerias/funciones.php?accion=ingresar"
            +"&identificacion="+identificacion
            +"&contrasena="+contrasena,
    		dataType:"text",
    		data:$(this).serialize(),
    		success:function(response){
    			//alert(response);
                if(response=="true")
                {
                    //alert("Ingreso");
                    window.location="sistema.php";
                }
                else
                {
                    alert("No se encontraron resultados");
                }
    		}
    	})
    }
    else
    {
        alert("Existen campos vacios");
    }
}

function salir()
{
    if(confirm("¿Desea Salir?")) 
    {
    	$.ajax({
    		type:"POST",
    		url:"librerias/funciones.php?accion=salir",
    		dataType:"text",
    		data:$(this).serialize(),
    		success:function(response){
    			window.location="index.php";
    		}
    	})
    }
}

function dibujarFormularioCups()
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioCups",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}


function dibujarFormularioIngresoalimentos()
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioIngresoalimentos",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function ingresarNuevoalimentos()
{
	var idAlimentos=$("#idAlimentos").val();
	var consulta=$("#consulta").val();
	var alimento=$("#alimento").val();
	var preferencia=$("#preferencia").val();
	var rechazo=$("#rechazo").val();
	var intolerados=$("#intolerados").val();

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=ingresarNuevoalimentos"
		+"&idAlimentos="+idAlimentos
		+"&consulta="+consulta
		+"&alimento="+alimento
		+"&preferencia="+preferencia
		+"&rechazo="+rechazo
		+"&intolerados="+intolerados,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function consultarTodosalimentos()
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=consultarTodosalimentos",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function dibujarFormularioModificaralimentos(id)
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioModificaralimentos&id="+id,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function modificaralimentos()
{
	var idAlimentos=$("#idAlimentos").val();
	var consulta=$("#consulta").val();
	var alimento=$("#alimento").val();
	var preferencia=$("#preferencia").val();
	var rechazo=$("#rechazo").val();
	var intolerados=$("#intolerados").val();

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=modificaralimentos"
		+"&idAlimentos="+idAlimentos
		+"&consulta="+consulta
		+"&alimento="+alimento
		+"&preferencia="+preferencia
		+"&rechazo="+rechazo
		+"&intolerados="+intolerados,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function eliminaralimentos(id)
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=eliminaralimentos&id="+id,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function dibujarFormularioIngresoapoyo()
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioIngresoapoyo",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function ingresarNuevoapoyo()
{
	var idApoyo=$("#idApoyo").val();
	var consulta=$("#consulta").val();
	var nombres=$("#nombres").val();
	var relacion=$("#relacion").val();
	var telefono=$("#telefono").val();
	var direccion=$("#direccion").val();

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=ingresarNuevoapoyo"
		+"&idApoyo="+idApoyo
		+"&consulta="+consulta
		+"&nombres="+nombres
		+"&relacion="+relacion
		+"&telefono="+telefono
		+"&direccion="+direccion,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			consultarTodosapoyo(consulta);
            //$("#main").html(response);
		}
	})
}

function consultarTodosapoyo(consulta)
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=consultarTodosapoyo&consulta="+consulta,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#divapoyo").html(response);
		}
	})
}

function dibujarFormularioModificarapoyo(id)
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioModificarapoyo&id="+id,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function modificarapoyo()
{
	var idApoyo=$("#idApoyo").val();
	var consulta=$("#consulta").val();
	var nombres=$("#nombres").val();
	var relacion=$("#relacion").val();
	var telefono=$("#telefono").val();
	var direccion=$("#direccion").val();

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=modificarapoyo"
		+"&idApoyo="+idApoyo
		+"&consulta="+consulta
		+"&nombres="+nombres
		+"&relacion="+relacion
		+"&telefono="+telefono
		+"&direccion="+direccion,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function eliminarapoyo(consulta,id)
{
	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=eliminarapoyo&id="+id,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
            consultarTodosapoyo(consulta);
			//$("#main").html(response);
		}
	})
}

function dibujarFormularioIngresocapacitacion()
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioIngresocapacitacion",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function ingresarNuevocapacitacion()
{
	var idCapacitacion=$("#idCapacitacion").val();
	var consulta=$("#consulta").val();
	var oficio=$("#oficio").val();
	var institucion=$("#institucion").val();
	var tiempo=$("#tiempo").val();

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=ingresarNuevocapacitacion"
		+"&idCapacitacion="+idCapacitacion
		+"&consulta="+consulta
		+"&oficio="+oficio
		+"&institucion="+institucion
		+"&tiempo="+tiempo,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			//alert(response);
            consultarTodoscapacitacion(consulta);
		}
	})
}

function consultarTodoscapacitacion(id)
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=consultarTodoscapacitacion&id="+id,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#divcapacitacion").html(response);
		}
	})
}

function dibujarFormularioModificarcapacitacion(id)
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioModificarcapacitacion&id="+id,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function modificarcapacitacion()
{
	var idCapacitacion=$("#idCapacitacion").val();
	var consulta=$("#consulta").val();
	var oficio=$("#oficio").val();
	var institucion=$("#institucion").val();
	var tiempo=$("#tiempo").val();

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=modificarcapacitacion"
		+"&idCapacitacion="+idCapacitacion
		+"&consulta="+consulta
		+"&oficio="+oficio
		+"&institucion="+institucion
		+"&tiempo="+tiempo,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function eliminarcapacitacion(id)
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=eliminarcapacitacion&id="+id,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
            consultarTodoscapacitacion(response);
		}
	})
}


function dibujarFormularioIngresoconsulta()
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioIngresoconsulta",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function ingresarNuevoconsulta()
{
	var idConsulta=$("#idConsulta").val();
	var paciente=$("#paciente").val();
	var regimen=$("#regimen").val();
	var eps=$("#eps").val();
	var tipoConsulta=$("#tipoConsulta").val();
	var profesional=$("#profesional").val();
	var fecha=$("#fecha").val();
	var hora=$("#hora").val();
	var confirmada=$("#confirmada").val();
	var cancelada=$("#cancelada").val();
	var motivo=$("#motivo").val();
	var factura=$("#factura").val();
	var autorizacion=$("#autorizacion").val();
	var valor=$("#valor").val();
	var acompanante=$("#acompanante").val();
	var parentesco=$("#parentesco").val();
	var telefono=$("#telefono").val();

    
    if(paciente!="" && regimen!="" && eps!="" && tipoConsulta!="" && profesional!="" && fecha!="" && hora!="")
    {
        $.ajax({
    		type:"POST",
    		url:"librerias/funciones.php?accion=ingresarNuevoconsulta"
    		+"&idConsulta="+idConsulta
    		+"&paciente="+paciente
    		+"&regimen="+regimen
    		+"&eps="+eps
    		+"&tipoConsulta="+tipoConsulta
    		+"&profesional="+profesional
    		+"&fecha="+fecha
    		+"&hora="+hora
    		+"&confirmada="+confirmada
    		+"&cancelada="+cancelada
    		+"&motivo="+motivo
    		+"&factura="+factura
    		+"&autorizacion="+autorizacion
    		+"&valor="+valor
    		+"&acompanante="+acompanante
    		+"&parentesco="+parentesco
    		+"&telefono="+telefono,
    		dataType:"text",
    		data:$(this).serialize(),
    		success:function(response){
    			alert(response);
    		}
    	})
    }
    else
    {
        alert("Algunos campos obligatorios están vacios");
    }
}

function consultarTodosconsulta()
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=consultarTodosconsulta",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function dibujarFormularioModificarconsulta(id)
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioModificarconsulta&id="+id,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function modificarconsulta()
{
	var idConsulta=$("#idConsulta").val();
	var paciente=$("#paciente").val();
	var regimen=$("#regimen").val();
	var eps=$("#eps").val();
	var tipoConsulta=$("#tipoConsulta").val();
	var profesional=$("#profesional").val();
	var fecha=$("#fecha").val();
	var hora=$("#hora").val();
	var confirmada=$("#confirmada").val();
	var cancelada=$("#cancelada").val();
	var motivo=$("#motivo").val();
	var factura=$("#factura").val();
	var autorizacion=$("#autorizacion").val();
	var valor=$("#valor").val();
	var acompanante=$("#acompanante").val();
	var parentesco=$("#parentesco").val();
	var telefono=$("#telefono").val();

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=modificarconsulta"
		+"&idConsulta="+idConsulta
		+"&paciente="+paciente
		+"&regimen="+regimen
		+"&eps="+eps
		+"&tipoConsulta="+tipoConsulta
		+"&profesional="+profesional
		+"&fecha="+fecha
		+"&hora="+hora
		+"&confirmada="+confirmada
		+"&cancelada="+cancelada
		+"&motivo="+motivo
		+"&factura="+factura
		+"&autorizacion="+autorizacion
		+"&valor="+valor
		+"&acompanante="+acompanante
		+"&parentesco="+parentesco
		+"&telefono="+telefono,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			alert(response);
            
		}
	})
}

function eliminarconsulta(id)
{
    if (confirm("¿Desea eliminar la Cita Médica?"))
    {
        $.ajax({
    		type:"POST",
    		url:"librerias/funciones.php?accion=eliminarconsulta&id="+id,
    		dataType:"text",
    		data:$(this).serialize(),
    		success:function(response){
    			$("#main").html(response);
    		}
    	})   
    }
}

function dibujarFormularioIngresodepartamento()
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioIngresodepartamento",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function ingresarNuevodepartamento()
{
	var idDepartamento=$("#idDepartamento").val();
	var codigo=$("#codigo").val();
	var nombre=$("#nombre").val();

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=ingresarNuevodepartamento"
		+"&idDepartamento="+idDepartamento
		+"&codigo="+codigo
		+"&nombre="+nombre,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function consultarTodosdepartamento()
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=consultarTodosdepartamento",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function dibujarFormularioModificardepartamento(id)
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioModificardepartamento&id="+id,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function modificardepartamento()
{
	var idDepartamento=$("#idDepartamento").val();
	var codigo=$("#codigo").val();
	var nombre=$("#nombre").val();

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=modificardepartamento"
		+"&idDepartamento="+idDepartamento
		+"&codigo="+codigo
		+"&nombre="+nombre,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function eliminardepartamento(id)
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=eliminardepartamento&id="+id,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function dibujarFormularioIngresoeps()
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioIngresoeps",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function ingresarNuevoeps()
{
	var idEps=$("#idEps").val();
	var codigo=$("#codigo").val();
	var nombre=$("#nombre").val();

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=ingresarNuevoeps"
		+"&idEps="+idEps
		+"&codigo="+codigo
		+"&nombre="+nombre,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			alert(response);
		}
	})
}

function consultarTodoseps()
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=consultarTodoseps",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function dibujarFormularioModificareps(id)
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioModificareps&id="+id,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function modificareps()
{
	var idEps=$("#idEps").val();
	var codigo=$("#codigo").val();
	var nombre=$("#nombre").val();

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=modificareps"
		+"&idEps="+idEps
		+"&codigo="+codigo
		+"&nombre="+nombre,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			alert(response);
		}
	})
}

function eliminareps(id)
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=eliminareps&id="+id,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function dibujarFormularioIngresoevaluacion()
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioIngresoevaluacion",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function ingresarNuevoevaluacion()
{
	var idEvaluacion=$("#idEvaluacion").val();
	var consulta=$("#consulta").val();
	var sisFonCom=$("#sisFonCom").val();
	var falFon=$("#falFon").val();
	var falCom=$("#falCom").val();
	var modo=$("#modo").val();
	var tipo=$("#tipo").val();
	var cooFon=$("#cooFon").val();
	var conCatSem=$("#conCatSem").val();
	var cuales=$("#cuales").val();
	var reaSec=$("#reaSec").val();
	var reaNom=$("#reaNom").val();
	var reaAgr=$("#reaAgr").val();
	var ideAbs=$("#ideAbs").val();
	var dif=$("#dif").val();
	var sem=$("#sem").val();
	var ana=$("#ana").val();
	var reaDesObj=$("#reaDesObj").val();
	var sin=$("#sin").val();
	var ant=$("#ant").val();
	var comOrd=$("#comOrd").val();
	var manCatGra=$("#manCatGra").val();
	var cuales2=$("#cuales2").val();
	var forOra=$("#forOra").val();
	var orgPalDes=$("#orgPalDes").val();
	var cohGra=$("#cohGra").val();
	var intCom=$("#intCom").val();
	var reaPre=$("#reaPre").val();
	var reaRes=$("#reaRes").val();
	var reaExc=$("#reaExc").val();
	var reaNeg=$("#reaNeg").val();
	var reaAfi=$("#reaAfi").val();
	var reaInf=$("#reaInf").val();
	var funIns=$("#funIns").val();
	var funReg=$("#funReg").val();
	var funPer=$("#funPer").val();
	var funMat=$("#funMat").val();
	var funIma=$("#funIma").val();
	var funInf=$("#funInf").val();
	var funHeu=$("#funHeu").val();
	var funTex=$("#funTex").val();
	var funCom=$("#funCom").val();
	var manConVis=$("#manConVis").val();
	var resTurCom=$("#resTurCom").val();
	var iniManFinTop=$("#iniManFinTop").val();
	var cuales3=$("#cuales3").val();
	var recFon=$("#recFon").val();
	var recSil=$("#recSil").val();
	var reaLecPal=$("#reaLecPal").val();
	var reaLecSil=$("#reaLecSil").val();
	var comportamiento=$("#comportamiento").val();
	var utiApo=$("#utiApo").val();
	var velocidadLectura=$("#velocidadLectura").val();
	var comTex=$("#comTex").val();
	var reaEscAut=$("#reaEscAut").val();
	var como1=$("#como1").val();
	var reaExcCop=$("#reaExcCop").val();
	var como2=$("#como2").val();
	var reaEscDic=$("#reaEscDic").val();
	var como3=$("#como3").val();
	var reaEscEsp=$("#reaEscEsp").val();
	var como4=$("#como4").val();
	var coherencia=$("#coherencia").val();
	var cohecion=$("#cohecion").val();
	var tieDisOmiGra=$("#tieDisOmiGra").val();
	var tieDisOmiSil=$("#tieDisOmiSil").val();
	var tieDisOmiPal=$("#tieDisOmiPal").val();
	var tieDisOmiFra=$("#tieDisOmiFra").val();
	var memCor=$("#memCor").val();
	var memMed=$("#memMed").val();
	var memLar=$("#memLar").val();
	var preAteAct=$("#preAteAct").val();
	var motAntAct=$("#motAntAct").val();
	var tolAct=$("#tolAct").val();
	var nivAct=$("#nivAct").val();
	var diagnostico=$("#diagnostico").val();
	var impDiag=$("#impDiag").val();

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=ingresarNuevoevaluacion"
		+"&idEvaluacion="+idEvaluacion
		+"&consulta="+consulta
		+"&sisFonCom="+sisFonCom
		+"&falFon="+falFon
		+"&falCom="+falCom
		+"&modo="+modo
		+"&tipo="+tipo
		+"&cooFon="+cooFon
		+"&conCatSem="+conCatSem
		+"&cuales="+cuales
		+"&reaSec="+reaSec
		+"&reaNom="+reaNom
		+"&reaAgr="+reaAgr
		+"&ideAbs="+ideAbs
		+"&dif="+dif
		+"&sem="+sem
		+"&ana="+ana
		+"&reaDesObj="+reaDesObj
		+"&sin="+sin
		+"&ant="+ant
		+"&comOrd="+comOrd
		+"&manCatGra="+manCatGra
		+"&cuales2="+cuales2
		+"&forOra="+forOra
		+"&orgPalDes="+orgPalDes
		+"&cohGra="+cohGra
		+"&intCom="+intCom
		+"&reaPre="+reaPre
		+"&reaRes="+reaRes
		+"&reaExc="+reaExc
		+"&reaNeg="+reaNeg
		+"&reaAfi="+reaAfi
		+"&reaInf="+reaInf
		+"&funIns="+funIns
		+"&funReg="+funReg
		+"&funPer="+funPer
		+"&funMat="+funMat
		+"&funIma="+funIma
		+"&funInf="+funInf
		+"&funHeu="+funHeu
		+"&funTex="+funTex
		+"&funCom="+funCom
		+"&manConVis="+manConVis
		+"&resTurCom="+resTurCom
		+"&iniManFinTop="+iniManFinTop
		+"&cuales3="+cuales3
		+"&recFon="+recFon
		+"&recSil="+recSil
		+"&reaLecPal="+reaLecPal
		+"&reaLecSil="+reaLecSil
		+"&comportamiento="+comportamiento
		+"&utiApo="+utiApo
		+"&velocidadLectura="+velocidadLectura
		+"&comTex="+comTex
		+"&reaEscAut="+reaEscAut
		+"&como1="+como1
		+"&reaExcCop="+reaExcCop
		+"&como2="+como2
		+"&reaEscDic="+reaEscDic
		+"&como3="+como3
		+"&reaEscEsp="+reaEscEsp
		+"&como4="+como4
		+"&coherencia="+coherencia
		+"&cohecion="+cohecion
		+"&tieDisOmiGra="+tieDisOmiGra
		+"&tieDisOmiSil="+tieDisOmiSil
		+"&tieDisOmiPal="+tieDisOmiPal
		+"&tieDisOmiFra="+tieDisOmiFra
		+"&memCor="+memCor
		+"&memMed="+memMed
		+"&memLar="+memLar
		+"&preAteAct="+preAteAct
		+"&motAntAct="+motAntAct
		+"&tolAct="+tolAct
		+"&nivAct="+nivAct
		+"&diagnostico="+diagnostico
		+"&impDiag="+impDiag,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function consultarTodosevaluacion()
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=consultarTodosevaluacion",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function dibujarFormularioModificarevaluacion(id)
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioModificarevaluacion&id="+id,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function modificarevaluacion()
{
	var idEvaluacion=$("#idEvaluacion").val();
	var consulta=$("#consulta").val();
	var sisFonCom=$("#sisFonCom").val();
	var falFon=$("#falFon").val();
	var falCom=$("#falCom").val();
	var modo=$("#modo").val();
	var tipo=$("#tipo").val();
	var cooFon=$("#cooFon").val();
	var conCatSem=$("#conCatSem").val();
	var cuales=$("#cuales").val();
	var reaSec=$("#reaSec").val();
	var reaNom=$("#reaNom").val();
	var reaAgr=$("#reaAgr").val();
	var ideAbs=$("#ideAbs").val();
	var dif=$("#dif").val();
	var sem=$("#sem").val();
	var ana=$("#ana").val();
	var reaDesObj=$("#reaDesObj").val();
	var sin=$("#sin").val();
	var ant=$("#ant").val();
	var comOrd=$("#comOrd").val();
	var manCatGra=$("#manCatGra").val();
	var cuales2=$("#cuales2").val();
	var forOra=$("#forOra").val();
	var orgPalDes=$("#orgPalDes").val();
	var cohGra=$("#cohGra").val();
	var intCom=$("#intCom").val();
	var reaPre=$("#reaPre").val();
	var reaRes=$("#reaRes").val();
	var reaExc=$("#reaExc").val();
	var reaNeg=$("#reaNeg").val();
	var reaAfi=$("#reaAfi").val();
	var reaInf=$("#reaInf").val();
	var funIns=$("#funIns").val();
	var funReg=$("#funReg").val();
	var funPer=$("#funPer").val();
	var funMat=$("#funMat").val();
	var funIma=$("#funIma").val();
	var funInf=$("#funInf").val();
	var funHeu=$("#funHeu").val();
	var funTex=$("#funTex").val();
	var funCom=$("#funCom").val();
	var manConVis=$("#manConVis").val();
	var resTurCom=$("#resTurCom").val();
	var iniManFinTop=$("#iniManFinTop").val();
	var cuales3=$("#cuales3").val();
	var recFon=$("#recFon").val();
	var recSil=$("#recSil").val();
	var reaLecPal=$("#reaLecPal").val();
	var reaLecSil=$("#reaLecSil").val();
	var comportamiento=$("#comportamiento").val();
	var utiApo=$("#utiApo").val();
	var velocidadLectura=$("#velocidadLectura").val();
	var comTex=$("#comTex").val();
	var reaEscAut=$("#reaEscAut").val();
	var como1=$("#como1").val();
	var reaExcCop=$("#reaExcCop").val();
	var como2=$("#como2").val();
	var reaEscDic=$("#reaEscDic").val();
	var como3=$("#como3").val();
	var reaEscEsp=$("#reaEscEsp").val();
	var como4=$("#como4").val();
	var coherencia=$("#coherencia").val();
	var cohecion=$("#cohecion").val();
	var tieDisOmiGra=$("#tieDisOmiGra").val();
	var tieDisOmiSil=$("#tieDisOmiSil").val();
	var tieDisOmiPal=$("#tieDisOmiPal").val();
	var tieDisOmiFra=$("#tieDisOmiFra").val();
	var memCor=$("#memCor").val();
	var memMed=$("#memMed").val();
	var memLar=$("#memLar").val();
	var preAteAct=$("#preAteAct").val();
	var motAntAct=$("#motAntAct").val();
	var tolAct=$("#tolAct").val();
	var nivAct=$("#nivAct").val();
	var diagnostico=$("#diagnostico").val();
	var impDiag=$("#impDiag").val();

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=modificarevaluacion"
		+"&idEvaluacion="+idEvaluacion
		+"&consulta="+consulta
		+"&sisFonCom="+sisFonCom
		+"&falFon="+falFon
		+"&falCom="+falCom
		+"&modo="+modo
		+"&tipo="+tipo
		+"&cooFon="+cooFon
		+"&conCatSem="+conCatSem
		+"&cuales="+cuales
		+"&reaSec="+reaSec
		+"&reaNom="+reaNom
		+"&reaAgr="+reaAgr
		+"&ideAbs="+ideAbs
		+"&dif="+dif
		+"&sem="+sem
		+"&ana="+ana
		+"&reaDesObj="+reaDesObj
		+"&sin="+sin
		+"&ant="+ant
		+"&comOrd="+comOrd
		+"&manCatGra="+manCatGra
		+"&cuales2="+cuales2
		+"&forOra="+forOra
		+"&orgPalDes="+orgPalDes
		+"&cohGra="+cohGra
		+"&intCom="+intCom
		+"&reaPre="+reaPre
		+"&reaRes="+reaRes
		+"&reaExc="+reaExc
		+"&reaNeg="+reaNeg
		+"&reaAfi="+reaAfi
		+"&reaInf="+reaInf
		+"&funIns="+funIns
		+"&funReg="+funReg
		+"&funPer="+funPer
		+"&funMat="+funMat
		+"&funIma="+funIma
		+"&funInf="+funInf
		+"&funHeu="+funHeu
		+"&funTex="+funTex
		+"&funCom="+funCom
		+"&manConVis="+manConVis
		+"&resTurCom="+resTurCom
		+"&iniManFinTop="+iniManFinTop
		+"&cuales3="+cuales3
		+"&recFon="+recFon
		+"&recSil="+recSil
		+"&reaLecPal="+reaLecPal
		+"&reaLecSil="+reaLecSil
		+"&comportamiento="+comportamiento
		+"&utiApo="+utiApo
		+"&velocidadLectura="+velocidadLectura
		+"&comTex="+comTex
		+"&reaEscAut="+reaEscAut
		+"&como1="+como1
		+"&reaExcCop="+reaExcCop
		+"&como2="+como2
		+"&reaEscDic="+reaEscDic
		+"&como3="+como3
		+"&reaEscEsp="+reaEscEsp
		+"&como4="+como4
		+"&coherencia="+coherencia
		+"&cohecion="+cohecion
		+"&tieDisOmiGra="+tieDisOmiGra
		+"&tieDisOmiSil="+tieDisOmiSil
		+"&tieDisOmiPal="+tieDisOmiPal
		+"&tieDisOmiFra="+tieDisOmiFra
		+"&memCor="+memCor
		+"&memMed="+memMed
		+"&memLar="+memLar
		+"&preAteAct="+preAteAct
		+"&motAntAct="+motAntAct
		+"&tolAct="+tolAct
		+"&nivAct="+nivAct
		+"&diagnostico="+diagnostico
		+"&impDiag="+impDiag,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function eliminarevaluacion(id)
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=eliminarevaluacion&id="+id,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function dibujarFormularioIngresoexploracionorganos()
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioIngresoexploracionorganos",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function ingresarNuevoexploracionorganos()
{
	var idExploracionOrganos=$("#idExploracionOrganos").val();
	var consulta=$("#consulta").val();
	var organo=$("#organo").val();
	var anatomia=$("#anatomia").val();
	var movilidad=$("#movilidad").val();
	var tono=$("#tono").val();
	var sensibilidad=$("#sensibilidad").val();
	var funcion=$("#funcion").val();

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=ingresarNuevoexploracionorganos"
		+"&idExploracionOrganos="+idExploracionOrganos
		+"&consulta="+consulta
		+"&organo="+organo
		+"&anatomia="+anatomia
		+"&movilidad="+movilidad
		+"&tono="+tono
		+"&sensibilidad="+sensibilidad
		+"&funcion="+funcion,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function consultarTodosexploracionorganos()
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=consultarTodosexploracionorganos",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function dibujarFormularioModificarexploracionorganos(id)
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioModificarexploracionorganos&id="+id,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function modificarexploracionorganos()
{
	var idExploracionOrganos=$("#idExploracionOrganos").val();
	var consulta=$("#consulta").val();
	var organo=$("#organo").val();
	var anatomia=$("#anatomia").val();
	var movilidad=$("#movilidad").val();
	var tono=$("#tono").val();
	var sensibilidad=$("#sensibilidad").val();
	var funcion=$("#funcion").val();

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=modificarexploracionorganos"
		+"&idExploracionOrganos="+idExploracionOrganos
		+"&consulta="+consulta
		+"&organo="+organo
		+"&anatomia="+anatomia
		+"&movilidad="+movilidad
		+"&tono="+tono
		+"&sensibilidad="+sensibilidad
		+"&funcion="+funcion,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function eliminarexploracionorganos(id)
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=eliminarexploracionorganos&id="+id,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function dibujarFormularioIngresofamilia()
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioIngresofamilia",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function ingresarNuevofamilia()
{
	var idFamilia=$("#idFamilia").val();
	var consulta=$("#consulta").val();
	var nombres=$("#nombres2").val();
	var parentesco=$("#parentesco").val();
	var edad=$("#edad").val();
	var esc=$("#esc").val();
	var ocupacion=$("#ocupacion").val();

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=ingresarNuevofamilia"
		+"&idFamilia="+idFamilia
		+"&consulta="+consulta
		+"&nombres="+nombres
		+"&parentesco="+parentesco
		+"&edad="+edad
		+"&esc="+esc
		+"&ocupacion="+ocupacion,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			//$("#main").html(response);
            consultarTodosfamilia(consulta);
		}
	})
}

function consultarTodosfamilia(consulta)
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=consultarTodosfamilia&consulta="+consulta,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#divfamilia").html(response);
		}
	})
}

function dibujarFormularioModificarfamilia(id)
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioModificarfamilia&id="+id,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function modificarfamilia()
{
	var idFamilia=$("#idFamilia").val();
	var consulta=$("#consulta").val();
	var nombres=$("#nombres").val();
	var parentesco=$("#parentesco").val();
	var edad=$("#edad").val();
	var esc=$("#esc").val();
	var ocupacion=$("#ocupacion").val();

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=modificarfamilia"
		+"&idFamilia="+idFamilia
		+"&consulta="+consulta
		+"&nombres="+nombres
		+"&parentesco="+parentesco
		+"&edad="+edad
		+"&esc="+esc
		+"&ocupacion="+ocupacion,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function eliminarfamilia(consulta,id)
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=eliminarfamilia&id="+id,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			consultarTodosfamilia(consulta);
		}
	})
}

function dibujarFormularioIngresofisioterapia()
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioIngresofisioterapia",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function ingresarNuevofisioterapia()
{
	var idFisioterapia=$("#idFisioterapia").val();
	var consulta=$("#consulta").val();
	var evaluacion=$("#evaluacion").val();
	var concepto=$("#concepto").val();
	var diagnostico=$("#diagnostico").val();
	var profesional=$("#profesional").val();

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=ingresarNuevofisioterapia"
		+"&idFisioterapia="+idFisioterapia
		+"&consulta="+consulta
		+"&evaluacion="+evaluacion
		+"&concepto="+concepto
		+"&diagnostico="+diagnostico
		+"&profesional="+profesional,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function consultarTodosfisioterapia()
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=consultarTodosfisioterapia",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function dibujarFormularioModificarfisioterapia(id)
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioModificarfisioterapia&id="+id,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function modificarfisioterapia()
{
	var idFisioterapia=$("#idFisioterapia").val();
	var consulta=$("#consulta").val();
	var evaluacion=$("#evaluacion").val();
	var concepto=$("#concepto").val();
	var diagnostico=$("#diagnostico").val();
	var profesional=$("#profesional").val();

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=modificarfisioterapia"
		+"&idFisioterapia="+idFisioterapia
		+"&consulta="+consulta
		+"&evaluacion="+evaluacion
		+"&concepto="+concepto
		+"&diagnostico="+diagnostico
		+"&profesional="+profesional,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function eliminarfisioterapia(id)
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=eliminarfisioterapia&id="+id,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function dibujarFormularioIngresofonoaudiologia()
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioIngresofonoaudiologia",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function dibujarFormularioIngresofonoaudiologia()
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioIngresofonoaudiologia",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#zona_panel").html(response);
		}
	})
}

function ingresarNuevofonoaudiologia()
{
	var idFonoAudiologia=$("#idFonoAudiologia").val();
	var consulta=$("#consulta").val();
	var antPre=$("#antPre").val();
	var antPeri=$("#antPeri").val();
	var antPers=$("#antPers").val();
	var alMa=$("#alMa").val();
	var alBla=$("#alBla").val();
	var alSol=$("#alSol").val();
	var alTet=$("#alTet").val();
	var alInd=$("#alInd").val();
	var tipAli=$("#tipAli").val();
	var evoBal=$("#evoBal").val();
	var evoPal=$("#evoPal").val();
	var evoFra=$("#evoFra").val();
	var evoPro=$("#evoPro").val();
	var evoGra=$("#evoGra").val();
	var evoLec=$("#evoLec").val();
	var evoPre=$("#evoPre").val();
	var obs=$("#obs").val();
	var sisFonCom=$("#sisFonCom").val();
	var falFon=$("#falFon").val();
	var falFonCua=$("#falFonCua").val();
	var falCom=$("#falCom").val();
	var falComCua=$("#falComCua").val();
	var labAna=$("#labAna").val();
	var labMov=$("#labMov").val();
	var labTon=$("#labTon").val();
	var labSen=$("#labSen").val();
	var labFun=$("#labFun").val();
	var lenAna=$("#lenAna").val();
	var lenMov=$("#lenMov").val();
	var lenTon=$("#lenTon").val();
	var lenSen=$("#lenSen").val();
	var lenFun=$("#lenFun").val();
	var mejAna=$("#mejAna").val();
	var mejMov=$("#mejMov").val();
	var mejTon=$("#mejTon").val();
	var mejSen=$("#mejSen").val();
	var mejFun=$("#mejFun").val();
	var velAna=$("#velAna").val();
	var velMov=$("#velMov").val();
	var velTon=$("#velTon").val();
	var velSen=$("#velSen").val();
	var velFun=$("#velFun").val();
	var die=$("#die").val();
	var pal=$("#pal").val();
	var praORF=$("#praORF").val();
	var resMod=$("#resMod").val();
	var resTip=$("#resTip").val();
	var resCoo=$("#resCoo").val();
	var nivSemSem=$("#nivSemSem").val();
	var nivSemCua=$("#nivSemCua").val();
	var nivSemSec=$("#nivSemSec").val();
	var nivSemNom=$("#nivSemNom").val();
	var nivSemAgr=$("#nivSemAgr").val();
	var nivSemAbsVis=$("#nivSemAbsVis").val();
	var nivSemAbsAud=$("#nivSemAbsAud").val();
	var nivSemAbsGes=$("#nivSemAbsGes").val();
	var nivSemDif=$("#nivSemDif").val();
	var nivSemSemj=$("#nivSemSemj").val();
	var nivSemAna=$("#nivSemAna").val();
	var nivSemReaDesc=$("#nivSemReaDesc").val();
	var nivSemSin=$("#nivSemSin").val();
	var nivSemAut=$("#nivSemAut").val();
	var nivSemComOrdSim=$("#nivSemComOrdSim").val();
	var nivSemComOrdCom=$("#nivSemComOrdCom").val();
	var nivSemComOrdObj=$("#nivSemComOrdObj").val();
	var nivSemGraCatGra=$("#nivSemGraCatGra").val();
	var nivSemGraCatGraCua=$("#nivSemGraCatGraCua").val();
	var nivSemGraOra=$("#nivSemGraOra").val();
	var nivSemGraPal=$("#nivSemGraPal").val();
	var nivSemGraCoh=$("#nivSemGraCoh").val();
	var nivSemGraCoe=$("#nivSemGraCoe").val();
	var nivPraInt=$("#nivPraInt").val();
	var nivPraPre=$("#nivPraPre").val();
	var nivPraRes=$("#nivPraRes").val();
	var nivPraExc=$("#nivPraExc").val();
	var nivPraNeg=$("#nivPraNeg").val();
	var nivPraAfi=$("#nivPraAfi").val();
	var nivPraInf=$("#nivPraInf").val();
	var nivPraCon=$("#nivPraCon").val();
	var nivPraTur=$("#nivPraTur").val();
	var nivPraTop=$("#nivPraTop").val();
	var lectoFone=$("#lectoFone").val();
	var lectoSila=$("#lectoSila").val();
	var lectoLect=$("#lectoLect").val();
	var lectoVoz=$("#lectoVoz").val();
	var lectoSile=$("#lectoSile").val();
	var lectoComp=$("#lectoComp").val();
	var lectoApoy=$("#lectoApoy").val();
	var lectoApoyCual=$("#lectoApoyCual").val();
	var lectoVelo=$("#lectoVelo").val();
	var lectoTexLei=$("#lectoTexLei").val();
	var escAut=$("#escAut").val();
	var escAutCom=$("#escAutCom").val();
	var escCop=$("#escCop").val();
	var escCopCom=$("#escCopCom").val();
	var escDic=$("#escDic").val();
	var escDicCom=$("#escDicCom").val();
	var escEsp=$("#escEsp").val();
	var escEspCom=$("#escEspCom").val();
	var escCoh=$("#escCoh").val();
	var escCoe=$("#escCoe").val();
	var escGra=$("#escGra").val();
	var escSil=$("#escSil").val();
	var escPal=$("#escPal").val();
	var escFra=$("#escFra").val();
	var apreCor=$("#apreCor").val();
	var apreMed=$("#apreMed").val();
	var apreLar=$("#apreLar").val();
	var apreAte=$("#apreAte").val();
	var apreMot=$("#apreMot").val();
	var apreTol=$("#apreTol").val();
	var apreAct=$("#apreAct").val();
	var impDiag=$("#impDiag").val();
	var diag1=$("#diag1").val();
	var diag2=$("#diag2").val();
	var diag3=$("#diag3").val();
	var profesional=$("#profesional").val();

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=ingresarNuevofonoaudiologia"
		+"&idFonoAudiologia="+idFonoAudiologia
		+"&consulta="+consulta
		+"&antPre="+antPre
		+"&antPeri="+antPeri
		+"&antPers="+antPers
		+"&alMa="+alMa
		+"&alBla="+alBla
		+"&alSol="+alSol
		+"&alTet="+alTet
		+"&alInd="+alInd
		+"&tipAli="+tipAli
		+"&evoBal="+evoBal
		+"&evoPal="+evoPal
		+"&evoFra="+evoFra
		+"&evoPro="+evoPro
		+"&evoGra="+evoGra
		+"&evoLec="+evoLec
		+"&evoPre="+evoPre
		+"&obs="+obs
		+"&sisFonCom="+sisFonCom
		+"&falFon="+falFon
		+"&falFonCua="+falFonCua
		+"&falCom="+falCom
		+"&falComCua="+falComCua
		+"&labAna="+labAna
		+"&labMov="+labMov
		+"&labTon="+labTon
		+"&labSen="+labSen
		+"&labFun="+labFun
		+"&lenAna="+lenAna
		+"&lenMov="+lenMov
		+"&lenTon="+lenTon
		+"&lenSen="+lenSen
		+"&lenFun="+lenFun
		+"&mejAna="+mejAna
		+"&mejMov="+mejMov
		+"&mejTon="+mejTon
		+"&mejSen="+mejSen
		+"&mejFun="+mejFun
		+"&velAna="+velAna
		+"&velMov="+velMov
		+"&velTon="+velTon
		+"&velSen="+velSen
		+"&velFun="+velFun
		+"&die="+die
		+"&pal="+pal
		+"&praORF="+praORF
		+"&resMod="+resMod
		+"&resTip="+resTip
		+"&resCoo="+resCoo
		+"&nivSemSem="+nivSemSem
		+"&nivSemCua="+nivSemCua
		+"&nivSemSec="+nivSemSec
		+"&nivSemNom="+nivSemNom
		+"&nivSemAgr="+nivSemAgr
		+"&nivSemAbsVis="+nivSemAbsVis
		+"&nivSemAbsAud="+nivSemAbsAud
		+"&nivSemAbsGes="+nivSemAbsGes
		+"&nivSemDif="+nivSemDif
		+"&nivSemSemj="+nivSemSemj
		+"&nivSemAna="+nivSemAna
		+"&nivSemReaDesc="+nivSemReaDesc
		+"&nivSemSin="+nivSemSin
		+"&nivSemAut="+nivSemAut
		+"&nivSemComOrdSim="+nivSemComOrdSim
		+"&nivSemComOrdCom="+nivSemComOrdCom
		+"&nivSemComOrdObj="+nivSemComOrdObj
		+"&nivSemGraCatGra="+nivSemGraCatGra
		+"&nivSemGraCatGraCua="+nivSemGraCatGraCua
		+"&nivSemGraOra="+nivSemGraOra
		+"&nivSemGraPal="+nivSemGraPal
		+"&nivSemGraCoh="+nivSemGraCoh
		+"&nivSemGraCoe="+nivSemGraCoe
		+"&nivPraInt="+nivPraInt
		+"&nivPraPre="+nivPraPre
		+"&nivPraRes="+nivPraRes
		+"&nivPraExc="+nivPraExc
		+"&nivPraNeg="+nivPraNeg
		+"&nivPraAfi="+nivPraAfi
		+"&nivPraInf="+nivPraInf
		+"&nivPraCon="+nivPraCon
		+"&nivPraTur="+nivPraTur
		+"&nivPraTop="+nivPraTop
		+"&lectoFone="+lectoFone
		+"&lectoSila="+lectoSila
		+"&lectoLect="+lectoLect
		+"&lectoVoz="+lectoVoz
		+"&lectoSile="+lectoSile
		+"&lectoComp="+lectoComp
		+"&lectoApoy="+lectoApoy
		+"&lectoApoyCual="+lectoApoyCual
		+"&lectoVelo="+lectoVelo
		+"&lectoTexLei="+lectoTexLei
		+"&escAut="+escAut
		+"&escAutCom="+escAutCom
		+"&escCop="+escCop
		+"&escCopCom="+escCopCom
		+"&escDic="+escDic
		+"&escDicCom="+escDicCom
		+"&escEsp="+escEsp
		+"&escEspCom="+escEspCom
		+"&escCoh="+escCoh
		+"&escCoe="+escCoe
		+"&escGra="+escGra
		+"&escSil="+escSil
		+"&escPal="+escPal
		+"&escFra="+escFra
		+"&apreCor="+apreCor
		+"&apreMed="+apreMed
		+"&apreLar="+apreLar
		+"&apreAte="+apreAte
		+"&apreMot="+apreMot
		+"&apreTol="+apreTol
		+"&apreAct="+apreAct
		+"&impDiag="+impDiag
		+"&diag1="+diag1
		+"&diag2="+diag2
		+"&diag3="+diag3
		+"&profesional="+profesional,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			alert(response);
		}
	})
}

function consultarTodosfonoaudiologia()
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=consultarTodosfonoaudiologia",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#zona_panel").html(response);
		}
	})
}

function dibujarFormularioModificarfonoaudiologia(id)
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioModificarfonoaudiologia&id="+id,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#zona_panel").html(response);
		}
	})
}

function modificarfonoaudiologia()
{
	var idFonoAudiologia=$("#idFonoAudiologia").val();
	var consulta=$("#consulta").val();
	var antPre=$("#antPre").val();
	var antPeri=$("#antPeri").val();
	var antPers=$("#antPers").val();
	var alMa=$("#alMa").val();
	var alBla=$("#alBla").val();
	var alSol=$("#alSol").val();
	var alTet=$("#alTet").val();
	var alInd=$("#alInd").val();
	var tipAli=$("#tipAli").val();
	var evoBal=$("#evoBal").val();
	var evoPal=$("#evoPal").val();
	var evoFra=$("#evoFra").val();
	var evoPro=$("#evoPro").val();
	var evoGra=$("#evoGra").val();
	var evoLec=$("#evoLec").val();
	var evoPre=$("#evoPre").val();
	var obs=$("#obs").val();
	var sisFonCom=$("#sisFonCom").val();
	var falFon=$("#falFon").val();
	var falFonCua=$("#falFonCua").val();
	var falCom=$("#falCom").val();
	var falComCua=$("#falComCua").val();
	var labAna=$("#labAna").val();
	var labMov=$("#labMov").val();
	var labTon=$("#labTon").val();
	var labSen=$("#labSen").val();
	var labFun=$("#labFun").val();
	var lenAna=$("#lenAna").val();
	var lenMov=$("#lenMov").val();
	var lenTon=$("#lenTon").val();
	var lenSen=$("#lenSen").val();
	var lenFun=$("#lenFun").val();
	var mejAna=$("#mejAna").val();
	var mejMov=$("#mejMov").val();
	var mejTon=$("#mejTon").val();
	var mejSen=$("#mejSen").val();
	var mejFun=$("#mejFun").val();
	var velAna=$("#velAna").val();
	var velMov=$("#velMov").val();
	var velTon=$("#velTon").val();
	var velSen=$("#velSen").val();
	var velFun=$("#velFun").val();
	var die=$("#die").val();
	var pal=$("#pal").val();
	var praORF=$("#praORF").val();
	var resMod=$("#resMod").val();
	var resTip=$("#resTip").val();
	var resCoo=$("#resCoo").val();
	var nivSemSem=$("#nivSemSem").val();
	var nivSemCua=$("#nivSemCua").val();
	var nivSemSec=$("#nivSemSec").val();
	var nivSemNom=$("#nivSemNom").val();
	var nivSemAgr=$("#nivSemAgr").val();
	var nivSemAbsVis=$("#nivSemAbsVis").val();
	var nivSemAbsAud=$("#nivSemAbsAud").val();
	var nivSemAbsGes=$("#nivSemAbsGes").val();
	var nivSemDif=$("#nivSemDif").val();
	var nivSemSemj=$("#nivSemSemj").val();
	var nivSemAna=$("#nivSemAna").val();
	var nivSemReaDesc=$("#nivSemReaDesc").val();
	var nivSemSin=$("#nivSemSin").val();
	var nivSemAut=$("#nivSemAut").val();
	var nivSemComOrdSim=$("#nivSemComOrdSim").val();
	var nivSemComOrdCom=$("#nivSemComOrdCom").val();
	var nivSemComOrdObj=$("#nivSemComOrdObj").val();
	var nivSemGraCatGra=$("#nivSemGraCatGra").val();
	var nivSemGraCatGraCua=$("#nivSemGraCatGraCua").val();
	var nivSemGraOra=$("#nivSemGraOra").val();
	var nivSemGraPal=$("#nivSemGraPal").val();
	var nivSemGraCoh=$("#nivSemGraCoh").val();
	var nivSemGraCoe=$("#nivSemGraCoe").val();
	var nivPraInt=$("#nivPraInt").val();
	var nivPraPre=$("#nivPraPre").val();
	var nivPraRes=$("#nivPraRes").val();
	var nivPraExc=$("#nivPraExc").val();
	var nivPraNeg=$("#nivPraNeg").val();
	var nivPraAfi=$("#nivPraAfi").val();
	var nivPraInf=$("#nivPraInf").val();
	var nivPraCon=$("#nivPraCon").val();
	var nivPraTur=$("#nivPraTur").val();
	var nivPraTop=$("#nivPraTop").val();
	var lectoFone=$("#lectoFone").val();
	var lectoSila=$("#lectoSila").val();
	var lectoLect=$("#lectoLect").val();
	var lectoVoz=$("#lectoVoz").val();
	var lectoSile=$("#lectoSile").val();
	var lectoComp=$("#lectoComp").val();
	var lectoApoy=$("#lectoApoy").val();
	var lectoApoyCual=$("#lectoApoyCual").val();
	var lectoVelo=$("#lectoVelo").val();
	var lectoTexLei=$("#lectoTexLei").val();
	var escAut=$("#escAut").val();
	var escAutCom=$("#escAutCom").val();
	var escCop=$("#escCop").val();
	var escCopCom=$("#escCopCom").val();
	var escDic=$("#escDic").val();
	var escDicCom=$("#escDicCom").val();
	var escEsp=$("#escEsp").val();
	var escEspCom=$("#escEspCom").val();
	var escCoh=$("#escCoh").val();
	var escCoe=$("#escCoe").val();
	var escGra=$("#escGra").val();
	var escSil=$("#escSil").val();
	var escPal=$("#escPal").val();
	var escFra=$("#escFra").val();
	var apreCor=$("#apreCor").val();
	var apreMed=$("#apreMed").val();
	var apreLar=$("#apreLar").val();
	var apreAte=$("#apreAte").val();
	var apreMot=$("#apreMot").val();
	var apreTol=$("#apreTol").val();
	var apreAct=$("#apreAct").val();
	var impDiag=$("#impDiag").val();
	var diag1=$("#diag1").val();
	var diag2=$("#diag2").val();
	var diag3=$("#diag3").val();
	var profesional=$("#profesional").val();

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=modificarfonoaudiologia"
		+"&idFonoAudiologia="+idFonoAudiologia
		+"&consulta="+consulta
		+"&antPre="+antPre
		+"&antPeri="+antPeri
		+"&antPers="+antPers
		+"&alMa="+alMa
		+"&alBla="+alBla
		+"&alSol="+alSol
		+"&alTet="+alTet
		+"&alInd="+alInd
		+"&tipAli="+tipAli
		+"&evoBal="+evoBal
		+"&evoPal="+evoPal
		+"&evoFra="+evoFra
		+"&evoPro="+evoPro
		+"&evoGra="+evoGra
		+"&evoLec="+evoLec
		+"&evoPre="+evoPre
		+"&obs="+obs
		+"&sisFonCom="+sisFonCom
		+"&falFon="+falFon
		+"&falFonCua="+falFonCua
		+"&falCom="+falCom
		+"&falComCua="+falComCua
		+"&labAna="+labAna
		+"&labMov="+labMov
		+"&labTon="+labTon
		+"&labSen="+labSen
		+"&labFun="+labFun
		+"&lenAna="+lenAna
		+"&lenMov="+lenMov
		+"&lenTon="+lenTon
		+"&lenSen="+lenSen
		+"&lenFun="+lenFun
		+"&mejAna="+mejAna
		+"&mejMov="+mejMov
		+"&mejTon="+mejTon
		+"&mejSen="+mejSen
		+"&mejFun="+mejFun
		+"&velAna="+velAna
		+"&velMov="+velMov
		+"&velTon="+velTon
		+"&velSen="+velSen
		+"&velFun="+velFun
		+"&die="+die
		+"&pal="+pal
		+"&praORF="+praORF
		+"&resMod="+resMod
		+"&resTip="+resTip
		+"&resCoo="+resCoo
		+"&nivSemSem="+nivSemSem
		+"&nivSemCua="+nivSemCua
		+"&nivSemSec="+nivSemSec
		+"&nivSemNom="+nivSemNom
		+"&nivSemAgr="+nivSemAgr
		+"&nivSemAbsVis="+nivSemAbsVis
		+"&nivSemAbsAud="+nivSemAbsAud
		+"&nivSemAbsGes="+nivSemAbsGes
		+"&nivSemDif="+nivSemDif
		+"&nivSemSemj="+nivSemSemj
		+"&nivSemAna="+nivSemAna
		+"&nivSemReaDesc="+nivSemReaDesc
		+"&nivSemSin="+nivSemSin
		+"&nivSemAut="+nivSemAut
		+"&nivSemComOrdSim="+nivSemComOrdSim
		+"&nivSemComOrdCom="+nivSemComOrdCom
		+"&nivSemComOrdObj="+nivSemComOrdObj
		+"&nivSemGraCatGra="+nivSemGraCatGra
		+"&nivSemGraCatGraCua="+nivSemGraCatGraCua
		+"&nivSemGraOra="+nivSemGraOra
		+"&nivSemGraPal="+nivSemGraPal
		+"&nivSemGraCoh="+nivSemGraCoh
		+"&nivSemGraCoe="+nivSemGraCoe
		+"&nivPraInt="+nivPraInt
		+"&nivPraPre="+nivPraPre
		+"&nivPraRes="+nivPraRes
		+"&nivPraExc="+nivPraExc
		+"&nivPraNeg="+nivPraNeg
		+"&nivPraAfi="+nivPraAfi
		+"&nivPraInf="+nivPraInf
		+"&nivPraCon="+nivPraCon
		+"&nivPraTur="+nivPraTur
		+"&nivPraTop="+nivPraTop
		+"&lectoFone="+lectoFone
		+"&lectoSila="+lectoSila
		+"&lectoLect="+lectoLect
		+"&lectoVoz="+lectoVoz
		+"&lectoSile="+lectoSile
		+"&lectoComp="+lectoComp
		+"&lectoApoy="+lectoApoy
		+"&lectoApoyCual="+lectoApoyCual
		+"&lectoVelo="+lectoVelo
		+"&lectoTexLei="+lectoTexLei
		+"&escAut="+escAut
		+"&escAutCom="+escAutCom
		+"&escCop="+escCop
		+"&escCopCom="+escCopCom
		+"&escDic="+escDic
		+"&escDicCom="+escDicCom
		+"&escEsp="+escEsp
		+"&escEspCom="+escEspCom
		+"&escCoh="+escCoh
		+"&escCoe="+escCoe
		+"&escGra="+escGra
		+"&escSil="+escSil
		+"&escPal="+escPal
		+"&escFra="+escFra
		+"&apreCor="+apreCor
		+"&apreMed="+apreMed
		+"&apreLar="+apreLar
		+"&apreAte="+apreAte
		+"&apreMot="+apreMot
		+"&apreTol="+apreTol
		+"&apreAct="+apreAct
		+"&impDiag="+impDiag
		+"&diag1="+diag1
		+"&diag2="+diag2
		+"&diag3="+diag3
		+"&profesional="+profesional,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#zona_panel").html(response);
		}
	})
}

function eliminarfonoaudiologia(id)
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=eliminarfonoaudiologia&id="+id,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#zona_panel").html(response);
		}
	})
}

function dibujarFormularioIngresofrecuenciaalimentaria()
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioIngresofrecuenciaalimentaria",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function ingresarNuevofrecuenciaalimentaria()
{
	var idFrecuenciaAlimentaria=$("#idFrecuenciaAlimentaria").val();
	var consulta=$("#consulta").val();
	var alimento=$("#alimento").val();
	var diario=$("#diario").val();
	var semanal=$("#semanal").val();
	var quincenal=$("#quincenal").val();
	var ocasional=$("#ocasional").val();
	var peso=$("#peso").val();
	var tall=$("#tall").val();
	var pt=$("#pt").val();
	var te=$("#te").val();
	var diaNut=$("#diaNut").val();
	var eduNut=$("#eduNut").val();
	var objetivos=$("#objetivos").val();
	var estrategias=$("#estrategias").val();
	var metas=$("#metas").val();
	var profesional=$("#profesional").val();

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=ingresarNuevofrecuenciaalimentaria"
		+"&idFrecuenciaAlimentaria="+idFrecuenciaAlimentaria
		+"&consulta="+consulta
		+"&alimento="+alimento
		+"&diario="+diario
		+"&semanal="+semanal
		+"&quincenal="+quincenal
		+"&ocasional="+ocasional
		+"&peso="+peso
		+"&tall="+tall
		+"&pt="+pt
		+"&te="+te
		+"&diaNut="+diaNut
		+"&eduNut="+eduNut
		+"&objetivos="+objetivos
		+"&estrategias="+estrategias
		+"&metas="+metas
		+"&profesional="+profesional,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function consultarTodosfrecuenciaalimentaria()
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=consultarTodosfrecuenciaalimentaria",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function dibujarFormularioModificarfrecuenciaalimentaria(id)
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioModificarfrecuenciaalimentaria&id="+id,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function modificarfrecuenciaalimentaria()
{
	var idFrecuenciaAlimentaria=$("#idFrecuenciaAlimentaria").val();
	var consulta=$("#consulta").val();
	var alimento=$("#alimento").val();
	var diario=$("#diario").val();
	var semanal=$("#semanal").val();
	var quincenal=$("#quincenal").val();
	var ocasional=$("#ocasional").val();
	var peso=$("#peso").val();
	var tall=$("#tall").val();
	var pt=$("#pt").val();
	var te=$("#te").val();
	var diaNut=$("#diaNut").val();
	var eduNut=$("#eduNut").val();
	var objetivos=$("#objetivos").val();
	var estrategias=$("#estrategias").val();
	var metas=$("#metas").val();
	var profesional=$("#profesional").val();

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=modificarfrecuenciaalimentaria"
		+"&idFrecuenciaAlimentaria="+idFrecuenciaAlimentaria
		+"&consulta="+consulta
		+"&alimento="+alimento
		+"&diario="+diario
		+"&semanal="+semanal
		+"&quincenal="+quincenal
		+"&ocasional="+ocasional
		+"&peso="+peso
		+"&tall="+tall
		+"&pt="+pt
		+"&te="+te
		+"&diaNut="+diaNut
		+"&eduNut="+eduNut
		+"&objetivos="+objetivos
		+"&estrategias="+estrategias
		+"&metas="+metas
		+"&profesional="+profesional,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function eliminarfrecuenciaalimentaria(id)
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=eliminarfrecuenciaalimentaria&id="+id,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function dibujarFormularioIngresolaborales()
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioIngresolaborales",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function ingresarNuevolaborales()
{
	var idLaborales=$("#idLaborales").val();
	var consulta=$("#consulta").val();
	var empresa=$("#empresa").val();
	var cargo=$("#cargo").val();
	var tiempo=$("#tiempol").val();
	var motRet=$("#motRet").val();

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=ingresarNuevolaborales"
		+"&idLaborales="+idLaborales
		+"&consulta="+consulta
		+"&empresa="+empresa
		+"&cargo="+cargo
		+"&tiempo="+tiempo
		+"&motRet="+motRet,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			//alert(response);
            consultarTodoslaborales(consulta);
		}
	})
}

function consultarTodoslaborales(consulta)
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=consultarTodoslaborales&consulta="+consulta,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#divlaboral2").html(response);
		}
	})
}

function dibujarFormularioModificarlaborales(id)
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioModificarlaborales&id="+id,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function modificarlaborales()
{
	var idLaborales=$("#idLaborales").val();
	var consulta=$("#consulta").val();
	var empresa=$("#empresa").val();
	var cargo=$("#cargo").val();
	var tiempo=$("#tiempo").val();
	var motRet=$("#motRet").val();

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=modificarlaborales"
		+"&idLaborales="+idLaborales
		+"&consulta="+consulta
		+"&empresa="+empresa
		+"&cargo="+cargo
		+"&tiempo="+tiempo
		+"&motRet="+motRet,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function eliminarlaborales(id)
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=eliminarlaborales&id="+id,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			//alert(response);
            consultarTodoslaborales(response);
		}
	})
}

function dibujarFormularioIngresomunicipio()
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioIngresomunicipio",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function ingresarNuevomunicipio()
{
	var idMunicipio=$("#idMunicipio").val();
	var codigo=$("#codigo").val();
	var nombre=$("#nombre").val();
	var departamento=$("#departamento").val();

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=ingresarNuevomunicipio"
		+"&idMunicipio="+idMunicipio
		+"&codigo="+codigo
		+"&nombre="+nombre
		+"&departamento="+departamento,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function consultarTodosmunicipio()
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=consultarTodosmunicipio",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function dibujarFormularioModificarmunicipio(id)
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioModificarmunicipio&id="+id,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function modificarmunicipio()
{
	var idMunicipio=$("#idMunicipio").val();
	var codigo=$("#codigo").val();
	var nombre=$("#nombre").val();
	var departamento=$("#departamento").val();

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=modificarmunicipio"
		+"&idMunicipio="+idMunicipio
		+"&codigo="+codigo
		+"&nombre="+nombre
		+"&departamento="+departamento,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function eliminarmunicipio(id)
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=eliminarmunicipio&id="+id,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function dibujarFormularioIngresonutricional()
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioIngresonutricional",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function ingresarNuevonutricional()
{
	var idNutricional=$("#idNutricional").val();
	var consulta=$("#consulta").val();
	var antPerSal=$("#antPerSal").val();
	var aleAli=$("#aleAli").val();
	var traDigEst=$("#traDigEst").val();
	var traDigGas=$("#traDigGas").val();
	var traDigRGE=$("#traDigRGE").val();
	var traDigDia=$("#traDigDia").val();
	var praDep=$("#praDep").val();
	var cualDep=$("#cualDep").val();
	var frecuencia=$("#frecuencia").val();
	var antFamSal=$("#antFamSal").val();
	var conRegComPrin=$("#conRegComPrin").val();
	var masNor=$("#masNor").val();
	var conComNut=$("#conComNut").val();
	var conAguaDia=$("#conAguaDia").val();
	var apetito=$("#apetito").val();

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=ingresarNuevonutricional"
		+"&idNutricional="+idNutricional
		+"&consulta="+consulta
		+"&antPerSal="+antPerSal
		+"&aleAli="+aleAli
		+"&traDigEst="+traDigEst
		+"&traDigGas="+traDigGas
		+"&traDigRGE="+traDigRGE
		+"&traDigDia="+traDigDia
		+"&praDep="+praDep
		+"&cualDep="+cualDep
		+"&frecuencia="+frecuencia
		+"&antFamSal="+antFamSal
		+"&conRegComPrin="+conRegComPrin
		+"&masNor="+masNor
		+"&conComNut="+conComNut
		+"&conAguaDia="+conAguaDia
		+"&apetito="+apetito,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function consultarTodosnutricional()
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=consultarTodosnutricional",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function dibujarFormularioModificarnutricional(id)
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioModificarnutricional&id="+id,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function modificarnutricional()
{
	var idNutricional=$("#idNutricional").val();
	var consulta=$("#consulta").val();
	var antPerSal=$("#antPerSal").val();
	var aleAli=$("#aleAli").val();
	var traDigEst=$("#traDigEst").val();
	var traDigGas=$("#traDigGas").val();
	var traDigRGE=$("#traDigRGE").val();
	var traDigDia=$("#traDigDia").val();
	var praDep=$("#praDep").val();
	var cualDep=$("#cualDep").val();
	var frecuencia=$("#frecuencia").val();
	var antFamSal=$("#antFamSal").val();
	var conRegComPrin=$("#conRegComPrin").val();
	var masNor=$("#masNor").val();
	var conComNut=$("#conComNut").val();
	var conAguaDia=$("#conAguaDia").val();
	var apetito=$("#apetito").val();

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=modificarnutricional"
		+"&idNutricional="+idNutricional
		+"&consulta="+consulta
		+"&antPerSal="+antPerSal
		+"&aleAli="+aleAli
		+"&traDigEst="+traDigEst
		+"&traDigGas="+traDigGas
		+"&traDigRGE="+traDigRGE
		+"&traDigDia="+traDigDia
		+"&praDep="+praDep
		+"&cualDep="+cualDep
		+"&frecuencia="+frecuencia
		+"&antFamSal="+antFamSal
		+"&conRegComPrin="+conRegComPrin
		+"&masNor="+masNor
		+"&conComNut="+conComNut
		+"&conAguaDia="+conAguaDia
		+"&apetito="+apetito,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function eliminarnutricional(id)
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=eliminarnutricional&id="+id,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function dibujarFormularioIngresoodontologia()
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioIngresoodontologia",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function ingresarNuevoodontologia()
{
	var idOdontologia=$("#idOdontologia").val();
	var consulta=$("#consulta").val();
	var motCon=$("#motCon").val();
	var enfermedad=$("#enfermedad").val();
	var pulso=$("#pulso").val();
	var preArt=$("#preArt").val();
	var freRes=$("#freRes").val();
	var freCar=$("#freCar").val();
	var ttoMedAct=$("#ttoMedAct").val();
	var tomMed=$("#tomMed").val();
	var alergia=$("#alergia").val();
	var cardiopatia=$("#cardiopatia").val();
	var altPA=$("#altPA").val();
	var diabetes=$("#diabetes").val();
	var hepatitis=$("#hepatitis").val();
	var disSan=$("#disSan").val();
	var enfRen=$("#enfRen").val();
	var inmuno=$("#inmuno").val();
	var traEnd=$("#traEnd").val();
	var patResp=$("#patResp").val();
	var traGas=$("#traGas").val();
	var epilepsia=$("#epilepsia").val();
	var cirugias=$("#cirugias").val();
	var protesis=$("#protesis").val();
	var observaciones=$("#observaciones").val();
	var labSup=$("#labSup").val();
	var labInf=$("#labInf").val();
	var comisuras=$("#comisuras").val();
	var mucOral=$("#mucOral").val();
	var paladar=$("#paladar").val();
	var lengua=$("#lengua").val();
	var pisBoca=$("#pisBoca").val();
	var rebAlv=$("#rebAlv").val();
	var frenillos=$("#frenillos").val();
	var glaSal=$("#glaSal").val();
	var dolMus=$("#dolMus").val();
	var dolArt=$("#dolArt").val();
	var ruiArt=$("#ruiArt").val();
	var alteracion=$("#alteracion").val();
	var despalzamiento=$("#despalzamiento").val();
	var observaciones2=$("#observaciones2").val();
	var forma=$("#forma").val();
	var tamano=$("#tamano").val();
	var numero=$("#numero").val();
	var movTejDen=$("#movTejDen").val();
	var inflamacion=$("#inflamacion").val();
	var bolsa=$("#bolsa").val();
	var recesiones=$("#recesiones").val();
	var movExaPul=$("#movExaPul").val();
	var perExaPul=$("#perExaPul").val();
	var senExaPul=$("#senExaPul").val();
	var fisExaPul=$("#fisExaPul").val();
	var dieTraExaPul=$("#dieTraExaPul").val();
	var habOra=$("#habOra").val();
	var observaciones3=$("#observaciones3").val();
	var diagOral=$("#diagOral").val();
	var plaTra=$("#plaTra").val();
	var profesional2=$("#profesional2").val();
	var oASI8=$("#oASI8").val();
	var oASI7=$("#oASI7").val();
	var oASI6=$("#oASI6").val();
	var oASI5=$("#oASI5").val();
	var oASI4=$("#oASI4").val();
	var oASI3=$("#oASI3").val();
	var oASI2=$("#oASI2").val();
	var oASI1=$("#oASI1").val();
	var oAII8=$("#oAII8").val();
	var oAII7=$("#oAII7").val();
	var oAII6=$("#oAII6").val();
	var oAII5=$("#oAII5").val();
	var oAII4=$("#oAII4").val();
	var oAII3=$("#oAII3").val();
	var oAII2=$("#oAII2").val();
	var oAII1=$("#oAII1").val();
	var oADS8=$("#oADS8").val();
	var oADS7=$("#oADS7").val();
	var oADS6=$("#oADS6").val();
	var oADS5=$("#oADS5").val();
	var oADS4=$("#oADS4").val();
	var oADS3=$("#oADS3").val();
	var oADS2=$("#oADS2").val();
	var oADS1=$("#oADS1").val();
	var oADI8=$("#oADI8").val();
	var oADI7=$("#oADI7").val();
	var oADI6=$("#oADI6").val();
	var oADI5=$("#oADI5").val();
	var oADI4=$("#oADI4").val();
	var oADI3=$("#oADI3").val();
	var oADI2=$("#oADI2").val();
	var oADI1=$("#oADI1").val();
	var oIIS8=$("#oIIS8").val();
	var oIIS7=$("#oIIS7").val();
	var oIIS6=$("#oIIS6").val();
	var oIIS5=$("#oIIS5").val();
	var oIIS4=$("#oIIS4").val();
	var oIIS3=$("#oIIS3").val();
	var oIIS2=$("#oIIS2").val();
	var oIIS1=$("#oIIS1").val();
	var oIII8=$("#oIII8").val();
	var oIII7=$("#oIII7").val();
	var oIII6=$("#oIII6").val();
	var oIII5=$("#oIII5").val();
	var oIII4=$("#oIII4").val();
	var oIII3=$("#oIII3").val();
	var oIII2=$("#oIII2").val();
	var oIII1=$("#oIII1").val();
	var oIDS8=$("#oIDS8").val();
	var oIDS7=$("#oIDS7").val();
	var oIDS6=$("#oIDS6").val();
	var oIDS5=$("#oIDS5").val();
	var oIDS4=$("#oIDS4").val();
	var oIDS3=$("#oIDS3").val();
	var oIDS2=$("#oIDS2").val();
	var oIDS1=$("#oIDS1").val();
	var oIDI8=$("#oIDI8").val();
	var oIDI7=$("#oIDI7").val();
	var oIDI6=$("#oIDI6").val();
	var oIDI5=$("#oIDI5").val();
	var oIDI4=$("#oIDI4").val();
	var oIDI3=$("#oIDI3").val();
	var oIDI2=$("#oIDI2").val();
	var oIDI1=$("#oIDI1").val();
	var profesional=$("#profesional").val();

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=ingresarNuevoodontologia"
		+"&idOdontologia="+idOdontologia
		+"&consulta="+consulta
		+"&motCon="+motCon
		+"&enfermedad="+enfermedad
		+"&pulso="+pulso
		+"&preArt="+preArt
		+"&freRes="+freRes
		+"&freCar="+freCar
		+"&ttoMedAct="+ttoMedAct
		+"&tomMed="+tomMed
		+"&alergia="+alergia
		+"&cardiopatia="+cardiopatia
		+"&altPA="+altPA
		+"&diabetes="+diabetes
		+"&hepatitis="+hepatitis
		+"&disSan="+disSan
		+"&enfRen="+enfRen
		+"&inmuno="+inmuno
		+"&traEnd="+traEnd
		+"&patResp="+patResp
		+"&traGas="+traGas
		+"&epilepsia="+epilepsia
		+"&cirugias="+cirugias
		+"&protesis="+protesis
		+"&observaciones="+observaciones
		+"&labSup="+labSup
		+"&labInf="+labInf
		+"&comisuras="+comisuras
		+"&mucOral="+mucOral
		+"&paladar="+paladar
		+"&lengua="+lengua
		+"&pisBoca="+pisBoca
		+"&rebAlv="+rebAlv
		+"&frenillos="+frenillos
		+"&glaSal="+glaSal
		+"&dolMus="+dolMus
		+"&dolArt="+dolArt
		+"&ruiArt="+ruiArt
		+"&alteracion="+alteracion
		+"&despalzamiento="+despalzamiento
		+"&observaciones2="+observaciones2
		+"&forma="+forma
		+"&tamano="+tamano
		+"&numero="+numero
		+"&movTejDen="+movTejDen
		+"&inflamacion="+inflamacion
		+"&bolsa="+bolsa
		+"&recesiones="+recesiones
		+"&movExaPul="+movExaPul
		+"&perExaPul="+perExaPul
		+"&senExaPul="+senExaPul
		+"&fisExaPul="+fisExaPul
		+"&dieTraExaPul="+dieTraExaPul
		+"&habOra="+habOra
		+"&observaciones3="+observaciones3
		+"&diagOral="+diagOral
		+"&plaTra="+plaTra
		+"&profesional2="+profesional2
		+"&oASI8="+oASI8
		+"&oASI7="+oASI7
		+"&oASI6="+oASI6
		+"&oASI5="+oASI5
		+"&oASI4="+oASI4
		+"&oASI3="+oASI3
		+"&oASI2="+oASI2
		+"&oASI1="+oASI1
		+"&oAII8="+oAII8
		+"&oAII7="+oAII7
		+"&oAII6="+oAII6
		+"&oAII5="+oAII5
		+"&oAII4="+oAII4
		+"&oAII3="+oAII3
		+"&oAII2="+oAII2
		+"&oAII1="+oAII1
		+"&oADS8="+oADS8
		+"&oADS7="+oADS7
		+"&oADS6="+oADS6
		+"&oADS5="+oADS5
		+"&oADS4="+oADS4
		+"&oADS3="+oADS3
		+"&oADS2="+oADS2
		+"&oADS1="+oADS1
		+"&oADI8="+oADI8
		+"&oADI7="+oADI7
		+"&oADI6="+oADI6
		+"&oADI5="+oADI5
		+"&oADI4="+oADI4
		+"&oADI3="+oADI3
		+"&oADI2="+oADI2
		+"&oADI1="+oADI1
		+"&oIIS8="+oIIS8
		+"&oIIS7="+oIIS7
		+"&oIIS6="+oIIS6
		+"&oIIS5="+oIIS5
		+"&oIIS4="+oIIS4
		+"&oIIS3="+oIIS3
		+"&oIIS2="+oIIS2
		+"&oIIS1="+oIIS1
		+"&oIII8="+oIII8
		+"&oIII7="+oIII7
		+"&oIII6="+oIII6
		+"&oIII5="+oIII5
		+"&oIII4="+oIII4
		+"&oIII3="+oIII3
		+"&oIII2="+oIII2
		+"&oIII1="+oIII1
		+"&oIDS8="+oIDS8
		+"&oIDS7="+oIDS7
		+"&oIDS6="+oIDS6
		+"&oIDS5="+oIDS5
		+"&oIDS4="+oIDS4
		+"&oIDS3="+oIDS3
		+"&oIDS2="+oIDS2
		+"&oIDS1="+oIDS1
		+"&oIDI8="+oIDI8
		+"&oIDI7="+oIDI7
		+"&oIDI6="+oIDI6
		+"&oIDI5="+oIDI5
		+"&oIDI4="+oIDI4
		+"&oIDI3="+oIDI3
		+"&oIDI2="+oIDI2
		+"&oIDI1="+oIDI1
		+"&profesional="+profesional,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function consultarTodosodontologia()
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=consultarTodosodontologia",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function dibujarFormularioModificarodontologia(id)
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioModificarodontologia&id="+id,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function modificarodontologia()
{
	var idOdontologia=$("#idOdontologia").val();
	var consulta=$("#consulta").val();
	var motCon=$("#motCon").val();
	var enfermedad=$("#enfermedad").val();
	var pulso=$("#pulso").val();
	var preArt=$("#preArt").val();
	var freRes=$("#freRes").val();
	var freCar=$("#freCar").val();
	var ttoMedAct=$("#ttoMedAct").val();
	var tomMed=$("#tomMed").val();
	var alergia=$("#alergia").val();
	var cardiopatia=$("#cardiopatia").val();
	var altPA=$("#altPA").val();
	var diabetes=$("#diabetes").val();
	var hepatitis=$("#hepatitis").val();
	var disSan=$("#disSan").val();
	var enfRen=$("#enfRen").val();
	var inmuno=$("#inmuno").val();
	var traEnd=$("#traEnd").val();
	var patResp=$("#patResp").val();
	var traGas=$("#traGas").val();
	var epilepsia=$("#epilepsia").val();
	var cirugias=$("#cirugias").val();
	var protesis=$("#protesis").val();
	var observaciones=$("#observaciones").val();
	var labSup=$("#labSup").val();
	var labInf=$("#labInf").val();
	var comisuras=$("#comisuras").val();
	var mucOral=$("#mucOral").val();
	var paladar=$("#paladar").val();
	var lengua=$("#lengua").val();
	var pisBoca=$("#pisBoca").val();
	var rebAlv=$("#rebAlv").val();
	var frenillos=$("#frenillos").val();
	var glaSal=$("#glaSal").val();
	var dolMus=$("#dolMus").val();
	var dolArt=$("#dolArt").val();
	var ruiArt=$("#ruiArt").val();
	var alteracion=$("#alteracion").val();
	var despalzamiento=$("#despalzamiento").val();
	var observaciones2=$("#observaciones2").val();
	var forma=$("#forma").val();
	var tamano=$("#tamano").val();
	var numero=$("#numero").val();
	var movTejDen=$("#movTejDen").val();
	var inflamacion=$("#inflamacion").val();
	var bolsa=$("#bolsa").val();
	var recesiones=$("#recesiones").val();
	var movExaPul=$("#movExaPul").val();
	var perExaPul=$("#perExaPul").val();
	var senExaPul=$("#senExaPul").val();
	var fisExaPul=$("#fisExaPul").val();
	var dieTraExaPul=$("#dieTraExaPul").val();
	var habOra=$("#habOra").val();
	var observaciones3=$("#observaciones3").val();
	var diagOral=$("#diagOral").val();
	var plaTra=$("#plaTra").val();
	var profesional2=$("#profesional2").val();
	var oASI8=$("#oASI8").val();
	var oASI7=$("#oASI7").val();
	var oASI6=$("#oASI6").val();
	var oASI5=$("#oASI5").val();
	var oASI4=$("#oASI4").val();
	var oASI3=$("#oASI3").val();
	var oASI2=$("#oASI2").val();
	var oASI1=$("#oASI1").val();
	var oAII8=$("#oAII8").val();
	var oAII7=$("#oAII7").val();
	var oAII6=$("#oAII6").val();
	var oAII5=$("#oAII5").val();
	var oAII4=$("#oAII4").val();
	var oAII3=$("#oAII3").val();
	var oAII2=$("#oAII2").val();
	var oAII1=$("#oAII1").val();
	var oADS8=$("#oADS8").val();
	var oADS7=$("#oADS7").val();
	var oADS6=$("#oADS6").val();
	var oADS5=$("#oADS5").val();
	var oADS4=$("#oADS4").val();
	var oADS3=$("#oADS3").val();
	var oADS2=$("#oADS2").val();
	var oADS1=$("#oADS1").val();
	var oADI8=$("#oADI8").val();
	var oADI7=$("#oADI7").val();
	var oADI6=$("#oADI6").val();
	var oADI5=$("#oADI5").val();
	var oADI4=$("#oADI4").val();
	var oADI3=$("#oADI3").val();
	var oADI2=$("#oADI2").val();
	var oADI1=$("#oADI1").val();
	var oIIS8=$("#oIIS8").val();
	var oIIS7=$("#oIIS7").val();
	var oIIS6=$("#oIIS6").val();
	var oIIS5=$("#oIIS5").val();
	var oIIS4=$("#oIIS4").val();
	var oIIS3=$("#oIIS3").val();
	var oIIS2=$("#oIIS2").val();
	var oIIS1=$("#oIIS1").val();
	var oIII8=$("#oIII8").val();
	var oIII7=$("#oIII7").val();
	var oIII6=$("#oIII6").val();
	var oIII5=$("#oIII5").val();
	var oIII4=$("#oIII4").val();
	var oIII3=$("#oIII3").val();
	var oIII2=$("#oIII2").val();
	var oIII1=$("#oIII1").val();
	var oIDS8=$("#oIDS8").val();
	var oIDS7=$("#oIDS7").val();
	var oIDS6=$("#oIDS6").val();
	var oIDS5=$("#oIDS5").val();
	var oIDS4=$("#oIDS4").val();
	var oIDS3=$("#oIDS3").val();
	var oIDS2=$("#oIDS2").val();
	var oIDS1=$("#oIDS1").val();
	var oIDI8=$("#oIDI8").val();
	var oIDI7=$("#oIDI7").val();
	var oIDI6=$("#oIDI6").val();
	var oIDI5=$("#oIDI5").val();
	var oIDI4=$("#oIDI4").val();
	var oIDI3=$("#oIDI3").val();
	var oIDI2=$("#oIDI2").val();
	var oIDI1=$("#oIDI1").val();
	var profesional=$("#profesional").val();

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=modificarodontologia"
		+"&idOdontologia="+idOdontologia
		+"&consulta="+consulta
		+"&motCon="+motCon
		+"&enfermedad="+enfermedad
		+"&pulso="+pulso
		+"&preArt="+preArt
		+"&freRes="+freRes
		+"&freCar="+freCar
		+"&ttoMedAct="+ttoMedAct
		+"&tomMed="+tomMed
		+"&alergia="+alergia
		+"&cardiopatia="+cardiopatia
		+"&altPA="+altPA
		+"&diabetes="+diabetes
		+"&hepatitis="+hepatitis
		+"&disSan="+disSan
		+"&enfRen="+enfRen
		+"&inmuno="+inmuno
		+"&traEnd="+traEnd
		+"&patResp="+patResp
		+"&traGas="+traGas
		+"&epilepsia="+epilepsia
		+"&cirugias="+cirugias
		+"&protesis="+protesis
		+"&observaciones="+observaciones
		+"&labSup="+labSup
		+"&labInf="+labInf
		+"&comisuras="+comisuras
		+"&mucOral="+mucOral
		+"&paladar="+paladar
		+"&lengua="+lengua
		+"&pisBoca="+pisBoca
		+"&rebAlv="+rebAlv
		+"&frenillos="+frenillos
		+"&glaSal="+glaSal
		+"&dolMus="+dolMus
		+"&dolArt="+dolArt
		+"&ruiArt="+ruiArt
		+"&alteracion="+alteracion
		+"&despalzamiento="+despalzamiento
		+"&observaciones2="+observaciones2
		+"&forma="+forma
		+"&tamano="+tamano
		+"&numero="+numero
		+"&movTejDen="+movTejDen
		+"&inflamacion="+inflamacion
		+"&bolsa="+bolsa
		+"&recesiones="+recesiones
		+"&movExaPul="+movExaPul
		+"&perExaPul="+perExaPul
		+"&senExaPul="+senExaPul
		+"&fisExaPul="+fisExaPul
		+"&dieTraExaPul="+dieTraExaPul
		+"&habOra="+habOra
		+"&observaciones3="+observaciones3
		+"&diagOral="+diagOral
		+"&plaTra="+plaTra
		+"&profesional2="+profesional2
		+"&oASI8="+oASI8
		+"&oASI7="+oASI7
		+"&oASI6="+oASI6
		+"&oASI5="+oASI5
		+"&oASI4="+oASI4
		+"&oASI3="+oASI3
		+"&oASI2="+oASI2
		+"&oASI1="+oASI1
		+"&oAII8="+oAII8
		+"&oAII7="+oAII7
		+"&oAII6="+oAII6
		+"&oAII5="+oAII5
		+"&oAII4="+oAII4
		+"&oAII3="+oAII3
		+"&oAII2="+oAII2
		+"&oAII1="+oAII1
		+"&oADS8="+oADS8
		+"&oADS7="+oADS7
		+"&oADS6="+oADS6
		+"&oADS5="+oADS5
		+"&oADS4="+oADS4
		+"&oADS3="+oADS3
		+"&oADS2="+oADS2
		+"&oADS1="+oADS1
		+"&oADI8="+oADI8
		+"&oADI7="+oADI7
		+"&oADI6="+oADI6
		+"&oADI5="+oADI5
		+"&oADI4="+oADI4
		+"&oADI3="+oADI3
		+"&oADI2="+oADI2
		+"&oADI1="+oADI1
		+"&oIIS8="+oIIS8
		+"&oIIS7="+oIIS7
		+"&oIIS6="+oIIS6
		+"&oIIS5="+oIIS5
		+"&oIIS4="+oIIS4
		+"&oIIS3="+oIIS3
		+"&oIIS2="+oIIS2
		+"&oIIS1="+oIIS1
		+"&oIII8="+oIII8
		+"&oIII7="+oIII7
		+"&oIII6="+oIII6
		+"&oIII5="+oIII5
		+"&oIII4="+oIII4
		+"&oIII3="+oIII3
		+"&oIII2="+oIII2
		+"&oIII1="+oIII1
		+"&oIDS8="+oIDS8
		+"&oIDS7="+oIDS7
		+"&oIDS6="+oIDS6
		+"&oIDS5="+oIDS5
		+"&oIDS4="+oIDS4
		+"&oIDS3="+oIDS3
		+"&oIDS2="+oIDS2
		+"&oIDS1="+oIDS1
		+"&oIDI8="+oIDI8
		+"&oIDI7="+oIDI7
		+"&oIDI6="+oIDI6
		+"&oIDI5="+oIDI5
		+"&oIDI4="+oIDI4
		+"&oIDI3="+oIDI3
		+"&oIDI2="+oIDI2
		+"&oIDI1="+oIDI1
		+"&profesional="+profesional,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function eliminarodontologia(id)
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=eliminarodontologia&id="+id,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function dibujarFormularioIngresooficio()
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioIngresooficio",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#divoficio").html(response);
		}
	})
}

function ingresarNuevooficio()
{
	var idOficio=$("#idOficio").val();
	var consulta=$("#consulta").val();
	var nombre=$("#nombre").val();
	var descripcion=$("#descripcion").val();

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=ingresarNuevooficio"
		+"&idOficio="+idOficio
		+"&consulta="+consulta
		+"&nombre="+nombre
		+"&descripcion="+descripcion,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			//alert(response);
            consultarTodosoficio(consulta);
		}
	})
}

function consultarTodosoficio(consulta)
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=consultarTodosoficio&consulta="+consulta,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#divoficio").html(response);
		}
	})
}

function dibujarFormularioModificaroficio(id)
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioModificaroficio&id="+id,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function modificaroficio()
{
	var idOficio=$("#idOficio").val();
	var consulta=$("#consulta").val();
	var nombre=$("#nombre").val();
	var descripcion=$("#descripcion").val();

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=modificaroficio"
		+"&idOficio="+idOficio
		+"&consulta="+consulta
		+"&nombre="+nombre
		+"&descripcion="+descripcion,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function eliminaroficio(id)
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=eliminaroficio&id="+id,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
            consultarTodosoficio(response);
		}
	})
}

function dibujarFormularioIngresopaciente()
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioIngresopaciente",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function ingresarNuevopaciente()
{
	var idPaciente=$("#idPaciente").val();
	var tipoIden=$("#tipoIden").val();
	var nombre1=$("#nombre1").val();
	var nombre2=$("#nombre2").val();
	var apellido1=$("#apellido1").val();
	var apellido2=$("#apellido2").val();
	var fechaNacimiento=$("#fechaNacimiento").val();
	var ciudadNacimiento=$("#ciudadNacimiento").val();
	var genero=$("#genero").val();
	var escolaridad=$("#escolaridad").val();
	var ultAnioApr=$("#ultAnioApr").val();
	var tipoSangre=$("#tipoSangre").val();
	var tipoVinculacion=$("#tipoVinculacion").val();
	var numero=$("#numero").val();
	var direccion=$("#direccion").val();
	var telefono=$("#telefono").val();
	var nombreMadre=$("#nombreMadre").val();
	var ocuMad=$("#ocuMad").val();
	var nombrePad=$("#nombrePad").val();
	var ocuPad=$("#ocuPad").val();
    var selectDep=$("#selectDep").val();
    var zonares=$("#zonares").val();

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=ingresarNuevopaciente"
		+"&idPaciente="+idPaciente
		+"&tipoIden="+tipoIden
		+"&nombre1="+nombre1
		+"&nombre2="+nombre2
		+"&apellido1="+apellido1
		+"&apellido2="+apellido2
		+"&fechaNacimiento="+fechaNacimiento
		+"&ciudadNacimiento="+ciudadNacimiento
		+"&genero="+genero
		+"&escolaridad="+escolaridad
		+"&ultAnioApr="+ultAnioApr
		+"&tipoSangre="+tipoSangre
		+"&tipoVinculacion="+tipoVinculacion
		+"&numero="+numero
		+"&direccion="+direccion
		+"&telefono="+telefono
		+"&nombreMadre="+nombreMadre
		+"&ocuMad="+ocuMad
		+"&nombrePad="+nombrePad
        +"&selectDep="+selectDep
		+"&ocuPad="+ocuPad
        +"&zonares="+zonares,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			alert(response);
		}
	})
}

function consultarTodospaciente()
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=consultarTodospaciente",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function dibujarFormularioModificarpaciente(id)
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioModificarpaciente&id="+id,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function modificarpaciente()
{
	var idPaciente=$("#idPaciente").val();
	var tipoIden=$("#tipoIden").val();
	var nombre1=$("#nombre1").val();
	var nombre2=$("#nombre2").val();
	var apellido1=$("#apellido1").val();
	var apellido2=$("#apellido2").val();
	var fechaNacimiento=$("#fechaNacimiento").val();
	var ciudadNacimiento=$("#ciudadNacimiento").val();
	var genero=$("#genero").val();
	var escolaridad=$("#escolaridad").val();
	var ultAnioApr=$("#ultAnioApr").val();
	var tipoSangre=$("#tipoSangre").val();
	var tipoVinculacion=$("#tipoVinculacion").val();
	var numero=$("#numero").val();
	var direccion=$("#direccion").val();
	var telefono=$("#telefono").val();
	var nombreMadre=$("#nombreMadre").val();
	var ocuMad=$("#ocuMad").val();
	var nombrePad=$("#nombrePad").val();
	var ocuPad=$("#ocuPad").val();
    var municipio=$("#departamento").val();
    
    //alert(municipio);
    
	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=modificarpaciente"
		+"&idPaciente="+idPaciente
		+"&tipoIden="+tipoIden
		+"&nombre1="+nombre1
		+"&nombre2="+nombre2
		+"&apellido1="+apellido1
		+"&apellido2="+apellido2
		+"&fechaNacimiento="+fechaNacimiento
		+"&ciudadNacimiento="+ciudadNacimiento
		+"&genero="+genero
		+"&escolaridad="+escolaridad
		+"&ultAnioApr="+ultAnioApr
		+"&tipoSangre="+tipoSangre
		+"&tipoVinculacion="+tipoVinculacion
		+"&numero="+numero
		+"&direccion="+direccion
		+"&telefono="+telefono
		+"&nombreMadre="+nombreMadre
		+"&ocuMad="+ocuMad
		+"&nombrePad="+nombrePad
        +"&municipio="+municipio
		+"&ocuPad="+ocuPad,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			alert(response);
		}
	})
}

function eliminarpaciente(id)
{
    if (confirm("¿Desea eliminar éste paciente?"))
    {
        $.ajax({
    		type:"POST",
    		url:"librerias/funciones.php?accion=eliminarpaciente&id="+id,
    		dataType:"text",
    		data:$(this).serialize(),
    		success:function(response){
    			$("#main").html(response);
    		}
    	})
    }
}

function dibujarFormularioIngresopsicologia()
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioIngresopsicologia",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#zona_panel").html(response);
		}
	})
}

function ingresarNuevopsicologia()
{
	var idPsicologia=$("#idPsicologia").val();
	var consulta=$("#consulta").val();
	var desPsi=$("#desPsi").val();
	var traRec=$("#traRec").val();
	var antEmb=$("#antEmb").val();
	var antPar=$("#antPar").val();
	var antDesPsi=$("#antDesPsi").val();
	var antDesPsi2=$("#antDesPsi2").val();
	var factNos=$("#factNos").val();
	var priInf=$("#priInf").val();
	var segInf=$("#segInf").val();
	var pub=$("#pub").val();
	var ado=$("#ado").val();
	var fam=$("#fam").val();
	var relHer=$("#relHer").val();
	var actAcu=$("#actAcu").val();
	var conAcu=$("#conAcu").val();
	var expFam=$("#expFam").val();
	var diaFam=$("#diaFam").val();
	var observaciones=$("#observaciones").val();
	var conPsiObt=$("#conPsiObt").val();
	var entSem=$("#entSem").val();
	var pruDesMad=$("#pruDesMad").val();
	var otrPru2=$("#otrPru2").val();
	var concepto=$("#concepto").val();
	var profesional=$("#profesional").val();
	var diag1=$("#diag1").val();
	var diag2=$("#diag2").val();
	var diag3=$("#diag3").val();

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=ingresarNuevopsicologia"
		+"&idPsicologia="+idPsicologia
		+"&consulta="+consulta
		+"&desPsi="+desPsi
		+"&traRec="+traRec
		+"&antEmb="+antEmb
		+"&antPar="+antPar
		+"&antDesPsi="+antDesPsi
		+"&antDesPsi2="+antDesPsi2
		+"&factNos="+factNos
		+"&priInf="+priInf
		+"&segInf="+segInf
		+"&pub="+pub
		+"&ado="+ado
		+"&fam="+fam
		+"&relHer="+relHer
		+"&actAcu="+actAcu
		+"&conAcu="+conAcu
		+"&expFam="+expFam
		+"&diaFam="+diaFam
		+"&observaciones="+observaciones
		+"&conPsiObt="+conPsiObt
		+"&entSem="+entSem
		+"&pruDesMad="+pruDesMad
		+"&otrPru2="+otrPru2
		+"&concepto="+concepto
		+"&profesional="+profesional
		+"&diag1="+diag1
		+"&diag2="+diag2
		+"&diag3="+diag3,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			alert(response);
            consultarCitasDia();
		}
	})
}

function consultarTodospsicologia()
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=consultarTodospsicologia",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#zona_panel").html(response);
		}
	})
}

function dibujarFormularioModificarpsicologia(id)
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioModificarpsicologia&id="+id,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#zona_panel").html(response);
		}
	})
}

function modificarpsicologia()
{
	var idPsicologia=$("#idPsicologia").val();
	var consulta=$("#consulta").val();
	var desPsi=$("#desPsi").val();
	var traRec=$("#traRec").val();
	var antEmb=$("#antEmb").val();
	var antPar=$("#antPar").val();
	var antDesPsi=$("#antDesPsi").val();
	var antDesPsi2=$("#antDesPsi2").val();
	var factNos=$("#factNos").val();
	var priInf=$("#priInf").val();
	var segInf=$("#segInf").val();
	var pub=$("#pub").val();
	var ado=$("#ado").val();
	var fam=$("#fam").val();
	var relHer=$("#relHer").val();
	var actAcu=$("#actAcu").val();
	var conAcu=$("#conAcu").val();
	var expFam=$("#expFam").val();
	var diaFam=$("#diaFam").val();
	var observaciones=$("#observaciones").val();
	var conPsiObt=$("#conPsiObt").val();
	var entSem=$("#entSem").val();
	var pruDesMad=$("#pruDesMad").val();
	var otrPru2=$("#otrPru2").val();
	var concepto=$("#concepto").val();
	var profesional=$("#profesional").val();
	var diag1=$("#diag1").val();
	var diag2=$("#diag2").val();
	var diag3=$("#diag3").val();

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=modificarpsicologia"
		+"&idPsicologia="+idPsicologia
		+"&consulta="+consulta
		+"&desPsi="+desPsi
		+"&traRec="+traRec
		+"&antEmb="+antEmb
		+"&antPar="+antPar
		+"&antDesPsi="+antDesPsi
		+"&antDesPsi2="+antDesPsi2
		+"&factNos="+factNos
		+"&priInf="+priInf
		+"&segInf="+segInf
		+"&pub="+pub
		+"&ado="+ado
		+"&fam="+fam
		+"&relHer="+relHer
		+"&actAcu="+actAcu
		+"&conAcu="+conAcu
		+"&expFam="+expFam
		+"&diaFam="+diaFam
		+"&observaciones="+observaciones
		+"&conPsiObt="+conPsiObt
		+"&entSem="+entSem
		+"&pruDesMad="+pruDesMad
		+"&otrPru2="+otrPru2
		+"&concepto="+concepto
		+"&profesional="+profesional
		+"&diag1="+diag1
		+"&diag2="+diag2
		+"&diag3="+diag3,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#zona_panel").html(response);
		}
	})
}

function eliminarpsicologia(id)
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=eliminarpsicologia&id="+id,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#zona_panel").html(response);
		}
	})
}

function dibujarFormularioIngresorol()
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioIngresorol",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function ingresarNuevorol()
{
	var idRol=$("#idRol").val();
	var nombre=$("#nombre").val();

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=ingresarNuevorol"
		+"&idRol="+idRol
		+"&nombre="+nombre,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function consultarTodosrol()
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=consultarTodosrol",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function dibujarFormularioModificarrol(id)
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioModificarrol&id="+id,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function modificarrol()
{
	var idRol=$("#idRol").val();
	var nombre=$("#nombre").val();

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=modificarrol"
		+"&idRol="+idRol
		+"&nombre="+nombre,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function eliminarrol(id)
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=eliminarrol&id="+id,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function dibujarFormularioIngresotrabajosocial()
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioIngresotrabajosocial",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#zona_panel").html(response);
		}
	})
}

function ingresarNuevotrabajosocial()
{
	var idTrabajoSocial=$("#idTrabajoSocial").val();
	var consulta=$("#consulta").val();
	var relFamDecTom=$("#relFamDecTom").val();
	var relFamExpAfe=$("#relFamExpAfe").val();
	var relFamExpAfePadHij=$("#relFamExpAfePadHij").val();
	var relFamMotCon=$("#relFamMotCon").val();
	var relFamExpCon=$("#relFamExpCon").val();
	var relFamComFal=$("#relFamComFal").val();
	var relFamSan=$("#relFamSan").val();
	var relFamActTieLib=$("#relFamActTieLib").val();
	var genograma=$("#genograma").val();
	var obsGen=$("#obsGen").val();
	var eveVivFamUltAni1=$("#eveVivFamUltAni1").val();
	var eveVivFamUltAni2=$("#eveVivFamUltAni2").val();
	var eveVivFamUltAni3=$("#eveVivFamUltAni3").val();
	var eveVivFamUltAni4=$("#eveVivFamUltAni4").val();
	var eveVivFamUltAni5=$("#eveVivFamUltAni5").val();
	var eveVivFamUltAni6=$("#eveVivFamUltAni6").val();
	var eveVivFamUltAni7=$("#eveVivFamUltAni7").val();
	var eveVivFamUltAni8=$("#eveVivFamUltAni8").val();
	var eveVivFamUltAni9=$("#eveVivFamUltAni9").val();
	var eveVivFamUltAni10=$("#eveVivFamUltAni10").val();
	var eveVivFamUltAni11=$("#eveVivFamUltAni11").val();
	var eveVivFamUltAni12=$("#eveVivFamUltAni12").val();
	var eveVivFamUltAni13=$("#eveVivFamUltAni13").val();
	var eveVivFamUltAni14=$("#eveVivFamUltAni14").val();
	var eveVivFamUltAni15=$("#eveVivFamUltAni15").val();
	var eveVivFamUltAni16=$("#eveVivFamUltAni16").val();
	var eveVivFamUltAni17=$("#eveVivFamUltAni17").val();
	var eveVivFamUltAni18=$("#eveVivFamUltAni18").val();
	var eveVivFamUltAni19=$("#eveVivFamUltAni19").val();
	var eveVivFamUltAni20=$("#eveVivFamUltAni20").val();
	var eveVivFamUltAni21=$("#eveVivFamUltAni21").val();
	var eveVivFamUltAni22=$("#eveVivFamUltAni22").val();
	var eveVivFamUltAni23=$("#eveVivFamUltAni23").val();
	var eveVivFamUltAni24=$("#eveVivFamUltAni24").val();
	var dinRelFamA=$("#dinRelFamA").val();
	var dinRelFamB=$("#dinRelFamB").val();
	var crit1=$("#crit1").val();
	var crit2=$("#crit2").val();
	var crit3=$("#crit3").val();
	var crit4=$("#crit4").val();
	var crit5=$("#crit5").val();
	var crit6=$("#crit6").val();
	var crit7=$("#crit7").val();
	var crit8=$("#crit8").val();
	var crit9=$("#crit9").val();
	var crit10=$("#crit10").val();
	var crit11=$("#crit11").val();
	var crit12=$("#crit12").val();
	var crit13=$("#crit13").val();
	var crit14=$("#crit14").val();
	var crit15=$("#crit15").val();
	var crit16=$("#crit16").val();
	var crit17=$("#crit17").val();
	var factGen=$("#factGen").val();
	var factVul=$("#factVul").val();
	var aspHabTipBar=$("#aspHabTipBar").val();
	var aspHabSerTra=$("#aspHabSerTra").val();
	var aspHabEst=$("#aspHabEst").val();
	var aspHabTipViv=$("#aspHabTipViv").val();
	var aspHabDes=$("#aspHabDes").val();
	var aspHabTen=$("#aspHabTen").val();
	var aspHabSer=$("#aspHabSer").val();
	var aspHabLim=$("#aspHabLim").val();
	var conEcoResObl=$("#conEcoResObl").val();
	var conEcoIngMen=$("#conEcoIngMen").val();
	var concepto=$("#concepto").val();
	var plaTraObj=$("#plaTraObj").val();
	var plaTraAct=$("#plaTraAct").val();
	var plaTraMet=$("#plaTraMet").val();
	var plaTraObj2=$("#plaTraObj2").val();
	var plaTraAct2=$("#plaTraAct2").val();
	var plaTraMet2=$("#plaTraMet2").val();
	var profesional=$("#profesional").val();
	var diag1=$("#diag1").val();
	var diag2=$("#diag2").val();
	var diag3=$("#diag3").val();

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=ingresarNuevotrabajosocial"
		+"&idTrabajoSocial="+idTrabajoSocial
		+"&consulta="+consulta
		+"&relFamDecTom="+relFamDecTom
		+"&relFamExpAfe="+relFamExpAfe
		+"&relFamExpAfePadHij="+relFamExpAfePadHij
		+"&relFamMotCon="+relFamMotCon
		+"&relFamExpCon="+relFamExpCon
		+"&relFamComFal="+relFamComFal
		+"&relFamSan="+relFamSan
		+"&relFamActTieLib="+relFamActTieLib
		+"&genograma="+genograma
		+"&obsGen="+obsGen
		+"&eveVivFamUltAni1="+eveVivFamUltAni1
		+"&eveVivFamUltAni2="+eveVivFamUltAni2
		+"&eveVivFamUltAni3="+eveVivFamUltAni3
		+"&eveVivFamUltAni4="+eveVivFamUltAni4
		+"&eveVivFamUltAni5="+eveVivFamUltAni5
		+"&eveVivFamUltAni6="+eveVivFamUltAni6
		+"&eveVivFamUltAni7="+eveVivFamUltAni7
		+"&eveVivFamUltAni8="+eveVivFamUltAni8
		+"&eveVivFamUltAni9="+eveVivFamUltAni9
		+"&eveVivFamUltAni10="+eveVivFamUltAni10
		+"&eveVivFamUltAni11="+eveVivFamUltAni11
		+"&eveVivFamUltAni12="+eveVivFamUltAni12
		+"&eveVivFamUltAni13="+eveVivFamUltAni13
		+"&eveVivFamUltAni14="+eveVivFamUltAni14
		+"&eveVivFamUltAni15="+eveVivFamUltAni15
		+"&eveVivFamUltAni16="+eveVivFamUltAni16
		+"&eveVivFamUltAni17="+eveVivFamUltAni17
		+"&eveVivFamUltAni18="+eveVivFamUltAni18
		+"&eveVivFamUltAni19="+eveVivFamUltAni19
		+"&eveVivFamUltAni20="+eveVivFamUltAni20
		+"&eveVivFamUltAni21="+eveVivFamUltAni21
		+"&eveVivFamUltAni22="+eveVivFamUltAni22
		+"&eveVivFamUltAni23="+eveVivFamUltAni23
		+"&eveVivFamUltAni24="+eveVivFamUltAni24
		+"&dinRelFamA="+dinRelFamA
		+"&dinRelFamB="+dinRelFamB
		+"&crit1="+crit1
		+"&crit2="+crit2
		+"&crit3="+crit3
		+"&crit4="+crit4
		+"&crit5="+crit5
		+"&crit6="+crit6
		+"&crit7="+crit7
		+"&crit8="+crit8
		+"&crit9="+crit9
		+"&crit10="+crit10
		+"&crit11="+crit11
		+"&crit12="+crit12
		+"&crit13="+crit13
		+"&crit14="+crit14
		+"&crit15="+crit15
		+"&crit16="+crit16
		+"&crit17="+crit17
		+"&factGen="+factGen
		+"&factVul="+factVul
		+"&aspHabTipBar="+aspHabTipBar
		+"&aspHabSerTra="+aspHabSerTra
		+"&aspHabEst="+aspHabEst
		+"&aspHabTipViv="+aspHabTipViv
		+"&aspHabDes="+aspHabDes
		+"&aspHabTen="+aspHabTen
		+"&aspHabSer="+aspHabSer
		+"&aspHabLim="+aspHabLim
		+"&conEcoResObl="+conEcoResObl
		+"&conEcoIngMen="+conEcoIngMen
		+"&concepto="+concepto
		+"&plaTraObj="+plaTraObj
		+"&plaTraAct="+plaTraAct
		+"&plaTraMet="+plaTraMet
		+"&plaTraObj2="+plaTraObj2
		+"&plaTraAct2="+plaTraAct2
		+"&plaTraMet2="+plaTraMet2
		+"&profesional="+profesional
		+"&diag1="+diag1
		+"&diag2="+diag2
		+"&diag3="+diag3,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			alert(response);
		}
	})
}

function consultarTodostrabajosocial()
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=consultarTodostrabajosocial",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#zona_panel").html(response);
		}
	})
}

function dibujarFormularioModificartrabajosocial(id)
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioModificartrabajosocial&id="+id,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#zona_panel").html(response);
		}
	})
}

function modificartrabajosocial()
{
	var idTrabajoSocial=$("#idTrabajoSocial").val();
	var consulta=$("#consulta").val();
	var relFamDecTom=$("#relFamDecTom").val();
	var relFamExpAfe=$("#relFamExpAfe").val();
	var relFamExpAfePadHij=$("#relFamExpAfePadHij").val();
	var relFamMotCon=$("#relFamMotCon").val();
	var relFamExpCon=$("#relFamExpCon").val();
	var relFamComFal=$("#relFamComFal").val();
	var relFamSan=$("#relFamSan").val();
	var relFamActTieLib=$("#relFamActTieLib").val();
	var genograma=$("#genograma").val();
	var obsGen=$("#obsGen").val();
	var eveVivFamUltAni1=$("#eveVivFamUltAni1").val();
	var eveVivFamUltAni2=$("#eveVivFamUltAni2").val();
	var eveVivFamUltAni3=$("#eveVivFamUltAni3").val();
	var eveVivFamUltAni4=$("#eveVivFamUltAni4").val();
	var eveVivFamUltAni5=$("#eveVivFamUltAni5").val();
	var eveVivFamUltAni6=$("#eveVivFamUltAni6").val();
	var eveVivFamUltAni7=$("#eveVivFamUltAni7").val();
	var eveVivFamUltAni8=$("#eveVivFamUltAni8").val();
	var eveVivFamUltAni9=$("#eveVivFamUltAni9").val();
	var eveVivFamUltAni10=$("#eveVivFamUltAni10").val();
	var eveVivFamUltAni11=$("#eveVivFamUltAni11").val();
	var eveVivFamUltAni12=$("#eveVivFamUltAni12").val();
	var eveVivFamUltAni13=$("#eveVivFamUltAni13").val();
	var eveVivFamUltAni14=$("#eveVivFamUltAni14").val();
	var eveVivFamUltAni15=$("#eveVivFamUltAni15").val();
	var eveVivFamUltAni16=$("#eveVivFamUltAni16").val();
	var eveVivFamUltAni17=$("#eveVivFamUltAni17").val();
	var eveVivFamUltAni18=$("#eveVivFamUltAni18").val();
	var eveVivFamUltAni19=$("#eveVivFamUltAni19").val();
	var eveVivFamUltAni20=$("#eveVivFamUltAni20").val();
	var eveVivFamUltAni21=$("#eveVivFamUltAni21").val();
	var eveVivFamUltAni22=$("#eveVivFamUltAni22").val();
	var eveVivFamUltAni23=$("#eveVivFamUltAni23").val();
	var eveVivFamUltAni24=$("#eveVivFamUltAni24").val();
	var dinRelFamA=$("#dinRelFamA").val();
	var dinRelFamB=$("#dinRelFamB").val();
	var crit1=$("#crit1").val();
	var crit2=$("#crit2").val();
	var crit3=$("#crit3").val();
	var crit4=$("#crit4").val();
	var crit5=$("#crit5").val();
	var crit6=$("#crit6").val();
	var crit7=$("#crit7").val();
	var crit8=$("#crit8").val();
	var crit9=$("#crit9").val();
	var crit10=$("#crit10").val();
	var crit11=$("#crit11").val();
	var crit12=$("#crit12").val();
	var crit13=$("#crit13").val();
	var crit14=$("#crit14").val();
	var crit15=$("#crit15").val();
	var crit16=$("#crit16").val();
	var crit17=$("#crit17").val();
	var factGen=$("#factGen").val();
	var factVul=$("#factVul").val();
	var aspHabTipBar=$("#aspHabTipBar").val();
	var aspHabSerTra=$("#aspHabSerTra").val();
	var aspHabEst=$("#aspHabEst").val();
	var aspHabTipViv=$("#aspHabTipViv").val();
	var aspHabDes=$("#aspHabDes").val();
	var aspHabTen=$("#aspHabTen").val();
	var aspHabSer=$("#aspHabSer").val();
	var aspHabLim=$("#aspHabLim").val();
	var conEcoResObl=$("#conEcoResObl").val();
	var conEcoIngMen=$("#conEcoIngMen").val();
	var concepto=$("#concepto").val();
	var plaTraObj=$("#plaTraObj").val();
	var plaTraAct=$("#plaTraAct").val();
	var plaTraMet=$("#plaTraMet").val();
	var plaTraObj2=$("#plaTraObj2").val();
	var plaTraAct2=$("#plaTraAct2").val();
	var plaTraMet2=$("#plaTraMet2").val();
	var profesional=$("#profesional").val();
	var diag1=$("#diag1").val();
	var diag2=$("#diag2").val();
	var diag3=$("#diag3").val();

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=modificartrabajosocial"
		+"&idTrabajoSocial="+idTrabajoSocial
		+"&consulta="+consulta
		+"&relFamDecTom="+relFamDecTom
		+"&relFamExpAfe="+relFamExpAfe
		+"&relFamExpAfePadHij="+relFamExpAfePadHij
		+"&relFamMotCon="+relFamMotCon
		+"&relFamExpCon="+relFamExpCon
		+"&relFamComFal="+relFamComFal
		+"&relFamSan="+relFamSan
		+"&relFamActTieLib="+relFamActTieLib
		+"&genograma="+genograma
		+"&obsGen="+obsGen
		+"&eveVivFamUltAni1="+eveVivFamUltAni1
		+"&eveVivFamUltAni2="+eveVivFamUltAni2
		+"&eveVivFamUltAni3="+eveVivFamUltAni3
		+"&eveVivFamUltAni4="+eveVivFamUltAni4
		+"&eveVivFamUltAni5="+eveVivFamUltAni5
		+"&eveVivFamUltAni6="+eveVivFamUltAni6
		+"&eveVivFamUltAni7="+eveVivFamUltAni7
		+"&eveVivFamUltAni8="+eveVivFamUltAni8
		+"&eveVivFamUltAni9="+eveVivFamUltAni9
		+"&eveVivFamUltAni10="+eveVivFamUltAni10
		+"&eveVivFamUltAni11="+eveVivFamUltAni11
		+"&eveVivFamUltAni12="+eveVivFamUltAni12
		+"&eveVivFamUltAni13="+eveVivFamUltAni13
		+"&eveVivFamUltAni14="+eveVivFamUltAni14
		+"&eveVivFamUltAni15="+eveVivFamUltAni15
		+"&eveVivFamUltAni16="+eveVivFamUltAni16
		+"&eveVivFamUltAni17="+eveVivFamUltAni17
		+"&eveVivFamUltAni18="+eveVivFamUltAni18
		+"&eveVivFamUltAni19="+eveVivFamUltAni19
		+"&eveVivFamUltAni20="+eveVivFamUltAni20
		+"&eveVivFamUltAni21="+eveVivFamUltAni21
		+"&eveVivFamUltAni22="+eveVivFamUltAni22
		+"&eveVivFamUltAni23="+eveVivFamUltAni23
		+"&eveVivFamUltAni24="+eveVivFamUltAni24
		+"&dinRelFamA="+dinRelFamA
		+"&dinRelFamB="+dinRelFamB
		+"&crit1="+crit1
		+"&crit2="+crit2
		+"&crit3="+crit3
		+"&crit4="+crit4
		+"&crit5="+crit5
		+"&crit6="+crit6
		+"&crit7="+crit7
		+"&crit8="+crit8
		+"&crit9="+crit9
		+"&crit10="+crit10
		+"&crit11="+crit11
		+"&crit12="+crit12
		+"&crit13="+crit13
		+"&crit14="+crit14
		+"&crit15="+crit15
		+"&crit16="+crit16
		+"&crit17="+crit17
		+"&factGen="+factGen
		+"&factVul="+factVul
		+"&aspHabTipBar="+aspHabTipBar
		+"&aspHabSerTra="+aspHabSerTra
		+"&aspHabEst="+aspHabEst
		+"&aspHabTipViv="+aspHabTipViv
		+"&aspHabDes="+aspHabDes
		+"&aspHabTen="+aspHabTen
		+"&aspHabSer="+aspHabSer
		+"&aspHabLim="+aspHabLim
		+"&conEcoResObl="+conEcoResObl
		+"&conEcoIngMen="+conEcoIngMen
		+"&concepto="+concepto
		+"&plaTraObj="+plaTraObj
		+"&plaTraAct="+plaTraAct
		+"&plaTraMet="+plaTraMet
		+"&plaTraObj2="+plaTraObj2
		+"&plaTraAct2="+plaTraAct2
		+"&plaTraMet2="+plaTraMet2
		+"&profesional="+profesional
		+"&diag1="+diag1
		+"&diag2="+diag2
		+"&diag3="+diag3,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#zona_panel").html(response);
		}
	})
}

function eliminartrabajosocial(id)
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=eliminartrabajosocial&id="+id,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#zona_panel").html(response);
		}
	})
}

function dibujarFormularioIngresousuario()
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioIngresousuario",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function ingresarNuevousuario()
{
	var idUsuario=$("#idUsuario").val();
	var nombre1=$("#nombre1").val();
	var nombre2=$("#nombre2").val();
	var apellido1=$("#apellido1").val();
	var apellido2=$("#apellido2").val();
	var rol=$("#rol").val();
	var tarjeta=$("#tarjeta").val();
	var contrasena=$("#contrasena").val();

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=ingresarNuevousuario"
		+"&idUsuario="+idUsuario
		+"&nombre1="+nombre1
		+"&nombre2="+nombre2
		+"&apellido1="+apellido1
		+"&apellido2="+apellido2
		+"&rol="+rol
		+"&tarjeta="+tarjeta
		+"&contrasena="+contrasena,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			alert(response);
		}
	})
}

function consultarTodosusuario()
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=consultarTodosusuario",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}


function consultarTodosCups()
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=listarCups",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function dibujarFormularioModificarCups(id)
{
	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioModificarCups&id="+id,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
	
}


function dibujarFormularioModificarusuario(id)
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioModificarusuario&id="+id,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function modificarcups()
{
	var idCups=$("#idCups").val();
	var codigo=$("#codigo").val();
	var nombre=$("#nombre").val();
	
	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=modificarcups"
		+"&idCups="+idCups
		+"&codigo="+codigo
		+"&nombre="+nombre,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			alert(response);
		}
	})
}


function eliminarCups(id)
{
    if (confirm("¿Desea eliminar éste Cups?"))
    {
        $.ajax({
    		type:"POST",
    		url:"librerias/funciones.php?accion=eliminarCups&id="+id,
    		dataType:"text",
    		data:$(this).serialize(),
    		success:function(response){
    			$("#main").html(response);
    		}
    	})
    }
}

function ingresarNuevoCups()
{
	var nombre=$("#nombre").val();
	var codigo=$("#codigo").val();
	
	$.ajax({
    		type:"POST",
    		url:"librerias/funciones.php?accion=ingresarNuevoCups&codigo="+codigo+"&nombre="+nombre,
    		dataType:"text",
    		data:$(this).serialize(),
    		success:function(response){
    			$("#main").html(response);
    		}
    	})
}
function modificarusuario()
{
	var idUsuario=$("#idUsuario").val();
	var nombre1=$("#nombre1").val();
	var nombre2=$("#nombre2").val();
	var apellido1=$("#apellido1").val();
	var apellido2=$("#apellido2").val();
	var rol=$("#rol").val();
	var tarjeta=$("#tarjeta").val();
	var contrasena=$("#contrasena").val();

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=modificarusuario"
		+"&idUsuario="+idUsuario
		+"&nombre1="+nombre1
		+"&nombre2="+nombre2
		+"&apellido1="+apellido1
		+"&apellido2="+apellido2
		+"&rol="+rol
		+"&tarjeta="+tarjeta
		+"&contrasena="+contrasena,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			alert(response);
		}
	})
}

function eliminarusuario(id)
{
    if (confirm("¿Desea eliminar éste usuario?"))
    {
        $.ajax({
    		type:"POST",
    		url:"librerias/funciones.php?accion=eliminarusuario&id="+id,
    		dataType:"text",
    		data:$(this).serialize(),
    		success:function(response){
    			$("#main").html(response);
    		}
    	})
    }
}

function dibujarFormularioIngresovaloracionmedica()
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioIngresovaloracionmedica",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function ingresarNuevovaloracionmedica()
{
	var idValoracionMedica=$("#idValoracionMedica").val();
	var consulta=$("#consulta").val();
	var durEmb=$("#durEmb").val();
	var patDurEmb=$("#patDurEmb").val();
	var droMedIng=$("#droMedIng").val();
	var nacimiento=$("#nacimiento").val();
	var donde=$("#donde").val();
	var llanto=$("#llanto").val();
	var cianosis=$("#cianosis").val();
	var apgar=$("#apgar").val();
	var peso=$("#peso").val();
	var talla=$("#talla").val();
	var patPer=$("#patPer").val();
	var patDurPriAnio=$("#patDurPriAnio").val();
	var recTraAct=$("#recTraAct").val();
	var hospitalizaciones=$("#hospitalizaciones").val();
	var tiempo=$("#tiempo").val();
	var diagHosp=$("#diagHosp").val();
	var lacMat=$("#lacMat").val();
	var tiempoLact=$("#tiempoLact").val();
	var lecCom=$("#lecCom").val();
	var iniDieCom=$("#iniDieCom").val();
	var intAli=$("#intAli").val();
	var antQui=$("#antQui").val();
	var antTra=$("#antTra").val();
	var intAle=$("#intAle").val();
	var exaInt=$("#exaInt").val();
	var inmunizaciones=$("#inmunizaciones").val();
	var asma=$("#asma").val();
	var malformaciones=$("#malformaciones").val();
	var alergias=$("#alergias").val();
	var diabetes=$("#diabetes").val();
	var rsm=$("#rsm").val();
	var epilepsia=$("#epilepsia").val();
	var proLenguaje=$("#proLenguaje").val();
	var mentales=$("#mentales").val();
	var otras=$("#otras").val();
	var fisPeso=$("#fisPeso").val();
	var fistalla=$("#fistalla").val();
	var fisTA=$("#fisTA").val();
	var fisCef=$("#fisCef").val();
	var fisFC=$("#fisFC").val();
	var fisPulso=$("#fisPulso").val();
	var fisForma=$("#fisForma").val();
	var fisFaciales=$("#fisFaciales").val();
	var fisOjos=$("#fisOjos").val();
	var orlCavOral=$("#orlCavOral").val();
	var orlFaringe=$("#orlFaringe").val();
	var orlAuriculares=$("#orlAuriculares").val();
	var orlOido=$("#orlOido").val();
	var orlNariz=$("#orlNariz").val();
	var orlCuello=$("#orlCuello").val();
	var toraxConf=$("#toraxConf").val();
	var toraxCora=$("#toraxCora").val();
	var toraxBronPul=$("#toraxBronPul").val();
	var abdomen=$("#abdomen").val();
	var genExt=$("#genExt").val();
	var colVer=$("#colVer").val();
	var extremidades=$("#extremidades").val();
	var piel=$("#piel").val();
	var neuEsfMen=$("#neuEsfMen").val();
	var neuEsfMot=$("#neuEsfMot").val();
	var neuTonMus=$("#neuTonMus").val();
	var neuEqu=$("#neuEqu").val();
	var neuMar=$("#neuMar").val();
	var neuSen=$("#neuSen").val();
	var neuParCra=$("#neuParCra").val();
	var refPup=$("#refPup").val();
	var refTen=$("#refTen").val();
	var refAno=$("#refAno").val();
	var observaciones=$("#observaciones").val();
	var diagnostico=$("#diagnostico").val();
	var impDiag=$("#impDiag").val();
	var profesional=$("#profesional").val();

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=ingresarNuevovaloracionmedica"
		+"&idValoracionMedica="+idValoracionMedica
		+"&consulta="+consulta
		+"&durEmb="+durEmb
		+"&patDurEmb="+patDurEmb
		+"&droMedIng="+droMedIng
		+"&nacimiento="+nacimiento
		+"&donde="+donde
		+"&llanto="+llanto
		+"&cianosis="+cianosis
		+"&apgar="+apgar
		+"&peso="+peso
		+"&talla="+talla
		+"&patPer="+patPer
		+"&patDurPriAnio="+patDurPriAnio
		+"&recTraAct="+recTraAct
		+"&hospitalizaciones="+hospitalizaciones
		+"&tiempo="+tiempo
		+"&diagHosp="+diagHosp
		+"&lacMat="+lacMat
		+"&tiempoLact="+tiempoLact
		+"&lecCom="+lecCom
		+"&iniDieCom="+iniDieCom
		+"&intAli="+intAli
		+"&antQui="+antQui
		+"&antTra="+antTra
		+"&intAle="+intAle
		+"&exaInt="+exaInt
		+"&inmunizaciones="+inmunizaciones
		+"&asma="+asma
		+"&malformaciones="+malformaciones
		+"&alergias="+alergias
		+"&diabetes="+diabetes
		+"&rsm="+rsm
		+"&epilepsia="+epilepsia
		+"&proLenguaje="+proLenguaje
		+"&mentales="+mentales
		+"&otras="+otras
		+"&fisPeso="+fisPeso
		+"&fistalla="+fistalla
		+"&fisTA="+fisTA
		+"&fisCef="+fisCef
		+"&fisFC="+fisFC
		+"&fisPulso="+fisPulso
		+"&fisForma="+fisForma
		+"&fisFaciales="+fisFaciales
		+"&fisOjos="+fisOjos
		+"&orlCavOral="+orlCavOral
		+"&orlFaringe="+orlFaringe
		+"&orlAuriculares="+orlAuriculares
		+"&orlOido="+orlOido
		+"&orlNariz="+orlNariz
		+"&orlCuello="+orlCuello
		+"&toraxConf="+toraxConf
		+"&toraxCora="+toraxCora
		+"&toraxBronPul="+toraxBronPul
		+"&abdomen="+abdomen
		+"&genExt="+genExt
		+"&colVer="+colVer
		+"&extremidades="+extremidades
		+"&piel="+piel
		+"&neuEsfMen="+neuEsfMen
		+"&neuEsfMot="+neuEsfMot
		+"&neuTonMus="+neuTonMus
		+"&neuEqu="+neuEqu
		+"&neuMar="+neuMar
		+"&neuSen="+neuSen
		+"&neuParCra="+neuParCra
		+"&refPup="+refPup
		+"&refTen="+refTen
		+"&refAno="+refAno
		+"&observaciones="+observaciones
		+"&diagnostico="+diagnostico
		+"&impDiag="+impDiag
		+"&profesional="+profesional,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function consultarTodosvaloracionmedica()
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=consultarTodosvaloracionmedica",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function dibujarFormularioModificarvaloracionmedica(id)
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioModificarvaloracionmedica&id="+id,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function modificarvaloracionmedica()
{
	var idValoracionMedica=$("#idValoracionMedica").val();
	var consulta=$("#consulta").val();
	var durEmb=$("#durEmb").val();
	var patDurEmb=$("#patDurEmb").val();
	var droMedIng=$("#droMedIng").val();
	var nacimiento=$("#nacimiento").val();
	var donde=$("#donde").val();
	var llanto=$("#llanto").val();
	var cianosis=$("#cianosis").val();
	var apgar=$("#apgar").val();
	var peso=$("#peso").val();
	var talla=$("#talla").val();
	var patPer=$("#patPer").val();
	var patDurPriAnio=$("#patDurPriAnio").val();
	var recTraAct=$("#recTraAct").val();
	var hospitalizaciones=$("#hospitalizaciones").val();
	var tiempo=$("#tiempo").val();
	var diagHosp=$("#diagHosp").val();
	var lacMat=$("#lacMat").val();
	var tiempoLact=$("#tiempoLact").val();
	var lecCom=$("#lecCom").val();
	var iniDieCom=$("#iniDieCom").val();
	var intAli=$("#intAli").val();
	var antQui=$("#antQui").val();
	var antTra=$("#antTra").val();
	var intAle=$("#intAle").val();
	var exaInt=$("#exaInt").val();
	var inmunizaciones=$("#inmunizaciones").val();
	var asma=$("#asma").val();
	var malformaciones=$("#malformaciones").val();
	var alergias=$("#alergias").val();
	var diabetes=$("#diabetes").val();
	var rsm=$("#rsm").val();
	var epilepsia=$("#epilepsia").val();
	var proLenguaje=$("#proLenguaje").val();
	var mentales=$("#mentales").val();
	var otras=$("#otras").val();
	var fisPeso=$("#fisPeso").val();
	var fistalla=$("#fistalla").val();
	var fisTA=$("#fisTA").val();
	var fisCef=$("#fisCef").val();
	var fisFC=$("#fisFC").val();
	var fisPulso=$("#fisPulso").val();
	var fisForma=$("#fisForma").val();
	var fisFaciales=$("#fisFaciales").val();
	var fisOjos=$("#fisOjos").val();
	var orlCavOral=$("#orlCavOral").val();
	var orlFaringe=$("#orlFaringe").val();
	var orlAuriculares=$("#orlAuriculares").val();
	var orlOido=$("#orlOido").val();
	var orlNariz=$("#orlNariz").val();
	var orlCuello=$("#orlCuello").val();
	var toraxConf=$("#toraxConf").val();
	var toraxCora=$("#toraxCora").val();
	var toraxBronPul=$("#toraxBronPul").val();
	var abdomen=$("#abdomen").val();
	var genExt=$("#genExt").val();
	var colVer=$("#colVer").val();
	var extremidades=$("#extremidades").val();
	var piel=$("#piel").val();
	var neuEsfMen=$("#neuEsfMen").val();
	var neuEsfMot=$("#neuEsfMot").val();
	var neuTonMus=$("#neuTonMus").val();
	var neuEqu=$("#neuEqu").val();
	var neuMar=$("#neuMar").val();
	var neuSen=$("#neuSen").val();
	var neuParCra=$("#neuParCra").val();
	var refPup=$("#refPup").val();
	var refTen=$("#refTen").val();
	var refAno=$("#refAno").val();
	var observaciones=$("#observaciones").val();
	var diagnostico=$("#diagnostico").val();
	var impDiag=$("#impDiag").val();
	var profesional=$("#profesional").val();

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=modificarvaloracionmedica"
		+"&idValoracionMedica="+idValoracionMedica
		+"&consulta="+consulta
		+"&durEmb="+durEmb
		+"&patDurEmb="+patDurEmb
		+"&droMedIng="+droMedIng
		+"&nacimiento="+nacimiento
		+"&donde="+donde
		+"&llanto="+llanto
		+"&cianosis="+cianosis
		+"&apgar="+apgar
		+"&peso="+peso
		+"&talla="+talla
		+"&patPer="+patPer
		+"&patDurPriAnio="+patDurPriAnio
		+"&recTraAct="+recTraAct
		+"&hospitalizaciones="+hospitalizaciones
		+"&tiempo="+tiempo
		+"&diagHosp="+diagHosp
		+"&lacMat="+lacMat
		+"&tiempoLact="+tiempoLact
		+"&lecCom="+lecCom
		+"&iniDieCom="+iniDieCom
		+"&intAli="+intAli
		+"&antQui="+antQui
		+"&antTra="+antTra
		+"&intAle="+intAle
		+"&exaInt="+exaInt
		+"&inmunizaciones="+inmunizaciones
		+"&asma="+asma
		+"&malformaciones="+malformaciones
		+"&alergias="+alergias
		+"&diabetes="+diabetes
		+"&rsm="+rsm
		+"&epilepsia="+epilepsia
		+"&proLenguaje="+proLenguaje
		+"&mentales="+mentales
		+"&otras="+otras
		+"&fisPeso="+fisPeso
		+"&fistalla="+fistalla
		+"&fisTA="+fisTA
		+"&fisCef="+fisCef
		+"&fisFC="+fisFC
		+"&fisPulso="+fisPulso
		+"&fisForma="+fisForma
		+"&fisFaciales="+fisFaciales
		+"&fisOjos="+fisOjos
		+"&orlCavOral="+orlCavOral
		+"&orlFaringe="+orlFaringe
		+"&orlAuriculares="+orlAuriculares
		+"&orlOido="+orlOido
		+"&orlNariz="+orlNariz
		+"&orlCuello="+orlCuello
		+"&toraxConf="+toraxConf
		+"&toraxCora="+toraxCora
		+"&toraxBronPul="+toraxBronPul
		+"&abdomen="+abdomen
		+"&genExt="+genExt
		+"&colVer="+colVer
		+"&extremidades="+extremidades
		+"&piel="+piel
		+"&neuEsfMen="+neuEsfMen
		+"&neuEsfMot="+neuEsfMot
		+"&neuTonMus="+neuTonMus
		+"&neuEqu="+neuEqu
		+"&neuMar="+neuMar
		+"&neuSen="+neuSen
		+"&neuParCra="+neuParCra
		+"&refPup="+refPup
		+"&refTen="+refTen
		+"&refAno="+refAno
		+"&observaciones="+observaciones
		+"&diagnostico="+diagnostico
		+"&impDiag="+impDiag
		+"&profesional="+profesional,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function eliminarvaloracionmedica(id)
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=eliminarvaloracionmedica&id="+id,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function dibujarFormularioIngresovaloracionocupacional()
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioIngresovaloracionocupacional",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function ingresarNuevovaloracionocupacional()
{
	var idValoracionOcupacional=$("#idValoracionOcupacional").val();
	var consulta=$("#consulta").val();
	var antPsi=$("#antPsi").val();
	var obsNeu=$("#obsNeu").val();
	var tonMus=$("#tonMus").val();
	var intRef=$("#intRef").val();
	var segVis=$("#segVis").val();
	var patFunMov=$("#patFunMov").val();
	var patIntMov=$("#patIntMov").val();
	var cooMotGru=$("#cooMotGru").val();
	var cooMotFin=$("#cooMotFin").val();
	var desOcuRutDia=$("#desOcuRutDia").val();
	var desOcuAutCuid=$("#desOcuAutCuid").val();
	var desOcuParMan=$("#desOcuParMan").val();
	var desOcuDilMan=$("#desOcuDilMan").val();
	var desOcuUsoTieLib=$("#desOcuUsoTieLib").val();
	var desOcuApoNegFam=$("#desOcuApoNegFam").val();
	var diaOcu=$("#diaOcu").val();
	var diagnostico=$("#diagnostico").val();
    var diagnostico2=$("#diag2").val();
    var diagnostico3=$("#diag3").val();
	var proOcupacional=$("#proOcupacional").val();
	var observaciones=$("#observaciones").val();
	var profesional=$("#profesional").val();

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=ingresarNuevovaloracionocupacional"
		+"&idValoracionOcupacional="+idValoracionOcupacional
		+"&consulta="+consulta
		+"&antPsi="+antPsi
		+"&obsNeu="+obsNeu
		+"&tonMus="+tonMus
		+"&intRef="+intRef
		+"&segVis="+segVis
		+"&patFunMov="+patFunMov
		+"&patIntMov="+patIntMov
		+"&cooMotGru="+cooMotGru
		+"&cooMotFin="+cooMotFin
		+"&desOcuRutDia="+desOcuRutDia
		+"&desOcuAutCuid="+desOcuAutCuid
		+"&desOcuParMan="+desOcuParMan
		+"&desOcuDilMan="+desOcuDilMan
		+"&desOcuUsoTieLib="+desOcuUsoTieLib
		+"&desOcuApoNegFam="+desOcuApoNegFam
		+"&diaOcu="+diaOcu
		+"&diagnostico="+diagnostico
        +"&diagnostico="+diagnostico2
        +"&diagnostico="+diagnostico3
		+"&proOcupacional="+proOcupacional
		+"&observaciones="+observaciones
		+"&profesional="+profesional,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			alert(response);
		}
	})
}

function consultarTodosvaloracionocupacional()
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=consultarTodosvaloracionocupacional",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function dibujarFormularioModificarvaloracionocupacional(id)
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioModificarvaloracionocupacional&id="+id,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function modificarvaloracionocupacional()
{
	var idValoracionOcupacional=$("#idValoracionOcupacional").val();
	var consulta=$("#consulta").val();
	var antPsi=$("#antPsi").val();
	var obsNeu=$("#obsNeu").val();
	var tonMus=$("#tonMus").val();
	var intRef=$("#intRef").val();
	var segVis=$("#segVis").val();
	var patFunMov=$("#patFunMov").val();
	var patIntMov=$("#patIntMov").val();
	var cooMotGru=$("#cooMotGru").val();
	var cooMotFin=$("#cooMotFin").val();
	var desOcuRutDia=$("#desOcuRutDia").val();
	var desOcuAutCuid=$("#desOcuAutCuid").val();
	var desOcuParMan=$("#desOcuParMan").val();
	var desOcuDilMan=$("#desOcuDilMan").val();
	var desOcuUsoTieLib=$("#desOcuUsoTieLib").val();
	var desOcuApoNegFam=$("#desOcuApoNegFam").val();
	var diaOcu=$("#diaOcu").val();
	var diagnostico=$("#diagnostico").val();
	var proOcupacional=$("#proOcupacional").val();
	var observaciones=$("#observaciones").val();
	var profesional=$("#profesional").val();

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=modificarvaloracionocupacional"
		+"&idValoracionOcupacional="+idValoracionOcupacional
		+"&consulta="+consulta
		+"&antPsi="+antPsi
		+"&obsNeu="+obsNeu
		+"&tonMus="+tonMus
		+"&intRef="+intRef
		+"&segVis="+segVis
		+"&patFunMov="+patFunMov
		+"&patIntMov="+patIntMov
		+"&cooMotGru="+cooMotGru
		+"&cooMotFin="+cooMotFin
		+"&desOcuRutDia="+desOcuRutDia
		+"&desOcuAutCuid="+desOcuAutCuid
		+"&desOcuParMan="+desOcuParMan
		+"&desOcuDilMan="+desOcuDilMan
		+"&desOcuUsoTieLib="+desOcuUsoTieLib
		+"&desOcuApoNegFam="+desOcuApoNegFam
		+"&diaOcu="+diaOcu
		+"&diagnostico="+diagnostico
		+"&proOcupacional="+proOcupacional
		+"&observaciones="+observaciones
		+"&profesional="+profesional,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function eliminarvaloracionocupacional(id)
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=eliminarvaloracionocupacional&id="+id,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function cargarCiudades(id)
{
    $.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=cargarCiudades&id="+id,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#ciudades").html(response);
		}
	})
}

function salir()
{
    $.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=salir",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			window.location="index.php";
		}
	})
}

function consultarCitasDia()
{
    $.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=consultarCitasDia",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function abrirFormato(formato, id)
{
    $.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=abrirFormato&formato="+formato+"&consulta="+id,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
            consultarTodoscapacitacion(id);
            consultarTodoslaborales(id);
            consultarTodosoficio(id);
            consultarTodosapoyo(id)
            consultarTodosfamilia(id);
		}
	})
}

function agregar(valor,div)
{
    $hay = $("#"+div).val();
    $("#"+div).val($hay+valor);
}

function subirarchivo()
{
    var archivos = document.getElementById("archivo");//Damos el valor del input tipo file
    var archivo = archivos.files; //Obtenemos el valor del input (los arcchivos) en modo de arreglo
    
    //El objeto FormData nos permite crear un formulario pasandole clave/valor para poder enviarlo, este tipo de objeto ya tiene la propiedad multipart/form-data para poder subir archivos
    var data = new FormData();
    
    //Como no sabemos cuantos archivos subira el usuario, iteramos la variable y al
    //objeto de FormData con el metodo "append" le pasamos calve/valor, usamos el indice "i" para
    //que no se repita, si no lo usamos solo tendra el valor de la ultima iteracion
    for(i=0; i<archivo.length; i++){
    data.append('archivo'+i,archivo[i]);
    }
    
    $consulta= $("#consulta").val();
    
    $.ajax({
        url:'subirarchivo.php?consulta='+$consulta, //Url a donde la enviaremos
        type:'POST', //Metodo que usaremos
        contentType:false, //Debe estar en false para que pase el objeto sin procesar
        data:data, //Le pasamos el objeto que creamos con los archivos
        processData:false, //Debe estar en false para que JQuery no procese los datos a enviar
        cache:false //Para que el formulario no guarde cache
        }).done(function(msg){
            $("#genograma").val(msg);
            $("#mostrarimagen").html("<img src=./archivos/"+msg+">");
    });
    
}

function mostrarFormularioGenHC()
{
    $.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=mostrarFormularioGenHC",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
            $("#main").html(response);
		}
	})
}

function ingresarGenHC(interno,usua)
{ 
    if(interno!=1)
    {
        var usuario=$("#usuario").val();
    	var fechaI=$("#fechaI").val();
        var fechaF=$("#fechaF").val();
    }
    else
    {
        var usuario=usua;
    	var fechaI="2014-01-01";
        var fechaF="2025-01-01";
    }
    
    //alert(usuario+"****"+fechaI+"****"+fechaF+"****");
    $.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=ingresarGenHC"
        +"&usuario="+usuario
        +"&fechaI="+fechaI
        +"&fechaF="+fechaF,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
            if(interno!=1)
            {
                $("#main").html(response);
            }
            else
            {
                $("#zonahc").html(response);
            }
		}
	})
}

function dibujarFormularioIngresoevolucion()
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioIngresoevolucion",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function ingresarNuevoevolucion()
{
	var idEvolucion=$("#idEvolucion").val();
	var consulta=$("#consulta").val();
	var evolucion=$("#evolucion").val();
	var diag1=$("#diag1").val();
	var diag2=$("#diag2").val();
	var diag3=$("#diag3").val();
	var sesion=$("#sesion").val();

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=ingresarNuevoevolucion"
		+"&idEvolucion="+idEvolucion
		+"&consulta="+consulta
		+"&evolucion="+evolucion
		+"&diag1="+diag1
		+"&diag2="+diag2
		+"&diag3="+diag3
		+"&sesion="+sesion,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			alert(response);
            consultarCitasDia();
		}
	})
}

function consultarTodosevolucion()
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=consultarTodosevolucion",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function dibujarFormularioModificarevolucion(id)
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=dibujarFormularioModificarevolucion&id="+id,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function modificarevolucion()
{
	var idEvolucion=$("#idEvolucion").val();
	var consulta=$("#consulta").val();
	var evolucion=$("#evolucion").val();
	var diag1=$("#diag1").val();
	var diag2=$("#diag2").val();
	var diag3=$("#diag3").val();
	var sesion=$("#sesion").val();

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=modificarevolucion"
		+"&idEvolucion="+idEvolucion
		+"&consulta="+consulta
		+"&evolucion="+evolucion
		+"&diag1="+diag1
		+"&diag2="+diag2
		+"&diag3="+diag3
		+"&sesion="+sesion,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function eliminarevolucion(id)
{

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=eliminarevolucion&id="+id,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function verDisponibilidad()
{
    var profesional=$("#profesional").val();
	var fecha=$("#fecha").val();
	var hora=$("#hora").val();
    var profesional = profesional.split(" - ");
    
    if(profesional!=0)
    {
        if(fecha!="")
        {
            $.ajax({
        		type:"POST",
        		url:"librerias/funciones.php?accion=verDisponibilidad"
        		+"&profesional="+profesional[0]
        		+"&fecha="+fecha
        		+"&hora="+hora,
        		dataType:"text",
        		data:$(this).serialize(),
        		success:function(response){
        			$("#horariosdisp").html(response);
        		}
        	})
        }
        else
        {
            alert("Seleccione una fecha");
        }
    }
    else
    {
        alert("Seleccione un profesional");
    }
}

function asignarHCM(numero)
{
    if(numero==1)   {$("#hora").val("08:00AM");}
    if(numero==2)   {$("#hora").val("08:15AM");}
    if(numero==3)   {$("#hora").val("08:30AM");}
    if(numero==4)   {$("#hora").val("08:45AM");}
    if(numero==5)   {$("#hora").val("09:00AM");}
    if(numero==6)   {$("#hora").val("09:15AM");}
    if(numero==7)   {$("#hora").val("09:30AM");}
    if(numero==8)   {$("#hora").val("08:45AM");}
    if(numero==9)   {$("#hora").val("10:00AM");}
    if(numero==10)  {$("#hora").val("10:15AM");}
    if(numero==11)  {$("#hora").val("10:30AM");}
    if(numero==12)  {$("#hora").val("10:45AM");}
    if(numero==13)  {$("#hora").val("11:00AM");}
    if(numero==14)  {$("#hora").val("11:15AM");}
    if(numero==15)  {$("#hora").val("11:30AM");}
    if(numero==16)  {$("#hora").val("11:45AM");}
    if(numero==17)  {$("#hora").val("12:00AM");}
    if(numero==18)  {$("#hora").val("12:15AM");}
    if(numero==19)  {$("#hora").val("12:30AM");}
    if(numero==20)  {$("#hora").val("12:45AM");}
    if(numero==21)  {$("#hora").val("01:00PM");}
    if(numero==22)  {$("#hora").val("01:15PM");}
    if(numero==23)  {$("#hora").val("01:30PM");}
    if(numero==24)  {$("#hora").val("01:45PM");}
    if(numero==25)  {$("#hora").val("02:00PM");}
    if(numero==26)  {$("#hora").val("02:15PM");}
    if(numero==27)  {$("#hora").val("02:30PM");}
    if(numero==28)  {$("#hora").val("02:45PM");}
    if(numero==29)  {$("#hora").val("03:00PM");}
    if(numero==30)  {$("#hora").val("03:15PM");}
    if(numero==31)  {$("#hora").val("03:30PM");}
    if(numero==32)  {$("#hora").val("03:45PM");}
    if(numero==33)  {$("#hora").val("04:00PM");}
    if(numero==34)  {$("#hora").val("04:15PM");}
    if(numero==35)  {$("#hora").val("04:30PM");}
    if(numero==36)  {$("#hora").val("04:45PM");}
    if(numero==37)  {$("#hora").val("05:00PM");}
    if(numero==38)  {$("#hora").val("05:15PM");}
    if(numero==39)  {$("#hora").val("05:30PM");}
    if(numero==40)  {$("#hora").val("05:45PM");}
}

function formularioRIPS()
{
    $.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=formularioRIPS",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function generarRIPS()
{
    var entidad=$("#entidad").val();
	var fechaI=$("#fechaI").val();
	var fechaF=$("#fechaF").val();

	$.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=generarRIPS"
		+"&entidad="+entidad
		+"&fechaI="+fechaI
		+"&fechaF="+fechaF,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function existePaciente()
{
    var paciente=$("#paciente").val();

    $.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=existePaciente"
		+"&paciente="+paciente,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
            if(response=="true")
            {
                regimen.disabled = false;  
                eps.disabled = false; 
                tipoConsulta.disabled = false; 
                profesional.disabled = false; 
                fecha.disabled = false; 
                hora.disabled = false; 
                factura.disabled = false; 
                autorizacion.disabled = false; 
                valor.disabled = false; 
                $("#existe_paciente").html("");
            }
            else
            {
                $("#existe_paciente").html("EL paciente no existe ingresero <a href='#' onclick='dibujarFormularioIngresopaciente();return false;'>aquí</a>");
            }
		}
	})
}

function mostrarFormularioReporteMensual()
{
    $.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=mostrarFormularioReporteMensual",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function generarReporteMensual()
{
    var fechai=$("#fechaI").val();
    var fechaf=$("#fechaF").val();
    
    $.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=generarReporteMensual"
		+"&fechaI="+fechaI
		+"&fechaF="+fechaF,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function mostrarFormularioGrafica()
{
    $.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=mostrarFormularioGrafica",
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#main").html(response);
		}
	})
}

function cargarDiagnosticos(input,div)
{
    var  input2 = $("#"+input).val();
    ;
    $.ajax({
		type:"POST",
		url:"librerias/funciones.php?accion=cargarDiagnosticos"
		+"&input="+input2
        +"&nInput="+input,
		dataType:"text",
		data:$(this).serialize(),
		success:function(response){
			$("#"+div).html(response);
            $("#resul"+input).show();
		}
	})
    
}

function colocarDiagnostico(literal,div)
{
    $("#"+div).val(literal);
    $("#resul"+div).hide();
}