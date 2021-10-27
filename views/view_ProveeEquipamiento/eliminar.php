<?php
require('../../controllers/controller_proveedores.php');
	if (isset($_GET['RUT'])) {
       
        $result =  $proveedores->eliminarDatos($_GET["RUT"]);

        header("Location: view_ABM_Proveedor.php?m=3");
    }
?>