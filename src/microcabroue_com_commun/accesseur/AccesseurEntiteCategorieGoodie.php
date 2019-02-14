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
                    CategorieGoodie::LIBELLE_FR =>$maLigne[CategorieGoodie::LIBELLE_FR]
                ]);
                $listeCategorie[] = $categorie;
            }
        }
        return $listeCategorie;
    }
}