<?php
	session_start();
	require_once('../model/JobVacancyModel.php');


	if(!isset($_SESSION['flag'])){
		header('location: ../controler/login_check.php');
	}

//=============================================================================	

	$get_id=$_GET['id'];
	$status = AddJobVacancyDeleteData($get_id);

	header('location: ../view/view_job_vacancy.php');
					
?>
