<?php 
    require_once('models/model_user.php');

// Instancio mi objeto de la clase 'model_user'
    $objetoUser = new model_user();
    
// Decimos que comenzamos vamos a usar variables de SESSION
    session_start();
    
    
// Iniciar Sesión
    if (isset($_POST['ingresar'])) {
// Tomamos los datos del formulario
        $user = $_POST['user'];
        $pass = MD5($_POST['pass']);// Contraseña CIFRADA


        // Comprueba que no estén vacíos
        if (isset($user) && isset($pass)) {
            // Pasamos parámetros al método para que compruebe si existe
            $ingresar = $objetoUser->iniciarSesion($user,$pass);
            
            // Guardamos el ID con el que se inició sesión
            if (!empty($_SESSION['ID_Cargo'])) {

                // Muestra la vista según su ID_Cargo
                    switch ($_SESSION['ID_Cargo']) {
                        case 1:
                            header('Location: views/view_index_informatica.php');
                        break;
                        
                        case 2:
                            header('Location: views/view_index_oficina.php');
                        break;

                        case 3:
                            header('Location: views/view_index_compras.php');
                        break;

                        case 4:
                            header('Location: views/view_index_auditoria.php');
                        break;

                        case 5:
                            header('Location: views/view_index_subA.php');
                        break;

                        case 6:
                            header('Location: views/view_index_subB.php');
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
        session_start();//Usamos variables de session
                
        session_unset();    //Liberamos todas las variables de sesión
        session_destroy();  //Destruye toda la información asociada con la sesión actual. 
        header('Location: index.php');
    }

    
    

    require_once('views/view_login.php'); 
?>
