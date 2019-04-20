<?PHP
include "D:/wamp64/www/Projet_integre/entities/bon.php";
include "D:/wamp64/www/Projet_integre/core/bonC.php";




$d = date('Y-m-d H:i:s');
  $bon1=new bon($_POST['s'],$_POST['idcL'],$d);
  $bon1C=new bonC();
  $bon1C->ajouterBon($bon1);



header('Location: liv_commande.php');

//*/

?>
