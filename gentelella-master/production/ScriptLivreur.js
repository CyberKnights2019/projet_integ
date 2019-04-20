function validateForm() {
  var cin = document.forms["formL"]["cinL"].value;
  var nom = document.forms["formL"]["nomL"].value;
  var prenom = document.forms["formL"]["prenomL"].value;
  var tel = document.forms["formL"]["telL"].value;
  var mail = document.forms["formL"]["mailL"].value;
  var adresse = document.forms["formL"]["adresseL"].value;


  var ok = true;
  if (cin.length != 8) {
    ok = false;
    document.getElementById("cinX").style.display = "block";
  } else {
    document.getElementById("cinX").style.display = "none";
  }


  if (nom.length < 3) {
    ok = false;
    document.getElementById("nomX").style.display = "block";
  } else {
    document.getElementById("nomX").style.display = "none";
  }
  if (prenom.length < 3) {
    ok = false;
    document.getElementById("prenomX").style.display = "block";
  } else {
    document.getElementById("prenomX").style.display = "none";
  }

  if (tel.length < 8) {
    ok = false;
    document.getElementById("telX").style.display = "block";
  } else {
    document.getElementById("telX").style.display = "none";
  }

  if (!validateEmail(mail)) {
    ok = false;
    document.getElementById("mailX").style.display = "block";
  } else {
    document.getElementById("mailX").style.display = "none";
  }

  var fileInput = document.getElementById('file');
  var filePath = fileInput.value;
if(fileInput.files.length!=0)
{
  var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
  if (!allowedExtensions.exec(filePath)) {
    ok = false;
    fileInput.value = '';
    document.getElementById("imageX").style.display = "block";
  } else {
    document.getElementById("imageX").style.display = "none";
  }
}




  return ok;
}

function validateEmail(email) {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}


function isNumberKey(evt) {
  var charCode = (evt.which) ? evt.which : event.keyCode
  if (charCode > 31 && (charCode < 48 || charCode > 57))
    return false;

  return true;
}


function lettersOnly(evt) {
  evt = (evt) ? evt : event;
  var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode :
    ((evt.which) ? evt.which : 0));
  if (charCode > 32 && (charCode < 65 || charCode > 90) &&
    (charCode < 97 || charCode > 122)) {
    return false;
  }
  return true;
}





function adjust_textarea(h) {
  h.style.height = "20px";
  h.style.height = (h.scrollHeight) + "px";
}



function show(elem) {
  elem.style.display = "block";
}

function hide(elem) {
  elem.style.display = "";
}
