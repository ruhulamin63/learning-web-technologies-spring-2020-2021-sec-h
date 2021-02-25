<?php
	session_start();

	if(isset($_POST['forgot_pass_submit_button'])){

		$curr_pass=$_POST['curr_pass'];
		$new_pass=$_POST['new_pass'];
		$re_pass=$_POST['re_pass'];

		if($curr_pass=="" || $new_pass=="" || $re_pass==""){
			echo "*Null Submission...";
		}else{
			$user=$_SESSION['current_user'];

			if($user['password']==$curr_pass){
				if($new_pass==$re_pass && $curr_pass!=$new_pass){

					$user=$_SESSION['current_user'];
					$user['password']=$new_pass;
					echo "Successful...";
				}else{
					echo "*password & confirm password mismatch...";
				}
			}else{
				echo "*current password not match...";
			}
		}
	}
?>