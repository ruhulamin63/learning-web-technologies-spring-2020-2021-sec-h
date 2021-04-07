<?php
	session_start();

	if(!isset($_SESSION['flag'])){
		header('location: ../controler/login_check.php');

	}else{
		$user=$_SESSION['current_user'];

		$username=$user['username'];
		$name=$user['name'];
		$email=$user['email'];
		$gender=$user['gender'];
		$phone=$user['phone'];
		$address=$user['address'];
		$department=$user['department'];
		$bg=$user['bg'];
		$dob=$user['dob'];

		// if(isset($_POST['edit_btn'])){
		// 	$username=$user['username'];
		// 	$name=$user['name'];
		// 	$email=$user['email'];
		// 	$gender=$user['gender'];
		// 	$phone=$user['phone'];
		// 	$address=$user['address'];
		// 	$department=$user['department'];
		// 	$bg=$user['bg'];
		// 	$dob=$user['dob'];
		// }
	}

?>

<!-- ================================================================================== -->

<?php 
	$title= "Edit Profile";
	include('header.html');
?>

	<table border="1px" align="center" width="100%">
		<tr>	
			<td>
				<table width="100%">
					<tr>
						<td width="200px" height="60px"><img src="../asset/company_logo.png" width="100%" height="100%"></td>
						<td align="right" >
							Logged in as
							<a href="view_profile_check.php"> 
								<?php
									echo $_SESSION['current_user']['name'];
								?>
							</a> |
							<a href="../controler/logout_check.php"> Logout </a> 
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>

	<table border="1px" align="center" width="100%">
		<tr height="420px">
			<td width="200px" height="425px">MENU
				<hr>
				<details>
					<summary><a href="dashboard.php">Dashboard</a></summary>
						
				</details>

				<details>
					<summary>Portal</summary>
						<details>
							<summary><a href="#">Create Leave Request</a></summary>
						</details>
						<details>
							<summary><a href="#">Create Travel Request</a></summary>
						</details>
						<details>
							<summary><a href="#">Monthly Performance</a></summary>
						</details>
				</details>

				<details>
					<summary>Screening & Approval</summary>
						<details>
							<summary><a href="leave_approval.php">Leave Approval</a></summary>
						</details>
						<details>
							<summary><a href="travel_approval.php">Travel Approval</a></summary>
						</details>
						<details>
							<summary><a href="performance_approval.php">Performance Overview</a></summary>
						</details>
				</details>

				<details>
					<summary>Requirement</summary>
						<details>
							<summary><a href="add_job.php">Add Job Titles</a></summary>
						</details>
						<details>
							<summary><a href="view_job.php">View Job Titles</a></summary>
						</details>
						<details>
							<summary><a href="add_job_vacancy.php">Add Job Vacancy</a></summary>
						</details>
						<details>
							<summary><a href="view_job_vacancy.php">View Job Vacancy</a></summary>
						</details>
						<details>
							<summary><a href="online_app.php">Online Application</a></summary>
						</details>
						<details>
							<summary><a href="fixing_interview.php">Fixing Interview Online</a></summary>
						</details>
				</details>

				<details>
					<summary>Setting</summary>
						<details>
							<summary><a href="view_profile_check.php">View Profile</a></summary>
						</details>
						<details>
							<summary><a href="edit_profile_check.php">Edit Profile</a></summary>
						</details>
						<details>
							<summary><a href="../controler/change_pass_check.php">Change Password</a></summary>
						</details>
				</details>

				<details>
					<summary><a href="about.html">About</a></summary>
				</details>

				<details>
					<summary><a href="../controler/logout_check.php">Logout</a></summary>
				</details>
			</td>
<!-- ================================================================================================= -->
			<td align="center">
				<table align="center">
					<tr>
						<td>
							<form method="post" action="#">
								<fieldset>
									<legend>EDIT PROFILE</legend>
									<table>
										<tr>
											<td>Username</td>
											<td>:
												<input type="username" name="username" value="<?php echo $username;?>">
											</td> 
										</tr>
										<tr>
											<td>Name</td>
											<td>:
												<input type="name" name="name" value="<?php echo $name;?>">
											</td> 
										</tr>
										<tr>
											<td>Email</td>
											<td>:
												<input type="email" name="email" value="<?php echo $email;?>">
											</td> 
										</tr>
										<tr>
											<td>Gender</td>
											<td>:
												<input type="radio" name="gender" <?php if (isset($gender) && $gender=="Male") echo "checked";?> value="Male"> Male
												<input type="radio" name="gender" <?php if (isset($gender) && $gender=="Female") echo "checked";?> value="Female"> Female
												<input type="radio" name="gender" <?php if (isset($gender) && $gender=="Other") echo "checked";?> value="Other"> Other 
											</td> 
										</tr>
										<tr>
											<td>Phone</td>
											<td>:
												<input type="number" name="phone" value="<?php echo $phone;?>">
											</td>
										</tr>
										<tr>
											<td>Address</td>
											<td>:
											<textarea cols="22" name="address" value=""><?php echo $address;?></textarea>
											</td>
										</tr>
										<tr>
											<td>Department</td>
											<td>:
												
												<select name="department">
													<option><?php echo $department;?></option>
													<option >CSE</option>
													<option>EEE</option>
													<option >IPE</option>
													<option>BBA</option>
													<option >ENG</option>
												</select>
											</td>
										</tr>
										<tr>
											<td>Blood Group</td>
											<td>:
												<select name="bg">
													<option><?php echo $bg;?></option>
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
										<tr>:
											<td>Date of Birth</td>
											<td>
												<input type="date" name="dob" value="<?php echo $dob;?>">
											</td> 
										</tr>
										<tr>
											<!-- add line -->
											<td>
												<input type="submit" name="edit_btn" value="Save">
												<a href="view_profile_check.php"><span>Back</span></a>
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
	include('footer.html'); 
?>