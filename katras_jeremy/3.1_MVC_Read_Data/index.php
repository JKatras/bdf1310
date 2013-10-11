<!DOCTYPE html>
<html>
<head><title>GOT Regions</title></head>
<body>
<h1>A Song of Ice and Fire</h1>
<h2>Characters by Region</h2>
<p>Click a region to view which characters originated there.</p>
<?php
	require_once "models/DB.php";
	require_once "models/charModel.php";
	$model = new charModel(MY_DSN, MY_USER, MY_PASS);
	
	$statement = $db->prepare("
		SELECT name
		FROM regions
	");
	if($statement->execute()) {
		$rows = $statement->fetchAll(\PDO::FETCH_ASSOC);
		foreach ($rows as $num => $row) {
			echo "<li><h3><a href=''>${row['name']}</a></h3></li>";
		}		
	}
?>
</body>
</html>