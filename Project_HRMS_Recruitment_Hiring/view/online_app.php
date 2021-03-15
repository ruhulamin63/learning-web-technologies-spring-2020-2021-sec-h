
<?php 
	$title= "Online App";
	include('header.html');
?>
	<table border="1px" align="center" width="100%">
		<tr>	
			<td>
				<table width="100%">
					<tr>
						<td width="150px" height="50px">
							<img src="../asset/logo.png" alt="main_logo" width="100%" height="100%">
						</td>
						<td align="right" >Logged in as
							<a href="#"></a> |
							<a href="#">Logout</a> 
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
			<td colspan="2" align="center">
				<table align="center">
					<tr>
						<td>
							<fieldset>
								<h2>Online Application</h2>
								<hr>
							
								<table align="center">
									<tr>
										<td>Full Name</td>
										<td>:
											<input type="text" name="Aname" value="">
										</td>
									</tr>
									<tr>
										<td>Email</td>
										<td>:
											<input type="text" name="Aemail" value="">
										</td>
									</tr>
									<tr>
										<td>Contract No</td>
										<td>:
											<input type="number" name="ACnumber" value="">
										</td>
									</tr>
									<tr>
										<td>Year Of Experience</td>
										<td>:
											<input type="number" name="Aexperience" value="">
										</td>
									</tr>
									<tr>
										<td>Location Job Applied</td>
										<td>:
											<input type="text" name="Alocation" value="">
										</td>
									</tr>
									<tr>
										<td>Select Vacancy Type</td>
										<td>:
											<select>
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
											<input type="date" name="Adate" value="">
										</td>
									</tr>
									<tr>
										<td>Resume Upload</td>
										<td>:
											<img src="../asset/user.png" width="100px" height="100px"><br>
											<input type="file" name="choose_file" value="">
										</td>
									</tr>
									<tr>
										<td>Comment</td>
										<td>:
											<textarea></textarea>
										</td>
									</tr>
									<tr>
										<td align="left">
											<input type="submit" name="Asave_btn" value="Save">
										</td>
										<td align="right">
											<a href="#">Back</a>
										</td>
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