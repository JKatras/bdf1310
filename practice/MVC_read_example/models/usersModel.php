<?php  
include 'DB.php';
class usersModel extends DB{
	public function __construct() {
		
	}
	
	public function getRegions() {
		$db = new DB();
		$sql = "select * from regions";
		$st = $db->db->prepare($sql);
		$st->execute();
		
		return $st->fetchAll();
		
	}
	
	public function getOne($id=0) {
		$db = new DB();
		$sql = "select * from  where userId = :id";
		$st = $db->db->prepare($sql);
		$st->execute(array(":id"=>$id));
		
		return $st->fetchAll();
	}
}


?>