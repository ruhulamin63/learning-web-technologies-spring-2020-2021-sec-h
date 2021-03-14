

<!-- ======================================================================================= -->


<?php 
	$title= "Pass Page";
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
			<td height="400px">
				<table align="center">
					<tr>
						<td>
							<form id="myForm" method="post" action="regCheck.php">
								<fieldset>
									<legend>REGISTRATION</legend>
									<table>
										<tr>
											<td colspan="2">
												<h2 align="center">Sign Up</h2>
											</td>
										</tr>
										<tr>
											<td colspan="2" align="center">
												<img src="../asset/your_logo.png">
												<hr>
											</td>
										</tr>
										<tr>
											<td>Username</td>
											<td>
												<input type="text" name="username" value="">
											</td>
										</tr>
										<tr>
											<td>Name</td>
											<td>
												<input type="text" name="name" value="">
											</td>
										</tr>
										<tr>
											<td>Password</td>
											<td>
												<input type="password" name="password" value="">
											</td>
										</tr>
										<tr>
											<td>Confirm Password</td>
											<td>
												<input type="password" name="cpassword" value="">
											</td>
										</tr>
										<tr>
											<td>Email</td>
											<td>
												<input type="email" name="email" value="">
											</td>
										</tr>
										<tr>
											<td>Phone</td>
											<td>
												<input type="number" name="phone" value="">
											</td>
										</tr>
										<tr>
											<td>Address</td>
											<td>
												<textarea cols="22"></textarea>
											</td>
										</tr>
										<tr>
											<td>Gender</td>
											<td>
												<input type="radio" name="gender" value="Male">Male
												<input type="radio" name="gender" value="Female">Female
												<input type="radio" name="gender" value="Others">Others
											</td>
										</tr>
										<tr>
											<td>Date of Birth</td>
											<td>
												<input type="date" name="dob" value="">
											</td>
										</tr>
										<tr>
											<td>Department</td>
											<td>
												<select>
													<option>CSE</option>
													<option>EEE</option>
													<option>IPE</option>
													<option>ENG</option>
													<option>BBA</option>
												</select>
											</td>
										</tr>
										<tr>
											<td>Blood Group</td>
											<td>
												<select>
													<option>A+</option>
													<option>B+</option>
													<option>AB+</option>
													<option>O+</option>
													<option>A-</option>
													<option>B-</option>
													<option>AB-</option>
													<option>O-</option>
												</select>
											</td>
										</tr>
										<tr align="center">
											<td colspan="2">
												<br>
												<hr>
											</td>
										</tr>
										<tr align="left">
											<td colspan="2">
												<input type="submit" name="sign_up_btn" value="Sign Up">
												<input type="reset" name="" value="Reset">
											</td>
											<td align="right">
												<a href="#">Back</a>
											</td>
										</tr>
									</table>
								</fieldset>
								<script>
									function myFunction() {
								  		document.getElementById("myForm").reset();
									}
								</script>
							</form>
						</td>
					</tr>
				</table>
			</td>
		</tr>
<?php 
	include('../view/footer.html'); 
?>