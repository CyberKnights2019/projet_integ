<?php
include "D:/programs/wamp64/www/Projet_integre1/entities/CategorieHeni.php";
include "D:/programs/wamp64/www/Projet_integre1/core/CategorieService.php";
if (($_POST['nom']!="") )
{
if(isset($_POST['add'])) {


    $categorie1 = new CategorieHeni($_POST['nom']);
    $categorieservice1 = new CategorieService();
    $categorieservice1->AjouterCategorie($categorie1);


    header('Location: affichercategorie.php');
}
}
?>