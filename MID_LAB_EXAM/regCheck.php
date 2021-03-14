<?php
	session_start();

	if(isset($_POST['signup_btn'])){

		$id = $_POST['id'];
		$password = $_POST['password'];
		$confpass = $_POST['confpass'];
		$name = $_POST['name'];
		$user = $_POST['user'];

		if($id == "" || $name == "" || $password == "" || $confpass == ""){
			echo "*Null submission...";
		}else{

			if($password == $confpass){


				$myfile = fopen('data.json', 'r');
				$data = fread($myfile, filesize('data.json'));
				fclose($myfile);
//================================================================================
				$decode = json_decode($data,true);

				$user = [	
						'id'=>$id,
						'password'=>$password,
						'name'=>$username,  
						'user'=>$user
					];

					/*$_SESSION['current_user']=$user;
					$user=$_['current_user'];*/

					$decode[] = $user;
					
					$curr_encode=json_encode($decode);
					
					$myfile = fopen('data.json', 'w');
					fwrite($myfile, $curr_encode);
					fclose($myfile);

					
					header('location: login_check.php');
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
	<form>
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
												<td>
													Id<br>
												</td>
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
												<td>
													Confirm Password
												</td>
												<td>
													<input type="password" name="cpassword" value="">
												</td>
											</tr>
											<tr>
												<td>
													Name<br>
												</td>
												<td>
													<input type="text" name="name" value="">
												</td>
											</tr>
					
											
											<tr>
												<td>
													User Type
												</td>
												<td>
													<input type="radio" name="user" value="User">User
													<input type="radio" name="user" value="Admin">Admin
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