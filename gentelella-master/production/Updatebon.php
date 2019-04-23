<?PHP
include "D:/wamp64/www/Projet_integre/core/bonC.php";
$bonC=new bonC();

	$bonC->modifierBon($_POST['idcL'],$_POST["liste"]);
	header('Location: liv_commande.php');


?>
