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
				
				header('location: dashboard.php');
			}else{
				echo "*Invalid user...";
				//print_r($user);
			}
		}
	}
?>

<!-- ============================================================================ -->

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
<style>
	th, td {
	  padding: 10px;
	}
</style>
</head>
<body>

	<table border="1px" align="center" width="100%">
		<tr>	
			<td>
				<table width="100%">
					<tr>
						<td width="200px" height="60px">
							<img src="logo.png" width="100%" height="100%">
						</td>
						<td align="right"> 
							<a href="public_Home.html">Home</a> |
							<a href="login_check.php">Login</a> |
							<a href="regCheck.php">Registration</a> 
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>

	<table border="1px" align="center" width="100%">
		<tr>
			<td colspan="2" align="center" height="400px">
				<table>
					<tr>
						<td>
							<form method="post" action="login_check.php">
								<fieldset>
									<legend>LOGIN</legend>
									<table>
										<tr>
											<td>User Name</td>
											<td><input type="text" name="username" value=""></td>
										</tr>
										<tr>
											<td>Password</td>
											<td><input type="password" name="password" value=""></td>
										</tr>
										<tr>
											<td><input type="checkbox" name="items[]"> Remember Me</td>
										</tr>
									</table>
									<hr>
									<input type="submit" name="login_page_submit_button" value="Submit">
									<a href="forgot_pass_check.php"><u>Forgot Password?</u></a>	
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