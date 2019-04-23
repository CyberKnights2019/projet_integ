
<?php
include "C:/wamp64/www/Projet_integre1/core/clientC.php";
$clientC=new clientC();
if(isset($_POST['supprimer']))
{
if (isset($_POST['pseudo']))
{
	$clientC->supprimerClient($_POST['pseudo'],$clientC->conn);
	header('Location: ClientDisplay.php');
}
}
else
{echo "err";}

?>
