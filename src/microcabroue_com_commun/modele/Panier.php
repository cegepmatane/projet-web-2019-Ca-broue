<?php
class Panier
{
    public const ID = "id";
    public const NOM_FR = "nom_fr";
    public const NOM_EN = "nom_en";
    public const PRIX = "prix";
    public const QUANTITEE = "quantitee";
    public const ID_UTILISATEUR = "id_utilisateur";
    const TABLE = "panier";

    public $id;
    public $nom_fr;
    public $nom_en;
    public $quantitee = 1;
    public $prix;

    function __construct(){

        $this->id = $attribut->id ?? "";
        $this->nom_fr = $attribut->nom_fr ?? "";
        $this->nom_en = $attribut->nom_en ?? "";
        //$this->quantitee = $attribut->quantitee ?? null;
        $this->prix = $attribut->prix ?? null;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNomFr()
    {
        return $this->nom_fr;
    }

    /**
     * @param mixed $nom_fr
     */
    public function setNomFr($nom_fr): void
    {
        $this->nom_fr = $nom_fr;
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
    public function setPrix($prix): void
    {
        $this->prix = $prix;
    }

    /**
     * @return string
     */
    public function getNomEn()
    {
        return $this->nom_en;
    }

    /**
     * @param string $nom_en
     */
    public function setNomEn($nom_en)
    {
        $this->nom_en = $nom_en;
    }

    public function getQuantitee(){
        return $this->quantitee;
    }

    public function setQuantitee($quantitee){
        $this->quantitee += $quantitee;
    }
}