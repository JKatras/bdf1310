<link rel="stylesheet" href="css/main.css" type="text/css" />
<?php

include "models/regionModel.php";
include "models/viewModel.php";
//include "models/authModel.php";

$model = new regionModel();
$rows = $model->getRegions();
$view = new viewModel();
//$auth = new authModel();

$view->show('header.inc');

if(!empty($_GET["action"])){
	
	if($_GET["action"]=="details"){
		$result = $model->getCharDetails($_GET["id"]);
		$view->show("regionDetails.php", $result);
	}
	if($_GET["action"]=="login"){
		$view->show("authenticate.php");
	}
//	if($_GET["action"]=="logout"){
//		$auth->logout();
//	}
}else {
	$view->regionListView($rows);
}

$view->show('footer.inc');
?>
