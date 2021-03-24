<?php
	session_start();

	$user = $_SESSION['current_user'];

	$name = $user['name'];
	$Bprice = $user['Bprice'];
	$Sprice = $user['Sprice'];

	//print_r($_SESSION['current_user']);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Edit Product</title>
</head>
<body>
	<table align="center">
		<tr>
			<td align="center">
				<form method="post" action="addproduct.php">
					<fieldset>
						<legend>EDIT PRODUCT</legend>
						<table>
							<tr>
								<td>Name</td>
								<td>
									<input type="text" name="name" value="<?php echo $name;?>">
								</td>
							</tr>
							<tr>
								<td>Buying Price</td>		
								<td>
									<input type="text" name="Bprice" value="<?php echo $Bprice;?>">
								</td>
							</tr>
							<tr>
								<td>Selling Price</td>
								<td>
									<input type="text" name="Sprice" value="<?php echo $Sprice;?>">
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<hr>
								</td>
							</tr>
							<tr>
								<td>
									<input type="checkbox" name="items" value="<?php echo $display;?>">Display
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<hr>
								</td>
							</tr>
							<tr>
								<td>
									<input type="submit" name="save_btn" value="Save">
								</td>
							</tr>
						</table>
					</fieldset>
				</form>
			</td>
		</tr>
	</table>
</body>
</html>