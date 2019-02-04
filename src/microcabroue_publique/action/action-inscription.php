<?php

/*if(isset($_POST["action-aller-seconde-etape"]))
{
    echo "<script>alert(\"".$_POST["action-aller-seconde-etape"]."\")</script>"; 
}
else
{
    echo "<script>alert(\"non!\")</script>"; 
}
*/

if(isset($_POST["action-aller-premiere-etape"]))
{
    $page->isPremiereEtape = true;
    $page->isSecondeEtape = false;
}
if(isset($_POST["action-aller-seconde-etape"]))
{
    $page->isPremiereEtape = false;
    $page->isSecondeEtape = true;
}
if(isset($_POST["action-inscrire"]))
{
    echo "<script>alert(\"Inscription! WOOOOOOOOOOO\")</script>"; 
}

afficherPage($page);

?>