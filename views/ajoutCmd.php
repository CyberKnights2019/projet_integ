<?PHP
 session_start();

include "D:/wamp64/www/Projet_integre/core/CommandeC.php";


if (isset($_POST['livraison']) and isset($_POST['Payment']) ){

	$liv=$_POST['livraison'];
	$pay=$_POST['Payment'];

	if($_POST['livraison']=="Boutique")
	{
	$zone="Boutique";
	$adresse="Boutique";
	}
	else
	{
	$zone=$_POST['zoneCH'];
	$adresse=$_POST['adresseCheck'];
	}


	$prix_t= $_SESSION['total'];

	$Cmd1=new Commande(18,6,$prix_t,"f",$liv,$pay,$zone,$adresse);
	$Cmd1C=new CommandeC();
	$Cmd1C->ajouterCommande($Cmd1);

		$to ="mohamedfadhel.shel@esprit.tn";
		$subject ="Moussa Optic: Commande";
		$message="Votre commande est en cours de traitement, Merci";
		$headers ="From: fadhel.shel@gmail.com";

		mail($to, $subject, $message,$headers);

	header("Location: thankyou.php");



}

?>
