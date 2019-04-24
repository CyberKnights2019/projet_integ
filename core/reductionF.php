<?PHP
include "D:/programs/wamp64/www/Projet_integre1/config.php";
class ReductionF {
function afficherreduction ($reduction){
		echo "idProduit: ".$reduction->getidProduit()."<br>";
		echo "tauxReduction: ".$reduction->gettauxReduction()."<br>";
		echo "dateDeb: ".$reduction->getdateDeb()."<br>";
		echo "dateFin: ".$reduction->getdateFin()."<br>";

	}

	function ajouterreduction($reduction){

		$sql1="insert into reduction (idProduit,tauxReduction,dateDebut,dateFin) values (:idProduit, :tauxReduction,:dateDeb,:dateFin)";
//		$sql1="INSERT INTO `reduction` (`id`, `idProduit`, `tauxReduction`, `dateDebut`, `dateFin`) VALUES (NULL, :idProduit', ':tauxReduction', '2019-04-30', '2019-04-30')";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql1);

     $idProduit=$reduction->getidProduit();
        $tauxReduction=$reduction->gettauxReduction();
        $dateDeb=$reduction->getdateDeb();

        $dateFin=$reduction->getdateFin();
		$req->bindValue(':idProduit',$idProduit);
		$req->bindValue(':tauxReduction',$tauxReduction);
	$req->bindValue(':dateDeb',$dateDeb);
		$req->bindValue(':dateFin',$dateFin);

            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

	}

	function afficherreductions(){
		//$sql="SElECT * From reduction e inner join formationphp.reduction a on e.idProduit= a.idProduit";
		$sql="SElECT * From reduction";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function supprimerreduction($id){
		$sql="DELETE FROM reduction where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierreduction($reduction,$id){
		$sql="UPDATE reduction SET idProduit=:idProduit, tauxReduction=:tauxReduction,dateDeb=:dateDeb,dateFin=:dateFin WHERE id=:id";

		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{
        $req=$db->prepare($sql);
		$idProduitn=$reduction->getidProduit();
        $tauxReduction=$reduction->gettauxReduction();
        $dateDeb=$reduction->getdateDeb();
        $dateFin=$reduction->getdateFin();

		$req->bindValue(':idProduit',$idProduit);
		$req->bindValue(':tauxReduction',$tauxReduction);
		$req->bindValue(':dateDeb',$dateDeb);
		$req->bindValue(':dateFin',$dateFin);


            $s=$req->execute();

           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }

	}


	function rechercherListereductions($idProduit){
		$sql="SELECT * from reduction where idProduit=$idProduit";
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
