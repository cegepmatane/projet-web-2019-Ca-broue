<?php
    function afficherChamps($page = null){
        if(!is_object($page))
            return;

        if(isset($page->utilisateur))
            $utilisateur = $page->utilisateur;

        ?>
        
        <form action="<?= $page->urlRetour; ?>" method="post">
            <div class="groupe-formulaire">
                <label for="nom-utilisateur">Nom d'utilisateur</label>
                <div name="nom-utilisateur" class="controle-formulaire"><?= $utilisateur->nomUtilisateur; ?></div>
            </div>
            Rôle de l'utilisateur
            <div class="groupe-formulaire">
                <label for="role" class="etiquette-cocher">Administrateur</label>
                <input <?= $utilisateur->isAdmin ? "checked" : null ?> type="checkbox" name="role" id="role-modification-utilisateur" value="Admin" class="form-check-input" >
               
            </div>

            <input class="bouton bouton-vert" type="submit" value=<?= $page->action == "ajouter" ? "Ajouter" : "Enregistrer"?>>
        </form>
        <?php
    }
?>