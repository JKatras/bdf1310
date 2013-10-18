<?php

include "models/regionModel.php";
include "models/viewModel.php";
include "models/authModel.php";
//include "views/authenticate.php";

$model = new regionModel();
$rows = $model->getRegions();
$view = new viewModel();
$auth = new authModel();

$view->show('header.inc');

if(!empty($_GET["action"])){
	
	if($_GET["action"]=="details"){
		$result = $model->getCharDetails($_GET["id"]);
		$view->show("regionDetails.php", $result);
	}
	if($_GET["action"]=="login"){
		$view->show("authenticate.php");
//		$authView = new authenticate();
//		$authView->login();
	}
	if($_GET["action"]=="logout"){
		$auth->logout();
	//	header("location: views/authenticate.php");
	}
}else {
	$view->regionListView($rows);
	}


$view->show('footer.inc');
?>
