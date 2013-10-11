<?php

class DB{

	public function __construct() {
		
		try {	
		
		$dsn = "mysql:host=127.0.0.1; port=8889; dbname=webapp";
		$user = "root";
		$pass = "root";
		$this->db = new \PDO($dsn, $user, $pass);
		
		}
		catch (PDOException $e) {
			var_dump($e);
		}
	}
}
?>