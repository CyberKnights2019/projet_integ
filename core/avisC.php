<?php
/**
 * Created by PhpStorm.
 * User: Heni Hcini
 * Date: 28/04/2019
 * Time: 22:19
 */
include_once "D:/programs/wamp64/www/Projet_integre1/config.php";

class avisC
{
    public function Ajouteravis($avis)
    {
        $sql = "insert into avis (nom,avis) values (:nomm ,:aviss)";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);
            $nomm=   $avis->getNom();
            $avism=   $avis->getAvisM();

            $req->bindValue(':nomm',$nomm);
            $req->bindValue(':aviss',$avism);

            $req->execute();
            if($req->execute($sql)){
                $_SESSION['message'] = 'avis added successfully';
            }
            else{
                $_SESSION['message'] = 'Cannot add avis';
            }
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }

    }
    function afficheravis(){

        $sql="SELECT * From avis";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function supprimeravis($id){
        $sql="DELETE FROM avis where id_avis = :id";
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
    function afficherparticulier($id){
        $db = config::getConnexion();
        try{
            $req=$db->prepare("SElECT * From avis where nom =:id");
            $req->bindValue(':id',$id);
            $req->execute();
            $liste=$req->fetchAll();

            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

    }


}