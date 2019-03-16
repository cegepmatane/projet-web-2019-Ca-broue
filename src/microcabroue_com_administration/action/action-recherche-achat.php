<?php

if(isset($_POST['bouton-rechercher']) && $_POST['bouton-rechercher'] == "rechercher")
{
    switch($_POST['choix-recherche'])
    {
        case "numero-achat":
            break;
        case "date":
            break;
        case "produit":
            break;    
        case "utilisateur":
            break;
    }
}

afficherPage($page);
?>