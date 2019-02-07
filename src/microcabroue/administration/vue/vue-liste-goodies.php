<?php
    include_once "fragment/entete-fragment.php";
    include_once "fragment/liste-fragment.php";
    include_once "fragment/pied-de-page-fragment.php";

    $page = (object)
    [
        "titre" => "Gestion des goodies",
        "titrePrincipal" => "Panneau d'adminstration - Ça Broue !",
        "type" => "goodie",
        "liste" => [
            $goodie = (object)[
                "nom" => "Goodie",
                "id" => "0"
            ],
            $goodie = (object)[
                "nom" => "Goodie2",
                "id" => "1"
            ]
        ]
    ];

    function afficherPage($page = null){
        if(!is_object($page))
            $page = (object)[];
        
        afficherEntete($page);
        afficherListe($page);
        afficherPiedDePage($page);
    }

    afficherPage($page);
?>