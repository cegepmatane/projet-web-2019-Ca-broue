<?php
/**
 * Created by PhpStorm.
 * User: xela
 * Date: 27/02/19
 * Time: 3:17 PM
 */

require_once (CHEMIN_CODE."microcabroue_com_commun/accesseur/AccesseurEntiteCategorieGoodie.php");
$accesseurEntiteCategorie = new AccesseurEntiteCategorieGoodie();

if(isset($_POST["action-modifier"]) && ($_POST["action-modifier"] == "ajout" || $_POST["action-modifier"] == "modification" || $_POST["action-modifier"] == "suppression")){
    $filtreCategorie = array(
        CategorieGoodie::ID => FILTER_SANITIZE_NUMBER_INT,
        CategorieGoodie::LIBELLE_FR => FILTER_SANITIZE_STRING,
        CategorieGoodie::LIBELLE_EN => FILTER_SANITIZE_STRING,
    );

    $categorieTemp = filter_var_array($_POST, $filtreCategorie);

    $categorie = new CategorieGoodie((object)
    [
        CategorieGoodie::ID => $categorieTemp[CategorieGoodie::ID],
        CategorieGoodie::LIBELLE_FR => $categorieTemp[CategorieGoodie::LIBELLE_FR],
        CategorieGoodie::LIBELLE_EN => $categorieTemp[CategorieGoodie::LIBELLE_EN],
    ]);

    if($_POST["action-modifier"] == "ajout")
        $accesseurEntiteCategorie->ajouter($categorie);
    else if($_POST["action-modifier"] == "modification")
        $accesseurEntiteCategorie->modifier($categorie);
    else if($_POST["action-modifier"] == "suppression")
        $accesseurEntiteCategorie->supprimer($categorie->getId());

    // header('Location: accueil');
}