<?php
require_once ($_SERVER['CONFIGURATION_COMMUN']);

require_once(CHEMIN_SRC_DEV."microcabroue_com_commun/modele/Goodie.php");
require_once(CHEMIN_SRC_DEV."microcabroue_com_commun/accesseur/AccesseurEntiteGoodie.php");

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
    $page->listePanier = json_decode($_SESSION['liste-panier']);
    foreach($page->listePanier as $goodie){
        if(isset($_GET['id']) &&  $_GET['id'] == $goodie->id){
            $_SESSION['liste-panier'] = json_encode(array_diff($page->listePanier, $goodie));
        }
     
    }
    afficherTableauPanier($page);
}


afficherBoutton();