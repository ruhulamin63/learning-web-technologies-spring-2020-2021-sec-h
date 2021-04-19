<?php
	session_start();
	require_once('../model/JobTitleModel.php');


	if(!isset($_SESSION['flag'])){
		header('location: ../controler/login_check.php');
	}

//=============================================================================	

	$get_id=$_GET['id'];
	$status = AddJobDeleteData($get_id);

	header('location: ../view/view_job.php');
					
?>
