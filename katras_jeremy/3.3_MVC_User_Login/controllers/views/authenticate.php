<?php

session_start();

include 'models/authModel.php';

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
	}else {
		echo '<b><p>Please check your login information and try again.</p></b>';
	}
}

$view->show($display);

?>