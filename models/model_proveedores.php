<?php
//Incluimos los archivos necesarios
require_once("db.php");
require_once("helpers.php");

class Proveedores extends Conectar //Creamos la clase rios que extiende o hereda de la clase conectar
{
	private $db; 

	//Crear nuestro constructor
	public function __construct(){
		$this->db=parent::conexion(); //Parent para hacer referencia a la clase padre
	}

	public function getDatos(){
		
		$sql= "SELECT `RUT`, `razon_social` FROM `proveedor`" ;
		$datos= $this->db->query($sql);
		
		// Creamos array para listar tabla
		$arreglo=array();

		while($reg=$datos->fetch_object()){
			$arreglo[]=$reg;
		}

		return $arreglo;   
	}
	
	public function getDatosTel(){
		
		$sql= "	SELECT proveedor.RUT, proveedor.razon_social, teléfono.telefono
		FROM proveedor, teléfono
		WHERE
		proveedor.RUT = teléfono.RUT_Proveedor" ;
		$datos= $this->db->query($sql);
		
		// Creamos array para listar tabla
		$arreglo=array();

		while($reg=$datos->fetch_object()){
			$arreglo[]=$reg;
		}

		return $arreglo;   
	}
	

	public function getDatosId($RUT){
		
		$sql="SELECT `RUT`, `razon_social` FROM `proveedor` WHERE RUT='$RUT'";
		
		$datos= $this->db->query($sql);
		$arreglo=array();
		
		while($reg=$datos->fetch_object()){
			$arreglo[]=$reg;
		}

		return $arreglo;
		
	}

	public function insertarDatos($RUT, $razon_social){

		$sql="INSERT INTO `proveedor`(`RUT`, `razon_social`) VALUES ('$RUT', '$razon_social')";

		$this->db->query($sql);
	}
	
	public function actualizarDatos($RUT, $razon_social){
		$sql="UPDATE `proveedor` SET `RUT` = '$RUT', `razon_social` = '$razon_social' WHERE `proveedor`.`RUT` = '$RUT'";

		$this->db->query($sql);
		
	}
	
	public function eliminarDatos($RUT){
		
		$sql="DELETE FROM `proveedor` WHERE `RUT` = '$RUT'";
		$this->db->query($sql);
		
	}
}
?>

