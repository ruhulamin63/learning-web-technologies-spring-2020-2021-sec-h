

<!-- ================================================================================== -->


<?php 
	$title= "Edit Profile";
	include('header.html');
?>

	<table border="1px" align="center" width="100%">
		<tr>	
			<td>
				<table width="100%">
					<tr>
						<td width="200px" height="60px"><img src="../asset/logo.png" width="100%" height="100%"></td>
						<td align="right" >
							Logged in as
							<a href="#"> 
								
							</a> |
							<a href="#"> Logout </a> 
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>

	<table border="1px" align="center" width="100%">
		<tr height="420px">
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
				<table align="center">
					<tr>
						<td>
							<form method="post" action="#">
								<fieldset>
									<legend>EDIT PROFILE</legend>
									<table>
										<tr>
											<td>Name</td>
											<td>
												<input type="name" name="name" value="">
											</td> 
										</tr>
										<tr>
											<td>Email</td>
											<td>
												<input type="email" name="email" value="">
											</td> 
										</tr>
										<tr>
											<td>Gender</td>
											<td>
												<input type="radio" name="gender" value="Male"> Male
												<input type="radio" name="gender" value="Female"> Female
												<input type="radio" name="gender" value="Other"> Other 
											</td> 
										</tr>
										<tr>
											<td>Phone</td>
											<td>
												<input type="number" name="phone" value="">
											</td>
										</tr>
										<tr>
											<td>Address</td>
											<td>
												<textarea cols="22"></textarea>
											</td>
										</tr>
										<tr>
											<td>Department</td>
											<td>
												
											</td>
										</tr>
										<tr>
											<td>Blood Group</td>
											<td>
												
											</td>
										</tr>
										<tr>
											<td>Date of Birth</td>
											<td>
												<input type="date" name="date" value="">
											</td> 
										</tr>
										<tr>
											<!-- add line -->
											<td><input type="submit" name="#" value="Save"></td>
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