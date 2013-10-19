<?php  
session_start();
//include 'models/protector.php';
include 'models/viewModel.php';
include 'models/usersModel.php';

$pagename='userMain';

$view = new viewModel();
$user = new usersModel();

$view->getView("views/header.inc");

if (!empty($_GET["action"])) {
	
}else {
	
}

$view->getView("views/footer.inc");
?>