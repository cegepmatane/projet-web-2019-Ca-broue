<?php
    include_once "fragment/entete-fragment.php";
    include_once "fragment/modification-fragment.php";
    include_once "fragment/pied-de-page-fragment.php";

    $page = (object)
    [
        // TODO Changer les information pour les information recuillit de la bd avec le id
        "titre" => "Gestion de Bobby",
        "titrePrincipal" => "Panneau d'adminstration - Ça Broue !",
        "type" => "utilisateur",
        "action" => "modification",
        "urlRetour" => "./vue-liste-utilisateurs.php",
        "listeChamps" => [
            "labelNomUtilisateur" => '<label for="nom-utilisateur">Nom</label>',
            "nomUtilisateur" => '<div name="nom-utilisateur">Joe33</div>',
            "labelRole" => '<label for="role">Rôle de l\'utilisateur</label>',
            "role" => '<input type="checkbox" name="role" id="role-modification-utilisateur" value="Admin" checked><div>Administrateur</div>'
        ]
    ];
    
    function afficherPage($page = null){
        if(!is_object($page))
            $page = (object)[];
        
        afficherEntete($page);

        afficherChamps($page);
    }

    afficherPage($page);
    afficherPiedDePage($page);
?>