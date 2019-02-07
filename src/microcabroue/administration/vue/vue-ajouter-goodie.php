<?php
    include_once "fragment/entete-fragment.php";
    include_once "fragment/modification-fragment.php";
    include_once "fragment/pied-de-page-fragment.php";

    $page = (object)
    [
        // TODO verifier que le urlRetour est bon comme ca
        "titre" => "Ajout d'un goodie",
        "titrePrincipal" => "Panneau d'adminstration - Ça Broue !",
        "type" => "goodie",
        "action" => "ajout",
        "urlRetour" => "./vue-liste-goodies.php",
        "listeChamps" => [
            "labelNom" => '<label for="nom">Nom du goodie</label>',
            "champNom" => "<input name='nom' id='nom-ajout-goodie' type='text'>",
            "labelDescription" => '<label for="description">Description du goodie</label>',
            "champDescription" => "<textarea name='description' id='description-ajout-goodie' cols='30' rows='10'></textarea>",
            "labelPrix" => '<label for="prix">Prix du goodie</label>',
            "champPrix" => '<input type="text" name="prix" id="prix-ajout-goodie">'
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