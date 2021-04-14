<?php

	require_once('db.php');

//===============================Start Fixing Interview===============================================

	function getUserFixingInterviewById($id){

		$conn = getConnection();
		$sql = "select * from fixing where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}
//======================================================================================

	function FixingInterviewInsertData($user){

		$conn = getConnection();
		$sql = "insert into fixing values('', '{$user['vacancy']}', '{$user['candidate']}', '{$user['time']}', '{$user['date']}', '{$user['status']}', '{$user['comment']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

//=======================================================================================

	function FixingInterviewUpdateData($user,$id){

		$conn = getConnection();
		$sql = "update fixing set vacancy='{$user['vacancy']}', candidate='{$user['candidate']}', time='{$user['time']}', date='{$user['date']}', status='{$user['status']}', comment='{$user['comment']}' where id='{$id}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

//======================================================================================

	function FixingInterviewDeleteData($id){

		$conn = getConnection();
		$sql = "delete from fixing where id={$id}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

//======================================================================================

	function FixingInterviewAllData(){

		$conn = getConnection();
		$sql = "select * from fixing";
		$result = mysqli_query($conn, $sql);
		$users =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row); 
		}
		return $users;
	}

//------------------------End Fixing Interview-------------------------------------

?>