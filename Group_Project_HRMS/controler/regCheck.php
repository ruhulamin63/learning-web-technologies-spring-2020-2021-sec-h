<?php
	session_start();

	if(isset($_POST['sign_up_btn'])){

		$name = $_POST['name'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$confpass = $_POST['confpass'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$gender = $_POST['gender'];
		$department = $_POST['department'];
		$bg = $_POST['bg'];
		$dob = $_POST['dob'];

//=====================================================================================================

			if($username="" || $name == "" || $password == "" || $confpass == "" || $email == "" || 
				$phone == "" || $address == "" || $gender=="" || $bg="" || $dob=""|| $dob == ""){

				echo "*Null submission...";
			}else{

//=========================================================================================================

			if(isset($name)){

				$name_len=strlen($name);
	
				if( $name_len>1 && ( ($name>='A'&&$name<='Z') || ($name>='a'&&$name<='z') || 
					($name>='0'&&$name<='9') || $name=='-' || $name=='_' || $name=='.') ){
						echo "successful";
						echo "<br>";
				}else{
					echo "*Name at least 2 characters";
					echo "<br>";
				}

				//========================================================================================================

				if(isset($password)){

					$pass_len=strlen($password);

					if($pass_len>7 && ( $password=='@' || $password=='#'|| $password=='$' || 
						$password=='%' || ($password>='A'&&$password<='Z') || ($password>='a'
						&&$password<='z') || ($password>='0'&&$password<='9') || $password=='-' 
						|| $password=='_' || $password=='.') ){
							echo "successful";
							echo "<br>";
					}else{
						echo "*password at least 8 characters";
						echo "<br>";
					}
				}
				else{
					echo "*required password field?";
					echo "<br>";
				}
				}else{
					echo "*required name field ?";
					echo "<br>";
				}


//==============================================================================================================

			if( ($pass_len>7 && ($password == $confpass)) && $name_len>2 ){

				$myfile = fopen('../model/users.json', 'r');
				$data = fread($myfile, filesize('../model/users.json'));
				fclose($myfile);

				$decode = json_decode($data,true);

				$user = [	
						'username'=>$username, 
						'name'=>$name,
						'password'=>$password,
						'email'=> $email,
						'phone'=> $phone,
						'address' => $address,
						'gender'=>$gender,
						'department' => $department,
						'bg' => $bg,
						'dob'=>$dob
					];

					$decode[] = $user;
					
					$curr_encode=json_encode($decode);
					
					$myfile = fopen('../model/users.json', 'w');
					fwrite($myfile, $curr_encode);
					fclose($myfile);

					//$_SESSION['json_data']=$curr_encode;
					//print_r($myfile);
					
					header('location: login_check.php');
			}else{
				echo "*Please correct your field ?";
			}
		}

	}
?>

<!-- ======================================================================================= -->

<?php 
	$title= "Reg Page";
	include('../view/header.html');
?>
	<table border="1px" align="center" width="100%">
		<tr>	
			<td>
				<table width="100%">
					<tr>
						<td width="150px" height="50px">
							<img src="../asset/company_logo.png" width="100%" height="100%">
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
			<td height="400px">
				<table align="center">
					<tr>
						<td>
							<form method="post" action="regCheck.php">
								<fieldset>
									<legend>REGISTRATION</legend>
									<table>
										<tr>
											<td colspan="2" align="center">
												<h2 align="center">Sign Up</h2>
												<img src="../asset/your_logo.png">
												<hr>
											</td>
										</tr>
										<tr>
											<td>Username</td>
											<td>
												<input type="text" name="username" value="">
											</td>
										</tr>
										<tr>
											<td>Name</td>
											<td>
												<input type="text" name="name" value="">
											</td>
										</tr>
										<tr>
											<td>Password</td>
											<td>
												<input type="password" name="password" value="">
											</td>
										</tr>
										<tr>
											<td>Confirm Password</td>
											<td>
												<input type="password" name="confpass" value="">
											</td>
										</tr>
										<tr>
											<td>Email</td>
											<td>
												<input type="email" name="email" value="">
											</td>
										</tr>
										<tr>
											<td>Phone</td>
											<td>
												<input type="number" name="phone" value="">
											</td>
										</tr>
										<tr>
											<td>Address</td>
											<td>
												<textarea cols="22" name="address"></textarea>
											</td>
										</tr>
										<tr>
											<td>Gender</td>
											<td>
												<input type="radio" name="gender" value="Male">Male
												<input type="radio" name="gender" value="Female">Female
												<input type="radio" name="gender" value="Others">Others
											</td>
										</tr>
										<tr>
											<td>Department</td>
											<td>
												<select name="department">
													<option>--Select--</option>
													<option>CSE</option>
													<option>EEE</option>
													<option>IPE</option>
													<option>ENG</option>
													<option>BBA</option>
												</select>
											</td>
										</tr>
										<tr>
											<td>Blood Group</td>
											<td>
												<select name="bg">
													<option value="">--Select--</option>
													<option value="A+">A+</option>
													<option value="B+">B+</option>
													<option value="AB+">AB+</option>
													<option value="O+">O+</option>
													<option value="A-">A-</option>
													<option value="B-">B-</option>
													<option value="AB-">AB-</option>
													<option value="O-">O-</option>
												</select>
											</td>
										</tr>
										<tr>
											<td>Date of Birth</td>
											<td>
												<input type="date" name="dob" value="">
											</td>
										</tr>
										
										<tr align="center">
											<td colspan="2">
												<br>
												<hr>
											</td>
										</tr>
										<tr align="left">
											<td colspan="2">
												<input type="submit" name="sign_up_btn" value="Sign Up">
												<span>Already SignUp ?</span><a href="login_check.php">Login</a>
											</td>
											<!-- <td align="right">
												<a href="login_check.php">Back</a>
											</td> -->
										</tr>
									</table>
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