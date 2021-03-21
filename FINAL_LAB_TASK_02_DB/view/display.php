
<!DOCTYPE html>
<html>
<head>
	<title>Display</title>
</head>
<body>
	<table align="center">
		<tr>
			<td>
				<form method="post" action="display.php">
					<fieldset>
						<legend>DISPLAY</legend>
						<table border="1">
							<tr>
								<th>NAME</th>
								<th>PROFIT</th>
								<th colspan="2"></th>
							</tr>

							<?php
								require_once('../model/db.php');

								$conn = getConnection();
								$sql = "select * from products";
								$data = mysqli_query($conn,$sql);

								$row = mysqli_num_rows($data);
								$result = mysqli_fetch_assoc($data);

								//print_r($result);

								if($row!=0){
									while(mysqli_fetch_assoc($data)){
										echo "
											<tr>
												<td>{$result['Name']}</td>
												<td>{$result['Profit']}</td>
												<td>
													<a href='edit.php'>edit
												</td>
												<td>
													<a href='delete.php'>delete
												</td>
											</tr>
										";
									}
								}

							?>

						</table>
					</fieldset>
				</form>
			</td>
		</tr>
	</table>
</body>
</html>