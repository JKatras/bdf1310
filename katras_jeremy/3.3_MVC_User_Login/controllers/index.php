<?php

include "models/regionModel.php";
include "models/viewModel.php";

$model = new regionModel();
$rows = $model->getRegions();
$view = new viewModel();

$view->show('header.inc');

if(!empty($_GET["action"])){
	
	if($_GET["action"]=="details"){
		$result = $model->getCharDetails($_GET["id"]);
		$view->show("regionDetails.php", $result);
	}
	if($_GET["action"]=="login"){
		$view->loginView();
	}
}else {
	$view->regionListView($rows);
}

$view->show('footer.inc');
?>
