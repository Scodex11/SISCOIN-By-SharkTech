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
		
		$sql="SELECT `ID`, `categoria`, `PreStock`, `CantidadMinima` FROM `tipoequipamiento`";
		$datos= $this->db->query($sql);
		
		// Creamos array para listar tabla
		$arreglo=array();

		while($reg=$datos->fetch_object()){
			$arreglo[]=$reg;
		}

		return $arreglo;   
	}
	
	public function getDatosId($id){
		
		$sql=" SELECT `ID`, `categoria`, `PreStock`, `CantidadMinima` FROM `tipoequipamiento` WHERE ID='$id' ";
		
		$datos= $this->db->query($sql);
		$arreglo=array();
		
		while($reg=$datos->fetch_object()){
			$arreglo[]=$reg;
		}

		return $arreglo;
		
	}

	public function insertarDatos($id, $categoria, $preStock, $cantMinima){

		$sql="INSERT INTO `tipoequipamiento`(`ID`, `categoria`, `PreStock`, `CantidadMinima`) VALUES ('$id', '$categoria', '$preStock', '$cantMinima')";

		$this->db->query($sql);
	}
	
	public function actualizarDatos($id, $categoria, $preStock, $cantMinima){
		$sql="UPDATE `tipoequipamiento` SET `categoria` = '$categoria', `PreStock` = '$preStock', `CantidadMinima` = '$cantMinima' WHERE `tipoequipamiento`.`ID` = '$id'";

		$this->db->query($sql);
		
	}
	
	public function eliminarDatos($id){
		
		$sql="DELETE FROM `tipoequipamiento` WHERE `tipoequipamiento`.`ID` = '$id'";
		$this->db->query($sql);
		
	}
}
?>

