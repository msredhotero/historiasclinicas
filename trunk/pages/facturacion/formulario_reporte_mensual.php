<script>
$(function() {
    $( "#fechaI" ).datepicker({dateFormat: 'yy-mm-dd'});
    $( "#fechaF" ).datepicker({dateFormat: 'yy-mm-dd'});
});
</script>
<div id="main">
	<div class="full_w">
		<div class="h_title">Reporte por fecha</div>
            <?php
                $bd=BD::getInstance();
                //$result7=$bd->extraerDatos("");
                //$filas7 = mysql_fetch_array($result7);
            ?>
            
            <form role='form'>
                <div class="element">
    				<label for="name">Fecha Inicial <span class="red">(Obligatorio)</span></label>
    				<input id="fechaI" name="fechaI" class="text err" />
    			</div>
                <div class="element">
    				<label for="name">Fecha Final<span class="red">(Obligatorio)</span></label>
    				<input id="fechaF" name="fechaF" class="text err" />
    			</div>
    			<div class="entry">
    				<button type="submit" class="add" onclick="generarReporteMensual();return false;">Consultar</button>
    			</div>
            </form>
            
        </div>
    </div>
</div>