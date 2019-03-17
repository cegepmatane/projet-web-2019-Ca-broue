<?php

require_once(CHEMIN_CODE."microcabroue_com_commun/modele/Utilisateur.php");
require_once(CHEMIN_CODE."microcabroue_com_commun/accesseur/AccesseurUtilisateur.php");

$accesseurUtilisateur = new AccesseurUtilisateur();
    
if(isset($_POST["action-connexion"]) && $_POST["action-connexion"] == "connexion")
{

    //Temporaire 

    $utilisateur = $accesseurUtilisateur->verifierUtilisateur($_POST['pseudo']);


    if(!$utilisateur){
        echo 'Mauvais identifiant';
    }
    else {
        if(password_verify($_POST['mot_passe'], $utilisateur->mot_passe)){
            $_SESSION['pseudo'] = $utilisateur->pseudo;
            $_SESSION['id'] = $utilisateur->id;
            $_SESSION['isAdmin'] = $utilisateur->isAdmin;
            header('Location: accueil');         
        }
        else{
            echo 'Mauvais identifiant';
        }
    }
}

