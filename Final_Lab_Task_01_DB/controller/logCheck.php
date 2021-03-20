<?php
	session_start();

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username == "" || $password == ""){
			echo "null submission...";
		}else{
			//$user = $_SESSION['current_user'];

			$conn = mysqli_connect('localhost', 'root', '', 'user_mgt');

				$sql = 'select * from users';
				$result = mysqli_query($conn, $sql);

				//$row = mysqli_fetch_assoc($result);

			while($row = mysqli_fetch_assoc($result)) {
				if($row['username']==$username&&$row['password']==$password){
					$_SESSION['flag'] = true;

					$_SESSION['current_user']=$row;

					header('location: ../view/home.php');
				}else{
					echo "invalid user";
				}
			}
		}

	}
?>