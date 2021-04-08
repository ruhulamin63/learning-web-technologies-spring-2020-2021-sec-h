<?php
	session_start();

	if(!isset($_SESSION['flag'])){
		header('location: ../controler/login_check.php');
	}else{

		$user=$_SESSION['current_user'];

		if(isset($_POST['change_pass_btn'])){

			if($user['password']==$_POST['curr_pass']){

				if($_POST['new_pass']==$_POST['re_pass']){

					$myfile = fopen('../model/users.json', 'r');
					$data = fread($myfile, filesize('../model/users.json'));
					fclose($myfile);

					$decode = json_decode($data,true);

					foreach ($decode as $key => $value){
							
							$decode['password']=$_POST['new_pass'];

								$curr_encode=json_encode($decode);
								
								$myfile = fopen('../model/users.json', 'w');
								fwrite($myfile, $curr_encode);
								fclose($myfile);
						}

					header('location: change_pass_check.php');
				}else{
					echo "*New password & repassword mismatch...?";
				}

			}else{
				echo "*Current password mismatch...?";
			}
		}
	}
?>

<!-- ======================================================== -->

<?php 
	$title= "Change Password";
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

	<table  border="1px" align="center" width="100%">
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
							<summary><a href="../view/travel_approval.php">Travel Approval</a></summary>
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

			<td>
				<table align="center">
					<tr>
						<td>
							<form method="post" action="change_pass_check.php">
								<fieldset>
									<legend>CHANGE PASSWORD</legend>
									<table>
										<tr>
											<td>Current Password</td>
											<td><input type="password" name="curr_pass" value=""></td>
										</tr>
										<tr>
											<td>New Password</td>
											<td><input type="password" name="new_pass" value=""></td>
										</tr>
										<tr>
											<td>Retype New Password</td>
											<td><input type="password" name="re_pass" value=""></td>
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