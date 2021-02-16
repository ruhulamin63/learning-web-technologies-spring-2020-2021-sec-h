<?php
	if(isset($_POST['submit'])){

		$name = $_POST['items'];

		if($name == ""){
			echo "Null submission";
		}else{
			echo "successfully...";
		}
	}else{
		echo "Invalid request...";
	}
?>