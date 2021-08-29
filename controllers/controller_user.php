<?php 
        require_once('../models/model_user.php');

        // Instancio mi objeto de la clase 'model_user'
        $objetoUsere = new model_user();
        
        // Variable para ComboBox del Formulario
        $comboCargo = $objetoUsere->getCargo();

        // BOTÓN REGISTRAR
            if (isset($_POST['registrar'])) {
                $usuario = $_POST['user'];
                $contraseña = MD5($_POST['pass']);// Contraseña CIFRADA
                $ID_Cargo = $_POST['cbx_cargo'];

                // Validamos que los campos no estén vacíos
                if (isset($usuario) || isset($contraseña) || isset($ID_Cargo)) {
                    // Realizamos el alta del usuario
                    $result = $objetoUsere->registrarUser($usuario, $contraseña, $ID_Cargo);
                }
            }

// ESTE CONTROLADOR ES LLAMADO DESDE: views/view_Registrar.php 
        
?>