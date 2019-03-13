<?php
require_once(CHEMIN_SRC_DEV . "microcabroue_com_commun/accesseur/AccesseurUtilisateur.php");
session_start();
//echo "<script>alert('my nama jeff')</script>";
print_r($_SESSION);
if(isset($_SESSION['page-modifier']) && $_SESSION['page-modifier'] == "modifier-compte")
{
    session_abort();
    $page->titre = "Modifier vos informations du compte";
    afficherEntete($page);
    afficherPageCompte($page);
}

if (isset($_SESSION['page-modifier']) && $_SESSION['page-modifier'] == "modifier-info")
{
    session_abort();
    $page->titre = "Modifier vos informations personnelles";
    afficherEntete($page);
    afficherPageInfo($page);
}


?>