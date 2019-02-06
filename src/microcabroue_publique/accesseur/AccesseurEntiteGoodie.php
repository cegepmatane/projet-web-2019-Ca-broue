<?php
/**
 * Created by PhpStorm.
 * User: xela
 * Date: 06/02/19
 * Time: 12:46 PM
 */

class AccesseurEntiteGoodie
{
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
}