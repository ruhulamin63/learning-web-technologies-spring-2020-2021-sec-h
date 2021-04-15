<?php
//=======================Start Code========================================

	function getImageById($id){

		$conn = getConnection();
		$sql = "select * from user_image where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
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
		$sql = "insert into user_image values('', '{$user['photos']}'')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

//-------------------------------End Code------------------------------------------
?>