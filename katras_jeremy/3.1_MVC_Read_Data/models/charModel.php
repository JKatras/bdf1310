<?php  
include 'models/DB.php';
class charModel extends DB{

//$db = new DB();

//public function _construct($dsn, $user, $pass) {
//	try {
//		$this->db = new \PDO($dsn, $user, $pass);
//	}
//	catch (\PDOException $e) {
//		var_dump($e);
//	}
//}
	
//public function _construct() {
//	
//}



public function getRegions() {
	$db = new DB();
	$statement = $db->db->prepare("
		SELECT name
		FROM regions
	");
	var_dump($db);


	try {
		if($statement->execute()) {
			$rows = $statement->fetchAll(\PDO::FETCH_ASSOC);
			return $rows;	
		}
	}
	catch (\PDOException $e) {
		echo "There was an error; please try again later";
		var_dump($e);
	}
	return array();
}

}
?>