
<?php

include "D:/programs/wamp64/www/Projet_integre1/core/adminC.php";

include "D:/programs/wamp64/www/Projet_integre1/core/loginC.php";


$cc=new adminC();

if (isset($_POST['pseudoA']) and isset($_POST['mdpA']))
{
	$resultat = $cc->recupererAdminLogin($_POST['pseudoA'],$cc->conn);

	$count = count($resultat);
  if($count==0) //pas de user qui a ce pseudo
  {
		  header('location: login.php?message= Username doesnt exist');

  }
  else
  {
	  $pseudoA=$_POST['pseudoA'];
	 foreach ($resultat as $r)
	 {
		 if($r['pseudoA']==$pseudoA)
		 {

			if ($r['mdpA']=== $_POST['mdpA'])
		 {

			$cc=new loginC();
			$cc->loginn($cc->conn);

		 }

		 else
		 {
		 header('location: login.php?message2= Wrong password');

		 }

		 }
		 else // if $r['pseudo']!=$pseudo
		 {
			 if ($r['mdpA']!= $_POST['mdpA'])
		 {
		 header('location: login.php?message= Username doesnt exist&message2= Wrong password');

		 }

		 }


	 }

  }
}
?>
