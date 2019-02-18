<?php
    function afficherListe($page = null){
        if(!is_object($page))
            return;

        ?>

            <?php if($page->type != "utilisateur"){?>
                <a href="./vue-ajouter-<?= $page->type; ?>.php" class="btn btn-success">Ajouter</a>
            <?php } ?>
        <?php

        foreach($page->liste as $item){
            ?>

            <div>
                <?= $item->nom; ?>
                <a href="vue-modifier-<?= $page->type; ?>.php?id=<?= $item->id;?>" class="btn btn-info">Modifier</a>
                <a href="#supprimer?id=<?= $item->id; ?>" class="btn btn-danger">Supprimer</a>
            </div>

            <?php
        }
    }
?>