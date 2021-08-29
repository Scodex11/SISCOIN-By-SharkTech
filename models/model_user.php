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
           
            // Guardamos si existen filas
            $filas = mysqli_num_rows($consulta = $this->db->query($sql));
            if($filas == 0){
                echo "<script>alert('¡Usuario y/o contraseña incorrectos!');</script>";
            }else{
                // Creamos array asociativo con los registros de la consulta
                $info = $consulta->fetch_assoc();
                // Creamos la variable de sesión con el cargo asociado al usuario ingresado
                   $_SESSION['ID_Cargo'] = $info['ID_Cargo'];
                
            }     
        }
        
// Método para registrar un trabajador con un cargo
        public function registrarUser($usuario, $contraseña, $ID_Cargo){
            $sql = "INSERT INTO `usuario` (`Usuario`, `Contraseña`, `ID_Cargo`) VALUES ('$usuario', '$contraseña', '$ID_Cargo')";
            $consulta = $this->db->query($sql);

            // Validamos
            if (!$consulta) {
                echo "<script>alert('¡Ha ocurrido un error al registrar un nuevo trabajador!');</script>";
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