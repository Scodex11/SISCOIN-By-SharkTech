<?php 
    require_once('db.php');

    class model_solicita
    {
        private $db;
        private $solicitudes;
        private $tipoEquipo;
        private $Oficinas;

        public function __construct(){
            $this->db = Conectar::conexion();
            $this->solicitudes = array();
            $this->tipoEquipo = array();
            $this->Oficinas = array();
        }




        public function getSolicitudes(){
            $sql = "SELECT `N°Solicitud`, `Categoria`, `fecha`, `Denominacion`, `Estado_Solicitud`, `motivo`, `detalle`, `Cantidad_Equipos` FROM `solicita_equipamiento` 
            INNER JOIN tipoequipamiento ON tipoequipamiento.ID = solicita_equipamiento.ID_Equipamiento 
            INNER JOIN oficina ON oficina.ID_Oficina = solicita_equipamiento.ID_Oficina";

            $consulta = $this->db->query($sql);
                    
            // Recorremos el array
            while($filas=$consulta->fetch_assoc()){
                $this->solicitudes[]=$filas;
            }
            // Devolvemos el resultado en el array "solicitudes"
            return $this->solicitudes;

        }


        public function getTipoEquipo(){
            $sql = "SELECT * FROM `tipoequipamiento`";

            $consulta = $this->db->query($sql);
                    
            // Recorremos el array
            while($filas=$consulta->fetch_assoc()){
                $this->tipoEquipo[]=$filas;
            }
            // Devolvemos el resultado en el array "tipoEquipo"
            return $this->tipoEquipo;
        }


        public function getOficinas(){

            $sql = "SELECT * FROM `oficina`";

            $consulta = $this->db->query($sql);
                    
            // Recorremos el array
            while($filas=$consulta->fetch_assoc()){
                $this->Oficinas[]=$filas;
            }
            // Devolvemos el resultado en el array "Oficinas"
            return $this->Oficinas;
        } 


        public function altaSoli($ID_Equipamiento, $fecha, $oficina, $motivo, $detalle, $cantEquipos){
            $sql = "INSERT INTO `solicita_equipamiento` (`N°Solicitud`, `ID_Equipamiento`, `fecha`, `ID_Oficina`, `Estado_Solicitud`, `motivo`, `detalle`, `Cantidad_Equipos`) 
            VALUES (NULL, '$ID_Equipamiento', '$fecha', '$oficina', 'Enviado', '$motivo', '$detalle', '$cantEquipos')";

            $consulta = $this->db->query($sql);

            // Validamos
            if (!$consulta) {
                echo "<script>alert('¡Ha ocurrido un error al enviar la solicitud!');</script>";
            }else{
                echo "<script>alert('¡Soliicutd enviada con éxito! Se le informará sobre su estado');</script>";
                header('Location: #');
            }

        }








    }
    

?>