<?php
	session_start();
	require_once "db.php";
	$lang = $_GET['q'];
	if (isset($_SESSION['srbn_id']) && isset($_SESSION['email']) && isset($_SESSION['password'])) {
		session_destroy();
	}
	if (isset($_COOKIE['srbn_id']) && isset($_COOKIE['email']) && isset($_COOKIE['password'])) {
		unset($_COOKIE['srbn_id']);
		unset($_COOKIE['password']);
		unset($_COOKIE['email']);
		setcookie('srbn_id', null, -1, '/');
		setcookie('password', null, -1, '/');
		setcookie('email', null, -1, '/');
	}
	header("Location: ../".$lang."/auth.php");
?>
