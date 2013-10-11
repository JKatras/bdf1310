<!DOCTYPE html>
<html>
<head><title>GOT Regions</title></head>
<body>
<h1>A Song of Ice and Fire</h1>
<h2>Characters by Region</h2>
<p>Click a region to view which characters originated there.</p>
<?php
//include "models/DB.php";
require "models/regionModel.php";
$model = new regionModel();
$rows = $model->getRegions();
foreach ($rows as $num => $row) {
		echo "<li><h3><a href=''>${row['name']}</a></h3></li>";
}




/* ----------this block works when isolated to this file------	
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
		echo "<li><h3><a href=''>${row['name']}</a></h3></li>";
		}
	}
-------------------------------------------------------------*/	
?>
</body>
</html>