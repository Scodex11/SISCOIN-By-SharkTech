<?php 
        require_once('../models/model_user.php');

        // Instancio mi objeto de la clase 'model_user'
        $objetoUsere = new model_user();
        
        // Variable para ComboBox del Formulario
        $comboCargo = $objetoUsere->getCargo();

        
        session_start();


        // BOTÓN REGISTRAR
            if (isset($_POST['registrar'])) {
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

// ESTE CONTROLADOR ES LLAMADO DESDE: views/view_Registrar.php 
        
?>