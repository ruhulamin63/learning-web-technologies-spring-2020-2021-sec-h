<?php
	session_start();
	require_once('../model/leaveApprovalModel.php');


	if(!isset($_SESSION['flag'])){
		header('location: ../controler/login_check.php');
	}

//=============================================================================	

	if(isset($_POST['update_btn'])){

		$user = [	
					'empname'=>$_POST['empname'], 
					'leavetype'=>$_POST['leavetype'],
					'days'=>$_POST['days'],
					'leavefor'=> $_POST['leavefor'],
					'statedate'=> $_POST['statedate'],
					'enddate'=>$_POST['enddate'],
					'reason'=>$_POST['reason'],
					'status'=>$_POST['status']
				];

			$id=$_GET['id'];
			$status = LeaveRequestUpdateData($user,$id);

			if($status){
				header('location: ../view/leave_approval.php');
			}else{
				echo "*Error db connted";
			}

//==================================================================================
			$data = getUserLeaveRequestById($id);

			$empname=$data['empname'];
			$leavetype=$data['leavetype'];
			$days=$data['days'];
			$leavefor=$data['leavefor'];
			$statedate=$data['statedate'];
			$enddate=$data['enddate'];
			$reason=$data['reason'];
			$status=$data['status'];
					
	}else{

		$id=$_GET['id'];
		$data = getUserLeaveRequestById($id);

		$empname=$data['empname'];
		$leavetype=$data['leavetype'];
		$days=$data['days'];
		$leavefor=$data['leavefor'];
		$statedate=$data['statedate'];
		$enddate=$data['enddate'];
		$reason=$data['reason'];
		$status=$data['status'];
	}
?>

<!-- ===================================================================================== -->

<?php 
	$title= "Edit Leave";
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
							<form method="post" action="leave_request_edit.php?id=<?php echo $id;?>">
								<fieldset>
									<h2>Update Leave Request</h2>
									<hr>
								
									<table align="center">
										<tr>
											<td>Employee Name</td>
											<td>:
												<input type="text" name="empname" value="<?php echo $empname;?>">
											</td>
										</tr>
										<tr>
											<td>Leave Type</td>
											<td>:
												<input type="text" name="leavetype" value="<?php echo $leavetype;?>">
											</td>
										</tr>
										<tr>
											<td>Number Of Days</td>
											<td>:
												<input type="number" name="days" value="<?php echo $days;?>">
											</td>
										</tr>
										<tr>
											<td>Leave For</td>
											<td>:
												<select name="leavefor">
													<option><?php echo $leavefor;?></option>
													<option>Half Day</option>
													<option>Full Day</option>
												</select>
											</td>
										</tr>
										<tr>
											<td>State Date</td>
											<td>:
												<input type="date" name="statedate" value="<?php echo $statedate;?>">
												</select>
											</td>
										</tr>
										<tr>
											<td>End Date</td>
											<td>:
												<input type="date" name="enddate" value="<?php echo $enddate;?>">
												</select>
											</td>
										</tr>
										<tr>
											<td>Reason for Leave</td>
											<td>:
												<input type="text" name="reason" value="<?php echo $reason;?>">
											</td>
										</tr>
										<tr>
											<td>Status for Leave</td>
											<td>:
												<input type="text" name="status" value="<?php echo $status;?>">
											</td>
										</tr>
										<tr>
											<td colspan="2" align="left">
												<hr>
												<input type="submit" name="update_btn" value="Update">
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