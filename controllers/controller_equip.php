<?php 
// Requerimos los métodos de 'model_equip'
        require_once('../models/model_equip.php');

        // Creamos objeto de la clase 'model_equip' para trabajar con sus funciones
        $objetoEquip = new model_equip();

        //Listamos TABLA EQUIPAMIENTO
        $datosEquip = $objetoEquip->getEquipamiento();
     
        


// BOTON GUARDAR
        if (isset($_POST['btn_guardar'])) {
        // Tomamos los datos de los textField
            $inventario = $_POST['inventario'];           
            $serie = $_POST['serie'];
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            $marca = $_POST['marca'];

        // Ejecutamos el método de ALTA
            $result = $objetoEquip->altaEquip($inventario, $serie,$nombre,$descripcion,$marca);
        // Refrescamos la página
            header('Location: #');
        }

// BOTON MODIFICAR
        if (isset($_POST['btn_modificar'])) {
          // Tomamos los datos de los textField
                $inventario = $_POST['inventario'];           
                $nombre = $_POST['nombre'];

                // Validamos que no estén vacíos
                if ((isset($inventario) && !empty($inventario)) && (isset($nombre) && !empty($nombre))) {
                        $result = $objetoEquip->modificarEquip($inventario, $nombre);
                }else{
                        echo "<script>alert('¡El nombre y/o N° Inventario están vacíos!');</script>";
                }
                // Actualizamos la página
                header('Location: #');
        }

// BOTON ELIMINAR
        if (isset($_POST['btn_eliminar'])) {
                // Tomamos los datos de los textField
                      $inventario = $_POST['inventario'];           
      
                //Validamos que el campo ID no esté vacío
                      if (isset($inventario) && !empty($inventario)) {
                              $result = $objetoEquip->bajaEquip($inventario);
                      }else{
                        echo "<script>alert('¡El N° Inventario está vacío!');</script>";
                      }
                // Refescamos la página
                      header('Location: #');
        }
?>