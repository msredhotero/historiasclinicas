<div id="main">
	<div class="full_w">
		<div class="h_title">Formato Ingreso Valoración Ocupacional</div>
            <form role='form'>
                    <input type="hidden" class='text err' id='idValoracionOcupacional' value="<?php echo $id;?>">
                    <input type='hidden' class='form-control' id='consulta' placeholder='consulta' value="<?php echo $consulta;?>">
                <div class="element">
                    <label for='ejemplo_email_1'>antPsi</label>
                    <input type='email' class='form-control' id='antPsi' placeholder='antPsi'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>obsNeu</label>
                    <input type='email' class='form-control' id='obsNeu' placeholder='obsNeu'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>tonMus</label>
                    <input type='email' class='form-control' id='tonMus' placeholder='tonMus'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>intRef</label>
                    <input type='email' class='form-control' id='intRef' placeholder='intRef'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>segVis</label>
                    <input type='email' class='form-control' id='segVis' placeholder='segVis'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>patFunMov</label>
                    <input type='email' class='form-control' id='patFunMov' placeholder='patFunMov'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>patIntMov</label>
                    <input type='email' class='form-control' id='patIntMov' placeholder='patIntMov'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>cooMotGru</label>
                    <input type='email' class='form-control' id='cooMotGru' placeholder='cooMotGru'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>cooMotFin</label>
                    <input type='email' class='form-control' id='cooMotFin' placeholder='cooMotFin'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>desOcuRutDia</label>
                    <input type='email' class='form-control' id='desOcuRutDia' placeholder='desOcuRutDia'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>desOcuAutCuid</label>
                    <input type='email' class='form-control' id='desOcuAutCuid' placeholder='desOcuAutCuid'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>desOcuParMan</label>
                    <input type='email' class='form-control' id='desOcuParMan' placeholder='desOcuParMan'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>desOcuDilMan</label>
                    <input type='email' class='form-control' id='desOcuDilMan' placeholder='desOcuDilMan'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>desOcuUsoTieLib</label>
                    <input type='email' class='form-control' id='desOcuUsoTieLib' placeholder='desOcuUsoTieLib'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>desOcuApoNegFam</label>
                    <input type='email' class='form-control' id='desOcuApoNegFam' placeholder='desOcuApoNegFam'>
                </div>
                    <input type='hidden' class='form-control' id='idCapacitacion' placeholder='idCapacitacion'>
                    <input type='hidden' class='form-control' id='consulta' placeholder='consulta' value="<?php echo $consulta;?>">
            </form>    
                <div id="divcapacitacion"></div>
            <form role='form'>
                <div class="element">
                    <label for='ejemplo_email_1'>oficio</label>
                    <input type='email' class='form-control' id='oficio' placeholder='oficio'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>institucion</label>
                    <input type='email' class='form-control' id='institucion' placeholder='institucion'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>tiempo</label>
                    <input type='email' class='form-control' id='tiempo' placeholder='tiempo'>
                </div>
                
                <button type='submit' class='btn btn-default' onclick='ingresarNuevocapacitacion();return false;'>Ingresar</button>
            </form>    
                <div id="divlaboral2"></div>
            <form role='form'>            
                    <input type='hidden' class='form-control' id='idLaborales' placeholder='idLaborales'>                                      
                    <input type='hidden' class='form-control' id='consulta' placeholder='consulta' value="<?php echo $consulta;?>">                
                <div class="element">                
                    <label for='ejemplo_email_1'>empresa</label>                
                    <input type='email' class='form-control' id='empresa' placeholder='empresa'>                
                </div>
                <div class="element">                
                    <label for='ejemplo_email_1'>cargo</label>                
                    <input type='email' class='form-control' id='cargo' placeholder='cargo'>                
                </div>
                <div class="element">               
                    <label for='ejemplo_email_1'>tiempo</label>                
                    <input type='email' class='form-control' id='tiempol' placeholder='tiempo'>                
                </div>
                <div class="element">                
                    <label for='ejemplo_email_1'>motRet</label>                
                    <input type='email' class='form-control' id='motRet' placeholder='motRet'>                
                </div>
                <button type='submit' class='btn btn-default' onclick='ingresarNuevolaborales();return false;'>Ingresar</button>

                    <input type='hidden' class='form-control' id='idOficio' placeholder='idOficio'>
                    <input type='hidden' class='form-control' id='consulta' placeholder='consulta' value="<?php echo $consulta;?>">
            </form>    
                <div id="divoficio"></div>
            <form role='form'> 
                <div class="element">
                    <label for='ejemplo_email_1'>nombre</label>
                    <input type='email' class='form-control' id='nombre' placeholder='nombre'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>descripcion</label>
                    <input type='email' class='form-control' id='descripcion' placeholder='descripcion'>
                </div>
                <button type='submit' class='btn btn-default' onclick='ingresarNuevooficio();return false;'>Ingresar</button>    
                <div class="element">
                    <label for='ejemplo_email_1'>diaOcu</label>
                    <input type='email' class='form-control' id='diaOcu' placeholder='diaOcu'>
                </div> 
                <div class="element">
                    <label for='ejemplo_email_1'>diagnostico1</label>
                    <input type='email' class='form-control' id='diagnostico' placeholder='diagnostico'>
                </div> 
                <div class="element">
                    <label for='ejemplo_email_1'>diagnostico2</label>
                    <input type='email' class='form-control' id='diag2' placeholder='diagnostico'>
                </div> 
                <div class="element">
                    <label for='ejemplo_email_1'>diagnostico3</label>
                    <input type='email' class='form-control' id='diag3' placeholder='diagnostico'>
                </div> 
                <div class="element">
                    <label for='ejemplo_email_1'>proOcupacional</label>
                    <input type='email' class='form-control' id='proOcupacional' placeholder='proOcupacional'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>observaciones</label>
                    <input type='email' class='form-control' id='observaciones' placeholder='observaciones'>
                </div>
                <?php
                $bd=BD::getInstance();
        		$result=$bd->extraerDatos("SELECT * FROM consulta WHERE idConsulta=".$consulta);
        		$filas = mysql_fetch_array($result);
                
                ?>
                    <input type='hidden' class='form-control' id='profesional' placeholder='profesional' value="<?php echo $filas["profesional"]?>">
                <button type='submit' class='btn btn-default' onclick='ingresarNuevovaloracionocupacional();return false;'>Ingresar</button>
           </form>
        </div>
    </div>
</div>