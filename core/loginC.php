
<?php
//backoffice
//include "../entities/config.php";
 session_start();

class loginC 
{
	
	public $conn;
		
	
	function __construct()
	{
		$c=new config();
		$this->conn=$c->getConnexion();
	}
	
	function loginn($conn)
	{
	if(isset($_POST['pseudoA']) && isset($_POST['mdpA']))
	{
		$pseudoA = ($_POST['pseudoA']);
		$mdpA = ($_POST['mdpA']);
		
	$requete = "SELECT * FROM admin WHERE pseudoA = '$pseudoA' AND mdpA = '$mdpA'";
	
		$resultat = $conn->query($requete);
		$result=$resultat->fetch() ; 
		$count = $resultat->rowCount();
		
		if($count==1)
		{
			$_SESSION['pseudoA']= $result['pseudoA']; 
			$_SESSION['mdpA'] =$mdpA;
			
			header("location:Profile.php");
		
		//var_dump($_SESSION); 
		}
		
		else
		{
		
echo " error";			
		}
	}
	else
	{
		echo'no';
		
	}
	}
	}
?>