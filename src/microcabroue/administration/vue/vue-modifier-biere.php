<?php
    include_once "fragment/entete-fragment.php";
    include_once "fragment/formulaire-fragment.php";
    include_once "fragment/pied-de-page-fragment.php";

    $page = (object)
    [
        // TODO Changer les information pour les information recuillit de la bd avec le id
        "titre" => "Gestion de ",
        "titrePrincipal" => "Panneau d'adminstration - Ça Broue !",
        "type" => "biere",
        "action" => "modification",
        "urlRetour" => "./vue-liste-bieres.php",
        "biere" => (object)[
            "marque" => "Labatt 50",
            "description" => "Meilleure biere au monde",
            "pourcentageAlcool" => "5%"
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