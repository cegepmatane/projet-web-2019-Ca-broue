<?php
/**
 * Created by PhpStorm.
 * User: xela
 * Date: 16/03/19
 * Time: 4:49 PM
 */
require_once(CHEMIN_SRC_DEV . "microcabroue_com_commun/modele/Utilisateur.php");
require_once(CHEMIN_SRC_DEV . "microcabroue_com_commun/modele/Achat.php");
require_once("BaseDeDonnee.php");
require_once("AccesseurUtilisateur.php");

class AccesseurAchat
{
    public const SQL_RECHERCHE_PAR_UTILISATEUR = "select".Achat::PRIX.", ". Achat::QUANTITE. ", ".Achat::DATE . ", ".Achat::ID_GOODIE." from ". Achat::TABLE . "where ".Achat::ID_UTILISATEUR. " = :id";
    public const SQL_STATISTIQUE_PAR_GOODIE = "select SUM(".Achat::PRIX.") as sum_prix, SUM(". Achat::QUANTITE. ") as sum_quantite, ".Achat::ID_GOODIE." from ". Achat::TABLE . " group by ".Achat::ID_GOODIE;
    public const SQL_RECHERCHE_PAR_NUMERO = "select ".Achat::ID_UTILISATEUR.", ".Achat::DATE. ", ".Achat::ID_GOODIE.", ".Achat::QUANTITE." from ".Achat::TABLE." where ". Achat::NUMERO_TRANSACTION. " = :numero";  

    private static $connexion = null;
    private $accesseurUtilisateur = null;
    

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

                $listeAchats[] = $maLigne;
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
    public function rechercherParNumero($numero)
    {
        $requete = self::$connexion->prepare(self::SQL_RECHERCHE_PAR_NUMERO);
        $requete->bindValue(':numero', $numero, PDO::PARAM_STR);
        $requete->execute();
        $achat = $requete->fetch(PDO::FETCH_OBJ);
        return $achat;
    }
}