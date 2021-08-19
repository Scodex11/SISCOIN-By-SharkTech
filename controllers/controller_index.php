<?php 
    require_once('models/model_user.php');

// Instancio mi objeto de la clase 'model_user'
    $objetoUser = new model_user();














// REGISTRAR
    if (isset($_POST['registrar'])) {
        $user = $_POST['user'];
        // Contraseña CIFRADA
        $pass = MD5($_POST['pass']);

        // Comprobamos que NO esté vacío
        if (!empty($user) || !empty($pass)) {
            $result = $objetoUser->registrar($user, $pass);
        }else{
            echo "<script>alert('ERROR: Usuario y/o constraseña VACÍOS');</script>";
        }
    }

    if (isset($_POST['botonIniciar'])) {
        header('Location: views/view_login.php');
    }
    
// Iniciar Sesión

    if (isset($_POST['ingresar'])) {
        $user = $_POST['user'];
        // Contraseña CIFRADA
        $pass = $_POST['pass'];

        $ingresar = $objetoUser->iniciarSesion($user,$pass);
    }
    

    require_once('views/view_login.php');
?>