<?php
require_once ($_SERVER['CONFIGURATION_COMMUN']);

require_once(CHEMIN_CODE."microcabroue_com_commun/modele/Goodie.php");
//require_once(CHEMIN_SRC_DEV."microcabroue_publique/modele/CategorieGoodie.php");
//require_once(CHEMIN_SRC_DEV."microcabroue_publique/accesseur/AccesseurEntiteCategorieGoodie.php");
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


if(isset( $_GET["id"])){
    
    $page->goodie = $accesseurEntiteGoodie->recupererGoodie($_GET["id"]);
}
/*
$page->messageNavigationRetour = "Goodie non trouvée".
$page->isNavigationRetour = true;
*/

if(!$page->isNavigationRetour){
    switch ($_GET["action-navigation"] ?? "") {

        case "detailler-goodie":
            $page->titre = "Les détails d'un goodie";
            break;
        default:
    }
}

afficherPage($page)
?>
