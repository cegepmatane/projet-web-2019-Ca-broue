<?php
require_once("../../commun/vue/fragment/entete-fragment.php");
require_once("../../commun/vue/fragment/pied-de-page-fragment.php");
require_once("../../../microcabroue_com_commun/modele/Utilisateur.php");

$page = (object)
[
    "style" => "publique/decoration/inscription.css",
    "titre" => "inscription",
    "isPremiereEtape" => true,
    "isSecondeEtape" => false,
    "isEnErreur" => false,
    "ErreurActive" => ""
];

function afficherPremiereEtape($utilisateur, $page = null)
{
    ?>
    <div class="conteneur-inscription">
        <form method="post">
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
                <input type="password" class="controle-formulaire" id="confirmation-mot-de-passe"
                       name="confirmation-mot-de-passe">
            </div>
            <!-- Prochaine etape -->
            <button type="submit" class="bouton bouton-primaire" name="action-aller-seconde-etape" value="naviguer">
                Poursuivre
            </button>
        </form>
    </div>
    <?php
}

function afficherDeuxiemeEtape($utilisateur, $page = null)
{
    ?>
    <div class="conteneur-inscription">
        <form method="post">
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
                <input type="code-postal" class="controle-formulaire" id="code-postal" name="code_postal"
                       value=<?= $utilisateur->getCode_postal(); ?>>
            </div>
            <!-- vile -->
            <div class="groupe-formulaire">
                <label for="ville">Ville</label>
                <input type="ville" class="controle-formulaire" id="ville" name="ville"
                       value=<?= $utilisateur->getVille(); ?>>
            </div>
            <!-- condition d'utilisation -->
            <div class="groupe-formulaire bouton-cocher">
                <label class="etiquette-bouton-cocher">
                    <input class="saisie-bouton-cocher" type="checkbox" name="accepter-condition" value="coche">
                    J'accepte les <a href="#">conditions d'utilisations</a>
            </div>
            <!-- finaliser ou revenir-->
            <button type="submit" class="bouton bouton-primaire" name="action-aller-premiere-etape" value="naviguer">
                Revenir
            </button>
            <button type="submit" class="bouton bouton-primaire" name="action-inscrire" value="inscrire">S'inscrire
            </button>
        </form>
    </div>

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

function afficherPage($utilisateur, $page = null)
{
    if (!is_object($page)) $page = (object)[];
    afficherEntete($page);
    if ($page->isPremiereEtape ?? false) {
        if ($page->isEnErreur == true) {
            afficherErreur($page);
        }
        afficherPremiereEtape($utilisateur, $page);
    } elseif ($page->isSecondeEtape ?? false) {
        if ($page->isEnErreur == true) {
            afficherErreur($page);
        }
        afficherDeuxiemeEtape($utilisateur, $page);
    }
    afficherPiedDePage($page);
}

require_once("../../../microcabroue_publique/action/action-inscription.php");
?>