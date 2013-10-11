<?php  
include('models/viewModel.php');
include('models/usersModel.php');

$pagename = 'index';

$views = new viewModel();
$users = new usersModel();

if(!empty($_GET["action"])){
	if($_GET["action"]=="home"){
		$result = $users->getAll();
		$views->getView("views/body.php", $result);
	}if($_GET["action"]=="details"){
		$result = $users->getOne($_GET["id"]);
		$views->getView("views/details.php", $result);
	}
}else {
	$result = $users->getAll();
	$views->getView("views/body.php", $result);
}

?>