<?php
include "C:/wamp64/www/Projet_integre1/entities/livreur.php";
include "C:/wamp64/www/Projet_integre1/core/livreurC.php";
$livreurrC = new livreurC();
if (isset($_POST['modifier']))  {
                $livreur=new livreur($_POST['cinL'],$_POST['nomL'],$_POST['prenomL'],$_POST['telL'],$_POST['mailL'],$_POST['adresseL'],"");
                $livreurrC->modifierLivreur($livreur,$_POST['cin_ini']);

if(isset($_FILES['imgL']))
{

                //Pour l'ajout d'une image
                  $link=mysqli_connect("127.0.0.1","root","","projet");


                	$imageName = mysqli_real_escape_string($link,$_FILES["imgL"]["name"]);
                	$imageData = mysqli_real_escape_string($link,file_get_contents($_FILES["imgL"]["tmp_name"]));
                	$imageType = mysqli_real_escape_string($link,$_FILES["imgL"]["type"]);
                $cin=$_POST['cinL'];
                	if(substr($imageType,0,5) == "image")
                	{
                		mysqli_query($link,"UPDATE livreur SET img = '$imageData' WHERE cin=$cin ");
                		echo "Image !";

                	}
                	else
                	{
                		echo "Fichier non image";
                	}
                //fin image
}



              echo "Modiification avec succés !";
header('Location: Modifier_Livreur.php?cin='.$_POST['cinL'].'');

}

            ?>
