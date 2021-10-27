<?php 
    require_once('../../models/model_proveeEquipamiento.php');
    $proveeEquipamiento = new proveeEquipamiento();
	// Listado de Tipo Equipamiento
    $u = $proveeEquipamiento->getDatos();
// ComboBox Categorias
    $cat = $proveeEquipamiento->getCategoria();
// ComboBox Proveedores
    $prov = $proveeEquipamiento->getProveedores();

    // Tabla de Provee Equipamiento
    $tablaProvee = $proveeEquipamiento->getDatosTabla();


    // Alta OrdenCompra
	if(isset($_POST["fechaHoy"])){
        $fechaHoy = $_POST['fechaHoy'];
        $categoria = $_POST['cbx_categoria'];
        $RUT = $_POST['cbx_RUT'];
        $precio = $_POST['precio'];
        $metodoCompra = $_POST['metodoCompra'];
        $cantidad = $_POST['cantidad'];

	    $result =  $proveeEquipamiento->insertarDatos($fechaHoy, $categoria, $RUT, $precio, $metodoCompra, $cantidad);
	    header("Location: view_ABM_ProveeEquipamiento.php?m=1");
	}

	
    



?>