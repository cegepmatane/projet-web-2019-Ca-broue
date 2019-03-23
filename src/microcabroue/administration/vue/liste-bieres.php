<?php
    include_once "fragment/entete-fragment.php";
    include_once "fragment/liste-fragment.php";
    include_once "fragment/pied-de-page-fragment.php";

    $page = (object)
    [
        "titre" => "Gestion des bières",
        "titrePrincipal" => "Panneau d'adminstration - Ça Broue !",
        "type" => "biere",
        "listeBieres" => [
            $biere = (object)[
                "nom" => "Labatt 50",
                "description" => "Une bonne tite 50 mon chum",
                "id" => "0"
            ],
            $biere = (object)[
                "nom" => "Molson Laurentide",
                "description" => "Tes un gars de banlieu ? pas de probleme tin un laurentide",
                "id" => "1"
            ]
        ]
    ];

    function afficherPage($page = null){
        if(!is_object($page))
            $page = (object)[];
        
        afficherEntete($page);
        preparerListe($page);
        afficherPiedDePage($page);
    }

    afficherPage($page);
?>