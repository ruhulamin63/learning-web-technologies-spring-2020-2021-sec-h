<?php
	if(isset($_POST['submit'])){

		$name = $_POST['bg'];

		if($name == ""){
			echo "Null submission";
		}else{
			echo "successfully...";
		}
	}else{
		echo "Invalid request...";
	}
?>