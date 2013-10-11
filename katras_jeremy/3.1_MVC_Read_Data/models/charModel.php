<?php  
include 'models/DB.php';
class charModel extends DB{

//private $db;

//public function _construct($dsn, $user, $pass) {
//	try {
//		$this->db = new \PDO($dsn, $user, $pass);
//	}
//	catch (\PDOException $e) {
//		var_dump($e);
//	}
//}
	
public function _construct() {
	
}

public function getRegions() {
	$statement = $this->db->prepare("
		SELECT name
		FROM regions
	");
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