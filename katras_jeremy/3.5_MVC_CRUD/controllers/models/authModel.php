<?php
//include 'views/authenticate.php';
class authModel{
	public function __construct() {
	
	}

	public function checkLogin($name, $pass) {
		$db = new DB();
		$db->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
		$statement = $db->db->prepare("
			SELECT userId AS id, username AS name
			FROM users
			WHERE (username = :name)
				AND (password = MD5(CONCAT(user_salt,:pass)))
		");
		try {
			if($statement->execute(array(':name' => $name, ':pass' => $pass))) {
				$rows = $statement->fetchAll(\PDO::FETCH_ASSOC);
				if (count($rows) === 1) {
					return $rows[0];
				}
			}
		}
		catch (\PDOException $e) {
			echo "There was an error; please try again later";
			var_dump($e);
		}
		return FALSE;
	} //checkLogin
	
	public function logout() {
	//experimental code - remove and replace with 'header' below when done
	
	//	$login = new authenticate();
			
		session_start();
		unset($_SESSION['userInfo']);
		header('Location: ../controllers/index.php'); 
		
		//WORKS BUT NO FOOTER SHOWN (i.e. not going through index.php)
//		$view = new viewModel();
//		$view->show('authenticate.php');
	
	//	$login->login();
		
		exit;
	}
}
?>