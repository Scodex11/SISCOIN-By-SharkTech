<?php
//Incluimos los archivos necesarios
require_once("db.php");
require_once("helpers.php");

class GestionSoli extends Conectar //Creamos la clase rios que extiende o hereda de la clase conectar
{
	private $db; 

	//Crear nuestro constructor
	public function __construct(){
		$this->db=parent::conexion(); //Parent para hacer referencia a la clase padre
	}

	public function getDatos(){
		
		$sql="SELECT solicita_Equipamiento.fecha, 
		solicita_Equipamiento.N°Solicitud, 
		tipoequipamiento.categoria, 
		oficina.denominacion, 
		solicita_Equipamiento.motivo, 
		solicita_Equipamiento.detalle, solicita_Equipamiento.Cantidad_Equipos, solicita_Equipamiento.Estado_Solicitud 
		
		FROM solicita_equipamiento, tipoequipamiento, oficina 
		
		WHERE solicita_equipamiento.ID_Equipamiento = tipoequipamiento.ID 
		AND oficina.ID_Oficina = solicita_equipamiento.ID_Oficina";
		$datos= $this->db->query($sql);
		
		// Creamos array para listar tabla
		$arreglo=array();

		while($reg=$datos->fetch_object()){
			$arreglo[]=$reg;
		}

		return $arreglo;   
	}
	
	
	public function getDatosId($idSoli){
	
		$sql="SELECT `N°Solicitud`, `ID_Equipamiento`, `fecha`, `ID_Oficina`, `Estado_Solicitud`, `motivo`, `detalle`, `Cantidad_Equipos` 
		FROM `solicita_equipamiento` 
		WHERE `N°Solicitud` = $idSoli";
		
		$datos= $this->db->query($sql);
		$arreglo=array();
		
		while($reg=$datos->fetch_object()){
			$arreglo[]=$reg;
		}

		return $arreglo;
		
	}

	public function traerEquip($idEquip){
		$sql = "SELECT equipamiento.N°Inventario 
		FROM equipamiento, asigna_equipamiento 
		WHERE 
			equipamiento.N°Inventario NOT IN (SELECT N°Inventario FROM asigna_equipamiento) 
		AND 
			equipamiento.ID_Equipamiento = '$idEquip' LIMIT 1";
		
		$i= $this->db->query($sql);
		$x = $i->fetch_assoc();
		return $x;

		
		}


	public function buscarFechaInicio($inventario){
		$sql = "SELECT * FROM pasa where `pasa`.`N°inventario` = '$inventario' AND `pasa`.`Fecha_Cambio` IS NULL";

		$i= $this->db->query($sql);
		$x = $i->fetch_assoc();
		
		return $x;
	}

	public function finalizarEstado($fechaCambio, $fechaInicio, $inventario){
		$sql = "UPDATE `pasa` SET `Fecha_Cambio` = '$fechaCambio' WHERE `pasa`.`Fecha_Inicio` = '$fechaInicio' AND `pasa`.`N°inventario` = '$inventario'";

		$this->db->query($sql);
	}

	public function estadoInstalado($fechaInicio, $inventario){
		$sql = "INSERT INTO `pasa` (`Fecha_Inicio`, `N°inventario`, `ID_Estado`) VALUES ('$fechaInicio', '$inventario', '3')";
	
		$this->db->query($sql);
	}



	public function instalar($fecha, $inventario, $oficina){
		$sql = "INSERT INTO `asigna_equipamiento` (`fecha_Asignacion`, `N°Inventario`, `ID_Oficina`) VALUES ('$fecha', '$inventario', '$oficina')";
	
		$this->db->query($sql);
	}



	public function insertarDatos($idSoli, $idEquip, $fecha, $idOficina, $estado, $motivo, $detalle, $cantEquipos){

		$sql="INSERT INTO `solicita_equipamiento`(`N°Solicitud`, `ID_Equipamiento`, `fecha`, `ID_Oficina`, `Estado_Solicitud`, `motivo`, `detalle`, `Cantidad_Equipos`) VALUES 
		('$idSoli', '$idEquip', '$fecha', '$idOficina', '$estado', '$motivo', '$detalle', '$cantEquipos')";

		$this->db->query($sql);
	}
	
	


	
	public function actualizarEstado($idSoli, $estado){


		$sql = "UPDATE `solicita_equipamiento` SET `Estado_Solicitud` = '$estado' WHERE `solicita_equipamiento`.`N°Solicitud` = '$idSoli'";

		$this->db->query($sql);
	}
	
// 
	// public function actualizarDatos($idSoli, $idEquip, $fecha, $idOficina, $estado, $motivo, $detalle, $cantEquipos){
	// 	$sql="UPDATE `solicita_equipamiento` 
	// 	SET `N°Solicitud`= '$idSoli',`ID_Equipamiento`= '$idEquip' ,`fecha`= '$fecha' ,`ID_Oficina`= '$idOficina' ,`Estado_Solicitud`= '$estado' ,`motivo`= '$motivo' ,`detalle`= '$detalle' ,`Cantidad_Equipos`=  '$cantEquipos' 
	// 	WHERE `N°Solicitud` = $idSoli AND `solicita_equipamiento`.`ID_Equipamiento` = $id;";

	// 	$this->db->query($sql);
		
	// }
// 
	// public function eliminarDatos($idSoli){
		
	// 	$sql="DELETE FROM `solicita_equipamiento` WHERE `N°Solicitud` = '$idSoli'";
	// 	$this->db->query($sql);
		
	// }
}
?>

