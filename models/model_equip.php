<?php 
    require_once('db.php');

    class model_equip
    {
        private $db;
        private $equip;

        private $inventario;           
        private $serie;
        private $nombre;
        private $descripcion;
        private $marca;

        public function __construct(){
			$this->db = Conectar::conexion();
			$this->equip = array();
			$this->inventario = '';
			$this->serie = '';
			$this->nombre = '';
			$this->descripcion = '';
			$this->marca = '';
  
		}
    


// Listar equipamiento
        public function getEquipamiento(){

            $sql = "SELECT * FROM `equipamiento`";
            // Ejecutamos la consulta
            $consulta = $this->db->query($sql);
        
            // Recorremos el array
            while($filas=$consulta->fetch_assoc()){
				$this->equip[]=$filas;
			}
            // Devolvemos el resultado en el array "equip"
			return $this->equip;
        }

// ALTA DE EQUIPAMIENTO
        public function altaEquip($inventario, $serie,$nombre,$descripcion,$marca){
            $sql = "INSERT INTO `equipamiento`(`N°Inventario`, `N°Serie`, `Nombre`, `descripcion`, `marca`) VALUES ('$inventario','$serie','$nombre','$descripcion','$marca')";
            // Ejecutamos consulta
            $consulta = $this->db->query($sql);

            // Validamos 
            if (!$consulta) {
                echo "<script>alert('¡Ha ocurrido un error al ejecutar el alta!');</script>";
            }else{
                echo "<script>alert('¡Equipamiento agregado con éxito!');</script>";
            }
        }
        
    
   


// MODIFICAR NOMBRE de EQUIPAMIENTO
        public function modificarEquip($inventario, $nombre){
            $sql = "UPDATE `equipamiento` SET `Nombre`='$nombre' WHERE `N°Inventario`='$inventario'";
            // Ejecutamos la consulta
            $consulta = $this->db->query($sql);

            // Validamos
            if (!$consulta) {
                echo "<script>alert('¡Ha ocurrido un error al ejecutar la modificación!');</script>";
            }else{
                echo "<script>alert('¡Equipamiento modificado con éxito!');</script>";
            }
        }

 // BAJA física de un equipamiento
        public function bajaEquip($inventario){
            $sql = "DELETE FROM `equipamiento` WHERE `N°Inventario`='$inventario'";
            $consulta = $this->db->query($sql);

            // Validamos
            if (!$consulta) {
                echo "<script>alert('¡Ha ocurrido un error al ejecutar la baja!');</script>";
            }else{
                echo "<script>alert('¡Equipamiento eliminado con éxito!');</script>";
            }
        }

        
     }

?>