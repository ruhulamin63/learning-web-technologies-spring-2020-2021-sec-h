function imageValidation(){

	var img = document.forms['myform']['choose_file'];
	var validExt = ['jpeg', 'png', 'jpg'];
	
	if(img.value==""){
		alert('No Image Select');
		return false;
	}else{

		var pos_of_dot = img.value.lastIndexOf('.')+1;
		var img_ext = img.value.substring(pos_of_dot);

		//console.log(img_ext);

		var result = validExt.includes(img_ext);

		if(result==false){
			alert('Selected files is Not an Image');
			return false;
		}else{
			
			if(parseFloat(img.files[0].size/(1024*1024))>=3){
				alert('File size must be smaller then 3 MB. Current image file size : ' + parseFloat(img.files[0].size/(1024*1024)) );
				return false;
			}
		}
	}
}