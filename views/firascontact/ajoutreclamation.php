<?php
session_start();
include "D:/programs/wamp64/www/Projet_integre1/entities/reclamation.php";
include "D:/programs/wamp64/www/Projet_integre1/core/reclamationC.php";
if(isset($_SESSION['pseudo'])) {
$name =$_SESSION['pseudo'];
        if (isset($_POST['add'])) {


            $reclamation1 = new reclamation($name, $_POST['reclamation_m'], "pas de reponse pour le moment");
            $reclamationservice1 = new reclamationC();
            $reclamationservice1->Ajouterreclamation($reclamation1);


            header('Location: afficherreclamation.php');
        }
    } else {

        header('Location: inscription.php');

}

?>