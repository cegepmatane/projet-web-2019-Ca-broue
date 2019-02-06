<?php

if(isset($_POST["action-aller-premiere-etape"]) && $_POST["action-aller-premiere-etape"] == "naviguer")
{
    $page->isPremiereEtape = true;
    $page->isSecondeEtape = false;
    $page->isEnErreur = false;
}
if(isset($_POST["action-aller-seconde-etape"]) && $_POST["action-aller-seconde-etape"] == "naviguer")
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
if(isset($_POST["action-inscrire"]) && $_POST["action-inscrire"] == "inscrire")
{
    //echo "<script>alert(\"".."\")</script>"; 
    if($_POST["nom"] != "" && $_POST["prenom"] != "" && $_POST["adresse"] != "" && $_POST["code-postal"] != "" && $_POST["ville"] != "" && $_POST['accepter-condition'] == "coche")
    {
        $page->isEnErreur = false;
        echo "<script>alert(\"Inscription! WOOOOOOOOOOO\")</script>"; 
    }
    else
    {
        echo "<script>alert(\"rentre dans erreur de la deuxieme etape\")</script>"; 
        $page->isPremiereEtape = false;
        $page->isSecondeEtape = true;
        $page->isEnErreur = true;
    }
}
afficherPage($page);
?>