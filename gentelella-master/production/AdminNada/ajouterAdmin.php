<?php

include 'd:/wamp64/www/Projet_integre1/core/adminC.php';
include 'd:/wamp64/www/Projet_integre1/core/loginC.php';

$cc=new adminC(); //cnx déjà établie dans le constructeur de la classe crudClient
//2-récupérer les informations depuis le formulaire et créer un objet  à insérer
//echo $_POST['er'];

if (isset($_POST['id']) and isset($_POST['pseudoA']) and isset($_POST['emailA']) and isset($_POST['mdpA']))
{

	$resultat = $cc->afficheAdminParId($_POST['id'],$cc->conn);

	$count = count($resultat);
  if($count==0)
  {


	  $admin = new admin ($_POST['id'],$_POST['pseudoA'],$_POST['emailA'],$_POST['mdpA']);

  $cc->insertAdmin($admin,$cc->conn);
$cc=new loginC();
			$cc->loginn($cc->conn);
header('location:profile.php');
 // echo "Insertion effectuée avec succès";
  }


  else
  {
	  header('location:login.php?message=Username already exists');


  }




}




?>
