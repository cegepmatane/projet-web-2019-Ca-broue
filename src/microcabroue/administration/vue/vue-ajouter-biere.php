<?php
    include_once "fragment/entete-fragment.php";
    include_once "fragment/modification-fragment.php";
    include_once "fragment/pied-de-page-fragment.php";

    $page = (object)
    [
        // TODO verifier que le urlRetour est bon comme ca
        "titre" => "Ajout d'une bière",
        "titrePrincipal" => "Panneau d'adminstration - Ça Broue !",
        "type" => "biere",
        "action" => "ajout",
        "urlRetour" => "./vue-liste-bieres.php",
        "listeChamps" => [
            "labelMarque" => '<label for="marque">Marque de la bière</label>',
            "champMarque" => "<input name='marque' id='marque-ajout-biere' type='text'>",
            "labelDescription" => '<label for="description">Description de la bière</label>',
            "champDescription" => "<textarea name='description' id='description-ajout-biere' cols='30' rows='10'></textarea>",
            "labelPourcentageAlcool" => '<label for="pourcentage">Pourcentage d\'alcool de la bière</label>',
            "champPourcentageAlcool" => '<input type="text" name="pourcentage" id="pourcentage-alcool-ajout-biere">'
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