<?php
	session_start();

	require_once('../model/UserModel.php');

	if(isset($_POST['save_btn'])){

		$name = $_POST['name'];
		$Bprice = $_POST['Bprice'];
		$Sprice = $_POST['Sprice'];

		$profit = (int)$Sprice-(int)$Bprice;

		if(isset($_POST['items'])){
			$display = "Yes";
		}else{
			$display = "";
		}

		if($name=""||$Bprice=="" ||$Sprice==""){
			echo "*Null Submission....";
		}else{
		$user = [	
					'name'=>$name, 
					'Bprice'=>$Bprice, 
					'Sprice'=>$Sprice,
					'display'=>$display,
					'profit'=>$profit
				];
				print_r($user);

			$status = insertUser($user);

			if($status){
				echo "Success...";
			}else{
				echo "Error...";
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
				<form method="post" action="Addproduct.php">
					<fieldset>
						<legend>ADD PRODUCT</legend>
						<table>
							<tr>
								<td>Name</td>
								<td><input type="text" name="name" value=""></td>
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
									<input type="checkbox" name="items[]">Display
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