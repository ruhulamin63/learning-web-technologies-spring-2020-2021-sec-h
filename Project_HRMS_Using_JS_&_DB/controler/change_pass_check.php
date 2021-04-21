<?php

	session_start();
	require_once('../model/UserModel.php');
	require_once('../model/db.php');

	if(!isset($_SESSION['flag'])){
		header('location: login_check.php');
	}

//=============================================================================

	$user=$_SESSION['current_user'];
	//print_r($user);

	if(isset($_POST['change_pass_btn'])){

		$curr_pass = $_POST['curr_pass'];
		$new_pass = $_POST['new_pass'];
		$re_pass = $_POST['re_pass'];

//=========================================================================================

		if($user['password']==$curr_pass){
			if($new_pass==$re_pass){

				$conn=getConnection();
				$sql="update registration set password='{$new_pass}' where username='{$user['username']}'";
				$result=mysqli_query($conn, $sql);
				
				if($result){
					?>
						<script type="text/javascript">
							alert('Successfully change password');
						</script>
					<?php
				}else{
					?>
					<script type="text/javascript">
							alert('Invalid change password');
						</script>
					<?php
				}
			}
		}

//================================================================
		/*if($user['type']=="Admin"){
			header('location: ../view/admin_home.php');
		}else{
			header('location: ../view/user_home.php');
		}*/

		//header('location: ../view/dashboard.php');
	}
?>

<!-- ======================================================== -->

<?php 
	$title= "Change Password";
	include('../view/header.html');
?>
	<script type="text/javascript" src="../js/ChangePassCheck.js"></script>
</head>
<body>
	
	<table border="1px" align="center" width="100%">
		<tr>	
			<td>
				<table width="100%">
					<tr>
						<td width="150px" height="50px">
							<img src="../asset/company_logo.png" alt="main_logo" width="100%" height="100%">
						</td>
						<td align="right" >Logged in as
							<a href="view_profile_check.php">
								<?php
									echo $_SESSION['current_user']['name'];
								?>
							</a> |
							<a href="logout_check.php">Logout</a> 
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>

	<table  border="1px" align="center" width="100%">
		<tr>
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

			<td>
				<table align="center">
					<tr>
						<td>
							<form method="post" action="change_pass_check.php" onsubmit="return validation()">
								<fieldset>
									<legend>CHANGE PASSWORD</legend>
									<table>
										<tr>
											<td>Current Password</td>
											<td>
												<input type="password" name="curr_pass" id="curr_pass" value="">
											</td>
										</tr>
										<tr>
											<td colspan="2">
												<span id="cp" class="user-error"></span>
											</td>
										</tr>

										<tr>
											<td>New Password</td>
											<td>
												<input type="password" name="new_pass" id="new_pass" value="">
											</td>
										</tr>
										<tr>
											<td colspan="2">
												<span id="np" class="user-error"></span>
											</td>
										</tr>

										<tr>
											<td>Retype New Password</td>
											<td>
												<input type="password" name="re_pass" id="re_pass" value="">
											</td>
										</tr>
										<tr>
											<td colspan="2">
												<span id="rp" class="user-error"></span>
											</td>
										</tr>

									</table>
									<hr>
									<input type="submit" name="change_pass_btn" value="Save">
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