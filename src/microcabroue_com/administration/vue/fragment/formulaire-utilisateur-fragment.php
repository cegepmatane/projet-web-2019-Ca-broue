<?php
    require_once (CHEMIN_CODE."microcabroue_com_commun/modele/Utilisateur.php");

    function afficherChamps($page = null){
        if(!is_object($page))
            return;

        if(isset($page->utilisateur))
            $utilisateur = $page->utilisateur;
                
        ?>

        <form method="post">
            <input type="hidden" name=<?= Utilisateur::ID; ?> value=<?= isset($utilisateur) ? $utilisateur->getId() : null ?>>

            <div class="groupe-formulaire">
                <label for="nom-utilisateur">Nom d'utilisateur</label>
                <div name="nom-utilisateur"><?= $utilisateur->getPrenom() . " " . $utilisateur->getNom(); ?></div>
            </div>
            <div class="groupe-formulaire">
                <label for="pseudo-utilisateur">Pseudonyme de l'utilisateur</label>
                <div name="pseudo-utilisateur"><?= $utilisateur->getPseudo(); ?></div>
            </div>
            Rôle de l'utilisateur
            <div class="groupe-formulaire">
                <label for="role" class="etiquette-cocher">Administrateur</label>
                <input <?= $utilisateur->getIsAdmin() ? "checked" : null ?> type="checkbox" name=<?= Utilisateur::IS_ADMIN; ?> id="role-modification-utilisateur" value="Admin" class="form-check-input" >
               
            </div>

            <button class="bouton bouton-vert" name="action-modifier" type="submit" value="<?= $page->action; ?>"><?= $page->action == "ajout" ? "Ajouter" : "Enregistrer"?></button>
        </form>
        <?php
    }

    require_once (CHEMIN_CODE."microcabroue_com_administration/action/action-modifier-utilisateur.php");
?>