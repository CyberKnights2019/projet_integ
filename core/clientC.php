
<?php

include_once "d:/programs/wamp64/www/Projet_integre1/config.php";
include "d:/programs/wamp64/www/Projet_integre1/entities/client.php";

class clientC
{
    public $conn;
    function __construct()
    {
        $c=new config();
        $this->conn=$c->getConnexion();
    }

    function insertClient($client,$conn)
    {

            $req1="INSERT INTO client (pseudo,email,motdepasse) values ('".$client->getPseudo()."','".$client->getEmail()."','".$client->getMotdepasse()."')" ;
            $conn->query($req1);


    }

    function modifierClient($client,$conn)
    {
        $pseudo=$client->getPseudo();
		$email=$client->getEmail();
        $motdepasse=$client->getMotdepasse();

        $req1="UPDATE client SET pseudo='$pseudo',email='$email',motdepasse='$motdepasse'  WHERE pseudo='$pseudo'";

        $conn->exec($req1);

    }
	function modifierClientPassword($pseudo,$mdp,$conn)
    {

        $req1="UPDATE client SET motdepasse='".$mdp."'  WHERE pseudo='".$pseudo."'";

        $conn->exec($req1);

    }

    function recupererClientLogin($pseudo,$conn)
    {

        $req="SELECT pseudo,motdepasse FROM client  WHERE pseudo='".$pseudo."' ";
        $chauf=$conn->query($req);
        return $chauf->fetchAll();
    }
	function TrouverClientParCode($code,$conn)
    {

        $req="SELECT * FROM client  WHERE motdepasse='".$code."' ";
        $chauf=$conn->query($req);
        return $chauf->fetchAll();
    }



    function afficheClientParPseudo($pseudo,$conn)
    {
        $req="select pseudo,email from client where pseudo= '".$pseudo."'";
        $liste=$conn->query($req);
        return $liste->fetchAll();

    }
	function recupererClientMail($mail,$conn)
    {
        $req="select pseudo,email from client where email= '".$mail."'";
        $liste=$conn->query($req);
        return $liste->fetchAll();

    }

        function supprimerClient($pseudo,$conn)
		{
        $req1="DELETE FROM client where pseudo='".$pseudo."' ";

        $conn->exec($req1);

    }
        function rechercheClient($pseudo,$conn)
        {
        $req="SELECT * FROM client where pseudo='".$pseudo."'";
        $liste=$conn->query($req);
        return ($liste->fetchAll());
    }



    	function afficheClient($conn)
		{
		$req="select * from client ";
		$liste=$conn->query($req);
		return $liste->fetchAll();

	}

			function afficheC($pseudo,$conn)
		{
		$req="select * from client where pseudo= '".$pseudo."'";
		$liste=$conn->query($req);
		return $liste->fetchAll();

	}
    function afficherClients()
	{
		$sql="SELECT * From client";
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
