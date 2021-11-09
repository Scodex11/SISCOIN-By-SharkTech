<?php
require('../../controllers/controller_proveedores.php');
	     
    if (isset($_GET['telefono'])) {
        
        $z = $_GET["telefono"];
       $result =  $proveedores->eliminarTelefono($z);
        header("Location: view_ABM_telefono.php?m=3");
        }  


?>