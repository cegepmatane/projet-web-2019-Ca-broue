<?php
/**
 * Created by PhpStorm.
 * User: xela
 * Date: 16/03/19
 * Time: 4:49 PM
 */

class AccesseurAchat
{
    public const SQL_STATISTIQUE_PAR_GOODIE = "select ".Achat::PRIX.", ". Achat::QUANTITE. ", ".Achat::DATE . ", ".Achat::ID_GOODIE." from ". Achat::TABLE . " group by ".Achat::ID_GOODIE;
    private static $connexion = null;

    function __construct(){
        if(!self::$connexion) self::$connexion =  BaseDeDonnee::getConnexion();
    }

    public function recupererStatistiqueParGoodie(){
        $requete = self::$connexion->prepare(self::SQL_STATISTIQUE_PAR_GOODIE);

        $listeAchats=[];
        $requete->execute();
        $curseur = $requete->fetchAll(PDO::FETCH_ASSOC);
        if (count($curseur) > 0) {
            foreach ($curseur as $maLigne) {
                $achat = new Achat(null, new Goodie((object)[Goodie::ID => $maLigne[Achat::ID_GOODIE]]), $maLigne[Achat::PRIX], $maLigne[Achat::QUANTITE], $maLigne[Achat::DATE], "");

                $listeAchats[] = $achat;
            }
        }
        return $listeAchats;
    }
}