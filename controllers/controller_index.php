<?php 
    require_once('models/model_user.php');

// Instancio mi objeto de la clase 'model_user'
    $objetoUser = new model_user();
















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