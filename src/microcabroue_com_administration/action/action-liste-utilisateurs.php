<?php
    require_once (CHEMIN_CODE."microcabroue_com_commun/modele/Utilisateur.php");
    require_once (CHEMIN_CODE."microcabroue_com_commun/accesseur/AccesseurUtilisateur.php");

    $accesseurUtilisateur = new AccesseurUtilisateur();

    $listeUtilisateurs = $accesseurUtilisateur->recupererUtilisateurs();

    $page->listeUtilisateurs = $listeUtilisateurs;
    
    afficherPage($page);
?>