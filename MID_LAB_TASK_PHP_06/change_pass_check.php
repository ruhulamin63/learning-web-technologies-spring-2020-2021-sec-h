<?php
	session_start();

	if(isset($_POST['forgot_pass'])){
		$curr_pass=$_POST['curr_pass'];
		$new_pass=$_POST['new_pass'];
		$re_pass=$_POST['re_pass'];

		if($curr_pass=="" || $new_pass=="" || $re_pass==""){
			echo "Null Submission...";
		}else{
			if($new_pass==$re_pass && $curr_pass!=$new_pass){
				$user=[
					'curr_pass'=>$curr_pass,
					'new_pass'=>$new_pass,
					're_pass'=>$re_pass
				];

				$_SESSION['current_user']=$user;
				//header('location: login_page.html');
				echo "Success...";
			}else{
				echo "*password & confirm password mismatch?";
			}
		}
	}
?>