<?php  
include('models/viewModel.php');
include('models/usersModel.php');

$pagename = 'index';

$view = new viewModel();
$user = new usersModel();

//$view->getView('views/header.inc');

if(!empty($_GET["action"])){

	if($_GET["action"]=="home"){
		$result = $user->getRegionList();
		$view->getView("views/regionBody.php", $result);
	}
	if($_GET["action"]=="details"){
		$result = $user->getCharList($_GET["regionId"]);
		$view->getView("views/details.php", $result);
	}
}
	else {
		$result = $user->getRegionList();
		$view->getView("views/regionBody.php", $result);
}

?>