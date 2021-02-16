<?php
	if(isset($_POST['submit'])){
		$name = $_POST['dob'];

		if($name == ""){
			echo "Null submission";
		}else{
			echo "successully...";
		}
	}else{
		echo "Invalid request...";
	}
?>