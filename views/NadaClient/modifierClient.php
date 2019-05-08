<?PHP

include 'D:/programs/wamp64/www/Projet_integre1/core/clientC.php';
$cc=new clientC();


session_start();


	if(isset($_SESSION['email']) || isset($_SESSION['motdepasse']))
	{
if(isset($_POST['modify']) )

{

	$newClient=new Client ($_POST['pseudo'],$_POST['email'],$_POST['motdepasse']);
	$cc->modifierClient($newClient,$cc->conn);

	header('location:ProfilClient.php?modify=done');


}
else
		{
			echo "error modifying";

			header('location:ProfilClient.php');
		}
	}

	else
	{
		"error2";

		header('location:ProfilClient.php');
	}

header('location:ProfilClient.php');



?>
