<?php 
	require_once('../model/db.php');
	require_once('../model/productModel.php');

	if(isset($_POST['search_btn'])){

		//$get_id = getProductById($_GET['name']);
 		$name = $_POST['name'];

		$conn = getConnection();
		$sql = "select * from products where name='{$name}'";
		$result = mysqli_query($conn, $sql);

		//print_r(mysqli_fetch_assoc($get_id));

		while($value = mysqli_fetch_assoc($result)){

				//$id=$value['id'];
				$name=$value['name'];
				$profit=$value['profit'];
		}
		?>
			<table border="1" align="center" cellspacing="5" cellpadding="5">
				<tr>
					<td colspan="2">
						<h3>***Searching Result***</h3>
					</td>
				</tr>
				<tr>
					<th>Name</th>
					<th>Profit</th>
				</tr>
				<tr>
					<td><?php echo $name; ?></td>
					<td><?php echo $profit; ?></td>
				</tr>
			</table>
		<?php
		//header('location: ../controler/searchCheck.php');
	}
?>

<!-- ========================================================== -->

<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
</head>
<body>
	<table align="center">
		<tr>
			<td>
				<form method="post" action="../controler/searchCheck.php">
					<fieldset>
						<legend>SEARCH</legend>
						<table border="1" cellspacing="1" cellpadding="8">
							<tr>
								<td><input type="text" name="name" value=""></td>
								<td colspan="3" align="center"><input type="submit" name="search_btn" value="Search By Name"></td>
							</tr>
							<tr>
								<td colspan="4">
									<hr>
								</td>
							</tr>
							<tr>
								<th>NAME</th>
								<th>PROFIT</th>
								<th colspan="2">ACTION</th>
							</tr>

							<?php
								require_once('../model/productModel.php');

								$result = getAllProduct();

								//print_r($result);

								if($result!=0){
									foreach ($result as $key => $value) {
										echo "
											<tr>
												<td>{$value['name']}</td>
												<td>{$value['profit']}</td>
												<td>
													<a href='editCheck.php?id=$value[id]'>edit</a>
												</td>
												<td>
													<a href='deleteCheck.php?id=$value[id]'>delete</a>
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