<?php
    function afficherChamps($page = null){
        if(!is_object($page))
            return;

        if(isset($page->goodie))
            $goodie = $page->goodie;

        ?>
        <form action="<?= $page->urlRetour; ?>" method="post">
            <div>
                <label for="nom">Nom du goodie</label>
                <input value="<?= isset($goodie) ? $goodie->nom : null ?>" name='nom' id='nom-modification-goodie' type='text'>
            </div>

            <div>
                <label for="description">Description du goodie</label>
                <textarea name='description' id='description-modification-goodie' cols='30' rows='10'><?= isset($goodie) ? $goodie->description : null ?></textarea>
            </div>
            
            <div>
                <label for="prix">Prix du goodie</label>
                <input value="<?= isset($goodie) ? $goodie->prix : null ?>" type="text" name="prix" id="prix-modification-goodie">
            </div>

            <input type="submit" value=<?= $page->action == "ajouter" ? "Ajouter" : "Enregistrer"?>>
        </form>
        <?php
    }
?>