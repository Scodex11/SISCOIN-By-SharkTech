<?php 
        require_once('../models/model_user.php');

        // Instancio mi objeto de la clase 'model_user'
        $objetoUsere = new model_user();

        $comboCargo = $objetoUsere->getCargo();
        // REGISTRAR
            if (isset($_POST['registrar'])) {
                $usuario = $_POST['user'];
                // Contraseña CIFRADA
                $contraseña = MD5($_POST['pass']);

                $ID_Cargo = $_POST['cbx_cargo'];

                $result = $objetoUsere->registrarUser($usuario, $contraseña, $ID_Cargo);
                
            }

            



        
?>