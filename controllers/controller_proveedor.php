<?php 
    require_once('../models/model_proveedor.php');
    
    session_start();
    $objetoProveedor =  new model_proveedor();
// Tabla proveedor con telefono, rut y razón social 
    $datosProveedorTotal = $objetoProveedor->getProveedorTotal();

    // Tabla Proveedor con RUT y Razón Social
    $datosProveedorRazon = $objetoProveedor->getProveedorRazon();
    // con RUT y teléfono
    $datosProveedorTel = $objetoProveedor->getProveedorTel();





    if (isset($_POST['btn_modificarRazon'])) {
        $RUT = $_POST['rut'];
        $razonSocial = $_POST['razonSocial'];

        $result = $objetoProveedor->modifRazon($RUT, $razonSocial);        
    }

    if (isset($_POST['btn_modificarTel'])) {
        $RUT = $_POST['rut'];
        $telefono = $_POST['telefono'];
        $telModif = $_POST['telModif'];
        $result = $objetoProveedor->modifTel($RUT, $telefono, $telModif);        
    }

    if (isset($_POST['btn_guardarProveedor'])) {
        $RUT = $_POST['rut'];
        $razonSocial = $_POST['razonSocial'];

        $result = $objetoProveedor->altaProveedor($RUT, $razonSocial);        
    }

    if (isset($_POST['btn_guardarTel'])) {
        $RUT = $_POST['rut'];
        $telefono = $_POST['telefono'];

        $result = $objetoProveedor->altaTel($RUT, $telefono);
    }

    if (isset($_POST['btn_eliminar'])) {
        $RUT = $_POST['rut'];
            
        $result = $objetoProveedor->bajaRazon($RUT);
        $result2 = $objetoProveedor->bajaTel($RUT);
    }


?>