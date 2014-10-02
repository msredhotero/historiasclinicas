<div id="main">
	<div class="full_w">
		<div class="h_title">Formato de evolución</div>
            <?php
                $bd=BD::getInstance();
                $result7=$bd->extraerDatos("SELECT * FROM consulta WHERE idConsulta=".$consulta);
                $filas7 = mysql_fetch_array($result7);
            ?>
            <div id="zonahc"><a onclick="ingresarGenHC(1,<?php echo $filas7["paciente"];?>);return false;">Ver Historia Clinica</a></div>
            <form role='form'>
                <input type='hidden' class='form-control' id='idEvolucion' placeholder='idEvolucion'>
                <input type='hidden' class='form-control' id='consulta' placeholder='consulta' value="<?php echo $consulta;?>">

                <div class="element">
                    <label for='ejemplo_email_1'>evolucion</label>
                    <input type='text' class='form-control' id='evolucion' placeholder='evolucion'>
                </div>
                
                <div class="element">
                    <label for='ejemplo_email_1'>diag1</label>
                    <input type='text' id='diag1' class='form-control'  placeholder='diag1' onkeyup="cargarDiagnosticos('diag1','resuldiag1');return false;">
                    <div id="resuldiag1"></div>
                </div>
                
                <div class="element">
                    <label for='ejemplo_email_1'>diag2</label>
                    <input type='text' class='form-control' id='diag2' placeholder='diag2' onkeyup="cargarDiagnosticos('diag2','resuldiag2');return false;">
                    <div id="resuldiag2"></div>
                </div>
                
                <div class="element">
                    <label for='ejemplo_email_1'>diag3</label>
                    <input type='text' class='form-control' id='diag3' placeholder='diag3' onkeyup="cargarDiagnosticos('diag3','resuldiag3');return false;">
                    <div id="resuldiag3"></div>
                </div>
                <?php
                $result6=$bd->extraerDatos("SELECT count(*)as sesion FROM evolucion WHERE consulta=".$consulta);
                $filas6 = mysql_fetch_array($result6);
                $sesion= $filas6["sesion"]+1;
                ?>

                <input type='hidden' class='form-control' id='sesion' placeholder='sesion' value="<?php echo $sesion;?>">

                
                <button type='submit' class='btn btn-default' onclick='ingresarNuevoevolucion();return false;'>Ingresar</button>
            </form>
        </div>
    </div>
</div>