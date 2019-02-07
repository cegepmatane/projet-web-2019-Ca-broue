<?php
include_once "../../commun/vue/fragment/entete-fragment.php";
include_once "../../commun/vue/fragment/pied-de-page-fragment.php";
include_once "../../commun/vue/fragment/a-cote-fragment.php";

$page = (object)
[
    "titre" => "Goudies",
    "titrePrincipal" => "Goudies",
    "itemMenuActif" => "boutique",
];

echo "<h1>VUE GOODIE</h1>";
function afficherPage($page = null){


    afficherEntete($page);



    afficherPiedDePage($page);

}
afficherPage($page);
?>