<?php

include "models/regionModel.php";
include "models/viewModel.php";

$model = new regionModel();
$rows = $model->getRegions();
$view = new viewModel();

if(!empty($_GET["action"])){
	
	if($_GET["action"]=="details"){
		$result = $model->getCharDetails($_GET["id"]);
		$view->show("regionDetails.php", $result);
	}
}else {
	$view->show('header.inc');
	$view->regionListView($rows);
	$view->show('footer.inc');
}
?>
