<?php
/**
 * Created by PhpStorm.
 * User: xela
 * Date: 31/01/19
 * Time: 12:34 PM
 */
include_once "../../commun/vue/fragment/entete-fragment.php";
include_once "../../commun/vue/fragment/pied-de-page-fragment.php";
include_once "../../commun/vue/fragment/a-cote-fragment.php";



$page = (object)
[
/*    "style" => "acceuil.css",*/
    "titre" => "Boutique",
    "titrePrincipal" => "Boutique",
    "itemMenuActif" => "boutique",
];


function afficherPage($page = null){

// En cas d'erreur avec le paramètre $page, un objet $page vide est créé.
if(!is_object($page)) $page = (object)[];

afficherEntete($page);
?>

    <?php

    afficherACote($page);

    ?>

<p>Futur liste des goodies !!</p>

    <?php

    afficherPiedDePage($page);

}

afficherPage($page);
