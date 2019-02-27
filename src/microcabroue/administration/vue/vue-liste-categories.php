<?php
/**
 * Created by PhpStorm.
 * User: xela
 * Date: 27/02/19
 * Time: 2:44 PM
 */

require_once ($_SERVER['CONFIGURATION_COMMUN']);
include_once "fragment/entete-fragment.php";
include_once "fragment/liste-fragment.php";
include_once "fragment/pied-de-page-fragment.php";


$page = (object)
[
    "titre" => "Gestion des catégories",
    "titrePrincipal" => "Panneau d'adminstration - Ça Broue !",
    "type" => "categorie",
];

function afficherPage($page = null){
    if(!is_object($page))
        $page = (object)[];

    afficherEntete($page);

    if(isset($page->listeCategorieGoodies)){
        /** @var CategorieGoodie $categorie */
        foreach($page->listeCategorieGoodies as $categorie){
            ?>

            <div>
                <form method="post">
                    <?= $categorie->getLibelleFr(); ?>
                    <a href="vue-modifier-<?= $page->type; ?>.php?id=<?= $categorie->getId();?>" class="bouton bouton-bleu">Modifier</a>

                    <input type="hidden" name="id" value="<?= $categorie->getId(); ?>">
                    <button class="bouton bouton-rouge" type="submit" name="action-modifier" value="suppression">Supprimer</button>
                </form>
            </div>

            <?php
        }
    }

    afficherPiedDePage($page);
}

//afficherPage($page);
require_once (CHEMIN_CODE."microcabroue_com_administration/action/action-liste-categorie.php");