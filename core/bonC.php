<?PHP
include_once "D:/programs/wamp64/www/Projet_integre1/config.php";
class bonC {
	function ajouterBon($bon){
		$sql="insert into bonlivraison (cinL,id_C,date_remise) values (:cinL, :id_c,:date)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);

        $cinL=$bon->getCin();
        $date=$bon->getDate();
        $id_c=$bon->getIdc();

		$req->bindValue(':cinL',$cinL);
		$req->bindValue(':id_c',$id_c);
		$req->bindValue(':date',$date);

            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

	}

	function afficherBon(){

		$sql="SELECT c.cin,c.id_c,b.date_remise,c.zone,c.adresse,l.nom,l.prenom,l.cin as ciin From ((bonlivraison as b inner join commandes as c on c.id_c=b.id_c ) inner join livreur as l on l.cin=b.cinL)";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function supprimerBon($cin){
		$sql="DELETE FROM bonlivraison where cinL= :cin";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':cin',$cin);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifierBon($idc,$cin){
		$date=date_create(date("Y-m-d"));
		$d=date_format($date,"Y-m-d");
		$sql="UPDATE bonlivraison SET cinL=:cin, date_remise=DATE '$d' WHERE id_c=:id_c";

		$db = config::getConnexion();

try{
        $req=$db->prepare($sql);


$req->bindValue(':cin',$cin);//nouveau cinL
$req->bindValue(':id_c',$idc);//Id de la commande


            $s=$req->execute();


        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();

        }

	}




}

?>
