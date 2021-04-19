<?php
	session_start();
	require_once('../model/fixingInterviewModel.php');


	if(!isset($_SESSION['flag'])){
		header('location: ../controler/login_check.php');
	}

//=============================================================================	

	$get_id=$_GET['id'];
	$status = FixingInterviewDeleteData($get_id);

	header('location: ../view/fixing_interview_approval.php');
					
?>
