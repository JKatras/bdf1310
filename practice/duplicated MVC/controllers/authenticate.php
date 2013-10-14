<?php  

include 'models/DB.php';
include 'models/authModel.php';
include 'models/viewModel.php';

$model = new authModel();
$view = new viewModel();

$view->headerView('');
$view->formView();
$view->footerview();

?>