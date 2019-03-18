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
require_once("AccesseurEntiteGoodie.php");
require_once("AccesseurEntiteCategorieGoodie.php");

class AccesseurAchat
{
    public const SQL_RECHERCHE_PAR_GOODIE = "select ".Achat::PRIX.", ". Achat::QUANTITE. ", ". Achat::NUMERO_TRANSACTION.", ".Achat::DATE . ", ".Achat::ID_UTILISATEUR." from ". Achat::TABLE . " where ".Achat::ID_GOODIE." = ?";
    public const SQL_RECHERCHE_PAR_UTILISATEUR = "select ".Achat::PRIX.", ". Achat::QUANTITE. ", ". Achat::NUMERO_TRANSACTION.", ".Achat::DATE . ", ".Achat::ID_GOODIE." from ". Achat::TABLE . " where ".Achat::ID_UTILISATEUR. " = ?";
    public const SQL_RECHERCHE_PAR_NUMERO = "select ".Achat::ID_UTILISATEUR.", ".Achat::DATE. ", ".Achat::ID_GOODIE.", ".Achat::QUANTITE." from ".Achat::TABLE." where ". Achat::NUMERO_TRANSACTION. " = :numero";
    public const SQL_RECHERCHE_PAR_DATE = "select ".Achat::ID_UTILISATEUR.", ".Achat::DATE. ", ".Achat::ID_GOODIE.", ".Achat::NUMERO_TRANSACTION.", ".Achat::QUANTITE." from ".Achat::TABLE." where ".Achat::DATE." LIKE ?";
    public const SQL_STATISTIQUE_PAR_GOODIE = "select SUM(".Achat::PRIX.") as sum_prix, SUM(". Achat::QUANTITE. ") as sum_quantite, COUNT(".Achat::DATE .") as nb_vente, ".Achat::ID_GOODIE." from ". Achat::TABLE . " group by ".Achat::ID_GOODIE;
    public const SQL_STATISTIQUE_PAR_GOODIE_PAR_PERIODE = "select SUM(".Achat::PRIX.") as sum_prix, SUM(". Achat::QUANTITE. ") as sum_quantite, COUNT(".Achat::DATE .") as nb_vente, ".Achat::ID_GOODIE." from ". Achat::TABLE;
    public const SQL_STATISTIQUE_PAR_CATEGORIE = "select SUM(".Achat::PRIX.") as sum_prix, SUM(". Achat::QUANTITE. ") as sum_quantite, COUNT(".Achat::DATE .") as nb_vente, ".Goodie::ID_CATEGORIE." from ". Achat::TABLE . ", ". Goodie::TABLE ." where goodie.id=achat.id_goodie group by ".Goodie::ID_CATEGORIE;
    public const SQL_STATISTIQUE_PAR_CATEGORIE_PAR_PERIODE = "select SUM(".Achat::PRIX.") as sum_prix, SUM(". Achat::QUANTITE. ") as sum_quantite, COUNT(".Achat::DATE .") as nb_vente, ".Goodie::ID_CATEGORIE." from ". Achat::TABLE . ", ". Goodie::TABLE ." where goodie.id=achat.id_goodie ";
    public const SQL_LISTER_TRANSACTION = " select ".Achat::ID_UTILISATEUR . ", ".Achat::ID_GOODIE . ", ".Achat::DATE . ", ".Achat::QUANTITE . ", ".Achat::PRIX . ", ". Achat::NUMERO_TRANSACTION . " from ".Achat::TABLE. " order by ". Achat::DATE." DESC;";

    private static $connexion = null;
    private $accesseurUtilisateur = null;

    function __construct(){
        if(!self::$connexion) self::$connexion =  BaseDeDonnee::getConnexion();
        $accesseurUtilisateur = new AccesseurUtilisateur();
    }

    public function recupererStatistiqueParGoodie($triPeriode = null){
        $accesseurGoodie = new AccesseurEntiteGoodie();
        switch ($triPeriode) {
            case 'annee':
                $sql = self::SQL_STATISTIQUE_PAR_GOODIE_PAR_PERIODE;
                $sql.= " where YEAR(".Achat::DATE.") = YEAR(NOW()) group by ".Achat::ID_GOODIE;
                $requete = self::$connexion->prepare($sql);
                break;
            case 'mois':
                $sql = self::SQL_STATISTIQUE_PAR_GOODIE_PAR_PERIODE;
                $sql.= " where MONTH(".Achat::DATE.") = MONTH(NOW()) group by ".Achat::ID_GOODIE;
                $requete = self::$connexion->prepare($sql);
                break;
            case 'semaine':
                $sql = self::SQL_STATISTIQUE_PAR_GOODIE_PAR_PERIODE;
                $sql.= " where WEEK(".Achat::DATE.") = WEEK(NOW()) group by ".Achat::ID_GOODIE;
                $requete = self::$connexion->prepare($sql);
                break;
            default:
                $requete = self::$connexion->prepare(self::SQL_STATISTIQUE_PAR_GOODIE);
        }

        $listeAchats=[];
        $requete->execute();
        $curseur = $requete->fetchAll(PDO::FETCH_ASSOC);
        if (count($curseur) > 0) {
            foreach ($curseur as $maLigne) {
                $maLigne['goodie'] = $accesseurGoodie->recupererGoodie($maLigne[Achat::ID_GOODIE]);
                $listeAchats[] = $maLigne;
            }
        }
        return $listeAchats;
    }

    public function recupererStatistiqueParCategorie($triPeriode =null){
        $accesseurCategorie = new AccesseurEntiteCategorieGoodie();

        switch ($triPeriode) {
            case 'annee':
                $sql = self::SQL_STATISTIQUE_PAR_CATEGORIE_PAR_PERIODE;
                $sql.= " and YEAR(".Achat::DATE.") = YEAR(NOW()) group by ".Goodie::ID_CATEGORIE;
                $requete = self::$connexion->prepare($sql);
                break;
            case 'mois':
                $sql = self::SQL_STATISTIQUE_PAR_CATEGORIE_PAR_PERIODE;
                $sql.= " and MONTH(".Achat::DATE.") = MONTH(NOW()) group by ".Goodie::ID_CATEGORIE;
                $requete = self::$connexion->prepare($sql);
                break;
            case 'semaine':
                $sql = self::SQL_STATISTIQUE_PAR_CATEGORIE_PAR_PERIODE;
                $sql.= " and WEEK(".Achat::DATE.") = WEEK(NOW()) group by ".Goodie::ID_CATEGORIE;
                $requete = self::$connexion->prepare($sql);
                break;
            default:
                $requete = self::$connexion->prepare(self::SQL_STATISTIQUE_PAR_CATEGORIE);
        }

        $listeAchats=[];
        $requete->execute();
        $curseur = $requete->fetchAll(PDO::FETCH_ASSOC);
        if (count($curseur) > 0) {
            foreach ($curseur as $maLigne) {
                $maLigne['categorie'] = $accesseurCategorie->recupererCategorie($maLigne[Goodie::ID_CATEGORIE]);
                $listeAchats[] = $maLigne;
            }
        }
        return $listeAchats;
    }

    public function listerLesTransactions(){
        $accesseurGoodie = new AccesseurEntiteGoodie();
        $accesseurUtilisateur = new AccesseurUtilisateur();

        $requete = self::$connexion->prepare(self::SQL_LISTER_TRANSACTION);

        $listeTransactions=[];
        $requete->execute();
        $curseur = $requete->fetchAll(PDO::FETCH_ASSOC);
        if (count($curseur) > 0) {
            foreach ($curseur as $maLigne) {
                $maLigne['goodie'] = $accesseurGoodie->recupererGoodie($maLigne[Achat::ID_GOODIE]);
                $maLigne['utilisateur'] = $accesseurUtilisateur->recevoirUtilisateur($maLigne[Goodie::ID_UTILISATEUR]);
                $listeTransactions[] = $maLigne;
            }
        }
        return $listeTransactions;
    }

    public function rechercherParUtilisateur($id_utilisateur)
    {
        $idNetoyer = filter_var($id_utilisateur, FILTER_SANITIZE_NUMBER_INT);
        $requete = self::$connexion->prepare(self::SQL_RECHERCHE_PAR_UTILISATEUR);
        $listeResultat=[];
        $requete->bindValue(1, $idNetoyer, PDO::PARAM_INT);
        $requete->execute();

        $listeResultat = $requete->fetchAll(PDO::FETCH_OBJ);
        //var_dump($listeResultat);
        //$requete->debugDumpParams();
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
    public function rechercherParDate($date)
    {
        $listeAchat = [];
        $requete = self::$connexion->prepare(self::SQL_RECHERCHE_PAR_DATE);
        $requete->bindValue(1, $date."%", PDO::PARAM_STR);
        $requete->execute();
        $listeAchat = $requete->fetchAll(PDO::FETCH_OBJ);
        //var_dump($requete);
        return $listeAchat;
    }

    public function rechercherParGoodie($id_goodie)
    {
        $idNetoyer = filter_var($id_goodie, FILTER_SANITIZE_NUMBER_INT);
        $requete = self::$connexion->prepare(self::SQL_RECHERCHE_PAR_GOODIE);
        $listeResultat=[];
        $requete->bindValue(1, $idNetoyer, PDO::PARAM_INT);
        $requete->execute();

        $listeResultat = $requete->fetchAll(PDO::FETCH_OBJ);
        //var_dump($listeResultat);
        //$requete->debugDumpParams();
        return $listeResultat;
    }

}