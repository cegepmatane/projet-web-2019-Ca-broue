<?php 
    require_once (CHEMIN_CODE."microcabroue_com_commun/accesseur/AccesseurUtilisateur.php");
    
    $accesseurUtilisateur = new AccesseurUtilisateur();

    if(isset($_POST["action-modifier"]) && ($_POST["action-modifier"] == "ajout" || $_POST["action-modifier"] == "modification" || $_POST["action-modifier"] == "suppression")){
        $filtreUtilisateur = array(
            Utilisateur::ID => FILTER_SANITIZE_NUMBER_INT,
            Utilisateur::IS_ADMIN => FILTER_VALIDATE_BOOLEAN
        );

        $utilisateurTemp = filter_var_array($_POST, $filtreUtilisateur);

        // Verifie que le case du formulaire de modification est coché si oui 1 pour true sinon 0 pour false
        $utilisateurTemp[Utilisateur::IS_ADMIN] = isset($utilisateurTemp[Utilisateur::IS_ADMIN]) ? 1 : 0;
        
        $utilisateur = new Utilisateur((object)
        [
            Utilisateur::ID => $utilisateurTemp[Utilisateur::ID],
            Utilisateur::IS_ADMIN =>$utilisateurTemp[Utilisateur::IS_ADMIN],
        ]);

        if($_POST["action-modifier"] == "modification")
            $accesseurUtilisateur->modifierEtatAdmin($utilisateur->getId(), $utilisateur->getIsAdmin());
        else if($_POST["action-modifier"] == "suppression")
            $accesseurUtilisateur->supprimer($utilisateur->getId());

        header('Location: '.LIEN_DOMAINE.'admin/utilisateurs');
    }
?>