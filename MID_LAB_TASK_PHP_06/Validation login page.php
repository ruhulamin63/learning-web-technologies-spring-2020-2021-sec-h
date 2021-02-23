<?php
//===============================================================
	if(isset($_POST['myname']))
	{
		$name 		= $_POST['myname'];
		$len=strlen($name);

		if(preg_match('/[^a-z0-9 _]+$/i',$len)){
			echo "successfully...";
			echo "<br>";
		}else{
			echo "*name must contain at least 2 characters";
			echo "<br>";
		}
	}
	else{
		echo "*required name field?";
		echo "<br>";
	}
//===============================================================
	if(isset($_POST['password']))
	{
		$password 		= $_POST['password'];
		$len=strlen($password);

		if($len<8){
			echo "*password must contain at least 8 characters";
			echo "<br>";
		}else{
			echo "successfully...";
			echo "<br>";
		}
	}
	else{
		echo "*required password field?";
		echo "<br>";
	}
//===============================================================
//===============================================================
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>

	<form method="POST" action="name.php">
		<fieldset>
			<legend>LOGIN</legend>
				<table>
					<tr>
						<td>User Name:</td>
						<td><input type="text" name="myname" value=""></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="password" value=""></td>
					</tr>
					<hr>
					<tr>
						<td><input type="checkbox" name="items[]"> Remember Me</td>
					<tr>
						<td><input type="submit" name="submit" value="Submit"></td>
						<td><a href=""><u>Forgot Password?</u></a></td>
					</tr>
				</table>
		</fieldset>
	</form>
</body>
</html>