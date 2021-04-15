<?php

	require_once('db.php');

//======================Start Add Job Vacancy====================================================

	function getUserJobVacancyById($id){

		$conn = getConnection();
		$sql = "select * from job_vacancy where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

//======================================================================================

		function AddJobVacancyInsertData($user){

		$conn = getConnection();
		$sql = "insert into job_vacancy values('', '{$user['vacancytitle']}', '{$user['name']}', '{$user['manager']}', '{$user['location']}', '{$user['position']}', '{$user['description']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

//=======================================================================================

	function AddJobVacancyUpdateData($user,$id){

		$conn = getConnection();
		$sql = "update job_vacancy set vacancytitle='{$user['vacancytitle']}', name='{$user['name']}', manager='{$user['manager']}', location='{$user['location']}', position='{$user['position']}', description='{$user['description']}' where id='{$id}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

//======================================================================================

	function AddJobVacancyDeleteData($id){

		$conn = getConnection();
		$sql = "delete from job_vacancy where id={$id}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

//======================================================================================

	function getAllAddJobVacancyData(){

		$conn = getConnection();

		$sql = "select * from job_vacancy";
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
		$sql = "select * from job_vacancy where name='{$name}'";
		$result = mysqli_query($conn, $sql);

		return $result;
	}

//--------------------------End Job Vacancy-----------------------------------

?>