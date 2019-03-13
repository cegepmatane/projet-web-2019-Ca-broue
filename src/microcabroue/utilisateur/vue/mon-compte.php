<?php 
require_once ($_SERVER['CONFIGURATION_COMMUN']);
require_once(CHEMIN_SRC_DEV . "microcabroue/commun/vue/fragment/entete-fragment.php");
require_once(CHEMIN_SRC_DEV . "microcabroue/commun/vue/fragment/pied-de-page-fragment.php");

$page = (Object)
[
    "style" => "../microcabroue/utilisateur/decoration/mon-compte.css",
    "titre" => "Mon compte"
];

afficherEntete($page);
function afficherPage($page = null, $utilisateur = null)
{
    if (!is_object($page)) $page = (object)[];
    
   
    ?>
    <h2 class="titre">Bonjour <?=$utilisateur->getPrenom()?></h2> 
        
            <div class='conteneur' id="information-compte">
                <h4>Informations sur le compte</h4>
                <p>Nom d'utilisateur: <?=$utilisateur->getPseudo()?>
                <p>Mot de Passe: *********
                <p>Adresse email: <?=$utilisateur->getMail()?></p>
                <form method="post">
                <input type="hidden" name="id" value="<?= $utilisateur->getId()?>">
                <input type="hidden" name="type-modification" value="info-compte">
                <button type="submit" name="modifier" class="bouton bouton-bleu" value="modifier-compte">Modifier</button>
                </form>
                
            </div>

            <div class="conteneur" id="information-personnelle">
                <h4>Informations personnelles</h4>
                <p>Nom: <?=$utilisateur->getNom()?></p>
                <p>Prenom: <?=$utilisateur->getPrenom()?></p>
                <p>Adresse: <?=$utilisateur->getAdresse_postal()?></p>
                <p>Code postal: <?=$utilisateur->getCode_postal()?></p>
                <p>Ville: <?=$utilisateur->getVille()?></p>  
                <form method="post">
                <input type="hidden" name="id" value="<?= $utilisateur->getId()?>">
                <input type="hidden" name="type-modification" value="info-personnelle">
                <button type="submit" name="modifier" class="bouton bouton-bleu" value="modifier-info">Modifier</button>
                </form>
            </div>    

        
    <?php
    afficherPiedDePage($page);

}


Require_once(CHEMIN_SRC_DEV . "microcabroue_com_utilisateur/action/mon-compte.php");

?>