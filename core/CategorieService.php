<?php
/**
 * Created by PhpStorm.
 * User: Heni Hcini
 * Date: 23/04/2019
 * Time: 15:38
 */
include_once "D:/programs/wamp64/www/Projet_integre1/config.php";

class CategorieService
{
    public function AjouterCategorie($categoriee)
    {
        $sql = "insert into categorie (nom_categorie) values (:nom)";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);
            $nom=   $categoriee->getNomCategorie();

            $req->bindValue(':nom',$nom);

            $req->execute();
            if($req->execute($sql)){
                $_SESSION['message'] = 'categorie added successfully';
            }
            else{
                $_SESSION['message'] = 'Cannot add categoriee';
            }
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }

    }
    function afficherCategorie(){

        $sql="SELECT * From categorie";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function supprimercategorie($id){
        $sql="DELETE FROM categorie where id_cat = :id";
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
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $db = config::getConnexion();
        try{
            $req=$db->prepare("SElECT * From categorie where nom_categorie =:id");
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