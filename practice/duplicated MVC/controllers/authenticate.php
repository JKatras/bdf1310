<?php  

include 'models/DB.php';
include 'models/authModel.php';
include 'models/viewModel.php';

$model = new authModel();
$view = new viewModel();

$username = empty($_POST['username']) ? '' : trim($_POST['username']);
$username = empty($_POST['password']) ? '' : trim($_POST['password']);

if(!empty($username) && !empty($password)) {
	$user = $model->checkLogin($username, $password);

}


$view->headerView('');
$view->formView();
$view->footerview();

?>