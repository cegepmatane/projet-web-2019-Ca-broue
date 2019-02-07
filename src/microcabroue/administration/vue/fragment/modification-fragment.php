<?php
    function afficherChamps($page = null){
        if(!is_object($page))
            return;

        ?>

            <h2><?= $page->titre; ?></h2>

            <form action=<?= $page->urlRetour; ?> method="post">
        <?php

        foreach($page->listeChamps as $champ){
            echo $champ;
        }

        ?>
                <input type="submit" value=<?= $page->action == "ajouter" ? "Ajouter" : "Enregistrer"?>>
            </form>
            <a href=<?= $page->urlRetour; ?>>Annuler</a>
        <?php
    }
?>