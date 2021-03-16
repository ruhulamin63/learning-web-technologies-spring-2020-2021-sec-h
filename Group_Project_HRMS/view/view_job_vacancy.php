
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
							<a href="view_profile_check.php">
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
			<td colspan="2" align="center">
				<table align="center">
					<tr>
						<td>
							<fieldset>
								<h2>View Job Vacancy</h2>
								<hr><br>
								<b>Search Job</b>
								<span>
									<input type="text" name="view_job_vacancy" value="">
								</span>
								<hr>
								<input type="submit" name="view_job_vacancy_btn" value="Submit">
								<input type="submit" name="view_all_vacancy_btn" value="View All">
								<a href="#">Back</a>
								<br><br>
								<table border="1px" align="center">
									<tr>
										<th>SL</th>
										<th>Job Title</th>
										<th>Vacancy Name</th>
										<th>Hiring Manager</th>
										<th>Job Location</th>
										<th>Number Of Position</th>
										<th>Job Description</th>
									</tr>
									<tr>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
								</table>
							</fieldset>
						</td>
					</tr>
				</table>
			</td>
		</tr>
<?php 
	include('footer.html'); 
?>