<?php

class authModel{
	public function __construct() {
	
	}

	public function getSession() {
	$db = new DB();
	$db->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
//	$statement = $db->db->prepare("
//		SELECT name, regionId
//		FROM regions
//	");
//	try {
//		if($statement->execute()) {
//			$rows = $statement->fetchAll(\PDO::FETCH_ASSOC);
//			return $rows;	
//		}
//	}
//	catch (\PDOException $e) {
//		echo "There was an error; please try again later";
//		var_dump($e);
//	}
//	return array();
//}
	}
}
?>