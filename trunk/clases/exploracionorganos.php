<?php
include ('../bd/bd.php');
class exploracionorganos
{
	function insertarDatos($idExploracionOrganos,$consulta,$organo,$anatomia,$movilidad,$tono,$sensibilidad,$funcion)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("INSERT INTO exploracionorganos(idExploracionOrganos,consulta,organo,anatomia,movilidad,tono,sensibilidad,funcion) VALUES ($idExploracionOrganos,'$consulta','$organo','$anatomia','$movilidad','$tono','$sensibilidad','$funcion')"))
		{
			echo "Registro de datos exitoso";
		}
		else
		{
			echo "No se pudo hacer el registro de datos";
		}
	}

	function consultarDatos($idExploracionOrganos)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("SELECT * FROM exploracionorganos WHERE idExploracionOrganos=$idExploracionOrganos"))
		{
			echo "Consulta de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la consulta de datos";
		}
	}

	function eliminarDatos($idExploracionOrganos)
	{
		$bd=BD::getInstance();
		if($bd->extraerDatos("DELETE FROM exploracionorganos WHERE idExploracionOrganos=$idExploracionOrganos"))
		{
			echo "Eliminación exitosa";
		}
		else
		{
			echo "No se pudo realizar la eliminación de datos";
		}
	}

	function actualizarDatos($idExploracionOrganos,$consulta,$organo,$anatomia,$movilidad,$tono,$sensibilidad,$funcion)
	{
		$bd=BD::getInstance();
		if($bd->insertarDatos("UPDATE exploracionorganos SET consulta='$consulta',organo='$organo',anatomia='$anatomia',movilidad='$movilidad',tono='$tono',sensibilidad='$sensibilidad',funcion='$funcion' WHERE idExploracionOrganos=$idExploracionOrganos"))
		{
			echo "Modificación de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la modificación de datos";
		}
	}

	function getconsulta($idExploracionOrganos)
	{
		
		if($result=$bd->insertarDatos("SELECT consulta FROM exploracionorganos WHERE idExploracionOrganos=$idExploracionOrganos"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['consulta'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getorgano($idExploracionOrganos)
	{
		
		if($result=$bd->insertarDatos("SELECT organo FROM exploracionorganos WHERE idExploracionOrganos=$idExploracionOrganos"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['organo'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getanatomia($idExploracionOrganos)
	{
		
		if($result=$bd->insertarDatos("SELECT anatomia FROM exploracionorganos WHERE idExploracionOrganos=$idExploracionOrganos"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['anatomia'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getmovilidad($idExploracionOrganos)
	{
		
		if($result=$bd->insertarDatos("SELECT movilidad FROM exploracionorganos WHERE idExploracionOrganos=$idExploracionOrganos"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['movilidad'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function gettono($idExploracionOrganos)
	{
		
		if($result=$bd->insertarDatos("SELECT tono FROM exploracionorganos WHERE idExploracionOrganos=$idExploracionOrganos"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['tono'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getsensibilidad($idExploracionOrganos)
	{
		
		if($result=$bd->insertarDatos("SELECT sensibilidad FROM exploracionorganos WHERE idExploracionOrganos=$idExploracionOrganos"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['sensibilidad'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function getfuncion($idExploracionOrganos)
	{
		
		if($result=$bd->insertarDatos("SELECT funcion FROM exploracionorganos WHERE idExploracionOrganos=$idExploracionOrganos"))
		{
			$Rs2 = mysql_fetch_array($result); 
			return $Rs2['funcion'];
		}
		else
		{
			echo "No se pudo obtener el dato";
		}
	}

	function setconsulta($consulta,$idExploracionOrganos)
	{
		
		if($result=$bd->insertarDatos("UPDATE exploracionorganos SET consulta=$consulta WHERE idExploracionOrganos=$idExploracionOrganos"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setorgano($organo,$idExploracionOrganos)
	{
		
		if($result=$bd->insertarDatos("UPDATE exploracionorganos SET organo=$organo WHERE idExploracionOrganos=$idExploracionOrganos"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setanatomia($anatomia,$idExploracionOrganos)
	{
		
		if($result=$bd->insertarDatos("UPDATE exploracionorganos SET anatomia=$anatomia WHERE idExploracionOrganos=$idExploracionOrganos"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setmovilidad($movilidad,$idExploracionOrganos)
	{
		
		if($result=$bd->insertarDatos("UPDATE exploracionorganos SET movilidad=$movilidad WHERE idExploracionOrganos=$idExploracionOrganos"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function settono($tono,$idExploracionOrganos)
	{
		
		if($result=$bd->insertarDatos("UPDATE exploracionorganos SET tono=$tono WHERE idExploracionOrganos=$idExploracionOrganos"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setsensibilidad($sensibilidad,$idExploracionOrganos)
	{
		
		if($result=$bd->insertarDatos("UPDATE exploracionorganos SET sensibilidad=$sensibilidad WHERE idExploracionOrganos=$idExploracionOrganos"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function setfuncion($funcion,$idExploracionOrganos)
	{
		
		if($result=$bd->insertarDatos("UPDATE exploracionorganos SET funcion=$funcion WHERE idExploracionOrganos=$idExploracionOrganos"))
		{
			echo " Actualizacion exitosa";
		}
		else
		{
			echo "No se pudo actualizar el dato";
		}
	}

	function dibujarFormularioIngresoexploracionorganos()
	{
		echo "<form role='form'>";

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>idExploracionOrganos</label>

                                <input type='email' class='form-control' id='idExploracionOrganos' placeholder='idExploracionOrganos'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>consulta</label>

                                <input type='email' class='form-control' id='consulta' placeholder='consulta'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>organo</label>

                                <input type='email' class='form-control' id='organo' placeholder='organo'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>anatomia</label>

                                <input type='email' class='form-control' id='anatomia' placeholder='anatomia'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>movilidad</label>

                                <input type='email' class='form-control' id='movilidad' placeholder='movilidad'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>tono</label>

                                <input type='email' class='form-control' id='tono' placeholder='tono'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>sensibilidad</label>

                                <input type='email' class='form-control' id='sensibilidad' placeholder='sensibilidad'>

                            </div>";

                

                    echo "<div class='form-group'>

                                <label for='ejemplo_email_1'>funcion</label>

                                <input type='email' class='form-control' id='funcion' placeholder='funcion'>

                            </div>";

                

                echo "<button type='submit' class='btn btn-default' onclick='ingresarNuevoexploracionorganos();return false;'>Ingresar</button>";

           echo "</form>";
	}

	function consultarTodosexploracionorganos()
	{
		$bd=BD::getInstance();
		if($result=$bd->extraerDatos("SELECT * FROM exploracionorganos"))
		{
			echo "<div class='panel panel-default'><div class='panel-heading'>Nombre de la Tabla</div> <table class='table'><thead><tr><th>idExploracionOrganos</th><th>consulta</th><th>organo</th><th>anatomia</th><th>movilidad</th><th>tono</th><th>sensibilidad</th><th>funcion</th><th>Accion</th></tr></thead><tbody>";

        
			while($filas = mysql_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>".$filas['idExploracionOrganos']."</td>";
				echo "<td>".$filas['consulta']."</td>";
				echo "<td>".$filas['organo']."</td>";
				echo "<td>".$filas['anatomia']."</td>";
				echo "<td>".$filas['movilidad']."</td>";
				echo "<td>".$filas['tono']."</td>";
				echo "<td>".$filas['sensibilidad']."</td>";
				echo "<td>".$filas['funcion']."</td>";
				echo "<td><p>

        <a href='#' class='btn btn-primary' role='button' onclick='dibujarFormularioModificarexploracionorganos(".$filas['idExploracionOrganos'].");return false;'>Editar</a>

        <a href='#' class='btn btn-primary' role='button' onclick='eliminarexploracionorganos(".$filas['idExploracionOrganos'].");return false;'>Eliminar</a>

        </p></td></tr>";
			}
			echo "</tr></tbody></table></div>";
			echo "Consulta de datos exitosa";
		}
		else
		{
			echo "No se pudo hacer la consulta de datos";
		}
	}

	function dibujarFormularioModificarexploracionorganos($id)
	{
		$bd=BD::getInstance();
		$result=$bd->extraerDatos("SELECT * FROM exploracionorganos WHERE idExploracionOrganos=".$id);
		$filas = mysql_fetch_array($result);
		echo "<form role='form'>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>idExploracionOrganos</label>

                            <input class='form-control' type='hidden' id='idExploracionOrganos' value='".$filas["idExploracionOrganos"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>consulta</label>

                            <input type='email' class='form-control' id='consulta' value='".$filas["consulta"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>organo</label>

                            <input type='email' class='form-control' id='organo' value='".$filas["organo"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>anatomia</label>

                            <input type='email' class='form-control' id='anatomia' value='".$filas["anatomia"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>movilidad</label>

                            <input type='email' class='form-control' id='movilidad' value='".$filas["movilidad"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>tono</label>

                            <input type='email' class='form-control' id='tono' value='".$filas["tono"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>sensibilidad</label>

                            <input type='email' class='form-control' id='sensibilidad' value='".$filas["sensibilidad"]."'>

                        </div>";echo "

                        <div class='form-group'>

                            <label for='ejemplo_email_1'>funcion</label>

                            <input type='email' class='form-control' id='funcion' value='".$filas["funcion"]."'>

                        </div>";

                echo "<button type='submit' class='btn btn-default' type='submit' onclick='modificarexploracionorganos($id);return false;'>Modificar</button></form>";

           
	}
}
?>