<?php
	session_start();

	if(isset($_POST['click_submit_reg'])){

		$name = $_POST['name'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$confpass = $_POST['confpass'];
		$gender = $_POST['gender'];
		$date = $_POST['date'];

		if($username == "" || $email == "" || $password == "" || $confpass == ""){
			echo "*Null submission...";
		}else{

			if($password == $confpass){

/*
				$myfile = fopen('../model/users.json', 'r');
				$data = fread($myfile, filesize('../model/users.json'));
				fclose($myfile);
//================================================================================
				$decode = json_decode($data,true);*/

				$user = [	
						'name'=>$name,
						'email'=> $email,
						'username'=>$username, 
						'password'=>$password, 
						'gender'=>$gender,
						'date'=>$date
					];

					$_SESSION['current_user']=$user;
					$user=$_['current_user'];

					/*$decode[] = $user;
					
					$curr_encode=json_encode($decode);
					
					$myfile = fopen('../model/users.json', 'w');
					fwrite($myfile, $curr_encode);
					fclose($myfile);*/

					
					header('location: read_write.php');
			}else{
				echo "*password & confirm password mismatch...";
			}
		}

	}
?>

<!-- ======================================================================================= -->


<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
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
						<td width="200px" height="50px">
							<img src="../asset/logo.png" width="100%" height="100%">
						</td>
						<td align="right"> 
							<a href="../view/public_Home.html">Home</a> |
							<a href="login_check.php">Login</a> |
							<a href="regCheck.php">Registration</a> 
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>

	<table border="1px" align="center" width="100%">
		<tr>
			<td height="400px">
				<table align="center">
					<tr>
						<td>
							<form id="myForm" method="post" action="regCheck.php">
								<fieldset>
									<legend>REGISTRATION</legend>
									<table>
										<tr>
											<td>Name</td>
											<td><input type="text" name="name" value=""></td>
										</tr>
										<tr>
											<td>Email</td>
											<td><input type="text" name="email" value=""></td>
										</tr>
										<tr>
											<td>User Name</td>
											<td><input type="text" name="username" value=""></td>
										</tr>
										<tr>
											<td>Password</td>
											<td><input type="password" name="password" value=""></td>
										</tr>
										<tr>
											<td>Confirm Password</td>
											<td><input type="password" name="confpass" value=""></td>
										</tr>
									</table>
									<hr>

									<fieldset>
										<legend>Gender</legend>
										<input type="radio" name="gender" <?php if (isset($gender) && $gender=="Male") echo "checked";?> value="Male"> Male
										<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female"> Female
										<input type="radio" name="gender" <?php if (isset($gender) && $gender=="Other") echo "checked";?> value="Other"> Other
									</fieldset>
									
									<hr>
									<fieldset>
										<legend>Date of Birth</legend>
										<input type="date" name="date" value="">
									</fieldset>
									
									<hr>
									<input type="submit" name="click_submit_reg" value="Submit">
									<input type="reset" name="" value="Reset">
								</fieldset>
								<script>
									function myFunction() {
								  		document.getElementById("myForm").reset();
									}
								</script>
							</form>
						</td>
					</tr>
				</table>
			</td>
		</tr>

		<tr height="50px">
			<td align="center">
				copyright@2021
			</td> 
		</tr>
	</table>
</body>
</html>