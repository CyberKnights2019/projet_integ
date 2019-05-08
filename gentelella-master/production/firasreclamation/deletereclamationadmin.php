<?PHP
include_once "D:/programs/wamp64/www/Projet_integre1/core/reclamationC.php";
$reclamationservice1 = new reclamationC();

if (isset($_POST["idd"])){

    $reclamationservice1->supprimerreclamation($_POST["idd"]);
    header('Location: afficherreclamationadmin.php');
}

?>

