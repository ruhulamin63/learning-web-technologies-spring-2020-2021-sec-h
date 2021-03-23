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
					<td colspan="2" align="center">Profile</td>
				</tr>
				<tr>
					<th>ID</th>
					<th>NAME</th>
					<th>EMAIL</th>
					<th>USER TYPE</th>
				</tr>
					<?php
						require_once('../model/db.php');

						$get_id = $_GET['id'];

						$id = getProductById($get_id);

						if($row!=0){
							while($value = mysqli_fetch_assoc($id)){
								echo "
									<tr>
										<td>{$value['id']}</td>
										<td>{$value['name']}</td>
										<td>{$value['email']}</td>
										<td>{$value['user']}</td>
									</tr>
								";
							}
						}
					?>
				<tr>
					<td colspan="2" align="right">
						<a href="#">Go Home</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>