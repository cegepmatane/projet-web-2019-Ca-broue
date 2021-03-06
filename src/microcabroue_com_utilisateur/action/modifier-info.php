<?php
require_once(CHEMIN_CODE . "microcabroue_com_commun/accesseur/AccesseurUtilisateur.php");
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
    $utilisateur->setMot_passe($_POST['mot_passe']);
    $utilisateur->ValiderUtilisateurModification();
    $utilisateur->isMotDePasseValideModification($_POST['confirmation-mot-de-passe']);

    $listeErreurActive = $utilisateur->getListeErreurActive();

    if(count($listeErreurActive) == 0)
    {
        $utilisateur->setMot_passe(password_hash($utilisateur->getMot_passe(), PASSWORD_DEFAULT));
        $accesseur->modifierUtilisateur($utilisateur, $id);
        header("location: mon-compte");
    }
    else
    {
        $page->isEnErreur = true;
        foreach($listeErreurActive as $erreur)
        {
            $page->ErreurActive .=  $erreur. '. ';
        }
    }
}

if(isset($_SESSION['page-modifier']) && $_SESSION['page-modifier'] == "modifier-compte")
{
    $page->titre = "Modifier vos informations du compte";
    afficherEntete($page);

    if($page->isEnErreur == true)
    {
       afficherErreur($page);
    }

    afficherPageCompte($page, $utilisateur);
}

if (isset($_SESSION['page-modifier']) && $_SESSION['page-modifier'] == "modifier-info")
{
    $page->titre = "Modifier vos informations personnelles";
    afficherEntete($page);

    if($page->isEnErreur == true)
    {
       afficherErreur($page);
    }

    afficherPageInfo($page, $utilisateur);
}

?>
