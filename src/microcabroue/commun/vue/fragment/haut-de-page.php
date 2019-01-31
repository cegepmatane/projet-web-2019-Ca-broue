<?php
/**
 * Created by PhpStorm.
 * User: xela
 * Date: 31/01/19
 * Time: 2:03 PM
 */


function afficherEntete($page = null){

    // En cas d'erreur avec le paramètre $page, un objet $page vide est créé.
    if(!is_object($page)) return;

    ?>

    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>
            <?= $page->titre ?? ""; ?>
        </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <link href="commun/decoration/style-commun.css" rel="stylesheet" type="text/css"/>


   <!--     <?php
/*        if(isset($page->style)){
            */?>

            <link href="css/<?/*= $page->style; */?>" rel="stylesheet" media="all">

            --><?php
/*        }
        */?>

    </head>
<body>
<header role="banner">
    <h1>
        <?= $page->titrePrincipal ?? ""; ?>
    </h1>
    <nav role="navigation">

        <?php
        /*
        Utiliser $page->itemMenuActif pour mettre en évidence le menu actif.
        */
        ?>

    </nav>
</header>

<?php

}
