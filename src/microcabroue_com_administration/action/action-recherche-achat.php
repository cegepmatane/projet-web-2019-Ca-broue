<?php
require_once (CHEMIN_SRC_DEV."microcabroue_com_commun/accesseur/AccesseurAchat.php");
require_once (CHEMIN_SRC_DEV."microcabroue_com_commun/accesseur/AccesseurUtilisateur.php");
require_once (CHEMIN_SRC_DEV."microcabroue_com_commun/accesseur/AccesseurEntiteGoodie.php");
require_once (CHEMIN_SRC_DEV."microcabroue_com_commun/modele/Utilisateur.php");
require_once (CHEMIN_SRC_DEV."microcabroue_com_commun/modele/Goodie.php");

$accesseurGoodie = new AccesseurEntiteGoodie();
$accesseurAchat = new AccesseurAchat();
$accesseurUtilisateur = new AccesseurUtilisateur();
afficherEntete($page);
if(isset($_POST['bouton-choix']) && $_POST['bouton-choix'] == "selectionner")
{
    switch($_POST['choix-recherche'])
    {
        case "numero-achat":
            afficherParNumero($page);
            break;
        case "date":
            break;
        case "produit":
            break;    
        case "utilisateur":
            break;
    }
}
else
{
    afficherChoixDeRecherche($page);
}

if(isset($_POST['bouton-recherche']) && $_POST['bouton-recherche'] == "rechercher")
{
    switch($_POST['choix-recherche'])
    {
        case "numero-achat":
            $page->resultatRecherche = [];
            $achat = $accesseurAchat->rechercherParNumero($_POST['numero-achat']);
            if(isset($achat->id_goodie) && is_int($achat->id_goodie))
            {
                $goodie = $accesseurGoodie->recupererGoodie($achat->id_goodie);
                $utilisateur = $accesseurUtilisateur->recevoirUtilisateur($achat->id_utilisateur);
                $achatAffichable = (object)
                [
                    "numero_achat" => $_POST['numero-achat'],
                    "date" => $achat->date_achat,
                    "produit" => $goodie->getNomFr(),
                    "utilisateur" => $utilisateur->getPrenom()." ". $utilisateur->getNom(),
                    "quantite" => $achat->quantite_produit 
                ];     
                $page->resultatRecherche[] = $achatAffichable;
            }
            break;
        case "date":
            break;
        case "produit":
            break;    
        case "utilisateur":
            break;
    }
}


afficherResultat($page);
?>