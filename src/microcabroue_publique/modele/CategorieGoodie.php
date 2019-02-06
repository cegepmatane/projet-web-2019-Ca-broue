<?php
/**
 * Created by PhpStorm.
 * User: xela
 * Date: 06/02/19
 * Time: 11:25 AM
 */

class CategorieGoodie
{
    public const ID = "id";
    public const LIBELLE = "libelle";

    private $id;
    private $libelle;


    function __construct(object $attribut){
        if(!is_object($attribut)) $attribut = (object)[];

        $this->id = $attribut->id ?? "";
        $this->libelle = $attribut->libelle ?? "";
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
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @param mixed $libelle
     */
    public function setLibelle($libelle): void
    {
        $this->libelle = $libelle;
    }


}