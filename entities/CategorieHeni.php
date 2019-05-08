<?php
/**
 * Created by PhpStorm.
 * User: Heni Hcini
 * Date: 23/04/2019
 * Time: 15:39
 */

class CategorieHeni
{
 private  $id_categorie ;
 private  $nom_categorie;

    /**
     * @return mixed
     */
    public function getIdCategorie()
    {
        return $this->id_categorie;
    }

    /**
     * @param mixed $id_categorie
     */
    public function setIdCategorie($id_categorie)
    {
        $this->id_categorie = $id_categorie;
    }

    /**
     * @return mixed
     */
    public function getNomCategorie()
    {
        return $this->nom_categorie;
    }

    /**
     * @param mixed $nom_categorie
     */
    public function setNomCategorie($nom_categorie)
    {
        $this->nom_categorie = $nom_categorie;
    }

    /**
     * CategorieHeni constructor.
     * @param $id_categorie
     * @param $nom_categorie
     */
    public function __construct($nom_categorie)
    {
        $this->nom_categorie = $nom_categorie;
    }

}