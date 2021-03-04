<?php
	session_start();

	if($_SESSION['flag']){

		if(isset($_POST['forgot_pass_submit_button'])){

			$curr_pass=$_POST['curr_pass'];
			$new_pass=$_POST['new_pass'];
			$re_pass=$_POST['re_pass'];

			if($curr_pass=="" || $new_pass=="" || $re_pass==""){
				echo "*Null Submission...";
			}else{

				$user=$_SESSION['current_user'];
				$old_pass=$user['password'];

				if($old_pass==$curr_pass){

					if($new_pass==$re_pass && $curr_pass!=$new_pass){

						$user=$_SESSION['current_user'];
						$user['password']=$new_pass;
						$user['confpass']=$re_pass;

						header('location: dashboard.php');
					}else{
						echo "*password & confirm password mismatch...";
					}
				}else{
					echo "*current password not match...";
				}
			}
		}
	}else{
		header('location: login_check.php');
	}
?>

<!-- ======================================================================================================= -->

<?php 
	$title= "Change Password Page";
	include('../view/header.php');
?>

	<table border="3px" align="center" width="100%">
		<tr>
			<td width="200px" height="60px">
				<img src="../asset/logo.png" width="100%" height="100%">
			</td>
			<td align="right"> 
				Logged in as 
				<a href="../view/dashboard.php">
					<?php
						$user=$_SESSION['current_user'];
						$name=$user['name'];

						echo $name;
					?>
				</a> | 
				<a href="../view/public_Home.html">Logout</a>
			</td>
		</tr>
		<tr height="400px">
			<td width="200px">Account<hr>
				<ul>
					<li><a href="../view/dashboard.php">Dashboard</a></li>
					<li><a href="../view/view_profile_check.php">View Profile</a></li>
					<li><a href="../view/edit_profile_check.php">Edit Profile</a></li>
					<li><a href="../view/profile_pic.php">Change Profile Picture</a></li>
					<li><a href="change_pass_check.php">Change Password</a></li>
					<li><a href="../view/public_Home.html">Logout</a></li>
				</ul>
			</td>
			<td>
				<form method="post" action="change_pass_check.php">
					<fieldset>
						<legend>CHANGE PASSWORD</legend>
						<table>
							<tr>
								<td>Current Password</td>
								<td><input type="password" name="curr_pass" value=""></td>
							</tr>
							<tr>
								<td>New Password</td>
								<td><input type="password" name="new_pass" value=""></td>
							</tr>
							<tr>
								<td>Retype New Password</td>
								<td><input type="password" name="re_pass" value=""></td>
							</tr>
						</table>
						<hr>
						<input type="submit" name="forgot_pass_submit_button" value="Submit">
					</fieldset>
				</form>
			</td>
		</tr>
		<tr height="50px">
			<td colspan="2" align="center">
				copyright@2021
			</td> 
		</tr>
	</table>
</body>
</html>