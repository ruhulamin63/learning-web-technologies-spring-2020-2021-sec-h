<?php
	session_start();
	require_once('../model/fixingInterviewModel.php');


	if(!isset($_SESSION['flag'])){
		header('location: ../controler/login_check.php');
	}

//=============================================================================	

	if(isset($_POST['update_btn'])){

		$user = [	
					'vacancy'=>$_POST['vacancy'], 
					'candidate'=>$_POST['candidate'],
					'time'=>$_POST['time'],
					'date'=> $_POST['date'],
					'status'=> $_POST['status'],
					'comment'=>$_POST['comment']
				];

			$id=$_GET['id'];
			$status = FixingInterviewUpdateData($user,$id);

			if($status){
				header('location: ../view/fixing_interview_approval.php');
			}else{
				echo "*Error db connted";
			}

//==================================================================================
			$data = getUserFixingInterviewById($id);

			$vacancy=$data['vacancy'];
			$candidate=$data['candidate'];
			$time=$data['time'];
			$date=$data['date'];
			$status=$data['status'];
			$comment=$data['comment'];
					
	}else{

		$id=$_GET['id'];
		$data = getUserFixingInterviewById($id);

		$vacancy=$data['vacancy'];
		$candidate=$data['candidate'];
		$time=$data['time'];
		$date=$data['date'];
		$status=$data['status'];
		$comment=$data['comment'];
	}
?>

<!-- ================================================================ -->

<?php 
	$title= "Edit Travel";
	include('../view/header.html');
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
							<summary><a href="../view/fixing_interview_approval.php">Fixing Interview Approval</a></summary>
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
							<form method="post" action="fixing_interview.php?id=<?php echo $id;?>">
								<fieldset>
									<h2>Update Fixing Intrview</h2>
									<hr>

									<table>
										<tr>
											<td>Vacancy</td>
											<td>:
												<input type="text" name="vacancy" value="<?php echo $vacancy;?>">
											</td>
										</tr>
										<tr>
											<td>Candidate</td>
											<td>:
												<input type="text" name="candidate" value="<?php echo $candidate;?>">
											</td>
										</tr>
										<tr>
											<td>Interview Time</td>
											<td>:
												<input type="time" name="time" value="<?php echo $time;?>">
											</td>
										</tr>
										<tr>
											<td>Date</td>
											<td>:
												<input type="date" name="date" value="<?php echo $date;?>">
											</td>
										</tr>
										<tr>
											<td>Status</td>
											<td>:
												<input type="text" name="status" value="<?php echo $status;?>">
											</td>
										</tr>
										<tr>
											<td>Comments</td>
											<td>:
												<textarea name="comment"><?php echo $comment;?></textarea>
											</td>
										</tr>
									</table>
									<hr>
									<input type="submit" name="fixing_btn" value="Save">
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