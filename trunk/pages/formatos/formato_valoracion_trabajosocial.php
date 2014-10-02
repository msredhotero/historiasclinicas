<div id="main">
	<div class="full_w">
		<div class="h_title">Formato Ingreso Valoración Trabajo Social</div>
            <input type='hidden' class='form-control' id='idApoyo' placeholder='idApoyo'>
            <div id="divapoyo"></div>
            <form role='form'>              
                <input type='hidden' class='form-control' id='consulta' placeholder='consulta'  value="<?php echo $consulta;?>">                
                <div class="element">                
                    <label for='ejemplo_email_1'>nombres</label>               
                    <input type='email' class='form-control' id='nombres' placeholder='nombres'>               
                </div>               
                <div class="element">                
                    <label for='ejemplo_email_1'>relacion</label>                
                    <input type='email' class='form-control' id='relacion' placeholder='relacion'>                
                </div>                
                <div class="element">                
                    <label for='ejemplo_email_1'>telefono</label>                
                    <input type='email' class='form-control' id='telefono' placeholder='telefono'>                
                </div>             
                <div class="element">                
                    <label for='ejemplo_email_1'>direccion</label>                
                    <input type='email' class='form-control' id='direccion' placeholder='direccion'>                
                </div>
                <button type='submit' class='btn btn-default' onclick='ingresarNuevoapoyo();return false;'>Ingresar Apoyo</button>
            </form>
            <div id="divfamilia"></div>
            <form role='form'> 
                <input class='form-control' type='hidden' id='idFamilia' value=''>
                <input type='hidden' class='form-control' id='consulta' value='<?php echo $consulta;?>'>
                <div class="element">
                    <label for='ejemplo_email_1'>nombres</label>
                    <input type='email' class='form-control' id='nombres2' value='' placeholder='nombres'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>parentesco</label>
                    <input type='email' class='form-control' id='parentesco' value='' placeholder='parentesco'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>edad</label>
                    <input type='email' class='form-control' id='edad' value='' placeholder='edad'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>esc</label>
                    <input type='email' class='form-control' id='esc' value='' placeholder='esc'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>ocupacion</label>
                    <input type='email' class='form-control' id='ocupacion' value='' placeholder='ocupacion'>
                </div>
                <button type='submit' class='btn btn-default' onclick='ingresarNuevofamilia();return false;'>Ingresar Familiares</button>
            </form>
            <form role='form'> 
                <input type='hidden' class='form-control' id='idTrabajoSocial' placeholder='idTrabajoSocial'>
                <input type='hidden' class='form-control' id='consulta' placeholder='consulta' value="<?php echo $consulta;?>">
                <div class="element">
                    <label for='ejemplo_email_1'>relFamDecTom</label>
                    <select id='relFamDecTom'>
                        <option value="(Padre)">Padre</option>
                        <option value="(Madre)">Madre</option>
                        <option value="(Padre y Madre)">Padre y Madre</option>
                        <option value="(Padre, madre e hijos)">Padre, madre e hijos</option>
                        <option value="(Abuelos)">Abuelos</option>
                    </select>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>relFamExpAfe</label>
                    <select id='' onchange="agregar(this.value,'relFamExpAfe');">
                        <option value="(Padre)">Padre</option>
                        <option value="(Madre)">Madre</option>
                        <option value="(Padre y Madre)">Padre y Madre</option>
                        <option value="(Padre, madre e hijos)">Padre, madre e hijos</option>
                        <option value="(Abuelos)">Abuelos</option>
                    </select>
                    otros
                    <input type='email' class='form-control' id='relFamExpAfe' placeholder='relFamExpAfe'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>relFamExpAfePadHij</label>
                    <select id='' onchange="agregar(this.value,'relFamExpAfePadHij');">
                        <option value="(Padre)">Padre</option>
                        <option value="(Madre)">Madre</option>
                        <option value="(Padre y Madre)">Padre y Madre</option>
                        <option value="(Padre, madre e hijos)">Padre, madre e hijos</option>
                        <option value="(Abuelos)">Abuelos</option>
                    </select>
                    otros
                    <input type='email' class='form-control' id='relFamExpAfePadHij' placeholder='relFamExpAfePadHij'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>relFamMotCon</label>
                    <select id='' onchange="agregar(this.value,'relFamMotCon');">
                        <option value="(Padre)">Padre</option>
                        <option value="(Madre)">Madre</option>
                        <option value="(Padre y Madre)">Padre y Madre</option>
                        <option value="(Padre, madre e hijos)">Padre, madre e hijos</option>
                        <option value="(Abuelos)">Abuelos</option>
                    </select>
                    otros
                    <input type='email' class='form-control' id='relFamMotCon' placeholder='relFamMotCon'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>relFamExpCon</label>
                    <select id='' onchange="agregar(this.value,'relFamExpCon');">
                        <option value="(Padre)">Padre</option>
                        <option value="(Madre)">Madre</option>
                        <option value="(Padre y Madre)">Padre y Madre</option>
                        <option value="(Padre, madre e hijos)">Padre, madre e hijos</option>
                        <option value="(Abuelos)">Abuelos</option>
                    </select>
                    otros
                    <input type='email' class='form-control' id='relFamExpCon' placeholder='relFamExpCon'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>relFamComFal</label>
                    <select id='' onchange="agregar(this.value,'relFamComFal');">
                        <option value="(Padre)">Padre</option>
                        <option value="(Madre)">Madre</option>
                        <option value="(Padre y Madre)">Padre y Madre</option>
                        <option value="(Padre, madre e hijos)">Padre, madre e hijos</option>
                        <option value="(Abuelos)">Abuelos</option>
                    </select>
                    otros
                    <input type='email' class='form-control' id='relFamComFal' placeholder='relFamComFal'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>relFamSan</label>
                    <select id='relFamSan' onchange="agregar(this.value,'relFamComFal');">
                        <option value="(Padre)">Padre</option>
                        <option value="(Madre)">Madre</option>
                        <option value="(Padre y Madre)">Padre y Madre</option>
                        <option value="(Padre, madre e hijos)">Padre, madre e hijos</option>
                        <option value="(Abuelos)">Abuelos</option>
                    </select>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>relFamActTieLib</label>
                    <select id='' onchange="agregar(this.value,'relFamActTieLib');">
                        <option value="(Padre)">Padre</option>
                        <option value="(Madre)">Madre</option>
                        <option value="(Padre y Madre)">Padre y Madre</option>
                        <option value="(Padre, madre e hijos)">Padre, madre e hijos</option>
                        <option value="(Abuelos)">Abuelos</option>
                    </select>
                    otros
                    <input type='email' class='form-control' id='relFamActTieLib' placeholder='relFamActTieLib'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>genograma</label>
                    <input type='email' class='form-control' id='genograma' placeholder='genograma'>

                    <input type="file" name="archivo" id="archivo">
                    <input type="submit" value="Upload" onclick="subirarchivo(); return false;">
                    
                    <div id="mostrarimagen">
                    </div>

                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>obsGen</label>
                    <input type='email' class='form-control' id='obsGen' placeholder='obsGen'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>eveVivFamUltAni1</label>
                    <select id='eveVivFamUltAni1'>
                        <option value="SI">SI</option>
                        <option value="NO">NO</option>
                    </select>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>eveVivFamUltAni2</label>
                    <select id='eveVivFamUltAni2'>
                        <option value="SI">SI</option>
                        <option value="NO">NO</option>
                    </select>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>eveVivFamUltAni3</label>
                    <select id='eveVivFamUltAni3'>
                        <option value="SI">SI</option>
                        <option value="NO">NO</option>
                    </select>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>eveVivFamUltAni4</label>
                    <select id='eveVivFamUltAni4'>
                        <option value="SI">SI</option>
                        <option value="NO">NO</option>
                    </select>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>eveVivFamUltAni5</label>
                    <select id='eveVivFamUltAni5'>
                        <option value="SI">SI</option>
                        <option value="NO">NO</option>
                    </select>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>eveVivFamUltAni6</label>
                    <select id='eveVivFamUltAni6'>
                        <option value="SI">SI</option>
                        <option value="NO">NO</option>
                    </select>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>eveVivFamUltAni7</label>
                    <select id='eveVivFamUltAni7'>
                        <option value="SI">SI</option>
                        <option value="NO">NO</option>
                    </select>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>eveVivFamUltAni8</label>
                    <select id='eveVivFamUltAni8'>
                        <option value="SI">SI</option>
                        <option value="NO">NO</option>
                    </select>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>eveVivFamUltAni9</label>
                    <select id='eveVivFamUltAni9'>
                        <option value="SI">SI</option>
                        <option value="NO">NO</option>
                    </select>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>eveVivFamUltAni10</label>
                    <select id='eveVivFamUltAni10'>
                        <option value="SI">SI</option>
                        <option value="NO">NO</option>
                    </select>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>eveVivFamUltAni11</label>
                    <select id='eveVivFamUltAni11'>
                        <option value="SI">SI</option>
                        <option value="NO">NO</option>
                    </select>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>eveVivFamUltAni12</label>
                    <select id='eveVivFamUltAni12'>
                        <option value="SI">SI</option>
                        <option value="NO">NO</option>
                    </select>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>eveVivFamUltAni13</label>
                    <select id='eveVivFamUltAni13'>
                        <option value="SI">SI</option>
                        <option value="NO">NO</option>
                    </select>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>eveVivFamUltAni14</label>
                    <select id='eveVivFamUltAni14'>
                        <option value="SI">SI</option>
                        <option value="NO">NO</option>
                    </select>
                </div>
                <div class="element">
                    <label for='ejemplo_email_15'>eveVivFamUltAni15</label>
                    <select id='eveVivFamUltAni1'>
                        <option value="SI">SI</option>
                        <option value="NO">NO</option>
                    </select>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>eveVivFamUltAni16</label>
                    <select id='eveVivFamUltAni16'>
                        <option value="SI">SI</option>
                        <option value="NO">NO</option>
                    </select>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>eveVivFamUltAni17</label>
                    <select id='eveVivFamUltAni17'>
                        <option value="SI">SI</option>
                        <option value="NO">NO</option>
                    </select>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>eveVivFamUltAni18</label>
                    <select id='eveVivFamUltAni18'>
                        <option value="SI">SI</option>
                        <option value="NO">NO</option>
                    </select>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>eveVivFamUltAni19</label>
                    <select id='eveVivFamUltAni19'>
                        <option value="SI">SI</option>
                        <option value="NO">NO</option>
                    </select>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>eveVivFamUltAni20</label>
                    <select id='eveVivFamUltAni20'>
                        <option value="SI">SI</option>
                        <option value="NO">NO</option>
                    </select>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>eveVivFamUltAni21</label>
                    <select id='eveVivFamUltAni21'>
                        <option value="SI">SI</option>
                        <option value="NO">NO</option>
                    </select>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>eveVivFamUltAni22</label>
                    <select id='eveVivFamUltAni22'>
                        <option value="SI">SI</option>
                        <option value="NO">NO</option>
                    </select>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>eveVivFamUltAni23</label>
                    <select id='eveVivFamUltAni23'>
                        <option value="SI">SI</option>
                        <option value="NO">NO</option>
                    </select>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>eveVivFamUltAni24</label>
                    <select id='eveVivFamUltAni24'>
                        <option value="SI">SI</option>
                        <option value="NO">NO</option>
                    </select>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>dinRelFamA</label>
                    <input type='email' class='form-control' id='dinRelFamA' placeholder='dinRelFamA'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>dinRelFamB</label>
                    <input type='email' class='form-control' id='dinRelFamB' placeholder='dinRelFamB'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>crit1</label>
                    <input type='email' class='form-control' id='crit1' placeholder='crit1'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>crit2</label>
                    <input type='email' class='form-control' id='crit2' placeholder='crit2'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>crit3</label>
                    <input type='email' class='form-control' id='crit3' placeholder='crit3'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>crit4</label>
                    <input type='email' class='form-control' id='crit4' placeholder='crit4'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>crit5</label>
                    <input type='email' class='form-control' id='crit5' placeholder='crit5'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>crit6</label>
                    <input type='email' class='form-control' id='crit6' placeholder='crit6'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>crit7</label>
                    <input type='email' class='form-control' id='crit7' placeholder='crit7'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>crit8</label>
                    <input type='email' class='form-control' id='crit8' placeholder='crit8'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>crit9</label>
                    <input type='email' class='form-control' id='crit9' placeholder='crit9'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>crit10</label>
                    <input type='email' class='form-control' id='crit10' placeholder='crit10'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>crit11</label>
                    <input type='email' class='form-control' id='crit11' placeholder='crit11'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>crit12</label>
                    <input type='email' class='form-control' id='crit12' placeholder='crit12'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>crit13</label>
                    <input type='email' class='form-control' id='crit13' placeholder='crit13'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>crit14</label>
                    <input type='email' class='form-control' id='crit14' placeholder='crit14'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>crit15</label>
                    <input type='email' class='form-control' id='crit15' placeholder='crit15'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>crit16</label>
                    <input type='email' class='form-control' id='crit16' placeholder='crit16'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>crit17</label>
                    <input type='email' class='form-control' id='crit17' placeholder='crit17'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>factGen</label>
                    <input type='email' class='form-control' id='factGen' placeholder='factGen'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>factVul</label>
                    <input type='email' class='form-control' id='factVul' placeholder='factVul'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>aspHabTipBar</label>
                    <input type='email' class='form-control' id='aspHabTipBar' placeholder='aspHabTipBar'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>aspHabSerTra</label>
                    <input type='email' class='form-control' id='aspHabSerTra' placeholder='aspHabSerTra'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>aspHabEst</label>
                    <input type='email' class='form-control' id='aspHabEst' placeholder='aspHabEst'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>aspHabTipViv</label>
                    <input type='email' class='form-control' id='aspHabTipViv' placeholder='aspHabTipViv'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>aspHabDes</label>
                    <input type='email' class='form-control' id='aspHabDes' placeholder='aspHabDes'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>aspHabTen</label>
                    <input type='email' class='form-control' id='aspHabTen' placeholder='aspHabTen'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>aspHabSer</label>
                    <select id='' onchange="agregar(this.value,'aspHabSer');">
                        <option value="(Padre)">Padre</option>
                        <option value="(Madre)">Madre</option>
                        <option value="(Padre y Madre)">Padre y Madre</option>
                        <option value="(Padre, madre e hijos)">Padre, madre e hijos</option>
                        <option value="(Abuelos)">Abuelos</option>
                    </select>
                    otros
                    <input type='email' class='form-control' id='aspHabSer' placeholder='aspHabSer'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>aspHabLim</label>
                    <input type='email' class='form-control' id='aspHabLim' placeholder='aspHabLim'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>conEcoResObl</label>
                    <select id='' onchange="agregar(this.value,'conEcoResObl');">
                        <option value="(Padre)">Padre</option>
                        <option value="(Madre)">Madre</option>
                        <option value="(Padre y Madre)">Padre y Madre</option>
                        <option value="(Padre, madre e hijos)">Padre, madre e hijos</option>
                        <option value="(Abuelos)">Abuelos</option>
                    </select>
                    otros
                    <input type='email' class='form-control' id='conEcoResObl' placeholder='conEcoResObl'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>conEcoIngMen</label>
                    <input type='email' class='form-control' id='conEcoIngMen' placeholder='conEcoIngMen'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>concepto</label>
                    <input type='email' class='form-control' id='concepto' placeholder='concepto'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>plaTraObj</label>
                    <input type='email' class='form-control' id='plaTraObj' placeholder='plaTraObj'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>plaTraAct</label>
                    <input type='email' class='form-control' id='plaTraAct' placeholder='plaTraAct'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>plaTraMet</label>
                    <input type='email' class='form-control' id='plaTraMet' placeholder='plaTraMet'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>plaTraObj2</label>
                    <input type='email' class='form-control' id='plaTraObj2' placeholder='plaTraObj2'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>plaTraAct2</label>
                    <input type='email' class='form-control' id='plaTraAct2' placeholder='plaTraAct2'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>plaTraMet2</label>
                    <input type='email' class='form-control' id='plaTraMet2' placeholder='plaTraMet2'>
                </div>
                <?php
                $bd=BD::getInstance();
                $result=$bd->extraerDatos("SELECT * FROM consulta WHERE idConsulta=".$consulta);
                $filas = mysql_fetch_array($result);
                ?>
                <div class="element">
                    <label for='ejemplo_email_1'>profesional</label>
                    <input type='email' class='form-control' id='profesional' placeholder='profesional' value="<?php echo $filas["profesional"]?>">
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>diag1</label>
                    <input type='email' class='form-control' id='diag1' placeholder='diag1'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>diag2</label>
                    <input type='email' class='form-control' id='diag2' placeholder='diag2'>
                </div>
                <div class="element">
                    <label for='ejemplo_email_1'>diag3</label>
                    <input type='email' class='form-control' id='diag3' placeholder='diag3'>
                </div>
                <button type='submit' class='btn btn-default' onclick='ingresarNuevotrabajosocial();return false;'>Ingresar</button>
            </form>
        </div>
    </div>
</div>