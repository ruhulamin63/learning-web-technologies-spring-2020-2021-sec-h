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
						require_once('../model/UserModel.php');

						$result = getAllUser();

							if($result!=0){
								foreach ($result as $key => $value) {
									echo "
										<tr>
											<td>{$value['userid']}</td>
											<td>{$value['name']}</td>
											<td>{$value['email']}</td>
											<td>{$value['user']}</td>
										</tr>
									";
								}
							}
						?>
					<tr>
					<td colspan="4" align="right">
						<?php 
							if($user['user']=="Admin"){
						?>
								<a href="../view/admin_home.php">Go Home</a>
						<?php
							}else{
						?>
								<a href="../view/user_home.php">Go Home</a>
						<?php
							}
						?>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>