<?PHP
include "d:/programs/wamp64/www/Projet_integre1/entities/bon.php";
include "d:/programs/wamp64/www/Projet_integre1/core/bonC.php";




$d = date('Y-m-d H:i:s');
  $bon1=new bon($_POST['s'],$_POST['idcL'],$d);
  $bon1C=new bonC();
  $bon1C->ajouterBon($bon1);



header('Location: liv_commande.php');

//*/

?>
