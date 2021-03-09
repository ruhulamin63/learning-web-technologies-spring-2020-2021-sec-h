<?php
	session_start();

	if(!isset($_SESSION['flag'])){
		header('location: login_check.php');
	}else{

		$user=$_SESSION['current_user'];
		$name=$user['name'];
		$email=$user['email'];
		$gender=$user['gender'];
		$date=$user['date'];
//======================================================
		
	}
?>

<!-- ========================================================= -->

<?php 
	$title= "Picture Change";
	include('header.php');
?>

	<table border="1px" align="center" width="100%">
		<tr>	
			<td>
				<table width="100%">
					<tr>
						<td width="200px" height="60px"><img src="../asset/logo.png" width="100%" height="100%"></td>
						<td align="right" >
							Logged in as
							<a href="dashboard.php"> 
								<?php
									$user=$_SESSION['current_user'];
									$name=$user['name'];
									echo $name;
								?>
							</a> |
							<a href="public_Home.html"> Logout </a> 
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>

	<table border="1px" align="center" width="100%">
		<tr height="400px">
			<td width="200px">Account<hr>
				<ul>
					<li><a href="dashboard.php">Dashboard</a></li>
					<li><a href="view_profile_check.php">View Profile</a></li>
					<li><a href="edit_profile_check.php">Edit Profile</a></li>
					<!-- add url name -->
					<li><a href="profile_pic.php">Change Profile Picture</a></li>
					<li><a href="../controler/change_pass_check.php">Change Password</a></li>
					<li><a href="public_Home.html">Logout</a></li>
				</ul>
			</td>
			<td>
				<form method="post" action="view_profile_check.php" enctype="multipart/form-data">
					<fieldset>
						<legend>PROFILE</legend>
						<table>
							<tr>
								<td>
									<img src="../asset/user.png" width="200px" height="200px"><br>
									<input type="file" name="choose_file" value="">
								</td>
							</tr>
						</table>
						<hr>
						<input type="submit" name="submit_pic" value="Upload">
					</fieldset>
				</form>
			</td>
		</tr>
		<tr height="50px">
			<td colspan="2" align="center">
				copyright@2021
			</td> 
		</tr>
	</table>
</body>
</html>