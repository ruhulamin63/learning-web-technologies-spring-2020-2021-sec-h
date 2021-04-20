<?php
	require_once('../model/fixingInterviewModel.php');

	echo "<table border=1 align=center>
			<tr>
				<td align=center colspan=11>
					<h2>Fixing Interview Approval</h2>
				</td>
			</tr>
			<tr>
				<th>SL</th>
				<th>Candidate</th>
				<th>Vacancy</th>
				<th>Time</th>
				<th>Date</th>
				<th>Status</th>
				<th>Comment</th>
				<th colspan=2>ACTION</th>
			</tr>";

	$result = FixingInterviewAllData();

	//print_r($result);

	//if(count($result)>0){
		foreach ($result as $key => $value) {

			echo "<tr>
					<td>{$value['id']}</td>
					<td>{$value['candidate']}</td>
					<td>{$value['vacancy']}</td>
					<td>{$value['time']}</td>
					<td>{$value['date']}</td>
					<td>{$value['status']}</td>
					<td>{$value['comment']}</td>
					<td>
						<a href='../controler/fixing_interview_edit.php?id=$value[id]'>Update</a>
					</td>
					<td>
						<a href='../controler/fixing_interview_approval_delete.php?id=$value[id]'>Delete</a>
					</td>
				</tr>";
		}
	echo "</table>";
	//}
?>