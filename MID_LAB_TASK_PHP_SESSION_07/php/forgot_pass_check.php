<?php

	session_start();

	if(isset($_POST['forgot_pass_submit_button'])){

		$email = $_POST['curr_email'];

		if($email == ""){
			echo "*Null Submission...";
		}else{
			$user = $_SESSION['current_user'];

			if($email == $user['email']){
				$_SESSION['flag'] = true;
				header('location: dashboard.html');
			}else{
				echo "*Invalid user...";
				//print_r($user);
			}
		}
	}
?>