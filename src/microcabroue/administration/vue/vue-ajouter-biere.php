<?php
    include_once "fragment/entete-fragment.php";
    include_once "fragment/formulaire-fragment.php";
    include_once "fragment/pied-de-page-fragment.php";

    $page = (object)
    [
        // TODO verifier que le urlRetour est bon comme ca
        "titre" => "Ajout d'une bière",
        "titrePrincipal" => "Panneau d'adminstration - Ça Broue !",
        "type" => "biere",
        "action" => "ajout",
        "urlRetour" => "./vue-liste-bieres.php"
    ];
    
    function afficherPage($page = null){
        if(!is_object($page))
            $page = (object)[];
        
        afficherEntete($page);
        afficherFormulaire($page);
        afficherPiedDePage($page);
    }

    afficherPage($page);
?>