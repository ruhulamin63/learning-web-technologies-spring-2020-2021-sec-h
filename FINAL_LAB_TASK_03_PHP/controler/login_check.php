
<?php
	session_start();
	require_once('../model/UserModel.php');

	if(isset($_POST['signin_btn'])){

		$id = $_POST['id'];
		$password = $_POST['password'];

		if($id == "" || $password == ""){
			echo "*Null submission...";
		}else{
			
//===============================================================================
			$status = validateUser($id, $password);

			if($status){

				if(!empty($_POST['remember'])){
					setcookie('id', $id, time()+(10*365*24*60*60));
					setcookie('password', $password, time()+(10*365*24*60*60));
				}else{
					if(isset($_COOKIE['id'])){
						setcookie('id','');
					}
					if(isset($_COOKIE['password'])){
						setcookie('password','');
					}
				}
				
				$_SESSION['flag'] = true;
				
				$user = getUserById($id);
				
				$_SESSION['user_type']=$user; //global declaration database
		
				if($user['user']=="Admin"){
					header('location: ../view/admin_home.php');
				}else{
					header('location: ../view/user_home.php');
				}

			}else{
				echo "invalid user";
			}
		}
	}
?>

<!-- //================================================== -->

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<table align="center">
		<tr>
			<td>
			<form method="post" action="login_check.php">
					<fieldset>
						<legend>Login</legend>
						<table align="center">
							<tr>
								<td>
									<table align="center" >
										<tr>
											<td>
												<fieldset>
													<table>
														<tr>
															<td>
																User Id<br>
															</td>
															<td>
																<input type="text" name="id" value="<?php if(isset($_COOKIE['id'])){ echo $_COOKIE['id'];} ?>">
															</td>
														</tr>
														<tr>
															<td>
																Password
															</td>
															<td>
																<input type="password" name="password" value="<?php if(isset($_COOKIE['password'])){ echo $_COOKIE['password'];} ?>">
															</td>
														</tr>
														<tr>
															<td>
																<input type="checkbox" name="remember"<?php if (isset($_COOKIE['id'])){ echo "checked";} ?>> Remember Me
															</td>
														</tr>
														<tr align="left">
															<td colspan="2">
																<hr>
																<input type="submit" name="signin_btn" value="Sign In">
																<a href="regCheck.php">Register</a>
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
			</td>
		</tr>
	</table>
</body>
</html>