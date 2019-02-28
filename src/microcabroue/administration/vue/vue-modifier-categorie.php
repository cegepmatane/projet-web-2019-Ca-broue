<?php
/**
 * Created by PhpStorm.
 * User: xela
 * Date: 28/02/19
 * Time: 11:00 AM
 */

require_once ($_SERVER['CONFIGURATION_COMMUN']);
include_once "fragment/entete-fragment.php";
include_once "fragment/formulaire-fragment.php";
include_once "fragment/pied-de-page-fragment.php";

$page = (object)
[
    "titre" => "Gestion de ",
    "titrePrincipal" => "Panneau d'adminstration - Ça Broue !",
    "type" => "categorie",
    "action" => "modification",
    "urlRetour" => "./vue-liste-categories.php",
];

function afficherPage($page = null){
    if(!is_object($page))
        $page = (object)[];

    afficherEntete($page);
    afficherFormulaire($page);
    afficherPiedDePage($page);
}

require_once (CHEMIN_CODE."microcabroue_com_administration/action/action-afficher-champs-modification-categories.php");
