<!DOCTYPE html>
<html>
<head><title>iTunes Example</title></head>
<body>
<h1>iTunes PHP Example</h1>
<p>Welcome to PHP.</p>
<?php
	$dsn = "mysql:host=127.0.0.1; port=8889;dbname=webapp";
	$db_user = "root";
	$db_pass = "root";
	$db = new \PDO($dsn, $db_user, $db_pass);
	$statement = $db->prepare("
		SELECT firstname, lastname, Name
		FROM users
	");
	if($statement->execute()) {
		$rows = $statement->fetchAll(\PDO::FETCH_ASSOC);
		var_dump($rows);
	}
	
?>
</body>
</html>