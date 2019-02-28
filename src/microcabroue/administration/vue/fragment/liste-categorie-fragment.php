<?php
/**
 * Created by PhpStorm.
 * User: xela
 * Date: 27/02/19
 * Time: 3:14 PM
 */
function afficherListe($page = null){
    if(!is_object($page))
        return;

    if(isset($page->listeCategorieGoodies)){
        /** @var CategorieGoodie $categorie */
        foreach($page->listeCategorieGoodies as $categorie){
            ?>

            <?= $categorie->getLibelleFr(); ?>
            <div class="boutons-liste">
                <form method="post">
                    <a href="vue-modifier-<?= $page->type; ?>.php?id=<?= $categorie->getId();?>" class="bouton bouton-bleu">Modifier</a>

                    <input type="hidden" name="id" value="<?= $categorie->getId(); ?>">
                    <button class="bouton bouton-rouge" type="submit" name="action-modifier" value="suppression">Supprimer</button>
                </form>
            </div>
            <?php
        }
    }
}

require_once (CHEMIN_CODE."microcabroue_com_administration/action/action-modifier-categorie.php");
