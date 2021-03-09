<?php

	if(!isset($_POST['submit'])){
		echo "*please click submit...";
	}else{
		$file_info = $_FILES['myfile'];
		//echo $file_info['tmp_name'];
		
		$file = $file_info['name'];
		$path = 'upload/'.$file_info['name'];
		$filename = $file_info['tmp_name'];

		if(move_uploaded_file($filename, $path)){
			echo "success";
		}else{
			echo "Error...";
		}
	}
?>

<html>
<head>
	<title>Change Profile Picture</title>
</head>
<body>
	<img src="upload/<?php echo $file; ?>" width="300" height="300">
</body>
</html>