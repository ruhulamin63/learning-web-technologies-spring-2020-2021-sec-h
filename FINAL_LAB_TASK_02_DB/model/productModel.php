<?php
	
	require_once('db.php');

	/*function getProductById($id){

		$conn = getConnection();

		$sql = "select * from product where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}*/

	/*function getAllProduct(){
		$conn = getConnection();
		$sql = "select * from product";
		$result = mysqli_query($conn, $sql);
		$users =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row); 
		}

		return $users;
	}*/

	function insertProduct($product){

		$conn = getConnection();
		$sql = "insert into products values('','{$product['name']}', '{$product['Bprice']}', '{$product['Sprice']}', '{$product['display']}', '{$product['profit']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function updateProduct($product){

		$conn = getConnection();
		$sql = "update products set name='{$product['name']}', Bprice='{$product['Bprice']}' , Sprice='{$product['Sprice']}', display='{$product['display']}', profit='{$product['profit']}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	/*function deleteProduct($id){
		$conn = getConnection();
		$sql = "delete from product where id={$id}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}*/

?>