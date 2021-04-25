
<?php 
	$title= "Login Page";
	include('../view/header.html');
?>

	<script type="text/javascript" src="../js/loginCheckScript.js"></script>
</head>
<body>
	<div id="container">
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
							<fieldset>
								<legend>LOGIN</legend>
								<table>
									<tr>
										<td colspan="2" align="center" width="150px" height="50px">
											<img src="../asset/your_logo.png">
											<hr>
											<h2 id="txtHint"></h2>
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
										<td><input type="checkbox" id="remember" name="remember"  <?php if (isset($_COOKIE['username'])){ echo "checked";} ?>> Remember Me</td>
									</tr>
									<tr align="center">
										<td colspan="2">
											<hr><br>
											<input type="submit" name="submit" id="submit" value="Sing In" onclick="loginCheckValidation()"><br><br>

											<a href="forgot_pass_check.php">Forgot Password ?</a><br><br>
											<a href="regCheck.php">Create an account ?</a>
										</td>
									</tr>
								</table>
							</fieldset>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		
<?php 
	include('../view/footer.html'); 
?>