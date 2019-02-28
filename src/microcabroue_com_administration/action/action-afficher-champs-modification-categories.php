<?php
/**
 * Created by PhpStorm.
 * User: xela
 * Date: 28/02/19
 * Time: 11:03 AM
 */

require_once (CHEMIN_CODE."microcabroue_com_commun/accesseur/AccesseurEntiteCategorieGoodie.php");

$accesseurEntiteCategorie = new AccesseurEntiteCategorieGoodie();

$id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);

/** @var CategorieGoodie $categorie */
$categorie = $accesseurEntiteCategorie->recupererCategorie($id);


$page->titre = $page->titre . $categorie->getLibelleFr();
$page->categorie = $categorie;

afficherPage($page);