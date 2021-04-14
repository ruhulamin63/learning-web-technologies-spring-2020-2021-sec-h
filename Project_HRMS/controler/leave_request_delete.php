<?php
	session_start();
	require_once('../model/leaveApprovalModel.php');


	if(!isset($_SESSION['flag'])){
		header('location: ../controler/login_check.php');
	}

//=============================================================================	

	$get_id=$_GET['id'];
	$status = LeaveRequestDeleteData($get_id);

	header('location: ../view/leave_approval.php');
					
?>
