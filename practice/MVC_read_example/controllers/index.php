<?php  
include('models/viewModel.php');
include('models/usersModel.php');

$pagename = 'index';

$view = new viewModel();
$user = new usersModel();

//if ( ($_GET["action"])!="authenticate" && ($_GET["action"])!="logout" ) {
	$view->getView("views/header.inc");
//}

if(!empty($_GET["action"])){

	if($_GET["action"]=="home"){
		$result = $user->getRegionList();
		$view->getView("views/regionBody.php", $result);
	}
	if($_GET["action"]=="details"){
		$result = $user->getCharList($_GET["regionId"]);
		$view->getView("views/charByRegion.php", $result);
	}
	if($_GET["action"]=="login"){
	//	$view->getView("views/loginForm.php");
		header("location: userMain.php");
	}
}
	else {
		$result = $user->getRegionList();
		$view->getView("views/regionBody.php", $result);
}

$view->getView("views/footer.inc");
?>