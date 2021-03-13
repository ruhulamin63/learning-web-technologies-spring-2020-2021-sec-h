

<!-- ========================================================= -->

<?php 
	$title= "View";
	include('header.html');
?>

	<table border="1px" align="center" width="100%">
		<tr>	
			<td>
				<table width="100%">
					<tr>
						<td width="150px" height="50px">
							<img src="../asset/logo.png" width="100%" height="100%">
						</td>
						<td align="right" >
							Logged in as
							<a href="#"> 
								
							</a> |
							<a href="#">Logout</a> 
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
					<summary>Screening & Approval</summary>
						<details>
							<summary><a href="#">Leave Approval</a></summary>
						</details>
						<details>
							<summary><a href="#">Travel Approval</a></summary>
						</details>
						<details>
							<summary><a href="#">Response of Grievances</a></summary>
						</details>
						<details>
							<summary><a href="#">Performance Overview</a></summary>
						</details>
						<details>
							<summary><a href="#">Loan Approval</a></summary>
						</details>
				</details>

				<details>
					<summary>Recruitment</summary>
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

			<td>
				<form method="post" action="#" enctype="multipart/form-data">
					<h2>View data information</h2>
					<hr>
					<table>
						<tr>
							<td>Name</td>
							<td>:
								

							</td>
							<td rowspan="4" align="center">
								<img src="../asset/user.png" width="200px" height="200px"><br>
								<input type="file" name="choose_file" value="">
							</td>
						</tr>
						<tr>
							<td>Email</td>
							<td>:
								

							</td>
						</tr>
						<tr>
							<td>Phone No</td>
							<td>:
								
							</td> 
						</tr>
						<tr>
							<td>Address</td>
							<td>:
								
							</td> 
						</tr>
						<tr>
							<td>Gender</td>
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
								

							</td>
						</tr>
						<tr>
							<td>
								<hr>
								<a href="edit_profile_check.php">Edit</a> |
								<a href="#"><span>Back</span></a>
							</td>
						</tr>
					</table>
				</form>
			</td>
		</tr>
<?php 
	include('footer.html'); 
?>