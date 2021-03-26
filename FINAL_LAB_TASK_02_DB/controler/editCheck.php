<?php
	session_start();

	require_once('../model/productModel.php');
	//require_once('../model/db.php');

	$get_id = $_GET['id'];	

	//print_r($get_id);				

	$id = getProductById($get_id);

	while($value = mysqli_fetch_assoc($id)){

		$name = $value['name'];
		$Bprice = $value['bprice'];
		$Sprice = $value['sprice'];
		$display = $value['display'];
	}
//=================================================
	if(isset($_POST['update_btn'])){	

		$name = $_POST['name'];
		$Bprice = $_POST['Bprice'];
		$Sprice = $_POST['Sprice'];

		$profit = (int)$Sprice-(int)$Bprice;

		if(isset($_POST['items'])){
			$display = "Yes";
		}else{
			$display = "Null";
		}


		$product = [
						'name'=>$_POST['name'], 
						'Bprice'=>$Bprice, 
						'Sprice'=>$Sprice,
						'display'=>$display,
						'profit'=>$profit
					];
		//print_r($product);

		$status = updateProduct($product,$get_id);

		if($status){
			if(!empty($_POST['items'])){
				setcookie('name', $name, time()+(10*365*24*60*60));
				setcookie('Bprice', $Bprice, time()+(10*365*24*60*60));
				setcookie('Sprice', $Sprice, time()+(10*365*24*60*60));
				setcookie('display', $display, time()+(10*365*24*60*60));
			}else{
				if(isset($_COOKIE['name'])){
					setcookie('name','');
				}
				if(isset($_COOKIE['Bprice'])){
					setcookie('Bprice','');
				}
				if(isset($_COOKIE['Sprice'])){
					setcookie('Sprice','');
				}
				if(isset($_COOKIE['display'])){
					setcookie('display','');
				}
			}
			header('location: ../view/display.php');
		}else{
			echo "Error....";
		}
	}
?>

<!-- ============================================ -->
<!DOCTYPE html>
<html>
<head>
	<title>Edit Product</title>
</head>
<body>
	<table align="center">
		<tr>
			<td align="center">
				<form method="post" action="../controler/editCheck.php?id=<?php echo $get_id; ?>">
					<fieldset>
						<legend>EDIT PRODUCT</legend>
						<table>
							<tr>
								<td>Name</td>
								<td>
									<input type="text" name="name" value="<?php if(isset($_COOKIE['name'])){ echo $_COOKIE['name'];} ?>">
								</td>
							</tr>
							<tr>
								<td>Buying Price</td>		
								<td>
									<input type="text" name="Bprice" value="<?php if(isset($_COOKIE['Bprice'])){ echo $_COOKIE['Bprice'];} ?>">
								</td>
							</tr>
							<tr>
								<td>Selling Price</td>
								<td>
									<input type="text" name="Sprice" value="<?php if(isset($_COOKIE['Sprice'])){ echo $_COOKIE['Sprice'];} ?>">
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<hr>
								</td>
							</tr>
							<tr>
								<td>
									<input type="checkbox" name="items" <?php if (isset($_COOKIE['items'])){ echo "checked";} ?>>Display
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<hr>
								</td>
							</tr>
							<tr>
								<td>
									<input type="submit" name="update_btn" value="Update">
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