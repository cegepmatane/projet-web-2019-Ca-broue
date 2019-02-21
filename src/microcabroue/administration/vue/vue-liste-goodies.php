<?php
    require_once ($_SERVER['CONFIGURATION_COMMUN']);
    include_once "fragment/entete-fragment.php";
    include_once "fragment/liste-fragment.php";
    include_once "fragment/pied-de-page-fragment.php";
    

    $page = (object)
    [
        "titre" => "Gestion des goodies",
        "titrePrincipal" => "Panneau d'adminstration - Ça Broue !",
        "type" => "goodie",
    ];

    function afficherPage($page = null){
        if(!is_object($page))
            $page = (object)[];
        
        afficherEntete($page);
        preparerListe($page);
        afficherPiedDePage($page);
    }

    //afficherPage($page);
    require_once (CHEMIN_CODE."microcabroue_com_administration/action/action-liste-goodies.php");
?>