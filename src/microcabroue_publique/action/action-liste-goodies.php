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
require_once("../../../microcabroue_publique/accesseur/AccesseurEntiteGoodie.php");
$accesseurEntiteCategorieGoodie = new AccesseurEntiteCategorieGoodie();
$accesseurEntiteGoodie = new AccesseurEntiteGoodie();

$listeCategoriesGoodies=$accesseurEntiteCategorieGoodie->recupererListeEntiteCategorieGoodie();
if(!isset($page->categorieSelectionnee)){
    $listeGoodies =$accesseurEntiteGoodie->recupererListeEntiteGoodie();
}else{
    $listeGoodies=[]; //TODO recupérer la liste pour la catégorie sélectionnee
}

$page->listeGoodies = $listeGoodies;
$page->listeCategorieGoodies = $listeCategoriesGoodies;
/*
Un message peut être affiché à l'ouverture de la page
*/
$page->message = $_GET["message"] ?? "";

afficherPage($page);
