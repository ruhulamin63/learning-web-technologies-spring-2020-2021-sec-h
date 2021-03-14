

<!-- ========================================================================= -->
<?php 
	$title= "Change Pass";
	include('../view/header.html');
?>
	<table border="1px" align="center" width="100%">
		<tr>	
			<td>
				<table width="100%">
					<tr>
						<td width="150px" height="50px">
							<img src="../asset/logo.png" width="100%" height="100%">
						</td>
						<td align="right"> 
							<a href="#">Home</a> |
							<a href="#">Login</a> |
							<a href="#">Registration</a> 
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
							<form method="post" action="#">
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
												<input align="center" type="submit" name="login_btn" value="LOGIN"><br><br>

												<a href="#">Forgot Password?</a><br><br>
												<a href="#">Create an account?</a>
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