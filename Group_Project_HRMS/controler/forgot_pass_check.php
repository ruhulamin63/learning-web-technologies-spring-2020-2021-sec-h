<!-- <?php

	session_start();

	if(isset($_SESSION['flag'])){
		if(isset($_POST['forgot_pass_btn'])){

			$email = $_POST['curr_email'];

			if($email == ""){
				echo "*Null Submission...";
			}else{
				$user = $_SESSION['current_user'];

				if($email == $user['email']){
					header('location: dashboard.php');
				}else{
					echo "*Invalid user...";
					//print_r($user);
				}
			}
		}
	}
?> -->

<!-- ========================================================================================= -->

<?php 
	$title= "Forgot Pass";
	include('../view/header.html');
?>

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

	<table border="1px" align="center" width="100%">
		<tr>
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
							<summary><a href="..view/travel_approval.php">Travel Approval</a></summary>
						</details>
						<details>
							<summary><a href="../view/performance_approval.php">Performance Overview</a></summary>
						</details>
				</details>

				<details>
					<summary>Recruitment</summary>
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
							<summary><a href="../view/view_profile_check.php">View Profile</a></summary>
						</details>
						<details>
							<summary><a href="../view/edit_profile_check.php">Edit Profile</a></summary>
						</details>
						<details>
							<summary><a href="../controler/change_pass_check.php">Change Password</a></summary>
						</details>
				</details>

				<details>
					<summary><a href="#">About</a></summary>
				</details>

				<details>
					<summary><a href="logout_check.php">Logout</a></summary>
				</details>
			</td>

			<td>
				<table align="center">
					<tr>
						<td>
							<form method="post" action="forgot_pass_check.php">
								<fieldset>
									<legend>Check Email</legend>
									<table>
										<tr>
											<td>Enter Email</td>
											<td>
												<input type="text" name="curr_email" value="">
											</td>
										</tr>
									</table>
									<hr>
									<input type="submit" name="forgot_pass_btn" value="Submit">
									<span><a href="#">Back</a></span>
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