<?php
	session_start();

	if(!isset($_SESSION['flag'])){
		header('location: login_check.php');
	}
?>


<?php 
	$title= "Dashboard Page";
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
									echo $_SESSION['current_user']['name'];
								?>
							</a> |
							<a href="public_Home.html"> Logout </a> 
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
<!-- new table creating -->
	<table  border="1px" align="cen" width="100%">
		<tr height="400px">
			<td width="200px">Account<hr>
				<ul>
					<li><a href="dashboard.php">Dashboard</a></li>
					<li><a href="view_profile_check.php">View Profile</a></li>
					<li><a href="edit_profile_check.php">Edit Profile</a></li>
					<li><a href="profile_pic.php">Change Profile Picture</a></li>
					<li><a href="change_pass_check.php">Change Password</a></li>
					<li><a href="public_Home.html">Logout</a></li>
				</ul>
			</td>
			<td align="center">
				<h1>Welcome
					<?php
						echo $_SESSION['current_user']['name'];
					?>
				</h1>
			</td>
		</tr>
	</table>

<?php 
	include('footer.php'); 
?>