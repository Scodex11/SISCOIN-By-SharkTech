<?php 
        require_once('../models/model_equip.php');

        $objetoEquip = new model_equip();
//Listar TABLA EQUIPAMIENTO
        $datosEquip = $objetoEquip->getEquipamiento();
     



// BOTON GUARDAR
        if (isset($_POST['btn_guardar'])) {
        // Datos de los textField
            $inventario = $_POST['inventario'];           
            $serie = $_POST['serie'];
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            $marca = $_POST['marca'];

        // Ejecutamos el método de ALTA
            $result = $objetoEquip->altaEquip($inventario, $serie,$nombre,$descripcion,$marca);
            header('Location: #');
        }
?>