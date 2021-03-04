<?php

	session_start();

	if(isset($_SESSION['flag'])){
		if(isset($_POST['forgot_pass_submit_button'])){

			$email = $_POST['curr_email'];

			if($email == ""){
				echo "*Null Submission...";
			}else{
				$user = $_SESSION['current_user'];

				if($email == $user['email']){
					header('location: dashboard.php');
				}else{
					echo "*Invalid user...";
					//print_r($user);
				}
			}
		}
?>

<!-- ========================================================================================= -->


<?php 
	$title= "Forgot Pssword Page";
	include('../view/header.php');
?>

	<table border="1px" align="center" width="100%">
		<tr>	
			<td>
				<table width="100%">
					<tr>
						<td width="200px" height="60px">
							<img src="../asset/logo.png" width="100%" height="100%">
						</td>
						<td align="right"> 
							<a href="../view/public_Home.html">Home</a> |
							<a href="login_check.php">Login</a> |
							<a href="regCheck.php">Registration</a> 
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>

	<table border="1px" align="center" width="100%">
		<tr height="400px">
			<td colspan="2" align="left">
				<table align="center">
					<tr>
						<td>
							<form method="post" action="forgot_pass_check.php">
								<fieldset>
									<legend>REGISTRATION</legend>
									<table>
										<tr>
											<td>Enter Email</td>
											<td><input type="text" name="curr_email" value=""></td>
										</tr>
									</table>
									<hr>
									<input type="submit" name="forgot_pass_submit_button" value="Submit">
								</fieldset>
							</form>
						</td>
					</tr>
				</table>
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

<?php
	}else{
		header('location: login_check.php');
	}
?>