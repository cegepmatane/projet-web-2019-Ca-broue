<?php
/**
 * Created by PhpStorm.
 * User: xela
 * Date: 24/03/19
 * Time: 5:26 PM
 */

include_once "fragment/entete-fragment.php";
include_once "fragment/pied-de-page-fragment.php";

$page = (object)
[
    "titre" => "Calendrier",
    "style" => LIEN_DOMAINE."administration/decoration/calendrier.css"
];

function afficherPage($page = null)
{
    if (!is_object($page))
        $page = (object)[];

    afficherEntete($page);

    echo $page->calendrier->show();
    ?>

    <?php

    afficherPiedDePage($page);
}

require_once (CHEMIN_CODE."microcabroue_com_administration/action/action-calendrier.php");
