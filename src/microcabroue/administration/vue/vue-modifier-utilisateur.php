<?php
    include_once "fragment/entete-fragment.php";
    include_once "fragment/formulaire-fragment.php";
    include_once "fragment/pied-de-page-fragment.php";

    $page = (object)
    [
        // TODO Changer les information pour les information recuillit de la bd avec le id
        "titre" => "Gestion de Bobby",
        "titrePrincipal" => "Panneau d'adminstration - Ça Broue !",
        "type" => "utilisateur",
        "action" => "modification",
        "urlRetour" => "./vue-liste-utilisateurs.php",
        "utilisateur" => (object)[
            "nomUtilisateur" => "ti-paulSarte33",
            "isAdmin" => true
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