
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
				
				$_SESSION['flag'] = true;
				
				$user = getUserById($id);
				
		
				if($user['user_type']=="Admin"){
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
</body>
</html>