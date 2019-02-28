<?php
/**
 * Created by PhpStorm.
 * User: xela
 * Date: 06/02/19
 * Time: 12:45 PM
 */
require_once("BaseDeDonnee.php");
require_once(CHEMIN_SRC_DEV . "microcabroue_com_commun/modele/CategorieGoodie.php");
class AccesseurEntiteCategorieGoodie
{
    const SQL_AJOUTER = "INSERT INTO ".CategorieGoodie::TABLE."(".CategorieGoodie::LIBELLE_FR.", ".CategorieGoodie::LIBELLE_EN.") VALUES(:" .CategorieGoodie::LIBELLE_FR. ", :" .CategorieGoodie::LIBELLE_EN . ")";
    const SQL_MODIFIER = "UPDTAE ". CategorieGoodie::TABLE . " SET ".CategorieGoodie::LIBELLE_FR."=:".CategorieGoodie::LIBELLE_FR.", ".CategorieGoodie::LIBELLE_EN."=:".CategorieGoodie::LIBELLE_EN." WHERE ".CategorieGoodie::ID . "=:".CategorieGoodie::ID."; ";
    const SQL_SUPPRIMER = "DELETE FROM ".CategorieGoodie::TABLE." WHERE ".CategorieGoodie::ID."=:".CategorieGoodie::ID.";";

    const SQL_RECUPERER_UNE = "SELECT * from ".CategorieGoodie::TABLE." WHERE ".CategorieGoodie::ID."=:".CategorieGoodie::ID.";";

    private static $connexion = null;

    const SELECT_TOUTES_LES_CATEGORIES = "select * from ". CategorieGoodie::TABLE;

    function __construct(){

        if(!self::$connexion) self::$connexion =  BaseDeDonnee::getConnexion();
    }

    public function recupererListeEntiteCategorieGoodie(){
        $requete = self::$connexion->prepare(self::SELECT_TOUTES_LES_CATEGORIES);

        $listeCategorie=[];
        $requete->execute();
        $curseur = $requete->fetchAll(PDO::FETCH_ASSOC);
        if (count($curseur) > 0) {
            foreach ($curseur as $maLigne) {
                $categorie = new CategorieGoodie((object)
                [
                    CategorieGoodie::ID => $maLigne[CategorieGoodie::ID],
                    CategorieGoodie::LIBELLE_FR =>$maLigne[CategorieGoodie::LIBELLE_FR],
                    CategorieGoodie::LIBELLE_EN =>$maLigne[CategorieGoodie::LIBELLE_EN]
                ]);
                $listeCategorie[] = $categorie;
            }
        }
        return $listeCategorie;
    }

    public function ajouter(CategorieGoodie $categorieGoodie){
        $requete = self::$connexion->prepare(self::SQL_AJOUTER);

        $libelleFr = $categorieGoodie->getLibelleFr();
        $libelleEn = $categorieGoodie->getLibelleEn();

        $requete->bindParam(":" . CategorieGoodie::LIBELLE_FR, $libelleFr, PDO::PARAM_STR);
        $requete->bindParam(":" . CategorieGoodie::LIBELLE_EN, $libelleEn, PDO::PARAM_STR);

        return $requete->execute();
    }

    public function modifier(CategorieGoodie $categorieGoodie)
    {
        $requete = self::$connexion->prepare(self::SQL_MODIFIER);

        $id = $categorieGoodie->getId();
        $libelleFr = $categorieGoodie->getLibelleFr();
        $libelleEn = $categorieGoodie->getLibelleEn();

        $requete->bindParam(":" . CategorieGoodie::LIBELLE_FR, $libelleFr, PDO::PARAM_STR);
        $requete->bindParam(":" . CategorieGoodie::LIBELLE_EN, $libelleEn, PDO::PARAM_STR);
        $requete->bindParam(":" . CategorieGoodie::ID, $id, PDO::PARAM_INT);

        return $requete->execute();
    }

    public function supprimer(int $id)
    {
        $requete = self::$connexion->prepare(self::SQL_SUPPRIMER);

        $requete->bindParam(":" . CategorieGoodie::ID, $id, PDO::PARAM_INT);

        return $requete->execute();
    }

    public function recupererCategorie($id)
    {

        $requete =  self::$connexion->prepare(self::SQL_RECUPERER_UNE);
        $requete->bindParam(":id",$id);
        $requete->execute();
        $curseur= $requete->fetch(PDO::FETCH_ASSOC);

        $categorie = new CategorieGoodie((object)
        [
            CategorieGoodie::ID => $curseur[CategorieGoodie::ID],
            CategorieGoodie::LIBELLE_FR =>$curseur[CategorieGoodie::LIBELLE_FR],
            CategorieGoodie::LIBELLE_EN =>$curseur[CategorieGoodie::LIBELLE_EN]

        ]);
        return $categorie;
    }
}