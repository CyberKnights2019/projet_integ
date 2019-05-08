<?php
/**
 * Created by PhpStorm.
 * User: Heni Hcini
 * Date: 25/04/2019
 * Time: 21:53
 */
include_once "D:/programs/wamp64/www/Projet_integre1/config.php";

class ReclamationC
{
    /**
     * Created by PhpStorm.
     * User: Heni Hcini
     * Date: 28/03/2019
     * Time: 16:20
     */
    public function Ajouterreclamation($reclamation)
    {
        $sql = "insert into reclamation (nom,reclamationf,reponse) values (:nomm ,:reclamationn,:reponsee)";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);
            $nomm=   $reclamation->getNomM();
            $reclamationn=   $reclamation->getReclamationM();
            $reponse=   $reclamation->getReponseM();

            $req->bindValue(':nomm',$nomm);
            $req->bindValue(':reclamationn',$reclamationn);
            $req->bindValue(':reponsee',$reponse);

            $req->execute();
            if($req->execute($sql)){
                $_SESSION['message'] = 'reclamation added successfully';
            }
            else{
                $_SESSION['message'] = 'Cannot add reclamation';
            }
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }

    }
    function afficherreclamation(){

        $sql="SELECT * From reclamation";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function supprimerreclamation($id){
        $sql="DELETE FROM reclamation where id_reclamation = :id";
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
            $req=$db->prepare("SElECT * From reclamation where nom =:id");
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