<!DOCTYPE html>
<html>
<head><title>GOT Regions</title></head>
<body>
<h1>A Song of Ice and Fire</h1>
<h2>Regions</h2>
<p></p>
<?php
	$dsn = "mysql:host=127.0.0.1; port=8889; dbname=webapp";
	$db_user = "root";
	$db_pass = "root";
	$db = new \PDO($dsn, $db_user, $db_pass);
	$statement = $db->prepare("
		SELECT name
		FROM regions
	");
	if($statement->execute()) {
		$rows = $statement->fetchAll(\PDO::FETCH_ASSOC);
		foreach ($rows as $num => $row) {
			echo "<li>${row['name']}</li>";
		}		
	}
?>
</body>
</html>