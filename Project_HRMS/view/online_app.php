<?php
	session_start();

	require_once('../model/UserModel.php');

	if(!isset($_SESSION['flag'])){
		header('location: ../controler/login_check.php');
	}

//===================================================================	

	if(isset($_POST['submit'])){

		$user = [	
					'name'=>$_POST['name'], 
					'email'=>$_POST['email'],
					'contract'=>$_POST['contract'],
					'experience'=> $_POST['experience'],
					'location'=> $_POST['location'],
					'type'=>$_POST['type'],
					'date'=>$_POST['date'],
					'comment'=>$_POST['comment']
				];
					
		 $status = OnlineApplicatinInsertData($user);

		if($status){
			echo "success...";
			//header('location: .php');
		}else{
			echo "**Error database connection";
		}
	}
?>

<!-- ================================================================ -->

<?php 
	$title= "Online";
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
							<form method="post" action="online_app.php">
								<fieldset>
									<h2>Online Application</h2>
									<hr>
								
									<table align="center">
										<tr>
											<td>Full Name</td>
											<td>:
												<input type="text" name="name" value="">
											</td>
										</tr>
										<tr>
											<td>Email</td>
											<td>:
												<input type="text" name="email" value="">
											</td>
										</tr>
										<tr>
											<td>Contract No</td>
											<td>:
												<input type="text" name="contract" value="">
											</td>
										</tr>
										<tr>
											<td>Year Of Experience</td>
											<td>:
												<input type="text" name="experience" value="">
											</td>
										</tr>
										<tr>
											<td>Location Job Applied</td>
											<td>:
												<input type="text" name="location" value="">
											</td>
										</tr>
										<tr>
											<td>Select Vacancy Type</td>
											<td>:
												<select name="type">
													<option>select</option>
													<option>Jr.Software Engineer</option>
													<option>Senior Software Engineer</option>
													<option>Developer</option>
													<option>Query Expert</option>
												</select>
											</td>
										</tr>
										<tr>
											<td>Date</td>
											<td>:
												<input type="date" name="date" value="">
											</td>
										</tr>
										<tr>
											<form method="post" action="../view/online_application_image.php" enctype="multipart/form-data">
												<td>Resume Upload</td>
												<td>:
													<img src="../asset/user.png" width="100px" height="100px"><br>
													<input type="file" name="choose_file" value="">
												</td>
											</form>
										</tr>
										<tr>
											<td>Comment</td>
											<td>:
												<textarea name="comment"></textarea>
											</td>
										</tr>
										<tr>
											<td align="left">
												<input type="submit" name="submit" value="Submit">
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