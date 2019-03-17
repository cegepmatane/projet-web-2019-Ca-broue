<?php

if(!$_SESSION['pseudo']){
    header('Location:'.LIEN_DOMAINE.'connexion');
}



if (isset($_POST["action-aller-premiere-etape"]) && $_POST["action-aller-premiere-etape"] == "naviguer") {
    $page->isPremiereEtape = true;
    $page->isSecondeEtape = false;
    $page->isEnErreur = false;
}

if (isset($_POST["action-aller-seconde-etape"]) && $_POST["action-aller-seconde-etape"] == "naviguer") {
    $page->isPremiereEtape = false;
    $page->isSecondeEtape = true;
    $page->isEnErreur = false;
}

afficherPage($page);
