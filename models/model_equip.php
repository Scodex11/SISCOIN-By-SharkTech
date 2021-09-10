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
        private $estado;
        private $pasa;
        
        
        public function __construct(){
			$this->db = Conectar::conexion();
			$this->equip = array();
			$this->estado = array();
			$this->pasa = array();
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

        // ComboBox estados
        public function getEstados(){
            $sql = "SELECT * FROM estado";
            $consulta = $this->db->query($sql);

            // Recorremos el array
            while($filas=$consulta->fetch_assoc()){
				$this->estado[]=$filas;
			}
            // Devolvemos el resultado en el array "equip"
			return $this->estado;
        }

        // ComboBox Pasa
        public function getPasa(){
            $sql = "SELECT * FROM pasa";
            $consulta = $this->db->query($sql);

            // Recorremos el array
            while($filas=$consulta->fetch_assoc()){
				$this->pasa[]=$filas;
			}
            // Devolvemos el resultado en el array "equip"
			return $this->pasa;
        }

        // Tabla Gestion Estados
        public function getTablaPasa(){
            $sql = "SELECT Fecha_Inicio, nombre, nombre_Estado, Fecha_Cambio FROM `pasa` LEFT JOIN estado ON pasa.ID_Estado = estado.ID_Estado LEFT JOIN equipamiento ON pasa.N°inventario = equipamiento.N°Inventario";
            $consulta = $this->db->query($sql);

            // Recorremos el array
            while($filas=$consulta->fetch_assoc()){
				$this->pasa[]=$filas;
			}
            // Devolvemos el resultado en el array "equip"
			return $this->pasa;
        }
    
        






        // Alta en PASA
        public function altaPasa($fecha_Inicio, $inventario, $ID_Estado, $fecha_Cambio){
            $sql = "INSERT INTO `pasa`(`Fecha_Inicio`, `N°inventario`, `ID_Estado`, `Fecha_Cambio`) VALUES ('$fecha_Inicio', '$inventario', '$ID_Estado', '$fecha_Cambio')";
            $consulta = $this->db->query($sql);

            // Validamos 
            if (!$consulta) {
                echo "<script>alert('¡Ha ocurrido un error al ejecutar el alta ESTADO!');</script>";
            }else{
                echo "<script>alert('¡ESTADO ASIGNADO CON ÉXITO!');</script>";
                // Actualizamos la página
                header('Location: #');
            }
        }





/*Modificaciones */

        // Modificar en 'pasa' el ESTADO y FECHA CAMBIO
        public function modificarPasa($inventario, $ID_Estado, $fecha_Cambio){
            
            $sql = "UPDATE `pasa` SET `ID_Estado` = '$ID_Estado', `Fecha_Cambio` = '$fecha_Cambio' WHERE `pasa`.`N°inventario` = $inventario;";
            // Ejecutamos la consulta
            $consulta = $this->db->query($sql);

            // Validamos
            if (!$consulta) {
                echo "<script>alert('¡Ha ocurrido un error al ejecutar la modificación DE ESTADO!');</script>";
            }else{
                echo "<script>alert('¡PASA modificado con éxito!');</script>";
                header('Location: #');
            }
        }

        
      
        

     }

?>