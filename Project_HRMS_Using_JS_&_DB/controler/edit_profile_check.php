<?php
	session_start();

	require_once('../model/UserModel.php');

	if(!isset($_SESSION['flag'])){
		header('location: ../controler/login_check.php');

	}else{
			
		$data=$_SESSION['current_user'];
				
//==============================================================

		if(isset($_POST['edit_btn'])){
				
			$username=$_POST['username'];
			$name=$_POST['name'];
			$email=$_POST['email'];
			$gender=$_POST['gender'];
			$phone=$_POST['phone'];
			$address=$_POST['address'];
			$department=$_POST['department'];
			$blood=$_POST['blood'];  
			$dob=$_POST['dob'];

			$conn = getConnection();
			$sql = "update registration set username='{$username}', name='{$name}', email='{$email}', phone='{$phone}', address='{$address}', gender='{$gender}', department='{$department}', blood='{$blood}', dob='{$dob}' where username='{$data['username']}'";
			$result=mysqli_query($conn, $sql);

//==============================================================================

			/*$get_id=$_SESSION['current_user']['username'];
			$id=getUserById($get_id);

			$user = [
						'username'=>$_POST['username'],
						'name'=>$_POST['name'],
						'email'=>$_POST['email'],
						'gender'=>$_POST['gender'],
						'phone'=>$_POST['phone'],
						'address'=>$_POST['address'],
						'department'=>$_POST['department'],
						'blood'=>$_POST['blood'],
						'dob'=>$_POST['dob'],
					];

			$status=updateUser($user,$id);*/	
				
//=====================================================================================

		}else{
			$id=$_SESSION['current_user']['username'];
			$data = getUserById($id);

			$username=$data['username'];
			$name=$data['name'];
			$email=$data['email'];
			$gender=$data['gender'];
			$phone=$data['phone'];
			$address=$data['address'];
			$department=$data['department'];
			$blood=$data['blood'];
			$dob=$data['dob'];
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
			<td width="200px" height="425px"><h2>Main Menu</h2>
				<hr>

				<details>
					<summary><b>Dashboard</b></summary>
						<details>
							<summary><a href="../view/dashboard.php">Dashboard</a></summary>	
						</details>
				</details>

				<details>
					<summary><b>Portal</b></summary>
						<details>
							<summary><a href="../view/create_leave_request.php">Create Leave Request</a></summary>
						</details>
						<details>
							<summary><a href="../view/create_travel_request.php">Create Travel Request</a></summary>
						</details>
						<details>
							<summary><a href="../view/fixing_interview_approval.php">Fixing Interview</a></summary>
						</details>
				</details>

				<details>
					<summary><b>Screening & Approval</b></summary>
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
					<summary><b>Requirement</b></summary>
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
					<summary><b>Setting</b></summary>
						<details>
							<summary><a href="view_profile_check.php">View Profile</a></summary>
						</details>
						<details>
							<summary><a href="edit_profile_check.php">Edit Profile</a></summary>
						</details>
						<details>
							<summary><a href="change_pass_check.php">Change Password</a></summary>
						</details>
						<details>
							<summary><a href="logout_check.php">Logout</a></summary>
						</details>
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
												<select name="blood">
													<option><?php echo $blood;?></option>
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