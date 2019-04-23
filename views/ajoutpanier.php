<?PHP
 session_start();

include "D:/wamp64/www/Projet_integre/core/panierC.php";


if (isset($_POST['qte'])){
	$qte= $_POST['qte'];
	if($qte > 0)
	{

		$id_pro=  $_SESSION['id_pro'];
		$cart=$_SESSION['Cart'];
		$ss=$_SESSION['singleShop'];

	$idpanier=0;
	$panier1=new Panier($id_pro,$qte,$idpanier);
	$panier1C=new PanierC();
  if($panier1C->CheckQte($panier1)==true)
  {
    if($panier1C->ajouterPanier($panier1)== true)
    {
      $_SESSION['qteCheck']="true";

    }
    else {echo"<script> alert('Produit est deja dans votre panier')</script> " ;}
  }
  else
  {
    $_SESSION['qteCheck']="false";
  }


		if($ss==1 and $cart==0 )
		{$link="Location: plusdetails.php?id=".$id_pro;}
		else { $link="Location: cart.php"; }

		header($link);
	}
	else { echo "Check QuanD:ty";}






}

/*$sql="SElECT  quantite From  produit where id= 52";
$db = config::getConnexion();

$req=$db->prepare($sql);
//$idpro=$panier->getId_pro();
//$qte=$panier->getQte();
//$req->bindValue(':idpro',$idpro);
$req->execute();
$qteB = $req->fetch(0);

//var_dump($qteB);
echo $qteB[0];*/

?>
