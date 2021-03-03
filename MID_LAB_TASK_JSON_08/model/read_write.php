<?php

	session_start();

	/*$myfile = fopen('users.json', 'r');
	$data = fread($myfile, filesize('users.json'));
	fclose($myfile);
	//echo $data;

	$decode = json_decode($data,true);*/
	//print_r($decode);

	$user = $_SESSION['current_user'];

	$encode = json_encode($user);
	//echo $encode;

	//array_push($user,$decode);

	//print_r($user);

	//$encode=json_encode($user);

	//print_r($encode);

	$myfile = fopen('users.json', 'w');
	fwrite($myfile, $encode);
	fclose($myfile);

	echo $encode;

	/*$myfile = fopen('users.json', 'r');
	$data = fread($myfile, filesize('users.json'));
	fclose($myfile);
	echo $data;*/


	//$decode = json_decode($data,true);
	//print_r($decode[3]);
	
?>