<?php

	require_once('db.php');

//==========================Start Leave Request==========================================

	function getUserLeaveRequestById($id){

		$conn = getConnection();
		$sql = "select * from leave_request where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

//======================================================================================

	function LeaveRequestInsertData($user){

		$conn = getConnection();
		$sql = "insert into leave_request values('', '{$user['empname']}', '{$user['leavetype']}', '{$user['days']}', '{$user['leavefor']}', '{$user['statedate']}', '{$user['enddate']}', '{$user['reason']}', '{$user['status']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

//=======================================================================================

	function LeaveRequestUpdateData($user,$id){

		$conn = getConnection();
		$sql = "update leave_request set empname='{$user['empname']}', leavetype='{$user['leavetype']}', days='{$user['days']}', leavefor='{$user['leavefor']}', statedate='{$user['statedate']}', enddate='{$user['enddate']}', reason='{$user['reason']}', status='{$user['status']}' where id='{$id}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

//======================================================================================

		function LeaveRequestDeleteData($id){

		$conn = getConnection();
		$sql = "delete from leave_request where id={$id}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
	
//======================================================================================

	function getAllLeaveRequest(){

		$conn = getConnection();
		$sql = "select * from leave_request";
		$result = mysqli_query($conn, $sql);

		$users =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row); 
		}
		return $users;
	}

//------------------------End Leave Request--------------------------------

?>