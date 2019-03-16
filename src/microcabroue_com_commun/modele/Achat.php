<?php
/**
 * Created by PhpStorm.
 * User: xela
 * Date: 16/03/19
 * Time: 4:03 PM
 */

class Achat
{
    public const TABLE = "achat";
    public const ID_UTILISATEUR = "id_utilisateur";
    public const ID_GOODIE = "id_goodie";
    public const PRIX = "prix_achat";
    public const DATE = "date_achat";
    public const QUANTITE = "quantite_produit";
    public const NUMERO_TRANSACTION = "numero_transaction";

    private $utilisateur;
    private $goodie;
    private $prix;
    private $quantite;
    private $date;
    private $numero_transaction;

    /**
     * Achat constructor.
     * @param $utilisateur
     * @param $goodie
     * @param $prix
     * @param $quantite
     * @param $date
     * @param $numero_transaction
     */
    public function __construct($utilisateur, $goodie, $prix, $quantite, $date, $numero_transaction)
    {
        $this->utilisateur = $utilisateur;
        $this->goodie = $goodie;
        $this->prix = $prix;
        $this->quantite = $quantite;
        $this->date = $date;
        $this->numero_transaction = $numero_transaction;
    }


    /**
     * @return mixed
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    /**
     * @param mixed $utilisateur
     */
    public function setUtilisateur($utilisateur): void
    {
        $this->utilisateur = $utilisateur;
    }

    /**
     * @return mixed
     */
    public function getGoodie()
    {
        return $this->goodie;
    }

    /**
     * @param mixed $goodie
     */
    public function setGoodie($goodie): void
    {
        $this->goodie = $goodie;
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
     * @return mixed
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * @param mixed $quantite
     */
    public function setQuantite($quantite): void
    {
        $this->quantite = $quantite;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date): void
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getNumeroTransaction()
    {
        return $this->numero_transaction;
    }

    /**
     * @param mixed $numero_transaction
     */
    public function setNumeroTransaction($numero_transaction): void
    {
        $this->numero_transaction = $numero_transaction;
    }


}