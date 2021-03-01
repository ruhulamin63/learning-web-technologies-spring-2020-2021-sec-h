<?php
	session_start();

	if(isset($_SESSION['flag'])){

		$user=$_SESSION['current_user'];

		$name=$user['name'];
		$email=$user['email'];
		$gender=$user['gender'];
		$date=$user['date'];

		if(isset($_POST['edit_profile_submit_button'])){
			$name=$_POST['name'];
			$name=$_POST['email'];
			$name=$_POST['gender'];
			$name=$_POST['date'];

			$user['name']=$name;
			$user['email']=$email;
			$user['gender']=$gender;
			$user['date']=$date;
		}else{
			echo "*Null submission...";
		}

?>

<!-- ================================================================================== -->


<!DOCTYPE html>
<html>
<head>
	<title>Edit Profile</title>
<style>
	th, td {
	  padding: 10px;
	}
</style>
</head>
<body>

	<table border="1px" align="center" width="100%">
		<tr>	
			<td>
				<table width="100%">
					<tr>
						<td width="200px" height="60px"><img src="logo.png" width="100%" height="100%"></td>
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
		<tr height="420px">
			<td width="200px">Account<hr>
				<ul>
					<li><a href="dashboard.php">Dashboard</a></li>
					<li><a href="view_profile_check.php">View Profile</a></li>
					<li><a href="edit_profile_check.php">Edit Profile</a></li>
					<!-- Add url in change profile pic -->
					<li><a href="profile_pic.php">Change Profile Picture</a></li>
					<li><a href="change_pass_check.php">Change Password</a></li>
					<li><a href="public_Home.html">Logout</a></li>
				</ul>
			</td>
			<td align="center">
				<form method="post" action="edit_profile_check.php">
					<fieldset>
						<legend>EDIT PROFILE</legend>
						<table>
							<tr>
								<td>Name</td>
								<td>:<input type="name" name="name" value="<?php echo $name;?>"></td> 
							</tr>
							<tr>
								<td>Email</td>
								<td>:<input type="email" name="email" value="<?php echo $email;?>"></td> 
							</tr>
							<tr>
								<td>Gender</td>
								<td>:
									<input type="radio" name="gender" value="<?php echo $gender;?>"> Male
									<input type="radio" name="gender" value="<?php echo $gender;?>"> Female
									<input type="radio" name="gender" value="<?php echo $gender;?>"> Other 
								</td> 
							</tr>
							<tr>
								<td>Date of Birth</td>
								<td>:<input type="date" name="date" value="<?php echo $date;?>"></td> 
							</tr>
							<tr>
								<!-- add line -->
								<td><input type="submit" name="edit_profile_submit_button" value="Submit"></td>
							</tr>
						</table>
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

<?php
	}else{
		header('location: login_check.php');
	}
?>