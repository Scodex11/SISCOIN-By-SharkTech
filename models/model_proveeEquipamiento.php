<?php
//Incluimos los archivos necesarios
require_once("db.php");
require_once("helpers.php");

class tipoEquipamiento extends Conectar //Creamos la clase rios que extiende o hereda de la clase conectar
{
	private $db; 

	//Crear nuestro constructor
	public function __construct(){
		$this->db=parent::conexion(); //Parent para hacer referencia a la clase padre
	}

	public function getDatos(){
		
		$sql="SELECT `fecha`, `ID_Equipamiento`, `RUT`, `precio`, `metodo_compra`, `cantidad` FROM `provee_equipamiento`";
		$datos= $this->db->query($sql);
		
		// Creamos array para listar tabla
		$arreglo=array();

		while($reg=$datos->fetch_object()){
			$arreglo[]=$reg;
		}

		return $arreglo;   
	}
	
	public function getDatosId($id){
		
		$sql="SELECT `fecha`, `ID_Equipamiento`, `RUT`, `precio`, `metodo_compra`, `cantidad` FROM `provee_equipamiento` WHERE ID_Equipamiento='$id'";
		
		$datos= $this->db->query($sql);
		$arreglo=array();
		
		while($reg=$datos->fetch_object()){
			$arreglo[]=$reg;
		}

		return $arreglo;
		
	}

	public function insertarDatos($fecha, $id, $RUT, $precio, $metodo, $cantidad){

		$sql="INSERT INTO `provee_equipamiento`(`fecha`, `ID_Equipamiento`, `RUT`, `precio`, `metodo_compra`, `cantidad`) VALUES ('$fecha', '$id', '$RUT', '$precio', '$metodo', '$cantidad')";

		$this->db->query($sql);
	}
	
	public function actualizarDatos($fecha, $id, $RUT, $precio, $metodo, $cantidad){
		$sql="UPDATE `provee_equipamiento` SET `fecha` = '$fecha', `ID_Equipamiento` = '$id', `RUT` = '$RUT', `precio`='$precio',`metodo_compra`='$metodo',`cantidad`='$cantidad' WHERE `provee_equipamiento`.`fecha` = '$fecha' AND `provee_equipamiento`.`ID_Equipamiento` = '$id' AND `provee_equipamiento`.`RUT` = '$RUT'";

		$this->db->query($sql);
		
	}
	
	public function eliminarDatos($id){
		
		$sql="DELETE FROM `provee_equipamiento` WHERE ID_Equipamiento = '$id'";
		$this->db->query($sql);
		
	}
}
?>

