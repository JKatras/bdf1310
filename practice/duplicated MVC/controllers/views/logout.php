<?php
session_start();
unset($_SESSION['userinfo']);

header('Location: authenticate.php');
exit;

?>