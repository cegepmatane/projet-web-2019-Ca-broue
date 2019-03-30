<?php
//session_start(); 
require_once(CHEMIN_CODE . "microcabroue_com_commun/accesseur/AccesseurUtilisateur.php");
require_once(CHEMIN_CODE."microcabroue_com_commun/modele/Goodie.php");
require_once(CHEMIN_CODE."microcabroue_com_commun/accesseur/AccesseurAchat.php");
require_once(CHEMIN_CODE."microcabroue_com_commun/accesseur/AccesseurEntiteGoodie.php");

afficherEntete($page);

//print_r($_SESSION);

if((isset($_POST['modifier']) && $_POST['modifier'] == "modifier-compte") || (isset($_POST['modifier']) && $_POST['modifier'] == "modifier-info"))
{
    $_SESSION['page-modifier'] = $_POST['modifier'];
    header('location: modifier-compte');
}


$accesseur = new AccesseurUtilisateur();
$accesseurAchat = new AccesseurAchat();
$accesseurGoodie = new AccesseurEntiteGoodie();

$id = $_SESSION['id'];
$utilisateur = $accesseur->recevoirUtilisateur($id);

afficherPage($page, $utilisateur);

//affichage des achats

$listeAchat = $accesseurAchat->rechercherParUtilisateur($id);

if(isset($listeAchat[0]->id_goodie) && is_int($listeAchat[0]->id_goodie))
{
    
foreach($listeAchat as $achat)
               {
                    $goodie = $accesseurGoodie->recupererGoodie($achat->id_goodie);
                    
                    $achatAffichable = (object)
                    [
                        "numero_achat" => $achat->numero_transaction,
                        "date" => $achat->date_achat,
                        "produit" => $goodie->getNomFr(),
                        "quantite" => $achat->quantite_produit 
                    ];
                    $page->achats[] = $achatAffichable;
               }
               afficherAchats($page);
            }



afficherPiedDePage($page);
?>
