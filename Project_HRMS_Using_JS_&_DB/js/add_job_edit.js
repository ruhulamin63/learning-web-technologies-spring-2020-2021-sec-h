 

function addJobEditValidation(){

	var addjob = document.getElementById('addjob').value;
	var submit = document.getElementById('submit').value;

//===================================================================================================

	const xhttp = new XMLHttpRequest();

	xhttp.open('POST', '../controler/add_job_edit.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	
	xhttp.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			//document.getElementById('txtHint').innerHTML=this.responseText;
				location="../controler/add_job_edit.php";
		}
	}
	xhttp.send('addjob='+addjob+'&submit='+submit);

//=====================================================================================
}
