<?php
    function afficherListe($page = null){
        if(!is_object($page))
            return;

        if(isset($page->listeGoodies)){
            foreach($page->listeGoodies as $goodie){
                ?>

                <div>
                    <?= $goodie->getNomFr(); ?>
                    <a href="vue-modifier-<?= $page->type; ?>.php?id=<?= $goodie->getId();?>" class="bouton bouton-bleu">Modifier</a>
                    <a href="#supprimer?id=<?= $goodie->getId(); ?>" class="bouton bouton-rouge">Supprimer</a>
                </div>

                <?php
            }
        }
    }
?>