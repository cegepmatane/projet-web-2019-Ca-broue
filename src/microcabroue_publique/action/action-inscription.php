<?php

if(isset($_POST["action-aller-premiere-etape"]))
{
    
    $page->isPremiereEtape = true;
    $page->isSecondeEtape = false;
}
if(isset($_POST["action-aller-seconde-etape"]))
{
    if($_POST["confirmation-mot-de-passe"] == $_POST["mot-de-passe"] && $_POST["mot-de-passe"] != "" && $_POST["nom-utilisateur"] != "" && $_POST["email"] != "") 
    {
    $page->isPremiereEtape = false;
    $page->isSecondeEtape = true;
    $page->isEnErreur = false;
    }
    else
    {
        $page->isEnErreur = true;
    }
}
if(isset($_POST["action-inscrire"]))
{
    echo "<script>alert(\"Inscription! WOOOOOOOOOOO\")</script>"; 
}

afficherPage($page);

?>