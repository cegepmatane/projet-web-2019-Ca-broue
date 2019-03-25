<?php
require_once(CHEMIN_CODE ."microcabroue_com_commun/modele/Utilisateur.php");
require_once(CHEMIN_CODE. "microcabroue_com_commun/accesseur/AccesseurUtilisateur.php");

function ajouterUtilisateur($utilisateur)
{
    $accesseur = new AccesseurUtilisateur();
    $utilisateur->setMot_passe(password_hash($utilisateur->getMot_passe(), PASSWORD_DEFAULT));
    $accesseur->ajouterUtilisateur($utilisateur);
    header('Location: accueil');
    
}

$utilisateur = new Utilisateur((object)$_POST);

if (isset($_POST["action-aller-premiere-etape"]) && $_POST["action-aller-premiere-etape"] == "naviguer") {
    $page->isPremiereEtape = true;
    $page->isSecondeEtape = false;
    $page->isEnErreur = false;
}
if (isset($_POST["action-aller-seconde-etape"]) && $_POST["action-aller-seconde-etape"] == "naviguer") {
    $utilisateur->ValiderUtilisateurPremiereEtape();
    $utilisateur->isMotDePasseValide($_POST["confirmation-mot-de-passe"]);
    $listeErreurActive = $utilisateur->getListeErreurActive();

    if (count($listeErreurActive) == 0) {
        $page->isPremiereEtape = false;
        $page->isSecondeEtape = true;
        $page->isEnErreur = false;
        $page->ErreurActive = "";
    } 
    else {
        $page->isEnErreur = true;
        var_dump($listeErreurActive);
        foreach($listeErreurActive as $erreur)
        {
            $page->ErreurActive .=  $erreur. '. ';
        }
        
    }
}
if (isset($_POST["action-inscrire"]) && $_POST["action-inscrire"] == "inscrire") {
    $utilisateur->ValiderUtilisateurDeuxiemeEtape();
    
    $listeErreurActive = $utilisateur->getListeErreurActive();

    if (count($listeErreurActive) == 0 && $_POST['accepter-condition'] == "coche") {
        $page->isEnErreur = false;
        ajouterUtilisateur($utilisateur);
        //echo "<script>alert(\"ca passe WOOOOOOOOOOO\")</script>"; 
    } 
    else {
        //echo "<script>alert(\"rentre dans erreur de la deuxieme etape\")</script>";
        $page->isPremiereEtape = false;
        $page->isSecondeEtape = true;
        $page->isEnErreur = true;

        foreach($listeErreurActive as $erreur)
        {
            $page->ErreurActive .= $erreur . '. ';
        }
        if($_POST['accepter-condition'] != "coche")
        {
            $page->ErreurActive .= "Vous devez accepter les conditions d'utilisations" . '. ';
        }
    }
}
afficherPage($utilisateur, $page);
?>
