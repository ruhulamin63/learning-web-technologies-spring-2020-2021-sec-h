<?php
	session_start();

	if(isset($_POST['submit'])){

		$name=$_POST['name'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$confpass = $_POST['confpass'];
		$email = $_POST['email'];
		$date = $_POST['date'];

		if($name == "" || $username == "" || $email == "" || $password == "" || $confpass == "" || $date == ""){
			echo "Null Submission...";
		}else{

			if($password == $confpass){
				echo "Successful...";

			}else{
				echo "password & confirm password mismatch...";
			}
		}

	}
?>