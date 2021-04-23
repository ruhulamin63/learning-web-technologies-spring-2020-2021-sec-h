
<?php 
	$title= "Registration";
	include('../view/header.html');
?>
	<script type="text/javascript" src="../js/registrationScript.js"></script>
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
			<td height="400px">
				<table align="center">
					<tr>
						<td>
							<!-- <?php //echo htmlentities($_SERVER['PHP_SELF']); ?> -->
							<form method="post" action="regCheckTest.php" onsubmit="return regCheckValidation()">
								<fieldset>
									<legend>REGISTRATION</legend>
									<table>
										<tr>
											<td colspan="2" align="center">
												<h2 align="center">Sign Up</h2>
												<img src="../asset/your_logo.png">
												<hr>

												<h2 id="txtHint"></h2>

											</td>
										</tr>
										<tr>
											<td>
												<label>Username</label><br>
												<input type="text" name="username" id="username" value="">
											</td>
										</tr>
										<tr>
											<td colspan="2">
												<span id="un" class="user-error"></span>
											</td>
										</tr>

										<tr>
											<td>
												<label>Name</label><br>
												<input type="text" name="name" id="name" value="">
											</td>
										</tr>
										<tr>
											<td colspan="2">
												<span id="n" class="user-error"></span>
											</td>
										</tr>

										<tr>
											<td>
												<label>Password</label><br>
												<input type="password" name="password" id="password" value="">
											</td>
										</tr>
										<tr>
											<td colspan="2">
												<span id="p" class="user-error"></span>
											</td>
										</tr>

										<tr>
											<td>
												<label>Confirm Password</label><br>
												<input type="password" name="confpass" id="confpass" value="">
											</td>
										</tr>
										<tr>
											<td colspan="2">
												<span id="cp" class="user-error"></span>
											</td>
										</tr>

										<tr>
											<td>
												<label>Phone</label><br>
												<input type="text" name="phone" value="" id="phone">
											</td>
										</tr>
										<tr>
											<td colspan="2">
												<span id="pn" class="user-error"></span>
											</td>
										</tr>

										<tr>
											<td>
												<label>Email</label><br>
												<input type="email" name="email" id="email" value="">
											</td>
										</tr>
										<tr>
											<td colspan="2">
												<span id="e" class="user-error"></span>
											</td>
										</tr>

										<tr>
											<td>
												<label>Address</label><br>
												<textarea cols="22" name="address" id="address"></textarea>
											</td>
										</tr>
										<tr>
											<td colspan="2">
												<span id="a" class="user-error"></span>
											</td>
										</tr>

										<tr>
											<td>
												<label>Gender</label>
												<input type="radio" name="gender" id="gender" value="Male">Male
												<input type="radio" name="gender" id="gender" value="Female">Female
												<input type="radio" name="gender" id="gender" value="Others">Others
											</td>
										</tr>
										<tr>
											<td colspan="2">
												<span id="g" class="user-error"></span>
											</td>
										</tr>

										<tr>
											<td>
												<label>Department</label>

												<select name="department" id="department">
													<option value="">-Choice-</option>
													<option value="CSE">CSE</option>
													<option value="EEE">EEE</option>
													<option value="IPE">IPE</option>
													<option value="ENG">ENG</option>
													<option value="BBA">BBA</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan="2">
												<span id="dept" class="user-error"></span>
											</td>
										</tr>

										<tr>
											<td>
												<label>Blood Group</label>

												<select name="blood" id="blood">
													<option value="">-Select-</option>
													<option value="A+">A+</option>
													<option value="B+">B+</option>
													<option value="AB+">AB+</option>
													<option value="O+">O+</option>
													<option value="A-">A-</option>
													<option value="B-">B-</option>
													<option value="AB-">AB-</option>
													<option value="O-">O-</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan="2">
												<span id="bg" class="user-error"></span>
											</td>
										</tr>

										<tr>
											<td>
												<label>Date of Birth</label>
												<input type="date" name="dob" id="dob" value="">
											</td>
										</tr>
										<tr>
											<td colspan="2">
												<span id="d" class="user-error"></span>
											</td>
										</tr>

										<tr>
											<td>
												<label>User Type</label>
												<select name="usertype" id="usertype">
													<option value="">-Choose-</option>
													<option value="admin">admin</option>
													<option value="manager">manager</option>
													<option value="director">director</option>
													<option value="employee">employee</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan="2">
												<span id="ut" class="user-error"></span>
											</td>
										</tr>
 							
										<tr align="center">
											<td colspan="2">
												<hr><br>
												<input type="submit" name="submit" value="Sing Up"><br><br>
												<span>Already SignUp ?</span><a href="login_check.php">Login</a>
											</td>
											<!-- <td align="right">
												<a href="login_check.php">Back</a>
											</td> -->
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