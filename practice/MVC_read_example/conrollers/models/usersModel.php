<?php  
include 'DB.php';
class usersModel extends DB{
	public function __construct() {
		
	}
	
	public function getRegionList() {
		$db = new DB();
		$sql = "SELECT * FROM regions ORDER BY name ASC";
		$st = $db->db->prepare($sql);
		$st->execute();
		
		return $st->fetchAll();
		
	}
	
	public function getCharList($regionId) {
		$db = new DB();
		$sql = "SELECT charName, house FROM  gotChar WHERE region = :regionId";
		$st = $db->db->prepare($sql);
//		$st->execute(array(":regionId"=>$regionId));
//		$result = $st->fetchAll(\PDO::FETCH_ASSOC);
//		return $st->fetchAll();
//		return $result;
//		return array();
		try {
			if($st->execute(array(":regionId"=>$regionId))) {
				$result = $st->fetchAll(\PDO::FETCH_ASSOC);
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