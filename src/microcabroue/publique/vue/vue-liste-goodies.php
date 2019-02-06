<?php
/**
 * Created by PhpStorm.
 * User: xela
 * Date: 31/01/19
 * Time: 12:34 PM
 */
include_once "../../commun/vue/fragment/entete-fragment.php";
include_once "../../commun/vue/fragment/pied-de-page-fragment.php";
include_once "../../commun/vue/fragment/a-cote-fragment.php";



$page = (object)
[
    "style" => "publique/decoration/liste-goodies.css",
    "titre" => "Boutique",
    "titrePrincipal" => "Boutique",
    "itemMenuActif" => "boutique",
];


function afficherPage($page = null){

// En cas d'erreur avec le paramètre $page, un objet $page vide est créé.
if(!is_object($page)) $page = (object)[];

afficherEntete($page);
?>
    <div class="conteneur-boutique">
        <div class="col-3">
            <div class="conteneur-categories-liste-goodies ">
            <h1 class="text-center">Categorie</h1>
            <ul class="liste-categorie-goodies">
                <?php
                /** @var CategorieGoodie $categorie */
                foreach($page->listeCategorieGoodies as $categorie){
                    echo"<a href=\"#\" class=\"lien-liste-categorie-goodies\">
                        ".$categorie->getLibelle()."
                    <span class=\"badge-liste-categorie-goodies\">?</span>
                </a>";
                    }
                ?>

            </ul>
        </div>
        </div>
    <div class="conteneur col-9">
        <h1 >Notre boutique</h1>
    <div class="ligne">
        <?php
        for ($i = 1; $i <= 6; $i++) {


            ?>
            <div class="carte-goodie col-3">
                <img class="carte-image-goodie" src="data:image/jpeg;base64,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" alt="Card image cap">
                <div class="carte-goodie-corp">
                    <h5 class="carte-goodie-titre">Nom du produit</h5>
                    <p class="carte-goodie-texte">55$</p>
                    <p class="carte-goodie-texte">Description du produit</p>
                    <a href="boutique/goodie/" >détails</a>
                    <a href="#" class="bouton-validation">Ajouter au panier</a>
                </div>
            </div>

            <?php

        }
        ?>



    </div>
        <nav aria-label="Page navigation goodies">
            <ul class="pagination-liste-goodies">
                <li class="objet-pagination">
                    <a class="lien-pagination" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="objet-pagination"><a class="page-link" href="#">1</a></li>
                <li class="objet-pagination"><a class="page-link" href="#">2</a></li>
                <li class="objet-pagination"><a class="page-link" href="#">3</a></li>
                <li class="objet-pagination">
                    <a class="lien-pagination" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    </div>
    <?php

    afficherPiedDePage($page);

}
require_once("../../../microcabroue_publique/action/action-liste-goodies.php");

/*afficherPage($page);*/
