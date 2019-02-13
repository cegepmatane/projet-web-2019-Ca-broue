<?php
/**
 * Created by PhpStorm.
 * User: xela
 * Date: 06/02/19
 * Time: 12:46 PM
 */

class AccesseurEntiteGoodie
{
    const SELECT_GOODIES_PAR_CATEGORIE = "select * from ". CategorieGoodie::TABLE ." WHERE ".Goodie::ID_CATEGORIE."=:id_categorie";

    public function recupererListeEntiteGoodie(){

        $listeGoodies = [
            new Goodie((object)
            [
                "nom" =>"Goodie 1",
                "description" => "Desc dsdslfpdslfkdskfsd kfs,dlf,sdkl,f l,slf, sdl;f lsd;fklsd,klf,sdkl,fkds,fkejrifhs",
                "prix" => 12.45,
                "id" => 0
            ]),
            new Goodie((object)
            [
                "nom" =>"Goodie 2",
                "description" => "fisdhfuhsofkspi ihfosjf ifs qifyqsu ràçbfdshjbdsu hfbsdhjfshbfiuze ifhsiuhfusd ",
                "prix" => 36.12,
                "id" => 1
            ]), new Goodie((object)
            [
                "nom" =>"Goodie 3",
                "description" => " ihfiushfdihs jfhdsj fjdss hfuzdvqhgdvuysgduzehfishqfhjbsd jhfbsdhjbfjdbfdb fdb hfjd jfbs bfjsdbfhjsb",
                "prix" => 50.55,
                "id" => 3
            ])
        ];

        return $listeGoodies;
    }

    public function recupererListeEntiteGoodieParCategorie(int $id_categorie){
        $bdd = new PDO('mysql:host=localhost;dbname=cabroue;charset=utf8', 'root', 'floflo'); //TODO pour tester le base de donnees et la requete
        $listeGoodie=[];
        $curseur =$bdd->prepare(self::SELECT_GOODIES_PAR_CATEGORIE);
        $curseur->bindParam(":id_categorie",$id_categorie);
        $curseur->execute();
        $donnees = $curseur->fetchAll(PDO::FETCH_ASSOC);
        if (count($donnees) > 0) {
            foreach ($donnees as $maLigne) {
                $goodie = new Goodie((object)
                [
                    Goodie::ID => $maLigne[Goodie::ID],
                    Goodie::NOM_FR =>$maLigne[Goodie::NOM_FR],
                    Goodie::NOM_EN =>$maLigne[Goodie::NOM_EN],
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
}