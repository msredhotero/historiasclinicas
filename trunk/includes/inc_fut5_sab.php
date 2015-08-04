<?php

if (!isset($_GET['page'])) {

    include("editables/jue_fut5_est.php");
	
} else {

    include("editables/".$_GET['page'].".php");
	
}

?>