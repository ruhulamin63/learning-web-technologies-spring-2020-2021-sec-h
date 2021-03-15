
<?php 
	$title= "Fixing";
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
								<h2>Fixing Intrview Online</h2>
								<hr>

								<table>
									<tr>
										<td>Vacancy</td>
										<td>:
											<input type="text" name="v" value="">
										</td>
									</tr>
									<tr>
										<td>Candidate</td>
										<td>:
											<input type="text" name="c" value="">
										</td>
									</tr>
									<tr>
										<td>Interview Time</td>
										<td>:
											<input type="text" name="it" value="">
										</td>
									</tr>
									<tr>
										<td>Date</td>
										<td>:
											<input type="date" name="d" value="">
										</td>
									</tr>
									<tr>
										<td>Status</td>
										<td>:
											<input type="text" name="s" value="">
										</td>
									</tr>
									<tr>
										<td>Comments</td>
										<td>:
											<textarea></textarea>
										</td>
									</tr>
								</table>
								<hr>
								<input type="submit" name="fixing_btn" value="Save"> |
								<a href="#">Back</a>
							</fieldset>
						</td>
					</tr>
				</table>
			</td>
		</tr>
<?php 
	include('footer.html'); 
?>