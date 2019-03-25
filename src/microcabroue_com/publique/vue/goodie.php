<?php
require_once ($_SERVER['CONFIGURATION_COMMUN']);
require_once (CHEMIN_SRC_DEV."microcabroue_com/commun/vue/fragment/entete-fragment.php");
require_once (CHEMIN_SRC_DEV."microcabroue_com/commun/vue/fragment/pied-de-page-fragment.php");
require_once (CHEMIN_SRC_DEV."microcabroue_com/commun/vue/fragment/a-cote-fragment.php");

$page = (object)
[
    "style" => "../../publique/decoration/goodie.css",
    "titre" => "Goudies",
    "titrePrincipal" => "Goudies",
    "itemMenuActif" => "boutique",
    "navigationRetourURL" => "",
    "navigationRetourTitre'" => "",
    "isNavigationRetour" => false,
    "goodie" => null,
];


function afficherPage($page = null){


    afficherEntete($page);


?> 

<div class="col-md-12">

<div class="row">
    <div class="col-md-5">
        <img class="carte-image-goodie" src="<?= LIEN_DOMAINE?>publique/illustration/goodie-image/goodie_<?= $page->goodie->getId()?>.jpeg">
    </div>
    
    <div class="col-md-7">

        <h6 class="carte-goodie-texte"><?= $page->goodie->getDescriptionFr()?></h6> 
        <h5 class="carte-goodie-titre"><?= $page->goodie->getNomFr()?></h5>
        <h5 class="carte-goodie-texte"><?= $page->goodie->getPrix()?> $</h5>
        <h5 class="carte-goodie-texte"><?= $page->goodie->getId()?></h5>
        <a href="<?=LIEN_DOMAINE?>boutique/ajouter-panier/<?= $page->goodie->getId()?>" class="bouton-validation">Ajouter au panier</a>

    </div>
   
</div>
</div>


<?php
    afficherPiedDePage($page);

}
require_once(CHEMIN_CODE ."microcabroue_com_publique/action/action-goodie.php");


