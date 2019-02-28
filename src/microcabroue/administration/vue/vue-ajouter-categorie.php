<?php
/**
 * Created by PhpStorm.
 * User: xela
 * Date: 27/02/19
 * Time: 3:47 PM
 */
require_once ($_SERVER['CONFIGURATION_COMMUN']);
include_once "fragment/entete-fragment.php";
include_once "fragment/formulaire-fragment.php";
include_once "fragment/pied-de-page-fragment.php";

$page = (object)
[
    // TODO verifier que le urlRetour est bon comme ca
    "titre" => "Ajout d'une categorie",
    "titrePrincipal" => "Panneau d'adminstration - Ça Broue !",
    "type" => "categorie",
    "action" => "ajout",
    "urlRetour" => "./vue-liste-categories.php"
];

function afficherPage($page = null){
    if(!is_object($page))
        $page = (object)[];

    afficherEntete($page);
    afficherFormulaire($page);
    afficherPiedDePage($page);
}

afficherPage($page);
