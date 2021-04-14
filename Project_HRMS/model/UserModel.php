<?php
	
	require_once('db.php');

//=======================Validatin for login==================================================
	function validateUser($username, $password){

		$conn = getConnection();
		$sql = "select * from registration where username='{$username}' and password='{$password}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		if($row!=0){
			return true;
		}else{
			return false;
		}
	}

//======================================================================================

	function getUserById($username){

		$conn = getConnection();
		$sql = "select * from registration where username='{$username}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

//======================================================================================

	function getAllUser(){

		$conn = getConnection();
		$sql = "select * from registration";
		$result = mysqli_query($conn, $sql);
		$users =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row); 
		}
		return $users;
	}

//======================================================================================

	function insertUser($user){

		$conn = getConnection();
		$sql = "insert into registration values('', '{$user['username']}', '{$user['name']}', '{$user['password']}', '{$user['email']}', '{$user['phone']}', '{$user['address']}', '{$user['gender']}', '{$user['department']}', '{$user['blood']}', '{$user['dob']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

//======================================================================================

	function updateUser($user,$id){

		$conn = getConnection();
		$sql = "update registration set username='{$user['username']}', name='{$user['name']}', email='{$user['email']}', phone='{$user['phone']}', address='{$user['address']}', gender='{$user['gender']}', department='{$user['department']}', blood='{$user['blood']}', dob='{$user['dob']}' where id='{$id}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

//======================================================================================

	function deleteUser($id){

		$conn = getConnection();
		$sql = "delete from registration where id={$id}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
//////////////////////////////////////////////////////////////////////



//==========================Start Online Application=====================================

	function OnlineApplicatinInsertData($user){

		$conn = getConnection();
		$sql = "insert into online_application values('', '{$user['name']}', '{$user['email']}', '{$user['contract']}', '{$user['experience']}', '{$user['location']}', '{$user['type']}', '{$user['date']}','{$user['resume']}','{$user['comment']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

//--------------------------------End Online Application--------------------------------------------

?>