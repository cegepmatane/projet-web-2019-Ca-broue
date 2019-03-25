<?php
    require_once (CHEMIN_CODE."microcabroue_com_commun/modele/Goodie.php");
    require_once (CHEMIN_CODE."microcabroue_com_commun/accesseur/AccesseurEntiteGoodie.php");

    $accesseurEntiteGoodie = new AccesseurEntiteGoodie();

    $listeGoodies = $accesseurEntiteGoodie->recupererListeEntiteGoodie();

    $page->listeGoodies = $listeGoodies;
    
    afficherPage($page);
?>