<?PHP
include "d:/programs/wamp64/www/Projet_integre1/entities/livreur.php";
include "d:/programs/wamp64/www/Projet_integre1/core/livreurC.php";


if (($_POST['cinL']!="") and ($_POST['nomL']!="") and ($_POST['prenomL']!="") and ($_POST['telL']!="") and ($_POST['adresseL']!="") and ($_POST['mailL']!="") )
{

    if (strlen($_POST['cinL'])!=8)
        echo "CIN invalide";
    else
    {

        $livreur1=new livreur($_POST['cinL'],$_POST['nomL'],$_POST['prenomL'],$_POST['telL'],$_POST['mailL'],$_POST['adresseL'],"");
        $livreur1C=new livreurC();
        $livreur1C->ajouterLivreur($livreur1);

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

        header('Location: Afficher_Livreur.php');

    }
}
//*/

?>
