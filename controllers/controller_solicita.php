<?php 
    require_once('../models/model_solicita.php');
    
    session_start(); 
    $objetoSolicita = new model_solicita();

    // Tabla Solicitudes
    $datosSoli = $objetoSolicita->getSolicitudes();

    // ComboBox 'Tipo Equipo' 
    $comboTipoEquipo = $objetoSolicita->getTipoEquipo();

    // ComboBox 'Oficina'
    $comboOficina = $objetoSolicita->getOficinas();



    if (isset($_POST['btn_enviar'])) {

        $ID_Equipamiento = $_POST['cbx_Equipo']; 
        $fecha = $_POST['fechaHoy']; 
        $oficina = $_POST['cbx_Oficina']; 
        $motivo = $_POST['motivo']; 
        $detalle = $_POST['detalle']; 
        $cantEquipos = $_POST['cantidad']; 


        $result = $objetoSolicita->altaSoli($ID_Equipamiento, $fecha, $oficina, $motivo, $detalle, $cantEquipos);
        
        header('Location: #');
    }

    
?>