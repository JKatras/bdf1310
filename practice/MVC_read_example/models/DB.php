<?php  
class DB{
	public function _construct() {
		try {
		$dsn = "mysql:host=127.0.0.1;port=8889;dbname=bdf1310";
		$db_user = "root";
		$db_pass = "root";
		
		$this->db = new PDO($dsn, $db_user, $db_pass);
		
		} catch (PDOException $error) {
			var_dump($error);
		}
	}
}
?>