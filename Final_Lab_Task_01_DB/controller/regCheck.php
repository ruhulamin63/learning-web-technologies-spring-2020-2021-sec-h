<?php
	session_start();

	if(isset($_POST['signup'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
		$email = $_POST['email'];

		if($username == "" || $email == "" || $password == "" || $repass == ""){
			echo "null submission...";
		}else{

			if($password == $repass){

				$user = [	
							'username'=>$username, 
							'password'=>$password, 
							'email'=> $email
						];

				//$_SESSION['username'] = $username;
				//$_SESSION['password'] = $password;
				//$_SESSION['current_user'] = $user;

				//$sql = "select * from users where username='' and password=''";
				$conn = mysqli_connect('localhost', 'root', '', 'user_mgt');

				$sql = "insert into users values('$username', '$password', '$email')"; 
				$result = mysqli_query($conn, $sql);		

				header('location: ../view/login.html');
			}else{
				echo "password & confirm password mismatch..";
			}
		}

	}
?>