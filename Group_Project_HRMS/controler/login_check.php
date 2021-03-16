<?php
	session_start();

	if(isset($_POST['login_btn'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username == "" || $password == ""){
			echo "*Null submission...";
		}else{

			$myfile = fopen('../model/users.json', 'r');
			$data = fread($myfile, filesize('../model/users.json'));
			fclose($myfile);

			$final_data = json_decode($data, true);
			
			/*$user=$_SESSION['current_user'];*/
//================================================================================	

			foreach ($final_data as $key => $value){
				if($username == $value['username'] && $password == $value['password']){
					$_SESSION['flag'] = true;

					$_SESSION['current_user']=$value;
					$value = $_SESSION['current_user'];

					header('location: ../view/dashboard.php');
				}else{
					echo "*Invalid user...";
				}
			}		
		}
	}
?>

<!-- ========================================================================= -->

<?php 
	$title= "Login Page";
	include('../view/header.html');
?>
	<table border="1px" align="center" width="100%">
		<tr>	
			<td>
				<table width="100%">
					<tr>
						<td width="150px" height="50px">
							<img src="../asset/company_logo.png" width="100%" height="100%">
						</td>
						<td align="right"> 
							<a href="../view/home.html">Home</a> |
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
			<td colspan="2" align="center" width="100%" height="425px">
				<table>
					<tr>
						<td>
							<form method="post" action="login_check.php">
								<fieldset>
									<legend>LOGIN</legend>
									<table>
										<tr>
											<td colspan="2" align="center" width="150px" height="50px">
												<img src="../asset/your_logo.png">
												<hr>
											</td>
										</tr>
										<tr>
											<td>Username</td>
											<td><input type="text" name="username" placeholder="@username" value=""></td>
										</tr>
										<tr>
											<td>Password</td>
											<td><input type="password" name="password" placeholder="password" value=""></td>
										</tr>
										<tr>
											<td><input type="checkbox" name="items[]"> Remember Me</td>
										</tr>
										<tr align="center">
											<td colspan="2">
												<hr><br>
												<input align="center" type="submit" name="login_btn" value="Sing In"><br><br>

												<a href="forgot_pass_check.php">Forgot Password?</a><br><br>
												<a href="regCheck.php">Create an account?</a>
											</td>
										</tr>
									</table>
								</fieldset>
							</form>
						</td>
					</tr>
				</table>
			</td>
		</tr>
<?php 
	include('../view/footer.html'); 
?>