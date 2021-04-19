<?php
	session_start();

	require_once('../model/UserModel.php');

	if(isset($_POST['login_btn'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

	
		$status = validateUser($username, $password);

		if($status){

			if(!empty($_POST['remember'])){
				setcookie('username', $username, time()+(86400*30));
				setcookie('password', $password, time()+(86400*30)); // 1 day = 86400
			}else{
				if(isset($_COOKIE['username'])){
					setcookie('username','');
				}
				if(isset($_COOKIE['password'])){
					setcookie('password','');
				}
			}
			
			$_SESSION['flag'] = true;

			$data = getUserById($username);
			$_SESSION['current_user']=$data;

//=====================================================================================
			/*$_SESSION['user_type']=$user; //global declaration database
	
			if($user['user']=="Admin"){
				header('location: ../view/admin_home.php');
			}else{
				header('location: ../view/user_home.php');
			}*/
//=====================================================================================

			header('location: ../view/dashboard.php');
		}else{

			?>
				<script type="text/javascript">
					alert('*Invalid User ?');
				</script>
			<?php
		}	
	}
?>

<!-- ========================================================================= -->

<?php 
	$title= "Login Page";
	include('../view/header.html');
?>

	<script type="text/javascript" src="../js/loginScript.js"></script>
</head>
<body>
	
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
							<form method="post" action="login_check.php" onsubmit="return loginCheckValidation()">
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
											<td>
												<input type="text" name="username" id="username" placeholder="@username" value="<?php if(isset($_COOKIE['username'])){ echo $_COOKIE['username'];} ?>">
											</td>
										</tr>
										<tr>
											<td colspan="2">
												<span id="user" class="user-error"></span>
											</td>
										</tr>

										<tr>
											<td>Password</td>
											<td>
												<input type="password" name="password" id="password"placeholder="password" value="<?php if(isset($_COOKIE['password'])){ echo $_COOKIE['password'];} ?>">
											</td>
										</tr>
										<tr>
											<td colspan="2">
												<span id="pass" class="user-error"></span>
											</td>
										</tr>

										<tr>
											<td><input type="checkbox" name="remember" <?php if (isset($_COOKIE['username'])){ echo "checked";} ?>> Remember Me</td>
										</tr>
										<tr align="center">
											<td colspan="2">
												<hr><br>
												<input align="center" type="submit" name="login_btn" value="Sing In"><br><br>

												<a href="forgot_pass_check.php">Forgot Password ?</a><br><br>
												<a href="regCheck.php">Create an account ?</a>
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