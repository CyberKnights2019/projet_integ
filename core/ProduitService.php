<?php
/**
 * Created by PhpStorm.
 * User: Heni Hcini
 * Date: 28/03/2019
 * Time: 16:20
 */
include_once "D:/programs/wamp64/www/Projet_integre1/config.php";

class ProduitService
{



    public function AjouterProduit($produit)
    {
        $sql = "insert into produit (nom,marque,id_categorie,quantite,prix,description,image) values (:nom , :marque , :idcat , :quantite , :prix , :description, :photo)";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);
          $nomm=$produit->getNom();
         $marquee=   $produit->getMarque();
         $categ=      $produit->getIdCategorie();
           $quantit=     $produit->getQuantite();
               $price=  $produit->getPrix();
           $descriptionn=     $produit->getDescription();
            $image=    $produit->getPhoto();
            $req->bindValue(':nom',$nomm);
            $req->bindValue(':marque',$marquee);
            $req->bindValue(':idcat',$categ);
            $req->bindValue(':quantite', $quantit);
            $req->bindValue(':prix',  $price);
            $req->bindValue(':description', $descriptionn);
            $req->bindValue(':photo', $image);
            $req->execute();
            if($req->execute($sql)){
                $_SESSION['message'] = 'Produit added successfully';
            }
            else{
                $_SESSION['message'] = 'Cannot add produit';
            }
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }

    }
    function afficherProduit(){

        $sql="SELECT * From produit";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function supprimerproduit($id){
        $sql="DELETE FROM produit where id = :id";
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
    function afficherProd($id){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $db = config::getConnexion();
        try{
            $req=$db->prepare("SElECT * From produit where nom =:id");
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
