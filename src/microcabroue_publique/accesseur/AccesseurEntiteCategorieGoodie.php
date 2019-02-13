<?php
/**
 * Created by PhpStorm.
 * User: xela
 * Date: 06/02/19
 * Time: 12:45 PM
 */
require_once("BaseDeDonnee.php");
class AccesseurEntiteCategorieGoodie
{

    const SELECT_TOUTES_LES_CATEGORIES = "select * from ". CategorieGoodie::TABLE;

    public function recupererListeEntiteCategorieGoodie(){
        //$bdd = new PDO('mysql:host=localhost;dbname=cabroue;charset=utf8', 'root', 'floflo'); //TODO pour tester le base de donnees et la requete

        $listeCategorie=[];
        $curseur =$bdd->prepare(self::SELECT_TOUTES_LES_CATEGORIES);
        $curseur->execute();
        $donnees = $curseur->fetchAll(PDO::FETCH_ASSOC);
        if (count($donnees) > 0) {
            foreach ($donnees as $maLigne) {
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