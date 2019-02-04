<?php
include_once "../../commun/vue/fragment/entete-fragment.php";
include_once "../../commun/vue/fragment/pied-de-page-fragment.php";
include_once "../../commun/vue/fragment/a-cote-fragment.php";


$page = (object)
[
    "titre" => "Bière",
    "titrePrincipal" => "Bière",
    "itemMenuActif" => "bière", 
];

function afficherPage($page = null){

	afficherEntete($page);
?>	


<<?php

afficherPiedDePage($page);

}

afficherPage($page);