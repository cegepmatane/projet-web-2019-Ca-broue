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
                    <a href="vue-modifier-<?= $page->type; ?>.php?id=<?= $utilisateur->id;?>" class="bouton bouton-bleu">Modifier</a>
                    <a href="#supprimer?id=<?= $utilisateur->id; ?>" class="bouton bouton-rouge">Supprimer</a>
                </div>
                </div>
                <?php
            }
        }
    }
?>