
function editProfileValidation(){

	var username = document.getElementById('username').value;
	var name = document.getElementById('name').value;
	var password = document.getElementById('password').value;
	var phone = document.getElementById('phone').value;
	var email = document.getElementById('email').value;
	var address = document.getElementById('address').value;
	var gender = document.getElementById('gender').value;
	var department = document.getElementById('department').value;
	var blood = document.getElementById('blood').value;
	var dob = document.getElementById('dob').value;
	var submit = document.getElementById('submit').value;

//===================================================================================================

	const xhttp = new XMLHttpRequest();

	xhttp.open('POST', '../controler/edit_profile_check.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	
	xhttp.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			//document.getElementById('txtHint').innerHTML=this.responseText;
			location="../controler/edit_profile_check.php";
		}
	}
	xhttp.send('username='+username+'&name='+name+'&password='+password+'&phone='+phone+'&email='+email
		+'&address='+address+'&gender='+gender+'&department='+department+'&blood='+blood+'&dob='+dob
		+'&submit='+submit);

//=====================================================================================
}
