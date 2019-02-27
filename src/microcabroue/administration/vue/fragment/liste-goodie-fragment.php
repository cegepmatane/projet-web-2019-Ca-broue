<?php
    function afficherListe($page = null){
        if(!is_object($page))
            return;

        if(isset($page->listeGoodies)){
            foreach($page->listeGoodies as $goodie){
                ?>
                <div>
                <?= $goodie->getNomFr(); ?>
                <div class="boutons-liste">
                    <form method="post"> 
                        <a href="vue-modifier-<?= $page->type; ?>.php?id=<?= $goodie->getId();?>" class="bouton bouton-bleu bouton-liste">Modifier</a>
        
                        <input type="hidden" name="id" value="<?= $goodie->getId(); ?>">
                        <button class="bouton bouton-rouge bouton-liste" type="submit" name="action-modifier" value="suppression">Supprimer</button>
                    </form>
                </div>
                <div>
                <?php
            }
        }
    }

    require_once (CHEMIN_CODE."microcabroue_com_administration/action/action-modifier-goodie.php");
?>