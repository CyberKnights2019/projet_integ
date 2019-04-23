<?PHP

include "D:/wamp64/www/projet_integre/core/adminC.php";
$cc=new adminC();


session_start();


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
