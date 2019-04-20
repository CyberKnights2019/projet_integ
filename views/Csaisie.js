function Nom() {
 var name = c_fname.value;
 var prenom = c_lname.value;
 var number = c_phone.value;

if(name =="" && prenom ==""){alert("nom et prenom sont  vide ")}
	else if(name =="" && prenom !=""){alert("champ nom est vide")}
	else if( prenom ==""){alert("prenom  est vide")}

if(/^[a-zA-Z]+$/.test(name))
      {
      	if(/^[a-zA-Z]+$/.test(prenom))
      	{
      		if(/^\d+$/.test(number))
      		{
      			window.location='thankyou.html';
      		}
      	}

      }
      
		
 }



