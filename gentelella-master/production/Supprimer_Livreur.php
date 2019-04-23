<?PHP
include "C:/wamp64/www/Projet_integre1/core/livreurC.php";
$livreurC=new livreurC();
if (isset($_POST["cinL"])){
	$livreurC->supprimerLivreur($_POST["cinL"]);
	header('Location: Afficher_Livreur.php');
}

?>
