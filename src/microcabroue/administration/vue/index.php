<?php
include_once "fragment/entete-fragment.php";
include_once "fragment/pied-de-page-fragment.php";

$page = (object)
[
    "titre" => "Statistique des ventes",
];

function afficherPage($page = null){
    if(!is_object($page))
        $page = (object)[];

    afficherEntete($page);

    if (!isset($page->listeStatsParGoodie)){
        echo"<p>Erreur dans le chargement des statistiques par goodies</p>";
        return;
    }
    ?>
    <hr>
    <br>
    <div class="row">
        <hr>

        <div class="col-2 ">
            <br/>
            <h4 class="d-flex justify-content-center">Statistiques par goodies</h4>

        </div>
        <div class="col-6">

            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Goodies</th>
                    <th scope="col">CA total </th>
                    <th scope="col">Ventes totales </th>
                    <th scope="col">Nombre de commande </th>

                </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($page->listeStatsParGoodie as $stats) {

                        ?>
                        <tr>
                            <th scope="row"><?= $stats['goodie']->getNomFr()?> </th>
                            <td><?= $stats['sum_prix'] ?> $</td>
                            <td><?= $stats['sum_quantite'] ?></td>
                            <td><?= $stats['nb_vente'] ?></td>
                        </tr>

                        <?php
                    }
                        ?>
                </tbody>
            </table>
        </div>
        <div class="col-4"> </div>

    </div>
    <?php
        if (!isset($page->listeStatsParCategorie)){
        echo"<p>Erreur dans le chargement des statistiques par catégorie</p>";
        return;
    }
    ?>
    <hr>
    <br>

    <div class="row">

        <div class="col-2 ">
            <br/>
            <h4 class="d-flex justify-content-center">Statistiques par catégories</h4>

        </div>
        <div class="col-6">

            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Categorie</th>
                    <th scope="col">CA total </th>
                    <th scope="col">Quantité vendu</th>
                    <th scope="col">Nombre de commande </th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($page->listeStatsParCategorie as $stats) {

                    ?>
                    <tr>
                        <th scope="row"><?= $stats['categorie']->getLibelleFr()?> </th>
                        <td><?= $stats['sum_prix'] ?> $</td>
                        <td><?= $stats['sum_quantite'] ?></td>
                        <td><?= $stats['nb_vente'] ?></td>
                    </tr>

                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
        <div class="col-4"> </div>

    </div>


  <!--  <div class="texte-rouge texte-index">
        Si vous ne possèdez pas les droits vous ne devriez pas être ici.
    </div>
-->
    <?php

    afficherPiedDePage($page);
}

require_once (CHEMIN_CODE."microcabroue_com_administration/action/action-index.php");

?>