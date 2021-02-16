<?php
	if(isset($_POST['submit'])){

		$name = $_POST['gender'];

		if($name == ""){
			echo "Null submission";
		}else{
			echo "successfully...";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Gender input</title>
</head>
<body>

	<form method="POST" action="">
		<fieldset>
			<legend>GENDER</legend>

				<input type="radio" name="gender" value="<?php if(isset($_POST['gender'])){ echo $_POST['gender']; }?> "> Male
				<input type="radio" name="gender" value="<?php if(isset($_POST['gender'])){ echo $_POST['gender']; }?> "> Female
				<input type="radio" name="gender" value="<?php if(isset($_POST['gender'])){ echo $_POST['gender']; }?> "> Other
				<br>
				<hr>
				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>