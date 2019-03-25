<?php 
require_once ($_SERVER['CONFIGURATION_COMMUN']);
require_once(CHEMIN_SRC_DEV . "microcabroue/commun/vue/fragment/entete-fragment.php");
require_once(CHEMIN_SRC_DEV . "microcabroue/commun/vue/fragment/pied-de-page-fragment.php");

$page = (Object)
[
    "style" => "../microcabroue/utilisateur/decoration/modifier-info.css",
    "titre" => "",
    "isEnErreur" => false,
    "ErreurActive" => ""
]; 


function afficherPageCompte($page = null, $utilisateur = null)
{
    if (!is_object($page)) $page = (object)[];
    if (!is_object($utilisateur)) $utilisateur = (object)[];
    ?>
    <div class="conteneur-modification">
        <form method="post">
        <input type="hidden" class="controle-formulaire" id="nom" name="nom" value=<?= $utilisateur->getNom(); ?>>
        <input type="hidden" class="controle-formulaire" id="prenom" name="prenom" value=<?= $utilisateur->getPrenom(); ?>>
        <input type="hidden" class="controle-formulaire" id="adresse" name="adresse_postal" value=<?= $utilisateur->getAdresse_postal(); ?>>   
        <input type="hidden" class="controle-formulaire" id="code-postal" name="code_postal" value=<?= $utilisateur->getCode_postal(); ?>>
        <input type="hidden" class="controle-formulaire" id="ville" name="ville" value=<?= $utilisateur->getVille(); ?>>
        <!-- nom utilisateur -->
            <div class="groupe-formulaire">
                <label for="nom-utilisateur">Nom d'utilisateur</label>
                <input class="controle-formulaire" id="pseudo" name="pseudo" value=<?= $utilisateur->getPseudo(); ?>>
            </div>
            <!-- addresse -->
            <div class="groupe-formulaire">
                <label for="email">Adresse mail</label>
                <input type="email" class="controle-formulaire" id="email" name="mail"
                       value=<?= $utilisateur->getMail(); ?>>
            </div>
            <!-- Mot de passe -->
            <div class="groupe-formulaire">
                <label for="mot-de-passe">Mot de passe</label>
                <input type="password" class="controle-formulaire" id="mot-de-passe" name="mot_passe">
            </div>
            <!-- confirmer Mot de passe -->
            <div class="groupe-formulaire">
                <label for="confirmation-mot-de-passe">Confirmer le mot de passe</label>
                <input type="password" class="controle-formulaire" id="confirmation-mot-de-passe" name="confirmation-mot-de-passe">
            </div>
            <button type="submit" class="bouton bouton-primaire" name="enregistrer" value="true">Enregistrer
            </button>
</form>
    
    <?php


}

function afficherPageInfo($page = null, $utilisateur = null)
{
    if (!is_object($page)) $page = (object)[];
    if (!is_object($utilisateur)) $utilisateur = (object)[];
    ?>
    <div class="conteneur-modification">
        <form method="post">
        <input class="controle-formulaire"  type="hidden" id="pseudo" name="pseudo" value=<?= $utilisateur->getPseudo(); ?>>
        <input type="hidden" class="controle-formulaire" id="email" name="mail"
                       value=<?= $utilisateur->getMail(); ?>>     
        <!-- nom-->
             <div class="groupe-formulaire">
                <label for="nom">Nom</label>
                <input type="nom" class="controle-formulaire" id="nom" name="nom" value=<?= $utilisateur->getNom(); ?>>
            </div>
            <!-- Prenom -->
            <div class="groupe-formulaire">
                <label for="prenom">Prénom</label>
                <input type="prenom" class="controle-formulaire" id="prenom" name="prenom"
                       value=<?= $utilisateur->getPrenom(); ?>>
            </div>
            <!-- Adresse -->
            <div class="groupe-formulaire">
                <label for="adresse">Adresse</label>
                <input type="adresse" class="controle-formulaire" id="adresse" name="adresse_postal"
                       value=<?= $utilisateur->getAdresse_postal(); ?>>
            </div>
            <!-- code postal -->
            <div class="groupe-formulaire">
                <label for="code-postal">Code postal</label>
                <input type="code-postal" class="controle-formulaire" id="code-postal" name="code_postal" value=<?= $utilisateur->getCode_postal(); ?>>
            </div>
            <!-- vile -->
            <div class="groupe-formulaire">
                <label for="ville">Ville</label>
                <input type="ville" class="controle-formulaire" id="ville" name="ville"
                       value=<?= $utilisateur->getVille(); ?>>
            </div>
            <button type="submit" class="bouton bouton-primaire" name="enregistrer" value="true">Enregistrer
            </button>
        </form>
    <?php
}
function afficherErreur($page)
{
    ?>
    <div id="message-erreur">
        <strong>Attention!</strong> <?= $page->ErreurActive ?>
    </div>
    <?php
}


Require_once(CHEMIN_SRC_DEV . "microcabroue_com_utilisateur/action/modifier-info.php");


?>