<?php
    include_once "fragment/entete-fragment.php";
    include_once "fragment/liste-fragment.php";
    include_once "fragment/pied-de-page-fragment.php";

    $page = (object)
    [
        "titre" => "Gestion des utilisateurs",
        "titrePrincipal" => "Panneau d'adminstration - Ça Broue !",
        "type" => "utilisateur",
        "liste" => [
            $biere = (object)[
                "nom" => "Joe Blow",
                "id" => "0"
            ],
            $biere = (object)[
                "nom" => "Jean-Denis Tremblay",
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