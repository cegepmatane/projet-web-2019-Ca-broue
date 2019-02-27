<?php
/**
 * Created by PhpStorm.
 * User: xela
 * Date: 27/02/19
 * Time: 2:46 PM
 */


require_once (CHEMIN_SRC_DEV."microcabroue_com_commun/modele/CategorieGoodie.php");
require_once (CHEMIN_SRC_DEV."microcabroue_com_commun/accesseur/AccesseurEntiteCategorieGoodie.php");

$accesseurEntiteCategorieGoodie = new AccesseurEntiteCategorieGoodie();

$listeCategorie = $accesseurEntiteCategorieGoodie->recupererListeEntiteCategorieGoodie();

$page->listeCategorieGoodies = $listeCategorie;

afficherPage($page);
