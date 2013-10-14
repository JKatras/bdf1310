<?php  
session_start();
include 'models/DB.php';
include 'models/authModel.php';
include 'models/viewModel.php';

$model = new authModel();
$view = new viewModel();

$username = empty($_POST['username']) ? '' : trim($_POST['username']);
$password = empty($_POST['password']) ? '' : trim($_POST['password']);

$display = 'loginForm.php';

if (!empty($_SESSION['userinfo'])) {
	$display = 'loginSuccess.php';
}

if(!empty($username) && !empty($password)) {
	$user = $model->checkLogin($username, $password);
	
	if (is_array($user)) {
		$display = 'loginSuccess.php';
		
		$_SESSION['userInfo'] = $user;
	}
}

$view->show($display);

?>