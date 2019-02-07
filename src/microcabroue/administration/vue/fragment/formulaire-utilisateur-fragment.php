<?php
    function afficherChamps($page = null){
        if(!is_object($page))
            return;

        if(isset($page->utilisateur))
            $utilisateur = $page->utilisateur;

        ?>
        
        <form action="<?= $page->urlRetour; ?>" method="post">
            <div>
                <label for="nom-utilisateur">Nom d'utilisateur</label>
                <div name="nom-utilisateur"><?= $utilisateur->nomUtilisateur; ?></div>
            </div>

            <div>
                <label for="role">Rôle de l'utilisateur</label>
                Administrateur
                <input <?= $utilisateur->isAdmin ? "checked" : null ?> type="checkbox" name="role" id="role-modification-utilisateur" value="Admin">
            </div>

            <input type="submit" value=<?= $page->action == "ajouter" ? "Ajouter" : "Enregistrer"?>>
        </form>
        <?php
    }
?>