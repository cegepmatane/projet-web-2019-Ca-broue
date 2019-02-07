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
                <ul>
                    <li>
                        <a href="./vue-liste-bieres.php">Bieres</a>
                    </li>
                    <li>
                        <a href="./vue-liste-goodies.php">Goodies</a>
                    </li>
                    <li>
                        <a href="./vue-liste-utilisateurs.php">Utilisateurs</a>
                    </li>
                </ul>
            </header>

            <h2><?= $page->titre; ?></h2>
        <?php
    }
?>