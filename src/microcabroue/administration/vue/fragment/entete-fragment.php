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
            <link href="commun/decoration/style-commun.css" rel="stylesheet" type="text/css"/>
            <link href="../commun/decoration/style-commun.css" rel="stylesheet" type="text/css"/>
            <link href="../../commun/decoration/style-commun.css" rel="stylesheet" type="text/css"/>
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
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="./index.php" class="nav-item btn btn-warning">Accueil</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="./vue-liste-bieres.php" class="nav-item btn btn-warning">Bieres</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="./vue-liste-goodies.php" class="nav-item btn btn-warning">Goodies</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="./vue-liste-utilisateurs.php"class="btn btn-warning">Utilisateurs</a>
                    </li>
                </ul>
            </header>

            <h2><?= $page->titre; ?></h2>
        <?php
    }
?>