<?php
	session_start();

	require_once('../model/UserModel.php');
	require_once('../model/usernameModel.php');

//================================================================

	if(isset($_POST['sign_up_btn'])){
		
		$username = $_POST['username'];
		$name = $_POST['name'];
		$password = $_POST['password'];
		$confpass = $_POST['confpass'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$department = $_POST['department'];
		$blood = $_POST['blood'];
		$dob = $_POST['dob'];

//=========================================================================
		
		$count = UserNameQuery($username);

		//print_r($count);

		if($count>0){
			?>
				<script type="text/javascript">
					alert('Username already exists ?');
				</script>
			<?php
		}else{

			$user = [	
					'username'=>$_POST['username'], 
					'name'=>$name,
					'password'=>$password,
					'email'=> $email,
					'phone'=> $phone,
					'address'=>$address,
					'gender'=>$_POST['gender'],
					'department'=>$department,
					'blood'=>$_POST['blood'],
					'dob'=> $_POST['dob']
				];
				
			$status = insertUser($user);

			if($status){
				
				?>
					<script type="text/javascript">
						alert("Inserted data in database");
					</script>
				<?php
					header('location: login_check.php');
				
			}else{
				?>
					<script type="text/javascript">
						alert("*Not inserted data");
					</script>
				<?php
			}
		}
	}
?>

<!-- ======================================================================================= -->

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
							<form method="post" action="regCheck.php" onsubmit="return regCheckValidation()">
								<fieldset>
									<legend>REGISTRATION</legend>
									<table>
										<tr>
											<td colspan="2" align="center">
												<h2 align="center">Sign Up</h2>
												<img src="../asset/your_logo.png">
												<hr>
											</td>
										</tr>
										<tr>
											<td>Username</td>
											<td>
												<input type="text" name="username" id="username" value="">
											</td>
										</tr>
										<tr>
											<td colspan="2">
												<span id="un" class="user-error"></span>
											</td>
										</tr>

										<tr>
											<td>Name</td>
											<td>
												<input type="text" name="name" id="name" value="">
											</td>
										</tr>
										<tr>
											<td colspan="2">
												<span id="n" class="user-error"></span>
											</td>
										</tr>

										<tr>
											<td>Password</td>
											<td>
												<input type="password" name="password" id="password" value="">
											</td>
										</tr>
										<tr>
											<td colspan="2">
												<span id="p" class="user-error"></span>
											</td>
										</tr>

										<tr>
											<td>Confirm Password</td>
											<td>
												<input type="password" name="confpass" id="confpass" value="">
											</td>
										</tr>
										<tr>
											<td colspan="2">
												<span id="cp" class="user-error"></span>
											</td>
										</tr>

										<tr>
											<td>Phone</td>
											<td>
												<input type="text" name="phone" value="" id="phone">
											</td>
										</tr>
										<tr>
											<td colspan="2">
												<span id="pn" class="user-error"></span>
											</td>
										</tr>

										<tr>
											<td>Email</td>
											<td>
												<input type="email" name="email" id="email" value="">
											</td>
										</tr>
										<tr>
											<td colspan="2">
												<span id="e" class="user-error"></span>
											</td>
										</tr>

										<tr>
											<td>Address</td>
											<td>
												<textarea cols="22" name="address" id="address"></textarea>
											</td>
										</tr>
										<tr>
											<td colspan="2">
												<span id="a" class="user-error"></span>
											</td>
										</tr>

										<tr>
											<td>Gender</td>
											<td>
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
											<td>Department</td>
											<td>
												<select name="department" id="department">
													<option value="">--Select--</option>
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
											<td>Blood Group</td>
											<td>
												<select name="blood" id="blood">
													<option value="">--Select--</option>
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
											<td>Date of Birth</td>
											<td>
												<input type="date" name="dob" id="dob" value="">
											</td>
										</tr>
										<tr>
											<td colspan="2">
												<span id="d" class="user-error"></span>
											</td>
										</tr>
 							
										<tr align="center">
											<td colspan="2">
												<br>
												<hr>
											</td>
										</tr>
										<tr align="left">
											<td colspan="2" align="center">
												<input type="submit" name="sign_up_btn" value="Sign Up"><br><br>
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