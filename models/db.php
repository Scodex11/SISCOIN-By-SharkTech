<?php 
    class Conectar{
		// Método conexión a la BD
		
		public static function conexion(){
			// Conectamosm como ROOT
			$conexion = new mysqli("localhost", 'root', '', "sharktech_siscoin");
			
			$conexion->query("SET NAMES 'utf8'"); // IMPORTANTE
			
			return $conexion;
		}
		
		
		
		
		
		
		// public static function conexion(){
		// 	// Conectamos como ROOT
		// 	 $conexion = new mysqli('localhost:3306', 'sharktec_root', 'Tiburoncin123', 'sharktec_siscoin');

		// 	$conexion->query("SET NAMES 'utf8'"); // IMPORTANTE
			
			
		// 	return $conexion;
		// }
		
	}
?>

