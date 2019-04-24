<?PHP
include_once "D:/programs/wamp64/www/Projet_integre1/config.php";
class livreurC {
	function ajouterLivreur($livreur){
		$sql="insert into livreur (cin,nom,prenom,tel,mail,adresse,img) values (:cin, :nom,:prenom,:tel,:mail,:adresse,:img)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);

        $cin=$livreur->getCin();
        $nom=$livreur->getNom();
        $prenom=$livreur->getPrenom();
        $tel=$livreur->getTel();

        $mail=$livreur->getMail();
        $adresse=$livreur->getAdresse();
				$img=$livreur->getImg();
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':tel',$tel);
		$req->bindValue(':mail',$mail);
    $req->bindValue(':adresse',$adresse);
		$req->bindValue(':img',$img);
            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

	}

	function afficherLivreur(){

		$sql="SELECT * From livreur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function supprimerLivreur($cin){
		$sql="DELETE FROM livreur where cin= :cin";
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

	function modifierLivreur($livreur,$cin){
		$sql="UPDATE livreur SET cin=:cinn, nom=:nom,prenom=:prenom,tel=:tel,mail=:mail,adresse=:adresse WHERE cin=:cin";

		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{
        $req=$db->prepare($sql);

		$cinn=$livreur->getCin();
		$nom=$livreur->getNom();
		$prenom=$livreur->getPrenom();
		$tel=$livreur->getTel();
		$mail=$livreur->getMail();
		$adresse=$livreur->getAdresse();
$req->bindValue(':cinn',$cinn);
$req->bindValue(':cin',$cin);
$req->bindValue(':nom',$nom);
$req->bindValue(':prenom',$prenom);
$req->bindValue(':tel',$tel);
$req->bindValue(':mail',$mail);
$req->bindValue(':adresse',$adresse);


            $s=$req->execute();

           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();

        }

	}

	function recupererLivreur($cin){
		$sql="SELECT * from livreur where cin=$cin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function rechercherListeEmployes($tarif){
		$sql="SELECT * from employe where tarifHoraire=$tarif";
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
