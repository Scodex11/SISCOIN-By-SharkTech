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
    


// Listar flores
        public function getEquipamiento(){

            $sql = "SELECT * FROM `equipamiento`";
            $consulta = $this->db->query($sql);
        
            while($filas=$consulta->fetch_assoc()){
				$this->equip[]=$filas;
			}
			return $this->equip;
        }

// ALTA DE EQUIPAMIENTO
        public function altaEquip($inventario, $serie,$nombre,$descripcion,$marca){
            $sql = "INSERT INTO `equipamiento`(`N°Inventario`, `N°Serie`, `Nombre`, `descripcion`, `marca`) VALUES ('$inventario','$serie','$nombre','$descripcion','$marca')";
            $consulta = $this->db->query($sql);

            if (!$consulta) {
                echo "<script>alert('¡HA OCURRIDO UN ERROR BOBLY!');</script>";
            }else{
                echo "<script>alert('¡SOS EL PROPIO!');</script>";
            }
        }
        
    
   


// MODIFICAR EQUIPAMIENTO
        public function modificarEquip($inventario, $nombre){
            $sql = "UPDATE `equipamiento` SET `Nombre`='$nombre' WHERE `N°Inventario`='$inventario'";

            $consulta = $this->db->query($sql);

            if (!$consulta) {
                echo "<script>alert('¡HA OCURRIDO UN ERROR EN LA MODIFICACION!');</script>";
            }else{
                echo "<script>alert('¡SOS EL PROPIO MODIFICANDO!');</script>";
            }
        }

        public function bajaEquip($inventario){
            $sql = "DELETE FROM `equipamiento` WHERE `N°Inventario`='$inventario'";
            $consulta = $this->db->query($sql);
        }

        
        }

?>