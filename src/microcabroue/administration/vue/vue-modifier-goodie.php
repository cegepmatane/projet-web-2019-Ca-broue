<?php
    include_once "fragment/entete-fragment.php";
    include_once "fragment/formulaire-fragment.php";
    include_once "fragment/pied-de-page-fragment.php";

    $page = (object)
    [
        // TODO Changer les information pour les information recuillit de la bd avec le id
        "titre" => "Gestion de ". $_GET["id"],
        "titrePrincipal" => "Panneau d'adminstration - Ça Broue !",
        "type" => "goodie",
        "action" => "modification",
        "urlRetour" => "./vue-liste-goodies.php",
        "goodie" => (object)[
            "nom" => "Biscuits",
            "description" => "Aux chipites de chocolat",
            "prix" => "3$"
        ]
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