<?php
    function afficherListe($page = null){
        if(!is_object($page))
            return;

        if(isset($page->listeBieres)){
            foreach($page->listeBieres as $biere){
                ?>
                <div>
                <?= $biere->nom; ?>
                <div class="boutons-liste">
                    <a href="vue-modifier-<?= $page->type; ?>.php?id=<?= $biere->id; ?>" class="bouton bouton-bleu">Modifier</a>
                    <a href="#supprimer?id=<?= $biere->id; ?>" class="bouton bouton-rouge">Supprimer</a>
                </div>
                </div>
                <?php
            }
        }
    }
?>