<?php 
    require_once('db.php');

    class model_user
    {
        private $filas;
        private $user;
        private $pass;
        private $db;



        public $error = false;


        public function __construct(){
            $this->db = Conectar::conexion();
            $this->filas = array();
            $this->user ="";
            $this->pass ="";

        }
        // if ($stmt) {
        //     echo "<script>alert('¡Se ha creado con éxito!');</script>";
        // }else{
        //     echo "<script>alert('Error: ¡Ha ocurrido un error al crear el usuario!');</script>";
        // }

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

        // Método para registrar un trabajador
        public function registrar($user, $pass){
            $sql = "INSERT INTO usuario (Usuario, Contraseña) VALUES '$user', '$pass'";

             // Comprobamos si ocurre un error al ejecutar la consulta

             if(!$consulta = $this->db->query($sql)){
                echo "<script>alert('¡Error al crear pana!');</script>";
            }else{
                echo "<script>alert('Pana feliz, comprobá en la bd anashe');</script>";
            }
        }

    }

?>