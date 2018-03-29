<?php 

class dbo_conn {
	
	public static  $conn;
	
	static function getConn () {
		
		
		if(!self::$conn) {

			$host = 'localhost';
			$user = 'root';
			$pass = '';
			$db = 'ia';

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