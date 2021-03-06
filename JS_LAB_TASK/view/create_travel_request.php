<?php
	session_start();

	if(!isset($_SESSION['flag'])){
		header('location: ../controler/login_check.php');
	}
?>

<!-- ================================================================ -->

<?php 
	$title= "Travel Request";
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
			<td width="200px" height="425px">MENU
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
							<summary><a href="employee_search.php">Search Employee</a></summary>
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
							<form method="post" action="#">
								<fieldset>
									<h2>Create Travel Request</h2>
									<hr>
								
									<table align="center">
										<tr>
											<td>Employee Name</td>
											<td>:
												<input type="text" name="Ename" value="">
											</td>
										</tr>
										<tr>
											<td>Contract During Leave</td>
											<td>:
												<input type="text" name="Econtract" value="">
											</td>
										</tr>
										<tr>
											<td>Leave Type</td>
											<td>:
												<input type="text" name="Eleave_type" value="">
											</td>
										</tr>
										<tr>
											<td>Number Of Days</td>
											<td>:
												<input type="number" name="Ework_days" value="">
											</td>
										</tr>
										<tr>
											<td>State Date</td>
											<td>:
												<input type="date" name="Estart_date" value="">
												</select>
											</td>
										</tr>
										<tr>
											<td>End Date</td>
											<td>:
												<input type="date" name="Eend_date" value="">
												</select>
											</td>
										</tr>
										<tr>
											<td>Reason for Leave</td>
											<td>:
												<input type="text" name="Ereason_for_leave" value="">
											</td>
										</tr>
										<tr>
											<td>Status for Leave</td>
											<td>:
												<input type="text" name="Estatus_for_leave" value="">
											</td>
										</tr>
										<tr>
											<td colspan="2" align="left">
												<hr>
												<input type="submit" name="Asave_btn" value="Save">
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