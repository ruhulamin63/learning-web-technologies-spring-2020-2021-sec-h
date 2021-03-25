<!DOCTYPE html>
<html>
<head>
	<title>Display</title>
</head>
<body>
	<table align="center">
		<tr>
			<td>
				<form method="post" action="../controler/deleteCheck.php">
					<fieldset>
						<legend>DISPLAY</legend>
						<table border="1" cellspacing="8" cellpadding="10" c>
							<tr>
								<th>NAME</th>
								<th>PROFIT</th>
								<th colspan="2">ACTION</th>
							</tr>

							<?php
								require_once('../model/productModel.php');

								$result = getAllProduct();

								//print_r($result);

								if(count($result)>0){
									foreach ($result as $key => $value) {
										echo "
											<tr>
												<td>{$value['name']}</td>
												<td>{$value['profit']}</td>
												<td>
													<a href='../controler/editCheck.php?id=$value[id]'>Edit</a>
												</td>
												<td>
													<a href='../controler/deleteCheck.php?id=$value[id]'>Delete</a>
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