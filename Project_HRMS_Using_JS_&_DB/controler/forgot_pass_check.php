<?php

	session_start();

	if(isset($_POST['forgot_pass_btn'])){

		$email = $_POST['curr_email'];

		if($email == ""){
			echo "*Null Submission...";
		}else{
			$user = $_SESSION['current_user'];

			if($email == $user['email']){
				header('location: dashboard.php');
			}else{
				echo "*Invalid user...";
				//print_r($user);
			}
		}
	}
?>

<!-- ========================================================================================= -->

<?php 
	$title= "Forgot Pass";
	include('../view/header.html');
?>
</head>
<body>

	<table border="1px" align="center" width="100%">
		<tr>	
			<td>
				<table width="100%">
					<tr>
						<td width="150px" height="50px">
							<img src="../asset/company_logo.png" alt="main_logo" width="100%" height="100%">
						</td>
						<td align="right"> 
							<a href="../view/home.html">Home</a> |
							<a href="login_check.php">Login</a> |
							<a href="regCheck.php">Registration</a> 
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>

	<table border="1px" align="center" width="100%">
		<tr>
			<td width="200px" height="425px">
				<table align="center">
					<tr>
						<td>
							<form method="post" action="forgot_pass_check.php">
								<fieldset>
									<legend>Check Email</legend>
									<table>
										<tr>
											<td>Enter Email</td>
											<td>
												<input type="text" name="curr_email" value="">
											</td>
										</tr>
									</table>
									<hr>
									<input type="submit" name="forgot_pass_btn" value="Submit">
									<!-- <span><a href="#">Back</a></span> -->
								</fieldset>
							</form>
						</td>
					</tr>
				</table>
			</td>
		</tr>
<?php 
	include('../view/footer.html'); 
?>