
function editProfileValidation(){

	const username = document.getElementById('username').value;
	const password = document.getElementById('password').value;
	const remember = document.getElementById('remember').value;

	if(username==""){
		document.getElementById('user').innerHTML = "*Please fill the username ?";
		return false;
	}
	if(username.length>0){
		document.getElementById('user').innerHTML = "";
	}

	if(password==""){
		document.getElementById('pass').innerHTML = "*Please fill the password ?";
		return false;
	}
	if(password.length>0){
		document.getElementById('pass').innerHTML = "";
	}

	const xhttp = new XMLHttpRequest();

	xhttp.open('post', '../controler/loginCheckTest.php?username='+username+'&password='
		+password+'&remember='+remember, true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send();

	xhttp.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			document.getElementById('container').innerHTML=this.responseText;
		}
	};
}
