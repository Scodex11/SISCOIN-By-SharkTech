<?php 
    require_once('db.php');

    class model_user
    {
        private $filas;
        private $user;
        private $pass;
        private $db;
        private $contraseña;
        private $usuario;



        public $error = false;


        public function __construct(){
            $this->db = Conectar::conexion();
            $this->filas = array();
            $this->user ='';
            $this->pass ='';
            $this->contraseña ='';
            $this->usuario ='';

        }

    // Método para iniciar sesión
        public function iniciarSesion($user, $pass){
            $sql = "SELECT * FROM usuario WHERE Usuario = '$user' AND Contraseña = '$pass'";

            // Comprobamos si ocurre un error al ejecutar la consulta

            if(!$consulta = $this->db->query($sql)){
                echo "<script>alert('¡Error al crear la consulta!');</script>";
            }else{
                
                // Devolvemos cant de registros en forma de NUMERO
                $filas = mysqli_num_rows($consulta);

                // Comprobamos que haya registros

                if ($filas == 0) {
                    echo "<script>alert('Error: usuario y/o clave incorrectos!!');</script>";
                }else{
                    header("location: views/view_index.php");
                }
            }
        }

        public function registrarUser($usuario, $contraseña){
            $sql = "INSERT INTO `usuario` (`Usuario`, `Contraseña`) VALUES ('$usuario', '$contraseña')";

            $consulta = $this->db->query($sql);

            if (!$consulta) {
                echo "<script>alert('¡HA OCURRIDO UN ERROR BOBLY!');</script>";
            }else{
                echo "<script>alert('¡SOS EL PROPIO!');</script>";
            }
        }

    }

?>