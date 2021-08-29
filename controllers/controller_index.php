<?php 
    require_once('models/model_user.php');

// Instancio mi objeto de la clase 'model_user'
    $objetoUser = new model_user();
    
// Iniciar Sesión
session_start();
    

    if (isset($_POST['ingresar'])) {

        $user = $_POST['user'];
        // Contraseña CIFRADA
        $pass = MD5($_POST['pass']);

        // Comprueba que no estén vacíos
        if (isset($user) && isset($pass)) {
            // Pasamos parámetros a INICIAR SESIÓN para que compruebe si existe
            $ingresar = $objetoUser->iniciarSesion($user,$pass);
            
            // Guardamos el ID con el que se inició sesión
            if (!empty($_SESSION['ID_Cargo'])) {
                
                    switch ($_SESSION['ID_Cargo']) {
                        case 1:
                            header('Location: views/view_index_informatica.php');
                        break;
                        
                        case 2:
                            header('Location: views/view_oficina.php');
                        break;
                        
                        default:
                        header('Location: index.php');
                        break;
                    }
                
            }
            
           
        }
        
    }
    

    // Botón para cerrar sesión
    if (isset($_POST['cerrar_sesion'])) {
        session_start();
        
        session_unset();

        session_destroy();
        header('Location: index.php');
    }

    
    

    require_once('views/view_login.php');
?>