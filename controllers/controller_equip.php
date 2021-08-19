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

// BOTON MODIFICAR
        if (isset($_POST['btn_modificar'])) {
          // Datos de los textField
                $inventario = $_POST['inventario'];           
                $serie = $_POST['serie'];
                $nombre = $_POST['nombre'];
                $descripcion = $_POST['descripcion'];
                $marca = $_POST['marca'];

                if ((isset($inventario) && !empty($inventario)) && (isset($nombre) && !empty($nombre))) {
                        $result = $objetoEquip->modificarEquip($inventario, $nombre);

                }else{
                        echo 'CAMPOS VACIOS';
                }
                header('Location: #');
        }

// BOTON ELIMINAR
        if (isset($_POST['btn_eliminar'])) {
                // Datos de los textField
                      $inventario = $_POST['inventario'];           
      
                      if (isset($inventario) && !empty($inventario)) {
                              $result = $objetoEquip->bajaEquip($inventario);
                      }else{
                              echo 'CAMPOS VACIOS';
                      }
                      header('Location: #');
        }
?>