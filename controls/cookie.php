<?php
	session_start();
	if(!isset($_SESSION['status_login']) && $_SESSION['status_login'] === FALSE) {
		setcookie(session_name(), '', time() - 42000);
		header("Location: login.php");
	}
?>