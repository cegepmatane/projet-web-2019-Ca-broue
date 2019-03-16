<?php
/**
 * Created by PhpStorm.
 * User: xela
 * Date: 16/03/19
 * Time: 4:49 PM
 */

require_once("BaseDeDonnee.php");

require_once("AccesseurUtilisateur.php");
class AccesseurAchat
{
    public const SQL_STATISTIQUE_PAR_GOODIE = "select ".Achat::PRIX.", ". Achat::QUANTITE. ", ".Achat::DATE . ", ".Achat::ID_GOODIE." from ". Achat::TABLE ;
    public const SQL_RECHERCHE_PAR_UTILISATEUR = "select".Achat::PRIX.", ". Achat::QUANTITE. ", ".Achat::DATE . ", ".Achat::ID_GOODIE." from ". Achat::TABLE . "where ".Achat::ID_UTILISATEUR. " = :id";
    private static $connexion = null;
    
    

    function __construct(){
        if(!self::$connexion) self::$connexion =  BaseDeDonnee::getConnexion();
        $accesseurUtilisateur = new AccesseurUtilisateur();
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

    public function rechercherParUtilisateur($nom, $prenom)
    {
        $requete = self::$connexion->prepare(self::SQL_RECHERCHE_PAR_UTILISATEUR);
        $listeResultat=[];
        $utilisateur = $accesseurUtilisateur->recevoirUtilisateurParNom($nom, $prenom);
        $requete->bindValue(':id', $utilisateur->getId(), PDO::PARAM_INT);
        $requete->execute();
        $listeResultat = $requete->fetchAll(PDO::FETCH_OBJ);

        return $listeResultat;
    }
}