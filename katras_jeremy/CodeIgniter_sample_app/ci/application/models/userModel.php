<?php  
class UserModel extends CI_Model {

	public function __construct() {
		$this->load->database();
	}
	
	public function getUsers($userId = FALSE) {
		if($userId === FALSE) {	
			$query = $this->db->get('users');
			return $query->result_array();
		}
		$query = $this->db->get_where('users', array('userId'=>$userId));
		return $query->row_array();
	}	
}


?>