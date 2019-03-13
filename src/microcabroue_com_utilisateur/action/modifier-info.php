<?php
require_once(CHEMIN_SRC_DEV . "microcabroue_com_commun/accesseur/AccesseurUtilisateur.php");
session_start();
$accesseur = new AccesseurUtilisateur();
$id = $_SESSION['id'];
$utilisateur = $accesseur->recevoirUtilisateur($id);
//echo "<script>alert('my nama jeff')</script>";
if(isset($_POST['enregistrer']) && $_POST['enregistrer'] == "true")
{
    $utilisateur->setNom($_POST['nom']);
    $utilisateur->setPrenom($_POST['prenom']);
    $utilisateur->setAdresse_postal($_POST['adresse_postal']);
    $utilisateur->setCode_postal($_POST['code_postal']);
    $utilisateur->setVille($_POST['ville']);
    $utilisateur->setMail($_POST['mail']);
    $utilisateur->setPseudo($_POST['pseudo']);
    //$utilisateur->setMot_passe($_POST['mot']);
    $accesseur->modifierUtilisateur($utilisateur, $id);
    header("location: mon-compte");
}

if(isset($_SESSION['page-modifier']) && $_SESSION['page-modifier'] == "modifier-compte")
{
    session_abort();
    $page->titre = "Modifier vos informations du compte";
    afficherEntete($page);
    afficherPageCompte($page, $utilisateur);
}

if (isset($_SESSION['page-modifier']) && $_SESSION['page-modifier'] == "modifier-info")
{
    session_abort();
    $page->titre = "Modifier vos informations personnelles";
    afficherEntete($page);
    afficherPageInfo($page, $utilisateur);
}


?>