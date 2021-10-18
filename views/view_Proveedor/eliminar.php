<?php
require("../../controllers/controller_tipoEquipamiento.php");
	if (isset($_GET['id'])) {
       
        $result = $tipoEquipamiento->eliminarDatos($_GET["id"]);
        header("Location: view_ABM_tipoEquipamiento.php?m=3");
    }
?>