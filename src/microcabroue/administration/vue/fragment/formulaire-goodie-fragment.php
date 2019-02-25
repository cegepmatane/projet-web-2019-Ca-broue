<?php
    require_once (CHEMIN_CODE."microcabroue_com_commun/modele/Goodie.php");
    require_once (CHEMIN_CODE."microcabroue_com_commun/modele/CategorieGoodie.php");

    function afficherChamps($page = null){
        if(!is_object($page))
            return;

        if(isset($page->goodie))
            $goodie = $page->goodie;

        ?>
        <form action="<?= $page->urlRetour; ?>" method="post">
            <div class="groupe-formulaire">
                <label for=<?= Goodie::NOM_FR; ?>>Nom du goodie (fr)</label>
                <input class="controle-formulaire" value="<?= isset($goodie) ? $goodie->getNomFr() : null ?>" name=<?= Goodie::NOM_FR; ?> id='nom-modification-goodie-fr' type='text'>
            </div>

            <div class="groupe-formulaire"> 
                <label for=<?= Goodie::NOM_EN; ?>>Nom du goodie (en)</label>
                <input class="controle-formulaire" value="<?= isset($goodie) ? $goodie->getNomEn() : null ?>" name=<?= Goodie::NOM_EN; ?> id='nom-modification-goodie-en' type='text'>
            </div>

            <div class="groupe-formulaire">
                <label for=<?= Goodie::ID_CATEGORIE; ?>>Catégorie</label>
                <select class="controle-formulaire" name=<?= Goodie::ID_CATEGORIE; ?> id="categorie-modification-goodie">
                    <?php if($page->action == "ajout"){ ?>
                        <option value="" selected disabled hidden>Choisir une catégorie</option>
                    <?php } ?>    
                    <?php foreach ($page->listeCategories as $categorie){ ?>
                        <option <?= isset($goodie) ? ($goodie->getIdCategorie() == $categorie->getId()) ? "selected" : null : null; ?> value=<?= $categorie->getId() ?>><?= $categorie->getLibelleFr(); ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="groupe-formulaire">
                <label for=<?= Goodie::DESCRIPTION_LONGUE_FR; ?>>Description longue du goodie (fr)</label>
                <textarea class="controle-formulaire" name=<?= Goodie::DESCRIPTION_LONGUE_FR; ?> id='description-longue-modification-goodie-fr' cols='30' rows='5'><?= isset($goodie) ? $goodie->getDescriptionLongueFr() : null ?></textarea>
            </div>

            <div class="groupe-formulaire">
                <label for=<?= Goodie::DESCRIPTION_LONGUE_EN; ?>>Description longue du goodie (en)</label>
                <textarea class="controle-formulaire" name=<?= Goodie::DESCRIPTION_LONGUE_FR; ?> id='description-longue-modification-goodie-en' cols='30' rows='5'><?= isset($goodie) ? $goodie->getDescriptionLongueEn() : null ?></textarea>
            </div>

            <div class="groupe-formulaire">
                <label for=<?= Goodie::DESCRIPTION_FR; ?>>Description courte du goodie (fr)</label>
                <textarea class="controle-formulaire" <?= Goodie::DESCRIPTION_FR; ?> id='description-courte-modification-goodie-fr' cols='30' rows='5'><?= isset($goodie) ? $goodie->getDescriptionFr() : null ?></textarea>
            </div>

            <div class="groupe-formulaire">
                <label for=<?= Goodie::DESCRIPTION_EN; ?>>Description courte du goodie (en)</label>
                <textarea class="controle-formulaire" name=<?= Goodie::DESCRIPTION_EN; ?> id='description-courte-modification-goodie-en' cols='30' rows='5'><?= isset($goodie) ? $goodie->getDescriptionEn() : null ?></textarea>
            </div>
            
            <div class="groupe-formulaire">
                <label for=<?= Goodie::PRIX; ?>>Prix du goodie</label>
                <input class="controle-formulaire" value="<?= isset($goodie) ? $goodie->getPrix() : null ?>" type="text" name=<?= Goodie::PRIX; ?> id="prix-modification-goodie">
            </div>

            <input class="bouton bouton-vert" type="submit" value=<?= $page->action == "ajouter" ? "Ajouter" : "Enregistrer"?>>
        </form>
        <?php
    }
?>