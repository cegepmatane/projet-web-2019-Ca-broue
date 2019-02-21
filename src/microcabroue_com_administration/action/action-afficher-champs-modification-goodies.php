<?php
    require_once (CHEMIN_CODE."microcabroue_com_commun/modele/Goodie.php");
    require_once (CHEMIN_CODE."microcabroue_com_commun/accesseur/AccesseurEntiteGoodie.php");
    require_once (CHEMIN_CODE."microcabroue_com_commun/accesseur/AccesseurEntiteCategorieGoodie.php");

    $accesseurEntiteGoodie = new AccesseurEntiteGoodie();
    $accesseurEntiteCategorie = new AccesseurEntiteCategorieGoodie();

    $id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);
    $goodie = $accesseurEntiteGoodie->recupererGoodie($id);
    $listeCategories = $accesseurEntiteCategorie->recupererListeEntiteCategorieGoodie();

    $page->titre = $page->titre . $goodie->getNomFr();
    $page->goodie = $goodie;
    $page->listeCategories = $listeCategories;
    
    afficherPage($page);
?>