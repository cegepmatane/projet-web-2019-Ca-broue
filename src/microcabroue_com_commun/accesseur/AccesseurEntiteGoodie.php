<?php
/**
 * Created by PhpStorm.
 * User: xela
 * Date: 06/02/19
 * Time: 12:46 PM
 */
require_once("BaseDeDonnee.php");


class AccesseurEntiteGoodie
{
    const SELECT_GOODIES_PAR_CATEGORIE = "select * from ". Goodie::TABLE ." WHERE ".Goodie::ID_CATEGORIE."=:id_categorie";
    const SQL_AJOUTER = "INSERT INTO ".Goodie::TABLE."(".Goodie::ID_CATEGORIE.", ".Goodie::NOM_FR.", ".Goodie::NOM_EN.", ".Goodie::PRIX.", ".Goodie::DESCRIPTION_FR.", ".Goodie::DESCRIPTION_EN.", ".Goodie::DESCRIPTION_LONGUE_EN.", ".Goodie::DESCRIPTION_LONGUE_FR.") VALUES(:".Goodie::ID_CATEGORIE.", :".Goodie::NOM_FR.", :".Goodie::NOM_EN.", :".Goodie::PRIX.", :".Goodie::DESCRIPTION_FR.", :".Goodie::DESCRIPTION_EN.", :".Goodie::DESCRIPTION_LONGUE_EN.", :".Goodie::DESCRIPTION_LONGUE_FR.");";
    const SQL_MODIFIER = "UPDATE ".Goodie::TABLE." SET ".Goodie::ID_CATEGORIE."=:".Goodie::ID_CATEGORIE.", ".Goodie::NOM_FR."=:".Goodie::NOM_FR.", ".Goodie::NOM_EN."=:".Goodie::NOM_EN.", ".Goodie::PRIX."=:".Goodie::PRIX.", ".Goodie::DESCRIPTION_FR."=:".Goodie::DESCRIPTION_FR.", ".Goodie::DESCRIPTION_EN."=:".Goodie::DESCRIPTION_EN.", ".Goodie::DESCRIPTION_LONGUE_EN."=:".Goodie::DESCRIPTION_LONGUE_EN.", ".Goodie::DESCRIPTION_LONGUE_FR."=:".Goodie::DESCRIPTION_LONGUE_FR." WHERE ".Goodie::ID."=:".Goodie::ID.";";
    const SQL_SUPPRIMER = "DELETE FROM ".Goodie::TABLE." WHERE ".Goodie::ID."=:".Goodie::ID.";";
    const SQL_GOODIES_DETAIL = "SELECT * FROM " .Goodie::TABLE ." WHERE " .Goodie::ID."=".Goodie::ID. ";";

    private static $connexion = null;

    function __construct(){

        if(!self::$connexion) self::$connexion =  BaseDeDonnee::getConnexion();
    }

    /***
     * Recupere tous les goodies
     * @return mixed
     */
    public function recupererListeEntiteGoodie(){
        $requete = self::$connexion->prepare("select * from ".Goodie::TABLE);

        $listeGoodie=[];
        $requete->execute();
        $donnees = $requete->fetchAll(PDO::FETCH_ASSOC);
        if (count($donnees) > 0) {
            foreach ($donnees as $maLigne) {
                $goodie = new Goodie((object)
                [
                    Goodie::ID => $maLigne[Goodie::ID],
                    Goodie::NOM_FR =>$maLigne[Goodie::NOM_FR],
                    Goodie::NOM_EN =>$maLigne[Goodie::NOM_EN],
                    Goodie::PRIX => $maLigne[Goodie::PRIX],
                    Goodie::DESCRIPTION_FR =>$maLigne[Goodie::DESCRIPTION_FR],
                    Goodie::DESCRIPTION_EN =>$maLigne[Goodie::DESCRIPTION_EN],
                    Goodie::DESCRIPTION_LONGUE_EN =>$maLigne[Goodie::DESCRIPTION_LONGUE_EN],
                    Goodie::DESCRIPTION_LONGUE_FR =>$maLigne[Goodie::DESCRIPTION_LONGUE_FR],
                ]);
                $listeGoodie[] = $goodie;
            }
        }

        return $listeGoodie;
    }

    /***
     * Lister tous les goodies d'une categorie
     * @param int $id_categorie
     * @return array
     */
    public function recupererListeEntiteGoodieParCategorie(int $id_categorie){
        $requete = self::$connexion->prepare(self::SELECT_GOODIES_PAR_CATEGORIE);

        $listeGoodie=[];
        $requete->bindParam(":id_categorie",$id_categorie);
        $requete->execute();
        $donnees = $requete->fetchAll(PDO::FETCH_ASSOC);
        if (count($donnees) > 0) {
            foreach ($donnees as $maLigne) {
                $goodie = new Goodie((object)
                [
                    Goodie::ID => $maLigne[Goodie::ID],
                    Goodie::NOM_FR =>$maLigne[Goodie::NOM_FR],
                    Goodie::NOM_EN =>$maLigne[Goodie::NOM_EN],
                    Goodie::PRIX => $maLigne[Goodie::PRIX],
                    Goodie::DESCRIPTION_FR =>$maLigne[Goodie::DESCRIPTION_FR],
                    Goodie::DESCRIPTION_EN =>$maLigne[Goodie::DESCRIPTION_EN],
                    Goodie::DESCRIPTION_LONGUE_EN =>$maLigne[Goodie::DESCRIPTION_LONGUE_EN],
                    Goodie::DESCRIPTION_LONGUE_FR =>$maLigne[Goodie::DESCRIPTION_LONGUE_FR],
                ]);
                $listeGoodie[] = $goodie;
            }
        }
        return $listeGoodie;
    }

    public function recupererGoodie(int $idGoodie)
    {
        $requete =  self::$connexion->prepare(self::SQL_GOODIES_DETAIL);

        $requete->bindParam(":id",$idGoodie);
        $requete->execute();
        $donneeGoodie= $requete->fetch(PDO::FETCH_ASSOC);

        $goodie = new Goodie((object)
                [
                    Goodie::ID => $donneeGoodie[Goodie::ID],
                    Goodie::ID_CATEGORIE => $donneeGoodie[Goodie::ID_CATEGORIE],
                    Goodie::NOM_FR =>$donneeGoodie[Goodie::NOM_FR],
                    Goodie::NOM_EN =>$donneeGoodie[Goodie::NOM_EN],
                    Goodie::PRIX => $donneeGoodie[Goodie::PRIX],
                    Goodie::DESCRIPTION_FR =>$donneeGoodie[Goodie::DESCRIPTION_FR],
                    Goodie::DESCRIPTION_EN =>$donneeGoodie[Goodie::DESCRIPTION_EN],
                    Goodie::DESCRIPTION_LONGUE_EN =>$donneeGoodie[Goodie::DESCRIPTION_LONGUE_EN],
                    Goodie::DESCRIPTION_LONGUE_FR =>$donneeGoodie[Goodie::DESCRIPTION_LONGUE_FR],
                ]);
                return $goodie;
    }

    public function ajouter(Goodie $goodie){
        $requete = self::$connexion->prepare(self::SQL_AJOUTER);
        
        $idCategorie = $goodie->getIdCategorie();
        $nomFr = $goodie->getNomFr();
        $nomEn = $goodie->getNomEn();
        $prix = $goodie->getPrix();
        $descriptionFr = $goodie->getDescriptionFr();
        $descriptionEn = $goodie->getDescriptionEn();
        $descriptionLongueEn = $goodie->getDescriptionLongueEn();
        $descriptionLongueFr = $goodie->getDescriptionLongueFr();

        $requete->bindParam(":" . Goodie::ID_CATEGORIE, $idCategorie, PDO::PARAM_INT);
        $requete->bindParam(":" . Goodie::NOM_FR, $nomFr, PDO::PARAM_STR);
        $requete->bindParam(":" . Goodie::NOM_EN, $nomEn, PDO::PARAM_STR);
        $requete->bindParam(":" . Goodie::PRIX, $prix, PDO::PARAM_STR);
        $requete->bindParam(":" . Goodie::DESCRIPTION_FR, $descriptionFr, PDO::PARAM_STR);
        $requete->bindParam(":" . Goodie::DESCRIPTION_EN, $descriptionEn, PDO::PARAM_STR);
        $requete->bindParam(":" . Goodie::DESCRIPTION_LONGUE_EN, $descriptionLongueEn, PDO::PARAM_STR);
        $requete->bindParam(":" . Goodie::DESCRIPTION_LONGUE_FR, $descriptionLongueFr, PDO::PARAM_STR);

        return $requete->execute();
    }

    public function modifier(Goodie $goodie){
        $requete = self::$connexion->prepare(self::SQL_MODIFIER);

        $id = $goodie->getId();
        $idCategorie = $goodie->getIdCategorie();
        $nomFr = $goodie->getNomFr();
        $nomEn = $goodie->getNomEn();
        $prix = $goodie->getPrix();
        $descriptionFr = $goodie->getDescriptionFr();
        $descriptionEn = $goodie->getDescriptionEn();
        $descriptionLongueEn = $goodie->getDescriptionLongueEn();
        $descriptionLongueFr = $goodie->getDescriptionLongueFr();
        
        $requete->bindParam(":" . Goodie::ID, $id, PDO::PARAM_INT);
        $requete->bindParam(":" . Goodie::ID_CATEGORIE, $idCategorie, PDO::PARAM_INT);
        $requete->bindParam(":" . Goodie::NOM_FR, $nomFr, PDO::PARAM_STR);
        $requete->bindParam(":" . Goodie::NOM_EN, $nomEn, PDO::PARAM_STR);
        $requete->bindParam(":" . Goodie::PRIX, $prix, PDO::PARAM_STR);
        $requete->bindParam(":" . Goodie::DESCRIPTION_FR, $descriptionFr, PDO::PARAM_STR);
        $requete->bindParam(":" . Goodie::DESCRIPTION_EN, $descriptionEn, PDO::PARAM_STR);
        $requete->bindParam(":" . Goodie::DESCRIPTION_LONGUE_EN, $descriptionLongueEn, PDO::PARAM_STR);
        $requete->bindParam(":" . Goodie::DESCRIPTION_LONGUE_FR, $descriptionLongueFr, PDO::PARAM_STR);
        
        return $requete->execute();
    }

    function supprimer(int $id){
        $requete = self::$connexion->prepare(self::SQL_SUPPRIMER);

        $requete->bindParam(":" . Goodie::ID, $id, PDO::PARAM_INT);

        return $requete->execute();
    }
}