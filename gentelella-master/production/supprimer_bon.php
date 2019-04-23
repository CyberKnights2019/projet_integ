<?PHP
include "C:/wamp64/www/Projet_integre1/core/bonC.php";
$bonC=new bonC();
if (isset($_GET['cin'])){
	$bonC->supprimerBon($_GET['cin']);
	header('Location: liv_commande.php');
}

?>
