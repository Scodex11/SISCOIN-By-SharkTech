<?php 
    class Conectar{
		// Método conexión a la BD
		public static function conexion(){
			// Conectamosm como ROOT
			$conexion = new mysqli("localhost", "root", "", "sharktech_siscoin");
			
			$conexion->query("SET NAMES 'utf8'"); // IMPORTANTE
			
			return $conexion;
		}
		
	}
?>

