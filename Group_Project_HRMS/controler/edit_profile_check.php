<?php
	session_start();

	if(!isset($_SESSION['flag'])){
		header('location: ../controler/login_check.php');

	}else{
		
		if(isset($_POST['edit_btn'])){

			$myfile = fopen('../model/users.json', 'r');
			$data = fread($myfile, filesize('../model/users.json'));
			fclose($myfile);

			$decode = json_decode($data,true);

			foreach ($decode as $key => $value){
				
				$decode['username']=$_POST['username'];
				$decode['name']=$_POST['name'];
				$decode['email']=$_POST['email'];
				$decode['gender']=$_POST['gender'];
				$decode['phone']=$_POST['phone'];
				$decode['address']=$_POST['address'];
				$decode['department']=$_POST['department'];
				$decode['bg']=$_POST['bg'];
				$decode['dob']=$_POST['dob'];

				$curr_encode=json_encode($decode);
				
				$myfile = fopen('../model/users.json', 'w');
				fwrite($myfile, $curr_encode);
				fclose($myfile);
			}

			header('location: ../view/edit_profile_check.php');

		}else{
			$myfile = fopen('../model/users.json', 'r');
			$data = fread($myfile, filesize('../model/users.json'));
			fclose($myfile);

			$decode = json_decode($data,true);


			$username=$decode['username'];
			$name=$decode['name'];
			$email=$decode['email'];
			$gender=$decode['gender'];
			$phone=$decode['phone'];
			$address=$decode['address'];
			$department=$decode['department'];
			$bg=$decode['bg'];
			$dob=$decode['dob'];
		}
	}

?>

<!-- ================================================================================== -->

<?php 
	$title= "Edit Profile";
	include('../view/header.html');
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
							<a href="logout_check.php"> Logout </a> 
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
					<summary><a href="../view/dashboard.php">Dashboard</a></summary>
						
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
							<summary><a href="../view/leave_approval.php">Leave Approval</a></summary>
						</details>
						<details>
							<summary><a href="../view/travel_approval.php">Travel Approval</a></summary>
						</details>
						<details>
							<summary><a href="../view/performance_approval.php">Performance Overview</a></summary>
						</details>
				</details>

				<details>
					<summary>Requirement</summary>
						<details>
							<summary><a href="../view/add_job.php">Add Job Titles</a></summary>
						</details>
						<details>
							<summary><a href="../view/view_job.php">View Job Titles</a></summary>
						</details>
						<details>
							<summary><a href="../view/add_job_vacancy.php">Add Job Vacancy</a></summary>
						</details>
						<details>
							<summary><a href="../view/view_job_vacancy.php">View Job Vacancy</a></summary>
						</details>
						<details>
							<summary><a href="../view/online_app.php">Online Application</a></summary>
						</details>
						<details>
							<summary><a href="../view/fixing_interview.php">Fixing Interview Online</a></summary>
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
							<summary><a href="change_pass_check.php">Change Password</a></summary>
						</details>
				</details>

				<details>
					<summary><a href="#">About</a></summary>
				</details>

				<details>
					<summary><a href="logout_check.php">Logout</a></summary>
				</details>
			</td>
<!-- ================================================================================================= -->
			<td align="center">
				<table align="center">
					<tr>
						<td>
							<form method="post" action="edit_profile_check.php">
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
												<!-- <a href="view_profile_check.php"><span>Back</span></a> -->
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