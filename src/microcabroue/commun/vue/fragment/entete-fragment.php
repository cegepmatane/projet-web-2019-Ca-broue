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
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link href="commun/decoration/style-commun.css" rel="stylesheet" type="text/css"/>
        <link href="../commun/decoration/style-commun.css" rel="stylesheet" type="text/css"/>


        <?php
        if(isset($page->style)){
            ?>

            <link href="<?= $page->style; ?>" rel="stylesheet" media="all"  type="text/css">

            <?php
        }
        ?>

    </head>
<body>
<header role="banner">
   <!-- <h1>
        <?/*= $page->titrePrincipal ?? ""; */?>
    </h1>-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <?php
            if(isset($page->dossier)){
            ?>
            <img src="../commun/decoration/image/logo.png"  class="d-inline-block align-top" alt="">
            <?php
            }else{
                ?>
                <img src="commun/decoration/image/logo.png"  class="d-inline-block align-top" alt="">

                <?php
            }
            ?>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <?php
                $objetsNav = [
                    ["titre"=>"Accueil", "lien"=>"accueil"],
                    ["titre"=>"Bière", "lien"=>"biere"],
                    ["titre"=>"Boutique", "lien"=>"boutique"],
                    ["titre"=>"Evenement", "lien"=>"evenement"],
                ];
                $liste="";
                foreach ($objetsNav as $objet) {
                    $liste.="<li class='nav-objet";

                    if(isset($page->itemMenuActif) && $page->itemMenuActif == $objet['lien']){
                        $liste.=" active";
                    }
                    $liste.="'>";
                    $liste.= " <a class='nav-lien' href='".$objet['lien']."' >".$objet['titre']."</a>";
                    $liste.="</li>";
                }
                echo $liste;
                ?>

            </ul>
       

            <div class="form-inline my-2 my-lg-0">
            
            <?php 
                session_start();

                if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
                {
                    echo 'Bonjour ' . $_SESSION['pseudo'];
                    echo " <button class='btn btn-danger my-2 my-sm-0' type='submit'>Deconnexion</button>";
                }
                else {
                    echo "<button class='btn btn-outline-success my-2 my-sm-0' type='submit'>Search</button>";
                }
            ?>
            </div>
        </div>
    </nav>

</header>

    <?php

}
