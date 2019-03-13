<?php
require_once(CHEMIN_SRC_DEV . "microcabroue_com_commun/accesseur/AccesseurUtilisateur.php");

//echo "<script>alert('my nama jeff')</script>";
print_r($_POST);

if(isset($_POST['modifier']) && $_POST['modifier'] == "modifier-compte")
{
    $page->titre = "Modifier vos informations du compte";
    afficherPageCompte($page);
}

if (isset($_POST['modifier']) && $_POST['modifier'] == "modifier-info")
{
    $page->titre = "Modifier vos informations personnelles";
    afficherPageInfo($page);
}


?>