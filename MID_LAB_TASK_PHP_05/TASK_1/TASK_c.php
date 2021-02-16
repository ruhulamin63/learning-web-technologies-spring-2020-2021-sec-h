<?php
	if(isset($_POST['submit']))
	{

		$name 		= $_POST['myname'];

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
			Name: <input type="text" name="myname" value="<?php if(isset($_POST['myname'])){ echo $_POST['myname']; }?> ">  <br>
				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>