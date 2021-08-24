<?php 
        require_once('../models/model_user.php');

        // Instancio mi objeto de la clase 'model_user'
        $objetoUsere = new model_user();

        // REGISTRAR
            if (isset($_POST['registrar'])) {
                $usuario = $_POST['user'];
                // Contraseña CIFRADA
                $contraseña = $_POST['pass'];

                $result = $objetoUsere->registrarUser($usuario, $contraseña);
                
            }

        
?>