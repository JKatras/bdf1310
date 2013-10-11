<?php

class DB{

	public function _construct() {
		
		try {	
		
		$dsn = "mysql:host=127.0.0.1; port=8889; dbname=webapp";
		$user = "root";
		$pass = "root";
		
		return new PDO($dsn, $user, $pass);
		
		}
		catch (PDOException $e) {
			var_dump($e);
		}
	}
}
?>