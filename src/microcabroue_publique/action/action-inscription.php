<?php
require_once("../../../microcabroue_com_commun/modele/Utilisateur.php");
require_once("../../../microcabroue_com_commun/accesseur/AccesseurUtilisateur.php");

function ajouterUtilisateur($utilisateur)
{
    $accesseur = new AccesseurUtilisateur();
    $utilisateur->setPseudo($_SESSION['pseudo']);
    $utilisateur->setMail($_SESSION['mail']);
    $utilisateur->setMot_passe($_SESSION['mot_passe']);
    $accesseur->ajouterUtilisateur($utilisateur);
    session_destroy();
}

if(!isset($_SESSION['pseudo']) || !isset($_SESSION['mail']) || !isset($_SESSION['mot_passe'])){
    session_destroy();
    session_start();
}
$utilisateur = new Utilisateur((object)$_POST);

if (isset($_POST["action-aller-premiere-etape"]) && $_POST["action-aller-premiere-etape"] == "naviguer") {
    $page->isPremiereEtape = true;
    $page->isSecondeEtape = false;
    $page->isEnErreur = false;
}
if (isset($_POST["action-aller-seconde-etape"]) && $_POST["action-aller-seconde-etape"] == "naviguer") {
    if ($_POST["confirmation-mot-de-passe"] == $_POST["mot_passe"] && $_POST["mot_passe"] != "" && $_POST["pseudo"] != "" && $_POST["mail"] != "") {
        $page->isPremiereEtape = false;
        $page->isSecondeEtape = true;
        $page->isEnErreur = false;
        $_SESSION['pseudo'] = $_POST['pseudo'];
        $_SESSION['mail'] = $_POST['mail'];
        $_SESSION['mot_passe'] = $_POST['mot_passe'];


       

    } else {
        $page->isEnErreur = true;

        if ($_POST["confirmation-mot-de-passe"] != $_POST["mot_passe"]) {
            if ($page->ErreurActive != "")
                $page->ErreurActive .= "," . " Les mots de passe ne sont pas identiques";

            else {
                $page->ErreurActive = "Les mots de passe ne sont pas identiques";
            }
        }
        if ($_POST["mot_passe"] == "") {
            if ($page->ErreurActive == "") {
                $page->ErreurActive = "Le mot de passe est invalide!";
            } else {
                $page->ErreurActive .= ", " . " Le mot de passe est invalide!";
            }
        }
        if ($_POST["pseudo"] == "") {
            if ($page->ErreurActive == "") {
                $page->ErreurActive = "Le pseudo est invalide ou est déjâ utilisé!";
            } else {
                $page->ErreurActive .= ", " . " Le pseudo est invalide ou est déjâ utilisé!";
            }
        }
        if ($_POST["mail"] == "") {
            if ($page->ErreurActive == "") {
                $page->ErreurActive = "L'adresse mail est invalide ou est déjâ utilisé!";
            } else {
                $page->ErreurActive .= ", " . " L'adresse mail est invalide ou est déjâ utilisé!";
            }
        }
    }
}
if (isset($_POST["action-inscrire"]) && $_POST["action-inscrire"] == "inscrire") {
    if ($_POST["nom"] != "" && $_POST["prenom"] != "" && $_POST["adresse_postal"] != "" && $_POST["code_postal"] != "" && $_POST["ville"] != "" && $_POST['accepter-condition'] == "coche") {
        $page->isEnErreur = false;
        ajouterUtilisateur($utilisateur);
        //echo "<script>alert(\"ca passe WOOOOOOOOOOO\")</script>"; 
    } else {
        //echo "<script>alert(\"rentre dans erreur de la deuxieme etape\")</script>";
        $page->isPremiereEtape = false;
        $page->isSecondeEtape = true;
        $page->isEnErreur = true;

        if ($_POST["nom"] == "") {
            if ($page->ErreurActive == "") {
                $page->ErreurActive = "Le nom est invalide";
            } else {
                $page->ErreurActive .= ", " . " Le nom est invalide";
            }
        }
        if ($_POST["prenom"] == "") {
            if ($page->ErreurActive == "") {
                $page->ErreurActive = "Le prénom est invalide";
            } else {
                $page->ErreurActive .= ", " . " Le prénom est invalide";
            }
        }
        if ($_POST["adresse_postal"] == "") {
            if ($page->ErreurActive == "") {
                $page->ErreurActive = "L'adresse est invalide";
            } else {
                $page->ErreurActive .= ", " . " L'adresse est invalide";
            }
        }
        if ($_POST["code_postal"] == "") {
            if ($page->ErreurActive == "") {
                $page->ErreurActive = "Le code postal est invalide";
            } else {
                $page->ErreurActive .= ", " . " Le code postal est invalide";
            }
        }
        if ($_POST["ville"] == "") {
            if ($page->ErreurActive == "") {
                $page->ErreurActive = "La ville est invalide";
            } else {
                $page->ErreurActive .= ", " . " La ville est invalide";
            }
        }
        if ($_POST['accepter-condition'] != "coche") {
            if ($page->ErreurActive == "") {
                $page->ErreurActive = "Vous devez accepter les conditions d'utilisation!";
            } else {
                $page->ErreurActive .= ", " . " Vous devez accepter les conditions d'utilisation!";
            }
        }
    }
}
afficherPage($utilisateur, $page);
?>