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
		// 	// Conectamosm como ROOT
		// 	$conexion = new mysqli("107.180.0.131", 'uSs3rYarkt3k', '&y.27UEY@g8ZuX5Yb=', "yarkT3k2021sisc0in");
			
		// 	$conexion->query("SET NAMES 'utf8'"); // IMPORTANTE
			
		// 	return $conexion;
		// }
		
	}
?>

