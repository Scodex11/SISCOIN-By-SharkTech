<?php 
    require_once('db.php');

    class model_proveedor
    {
        private $db;
        private $proveedorTotal;
        private $proveedorRazon;
        private $proveedorTel;

        
        
        
        public function __construct(){
			$this->db = Conectar::conexion();
			$this->proveedorTotal = array();
			$this->proveedorRazon = array();
			$this->proveedorTel = array();
			
  
		}
    
/*// Validamos 
            if (!$consulta) {
                echo "<script>alert('¡Ha ocurrido un error al ejecutar el alta!');</script>";
            }else{
                echo "<script>alert('¡Equipamiento agregado con éxito!');</script>";
            } */



// Listar proveedores con Rut, teléfonos y razón social
        public function getProveedorTotal(){

            $sql = "SELECT `RUT`, `razon_social`, `telefono` FROM `proveedor`
            INNER JOIN teléfono ON teléfono.RUT_Proveedor = proveedor.RUT";
            // Ejecutamos la consulta
            $consulta = $this->db->query($sql);
        
            // Recorremos el array
            while($filas=$consulta->fetch_assoc()){
				$this->proveedorTotal[]=$filas;
			}
            // Devolvemos el resultado en el array "proveedorTotal"
			return $this->proveedorTotal;
        }
        
        // Listar RUT  y razón social
        public function getProveedorRazon(){

            $sql = "SELECT * FROM `proveedor` WHERE 1";
            // Ejecutamos la consulta
            $consulta = $this->db->query($sql);
        
            // Recorremos el array
            while($filas=$consulta->fetch_assoc()){
				$this->proveedorRazon[]=$filas;
			}
            // Devolvemos el resultado en el array "proveedorRazon"
			return $this->proveedorRazon;
        
        }
        // Listar RUT y telefono 
        public function getProveedorTel(){

            $sql = "SELECT `razon_social`, `telefono` FROM `teléfono` INNER JOIN proveedor ON proveedor.RUT = teléfono.RUT_Proveedor";
            // Ejecutamos la consulta
            $consulta = $this->db->query($sql);
        
            // Recorremos el array
            while($filas=$consulta->fetch_assoc()){
				$this->proveedorTel[]=$filas;
			}
            // Devolvemos el resultado en el array "proveedorTel"
			return $this->proveedorTel;
        }




        
        // Alta RUT y Razón Social del Proveedor
        public function altaProveedor($RUT, $razonSocial){
            
            $sql = "INSERT INTO `proveedor`(`RUT`, `razon_social`) VALUES ('$RUT','$razonSocial')";
            // Ejecutamos consulta
            $consulta = $this->db->query($sql);
            
            // Validamos 
            if (!$consulta) {
                echo "<script>alert('¡Ha ocurrido un error al ejecutar el alta!');</script>";
            }else{
                echo "<script>alert('Proveedor agregado con éxito!');</script>";
                header('Location: #');
            }
        }

        // Alta Teléfono Proveedor
        public function altaTel($RUT, $telefono){
            $sql = "INSERT INTO `teléfono`(`RUT_Proveedor`, `telefono`) VALUES ('$RUT', $telefono)";
            // Ejecutamos consulta
            $consulta = $this->db->query($sql);
            
            // Validamos 
            if (!$consulta) {
                echo "<script>alert('OCURRIO UN ERROR AL AGREGAR TELEFONO !');</script>";
            }else{
                echo "<script>alert('Telefono agregado con éxito!');</script>";
                header('Location: #');
            }
        }


// Modificar Razón social de un proveedor
        public function modifRazon($RUT, $razonSocial){
            $sql = "UPDATE `proveedor` SET `razon_social` = '$razonSocial' WHERE `proveedor`.`RUT` = ' $RUT'";
            // Ejecutamos consulta
            $consulta = $this->db->query($sql);
            
            // Validamos 
            if (!$consulta) {
                echo "<script>alert('¡Error al ejecutar la modificación!');</script>";
            }else{
                echo "<script>alert('Razón social  modificada con éxito!');</script>";
                header('Location: #');
            }
        }

// Modificar Teléfono de un proveedor
        public function modifTel($RUT, $telefono ,$telModif){
            $sql = "UPDATE `teléfono` SET `telefono` = '$telModif' WHERE `teléfono`.`RUT_Proveedor` = '$RUT' AND `teléfono`.`telefono` = $telefono";
            // Ejecutamos consulta
            $consulta = $this->db->query($sql);
            
            // Validamos 
            if (!$consulta) {
                echo "<script>alert('¡Error al ejecutar la modificación!');</script>";
            }else{
                echo "<script>alert('¡Teléfono modificado con éxito!');</script>";
                header('Location: #');
            }
        }


        // Baja física PROVEEDOR 
        public function bajaTel($RUT){
         $sql = "DELETE FROM `teléfono` WHERE RUT_Proveedor = ' $RUT'";
             
            
            // Ejecutamos consulta
            $consulta = $this->db->query($sql);
            
            // Validamos 
            if (!$consulta) {
                echo "<script>alert('¡Error al ejecutar la BAJA DE TELEFONO!');</script>";
            }else{
                echo "<script>alert('¡BAJA DE PROVEEDOR  éxitosa!');</script>";
                header('Location: #');
            }
        }

        // Baja física PROVEEDOR 
        public function bajaRazon($RUT){
            $sql = "DELETE FROM `proveedor` WHERE `proveedor`.`RUT` = ' $RUT'";
                
               
               // Ejecutamos consulta
               $consulta = $this->db->query($sql);
               
               // Validamos 
               if (!$consulta) {
                   echo "<script>alert('¡Error al ejecutar la BAJA DE RAZON!');</script>";
               }else{
                   echo "<script>alert('¡BAJA DE PROVEEDOR  éxitosa!');</script>";
                   header('Location: #');
               }
           }

      
        

     }

?>