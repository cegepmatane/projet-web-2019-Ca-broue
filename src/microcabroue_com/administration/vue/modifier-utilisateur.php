<?php
    include_once "fragment/entete-fragment.php";
    include_once "fragment/formulaire-fragment.php";
    include_once "fragment/pied-de-page-fragment.php";

    $page = (object)
    [
        "titre" => "Gestion de ",
        "titrePrincipal" => "Panneau d'adminstration - Ça Broue !",
        "type" => "utilisateur",
        "action" => "modification",
        "urlRetour" => "./vue-liste-utilisateurs.php",
    ];
    
    function afficherPage($page = null){
        if(!is_object($page))
            $page = (object)[];
        
        afficherEntete($page);
        afficherFormulaire($page);
        afficherPiedDePage($page);
    }

    // afficherPage($page);
    require_once (CHEMIN_CODE."microcabroue_com_administration/action/action-afficher-champs-modification-utilisateur.php");
?>