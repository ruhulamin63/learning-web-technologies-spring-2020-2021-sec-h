<?php
	session_start();
	require_once('../model/productModel.php');

	/*<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>*/

	$get_id = $_GET['id'];
	//$_SESSION['userid']=$get_id;

	$id = getProductById($get_id);

	while($value = mysqli_fetch_assoc($id)){

		$name = $value['name'];
		$Bprice = $value['bprice'];
		$Sprice = $value['sprice'];
		$display = $value['display'];
	}

	if(isset($_POST['del_btn'])){
		
		$status = deleteProduct($get_id);

		print_r($status);

		if($status){
			header('location: display.php');
		}else{
			echo "Failed...";
		}
	}
?>

<!-- ========================================== -->

<!DOCTYPE html>
<html>
<head>
	<title>Delete Product</title>
</head>
<body>
	<table align="center">
		<tr>
			<td align="center">
				<form method="post" action="../controler/deleteCheck.php?id=<?php echo $get_id; ?>">
					<fieldset>
						<legend>DELETE PRODUCT</legend>
						<table cellpadding="5" cellspacing="8">
							<tr>
								<td>Name</td>
								<td>
									<?php
										echo $name;
									?>
								</td>
							</tr>
							<tr>
								<td>Buying Price</td>		
								<td>
									<?php
										echo $Bprice;
									?>
								</td>
							</tr>
							<tr>
								<td>Selling Price</td>
								<td>
									<?php
										echo $Sprice;
									?>
								</td>
							</tr>
							<tr>
								<td>Displayble</td>
								<td>
									<?php
										echo $display;
									?>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<hr>
								</td>
							</tr>
							<tr>
								<td>
									<input type="submit" name="del_btn" value="Delete">
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