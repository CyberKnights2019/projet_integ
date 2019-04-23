
<?php

include_once "D:/wamp64/www/Projet_integre/config.php";
include "D:/wamp64/www/Projet_integre/entities/admin.php";

class adminC
{
    public $conn;
    function __construct()
    {
        $c=new config();
        $this->conn=$c->getConnexion();
    }

    function insertAdmin($admin,$conn)
    {

            $req1="INSERT INTO admin (id,pseudoA,emailA,mdpA) values ('".$admin->getid()."','".$admin->getPseudoA()."','".$admin->getEmailA()."','".$admin->getMdpA()."')" ;
            $conn->query($req1);


    }

    function modifierAdmin($admin,$conn)
    {
		$id=$admin->getid();
        $pseudoA=$admin->getPseudoA();
		$emailA=$admin->getEmailA();
        $mdpA=$admin->getMdpA();

        $req1="UPDATE admin SET id='$id',pseudoA='$pseudoA',emailA='$emailA',mdpA='$mdpA'  WHERE id='$id'";

        $conn->exec($req1);

    }

	function modifierAdminPassword($id,$mdpA,$conn)
    {

        $req1="UPDATE admin SET mdpA='".$mdpA."'  WHERE id='".$id."'";

        $conn->exec($req1);

    }

    function recupererAdminLogin($pseudoA,$conn)
    {

        $req="SELECT * FROM admin  WHERE pseudoA='".$pseudoA."' ";
        $chauf=$conn->query($req);
        return $chauf->fetchAll();
    }


	function TrouverAdminParCode($code,$conn)
    {

        $req="SELECT * FROM admin  WHERE mdpA='".$mdpA."' ";
        $chauf=$conn->query($req);
        return $chauf->fetchAll();
    }



    function afficheAdminParId($id,$conn)
    {
        $req="select id,pseudoA,emailA from admin where id= '".$id."'";
        $liste=$conn->query($req);
        return $liste->fetchAll();

    }
	function recupererAdminMail($emailA,$conn)
    {
        $req="select id,pseudoA,emailA from admin where emailA= '".$emailA."'";
        $liste=$conn->query($req);
        return $liste->fetchAll();

    }

        function supprimerAdmin($id,$conn)
		{
        $req1="DELETE FROM admin where id='".$id."' ";

        $conn->exec($req1);

    }
        function rechercheAdmin($id,$conn)
        {
        $req="SELECT * FROM admin where id=".$id;
        $liste=$conn->query($req);
        return ($liste->fetchAll());
    }



    	function afficheAdmin($conn)
		{
		$req="select * from admin ";
		$liste=$conn->query($req);
		return $liste->fetchAll();

	}

			function afficheA($pseudoA,$conn)
		{
		$req="select * from admin where pseudoA= '".$pseudoA."'";
		$liste=$conn->query($req);
		return $liste->fetchAll();

	}
    function afficherAdmins()
	{
		$sql="SELECT * From admin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}
?>
