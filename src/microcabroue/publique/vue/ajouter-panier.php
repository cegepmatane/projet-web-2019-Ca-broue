<?php
require_once "../../commun/vue/fragment/entete-fragment.php";
require_once "../../commun/vue/fragment/pied-de-page-fragment.php";
require_once "../../commun/vue/fragment/a-cote-fragment.php";


$page = (object)
[
    "style" => "../../publique/decoration/goodie.css",
    "titre" => "Goudies",
    "titrePrincipal" => "Goudies",
    "itemMenuActif" => "boutique",
    "navigationRetourURL" => "",
    "navigationRetourTitre'" => "",
    "isNavigationRetour" => false,
    "goodie" => null,
];

function afficherPage($page = null){


    afficherEntete($page);


?> 