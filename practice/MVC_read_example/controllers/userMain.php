<?php  
session_start();
//include 'models/protector.php';
include 'models/viewModel.php';
include 'models/usersModel.php';

$pagename='userMain';

$view = new viewModel();
$user = new usersModel();

$view->getView("views/header.inc");

if(!empty($_GET["action"])){

	if($_GET["action"]=="authenticate"){
		$result = $user->authenticate($_POST["username"], $_POST["password"]);
		if (count($result)>0) {
		//	header("location: userMain.php");
			$view->getView("views/userView.php", $result);
		}else {
		//	$view->getView("views/header.inc");
			echo "<p><b>Please check your login and try again</b></p>";
			$view->getView("views/loginForm.php");
		}
	}
	if ($_GET["action"]=="create") {
		$view->getView("views/createUserForm.php");
	}
	if($_GET["action"]=="update"){
	
	}
	
	if($_GET["action"]=="delete"){
	
	}
	
	if($_GET["action"]=="logout"){
		$user->logout();
		header("location: index.php");
	}
	
}else {
		$view->getView("views/loginForm.php");
	}
//if (!empty($_GET["action"])) {
//	
//}else {
//	
//}

$view->getView("views/footer.inc");
?>