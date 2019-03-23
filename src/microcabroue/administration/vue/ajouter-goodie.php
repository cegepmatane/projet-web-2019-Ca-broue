<?php
    require_once ($_SERVER['CONFIGURATION_COMMUN']);
    include_once "fragment/entete-fragment.php";
    include_once "fragment/formulaire-fragment.php";
    include_once "fragment/pied-de-page-fragment.php";

    $page = (object)
    [
        // TODO verifier que le urlRetour est bon comme ca
        "titre" => "Ajout d'un goodie",
        "titrePrincipal" => "Panneau d'adminstration - Ça Broue !",
        "type" => "goodie",
        "action" => "ajout",
        "urlRetour" => "./vue-liste-goodies.php"
    ];
    
    function afficherPage($page = null){
        if(!is_object($page))
            $page = (object)[];
        
        afficherEntete($page);
        afficherFormulaire($page);
        afficherPiedDePage($page);
    }

    // afficherPage($page);
    require_once (CHEMIN_CODE."microcabroue_com_administration/action/action-afficher-champs-ajout-goodies.php");
?>