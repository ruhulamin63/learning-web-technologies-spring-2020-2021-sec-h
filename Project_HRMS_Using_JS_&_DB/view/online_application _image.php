<?php

	if(isset($_POST['submit'])){
		$file_info = $_FILES['choose_file'];
			//echo $file_info['tmp_name'];
		
		$file = $file_info['name'];
		$path = '../asset/onlineimage/'.$file;
		$filename = $file_info['tmp_name'];
		move_uploaded_file($filename, $path)
	}

?>