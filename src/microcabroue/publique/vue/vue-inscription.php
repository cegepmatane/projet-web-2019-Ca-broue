<?php 
require_once("../../commun/vue/fragment/entete-fragment.php");
require_once("../../commun/vue/fragment/pied-de-page-fragment.php");

$page = (object)
[
    "style" => "publique/decoration/inscription.css",
    "titre" => "inscription",
    "isPremiereEtape" => true,
    "isSecondeEtape" => false
];

function afficherPremiereEtape($page = null)
{?>
<div class="conteneur-inscription">
 <form method="post">    
<!-- nom utilisateur -->
<div class="groupe-formulaire">
<label for="nom-utilisateur">Nom d'utilisateur</label>
<input class="controle-formulaire" id="nom-utilisateur">
</div>
<!-- addresse -->
<div class="groupe-formulaire">
<label for="email">Adresse mail</label>
<input type="email" class="controle-formulaire" id="email">
</div>
<!-- Mot de passe -->
<div class="groupe-formulaire">
<label for="mot-de-passe">Mot de passe</label>
<input type="password" class="controle-formulaire" id="mot-de-passe">
</div>
<!-- confirmer Mot de passe -->
<div class="groupe-formulaire">
<label for="mot-de-passe">Confirmer le mot de passe</label>
<input type="mot-de-passe" class="controle-formulaire" id="mot-de-passe">
</div>
<!-- Prochaine etape -->
<button type="submit" class="bouton bouton-primaire" name="action-aller-seconde-etape">Poursuivre</button>
</form>
</div>
<?php 
}
function afficherDeuxiemeEtape($page = null)
{
?>
<div class="conteneur-inscription">
<form method="post">   
<!-- nom-->
<div class="groupe-formulaire">
<label for="nom">Nom</label>
<input type="nom" class="controle-formulaire" id="nom">
</div>
<!-- Prenom -->
<div class="groupe-formulaire">
<label for="prenom">Prénom</label>
<input type="prenom" class="controle-formulaire" id="prenom">
</div>
<!-- Adresse -->
<div class="groupe-formulaire">
<label for="adresse">Adresse</label>
<input type="adresse" class="controle-formulaire" id="adresse">
</div>
<!-- code postal -->
<div class="groupe-formulaire">
<label for="code-postal">Code postal</label>
<input type="code-postal" class="controle-formulaire" id="code-postal">
</div>
<!-- vile -->
<div class="groupe-formulaire">
<label for="ville">Ville</label>
<input type="ville" class="controle-formulaire" id="ville">
</div>
<!-- condition d'utilisation -->
<div class="groupe-formulaire bouton-cocher">
<label class="etiquette-bouton-cocher">
<input class="saisie-bouton-cocher" type="checkbox"> J'accepte les <a href="#">conditiond d'utilisations
<!-- finaliser ou revenir-->
<button type="submit" class="bouton bouton-primaire" name="action-aller-premiere-etape">Revenir</button>
<button type="submit" class="bouton bouton-primaire" name="action-inscrire">S'inscrire</button>
</div>
</form>


<?php
}

function afficherPage($page = null)
{
    if(!is_object($page)) $page = (object)[];

    afficherEntete($page);

    if($page->isPremiereEtape ?? false)
    {
        afficherPremiereEtape($page);
    }
    elseif($page->isSecondeEtape ?? false)
    {
        afficherDeuxiemeEtape($page);
    }

    afficherPiedDePage($page);
}

require_once("../../../microcabroue_publique/action/action-inscription.php");
?>