<?php

require_once("../../../microcabroue_com_commun/modele/Utilisateur.php");
require_once("../../../microcabroue_com_commun/accesseur/AccesseurUtilisateur.php");

$accesseurUtilisateur = new AccesseurUtilisateur();

$listeUtilisateur = $accesseurUtilisateur->recupererListeUtilisateur();

if(isset($_POST["action-connexion"]) && $_POST["action-connexion"] == "connexion")
{
    echo "tata";
}

