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
		}

// Listar flores
        public function getEquipamiento(){

            $sql = "SELECT * FROM `equipamiento`";
            $consulta = $this->db->query($sql);
        
            while($filas=$consulta->fetch_assoc()){
				$this->equip[]=$filas;
			}
			return $this->equip;
        }

// Insertar un equipamiento
        public function altaEquip($inventario, $serie,$nombre,$descripcion,$marca){
            $sql = "INSERT INTO `equipamiento`(`N°Inventario`, `N°Serie`, `Nombre`, `descripcion`, `marca`) VALUES ('$inventario','$serie','$nombre','$descripcion','$marca')";
            $consulta = $this->db->query($sql);

            if (!$consulta) {
                echo "<script>alert('¡HA OCURRIDO UN ERROR BOBLY!');</script>";
            }else{
                echo "<script>alert('¡SOS EL PROPIO!');</script>";
            }
        }
        
    
   


// Modificar una flor 
        public function modificarFlor($codigo, $nombre){
            $sql = "UPDATE `flor` SET `nombre` = '$nombre' WHERE `flor`.`codigo` = $codigo";
            $consulta = $this->db->query($sql);
        }

// Eliminar una flor FÍSICAMENTE

        public function bajaFlor($codigo){
            $sql = "DELETE FROM `flor` WHERE `flor`.`codigo` = $codigo";
            $consulta = $this->db->query($sql);
        }
        





    }
    

?>