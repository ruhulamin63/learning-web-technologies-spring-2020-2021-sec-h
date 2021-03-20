<?php
	session_start();

	require_once('../model/UserModel.php');

	if(isset($_POST['signup'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
		$email = $_POST['email'];

		if($username == "" || $email == "" || $password == "" || $repass == ""){
			echo "*Null submission...";
		}else{

			if($password == $repass){

				$user = [	
							'username'=>$username, 
							'password'=>$password, 
							'email'=> $email
						];

				$status = insertUser($user);		
				
				if($status){
					header('location: ../view/login.html');
				}
				
			}else{
				echo "password & confirm password mismatch..";
			}
		}

	}
?>