
<?php 
//require_once('../model/db.php');
require_once('../model/JobVacancyModel.php');

	if(isset($_POST['search_btn'])){

?>
	<table border="1px" align="center">
	<tr>
		<th>SL</th>
		<th>Job Title</th>
		<th>Vacancy Name</th>
		<th>Hiring Manager</th>
		<th>Job Location</th>
		<th>Number Of Position</th>
		<th>Job Description</th>
		<th colspan="2">Action</th>
	</tr>
		<?php
		
			$name=$_POST['name'];
			$result=getUserAddJobSearchById($name);

			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_array($result)){
					echo "
						<tr>
							<td>{$row['id']}</td>
							<td>{$row['vacancytitle']}</td>
							<td>{$row['name']}</td>
							<td>{$row['manager']}</td>
							<td>{$row['location']}</td>
							<td>{$row['position']}</td>
							<td>{$row['description']}</td>
							<td>
								<a href='../controler/job_vacancy_edit.php?id=$row[id]'>Update</a>
							</td>
							<td>
								<a href='../controler/view_job_vacancy_delete.php?id=$row[id]'>Delete</a>
							</td>
						</tr>
					";
				}
			}else{
				echo "No data available";
			}
		?>
	</table>
<?php
	}
?>