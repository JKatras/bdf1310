<?php  
include 'DB.php';
class usersModel extends DB{
	public function construct() {
		
	}
	
	public function getAll() {
		$sql = "select * from users";
		$st = $this->db->prepare($sql);
		$st->execute();
		
		return $st->fetchAll();
		
	}
	
	public function getOne($id=0) {
		$sql = "select * from userStatus where userId = :id";
		$st = $this->db->prepare($sql);
		$st->execute(array(":id"=>$id));
		
		return $st->fetchAll();
	}
}


?>