<?php
/**
 * Created by PhpStorm.
 * User: xela
 * Date: 06/02/19
 * Time: 10:54 AM
 */

class Goodie
{
    public const ID = "id";
    public const NOM_FR = "nom_fr";
    public const NOM_EN = "nom_en";
    public const DESCRIPTION_FR = "description_fr";
    public const DESCRIPTION_EN = "description_en";
    public const DESCRIPTION_LONGUE_FR = "description_longue_fr";
    public const DESCRIPTION_LONGUE_EN = "description_longue_en";
    public const PRIX = "prix";
    public const ID_CATEGORIE = "id_categorie_goodie";
    public const ID_UTILISATEUR = "id_utilisateur";
    const TABLE = "goodie";

    private $id;
    private $id_categorie_goodie;
    private $nom_fr;
    private $nom_en;
    private $description_fr;
    private $description_en;
    private $description_longue_fr;
    private $description_longue_en;
    private $prix;

    function __construct(object $attribut){
        if(!is_object($attribut)) $attribut = (object)[];

        $this->id = $attribut->id ?? "";
        $this->id_categorie_goodie = $attribut->id_categorie_goodie ?? "";
        $this->nom_fr = $attribut->nom_fr ?? "";
        $this->nom_en = $attribut->nom_en ?? "";
        $this->description_fr = $attribut->description_fr ?? "";
        $this->description_en = $attribut->description_en ?? "";
        $this->description_longue_fr = $attribut->description_longue_fr ?? "";
        $this->description_longue_en = $attribut->description_longue_en ?? "";
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
    public function getIdCategorie()
    {
        return $this->id_categorie_goodie;
    }

    /**
     * @param mixed $id
     */
    public function setIdCategorie($id_categorie_goodie): void
    {
        $this->id_categorie_goodie = $id_categorie_goodie;
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
    public function getDescriptionFr()
    {
        return $this->description_fr;
    }

    /**
     * @param mixed $description_fr
     */
    public function setDescriptionFr($description_fr): void
    {
        $this->description_fr = $description_fr;
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

    /**
     * @return string
     */
    public function getDescriptionEn()
    {
        return $this->description_en;
    }

    /**
     * @param string $description_en
     */
    public function setDescriptionEn($description_en)
    {
        $this->description_en = $description_en;
    }

    /**
     * @return string
     */
    public function getDescriptionLongueFr()
    {
        return $this->description_longue_fr;
    }

    /**
     * @param string $description_longue_fr
     */
    public function setDescriptionLongueFr($description_longue_fr)
    {
        $this->description_longue_fr = $description_longue_fr;
    }

    /**
     * @return string
     */
    public function getDescriptionLongueEn()
    {
        return $this->description_longue_en;
    }

    /**
     * @param string $description_longue_en
     */
    public function setDescriptionLongueEn($description_longue_en)
    {
        $this->description_longue_en = $description_longue_en;
    }

}