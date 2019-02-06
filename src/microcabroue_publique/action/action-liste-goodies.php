<?php
/**
 * Created by PhpStorm.
 * User: xela
 * Date: 06/02/19
 * Time: 11:11 AM
 */

require_once("../../../microcabroue_publique/modele/Goodie.php");
require_once("../../../microcabroue_publique/modele/CategorieGoodie.php");
require_once("../../../microcabroue_publique/accesseur/AccesseurEntiteCategorieGoodie.php");
$accesseurEntiteCategorieGoodie = new AccesseurEntiteCategorieGoodie();

$listeCategoriesGoodies=$accesseurEntiteCategorieGoodie->recupererListeEntiteCategorieGoodie();

$listeGoodies = [
    new Goodie((object)
    [
        "nom" =>"Goodie 1",
        "description" => "Sébastien",
        "prix" => "bois.sebastien@moncouriel.com",
        "id" => 0
    ]),
    new Goodie((object)
    [
        "nom" =>"Goodie 2",
        "description" => "Sébastien",
        "prix" => "bois.sebastien@moncouriel.com",
        "id" => 1
    ]), new Goodie((object)
    [
        "nom" =>"Goodie 3",
        "description" => "Sébastien",
        "prix" => "bois.sebastien@moncouriel.com",
        "id" => 3
    ])
];

$page->listeGoodies = $listeGoodies;
$page->listeCategorieGoodies = $listeCategoriesGoodies;
/*
Un message peut être affiché à l'ouverture de la page
*/
$page->message = $_GET["message"] ?? "";

afficherPage($page);
