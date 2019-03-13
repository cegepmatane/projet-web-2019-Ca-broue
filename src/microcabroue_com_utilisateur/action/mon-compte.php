<?php
//session_start(); 
require_once(CHEMIN_SRC_DEV . "microcabroue_com_commun/accesseur/AccesseurUtilisateur.php");
afficherEntete($page);

//print_r($_SESSION);

if((isset($_POST['modifier']) && $_POST['modifier'] == "modifier-compte") || (isset($_POST['modifier']) && $_POST['modifier'] == "modifier-info"))
{
    $_SESSION['page-modifier'] = $_POST['modifier'];
    header('location: modifier-compte');
}


$accesseur = new AccesseurUtilisateur();
$id = $_SESSION['id'];
$utilisateur = $accesseur->recevoirUtilisateur($id);

afficherPage($page, $utilisateur);
?>