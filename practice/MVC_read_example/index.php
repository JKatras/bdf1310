<?php  
include('models/viewModel.php');
include('models/usersModel.php');

$pagename = 'index';

$view = new viewModel();
$user = new usersModel();

//$view->getView('views/header.inc');

if(!empty($_GET["action"])){

	if($_GET["action"]=="home"){
		$result = $user->getRegions();
		$view->getView("views/regionBody.php", $result);
	}
	if($_GET["action"]=="details"){
		$result = $user->getOne($_GET["id"]);
		$view->getView("views/details.php", $result);
	}
}
	else {
		$result = $user->getRegions();
		$view->getView("views/regionBody.php", $result);
}

?>