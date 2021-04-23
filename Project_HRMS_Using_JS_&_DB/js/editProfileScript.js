
function editProfileValidation(){

	var username = document.getElementById('username').value;
	var name = document.getElementById('name').value;
	var email = document.getElementById('email').value;
	var gender = document.getElementById('gender').value;
	var phone = document.getElementById('phone').value;
	var address = document.getElementById('address').value;
	var department = document.getElementById('department').value;
	var blood = document.getElementById('blood').value;
	var dob = document.getElementById('dob').value;

	const xhttp = new XMLHttpRequest();

	xhttp.open('post', '../controler/edit_profile_check.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('username='+username+'name='+name+'email='+email+'gender='+gender+'phone='+phone+
		'address='+address+'department='+department+'blood='+blood+'dob='+dob);

	xhttp.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){

			if(this.responseText == "success"){
				location="../controler/edit_profile_check.php";
			}
			if (this.responseText == "default"){
				location="../controler/edit_profile_check.php";
			}
		}
	}
}
