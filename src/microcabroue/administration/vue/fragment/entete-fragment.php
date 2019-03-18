<?php
    require_once($_SERVER["CONFIGURATION_COMMUN"]);
    session_start();
    if(!$_SESSION['isAdmin'])
    {
        header('location: connexion');
    }
    function afficherEntete($page = null){
        if(!is_object($page)) 
            return;

        ?>

        <!DOCTYPE html>
        <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="<?=LIEN_DOMAINE?>administration/decoration/style-commun-admin.css" rel="stylesheet" type="text/css"/>
            
            <title><?= $page->titre ?? ""; ?></title>

            <?php
                if(isset($page->style)){
                    ?>
        
                    <link href="<?= $page->style; ?>" rel="stylesheet" media="all"  type="text/css">
        
                    <?php
                }
            ?>
        </head>
        <body>
            <header>
                
                <div class="boutons-entete">
                <a href="<?=LIEN_DOMAINE?>"><img src="<?=LIEN_DOMAINE?>administration/decoration/image/logo.png"  class="logo" alt=""></a> 
                    <ul class="liste-horizontale">
                        <li class="element-liste-horizontale">
                            <a href="<?=LIEN_DOMAINE?>admin/accueil" class="bouton bouton-jaune">Accueil</a>
                        </li>
                        <!-- <li class="element-liste-horizontale">
                            <a href="<?=LIEN_DOMAINE?>admin/bieres" class="bouton bouton-jaune">Bieres</a>
                        </li> -->
                        <li class="element-liste-horizontale">
                            <a href="<?=LIEN_DOMAINE?>admin/historique" class="bouton bouton-jaune">Historique des transactions</a>
                        </li>
                        <li class="element-liste-horizontale">
                            <a href="<?=LIEN_DOMAINE?>admin/goodies" class="bouton bouton-jaune">Goodies</a>
                        </li>
                        <li class="element-liste-horizontale">
                            <a href="<?=LIEN_DOMAINE?>admin/categories" class="bouton bouton-jaune">Categories</a>
                        </li>
                        <li class="element-liste-horizontale">
                            <a href="<?=LIEN_DOMAINE?>admin/utilisateurs"class="bouton bouton-jaune">Utilisateurs</a>
                        </li>
                        <li class="element-liste-horizontale">
                            <a href="<?=LIEN_DOMAINE?>admin/recherche-achat"class="bouton bouton-jaune">Recherche d'achat</a>
                        </li>
                    </ul>
                </div>
            </header>

            <h2 class="titre"><?= $page->titre; ?></h2>
        <?php
    }
?>