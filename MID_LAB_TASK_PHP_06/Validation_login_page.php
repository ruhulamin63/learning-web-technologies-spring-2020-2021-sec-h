<?php
//===============================================================
	if(isset($_POST['myname']))
	{
		$name 		= $_POST['myname'];
		$n_len=strlen($name);

		if( $n_len>1 && (($name>='A'&&$name<='Z') || ($name>='a'&&$name<='z') || 
			($name>='0'&&$name<='9') || $name=='-' || $name=='_' || $name=='.')){
				echo "successful name";
				echo "<br>";
		}else{
			echo "*name at least 2 characters";
			echo "<br>";
		}
	}else{
		echo "*required name field?";
		echo "<br>";
	}
//========================================================================================================
	if(isset($_POST['password']))
	{
		$password = $_POST['password'];
		$p_len=strlen($password);

		if($p_len>7 && (($password=='@') || ($password=='#')|| ($password=='$') || 
			($password=='%')|| ($password>='A'&&$password<='Z') || ($password>='a'
			&&$password<='z') || ($password>='0'&&$password<='9') || $password=='-' 
			|| $password=='_' || $password=='.')){
				echo "successful password";
				echo "<br>";
		}else{
			echo "*password at least 8 characters";
			echo "<br>";
		}
	}
	else{
		echo "*required password field?";
		echo "<br>";
	}
//==============================================================================================================

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>

	<form method="POST" action="login.php">
		<fieldset>
			<legend>LOGIN</legend>
				<table>
					<tr>
						<td>User Name</td>
						<td><input type="text" name="myname" value=""></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="password" value=""></td>
					</tr>
					<tr>
						<td><input type="checkbox" name="items[]"> Remember Me</td>
					</tr>
				</table>
				<hr>
				<input type="submit" name="submit" value="Submit">
				<a href=""><u>Forgot Password?</u></a>	
		</fieldset>
	</form>
</body>
</html>