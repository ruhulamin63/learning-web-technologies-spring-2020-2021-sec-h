<?php
	session_start();

	if(!isset($_SESSION['flag'])){
		header('location: ../controler/login_check.php');
	}
?>
<!-- ======================================================================= -->
<?php 
	$title= "View Job";
	include('header.html');
?>
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
							<fieldset>
								<b>Search Job</b>
								<span>
									<input type="text" name="addjob" value="">
								</span>
								<hr>
								<span>
									<input type="submit" name="search_btn" value="Search">
									<input type="submit" name="view_all_btn" value="View All">
								</span>
							</fieldset>
							
								
								<?php 
									//require_once('../model/db.php');
									require_once('../model/JobTitleModel.php');

									if(isset($_POST['search_btn'])){

								?>
								<table border="1px" align="center" cellpadding="8" cellspacing="8">
									<tr>
										<th>SL</th>
										<th>Job Title</th>
										<th colspan="2">Action</th>
									</tr>
										<?php
										
											$name=$_POST['addjob'];
											$result=getUserAddJobSearchById($name);

											if(mysqli_num_rows($result)>0){
												while($row=mysqli_fetch_array($result)){
													echo "
														<tr>
															<td>{$row['id']}</td>
															<td>{$row['addjob']}</td>
															<td>
																<a href='../controler/add_job_edit.php?id=$row[id]'>Update</a>
															</td>
															<td>
																<a href='../controler/view_job_delete.php?id=$row[id]'>Delete</a>
															</td>
														</tr>
													";
												}
											}else{
												echo "No data available";
											}
										?>
								</table>

								<?php
									}

									//===============view all data====================

									if(isset($_POST['view_all_btn'])){
										require_once('../model/JobTitleModel.php');
								?>

								<table border="1px" align="center" cellpadding="8" cellspacing="8">
									<tr>
										<th>SL</th>
										<th>Job Title</th>
										<th colspan="2">Action</th>
									</tr>

								<?php
										$result = getAllAddJobData();

										//print_r($result);

										if(count($result)>0){
											foreach ($result as $key => $value) {
												echo "
													<tr>
														<td>{$value['id']}</td>
														<td>{$value['addjob']}</td>
														<td>
															<a href='../controler/add_job_edit.php?id=$value[id]'>Update</a>
														</td>
														<td>
															<a href='../controler/view_job_delete.php?id=$value[id]'>Delete</a>
														</td>
													</tr>
												";
											}
										}
									}
								?>
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