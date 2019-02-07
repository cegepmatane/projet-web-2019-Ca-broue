<?php
    include_once "fragment/entete-fragment.php";
    include_once "fragment/modification-fragment.php";
    include_once "fragment/pied-de-page-fragment.php";

    $page = (object)
    [
        // TODO Changer les information pour les information recuillit de la bd avec le id
        "titre" => "Gestion de ". $_GET["id"],
        "titrePrincipal" => "Panneau d'adminstration - Ça Broue !",
        "type" => "goodie",
        "action" => "modification",
        "urlRetour" => "./vue-liste-goodies.php",
        "listeChamps" => [
            "labelNom" => '<label for="nom">Nom du goodie</label>',
            "champNom" => "<input name='nom' id='nom-modification-goodie' type='text' value='Nom'>",
            "labelDescription" => '<label for="description">Description du goodie</label>',
            "champDescription" => "<textarea name='description' id='description-modification-goodie' cols='30' rows='10'>Description</textarea>",
            "labelPrix" => '<label for="prix">Prix du goodie</label>',
            "champPrix" => '<input type="text" name="prix" id="prix-modification-goodie" value="40 $">'
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