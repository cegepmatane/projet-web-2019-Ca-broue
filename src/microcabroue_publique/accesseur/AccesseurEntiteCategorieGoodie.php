<?php
/**
 * Created by PhpStorm.
 * User: xela
 * Date: 06/02/19
 * Time: 12:45 PM
 */

class AccesseurEntiteCategorieGoodie
{

    public function recupererListeEntiteCategorieGoodie(){
        $listeCategorie=[];
        $listeCategorie[]= new CategorieGoodie((object)
        [
            "libelle" =>"Poster",
            "id" => 1
        ]);
        $listeCategorie[]= new CategorieGoodie((object)
        [
            "libelle" =>"Buck",
            "id" => 2
        ]);
        $listeCategorie[]= new CategorieGoodie((object)
        [
            "libelle" =>"Vêtements",
            "id" => 3
        ]);
        return $listeCategorie;
    }
}