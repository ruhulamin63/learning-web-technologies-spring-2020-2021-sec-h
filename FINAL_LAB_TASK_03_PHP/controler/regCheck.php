<?php
	session_start();

	require_once('../model/UserModel.php');

	if(isset($_POST['signup_btn'])){

		$id = $_POST['id'];
		$password = $_POST['password'];
		$confpass = $_POST['confpass'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$user = $_POST['user_type'];

		if($id == "" || $name == "" || $password == "" || $confpass == "" || $email == ""){
			echo "*Null submission...";
		}else{

			if($password == $confpass){

				$user = [	
						'id'=>$id,
						'password'=>$password,
						'name'=>$name,  
						'user_type'=>$user,
						'email'=>$email
					];
				print_r($user);

				$status = insertUser($user);		
				
				if($status){
					header('location: ../controler/login_check.php');
				}

			}else{
				echo "*password & confirm password mismatch...";
			}
		}

	}
?>

<!-- ========================================================= -->
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<form method="post" action="regCheck.php">
		<fieldset>
			<legend>RIGIRSTRATION</legend>
			<table>
				<tr>
					<td>
						<table align="center" >
							<tr>
								<td>
									<fieldset>
										<table>
											<tr>
												<td>Id<br></td>
												<td>
													<input type="number" name="id" value="">
												</td>
											</tr>
											<tr>
												<td>
													Password
												</td>
												<td>
													<input type="password" name="password" value="">
												</td>
											</tr>
											<tr>
												<td>Confirm Password</td>
												<td>
													<input type="password" name="confpass" value="">
												</td>
											</tr>
											<tr>
												<td>Name</td>
												<td>
													<input type="text" name="name" value="">
												</td>
											</tr>
											<tr>
												<td>Email</td>
												<td>
													<input type="text" name="email" value="">
												</td>
											</tr>
											<tr>
												<td>User Type</td>
												<td>
													<select name="user_type">
														<option value="">--Select--</option>
														<option value="User">User</option>
														<option value="Admin">Admin</option>
													</select>
												</td>
											</tr>
											<tr align="center">
												<td colspan="2">
													<br>
												</td>
											</tr>
											<tr align="left">
												<td colspan="2">
													<hr>
													<input type="submit" name="signup_btn" value="Sign Up">
													<a href="login_check.php">Sign In</a>
												</td>
											</tr>
										</table>
									</fieldset>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>