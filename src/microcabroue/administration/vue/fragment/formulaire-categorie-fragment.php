<?php
/**
 * Created by PhpStorm.
 * User: xela
 * Date: 27/02/19
 * Time: 3:41 PM
 */
require_once (CHEMIN_CODE."microcabroue_com_commun/modele/CategorieGoodie.php");

function afficherChamps($page = null){
    if(!is_object($page))
        return;

    if(!isset($page->categorie) || $page->categorie == null) {
        echo "<div class=\"alert alert-danger\" role=\"alert\">
        Erreur sur le chargement de la catégorie
        </div>";
        return;
    }


        /** @var CategorieGoodie $categorie */
        $categorie = $page->categorie;
    ?>
    <form method="post">
        <input type="hidden" name="id" value=<?= isset($categorie) ? $categorie->getId() : null ?>>

        <div class="groupe-formulaire">
            <label for=<?= CategorieGoodie::LIBELLE_FR; ?>>Libelle de la categorie (fr)</label>
            <input class="controle-formulaire" value="<?= isset($categorie) ? $categorie->getLibelleFr() : null ?>" name=<?= CategorieGoodie::LIBELLE_FR; ?> id='libelle-modification-categorie-fr' type='text'>
        </div>

        <div class="groupe-formulaire">
            <label for=<?= CategorieGoodie::LIBELLE_EN; ?>>Libelle de la categorie  (en)</label>
            <input class="controle-formulaire" value="<?= isset($categorie) ? $categorie->getLibelleEn() : null ?>" name=<?= CategorieGoodie::LIBELLE_EN; ?> id='libelle-modification-categorie-en' type='text'>
        </div>

        <button class="bouton bouton-vert" name="action-modifier" type="submit" value="<?= $page->action; ?>"><?= $page->action == "ajout" ? "Ajouter" : "Enregistrer"?></button>
    </form>
    <?php

}

require_once (CHEMIN_CODE."microcabroue_com_administration/action/action-modifier-categorie.php");
