<?php

include 'D:/wamp64/www/projet_integre/core/clientC.php';

$cc=new clientC(); //cnx déjà établie dans le constructeur de la classe crudClient
//2-récupérer les informations depuis le formulaire et créer un objet  à insérer
//echo $_POST['er'];

if (isset($_POST['pseudo']) and isset($_POST['email']) and isset($_POST['motdepasse']))
{

	$resultat = $cc->afficheClientParPseudo($_POST['pseudo'],$cc->conn);

	$count = count($resultat);
  if($count==0)
  {
	   if($_POST['motdepasse']!=$_POST['motdepasse_conf'])
{
		  header('location: inscription.php?message2= Non identical passwords');

}

	  $client = new Client ($_POST['pseudo'],$_POST['email'],$_POST['motdepasse']);

  $cc->insertClient($client,$cc->conn);
header('location:ProfilClient.php');
  }


  else
  {
	  header('location: inscription.php?message=Username already exists');
  if($_POST['motdepasse']!=$_POST['motdepasse_conf'])
{
		  header('location: inscription.php?message=Username already exists&message2= Non identical passwords');

}

  }




}




?>
