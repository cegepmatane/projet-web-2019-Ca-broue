<?php
/**
 * Created by PhpStorm.
 * User: xela
 * Date: 31/01/19
 * Time: 2:03 PM
 */
require_once ($_SERVER['CONFIGURATION_COMMUN']);

require_once (CHEMIN_SRC_DEV."microcabroue_com_commun/action/action-deconnexion.php");

session_start();
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
        <link href="<?= LIEN_DOMAINE ; ?>commun/decoration/style-commun.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

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
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
        <a class="navbar-brand" href="#">
        <img src="<?= LIEN_DOMAINE ; ?>commun/decoration/image/logo.png"  class="d-inline-block align-top" alt="">


            
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <?php

                $objetsNav = [
                    ["titre"=>"Accueil", "id"=>"accueil", "lien"=> LIEN_DOMAINE."accueil"],
                    ["titre"=>"Bière", "id"=>"biere", "lien"=>LIEN_DOMAINE."biere"],
                    ["titre"=>"Boutique", "id"=>"boutique", "lien"=>LIEN_DOMAINE."boutique"],
                    ["titre"=>"Mon Compte", "id"=>"mon-compte", "lien"=>LIEN_DOMAINE."mon-compte"],
                ];
                $liste="";
                foreach ($objetsNav as $objet) {

                    if($objet['id'] == 'mon-compte' && !isset($_SESSION['id'])){
                        break;
                    }

                    $liste.="<li class='nav-objet";

                    if(isset($page->itemMenuActif) && $page->itemMenuActif == $objet['id']){
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
                <a href="<?= LIEN_DOMAINE?>panier">
                    <i class="material-icons cart">
                        shopping_cart
                    </i>
                </a>   
            <?php 

                if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
                {
                    echo '<form method="post">';
                    echo 'Bonjour ' . $_SESSION['pseudo'];
                    echo " <button class='btn btn-danger my-2 my-sm-0' name='action-deconnexion' value='deconnexion' type='submit'>Deconnexion</button>";
                    echo "</form>";
                }   
                else {
                    
                    echo "<a class='bouton-validation' type='submit' href='connexion'>Connexion</a>";
                    echo "<a class='bouton-validation' type='submit' href='inscription'>Inscription</a>";
                    
                }
                ?>
            </div>
        </div>
        
    </nav>

</header>

    <?php


}
