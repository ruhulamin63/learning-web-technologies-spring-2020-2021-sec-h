<?php
	
	require_once('db.php');

	function validateUser($id, $password){

		$conn = getConnection();

		$sql = "select * from users where userId='{$id}' and password='{$password}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		if($row!=0){
			return true;
		}else{
			return false;
		}
	}

	function getUserById($id){

		$conn = getConnection();

		$sql = "select * from users where userId='{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	function getAllUser(){
		$conn = getConnection();
		$sql = "select * from users";
		$result = mysqli_query($conn, $sql);
		$users =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row); 
		}

		return $users;
	}

	function insertUser($user){

		$conn = getConnection();
		$sql = "insert into users values('', '{$user['id']}', '{$user['password']}', '{$user['name']}', '{$user['email']}', '{$user['user_type']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function updateUser($user){

		$conn = getConnection();
		$sql = "update users set username='{$user['username']}', password='{$user['password']}', email='{$user['email']}', type={$user['type']} ";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteUser($id){
		$conn = getConnection();
		$sql = "delete from users where id={$id}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>