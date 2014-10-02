<?php
include ('../bd/bd.php');
class historiaclinica
{
    function formularioHC()
    {
        include "../pages/historiaclinica/formularioHC.php";
    }
    
    function ingresarGenHC($usuario,$fechaI,$fechaF)
    {
        $bd=BD::getInstance();
        
        include "../libreriapdf/formatoHistoriaClinica.php";

    }
}
?>