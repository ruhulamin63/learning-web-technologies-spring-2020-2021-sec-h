<?php

	require_once('db.php');

//========================Start Add Job   ===========================================

	function getUserAddJobById($id){

		$conn = getConnection();
		$sql = "select * from add_job where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

//======================================================================================

		function AddJobInsertData($user){

		$conn = getConnection();
		$sql = "insert into add_job values('', '{$user['addjob']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

//=======================================================================================

	function AddJobUpdateData($user,$id){

		$conn = getConnection();
		$sql = "update add_job set addjob='{$user['addjob']}' where id='{$id}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}


//======================================================================================

	function AddJobDeleteData($id){

		$conn = getConnection();
		$sql = "delete from add_job where id={$id}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

//======================================================================================

	function getAllAddJobData(){

		$conn = getConnection();
		$sql = "select * from add_job";
		$result = mysqli_query($conn, $sql);
		$users =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row); 
		}
		return $users;
	}

//======================================================================================

function getUserAddJobSearchById($name){

		$conn = getConnection();
		$sql = "select * from add_job where addjob='{$name}'";
		$result = mysqli_query($conn, $sql);

		return $result;
	}

//-------------------------------End Add Job-----------------------------------------------

?>