<?php
/**
 * Created by PhpStorm.
 * User: xela
 * Date: 06/02/19
 * Time: 11:25 AM
 */

class CategorieGoodie
{   public const TABLE = "categorie_goodie";
    public const ID = "id";
    public const LIBELLE_FR = "libelle_fr";
    public const LIBELLE_EN = "libelle_en";

    private $id;
    private $libelle_fr;
    private $libelle_en;


    function __construct(object $attribut){
        if(!is_object($attribut)) $attribut = (object)[];

        $this->id = $attribut->id ?? "";
        $this->libelle_fr = $attribut->libelle_fr ?? "";
        $this->libelle_en = $attribut->libelle_en ?? "";
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
    public function getLibelleFr()
    {
        return $this->libelle_fr;
    }

    /**
     * @param mixed $libelle_fr
     */
    public function setLibelleFr($libelle_fr): void
    {
        $this->libelle_fr = $libelle_fr;
    }

    /**
     * @return mixed
     */
    public function getLibelleEn()
    {
        return $this->libelle_en;
    }

    /**
     * @param mixed $libelle_en
     */
    public function setLibelleEn($libelle_en)
    {
        $this->libelle_en = $libelle_en;
    }


}