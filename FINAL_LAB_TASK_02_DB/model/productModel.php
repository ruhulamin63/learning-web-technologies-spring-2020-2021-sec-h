<?php
	
	require_once('db.php');

	function getProductById($id){

		$conn = getConnection();

		$sql = "select * from product where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		//$row = mysqli_fetch_assoc($result);

		return $result;
	}

	function getAllProduct(){
		$conn = getConnection();
		$sql = "select * from products";
		$result = mysqli_query($conn, $sql);
		$users =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row); 
		}

		return $users;
	}

	function insertProduct($product){

		$conn = getConnection();
		$sql = "insert into products values('','{$product['name']}', '{$product['Bprice']}', '{$product['Sprice']}', '{$product['display']}', '{$product['profit']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function updateProduct($product,$id){

		$conn = getConnection();
		$sql = "update products set name='{$product['name']}', bprice='{$product['Bprice']}' , sprice='{$product['Sprice']}', display='{$product['display']}', profit='{$product['profit']}' where id={$id}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteProduct($id){
		$conn = getConnection();
		$sql = "delete from product where id={$id}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>