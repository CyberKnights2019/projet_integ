
<?php
include "D:/wamp64/www/projet_integre/core/clientC.php";
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
