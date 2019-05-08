<?php
/**
 * Created by PhpStorm.
 * User: Heni Hcini
 * Date: 28/04/2019
 * Time: 22:17
 */

class avis
{
private $id_avis ;
private $nom ;
private $avis_m ;

    /**
     * avis constructor.
     * @param $nom
     * @param $avis_m
     */
    public function __construct($nom, $avis_m)
    {
        $this->nom = $nom;
        $this->avis_m = $avis_m;
    }

    /**
     * @return mixed
     */
    public function getIdAvis()
    {
        return $this->id_avis;
    }

    /**
     * @param mixed $id_avis
     */
    public function setIdAvis($id_avis)
    {
        $this->id_avis = $id_avis;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getAvisM()
    {
        return $this->avis_m;
    }

    /**
     * @param mixed $avis_m
     */
    public function setAvisM($avis_m)
    {
        $this->avis_m = $avis_m;
    }

}