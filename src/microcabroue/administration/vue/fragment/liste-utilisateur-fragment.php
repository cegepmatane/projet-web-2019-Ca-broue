<?php
    function afficherListe($page = null){
        if(!is_object($page))
            return;

        if(isset($page->listeUtilisateurs)){
            foreach($page->listeUtilisateurs as $utilisateur){
                ?>
                <div>
                 <?= $utilisateur->nom; ?>
                <div class="boutons-liste"> 
                    <a href="vue-modifier-<?= $page->type; ?>.php?id=<?= $utilisateur->id;?>" class="bouton bouton-bleu bouton-liste">Modifier</a>
                    <a href="#supprimer?id=<?= $utilisateur->id; ?>" class="bouton bouton-rouge bouton-liste">Supprimer</a>
                </div>
                </div>
                <?php
            }
        }
    }
?>