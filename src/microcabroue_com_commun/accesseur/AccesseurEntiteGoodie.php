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

    public function recupererGoodie($id_goodie)
    {
        $SQL_RECUPERER = " SELECT * FROM goodie where id = " . $id_goodie;
        
        
        $requete =  self::$connexion->prepare($SQL_RECUPERER);
        $requete->bindParam(":id",$id_goodie);
        $requete->execute();
        $donnee_goodie = $requete->fetch(PDO::FETCH_ASSOC);
        var_dump($donnee_goodie);

        $goodie = new Goodie((object)
                [
                    Goodie::ID => $donnee_goodie[Goodie::ID],
                    Goodie::NOM_FR =>$donnee_goodie[Goodie::NOM_FR],
                    Goodie::NOM_EN =>$donnee_goodie[Goodie::NOM_EN],
                    Goodie::DESCRIPTION_FR =>$donnee_goodie[Goodie::DESCRIPTION_FR],
                    Goodie::DESCRIPTION_EN =>$donnee_goodie[Goodie::DESCRIPTION_EN],
                    Goodie::DESCRIPTION_LONGUE_EN =>$donnee_goodie[Goodie::DESCRIPTION_LONGUE_EN],
                    Goodie::DESCRIPTION_LONGUE_FR =>$donnee_goodie[Goodie::DESCRIPTION_LONGUE_FR],
                ]);
                return $goodie;
    }


}