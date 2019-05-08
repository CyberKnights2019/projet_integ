<?php
session_start();
include "D:/programs/wamp64/www/Projet_integre1/entities/avis.php";
include "D:/programs/wamp64/www/Projet_integre1/core/avisC.php";
if(isset($_SESSION['pseudo'])) {
$name =$_SESSION['pseudo'];
        if (isset($_POST['add'])) {


            $avis1 = new avis($name, $_POST['avis_m']);
            $avisservice1 = new avisC();
            $avisservice1->Ajouteravis($avis1);


            header('Location: afficheravis.php');
        }
    } else {

        header('Location: inscription.php');

}

?>