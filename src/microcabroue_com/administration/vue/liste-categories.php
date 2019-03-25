<?php
/**
 * Created by PhpStorm.
 * User: xela
 * Date: 27/02/19
 * Time: 2:44 PM
 */

require_once ($_SERVER['CONFIGURATION_COMMUN']);
include_once "fragment/entete-fragment.php";
include_once "fragment/liste-fragment.php";
include_once "fragment/pied-de-page-fragment.php";


$page = (object)
[
    "titre" => "Gestion des catégories",
    "titrePrincipal" => "Panneau d'adminstration - Ça Broue !",
    "type" => "categorie",
];

function afficherPage($page = null){
    if(!is_object($page))
        $page = (object)[];

    afficherEntete($page);
    preparerListe($page);
    afficherPiedDePage($page);
}

//afficherPage($page);
require_once (CHEMIN_CODE."microcabroue_com_administration/action/action-liste-categorie.php");