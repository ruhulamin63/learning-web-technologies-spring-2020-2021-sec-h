<?php
	if(isset($_POST['submit'])){

		$name = $_POST['bg'];

		if($name == ""){
			echo "Null submission";
		}
		else{
			echo "successfully...";
		}
	}
	else{
		echo "Invaled request...";
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Blood Group input</title>
</head>
<body>

	<form method="POST" action="TASK_c.php">
		<fieldset>
			<legend>BLOOD GROUP</legend>

				<select name="bg">
						<option value="<?php if(isset($_POST['bg'])){ echo $_POST['bg']; }?> ">A+</option>
						<option value="<?php if(isset($_POST['bg'])){ echo $_POST['bg']; }?> ">A-</option>
						<option value="<?php if(isset($_POST['bg'])){ echo $_POST['bg']; }?> ">AB+</option>
						<option value="<?php if(isset($_POST['bg'])){ echo $_POST['bg']; }?> ">AB-</option>
						<option value="<?php if(isset($_POST['bg'])){ echo $_POST['bg']; }?> ">B+</option>
						<option value="<?php if(isset($_POST['bg'])){ echo $_POST['bg']; }?> ">B-</option>
						<option value="<?php if(isset($_POST['bg'])){ echo $_POST['bg']; }?> ">O+</option>
						<option value="<?php if(isset($_POST['bg'])){ echo $_POST['bg']; }?> ">O-</option>
					</select> 
				<br>
				<hr>
				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>