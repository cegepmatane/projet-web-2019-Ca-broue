<?php
    include_once "fragment/entete-fragment.php";
    include_once "fragment/liste-fragment.php";
    include_once "fragment/pied-de-page-fragment.php";

    $page = (object)
    [
        "titre" => "Gestion des bières",
        "titrePrincipal" => "Panneau d'adminstration - Ça Broue !",
        "type" => "biere",
        "liste" => [
            $biere = (object)[
                "nom" => "Labatt 50",
                "id" => "0"
            ],
            $biere = (object)[
                "nom" => "Molson Laurentide",
                "id" => "1"
            ]
        ]
    ];

    function afficherPage($page = null){
        if(!is_object($page))
            $page = (object)[];
        
        afficherEntete($page);

        afficherListe($page);
    }

    afficherPage($page);
    afficherPiedDePage($page);
?>