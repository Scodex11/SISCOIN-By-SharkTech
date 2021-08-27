<?php 
    require_once('models/model_user.php');

// Instancio mi objeto de la clase 'model_user'
    $objetoUser = new model_user();
    
// Iniciar Sesión

    

    if (isset($_POST['ingresar'])) {
        session_start();

        $user = $_POST['user'];
        // Contraseña CIFRADA
        $pass = MD5($_POST['pass']);

        // Comprueba que no estén vacíos
        if (isset($user) && isset($pass)) {
            // Pasamos parámetros a INICIAR SESIÓN para que compruebe si existe
            $ingresar = $objetoUser->iniciarSesion($user,$pass);

            // Guardamos el ID con el que se inició sesión
            $cargo = $_SESSION['ID_Cargo'];
            // Validamos cargo y enviamos a su respectiva ventana
            if (isset($cargo)) {
                // 
             

                switch ($cargo) {
                    case 1:
                        header('Location: views/view_index_informatica.php');
                    break;
                    
                    case 2:
                        header('Location: views/view_oficina.php');
                    break;
                    
                    default:
                }
            }
        }
        
    }
    
    if (isset($_POST['cerrar_sesion'])) {
        header('Location: index.php');
        session_unset();

        session_destroy();

    }

    
    

    require_once('views/view_login.php');
?>