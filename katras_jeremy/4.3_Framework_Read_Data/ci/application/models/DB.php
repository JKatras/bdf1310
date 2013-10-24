<?php  
class DB{
	public function __construct() {
		try {
		$dsn = "mysql:host=127.0.0.1;port=8889;dbname=webapp";
		$db_user = "root";
		$db_pass = "root";
		
		$this->db = new \PDO($dsn, $db_user, $db_pass);
		
		} catch (PDOException $error) {
			var_dump($error);
		}
	}
}
?>