function validation(){

			var curr_pass = document.getElementById('curr_pass').value;
			var new_pass = document.getElementById('new_pass').value;
			var re_pass = document.getElementById('re_pass').value;

//===========================Current Pass validation======================================

			if(curr_pass==""){
				document.getElementById('cp').innerHTML = "*Please fill the curr_pass field ?";
				return false;

			}
			if(curr_pass.length>0){
				document.getElementById('cp').innerHTML = "";
			}

//=============================New Pass Validataion=======================================

			if(new_pass==""){
				document.getElementById('np').innerHTML = "*Please fill the new_pass field ?";
				return false;
			}

			if(new_pass.length<=7 || new_pass.length>20){
				document.getElementById('np').innerHTML = "*Password length must be btween 8 to 20 ?";
				return false;
			}
			if(new_pass.length>0){
				document.getElementById('np').innerHTML = "";
			}

//=====================Re-Password Validation=================================

			if(re_pass==""){
				document.getElementById('rp').innerHTML = "*Please fill the re_pass field ?";
				return false;
			}

			if(new_pass!=re_pass){
				document.getElementById('rp').innerHTML = "*New pass & re pass mismatch ?";
				return false;
			}
			if(re_pass.length>0){
				document.getElementById('rp').innerHTML = "";
			}
		}