<?PHP
session_start();

include "D:/programs/wamp64/www/Projet_integre1//core/adminC.php";
$cc=new adminC();

if(!isset($_SESSION['pseudoA']))
header('location: login.php');



	if(isset($_SESSION['pseudoA']) && isset($_SESSION['mdpA']))
	{
if(isset($_POST['modify']) )

{

	$newAdmin=new admin ($_POST['id'],$_POST['pseudoA'],$_POST['emailA'],$_POST['mdpA']);
	$cc->modifierAdmin($newAdmin,$cc->conn);

	header('location:profile.php');


}
else
		{
			echo "error modifying";

		}
	}

	else
	{
		"error2";

	}





?>
