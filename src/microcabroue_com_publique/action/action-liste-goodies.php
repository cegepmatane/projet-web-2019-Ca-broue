<?php
/**
 * Created by PhpStorm.
 * User: xela
 * Date: 06/02/19
 * Time: 11:11 AM
 */

require_once(CHEMIN_CODE."microcabroue_com_commun/modele/Goodie.php");
require_once(CHEMIN_CODE."microcabroue_com_commun/modele/CategorieGoodie.php");
require_once(CHEMIN_CODE."microcabroue_com_commun/accesseur/AccesseurEntiteCategorieGoodie.php");
require_once(CHEMIN_CODE."microcabroue_com_commun/accesseur/AccesseurEntiteGoodie.php");

$accesseurEntiteCategorieGoodie = new AccesseurEntiteCategorieGoodie();
$accesseurEntiteGoodie = new AccesseurEntiteGoodie();


$listeCategoriesGoodies=$accesseurEntiteCategorieGoodie->recupererListeEntiteCategorieGoodie();
if(!isset($_GET['categorie'])){
    $listeGoodies =$accesseurEntiteGoodie->recupererListeEntiteGoodie();
}else{
    $page->categorieSelectionnee=$_GET['categorie'];
    $listeGoodies=$accesseurEntiteGoodie->recupererListeEntiteGoodieParCategorie($page->categorieSelectionnee);
}

$page->listeGoodies = $listeGoodies;
$page->listeCategorieGoodies = $listeCategoriesGoodies;
/*
Un message peut être affiché à l'ouverture de la page
*/
$page->message = $_GET["message"] ?? "";

afficherPage($page);
