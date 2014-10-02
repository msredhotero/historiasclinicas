<?php
include ('../bd/bd.php');
class cups
{
	function dibujarFormularioCups()
	{
            
            echo '<div id="main">
                    <div class="full_w">
                        <div class="h_title">Cups - Nuevo Cups</div>';
            
		echo "<form action='' method='post'>";

                                   

                    echo "<div class='element'>

                                <label for='codigo'>Codigo<span class='red'>(Obligatorio)</span></label>

                                <input type='text' class='text err' id='codigo' placeholder='codigo'>

                            </div>";

                

                    echo "<div class='element'>

                                <label for='nombre'>Nombre<span class='red'>(Obligatorio)</span></label>

                                <input type='text' class='text err' id='nombre' placeholder='nombre'>

                            </div>";

                

                echo "<button type='submit' class='btn btn-default' onclick='ingresarNuevoCups();return false;'>Ingresar</button>";

           echo "</form>";
           echo "</div></div></div>";
	}
}
?>