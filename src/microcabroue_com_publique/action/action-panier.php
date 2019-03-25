<?php
require_once ($_SERVER['CONFIGURATION_COMMUN']);

require_once(CHEMIN_CODE."microcabroue_com_commun/modele/Goodie.php");
require_once(CHEMIN_CODE."microcabroue_com_commun/accesseur/AccesseurEntiteGoodie.php");

//$accesseurEntiteCategorieGoodie = new AccesseurEntiteCategorieGoodie();
$accesseurEntiteGoodie = new AccesseurEntiteGoodie();

if($_GET["navigation-retour-url"] ?? false &&
   $_GET["navigation-retour-titre"] ?? false){

    $page->navigationRetourURL = $_GET["navigation-retour-url"];
    $page->navigationRetourTitre = $_GET["navigation-retour-titre"];

}else if($_POST["navigation-retour-url"] ?? false &&
         $_POST["navigation-retour-titre"] ?? false){

    $page->navigationRetourURL = $_POST["navigation-retour-url"];
    $page->navigationRetourTitre = $_POST["navigation-retour-titre"];
}

if(isset($_SESSION['liste-panier'])){

    $page->listePanier = (array) json_decode($_SESSION['liste-panier']);
    $doublon = false;

    foreach($page->listePanier as &$panier){

        if(isset($_GET['id']) && $_GET['id'] == $panier->id){
            if($panier->quantitee > 1){
                $panier->quantitee--;
                $doublon = true;
            }
            else{
                $panier = null;
            }
        }
    }
    if(isset($_GET['id'])){

        if(!$doublon){
            $tableauApresSuppresion = array_filter($page->listePanier);
            $page->listePanier = (array) $tableauApresSuppresion;
        }
        $_SESSION['liste-panier'] = json_encode($page->listePanier);
        header('Location:'.LIEN_DOMAINE.'panier');

    }
    afficherTableauPanier($page);
}


afficherBoutton();
