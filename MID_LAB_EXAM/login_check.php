
<?php
	session_start();

	if(isset($_POST['signin_btn'])){

		$id = $_POST['id'];
		$password = $_POST['password'];

		if($username == "" || $password == ""){
			echo "*Null submission...";
		}else{

			$myfile = fopen('data.json', 'r');
			$data = fread($myfile, filesize('data.json'));
			fclose($myfile);

			$final_data = json_decode($data);
			
//===============================================================================
			/*$user=$_SESSION['current_user'];*/
//================================================================================			

			if($id == $user['id'] && $password == $user['password']){

				$_SESSION['flag'] = true;
				
				if(isset($_POST['user'])){
					header('location: ')
				}
			}else{
				echo "*Invalid user...";
				//print_r($user);
			}
		}
	}
?>

<!-- //================================================== -->

<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<form>
		<fieldset>
			<legend>RIGIRSTRATION</legend>
			<table>
				<tr>
					<td>
						<table align="center" >
							<tr>
								<td>
									<fieldset>
										<table>
											<tr>
												<td>
													User Id<br>
												</td>
												<td>
													<input type="number" name="id" value="">
												</td>
											</tr>
											<tr>
												<td>
													Password
												</td>
												<td>
													<input type="password" name="password" value="">
												</td>
											</tr>
											<tr align="left">
												<td colspan="2">
													<hr>
													<input type="submit" name="signin_btn" value="Sign In">
													<a href="regCheck.php">Registration</a>
												</td>
											</tr>
										</table>
									</fieldset>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>