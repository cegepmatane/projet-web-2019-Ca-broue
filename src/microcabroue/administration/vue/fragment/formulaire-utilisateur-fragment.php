<?php
    function afficherChamps($page = null){
        if(!is_object($page))
            return;

        if(isset($page->utilisateur))
            $utilisateur = $page->utilisateur;

        ?>
        
        <form action="<?= $page->urlRetour; ?>" method="post">
            <div class="form-group">
                <label for="nom-utilisateur">Nom d'utilisateur</label>
                <div name="nom-utilisateur" class="form-control"><?= $utilisateur->nomUtilisateur; ?></div>
            </div>
            Rôle de l'utilisateur
            <div class="form-group">
                <label for="role" class="form-check-label">Administrateur</label>
                <input <?= $utilisateur->isAdmin ? "checked" : null ?> type="checkbox" name="role" id="role-modification-utilisateur" value="Admin" class="form-check-input" >
               
            </div>

            <input class="bouton bouton-vert" type="submit" value=<?= $page->action == "ajouter" ? "Ajouter" : "Enregistrer"?>>
        </form>
        <?php
    }
?>