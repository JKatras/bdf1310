<?php  
include 'models/DB.php';
class regionModel extends DB{
	
public function __construct() {
	
}

public function getRegions() {
	$db = new DB();
	$statement = $db->db->prepare("
		SELECT name, regionId
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

public function getCharDetails($id) {
	$db = new DB();
	$statement = $db->db->prepare("
		SELECT charName, house
		FROM gotChar
		WHERE region = :regionId
	");
	try {
		if($statement->execute(array(":regionId"=>$id))) {
			$result = $statement->fetchAll(\PDO::FETCH_ASSOC);
			return $result;	
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