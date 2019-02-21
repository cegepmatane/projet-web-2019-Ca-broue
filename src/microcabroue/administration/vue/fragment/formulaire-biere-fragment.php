<?php
    function afficherChamps($page = null){
        if(!is_object($page))
            return;

        if(isset($page->biere))
            $biere = $page->biere;

        ?>
        <form action="<?= $page->urlRetour; ?>" method="post">
            <div class="groupe-formulaire">
                <label for="marque">Marque de la bière</label>
                <input value="<?= isset($biere) ? $biere->marque : null ?>" name='marque' id='marque-ajout-biere' type='text' class="controle-formulaire">
            </div>

            <div class="groupe-formulaire">
                <label for="description">Description de la bière</label>
                <textarea name='description' id='description-ajout-biere' cols='30' rows='10' class="controle-formulaire"><?= isset($biere) ? $biere->description : null ; ?></textarea>
            </div>
            
            <div class="groupe-formulaire">
                <label for="pourcentage">Pourcentage d'alcool de la bière</label>
                <input value="<?= isset($biere) ? $biere->pourcentageAlcool : null ; ?>" type="text" name="pourcentage" id="pourcentage-alcool-ajout-biere" class="controle-formulaire">
            </div>

            <input class="bouton bouton-vert" type="submit" value=<?= $page->action == "ajouter" ? "Ajouter" : "Enregistrer"?>>
        </form>
        <?php
    }
?>