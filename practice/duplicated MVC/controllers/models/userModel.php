<?php
include "models/DB.php";
class userModel{
	public function __construct() {
	
	}

	public function getUserInfo($userId) {
		$db = new DB();
		$db->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
		$statement = $db->db->prepare("
			SELECT *
			FROM users
			WHERE userId = ?
		");
		try {
			if($statement->execute(array($userId))) {
				$result = $statement->fetchAll(\PDO::FETCH_ASSOC);
			//	if (count($result) === 1) {
					return $result;
			//	}
			}
		}
		catch (\PDOException $e) {
			echo "There was an error; please try again later";
			var_dump($e);
		}
		return array();
	} //getUserInfo
}

?>