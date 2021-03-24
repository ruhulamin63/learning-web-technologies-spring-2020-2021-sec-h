<?php
	session_start();

	require_once('../model/productModel.php');

	if(isset($_POST['save_btn'])){

		$name = $_POST['name'];
		$Bprice = $_POST['Bprice'];
		$Sprice = $_POST['Sprice'];

		$profit = (int)$Sprice-(int)$Bprice;

		if(isset($_POST['items'])){
			$display = "Yes";
		}else{
			$display = "Null";
		}

		if($name=""||$Bprice=="" ||$Sprice==""){
			echo "*Null Submission....";
		}else{

			$product = [
						'name'=>$_POST['name'], 
						'Bprice'=>$Bprice, 
						'Sprice'=>$Sprice,
						'display'=>$display,
						'profit'=>$profit
					];
			//print_r($product);

			$_SESSION['current_user']=$product;

			$status = insertProduct($product);

			if($status){
				echo "Success...";
			}else{
				echo "Error....";
			}
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Product Page</title>
</head>
<body>
	<table align="center">
		<tr>
			<td align="center">
				<form method="post" action="../view/addproduct.php">
					<fieldset>
						<legend>ADD PRODUCT</legend>
						<table>
							<tr>
								<td>Name</td>
								<td>
									<input type="text" name="name" value="">
								</td>
							</tr>
							<tr>
								<td>Buying Price</td>		
								<td>
									<input type="text" name="Bprice" value="">
								</td>
							</tr>
							<tr>
								<td>Selling Price</td>
								<td>
									<input type="text" name="Sprice" value="">
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<hr>
								</td>
							</tr>
							<tr>
								<td>
									<input type="checkbox" name="items" value="Yes">Display
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