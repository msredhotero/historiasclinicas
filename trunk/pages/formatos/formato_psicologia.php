<div id="main">
	<div class="full_w">
		<div class="h_title">Formato Ingreso Valoración Psicología</div>
            <form role='form'>
                <input type='hidden' class='form-control' id='idPsicologia' placeholder='idPsicologia'>
                <input type='hidden' class='form-control' id='consulta' placeholder='consulta' value="<?php echo $consulta;?>">
                <div class="element">
                    <label for='ejemplo_email_1'>desPsi</label>
                    <input type='email' class='form-control' id='desPsi' placeholder='desPsi'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>traRec</label>
                    <input type='email' class='form-control' id='traRec' placeholder='traRec'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>antEmb</label>
                    <input type='email' class='form-control' id='antEmb' placeholder='antEmb'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>antPar</label>
                    <input type='email' class='form-control' id='antPar' placeholder='antPar'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>antDesPsi</label>
                    <input type='email' class='form-control' id='antDesPsi' placeholder='antDesPsi'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>antDesPsi2</label>
                    <input type='email' class='form-control' id='antDesPsi2' placeholder='antDesPsi2'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>factNos</label>
                    <input type='email' class='form-control' id='factNos' placeholder='factNos'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>priInf</label>
                    <input type='email' class='form-control' id='priInf' placeholder='priInf'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>segInf</label>
                    <input type='email' class='form-control' id='segInf' placeholder='segInf'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>pub</label>
                    <input type='email' class='form-control' id='pub' placeholder='pub'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>ado</label>
                    <input type='email' class='form-control' id='ado' placeholder='ado'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>fam</label>
                    <input type='email' class='form-control' id='fam' placeholder='fam'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>relHer</label>
                    <input type='email' class='form-control' id='relHer' placeholder='relHer'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>actAcu</label>
                    <input type='email' class='form-control' id='actAcu' placeholder='actAcu'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>conAcu</label>
                    <input type='email' class='form-control' id='conAcu' placeholder='conAcu'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>expFam</label>
                    <input type='email' class='form-control' id='expFam' placeholder='expFam'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>diaFam</label>
                    <input type='email' class='form-control' id='diaFam' placeholder='diaFam'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>observaciones</label>
                    <input type='email' class='form-control' id='observaciones' placeholder='observaciones'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>conPsiObt</label>
                    <input type='email' class='form-control' id='conPsiObt' placeholder='conPsiObt'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>entSem</label>
                    <input type='email' class='form-control' id='entSem' placeholder='entSem'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>pruDesMad</label>
                    <input type='email' class='form-control' id='pruDesMad' placeholder='pruDesMad'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>otrPru2</label>
                    <input type='email' class='form-control' id='otrPru2' placeholder='otrPru2'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>concepto</label>
                    <input type='email' class='form-control' id='concepto' placeholder='concepto'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>Diagnostico1</label>
                    <input type='email' class='form-control' id='diag1' placeholder='diag1' onkeyup="cargarDiagnosticos('diag1','resuldiag1');return false;">
                    <div id="resuldiag1"></div>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>Diagnostico2</label>
                    <input type='email' class='form-control' id='diag2' placeholder='diag2' onkeyup="cargarDiagnosticos('diag2','resuldiag2');return false;">
                    <div id="resuldiag2"></div>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>Diagnostico3</label>
                    <input type='email' class='form-control' id='diag3' placeholder='diag3' onkeyup="cargarDiagnosticos('diag3','resuldiag3');return false;">
                    <div id="resuldiag3"></div>
                </div>
                <?php
                $bd=BD::getInstance();
        		$result=$bd->extraerDatos("SELECT * FROM consulta WHERE idConsulta=".$consulta);
        		$filas = mysql_fetch_array($result);
                ?>
                <input type='hidden' class='form-control' id='profesional' placeholder='profesional' value="<?php echo $filas["profesional"]?>">
                <button type='submit' class='btn btn-default' onclick='ingresarNuevopsicologia();return false;'>Ingresar</button>
            </form>
        </div>
    </div>
</div>