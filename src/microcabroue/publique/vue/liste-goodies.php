<?php
/**
 * Created by PhpStorm.
 * User: xela
 * Date: 31/01/19
 * Time: 12:34 PM
 */
require_once "../../commun/vue/fragment/entete-fragment.php";
require_once "../../commun/vue/fragment/pied-de-page-fragment.php";
require_once "../../commun/vue/fragment/a-cote-fragment.php";



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
                        echo"<a id='".'categorie_'.$categorie->getId()."' onclick=\"demanderAChargerGoodies(id_categorie=".$categorie->getId().")\" class=\"lien-liste-categorie-goodies ";
                        if(isset($page->categorieSelectionnee)&& $categorie->getId() == $page->categorieSelectionnee){
                            echo "active";
                        }
                        echo   "\">".$categorie->getLibelleFr()."
                    <!--<span class=\"badge-liste-categorie-goodies\">?</span>TODO compter le nombre de goodie par categorie-->
                </a>";
                    }
                    ?>

                </ul>
            </div>
        </div>
        <div class="conteneur col-9">
            <h1 >Notre boutique</h1>
            <div id="conteneur-goodie" class="ligne">
                <?php
                /** @var Goodie $goodie */
                foreach($page->listeGoodies as $goodie){

                    echo" <div class=\"carte-goodie col-3\">
                    <a href=\"".LIEN_DOMAINE."boutique/goodie/". $goodie->getId()."\" >
                        <img class=\"carte-image-goodie\" src=\"goodie-image/goodie_". $goodie->getId() .".jpeg/\" alt=\"Image du goodie\">
                    </a>
                <div class=\"carte-goodie-corp\">
                    <h5 class=\"carte-goodie-titre\">". $goodie->getNomFr() ."</h5>
                    <p class=\"carte-goodie-texte\">". $goodie->getPrix() ." $</p>
                    <p class=\"carte-goodie-texte\">". $goodie->getDescriptionFr() ."</p>
                    <a href=\"boutique/ajouter-panier/".$goodie->getId()."\" class=\"bouton-validation\">Ajouter au panier</a>
                </div>
            </div>";
                }
                ?>

                <script type="text/javascript" src="publique/lib/Ajax.js"></script>
                <script type="text/javascript">
                    url=<?php echo "'".LIEN_DOMAINE."' +"; ?> 'publique/vue/fragment/fragment-charger-goodie.php';
                </script>
                <script type="text/javascript" src="publique/js/liste-goodies.js"></script>


            </div>
        </div>
    </div>

    <?php

    afficherPiedDePage($page);

}
require_once(CHEMIN_CODE."microcabroue_publique/action/action-liste-goodies.php");

