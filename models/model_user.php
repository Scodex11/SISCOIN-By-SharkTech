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
        private $usuarios;



        public $error = false;


        public function __construct(){
            $this->db = Conectar::conexion();
            $this->cargos = array();
            $this->usuarios = array();
            

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
                // Variable de sesión asosciada al usuario
                   $_SESSION['usuario'] = $info['Usuario'];
                // Variable de sesión asociada al nombreCompleto del usuario
                   $_SESSION['nombreCompleto'] = $info['nombreCompleto'];
                
                
            }     
        }
        
// Método para registrar un trabajador con un cargo
        public function registrarUser($usuario, $contraseña, $ID_Cargo, $nombreCompleto){
            $sql = "INSERT INTO `usuario` (`Usuario`, `Contraseña`, `ID_Cargo`, `nombreCompleto`) VALUES ('$usuario', '$contraseña', '$ID_Cargo', '$nombreCompleto')";
            $consulta = $this->db->query($sql);

            // Validamos
            if (!$consulta) {
                echo "<script>alert('¡Ha ocurrido un error al registrar un nuevo trabajador!');</script>";
            }else{
                echo "<script>alert('¡Usuario registrado con éxito!');</script>";
                header('Location: #');
            }
            
        }

        public function bajaUser($usuario){

            $sql = "DELETE FROM usuario WHERE Usuario = '$usuario'";
            $consulta = $this->db->query($sql);

          //  Validamos
            if (!$consulta) {
                echo "<script>alert('¡Ha ocurrido un error al ejecutar la baja!');</script>";
            }else{
                echo "<script>alert('¡Usuario eliminado con éxito!');</script>";
                header('Location: #');
            }

        }

        public function modificarUser($usuario, $nombreCompleto){

            $sql = "UPDATE usuario SET nombreCompleto='$nombreCompleto' WHERE usuario.Usuario='$usuario'";
            $consulta = $this->db->query($sql);

            //  Validamos
            if (!$consulta) {
                echo "<script>alert('¡Ha ocurrido un error al ejecutar la modificación!');</script>";
            }else{
                echo "<script>alert('¡Usuario modificado con éxito!');</script>";
                header('Location: #');
            }

        }

        public function modificarPass($usuario, $contraseña){

            $sql = "UPDATE `usuario` SET `contraseña` = '$contraseña' WHERE `usuario`.`Usuario` = '$usuario'";
            $consulta = $this->db->query($sql);

            //  Validamos
            if (!$consulta) {
                echo "<script>alert('¡Ha ocurrido un error al ejecutar la modificación!');</script>";
            }else{
                echo "<script>alert('¡Contraseña modificada con éxito!');</script>";
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

    // Tomar tipo de cargo
    public function getUser(){
        $sql = "SELECT `Usuario`, `Contraseña`, `cargo`, `nombreCompleto` 
        FROM `usuario` 
        LEFT JOIN cargos ON usuario.ID_Cargo = cargos.ID_Cargo";

        $consulta = $this->db->query($sql);

        while($filas=$consulta->fetch_assoc()){
            $this->usuarios[]=$filas;
        }
        return $this->usuarios;
    }

    }

?>