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

	<form method="POST" action="TASK_c.php">
		<fieldset>
			<legend>GENDER</legend>

				<input type="checkbox" name="items[]" value="<?php if(isset($_POST['items'])){ echo $_POST['items']; }?> "> SSC
				<input type="checkbox" name="items[]" value="<?php if(isset($_POST['items'])){ echo $_POST['items']; }?> "> HSC
				<input type="checkbox" name="items[]" value="<?php if(isset($_POST['items'])){ echo $_POST['items']; }?> "> BSc
				<input type="checkbox" name="items[]" value="<?php if(isset($_POST['items'])){ echo $_POST['items']; }?> "> MSc  

				<br>
				<hr>
				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>