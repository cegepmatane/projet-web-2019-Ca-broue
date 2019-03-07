<?php 
require_once ($_SERVER['CONFIGURATION_COMMUN']);
require_once(CHEMIN_SRC_DEV . "microcabroue/commun/vue/fragment/entete-fragment.php");
require_once(CHEMIN_SRC_DEV . "microcabroue/commun/vue/fragment/pied-de-page-fragment.php");

$page = (Object)
[
   // "style" => "utilisateur/decoration/mon-compte.css",
    "titre" => "Mon compte"
];


function afficherPage($page = null, $utilisateur = null)
{
    if (!is_object($page)) $page = (object)[];
    afficherEntete($page);
    ?>
        <div class='container'>
            <h2>Bonjour <?=$utilisateur->getPrenom()?></h2>
            <div class='container' id="information-compte">
                <h4>Informations sur le compte</h4>
                <p>Nom d'utilisateur: <?=$utilisateur->getPseudo()?>
                <p>Mot de Passe: <?=$utilisateur->getPseudo()?>
                <p>Adresse email: <?$utilisateur->getMail()?>
                <a class='button'>Modifier</a>
            </div>
            <div class="container" id="information-personnelle">
                <h4>Informations personnelles</h4>
                <p>Nom: <?=$utilisateur->getNom()?></p>
                <p>Prenom: <?=$utilisateur->getPrenom()?></p>
                <p>Adresse: <?=$utilisateur->getAdresse_postal()?></p>
                <p>Code postal: <?=$utilisateur->getCode_postal()?></p>
                <p>Ville: <?=$utilisateur->getVille()?></p> 
                <a class='button'>Modifier</a>
            </div>    

        </div>
    <?php
    afficherPiedDePage($page);

}

afficherPage($page);


?>