<?php
	session_start();

	if(!isset($_SESSION['flag'])){
		header('location: ../controler/login_check.php');

	}else{

		$user=$_SESSION['current_user'];
		$username=$user['username'];

		if(isset($_POST['submit_pic'])){

			$file_info = $_FILES['choose_file'];
			//echo $file_info['tmp_name'];
			
			$file = $file_info['name'];
			$path = '../asset/upload/'.$file;
			$filename = $file_info['tmp_name'];

			if(move_uploaded_file($filename, $path)){

				$insert=[
							'username'=>$username,
							'photos'=>$path

						];

				require_once('../model/imageModel.php');

				$result = insertImage($insert);

				if($result){
					?>
						<script type="text/javascript">
							alert('Inserted image in database');
						</script>
					<?php

				}else{
					?>
						<script type="text/javascript">
							alert('Error database connection');
						</script>
					<?php
				}

			}else{
				?>
					<script type="text/javascript">
						alert('Error');
					</script>
				<?php
			}
			header('location: ../controler/view_profile_check.php');
		}
	}
?>

<!-- ========================================================= -->

<?php 
	$title= "Picture Change";
	include('header.html');
?>

	<table border="1px" align="center" width="100%">
		<tr>	
			<td>
				<table width="100%">
					<tr>
						<td width="200px" height="60px"><img src="../asset/company_logo.png" width="100%" height="100%"></td>
						<td align="right" >
							Logged in as
							<a href="../controler/view_profile_check.php"> 
								<?php
									echo $_SESSION['current_user']['name'];
								?>
							</a> |
							<a href="../controler/logout_check.php"> Logout </a> 
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>

	<table border="1px" align="center" width="100%">
		<tr>
			<td width="200px" height="425px"><h2>Main Menu</h2>
			<hr>

			<details>
					<summary><b>Dashboard</b></summary>
						<details>
							<summary><a href="dashboard.php">Dashboard</a></summary>	
						</details>
				</details>

				<details>
					<summary><b>Portal</b></summary>
						<details>
							<summary><a href="create_leave_request.php">Create Leave Request</a></summary>
						</details>
						<details>
							<summary><a href="create_travel_request.php">Create Travel Request</a></summary>
						</details>
						<details>
							<summary><a href="fixing_interview_approval.php">Fixing Interview</a></summary>
						</details>
				</details>

				<details>
					<summary><b>Screening & Approval</b></summary>
						<details>
							<summary><a href="leave_approval.php">Leave Approval</a></summary>
						</details>
						<details>
							<summary><a href="travel_approval.php">Travel Approval</a></summary>
						</details>
						<details>
							<summary><a href="performance_approval.php">Performance Overview</a></summary>
						</details>
				</details>

				<details>
					<summary><b>Requirement</b></summary>
						<details>
							<summary><a href="add_job.php">Add Job Titles</a></summary>
						</details>
						<details>
							<summary><a href="view_job.php">View Job Titles</a></summary>
						</details>
						<details>
							<summary><a href="add_job_vacancy.php">Add Job Vacancy</a></summary>
						</details>
						<details>
							<summary><a href="view_job_vacancy.php">View Job Vacancy</a></summary>
						</details>
						<details>
							<summary><a href="online_app.php">Online Application</a></summary>
						</details>
						<details>
							<summary><a href="fixing_interview.php">Fixing Interview Online</a></summary>
						</details>
				</details>

				<details>
					<summary><b>Setting</b></summary>
						<details>
							<summary><a href="../controler/view_profile_check.php">View Profile</a></summary>
						</details>
						<details>
							<summary><a href="../controler/edit_profile_check.php">Edit Profile</a></summary>
						</details>
						<details>
							<summary><a href="../controler/change_pass_check.php">Change Password</a></summary>
						</details>
						<details>
							<summary><a href="../controler/logout_check.php">Logout</a></summary>
						</details>
				</details>	
			</td>

			
			<td>
				<form name="myform" method="post" action="profile_pic.php" onsubmit="return imageValidation()" enctype="multipart/form-data">
					<fieldset>
						<legend>PROFILE</legend>
						<table>
							<tr>
								<td>
									<img src="../asset/user.png" width="100px" height="100px"><br>
									<input type="file" name="choose_file" value="">
								</td>
							</tr>
						</table>
						<hr>
						<input type="submit" name="submit_pic" value="Upload">
					</fieldset>
				</form>
			</td>
		</tr>
		<tr height="50px">
			<td colspan="2" align="center">
				copyright@2021
			</td> 
		</tr>
	</table>

<!-- ====================================Start JS Code======================================= -->

	<script type="text/javascript">

		function imageValidation(){

			var img = document.forms['myform']['choose_file'];
			var validExt = ['jpeg', 'png', 'jpg'];
			
			if(img.value==""){
				alert('No Image Select');
				return false;
			}else{

				var pos_of_dot = img.value.lastIndexOf('.')+1;
				var img_ext = img.value.substring(pos_of_dot);

				//console.log(img_ext);

				var result = validExt.includes(img_ext);

				if(result==false){
					alert('Selected files is Not an Image');
					return false;
				}else{
					if(parseFloat(img.files[0].size/(1024*1024))>=3){
						alert('File size must be smaller then 5 MB. Current image file size : ' + parseFloat(img.files[0].size/(1024*1024)) );
						return false;
					}
				}
			}
		}
	</script>

<!-- ====================================End JS Code======================================= -->

</body>
</html>