<?php
/**
 * Created by PhpStorm.
 * User: xela
 * Date: 14/03/19
 * Time: 1:53 PM
 */

require_once(CHEMIN_SRC_DEV."microcabroue_com_commun/modele/Goodie.php");
require_once(CHEMIN_SRC_DEV."microcabroue_com_commun/accesseur/AccesseurEntiteGoodie.php");

$accesseurEntiteGoodie = new AccesseurEntiteGoodie();

if(isset($_GET['categorie'])){

    $listeGoodies =$accesseurEntiteGoodie->recupererListeEntiteGoodieParCategorie($_GET['categorie']);
    /** @var Goodie $goodie */
    foreach($listeGoodies as $goodie) {

        echo " <div class=\"carte-goodie col-3\">
                    <a href=\"boutique/goodie/" . $goodie->getId() . "\" >
                        <img class=\"carte-image-goodie\" src=\"goodie-image/goodie_" . $goodie->getId() . ".jpeg/\" alt=\"Image du goodie\" onkeyup=''>
                    </a>
                <div class=\"carte-goodie-corp\">
                    <h5 class=\"carte-goodie-titre\">" . $goodie->getNomFr() . "</h5>
                    <p class=\"carte-goodie-texte\">" . $goodie->getPrix() . " $</p>
                    <p class=\"carte-goodie-texte\">" . $goodie->getDescriptionFr() . "</p>
                    <a href=\"boutique/ajouter-panier/" . $goodie->getId() . "\" class=\"bouton-validation\">Ajouter au panier</a>
                </div>
            </div>";
    }
}else{

    $listeGoodies =$accesseurEntiteGoodie->recupererListeEntiteGoodie();
    /** @var Goodie $goodie */
    foreach($listeGoodies as $goodie) {

        echo " <div class=\"carte-goodie col-3\">
                    <a href=\"boutique/goodie/" . $goodie->getId() . "\" >
                        <img class=\"carte-image-goodie\" src=\"goodie-image/goodie_" . $goodie->getId() . ".jpeg/\" alt=\"Image du goodie\" onkeyup=''>
                    </a>
                <div class=\"carte-goodie-corp\">
                    <h5 class=\"carte-goodie-titre\">" . $goodie->getNomFr() . "</h5>
                    <p class=\"carte-goodie-texte\">" . $goodie->getPrix() . " $</p>
                    <p class=\"carte-goodie-texte\">" . $goodie->getDescriptionFr() . "</p>
                    <a href=\"boutique/ajouter-panier/" . $goodie->getId() . "\" class=\"bouton-validation\">Ajouter au panier</a>
                </div>
            </div>";
    }
}