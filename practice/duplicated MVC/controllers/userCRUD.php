<?php  


include "models/userModel.php";
include "models/viewModel.php";
//include "models/authModel.php";
//include "views/authenticate.php";

$model = new userModel();
//$rows = $model->getUserInfo();
$view = new viewModel();
//$auth = new authModel();

$view->show('header.inc');

if(!empty($_GET["action"])){
	
	if($_GET["action"]=="userInfo"){
		$result = $model->getUserInfo($_GET["userId"]);
		$view->show("userInfo.php", $result);
	}
//	if($_GET["action"]=="login"){
//		$view->show("authenticate.php");
//		$authView = new authenticate();
//		$authView->login();
//	}
//	if($_GET["action"]=="logout"){
//		$auth->logout();
//	//	header("location: views/authenticate.php");
//	}
}
//else {
//	$view->regionListView($rows);
//	}


$view->show('footer.inc');
?>
