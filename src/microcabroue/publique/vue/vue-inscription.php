<?php 
require_once("../../commun/vue/fragment/entete-fragment.php");
require_once("../../commun/vue/fragment/pied-de-page-fragment.php");

$page = (object)
[
    "titre" => "inscription",
    "isPremiereEtape" => true,
    "isSecondeEtape" => false
];

function afficherPremiereEtape($page = null)
{?>
 <form>   
<!-- nom utilisateur -->
<div class="form-group">
<label for="nom-utilisateur">Nom d'utilisateur</label>
<input class="form-control" id="nom-utilisateur">
</div>
<!-- addresse -->
<div class="form-group">
<label for="email">Adresse mail</label>
<input type="email" class="form-control" id="email">
</div>
<!-- Mot de passe -->
<div class="form-group">
<label for="mot-de-passe">Mot de passe</label>
<input type="password" class="form-control" id="mot-de-passe">
</div>
<!-- confirmer Mot de passe -->
<div class="form-group">
<label for="mot-de-passe">Confirmer le mot de passe</label>
<input type="mot-de-passe" class="form-control" id="mot-de-passe">
</div>
<!-- Prochaine etape -->
<button type="submit" class="btn btn-primary">Poursuivre</button>
</form>
<?php 
}
function afficherDeuxiemeEtape($page = null)
{
?>
<form>   
<!-- nom-->
<div class="form-group">
<label for="nom"></label>
<input type="nom" class="form-control" id="nom">
</div>
<!-- Prenom -->
<div class="form-group">
<label for="prenom"></label>
<input type="prenom" class="form-control" id="prenom">
</div>
<!-- Adresse -->
<div class="form-group">
<label for="adresse"></label>
<input type="adresse" class="form-control" id="adresse">
</div>
<!-- code postal -->
<div class="form-group">
<label for="code-postal"></label>
<input type="code-postal" class="form-control" id="code-postal">
</div>
<!-- vile -->
<div class="form-group">
<label for="ville"></label>
<input type="ville" class="form-control" id="ville">
</div>
<!-- condition d'utilisation -->
<div class="form-group form-check">
<label class="form-check-label">
<input class="form-check-input" type="checkbox"> J'accepte les <a href="#">conditiond d'utilisations
<!-- finaliser -->
<button type="submit" class="btn btn-primary">S'inscrire</button>
</form>


<?php
}

function afficherPage($page = null)
{
    if(!is_object($page)) $page = (object)[];

    afficherEntete($page);

    if($page->isPremiereEtape == true)
    {
        afficherPremiereEtape($page);
    }
    if($page->isSecondeEtape == true)
    {
        afficherDeuxiemeEtape($page);
    }

    afficherPiedDePage($page);
}

afficherPage($page);
?>