<?php 
    require_once('../../models/model_GestionSoli.php');
    $soliEquip = new GestionSoli();
	// Listado de Solicitudes
    $u = $soliEquip->getDatos();



    // Alta  de Solicitudes
	// if(isset($_POST["id"])){
    //     $id = $_POST['id'];
    //     $categoria = $_POST['categoria'];
    //     $preStock = $_POST['preStock'];
    //     $cantMinima = $_POST['cantidadMinima'];

	//     $result =  $tipoEquipamiento->insertarDatos($id, $categoria, $preStock, $cantMinima);
	//     header("Location: view_ABM_tipoEquipamiento.php?m=1");
	// }
    	
	if (isset($_POST['editar'])) {
        if(!isset($_POST["id"]) or !is_numeric($_POST["id"])){
            die("error 404");
        }
        
        if(sizeof($datos)==0){
            die("error 404");
        }
        
    }

    if(isset($_POST["actualizar"])){

        $id = $_POST['id'];
        $estadoSolicitud = $_POST['estadoSolicitud'];      
            if ($estadoSolicitud == "ACEPTAR") {
                $id = $_POST["id"];
                $estado = $_POST["estado"];
                $idEquip = $_POST["idequip"];
                $fechaSoli = $_POST["fechaSoli"];
                $oficina = $_POST["oficina"];
                $motivo = $_POST["motivo"];
                $detalle = $_POST["detalle"];
                $cantEquip = $_POST["cantEquip"];
                
                

                 $buscarInventario = $soliEquip->traerEquip($idEquip); 
                
                 $inventario = $buscarInventario['N°Inventario'];
                //  Convetrimos a entero
                 $inv = (int)$inventario;

                 $busca= $soliEquip->$buscarFechaInicio($inv);

                //  echo $buscarFechaInicio['Fecha_Inicio'];
                // exit;
                //  $instalar = $soliEquip->instalar($fechaSoli, $buscarInventario['N°Inventario'], $oficina);

                //  $finalizar = $soliEquip->finalizarEstado($fechaSoli, , $buscarInventario['N°Inventario']);

                
            }

        $result = $soliEquip->actualizarEstado($id, $estadoSolicitud);
        header("Location: view_GestionSoli.php?m=2");
    }
	
    



?>



