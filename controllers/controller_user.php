<?php 
        require_once('../models/model_user.php');

        // Instancio mi objeto de la clase 'model_user'
        $objetoUsere = new model_user();
        
        // Variable para ComboBox del Formulario
        $comboCargo = $objetoUsere->getCargo();

        // Listado de usuarios
        $datosUser = $objetoUsere->getUser();
        
        session_start();


        // BOTÓN REGISTRAR
            if (isset($_POST['btn_registrar'])) {
                $usuario = $_POST['user'];
                $contraseña = MD5($_POST['pass']);// Contraseña CIFRADA
                $ID_Cargo = $_POST['cbx_cargo'];
                $nombreCompleto = $_POST['nombreCompleto'];

                // Validamos que los campos no estén vacíos
                if (!empty($usuario) || !empty($contraseña) || !empty($ID_Cargo) || !empty($nombreCompleto)) {
                   
                    // Realizamos el alta del usuario
                    $result = $objetoUsere->registrarUser($usuario, $contraseña, $ID_Cargo, $nombreCompleto);
                }else{
                    echo "<script>alert('¡Ha ocurrido un error al ejecutar el alta de usuario!');</script>";
                }
            }

            // BOTÓN ELIMINAR
            if (isset($_POST['btn_eliminar'])) {
                $usuario = $_POST['user']; 
                $result = $objetoUsere->bajaUser($usuario);
            }

        // BOTÓN MODIFICAR
            if (isset($_POST['btn_modificar'])) {

                $nombreCompleto = $_POST['nombreCompleto'];
                $usuario = $_POST['user']; 
                $result = $objetoUsere->modificarUser($usuario, $nombreCompleto);
            }
        

            // BOTÓN MODIFICAR CONTRASEÑA
            if (isset($_POST['btn_pass'])) {

                $usuario = $_POST['user']; 
                $contraseña = MD5($_POST['pass']);

                $result = $objetoUsere->modificarPass($usuario, $contraseña); 
            }
            


// ESTE CONTROLADOR ES LLAMADO DESDE: views/view_Registrar.php 
        
?>