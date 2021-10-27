<?php
//Incluimos los archivos necesarios
require_once("db.php");
require_once("helpers.php");

class proveeEquipamiento extends Conectar 
{
	private $db; 
	private $tipoEquip;
	private $proveedor;
	//Crear nuestro constructor
	public function __construct(){
		$this->db=parent::conexion(); //Parent para hacer referencia a la clase padre
		$this->tipoEquip = array();
		$this->proveedor = array();
	}

	public function getDatosTabla(){
		
		$sql="SELECT provee_equipamiento.fecha, tipoequipamiento.categoria, proveedor.razon_social, provee_equipamiento.precio, provee_equipamiento.metodo_compra, provee_equipamiento.cantidad 
		FROM `provee_equipamiento`, tipoequipamiento, proveedor 
		WHERE
			tipoequipamiento.ID = provee_equipamiento.ID_Equipamiento
		AND
			proveedor.RUT = provee_equipamiento.RUT;
			
		";
		$datos= $this->db->query($sql);
		
		// Creamos array para listar tabla
		$arreglo=array();

		while($reg=$datos->fetch_object()){
			$arreglo[]=$reg;
		}

		return $arreglo;   
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
	
	public function getDatosId($id,$RUT){
		
		$sql="SELECT `fecha`, `ID_Equipamiento`, `RUT`, `precio`, `metodo_compra`, `cantidad` FROM `provee_equipamiento` WHERE ID_Equipamiento='$id' AND RUT = '$RUT'";
		
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


	// Listado de Categorias
	public function getCategoria(){

        $sql = "SELECT * FROM `tipoequipamiento`";
        // Ejecutamos la consulta
        $consulta = $this->db->query($sql);
    
        // Recorremos el array
        while($filas=$consulta->fetch_assoc()){
            $this->TipoEquip[]=$filas;
        }
        // Devolvemos el resultado en el array "TipoEquip"
        return $this->TipoEquip;
    }

	// Listado de Categorias
	public function getProveedores(){

        $sql = "SELECT * FROM `proveedor`";
        // Ejecutamos la consulta
        $consulta = $this->db->query($sql);
    
        // Recorremos el array
        while($filas=$consulta->fetch_assoc()){
            $this->proveedor[]=$filas;
        }
        // Devolvemos el resultado en el array "TipoEquip"
        return $this->proveedor;
    }

}

?>

