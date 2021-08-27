<?php 
    require_once('db.php');

    class model_user
    {
        private $filas;
        private $user;
        private $pass;
        private $db;
        private $ID_Cargo;
        private $contraseña;
        private $usuario;



        public $error = false;


        public function __construct(){
            $this->db = Conectar::conexion();
            $this->cargos = array();
            $this->user ='';
            $this->pass ='';
            $this->contraseña ='';
            $this->usuario ='';
            $this->ID_Cargo ='';

        }

    // Método para iniciar sesión
        public function iniciarSesion($user, $pass){
            $sql = "SELECT * FROM usuario WHERE Usuario = '$user' AND Contraseña = '$pass'";

            // Comprobamos si ocurre un error al ejecutar la consulta

            if(!$consulta = $this->db->query($sql)){
                echo "<script>alert('¡Error al crear la consulta!');</script>";
            }else{
                
                // Devolvemos cant de registros en forma de NUMERO
                $filas = $consulta->fetch_row();

                // Comprobamos que haya registros

                if ($filas == false) {
                    echo "<script>alert('Error: usuario y/o clave incorrectos!!');</script>";
                }else{
                    // Guardo el ID del cargo del usuario que inició sesión
                   $cargo = $filas[2];

                    //Hago corresponder a '$cargo' el cargo del usuario
                   $_SESSION['ID_Cargo'] = $cargo;
                   
                    
                }
            }
                
        }
        
// Método para registrar un trabajador con un cargo
        public function registrarUser($usuario, $contraseña, $ID_Cargo){
            $sql = "INSERT INTO `usuario` (`Usuario`, `Contraseña`, `ID_Cargo`) VALUES ('$usuario', '$contraseña', '$ID_Cargo')";

            $consulta = $this->db->query($sql);

            if (!$consulta) {
                echo "<script>alert('¡HA OCURRIDO UN ERROR BOBLY!');</script>";
            }else{
                echo "<script>alert('¡Usuario registrado con éxito!');</script>";
            }
        }


        // Tomar tipo de cargo
        public function getCargo(){
            $sql = "SELECT * FROM cargos";

            $consulta = $this->db->query($sql);
        
            while($filas=$consulta->fetch_assoc()){
				$this->cargos[]=$filas;
			}
			return $this->cargos;
        }
    }

?>