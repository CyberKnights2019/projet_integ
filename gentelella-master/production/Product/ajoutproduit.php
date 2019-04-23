<?php
include "D:/wamp64/www/Projet_integre/entities/Produitheni.php";
include "D:/wamp64/www/Projet_integre/core/ProduitService.php";
if (($_POST['nom']!="") and ($_POST['marque']!="") and ($_POST['categorie']!="") and ($_POST['quantite']!="") and ($_POST['prix']!="") and ($_POST['description']!="") )
{
if(isset($_POST['add'])) {


    $produit1 = new produit($_POST['nom'], $_POST['marque'], $_POST['categorie'], $_POST['quantite'], $_POST['prix'], $_POST['description'], file_get_contents($_FILES["imgproduit"]["tmp_name"]));
    $produitservice1 = new ProduitService();
    $produitservice1->AjouterProduit($produit1);


    header('Location: afficherproduit.php');
}
}
?>
