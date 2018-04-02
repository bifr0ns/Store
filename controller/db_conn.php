<?php 

class dbo_conn {
	
	public static  $conn;
	
	static function getConn () {
		
		
		if(!self::$conn) {

			$host = 'localhost';
			$user = 'root';
			$pass = '';
			$db = 'genesysmi';

			try {

				self::$conn = new mysqli($host,$user,$pass,$db);
				
				
			} catch(PDOExeception $e) {
				
				print_r ('error en la conexion en la base de datos');
			}
			
		}
		
		return self::$conn;
	}
	
	
}

?>