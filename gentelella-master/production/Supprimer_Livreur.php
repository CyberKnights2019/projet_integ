<?PHP
include "D:/wamp64/www/Projet_integre/core/livreurC.php";
$livreurC=new livreurC();
if (isset($_POST["cinL"])){
	$livreurC->supprimerLivreur($_POST["cinL"]);
	header('Location: Afficher_Livreur.php');
}

?>
