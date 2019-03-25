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
                        <a href="<?= $page->type; ?>/modifier/<?= $goodie->getId();?>" class="bouton bouton-bleu">Modifier</a>
        
                        <input type="hidden" name="id" value="<?= $goodie->getId(); ?>">
                        <button class="bouton bouton-rouge" type="submit" name="action-modifier" value="suppression">Supprimer</button>
                    </form>
                </div>
                </div>
                <?php
            }
        }
    }

    require_once (CHEMIN_CODE."microcabroue_com_administration/action/action-modifier-goodie.php");
?>