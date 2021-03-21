<?php
	session_start();

	require_once('../model/UserModel.php');

	if(isset($_POST['save_btn'])){
		$name = $_POST['name'];
		$Bprice = $_POST['Bprice'];
		$Sprice = $_POST['Sprice'];


		if($name=""||$Bprice=="" ||$Sprice==""){
			echo "*Null Submission....";
		}else{
			$user = [	
						'name'=>$name, 
						'Bprice'=>$Bprice, 
						'Sprice'=> $Sprice
					];

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
				<form method="post" action="addproduct.php">
					<fieldset>
						<legend>ADD PRODUCT</legend>
						<table>
							<tr>
								<td>Name</td>
								<td>
									<input type="text" name="name" value="name">
								</td>
							</tr>
							<tr>
								<td>Buying Price</td>		
								<td>
									<input type="number" name="Bprice" value="Bprice">
								</td>
							</tr>
							<tr>
								<td>Selling Price</td>
								<td>
									<input type="number" name="Sprice" value="Sprice">
								</td>
							</tr>
							<tr>
								<td>
									<hr>
									<input type="checkbox" name="items[]">Display
								</td>
							</tr>
							<tr>
								<td>
									<hr>
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