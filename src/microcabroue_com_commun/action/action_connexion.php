<?php

require_once("../../../microcabroue_com_commun/modele/Utilisateur.php");
require_once("../../../microcabroue_com_commun/accesseur/AccesseurUtilisateur.php");

$accesseurUtilisateur = new AccesseurUtilisateur();

$listeUtilisateur = $accesseurUtilisateur->recupererListeUtilisateur();

if(isset($_POST["action-connexion"]) && $_POST["action-connexion"] == "connexion")
{

    //Temporaire 

    $listeUtilisateur = $accesseurUtilisateur->recupererListeUtilisateur();

    for ($i=0; $i< sizeof($listeUtilisateur); $i++){
        if($_POST["pseudo"] == $listeUtilisateur[$i]->getPseudo()){

            if($_POST["mot_passe"] == $listeUtilisateur[$i]->getMot_passe()){
                session_start();
                $_SESSION['pseudo'] = $listeUtilisateur[$i]->getPseudo();
                $_SESSION['id'] = $listeUtilisateur[$i]->getId();
            }
            else{
                echo "mauvais MDP";
            }
        }
        else {
            echo "Utilisateur n'existe pas";
        }
    }
}

