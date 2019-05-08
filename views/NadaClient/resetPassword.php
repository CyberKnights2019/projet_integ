<?php

include 'D:/programs/wamp64/www/Projet_integre1/core/clientC.php';

$cc=new clientC(); //cnx déjà établie dans le constructeur de la classe crudClient
//2-récupérer les informations depuis le formulaire et créer un objet  à insérer
//echo $_POST['er'];

if (isset($_POST['ConfirmationCode']) and isset($_POST['motdepasse']) and isset($_POST['motdepasse_conf']))
{
	$resultat = $cc->TrouverClientParCode($_POST['ConfirmationCode'],$cc->conn);

	$count = count($resultat);
  if($count==0)
  {

     		 header('location: RetrievePassword.php?message= Wrong code');

  }
  else
  {
	  if(($_POST['motdepasse'])===($_POST['motdepasse_conf']))
	  {
		  foreach ($resultat as $r)
	 {
		$cc->modifierClientPassword($r['pseudo'],$_POST['motdepasse'],$cc->conn);
		header('Location:account.php');
	 }
	  }
	  else
	  {
		       		 header('location: RetrievePassword.php?message2= Passwords dont match');

	  }



  }
}
?>
