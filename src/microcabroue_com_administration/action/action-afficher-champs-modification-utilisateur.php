<?php
    require_once (CHEMIN_CODE."microcabroue_com_commun/modele/Utilisateur.php");
    require_once (CHEMIN_CODE."microcabroue_com_commun/accesseur/AccesseurUtilisateur.php");

    $accesseurUtilisateur = new AccesseurUtilisateur();

    $id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);
    $utilisateur = $accesseurUtilisateur->recevoirUtilisateur($id);

    $page->titre = $page->titre . $utilisateur->getPrenom();
    $page->utilisateur = $utilisateur;
    
    afficherPage($page);
?>