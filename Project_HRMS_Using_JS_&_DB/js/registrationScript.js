
function regCheckValidation(){

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
	var usertype = document.getElementById('usertype').value;
	


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

//==============================User Type Validation=================================================

	if(usertype==""){
		document.getElementById('ut').innerHTML = "* Please fill the dob field ?";
		return false;
	}
	if(usertype.length>0){
		document.getElementById('ut').innerHTML="";
	}

//===================================================================================================

	const xhttp = new XMLHttpRequest();

	xhttp.open('post', '../controler/regCheckTest.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	
	xhttp.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){

			if(this.responseText == "success"){
				location="../controler/login_check.php";
			}
		}
	}
	xhttp.send('username='+username+'&name='+name+'&password='+password+'&confpass='+confpass+
		'&phone='+phone+'&email='+email+'&address='+address+'&department='+department+
		'&blood'+blood+'&dob='+dob+'&usertype='+usertype);

//=====================================================================================

}