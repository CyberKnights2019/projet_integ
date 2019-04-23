<?php

include 'd:/wamp64/www/Projet_integre1/core/clientC.php';

include 'd:/wamp64/www/Projet_integre1/core/loginC.php';


$cc=new clientC();

if (isset($_POST['pseudo']) and isset($_POST['motdepasse']))
{
	$resultat = $cc->recupererClientLogin($_POST['pseudo'],$cc->conn);

	$count = count($resultat);
  if($count==0) //pas de user qui a ce pseudo
  {
		  header('location: login.php?message= Username doesnt exist');

  }
  else
  {
	  $pseudo=$_POST['pseudo'];
	 foreach ($resultat as $r)
	 {
		 if($r['pseudo']==$pseudo)
		 {

			if ($r['motdepasse']!= $_POST['motdepasse'])
		 {
		 header('location: login.php?message2= Wrong password');

		 }

		 else
		 {
			  $_SESSION['pseudo'] = $pseudo;

$cc=new loginC();
$cc->loginn($cc->conn);
header("location: ProfilClient.php");


		 }

		 }
	 else // if $r['pseudo']!=$pseudo
		 {
					 header('location: login.php?message= Username doesnt exist&message2= Wrong password');

		 }


	 }

  }
}
?>
