<?php
include_once "../../commun/vue/fragment/entete-fragment.php";
include_once "../../commun/vue/fragment/pied-de-page-fragment.php";
include_once "../../commun/vue/fragment/a-cote-fragment.php";



$page = (object)
[
   "style" => "publique/decoration/accueil.css",
    "titre" => "ça Broue !",
    "titrePrincipal" => "ça Broue !",
    "itemMenuActif" => "accueil",
];

function afficherPage($page = null){

// En cas d'erreur avec le paramètre $page, un objet $page vide est créé.
    if(!is_object($page)) $page = (object)[];

    afficherEntete($page);
    ?>
    <section id="accueil" class="large">
        <article class="article-image">
            <h1>Ça Broue</h1>
            <hr class="separateur-accueil">
            <p>Notre mission est d’offrir des bières uniques brassées avec passion et par la suite, donner une occasion de la déguster avec une vaste sélection d'événements.</p>
            <a class='bouton-validation' id="biere-bouton" type='submit' href='<?=LIEN_DOMAINE?>biere'>Biere</a>
        </article>
        <div >
            <img class= "image-accueil" src= "publique/illustration/accueil-image/accueil.jpg" width= "100%" style="transform: translateY(0px)">
        </div>
    </section>
    <section class="boutique">
        <article class="article-boutique">
            <h1>Vente de Goodies</h1>
            <hr class="separateur-boutique">
            <a class='bouton-validation' id="boutique-bouton" type='submit' href='<?=LIEN_DOMAINE?>boutique'>Boutique</a>
            <p>Poster, Vêtement, Buck & Plus</p>

        </article>
        <div >
            <img class= "image-boutique" src= "publique/illustration/accueil-image/boutique.jpeg" width= "100%" style="transform: translateY(0px)">
        </div>
    </section>
    <?php

    afficherACote($page);

    ?>


    <?php

    afficherPiedDePage($page);

}

afficherPage($page);
