<?php
    function afficherEntete($page = null){
        if(!is_object($page)) 
            return;

        ?>

        <!DOCTYPE html>
        <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="../decoration/style-commun-admin.css" rel="stylesheet" type="text/css"/>
            
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
                <ul class="liste-horizontale">
                    <li class="element-liste-horizontale">
                        <a href="./index.php" class="bouton bouton-jaune">Accueil</a>
                    </li>
                    <li class="element-liste-horizontale">
                        <a href="./vue-liste-bieres.php" class="bouton bouton-jaune">Bieres</a>
                    </li>
                    <li class="element-liste-horizontale">
                        <a href="./vue-liste-goodies.php" class="bouton bouton-jaune">Goodies</a>
                    </li>
                    <li class="element-liste-horizontale">
                        <a href="./vue-liste-utilisateurs.php"class="bouton bouton-jaune">Utilisateurs</a>
                    </li>
                </ul>
            </header>

            <h2 class="titre"><?= $page->titre; ?></h2>
        <?php
    }
?>