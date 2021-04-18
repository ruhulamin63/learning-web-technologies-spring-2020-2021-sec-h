<?php
	session_start();
	require_once('../model/travelApprovalModel.php');


	if(!isset($_SESSION['flag'])){
		header('location: ../controler/login_check.php');
	}

//=============================================================================	

	$get_id=$_GET['id'];
	$status = TravelRequestDeleteData($get_id);

	header('location: ../view/travel_approval.php');
					
?>
