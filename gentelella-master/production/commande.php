<?PHP
 session_start();

include "d:/wamp64/www/Projet_integre1/core/CommandeC.php";

if (isset($_POST['IDC'])){

	if(isset($_POST['update']) and isset($_POST['etat']))
	{
		$id=$_POST['IDC'];
		$etat=$_POST['etat'];
		$Cmd1C=new CommandeC();
		$Cmd1C->updateEtat($id,$etat);

		$to ="mohamedfadhel.shel@esprit.tn";
		$subject ="Moussa Optic: Commande";
		$message="Votre commande ID ".$id.": ".$etat;
		$headers ="From: fadhel.shel@gmail.com";
		mail($to, $subject, $message,$headers);

		header("Location: tables_dynamic.php");


	}

	if(isset($_POST['Delete']))
		 {
		 	$id=$_POST['IDC'];
			$Cmd1C=new CommandeC();
			$Cmd1C->supprimerCmd($id);
			header("Location: tables_dynamic.php");

		 }


}


?>
