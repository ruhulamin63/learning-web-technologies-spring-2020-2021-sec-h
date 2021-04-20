
<?php
	require_once('../model/JobVacancyModel.php');

	$result = getAllAddJobVacancyData();

	//print_r($result);
	echo "<table border=1 align=center>
					<tr>
						<th>SL</th>
						<th>Job Title</th>
						<th>Vacancy Name</th>
						<th>Hiring Manager</th>
						<th>Job Location</th>
						<th>Number Of Position</th>
						<th>Job Description</th>
						<th colspan=2>Action</th>
					</tr>";

			foreach ($result as $key => $value) {
				echo "<tr>
						<td>{$value['id']}</td>
						<td>{$value['vacancytitle']}</td>
						<td>{$value['name']}</td>
						<td>{$value['manager']}</td>
						<td>{$value['location']}</td>
						<td>{$value['position']}</td>
						<td>{$value['description']}</td>
						<td>
							<a href='../controler/job_vacancy_edit.php?id=$value[id]'>Update</a>
						</td>
						<td>
							<a href='../controler/view_job_vacancy_delete.php?id=$value[id]'>Delete</a>
						</td>
					</tr>";
			}
	echo "</table>";
?>