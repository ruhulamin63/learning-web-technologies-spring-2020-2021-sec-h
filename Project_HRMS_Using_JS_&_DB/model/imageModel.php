<?php

	require_once('../model/db.php');

//=======================Start Code========================================

	function getImageById($username){

		$conn = getConnection();
		$sql = "select * from user_image where username='{$username}'";
		$result = mysqli_query($conn, $sql);

		return $result;
	}

//======================================================================================

	function getAllImage(){

		$conn = getConnection();
		$sql = "select * from user_image";
		$result = mysqli_query($conn, $sql);
		$users =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row); 
		}
		return $users;
	}

//======================================================================================

	function insertImage($user){

		$conn = getConnection();
		$sql = "insert into user_image values('', '{$user['username']}', '{$user['photos']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

//-------------------------------End Code------------------------------------------
?>