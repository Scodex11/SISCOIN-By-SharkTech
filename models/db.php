<?php 
    class Conectar{
		
		public static function conexion(){
			$conexion = new mysqli("localhost", "root", "", "sharktech_siscoin");
			
			$conexion->query("SET NAMES 'utf8'"); // IMPORTANTE
			
			return $conexion;
		}
		
	}
?>

