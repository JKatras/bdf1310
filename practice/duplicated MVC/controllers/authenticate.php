<?php  

include 'models/DB.php';
include 'models/authModel.php';
include 'models/authView.php';

$model = new authModel();
$view = new authView();

$view->headerView('');
$view->formView();
$view->footerview();

?>