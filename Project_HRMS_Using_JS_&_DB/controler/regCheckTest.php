<?php
	session_start();

	require_once('../model/UserModel.php');
	require_once('../model/usernameModel.php');

//================================================================
	if(isset($_POST['submit'])){

		$username = $_REQUEST['username'];
		$name = $_REQUEST['name'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];
		$phone = $_REQUEST['phone'];
		$address = $_REQUEST['address'];
		$department = $_REQUEST['department'];
		$blood = $_POST['blood'];
		$gender = $_REQUEST['gender'];
		$dob = $_REQUEST['dob'];
		$usertype = $_REQUEST['usertype'];

//=========================================================================
	
		$count = UserNameQuery($username);

		//print_r($count);

		if($count>0){
			echo "Username Already Exits";
		}else{

			$user = [	
					'username'=>$username, 
					'name'=>$name,
					'password'=>$password,
					'email'=> $email,
					'phone'=> $phone,
					'address'=>$address,
					'gender'=>$gender,
					'department'=>$department,
					'blood'=>$blood,
					'dob'=> $dob,
					'usertype'=>$usertype
				];
				
			$status = insertUser($user);

			if($status){
					echo "success";				
			}else{
				echo "missingInfo";
			}
		}
	}
?>