<?php
/**
 * Created by PhpStorm.
 * User: xela
 * Date: 17/03/19
 * Time: 5:02 PM
 */

include_once "fragment/entete-fragment.php";
include_once "fragment/pied-de-page-fragment.php";

$page = (object)
[
    "titre" => "Historiques des transactions",
];

function afficherPage($page = null){
    if(!is_object($page))
        $page = (object)[];

    afficherEntete($page);

    if (!isset($page->listeTransactions)){
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
                foreach ($page->listeTransactions as $transaction) {

                    ?>
                    <tr>
                      <!--  <th scope="row"><?/*= $stats['goodie']->getNomFr()*/?> </th>
                        <td><?/*= $stats['sum_prix'] */?> $</td>
                        <td><?/*= $stats['sum_quantite'] */?></td>
                        <td><?/*= $stats['nb_vente'] */?></td>-->
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

require_once (CHEMIN_CODE."microcabroue_com_administration/action/action-liste-transaction.php");

?>