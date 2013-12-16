<?php
session_start();
$_SESSION=array();
//si las cookies existen se borran
if(isset($_COOKIE['cookieusername']) && isset($_COOKIE['cookiepass'])){
	setcookie('cookieusername', '', time() + 365 * 24 * 60 * 60, '/');
	setcookie('cookiepass', '', time() + 365 * 24 * 60 * 60, '/');
	header('Location:../index.php');
}
header('Location:../index.php');
session_destroy();
?>
