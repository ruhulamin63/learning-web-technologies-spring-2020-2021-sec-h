<?php
	
	session_start();

	if(!isset($_SESSION['flag'])){
		header('location: ../controler/login_check.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>User home</title>
</head>
<body>
	<table align="center">
		<tr>
			<td>
				<form action="post" action="">
					<fieldset>
						<table align="center" cellspacing="5" cellpadding="8">
							<tr>
								<td align="center">
									<h1>Welcome 
										
									</h1>
								</td>
							</tr>
							<tr>
								<td align="center">
									<a href="#">Profile</a><br>
									<a href="../controler/change_pass_check.php">Change Passowrd</a><br>
									<a href="#">View User</a><br>
									<a href="../controler/logout_check.php">Logout</a>
								</td>
							</tr>
						</table>
					</fieldset>
				</form>
			</td>
		</tr>
	</table>
</body>
</html>