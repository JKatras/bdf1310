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
		$sql = ("SELECT charName, house 
				FROM  gotChar 
				WHERE region = :regionId
		");
		$st = $db->db->prepare($sql);

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
	}//getCharList
	
	public function authenticate($username='', $password='') {
		$db = new DB();
		$sql = ("
			SELECT * 
			FROM users 
			WHERE (username = :username)
			AND (password = MD5(CONCAT(user_salt,:password)))
		");
		$st = $db->db->prepare($sql);
		$st->execute(array(":username"=>$username, ":password"=>$password));
		
		$num = $st->rowCount();
		
		if ($num>0) {
			$_SESSION["loggedin"] = 1;
		}else {
			$_SESSION["loggedin"] = 0;
		}
		
		return $st->fetchAll(\PDO::FETCH_ASSOC);
	}//authenticate
	
	public function getUserDetails($userId) {
		$db = new DB();
		$sql = "SELECT * FROM users WHERE userId = :userId";
		$st = $db->db->prepare($sql);
		try {
			if($st->execute(array(":userId"=>$userId))) {
				$result = $st->fetchAll(\PDO::FETCH_ASSOC);
				return $result;	
			}
		}
		catch (\PDOException $e) {
			echo "There was an error; please try again later";
			var_dump($e);
		}
		return array();
	}//getUserDetails
	
	public function logout() {
		$_SESSION["loggedin"] = 0;
	}//logout
	
//	THIS WORKS BUT NEEDS HASH/SALT FUNCTIONS	
//	public function createUser($firstname='', $lastname='', $username='', $password='', $email='', $favChar=''){
//		$db = new DB();
//		$sql = ("
//			INSERT INTO users (firstname, lastname, username, password, email, favChar)
//			VALUES (:firstname, :lastname, :username, :password, :email, :favChar)
//		");
//		$st = $db->db->prepare($sql);
//		try {
//			if($st->execute(array(":firstname"=>$firstname,":lastname"=>$lastname,
//			":username"=>$username, ":password"=>$password, ":email"=>$email, 
//			":favChar"=>$favChar))) {
//				$result = $st->fetchAll(\PDO::FETCH_ASSOC);
//				return $result;	
//			}
//		}
//		
//		catch (\PDOException $e) {
//			echo "There was an error; please try again later";
//			var_dump($e);
//		}
//		return array();
//	}//createUser

	//TRIAL CODE
		public function createUser($firstname='', $lastname='', $username='', $password='', $email='', $favChar=''){
		 //Generating a salt and MD5 hash
   		$salt = mcrypt_create_iv(8, MCRYPT_DEV_URANDOM);  
 		$password=md5($salt.$password);
 		
		$db = new DB();
		$sql = ("
			INSERT INTO users (firstname, lastname, username, password, email, favChar, user_salt)
			VALUES (:firstname, :lastname, :username, :password, :email, :favChar, :salt)
		");
		$st = $db->db->prepare($sql);
		if($st->execute(array(":firstname"=>$firstname,":lastname"=>$lastname, ":username"=>$username,
		":password"=>$password, ":email"=>$email, 
		":favChar"=>$favChar, ":salt"=>$salt))) {
		
			$num = $st->rowCount();
		
			if ($num>0) {
			$_SESSION["loggedin"] = 1;
			}else {
			$_SESSION["loggedin"] = 0;
			}
			
			return $st->fetchAll(\PDO::FETCH_ASSOC);
//			return $result;	
		}//if($st->execute...)
		
	//	return array();
	
	}//createUser
	
	public function updateUser() {
		
	}//updateUser
	
	public function deleteUser() {
		
	}//delete
} //class


?>