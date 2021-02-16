<?php
	if(isset($_POST['submit']))
	{

		$name 		= $_POST['email'];

		if($name == ""){
			echo "null submission";
		}else{
			echo "successully...";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Name input</title>
</head>
<body>

	<form method="POST" action="">
		<fieldset>
			<legend>NAME</legend>
			Name: <input type="text" name="email" value="<?php if(isset($_POST['email'])){ echo $_POST['email']; }?> ">  <br>
				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>