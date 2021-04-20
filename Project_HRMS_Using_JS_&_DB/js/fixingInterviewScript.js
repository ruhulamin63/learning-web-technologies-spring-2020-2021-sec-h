function viewAllFixingData() {

  	//var name = document.getElementById('name').value;

    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", "../tableInfo/fixing_interview_table.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send();

    xhttp.onreadystatechange = function() {

      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    }
  }
  