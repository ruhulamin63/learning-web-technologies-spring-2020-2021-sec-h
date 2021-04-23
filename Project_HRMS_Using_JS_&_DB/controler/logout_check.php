<?php

	session_start();
	unset($_SESSION['flag']);
	header('location: login_check.php');
	//setcookie('username', true, time()-1, '/');
	//setcookie('password', true, time()-1, '/');
?>