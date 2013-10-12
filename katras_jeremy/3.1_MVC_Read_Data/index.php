<?php

include "models/regionModel.php";
include "models/viewModel.php";

$model = new regionModel();
$rows = $model->getRegions();
$view = new viewModel();
$view->headerView('');
$view->regionListView($rows);
$view->footerview();


if(!empty($_GET["action"])){
	
	if($_GET["action"]=="details"){
		$result = $model->getCharDetails($_GET["id"]);
		$view->detailView("views/regionDetails.php", $result);
	}
}
?>
