<?php 
require_once ($_SERVER['CONFIGURATION_COMMUN']);
require_once(CHEMIN_SRC_DEV . "microcabroue/commun/vue/fragment/entete-fragment.php");
require_once(CHEMIN_SRC_DEV . "microcabroue/commun/vue/fragment/pied-de-page-fragment.php");

$page = (Object)
[
   // "style" => "utilisateur/decoration/inscription.css",
    "titre" => "Mon compte"
];


function afficherPage($page = null)
{
    if (!is_object($page)) $page = (object)[];
    afficherEntete($page);
    ?>
    
    <?php
    afficherPiedDePage($page);

}

afficherPage($page);


?>