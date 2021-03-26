<?php
	if(!isset($_SESSION['flag'])){
		header('location: ../controler/login_check.php');
	}
?>

<!-- ============================================================ -->

<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>
	<form>
		<fieldset>
			<table border="1px" align="center" cellpadding="10">
				<tr>
					<td colspan="2" align="center">Profile</td>
				</tr>
					<?php
						require_once('../model/db.php');

						$user=$_SESSION['user_type'];

						$conn = getConnection();
						$sql = "select * from users where userid='{$user['userid']}'";
						$result = mysqli_query($conn, $sql);
						$row=mysqli_num_rows($result);

						if($row!=0){
							foreach ($result as $key => $value) {
								echo "
									<tr>
										<th>ID</th>	
										<td>{$value['userid']}</td>
									</tr>
									<tr>
										<th>NAME</th>
										<td>{$value['name']}</td>
									</tr>
									<tr>
										<th>EMAIL</th>
										<td>{$value['email']}</td>
									</tr>
									<tr>
										<th>USER TYPE</th>
										<td>{$value['user']}</td>
									</tr>
								";
							}
						}
					?>
				<tr>
					<td colspan="2" align="right">
						<?php 
							if($user['user']=="Admin"){
						?>
								<a href="../view/admin_home.php">Go Home</a>
						<?php
							}else{
						?>
								<a href="../view/user_home.php">Go Home</a>
						<?php
							}
						?>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>