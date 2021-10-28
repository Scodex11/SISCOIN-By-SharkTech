<?php
require('../../controllers/controller_proveedores.php');
	if (isset($_GET['RUT'])) {
        $r = $_GET["RUT"];
        $t = $_GET["telefono"];

        $result =  $proveedores->eliminarTelefono($r, $t);
    

        header("Location: view_ABM_telefono.php?m=3");
    }
?>