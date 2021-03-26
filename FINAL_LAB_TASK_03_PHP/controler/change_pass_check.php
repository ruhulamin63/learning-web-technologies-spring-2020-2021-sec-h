<?php
	session_start();
	require_once('../model/UserModel.php');
	require_once('../model/db.php');

	if(!isset($_SESSION['flag'])){
		header('location: ../controler/login_check.php');
	}else{
		$user=$_SESSION['user_type'];
		//print_r($user);
		if(isset($_POST['change_pass_btn'])){

			$curr_pass = $_POST['curr_pass'];
			$new_pass = $_POST['new_pass'];
			$re_pass = $_POST['re_pass'];

			if($curr_pass==""||$new_pass==""||$re_pass==""){
				echo "*Null submission";
				//print_r($user['password']);
			}else{
				if($user['password']==$curr_pass){
					if($new_pass==$re_pass){
						$conn=getConnection();
						$sql="update users set password='{$new_pass}' where userid='{$user['userid']}'";
						$result=mysqli_query($conn, $sql);
						//echo "success...";
					}else{
						echo "New pass & re pass mismatch...?";
					}
				}else{
					echo "Current password not match...?";
				}
			}
			if($user['type']=="Admin"){
				header('location: ../view/admin_home.php');
			}else{
				header('location: ../view/user_home.php');
			}
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Change Pass</title>
</head>
<body>
	<table align="center">
		<tr>
			<td>
				<form method="post" action="change_pass_check.php">
					<fieldset>
						<legend>CHANGE PASSWORD</legend>
						<table>
							<tr>
								<td>Current Password</td>
								<td><input type="password" name="curr_pass" value=""></td>
							</tr>
							<tr>
								<td>New Password</td>
								<td><input type="password" name="new_pass" value=""></td>
							</tr>
							<tr>
								<td>Retype New Password</td>
								<td><input type="password" name="re_pass" value=""></td>
							</tr>
							<tr>
								<td>
									<input type="submit" name="change_pass_btn" value="Change">
									<?php 
										if($user['user']=="Admin"){
									?>
											<a href="../view/admin_home.php">Home</a>
									<?php
										}else{
									?>
											<a href="../view/user_home.php">Home</a>
									<?php
										}
									?>
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