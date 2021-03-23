<!DOCTYPE html>
<html>
<head>
	<title>View Users</title>
</head>
<body>
	<form>
		<fieldset>
			<table border="1px" align="center" cellpadding="10">
				<tr>
					<td colspan="4" align="center">Users</td>
				</tr>
				<tr>
					<th>ID</th>
					<th>NAME</th>
					<th>EMAIL</th>
					<th>USER TYPE</th>
				</tr>
					<?php
						require_once('../model/db.php');

						$conn = getConnection();
						$sql = "select * from users";
						$data = mysqli_query($conn,$sql);

						$row = mysqli_num_rows($data);
						//$result = mysqli_fetch_assoc($data);

						//print_r($result);

						if($row!=0){
							while($result=mysqli_fetch_assoc($data)){
								echo "
									<tr>
										<td>{$result['id']}</td>
										<td>{$result['name']}</td>
										<td>{$result['email']}</td>
										<td>{$result['user']}</td>
									</tr>
								";
							}
						}
					?>
				<tr>
					<td colspan="4" align="right">
						<a href="#">Go Home</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>