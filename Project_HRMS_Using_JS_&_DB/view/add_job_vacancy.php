<?php
	session_start();

	require_once('../model/JobVacancyModel.php');

	if(!isset($_SESSION['flag'])){
		header('location: ../controler/login_check.php');
	}

	if(isset($_POST['job_vacancy_btn'])){

		$user = [	
					'vacancytitle'=>$_POST['vacancytitle'], 
					'name'=>$_POST['name'], 
					'manager'=>$_POST['manager'],
					'location'=>$_POST['location'],
					'position'=> $_POST['position'],
					'description'=>$_POST['description']
				];
					
		 $status = AddJobVacancyInsertData($user);

		if($status){
			?>
				<script type="text/javascript">
					alert('Inserted data in database');
				</script>
			<?php
			header('location: view_job_vacancy.php');

		}else{

			?>
				<script type="text/javascript">
					alert('Error database connection');
				</script>
			<?php
		}
	}
?>
<!-- 
======================================================= -->
<?php 
	$title= "Vacancy";
	include('header.html');
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
							<a href="../controler/view_profile_check.php">
								<?php
									echo $_SESSION['current_user']['name'];
								?>
							</a> |
							<a href="../controler/logout_check.php">Logout</a> 
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
<!-- new table creating -->
	<table  border="1px" align="cen" width="100%">
		<tr>
			<td width="200px" height="425px"><h2>Main Menu</h2>
				<hr>

				<details>
					<summary><b>Dashboard</b></summary>
						<details>
							<summary><a href="dashboard.php">Dashboard</a></summary>	
						</details>
				</details>

				<details>
					<summary><b>Portal</b></summary>
						<details>
							<summary><a href="create_leave_request.php">Create Leave Request</a></summary>
						</details>
						<details>
							<summary><a href="create_travel_request.php">Create Travel Request</a></summary>
						</details>
						<details>
							<summary><a href="fixing_interview_approval.php">Fixing Interview</a></summary>
						</details>
				</details>

				<details>
					<summary><b>Screening & Approval</b></summary>
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
					<summary><b>Requirement</b></summary>
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
					<summary><b>Setting</b></summary>
						<details>
							<summary><a href="../controler/view_profile_check.php">View Profile</a></summary>
						</details>
						<details>
							<summary><a href="../controler/edit_profile_check.php">Edit Profile</a></summary>
						</details>
						<details>
							<summary><a href="../controler/change_pass_check.php">Change Password</a></summary>
						</details>
						<details>
							<summary><a href="../controler/logout_check.php">Logout</a></summary>
						</details>
				</details>	
			</td>

			<td colspan="2" align="center">
				<table align="center">
					<tr>
						<td>
							<form method="post" action="add_job_vacancy.php">
								<fieldset>
									<h2>Add Job Vacancy</h2>
									<hr>

									<table>
										<tr>
											<td>Job Title</td>
											<td>:
												<input type="text" name="vacancytitle" value="">
											</td>
										</tr>
										<tr>
											<td>Vacancy Name</td>
											<td>:
												<input type="text" name="name" value="">
											</td>
										</tr>
										<tr>
											<td>Hiring Manager</td>
											<td>:
												<input type="text" name="manager" value="">
											</td>
										</tr>
										<tr>
											<td>Job Location</td>
											<td>:
												<input type="text" name="location" value="">
											</td>
										</tr>
										<tr>
											<td>Number Of Position</td>
											<td>:
												<input type="text" name="position" value="">
											</td>
										</tr>
										<tr>
											<td>Job Description</td>
											<td>:
												<textarea name="description"></textarea>
											</td>
										</tr>
									</table>
									<hr>
									<input type="submit" name="job_vacancy_btn" value="Save">
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