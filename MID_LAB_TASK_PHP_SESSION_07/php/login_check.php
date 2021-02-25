<?php
	session_start();

	if(isset($_POST['login_page_submit_button'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username == "" || $password == ""){
			echo "*Null submission...";
		}else{
			$user = $_SESSION['current_user'];

			if($username == $user['username'] && $password == $user['password']){
				$_SESSION['flag'] = true;
				header('location: dashboard.html');
			}else{
				echo "*Invalid user...";
				//print_r($user);
			}
		}
	}
?>