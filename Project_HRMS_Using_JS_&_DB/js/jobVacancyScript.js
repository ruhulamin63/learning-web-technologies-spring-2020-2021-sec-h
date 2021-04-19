
  function ShowAllJobVacancy(str) {
    var xhttp;

    //var name = document.getElementById('name').value;

    if (str == "") {
      document.getElementById("txtHint").innerHTML = "";
    }
    xhttp = new XMLHttpRequest();
    xhttp.open("GET", "../view/getJobVacancy.php", true);
    xhttp.send();

    xhttp.onreadystatechange = function() {

      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
   
  }