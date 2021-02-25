<?php
	session_start();

	if(isset($_POST['click_submit_reg'])){

		$name = $_POST['name'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$confpass = $_POST['confpass'];

		if($username == "" || $email == "" || $password == "" || $confpass == ""){
			echo "*Null submission...";
		}else{

			if($password == $confpass){

				$user = [	
							'name'=>$name,
							'username'=>$username, 
							'password'=>$password, 
							'email'=> $email
						];
				$_SESSION['current_user'] = $user;

				header('location: login_page.html');
			}else{
				echo "*password & confirm password mismatch...";
			}
		}

	}
?>