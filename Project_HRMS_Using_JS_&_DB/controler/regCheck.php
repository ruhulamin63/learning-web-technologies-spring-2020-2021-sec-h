<?php
	session_start();

	require_once('../model/UserModel.php');
	require_once('../model/usernameModel.php');

//================================================================

	if(isset($_POST['sign_up_btn'])){
		
		$username = $_POST['username'];
		$name = $_POST['name'];
		$password = $_POST['password'];
		$confpass = $_POST['confpass'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$department = $_POST['department'];
		$blood = $_POST['blood'];
		$dob = $_POST['dob'];

//=========================================================================
		
		$count = UserNameQuery($username);

		//print_r($count);

		if($count>0){
			?>
				<script type="text/javascript">
					alert('Username already exists ?');
				</script>
			<?php
		}else{

			$user = [	
					'username'=>$_POST['username'], 
					'name'=>$name,
					'password'=>$password,
					'email'=> $email,
					'phone'=> $phone,
					'address'=>$address,
					'gender'=>$_POST['gender'],
					'department'=>$department,
					'blood'=>$_POST['blood'],
					'dob'=> $_POST['dob']
				];
				
			$status = insertUser($user);

			if($status){
				
				?>
					<script type="text/javascript">
						alert("Inserted data in database");
					</script>
				<?php
					header('location: login_check.php');
				
			}else{
				?>
					<script type="text/javascript">
						alert("*Not inserted data");
					</script>
				<?php
			}
		}
	}
?>

<!-- ======================================================================================= -->

<?php 
	$title= "Registration";
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
							<!-- <?php //echo htmlentities($_SERVER['PHP_SELF']); ?> -->
							<form method="post" action="regCheck.php" onsubmit="return validation()">
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
												<input type="text" name="username" id="username" value="">
											</td>
										</tr>
										<tr>
											<td colspan="2">
												<span id="un" class="user-error"></span>
											</td>
										</tr>

										<tr>
											<td>Name</td>
											<td>
												<input type="text" name="name" id="name" value="">
											</td>
										</tr>
										<tr>
											<td colspan="2">
												<span id="n" class="user-error"></span>
											</td>
										</tr>

										<tr>
											<td>Password</td>
											<td>
												<input type="password" name="password" id="password" value="">
											</td>
										</tr>
										<tr>
											<td colspan="2">
												<span id="p" class="user-error"></span>
											</td>
										</tr>

										<tr>
											<td>Confirm Password</td>
											<td>
												<input type="password" name="confpass" id="confpass" value="">
											</td>
										</tr>
										<tr>
											<td colspan="2">
												<span id="cp" class="user-error"></span>
											</td>
										</tr>

										<tr>
											<td>Phone</td>
											<td>
												<input type="text" name="phone" value="" id="phone">
											</td>
										</tr>
										<tr>
											<td colspan="2">
												<span id="pn" class="user-error"></span>
											</td>
										</tr>

										<tr>
											<td>Email</td>
											<td>
												<input type="email" name="email" id="email" value="">
											</td>
										</tr>
										<tr>
											<td colspan="2">
												<span id="e" class="user-error"></span>
											</td>
										</tr>

										<tr>
											<td>Address</td>
											<td>
												<textarea cols="22" name="address" id="address"></textarea>
											</td>
										</tr>
										<tr>
											<td colspan="2">
												<span id="a" class="user-error"></span>
											</td>
										</tr>

										<tr>
											<td>Gender</td>
											<td>
												<input type="radio" name="gender" id="gender" value="Male">Male
												<input type="radio" name="gender" id="gender" value="Female">Female
												<input type="radio" name="gender" id="gender" value="Others">Others
											</td>
										</tr>
										<tr>
											<td colspan="2">
												<span id="g" class="user-error"></span>
											</td>
										</tr>

										<tr>
											<td>Department</td>
											<td>
												<select name="department" id="department">
													<option value="">--Select--</option>
													<option value="CSE">CSE</option>
													<option value="EEE">EEE</option>
													<option value="IPE">IPE</option>
													<option value="ENG">ENG</option>
													<option value="BBA">BBA</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan="2">
												<span id="dept" class="user-error"></span>
											</td>
										</tr>

										<tr>
											<td>Blood Group</td>
											<td>
												<select name="blood" id="blood">
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
											<td colspan="2">
												<span id="bg" class="user-error"></span>
											</td>
										</tr>

										<tr>
											<td>Date of Birth</td>
											<td>
												<input type="date" name="dob" id="dob" value="">
											</td>
										</tr>
										<tr>
											<td colspan="2">
												<span id="d" class="user-error"></span>
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

<!-- ===============================Start Java Script Code===================================== -->

	<script>
				
		function validation(){

			var username = document.getElementById('username').value;
			var name = document.getElementById('name').value;
			var password = document.getElementById('password').value;
			var confpass = document.getElementById('confpass').value;
			var phone = document.getElementById('phone').value;
			var email = document.getElementById('email').value;
			var address = document.getElementById('address').value;
			var gender = document.getElementById('gender').value;
			var department = document.getElementById('department').value;
			var blood = document.getElementById('blood').value;
			var dob = document.getElementById('dob').value;

//===========================Username validation======================================

			if(username==""){
				document.getElementById('un').innerHTML = "*Please fill the username field ?";
				return false;

			}
			if(username.length<2 || username.length>15){
				document.getElementById('un').innerHTML = "*Username must be btween 2 to 15 ?";
				return false;
			}
			if(username.length>0){
				document.getElementById('un').innerHTML="";
			}
			

//=============================Name Validataion=======================================

			if(name==""){
				document.getElementById('n').innerHTML = "*Please fill the name field ?";
				return false;
			}

			if(name.length<4 || name.length>20){
				document.getElementById('n').innerHTML = "*At least 4 to 20 characters ?";
				return false;
			}

			if(!isNaN(name)){
				document.getElementById('n').innerHTML = "*Only characters are allowed ?";
				return false;
			}

			if(!(name[0]>='A'&&name[0]<='Z') ){
				document.getElementById('n').innerHTML = "*First letter must be capital ?";
				return false;
			}
			if(name.length>0){
				document.getElementById('n').innerHTML="";
			}

//=====================Password Validation=================================

			if(password==""){
				document.getElementById('p').innerHTML = "*Please fill the password field ?";
				return false;
			}

			if(password.length<=7 || password.length>20){
				document.getElementById('p').innerHTML = "*Password length must be btween 8 to 20 ?";
				return false;
			}
			if(password.length>0){
				document.getElementById('p').innerHTML="";
			}
//============================================================================================
			if(confpass==""){
				document.getElementById('cp').innerHTML = "*Please fill the confpass field ?";
				return false;
			}
			if(confpass.length>0){
				document.getElementById('cp').innerHTML="";
			}

			if(password != confpass){
				document.getElementById('cp').innerHTML = "*Confirm password are not matching ?";
				return false;
			}

//=====================Phone Validation=========================================

			if(phone==""){
				document.getElementById('pn').innerHTML = "*Please fill the mobile no field ?";
				return false;
			}

			if(isNaN(phone)){
				document.getElementById('pn').innerHTML = "*Must be write numbers ?";
				return false;
			}

			if(phone.length != 11){
				document.getElementById('pn').innerHTML = "*11 digits must be write ?";
				return false;
			}
			if(phone.length>0){
				document.getElementById('pn').innerHTML="";
			}

//==============================Email Validation=========================================

			if(email==""){
				document.getElementById('e').innerHTML = "*Please fill the email field ?";
				return false;
			}

			if(email.indexOf('@') <=0 ){
				document.getElementById('e').innerHTML = "*@ Invalid position  ?";
				return false;
			}

			if(email.charAt(email.length-4) != '.' ){
				document.getElementById('e').innerHTML = "*dot(.) Invalid position  ?";
				return false;
			}
			if(email.length>0){
				document.getElementById('e').innerHTML="";
			}

//==================================Address Validation==========================================

			if(address==""){
				document.getElementById('a').innerHTML = "*Please fill the address field ?";
				return false;
			}
			if(address.length>0){
				document.getElementById('a').innerHTML="";
			}

//==================================Gender Validation==========================================

			if(gender==""){
				document.getElementById('g').innerHTML = "* Please fill the gender field ?";
				return false;
			}

//==================================Department Validation==========================================

			if(department==""){
				document.getElementById('dept').innerHTML = "* Please fill the department field ?";
				return false;
			}
			if(department.length>0){
				document.getElementById('dept').innerHTML="";
			}

//==================================Blood Validation==========================================

			if(blood==""){
				document.getElementById('bg').innerHTML = "* Please fill the blood field ?";
				return false;
			}
			if(blood.length>0){
				document.getElementById('bg').innerHTML="";
			}

//==================================DOB Validation==========================================

			if(dob==""){
				document.getElementById('d').innerHTML = "* Please fill the dob field ?";
				return false;
			}
			if(dob.length>0){
				document.getElementById('d').innerHTML="";
			}
		}
	</script>
<!-- ==============================End JS Code================================================== -->
<?php 
	include('../view/footer.html'); 
?>