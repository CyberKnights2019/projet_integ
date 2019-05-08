<?PHP
include_once "D:/programs/wamp64/www/Projet_integre1/core/avisC.php";
$avisservice1 = new avisC();

if (isset($_POST["idd"])){

    $avisservice1->supprimeravis($_POST["idd"]);
    header('Location: afficheravis.php');
}

?>

