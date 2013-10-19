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
		$view->getView("views/details.php", $result);
	}
	if($_GET["action"]=="login"){
	//	$view->getView("views/loginForm.php");
		header("location: userMain.php");
	}
//	if($_GET["action"]=="authenticate"){
//		$result = $user->authenticate($_POST["username"], $_POST["password"]);
//		if (count($result)>0) {
//		//	header("location: userMain.php");
//			$view->getView("views/userView.php", $result);
//		}else {
//		//	$view->getView("views/header.inc");
//			echo "<p><b>Please check your login and try again</b></p>";
//			$view->getView("views/loginForm.php");
//		}
//	}
	if($_GET["action"]=="logout"){
		$user->logout();
		header("location: index.php");
	}
}
	else {
		$result = $user->getRegionList();
		$view->getView("views/regionBody.php", $result);
}

$view->getView("views/footer.inc");
?>