<?php
include "D:/programs/wamp64/www/Projet_integre1/entities/commande.php";
include "D:/programs/wamp64/www/Projet_integre1/core/panierC.php";


class CommandeC{

	function __construct(){

	}



 function ajouterCommande($commande){
		$sql="insert into commandes (cin,prix_t,livraison,payment,zone,adresse) values (:cin, :prix_t,:livraison ,:payment,:zone,:adresse)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);


        $cin=$commande->getCin();
        $prix=$commande->getprix_t();
        $liv =$commande->getLiv();
        $pay=$commande->getPay();
        $zone=$commande->getzone();
        $adresse=$commande->getadresse();


		$req->bindValue(':cin',$cin);
		$req->bindValue(':prix_t',$prix);
		$req->bindValue(':livraison',$liv);
		$req->bindValue(':payment',$pay);
		$req->bindValue(':zone',$zone);
		$req->bindValue(':adresse',$adresse);

        $req->execute();

       $sql="SELECT MAX(ID_C) FROM commandes ";
       $i=$db->query($sql);
       $idc=$i->fetch(0);

       $sql="UPDATE paniers SET ID_P =:id where ID_P=0";
       $r=$db->prepare($sql);
       $r->bindValue(':id',$idc[0]);
       $r->execute();







        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }



	}

	function afficherCommande(){
		$sql="SElECT * from commandes ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

    }

		function afficherCommandeClient($pseudo){

			$sql="SElECT * from commandes where cin = :cin";
			$db = config::getConnexion();
			try{
				$req=$db->prepare($sql);
				$req->bindValue(':cin',$pseudo);

			$req->execute();
			return $req->fetchAll();
			}
	        catch (Exception $e){
	            die('Erreur: '.$e->getMessage());
	        }

	    }


		function afficherCommandeDefinie($id){
			//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
			$sql="SElECT * from commandes where id_c ='$id'";
			$db = config::getConnexion();
			try{
			$liste=$db->query($sql);
			return $liste;
			}
	        catch (Exception $e){
	            die('Erreur: '.$e->getMessage());
	        }

	    }


			function afficherCommandeCin($id){
				//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
				$sql="SElECT cin from commandes where id_c =:id";
				$db = config::getConnexion();
				try{
				$req=$db->prepare($sql);
				$req->bindValue(':id',$id);
				$req->execute();
				return $req->fetch();
				}
						catch (Exception $e){
								die('Erreur: '.$e->getMessage());
						}

				}


			function afficherCommandeNL(){
				//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
				$sql="SElECT * from commandes where zone!='Boutique' && id_c not in (select id_c from bonlivraison)";
				$db = config::getConnexion();
				try{
				$liste=$db->query($sql);
				return $liste;
				}
						catch (Exception $e){
								die('Erreur: '.$e->getMessage());
						}

				}

 	function updateEtat($id,$etat)
{


	$sql="update  commandes set etat =:etat where ID_C =:id ";

		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);

		$req->bindValue(':id',$id);
		$req->bindValue(':etat',$etat);

         $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();

    }

}

   function supprimerCmd($id){
		$sql="DELETE FROM commandes where ID_C= :id";
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

     $sql="DELETE FROM paniers where ID_P= :id";
     $ps=$db->prepare($sql);
	 $ps->bindValue(':id',$id);
	 try{
            $ps->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

	}



function afficherCommandeTrie($pseudo){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * from commandes where cin = :cin order by prix_t desc";
		$db = config::getConnexion();
		try{
			$req=$db->prepare($sql);
			$req->bindValue(':cin',$pseudo);

		$req->execute();
		return $req->fetchAll();
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

    }


		function recupZone(){

				$sql="SElECT distinct(Zone) from commandes  ";
				$db = config::getConnexion();
				try{
				$liste=$db->query($sql);
				return $liste;
				}
		        catch (Exception $e){
		            die('Erreur: '.$e->getMessage());
		        }

		    }


				function nbrZone($zone){

						$sql="SElECT count(*) as s from commandes where zone='$zone' ";
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
