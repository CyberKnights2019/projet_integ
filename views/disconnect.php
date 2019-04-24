<?php
session_start();
include "D:/programs/wamp64/www/Projet_integre1/core/panierC.php";

unset($_SESSION['pseudo']);
$p= new PanierC();
$p->supprimerPanierTout();
header("Location: index.php");
echo $_SESSION['pseudo'];
 ?>
