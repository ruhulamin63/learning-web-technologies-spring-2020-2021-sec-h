<?php
	
	require_once('../model/db.php');

	function UserNameQuery($username){

		$conn = getConnection();
		$sql = "select * from registration where username='{$username}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_num_rows($result);

		return $row;
	}
?>