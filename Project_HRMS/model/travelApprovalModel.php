<?php

	require_once('db.php');

//==========================Start Travel Request================================

	function getUserTravelRequestById($id){

		$conn = getConnection();
		$sql = "select * from travel_request where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

//======================================================================================

		function TravelRequestInsertData($user){

		$conn = getConnection();
		$sql = "insert into travel_request values('', '{$user['empname']}', '{$user['contract']}', '{$user['leavetype']}', '{$user['days']}', '{$user['statedate']}', '{$user['enddate']}', '{$user['reason']}', '{$user['status']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

//=======================================================================================

	function TravelRequestUpdateData($user,$id){

		$conn = getConnection();
		$sql = "update travel_request set empname='{$user['empname']}', leavetype='{$user['leavetype']}', days='{$user['days']}', contract='{$user['contract']}', statedate='{$user['statedate']}', enddate='{$user['enddate']}', reason='{$user['reason']}', status='{$user['status']}' where id='{$id}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

//======================================================================================

	function TravelRequestDeleteData($id){

		$conn = getConnection();
		$sql = "delete from travel_request where id={$id}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
	
//======================================================================================

	function getAllTravelRequest(){

		$conn = getConnection();
		$sql = "select * from travel_request";
		$result = mysqli_query($conn, $sql);
		$users =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row); 
		}
		return $users;
	}

//---------------------------------End Travel Request---------------------------

?>