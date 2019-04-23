<?php
/**
 * Created by PhpStorm.
 * User: Heni Hcini
 * Date: 28/03/2019
 * Time: 16:19
 */

class Produit
{
    private $id;
    private $nom;
    private $marque;
    private $id_categorie;
    private $quantite;
    private $prix;
    private $description;
    private $photo;

    /**
     * @return mixed
     */

    /**
     * Produit constructor.
     * @param $nom
     * @param $marque
     * @param $id_categorie
     * @param $quantite
     * @param $prix
     * @param $description
     */
    public function __construct($nom, $marque, $id_categorie, $quantite, $prix, $description, $photo)
    {
        $this->nom = $nom;
        $this->marque = $marque;
        $this->id_categorie = $id_categorie;
        $this->quantite = $quantite;
        $this->prix = $prix;
        $this->description = $description;
        $this->photo = $photo;
    }

    /**
     * Produit constructor.
     * @param $id
     * @param $nom
     * @param $marque
     * @param $id_categorie
     * @param $quantite
     * @param $prix
     * @param $description
     */

    /**
     * Produit constructor.
     */


    /**
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param mixed $photo
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
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
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param mixed $marque
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

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
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * @param mixed $quantite
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }


}