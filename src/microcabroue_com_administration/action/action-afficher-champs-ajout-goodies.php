<?php
    require_once (CHEMIN_CODE."microcabroue_com_commun/accesseur/AccesseurEntiteCategorieGoodie.php");

    $accesseurEntiteCategorie = new AccesseurEntiteCategorieGoodie();

    $listeCategories = $accesseurEntiteCategorie->recupererListeEntiteCategorieGoodie();

    $page->listeCategories = $listeCategories;
    
    afficherPage($page);
?>