
function viewProfileValidation(){

//===================================================================================================

	const xhttp = new XMLHttpRequest();

	xhttp.open('POST', '../controler/view_profile_check.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	
	xhttp.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			//document.getElementById('txtHint').innerHTML=this.responseText;
				location="../controler/view_profile_check.php";
		}
	}
	xhttp.send();

//=====================================================================================
}
