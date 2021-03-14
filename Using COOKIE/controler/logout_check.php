<?php

	//session_start();
	//unset($_SESSION['flag']);
	setcookie('flag',false, time()-86400,'/');
	header('location: login_check.php');

?>