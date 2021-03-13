

<!-- ================================================================================== -->


<?php 
	$title= "Edit";
	include('header.html');
?>

	<table border="1px" align="center" width="100%">
		<tr>	
			<td>
				<table width="100%">
					<tr>
						<td  width="150px" height="50px">
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
				<form method="post" action="#">
					<h2>Change data information</h2>
					<hr>
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
							<td>Phone No</td>
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
							<td>Gender</td>
							<td>
								<input type="radio" name="gender"  value="Male"> Male
								<input type="radio" name="gender"  value="Female"> Female
								<input type="radio" name="gender"  value="Other"> Other 
							</td> 
						</tr>
						<tr>
							<td>Department</td>
							<td>
								<select>
									<option>Choose</option>
									<option>CSE</option>
									<option>EEE</option>
									<option>IPE</option>
									<option>ENG</option>
									<option>BBA</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Blood Group</td>
							<td>
								<select>
									<option>Choose</option>
									<option>A+</option>
									<option>B+</option>
									<option>AB+</option>
									<option>O+</option>
									<option>A-</option>
									<option>B-</option>
									<option>AB-</option>
									<option>O-</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Date of Birth</td>
							<td>
								<input type="date" name="date" value="">
							</td> 
						</tr>
						<tr>
							<td>
								<input type="submit" name="edit_profile__btn" value="Save">
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