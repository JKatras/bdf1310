<?php  
session_start();

include 'models/viewModel.php';
include 'models/usersModel.php';

$pagename='userMain';

$view = new viewModel();
$user = new usersModel();

$view->getView("views/header.inc");

if(!empty($_GET["action"])) {

	if($_GET["action"]=="authenticate"){
		$result = $user->authenticate($_POST["username"], $_POST["password"]);
	//	if (count($result)>0) {
			$view->getView("views/userView.php", $result);
	//	}else {
	//		echo "<p><b>Please check your login and try again</b></p>";
	//		$view->getView("views/loginForm.php");
	//	}
	}
	else if ($_GET["action"]=="create") {
		$view->getView("views/createUserForm.php");
	}
	
	else if ($_GET["action"]=="createUser") {
		$result = $user->createUser($_POST["firstname"], $_POST["lastname"],$_POST["username"], $_POST["password"], $_POST["email"], $_POST["favChar"]);
//		$result = $user->getUserDetails($_GET["userId"]);
		$view->getView("views/userView.php", $result);
//		header("location: userMain.php");
//		$view->getView("views/userView.php");
	}//createUser
	
	else if( $_GET["action"]=="update"){
		$result = $user->getUserDetails($_GET["userId"]);
		$view->getView("views/updateUserForm.php", $result);
	}//update
	
	else if ($_GET["action"]=="updateUser") {
		$result = $user->updateUser($_GET["userId"], $_POST["firstname"], $_POST["lastname"],
		$_POST["email"], $_POST["favChar"]);
//		if (!empty($result)) {
			$view->getView("views/userView.php", $result);
//		}
		
	}//updateUser
	
	else if ($_GET["action"]=="delete") {
		$user->deleteUser($_GET["userId"]);
		header("location: index.php");
	}
	
	else if ($_GET["action"]=="logout") {
		$user->logout();
		header("location: index.php");
	}
	
}else {
		$view->getView("views/loginForm.php");
}

$view->getView("views/footer.inc");
?>