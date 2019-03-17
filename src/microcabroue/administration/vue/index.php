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
        echo"<p>Erreur dans le chargement des statistiques</p>";
        return;
    }
    ?>
    <hr>
    <br>
    <div class="row">
        <hr>

        <div class="col-2 ">
            <br/>
            <h4 class="d-flex justify-content-center">Statistique par goodies</h4>

        </div>
        <div class="col-6">

            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Goodies</th>
                    <th scope="col">CA total </th>
                    <th scope="col">Ventes total </th>
                </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($page->listeStatsParGoodie as $stats) {

                        ?>
                        <tr>
                            <th scope="row"><?= $stats['id_goodie'] ?> (TODO mettre le nom )</th>
                            <td><?= $stats['sum_prix'] ?> €</td>
                            <td><?= $stats['sum_quantite'] ?></td>
                        </tr>

                        <?php
                    }
                        ?>
                </tbody>
            </table>
        </div>
        <div class="col-4"> </div>

    </div>
    <hr>
    <br>
    <div class="row">

        <div class="col-2 ">
            <br/>
            <h4 class="d-flex justify-content-center">Statistique par catégories</h4>

        </div>
        <div class="col-6">

            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Categorie</th>
                    <th scope="col">Ventes total </th>
                    <th scope="col">CA total </th>
                    <th scope="col">Vente ce mois</th>
                    <th scope="col">CA ce mois</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">Categorie 1</th>
                    <td><?= rand() ?></php></td>
                    <td><?= rand() ?></php> €</td>
                    <td><?= rand() ?></php></td>
                    <td><?= rand() ?></php> €</td>

                </tr>
                <tr>
                    <th scope="row">Categorie 2</th>
                    <td><?= rand() ?></php></td>
                    <td><?= rand() ?></php> €</td>
                    <td><?= rand() ?></php></td>
                    <td><?= rand() ?></php> €</td>

                </tr>
                <tr>
                    <th scope="row">Categorie 3</th>
                    <td><?= rand() ?></php></td>
                    <td><?= rand() ?></php> €</td>
                    <td><?= rand() ?></php></td>
                    <td><?= rand() ?></php> €</td>

                </tr>
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