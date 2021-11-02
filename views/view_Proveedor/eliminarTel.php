<?php
require('../../controllers/controller_proveedores.php');
	if (isset($_GET['RUT'])) {
        
        $i = $_GET["RUT"];
        $z = $_GET["telefono"];
       
        $result =  $proveedores->eliminarTelefono($i, $z);
        header("Location: view_ABM_telefono.php?m=3");
    }
?>