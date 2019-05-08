<?php
/**
 * Created by PhpStorm.
 * User: Heni Hcini
 * Date: 25/04/2019
 * Time: 21:53
 */

class reclamation
{
    private $id_reclamation ;
private $nom_m  ;
private $reclamation_m ;
private $reponse_m ;

    /**
     * reclamation constructor.
     * @param $nom_m
     * @param $reclamation_m
     * @param $reponse_m
     */
    public function __construct($nom_m, $reclamation_m, $reponse_m)
    {
        $this->nom_m = $nom_m;
        $this->reclamation_m = $reclamation_m;
        $this->reponse_m = $reponse_m;
    }

    /**
     * @return mixed
     */
    public function getIdReclamation()
    {
        return $this->id_reclamation;
    }

    /**
     * @param mixed $id_reclamation
     */
    public function setIdReclamation($id_reclamation)
    {
        $this->id_reclamation = $id_reclamation;
    }
    /**
     * @return mixed
     */
    public function getNomM()
    {
        return $this->nom_m;
    }

    /**
     * @param mixed $nom_m
     */
    public function setNomM($nom_m)
    {
        $this->nom_m = $nom_m;
    }

    /**
     * @return mixed
     */
    public function getReclamationM()
    {
        return $this->reclamation_m;
    }

    /**
     * @param mixed $reclamation_m
     */
    public function setReclamationM($reclamation_m)
    {
        $this->reclamation_m = $reclamation_m;
    }

    /**
     * @return mixed
     */
    public function getReponseM()
    {
        return $this->reponse_m;
    }

    /**
     * @param mixed $reponse_m
     */
    public function setReponseM($reponse_m)
    {
        $this->reponse_m = $reponse_m;
    }


}