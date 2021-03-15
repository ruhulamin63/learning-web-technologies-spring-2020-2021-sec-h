

<!-- ========================================================= -->

<?php 
	$title= "View Profile";
	include('header.html');
?>
	<table border="1px" align="center" width="100%">
		<tr>	
			<td>
				<table width="100%">
					<tr>
						<td width="200px" height="60px">
							<img src="../asset/logo.png" width="100%" height="100%">
						</td>
						<td align="right" >
							Logged in as
							<a href="dashboard.php"> 
								
							</a> |
							<a href="public_Home.html"> Logout </a> 
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
<!-- creating new table -->
	<table border="1px" align="center" width="100%">
		<tr>
			<td width="200px" height="425px">MENU
				<hr>
				<details>
					<summary><a href="#">Dashboard</a></summary>
						
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
							<summary><a href="#">Leave Approval</a></summary>
						</details>
						<details>
							<summary><a href="#">Travel Approval</a></summary>
						</details>
						<details>
							<summary><a href="#">Performance Overview</a></summary>
						</details>
				</details>

				<details>
					<summary>Requirement</summary>
						<details>
							<summary><a href="#">Add Job Titles</a></summary>
						</details>
						<details>
							<summary><a href="#">View Job Titles</a></summary>
						</details>
						<details>
							<summary><a href="#">Add Job Vacancy</a></summary>
						</details>
						<details>
							<summary><a href="#">View Job Vacancy</a></summary>
						</details>
						<details>
							<summary><a href="#">Online Application</a></summary>
						</details>
						<details>
							<summary><a href="#">Fixing Interview Online</a></summary>
						</details>
				</details>

				<details>
					<summary>Setting</summary>
						<details>
							<summary><a href="#">View Profile</a></summary>
						</details>
						<details>
							<summary><a href="#">Edit Profile</a></summary>
						</details>
						<details>
							<summary><a href="#">Change Password</a></summary>
						</details>
				</details>

				<details>
					<summary><a href="#">About</a></summary>
				</details>

				<details>
					<summary><a href="#">Logout</a></summary>
				</details>
			</td>
			<td align="center">
				<table>
					<tr>
						<td>
							<form method="post" action="profile_pic.php" enctype="multipart/form-data">
								<fieldset>
									<legend>PROFILE</legend>
									<table align="center">
										<tr>
											<td>Name</td>
											<td>:
												<!-- <?php
													echo $name;
												?>-->
											</td>
											<td rowspan="4" align="center">
												
												<img src="../asset/user.png" width="200px" height="200px"><br>
												<a href="#">Change</a>
											</td>
										</tr>
										<tr>
											<td>Email</td>
											<td>:
												<!-- <?php
													echo $email;
												?> -->

											</td>
										</tr>
										<tr>
											<td>Gender</td>
											<td>:
												<!-- <?php
													echo $gender;
												?> -->

											</td>
										</tr>
										<tr>
											<td>Phone</td>
											<td>:
												
											</td>
										</tr>
										<tr>
											<td>Address</td>
											<td>:
												
											</td>
										</tr>
										<tr>
											<td>Department</td>
											<td>:
												
											</td>
										</tr>
										<tr>
											<td>Blood Group</td>
											<td>:
												
											</td>
										</tr>
										<tr>
											<td>Date of Birth</td>
											<td>:
												<!-- <?php
													echo $date;
												?> -->

											</td>
										</tr>
										<tr>
											<td><a href="#">Edit Profile</a></td>
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