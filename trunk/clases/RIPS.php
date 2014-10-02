<?php
include ('../bd/bd.php');
class RIPS
{
	function formularioRIPS()
    {
        $bd=BD::getInstance();
		$result=$bd->extraerDatos("SELECT * FROM eps");
		//$filas = mysql_fetch_array($result);
        include "../pages/rips/formularioRIPS.php";
    }
    
    function generarRIPS($entidad,$fechaI,$fechaF)
    {
        $bd=BD::getInstance();
		
        echo <<<EOT
        <div id="main">
            <div class="full_w">
                <div class="h_title">Archivo RIPS generados</div>   
                <form action="" method="post"> 
EOT;

        //RIPS de Usuarios
        $cantidadArchivoUsuarios=0;
        $result1=$bd->extraerDatos("SELECT distinct paciente FROM consulta WHERE (fecha <= '".$fechaF."' and fecha>='".$fechaI."') AND eps='".$entidad."' AND confirmada=2");
        $usuarios="";
        while($filas1 = mysql_fetch_array($result1))
        {
            
            $result2=$bd->extraerDatos("SELECT * FROM paciente WHERE idPaciente=".$filas1["paciente"]);
            $filas2 = mysql_fetch_array($result2);
            $result3=$bd->extraerDatos("SELECT * FROM consulta WHERE paciente=".$filas1["paciente"]);
            $filas3 = mysql_fetch_array($result3);
            list($Y,$m,$d) = explode("-",$filas2["fechaNacimiento"]);
            $edad =date("md") < $m.$d ? date("Y")-$Y-1 : date("Y")-$Y ;
            $usuarios = $usuarios.$filas2["tipoIden"].",".$filas2["idPaciente"].",".$filas3["eps"].",".$filas3["regimen"].",".$filas2["apellido1"].",".$filas2["apellido2"].",".$filas2["nombre1"].",".$filas2["nombre2"].",".$edad."1,".$filas2["genero"].",".$filas2["departamento"].",".$filas2["ciudadNacimiento"].",".$filas2["zonares"]."\n";
            $cantidadArchivoUsuarios++;
        }
        
        $file=fopen("../rips/US.txt","w+") or die("Problemas");
        //vamos añadiendo el contenido
        fputs($file,$usuarios);
        fclose($file);
        echo "<br/><a href='rips/US.txt' target='_blan k'>Usuarios</a>";
        
        //Archvo de consultas
        $cantidadArchivoConsultas=0;
        //echo "SELECT * FROM consulta WHERE (fecha <= '".$fechaF."' and fecha>='".$fechaI."') AND eps='".$entidad."' AND confirmada=2";
        $result1=$bd->extraerDatos("SELECT * FROM consulta WHERE (fecha <= '".$fechaF."' and fecha>='".$fechaI."') AND eps='".$entidad."' AND confirmada=2");
        $consultas="";
        while($filas1 = mysql_fetch_array($result1))
        {
            $result2=$bd->extraerDatos("SELECT * FROM paciente WHERE idPaciente=".$filas1["paciente"]);
            $filas2 = mysql_fetch_array($result2);
            
            if($filas1["tipoConsulta"]==8)
            {
                //echo "SELECT * FROM psicologia WHERE consulta=".$filas1["idConsulta"];
                $result3=$bd->extraerDatos("SELECT * FROM psicologia WHERE consulta=".$filas1["idConsulta"]);
                $filas3 = mysql_fetch_array($result3);
                
                $fecha=str_replace("-","/",$filas1["fecha"]);
            
                $consultas = $consultas.$filas1["factura"].",".$filas1["eps"].",".$filas2["tipoIden"].",".$filas1["paciente"].",".$fecha.",".$filas1["autorizacion"].", codigo cups de la consulta,05,13,".$filas3["diag1"].",".$filas3["diag2"].",".$filas3["diag3"].",1,".$filas1["valor"].",0,".$filas1["valor"]."\n";
                $cantidadArchivoConsultas++;
            }
            
            if($filas1["tipoConsulta"]==16)
            {
                //echo "SELECT * FROM psicologia WHERE consulta=".$filas1["idConsulta"];
                $result3=$bd->extraerDatos("SELECT * FROM evolucion WHERE consulta=".$filas1["idConsulta"]);
                $filas3 = mysql_fetch_array($result3);
                
                $fecha=str_replace("-","/",$filas1["fecha"]);
            
                $consultas = $consultas.$filas1["factura"].",".$filas1["eps"].",".$filas2["tipoIden"].",".$filas1["paciente"].",".$fecha.",".$filas1["autorizacion"].", codigo cups de la consulta,05,13,".$filas3["diag1"].",".$filas3["diag2"].",".$filas3["diag3"].",1,".$filas1["valor"].",0,".$filas1["valor"]."\n";
                $cantidadArchivoConsultas++;
            }
        }
        
        $file=fopen("../rips/AC.txt","w+") or die("Problemas");
        //vamos añadiendo el contenido
        fputs($file,$consultas);
        fclose($file);
        echo "<br/><a href='rips/AC.txt' target='_blan k'>Consultas</a>";
        
        //Archvo de descripcion agrupada
        $result1=$bd->extraerDatos("SELECT * FROM consulta WHERE (fecha <= '".$fechaF."' and fecha>='".$fechaI."') AND eps='".$entidad."' AND confirmada=2");
        while($filas1 = mysql_fetch_array($result1))
        {
            $consultas="";
            //$filas1 = mysql_fetch_array($result1);
            $consultas = $filas1["factura"].",".$filas1["eps"].",01,".$cantidadArchivoConsultas.",".$filas1["valor"].",".($cantidadArchivoConsultas*$filas1["valor"])."\n";
        }    
        
        $file=fopen("../rips/AD.txt","w+") or die("Problemas");
        //vamos añadiendo el contenido
        fputs($file,$consultas);
        fclose($file);
        echo "<br/><a href='rips/AD.txt' target='_blan k'>Descripcion Agrupada</a>";
        
        
        //Archvo de descripcion agrupada
        $result1=$bd->extraerDatos("SELECT * FROM consulta WHERE (fecha <= '".$fechaF."' and fecha>='".$fechaI."') AND eps='".$entidad."'");
        $consultas="";
        while($filas1 = mysql_fetch_array($result1))
        {
            //$filas1 = mysql_fetch_array($result1);
            $consultas = $entidad.",".date("Y/m/d").",US,".$cantidadArchivoUsuarios."\n";
            $consultas = $consultas.$entidad.",".date("Y/m/d").",AC,".$cantidadArchivoConsultas."\n";
            $consultas = $consultas.$entidad.",".date("Y/m/d").",AD,1\n";
            $consultas = $consultas.$entidad.",".date("Y/m/d").",CT,4\n";
        }
        
        $file=fopen("../rips/CT.txt","w+") or die("Problemas");
        //vamos añadiendo el contenido
        fputs($file,$consultas);
        fclose($file);
        echo "<br/><a href='rips/CT.txt' target='_blan k'>Control</a>";



        echo <<<EOT
                </form>
            </div>
        </div>    
EOT;
    }
}
?>