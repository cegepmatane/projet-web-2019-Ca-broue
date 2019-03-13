<?php
//session_start(); 
require_once(CHEMIN_SRC_DEV . "microcabroue_com_commun/accesseur/AccesseurUtilisateur.php");


if((isset($_POST['modifier']) && $_POST['modifier'] == "modifier-compte") || (isset($_POST['modifier']) && $_POST['modifier'] == "modifier-info"))
{
    header('location: modifier-compte');
}

afficherEntete($page);
$accesseur = new AccesseurUtilisateur();
$id = $_SESSION['id'];
$utilisateur = $accesseur->recevoirUtilisateur($id);

afficherPage($page, $utilisateur);
?>