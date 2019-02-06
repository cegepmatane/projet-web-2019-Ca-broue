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
    public const NOM = "nom";
    public const DESCRIPTION = "description";
    public const PRIX = "prix";

    /**
     * @var string
     */
    private $id;
    /**
     * @var string
     */
    private $nom;
    /**
     * @var string
     */
    private $description;
    /**
     * @var |double
     */
    private $prix;

    function __construct(object $attribut){
        if(!is_object($attribut)) $attribut = (object)[];

        $this->id = $attribut->id ?? "";
        $this->nom = $attribut->nom ?? "";
        $this->description = $attribut->description ?? "";
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
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->nom = $nom;
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
    public function setDescription($description): void
    {
        $this->description = $description;
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

}