<?php
	session_start();
	unset($_SESSION['username']);
	unset($_SESSION['sucess']);
	session_destroy();
	header("location:login.php");
?>