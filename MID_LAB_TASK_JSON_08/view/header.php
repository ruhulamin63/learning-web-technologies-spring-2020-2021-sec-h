<?php
	if(!isset($_SESSION['flag']))
	{
		header('location: login.html');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title><?=$title?></title>
<style>
	th, td {
	  padding: 10px;
	}
</style>
</head>
<body>