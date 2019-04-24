<?PHP
include "D:/programs/wamp64/www/Projet_integre1/core/ProduitService.php";
$produitservice1 = new ProduitService();

if (isset($_POST["idd"])){

    $produitservice1->supprimerproduit($_POST["idd"]);
    header('Location: afficherproduit.php');
}

?>
